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
        //
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
        $this->articleModel->save([
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'slug' => url_title($this->request->getvar('title'), '-', TRUE)
        ]);
        return redirect()->to('/admin');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail',
            'article' => $this->articleModel->getArticle($slug)
        ];

        // jika komik tidak ada
        if (empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('the title of the ' . $slug . ' article does not exist');
        }

        return view('/admin/article/detail', $data);
    }
}
