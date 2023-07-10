<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;

class ArticleController extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
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
        $data = [
            'title' => 'Create Article'
        ];
        return view('admin/article/create', $data);
    }

    public function save()
    {
        $data = [
            'title' => 'Create Article'
        ];
        helper(['form']);
        $rules = [
            'title' => 'required|min_length[10]|max_length[50]',
            'content' => 'required',
        ];

        if ($this->validate($rules)) {
            $data = [
                'slug' => url_title($this->request->getvar('title'), '-', TRUE),
                'title' => $this->request->getVar('title'),
                'content' => $this->request->getVar('content'),
            ];

            $this->articleModel->save($data);
            return redirect()->to('/admin/article');
        } else {
            $data['validation'] = $this->validator;
            echo view('/admin/article/create', $data);
        }
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
        $this->articleModel->delete($id);
        return redirect()->to('/admin/article');
    }
}
