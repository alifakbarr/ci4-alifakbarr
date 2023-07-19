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
        // pagination
        $currentPage = $this->request->getVar('page_articles') ? $this->request->getVar('page_articles') : 1;
        $data = [
            'title' => 'Admin | Article Management',
            'article' => $this->articleModel->orderBy('created_at DESC')->paginate(25, 'articles'),
            'pager' => $this->articleModel->pager,
            'currentPage' => $currentPage


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
            'title' => 'required|min_length[10]|max_length[250]',
            'share' => 'required',
            'status' => 'required',
            'categories' => 'required',
            'content' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $share = $this->request->getPost('share');
        $status = $this->request->getPost('status');
        $categories = $this->request->getPost('categories');

        $articleModel = new ArticleModel();
        // save article
        $data = [
            'slug' => url_title($this->request->getvar('title'), '-', TRUE),
            'title' => $title,
            'share' => $share,
            'status' => $status,
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
        $articleModel = new ArticleModel();
        $article = $articleModel->getArticleWithCategories($slug);
        if ($article == true) {
            $title = $article[0]['title'];
        } else {
            $title = 'title not found';
        }

        $data = [
            'title' => $title,
            'article' => $article,
        ];

        // jika komik tidak ada
        if (empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('the title of the ' . $slug . ' article does not exist');
        }

        return view('/admin/article/detail', $data);
    }

    public function edit($slug)
    {
        $articleModel = new ArticleModel();
        $article = $articleModel->getArticle($slug);


        if ($article === null) {
            // Artikel tidak ditemukan, tangani sesuai kebutuhan (misalnya, tampilkan pesan error atau redirect ke halaman lain)
        }

        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        $articleCategoryModel = new ArticleCategoryModel();
        $selectedCategories = $articleCategoryModel->where('article_id', $article['id'])->findAll();

        $data = [
            'title' => $article['title'],
            'article' => $article,
            'selectedCategories' => $selectedCategories,
            'categories' => $categories
        ];

        return view('/admin/article/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required|min_length[10]|max_length[250]',
            'share' => 'required',
            'status' => 'required',
            'content' => 'required',
            'categories' => 'required',
        ]);

        // cek validasi
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $share = $this->request->getPost('share');
        $status = $this->request->getPost('status');
        $categories = $this->request->getPost('categories');
        $slug = url_title($this->request->getVar('title'), '-', true);

        $articleModel = new ArticleModel();
        $articleModel->update($id, [
            'slug' => $slug,
            'title' => $title,
            'share' => $share,
            'status' => $status,
            'content' => $content,
        ]);

        $articleCategoryModel = new ArticleCategoryModel();
        $articleCategoryModel->where('article_id', $id)->delete();

        foreach ($categories as $categoryId) {
            $data = [
                'article_id' => $id,
                'category_id' => $categoryId,
            ];
            $articleCategoryModel->insert($data);
        }

        return redirect()->to('/admin/article');;
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
