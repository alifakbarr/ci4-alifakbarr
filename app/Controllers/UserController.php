<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;
use App\Models\HomeModel;

class UserController extends BaseController
{
    protected $articleModel;
    protected $homeModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->homeModel = new HomeModel();
    }

    public function profile()
    {
        $uri = service('uri');
        $data = [
            'title' => 'My Profile',
            'article' => $this->articleModel->orderBy('created_at DESC')->paginate(10, 'articles'),
            'pager' => $this->articleModel->pager,
            // 'active' => ($uri->getSegment(1) == 'profile')
        ];
        return view('user/profile/profile', $data);
    }
}
