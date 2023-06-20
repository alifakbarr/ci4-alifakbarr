<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;
use App\Models\HomeModel;

class HomeController extends BaseController
{
    protected $articleModel;
    protected $homeModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->homeModel = new HomeModel();
    }

    public function index()
    {
        $jumlahArtikel = $this->articleModel->countAll();

        // d($this->request->getVar('keyword'));
        // search

        $data = [
            'title' => 'Home',
            // 'article' => $this->articleModel->findAll(),
            'article' => $this->articleModel->orderBy('created_at DESC')->paginate(10, 'articles'),
            'pager' => $this->articleModel->pager,
            'jumlahArtikel' => $jumlahArtikel,
        ];
        return view('home/index', $data);
    }

    public function articles()
    {
        $jumlahArtikel = $this->articleModel->countAll();

        $data = [
            'title' => 'List Article',
            'article' => $this->articleModel->orderBy('created_at DESC')->paginate(20, 'articles'),
            'pager' => $this->articleModel->pager,
            'jumlahArtikel' => $jumlahArtikel,
        ];
        return view('home/articles', $data);
    }
}
