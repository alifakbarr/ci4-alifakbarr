<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;


class UserManagementController extends BaseController
{
    protected $articleModel, $db, $builder;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();



        $jumlahArtikel = $this->articleModel->countAll();
        $data = [
            'title' => 'Admin | Management User',
            'article' => $this->articleModel->findAll(),
            'jumlahArtikel' => $jumlahArtikel,
            'users' => $query->getResult()
        ];
        return view('admin/profile/index', $data);
    }

    public function detail($id = 0)
    {
        $this->builder->select('users.id as userid, username, email, name,user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();


        $jumlahArtikel = $this->articleModel->countAll();
        $data = [
            'title' => 'Admin | Management Deail User',
            'article' => $this->articleModel->findAll(),
            'jumlahArtikel' => $jumlahArtikel,
            'user' => $query->getRow()
        ];

        if (empty($data['user'])) {
            return redirect()->to('/admin/userManagement');
        }

        return view('admin/profile/detail', $data);
    }
}
