<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Category Management',
            'category' => $this->categoryModel->findAll(),
        ];
        return view('admin/category/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin | Create Category'
        ];
        return view('admin/category/create', $data);
    }

    public function save()
    {
        $data = [
            'title' => 'Admin | Create Category'
        ];
        helper(['form']);
        $rules = [
            'name' => 'required|min_length[2]|max_length[20]|is_unique[categorys.name]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'name' => $this->request->getVar('name'),
            ];

            $this->categoryModel->save($data);
            return redirect()->to('/admin/category');
        } else {
            $data['validation'] = $this->validator;
            echo view('/admin/category/create', $data);
        }
    }

    public function edit($id)
    {
        $category = $this->categoryModel->getCategory($id);
        $data = [
            'title' => 'Admin | Edit Category',
            'name' => $category['name'],
            'category' => $this->categoryModel->getCategory($id)
        ];

        return view('/admin/category/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => 'Admin | Edit Category'
        ];
        helper(['form']);
        $rules = [
            'name' => 'required|min_length[2]|max_length[20]|is_unique[categorys.name]',

        ];

        if ($this->validate($rules)) {
            $data = [
                'name' => $this->request->getVar('name'),
            ];

            $this->categoryModel->update(['id' => $id], $data);
            return redirect()->to('/admin/category');
        } else {
            $data['validation'] = $this->validator;
            $data['category'] = $this->categoryModel->getCategory($id);

            echo view('/admin/category/edit', $data);
        }
    }

    public function destroy($id)
    {
        $this->categoryModel->delete($id);
        return redirect()->to('/admin/category');
    }
}
