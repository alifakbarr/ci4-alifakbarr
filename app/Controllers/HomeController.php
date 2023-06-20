<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;
use App\Models\Home;

class HomeController extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $jumlahArtikel = $this->articleModel->countAll();

        $data = [
            'title' => 'Home',
            // 'article' => $this->articleModel->findAll(),
            'article' => $this->articleModel->paginate(5, 'articles'),
            'pager' => $this->articleModel->pager,
            'jumlahArtikel' => $jumlahArtikel,
        ];
        return view('home/index', $data);
    }
}
