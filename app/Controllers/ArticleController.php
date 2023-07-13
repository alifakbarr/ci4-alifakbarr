<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleCategoryModel;
use App\Models\ArticleModel;
use App\Models\CategoryModel;

class ArticleController extends BaseController
{
    protected $articleModel;
    protected $categoryModel;
    protected $articleCategoriesModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->articleModel = new ArticleModel();
        $this->articleCategoriesModel = new ArticleCategoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Article Management',
            'article' => $this->articleModel->findAll(),
        ];
        return view('admin/article/index', $data);
    }

    public function create()
    {
        $category = $this->categoryModel->findAll();
        $data = [
            'title' => 'Create Article',
            'category' => $category
        ];
        return view('admin/article/create', $data);
    }

    public function save()
    {
        $data = [
            'title' => 'Create Article'
        ];
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required|min_length[10]|max_length[50]',
            'categories' => 'required',
            'content' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $categories = $this->request->getPost('categories');

        $articleModel = new ArticleModel();
        // save article
        $data = [
            'slug' => url_title($this->request->getvar('title'), '-', TRUE),
            'title' => $title,
            'content' => $content,
        ];
        $articleModel->insert($data);
        $articleId = $articleModel->insertID;

        $articleCategoryModel = new ArticleCategoryModel();

        $categories = $this->request->getVar('categories');
        foreach ($categories as $categoryId) {
            $data = [
                'article_id' => $articleId,
                'category_id' => $categoryId,
            ];

            $articleCategoryModel->insert($data);
        }
        return redirect()->to('/admin/article')->with('success', 'Article created successfully');
    }

    public function detail($slug)
    {
        $article = $this->articleModel->getArticle($slug);
        if ($article == true) {
            $title = $article['title'];
        } else {
            $title = 'title not found';
        }
        $data = [
            'title' => $title,
            'article' => $this->articleModel->getArticle($slug)
        ];

        // jika komik tidak ada
        if (empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('the title of the ' . $slug . ' article does not exist');
        }

        return view('/admin/article/detail', $data);
    }

    public function edit($slug)
    {
        $article = $this->articleModel->getArticle($slug);
        $data = [
            'title' => $article['title'],
            'article' => $this->articleModel->getArticle($slug)
        ];

        return view('/admin/article/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Article'
        ];
        helper(['form']);
        $rules = [
            'title' => 'required|min_length[10]|max_length[50]',
            'content' => 'required',
        ];

        if ($this->validate($rules)) {
            $slug = url_title($this->request->getVar('title'), '-', true);

            $data = [
                'slug' => $slug,
                'title' => $this->request->getVar('title'),
                'content' => $this->request->getVar('content'),
            ];

            $this->articleModel->update(['id' => $id], $data);
            return redirect()->to('/admin/article');
        } else {
            $data['validation'] = $this->validator;
            echo view('/admin/article/edit', $data);
        }
    }

    public function destroy($id)
    {
        $articleModel = new ArticleModel();
        $article = $articleModel->find($id);
        if ($article === null) {
            return redirect()->to('/admin/article');
        }

        $articleCategoryModel = new ArticleCategoryModel();
        $articleCategoryModel->where('article_id', $id)->delete();
        $articleModel->delete($id);

        return redirect()->to('/admin/article');
    }
}
