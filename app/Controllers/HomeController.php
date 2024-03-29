<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;
use App\Models\HomeModel;
use App\Library\Globals;
use App\Models\ArticleCategoryModel;
use App\Models\CategoryModel;
use App\Models\PortfolioModel;
use CodeIgniter\HTTP\Request;

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
        helper('url');
        $articleModel = new ArticleModel();

        // search artikel
        $keyword =  $this->request->getVar('keyword');
        if ($keyword) {
            $article = $this->articleModel->search($keyword);
        } else {
            $article = $articleModel->getAllArticleWithCategoriesPaginate()->paginate(1, 'articles');

            // $article = $articleModel->getAllArticleWithCategories();
        }
        $pager = \Config\Services::pager();
        $data = [
            'title' => 'Home',
            // 'article' => $this->articleModel->orderBy('created_at DESC')->paginate(10, 'articles'),
            // 'article' => $article,
            'article' => $article,
            'pager' => $pager,
            // 'pager' => $this->articleModel->pager,
        ];
        return view('home/index', $data);
    }

    public function articles()
    {
        $currentPage = $this->request->getVar('page_articles') ? $this->request->getVar('page_articles') : 1;
        $articleModel = new ArticleModel();

        $article = $articleModel->getAllArticleWithCategoriesPaginate()->paginate(25, 'articles'); // Ganti jumlah data per halaman di sini (misalnya 10)
        // Load pager library
        $pager = \Config\Services::pager();
        $data = [
            'title' => 'List Article',
            'article' =>  $article,
            'pager' => $pager,
            'currentPage' => $currentPage
        ];
        return view('home/articles', $data);
    }

    public function detailArticle($slug)
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

        return view('home/detailArticle', $data);
    }

    public function portfolio()
    {
        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->orderBy('start_at', 'DESC')->findAll();
        $data = [
            'title' => 'Portfolio',
            'portfolio' => $portfolio
        ];
        return view('home/Portfolio', $data);
    }
    public function aboutMe()
    {
        $data = ['title' => 'About Me'];
        return view('home/aboutMe', $data);
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
