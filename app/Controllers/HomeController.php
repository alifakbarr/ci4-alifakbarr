<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;
use App\Models\HomeModel;
use App\Library\Globals;

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

        $data = [
            'title' => 'Home',
            'article' => $this->articleModel->orderBy('created_at DESC')->paginate(10, 'articles'),
            'pager' => $this->articleModel->pager,
        ];
        return view('home/index', $data);
    }

    public function articles()
    {

        $data = [
            'title' => 'List Article',
            'article' => $this->articleModel->orderBy('created_at DESC')->paginate(20, 'articles'),
            'pager' => $this->articleModel->pager,
        ];
        return view('home/articles', $data);
    }

    public function signIn()
    {
        return view('auth/signIn');
    }

    public function signUp()
    {
        return view('auth/signUp');
    }
}
