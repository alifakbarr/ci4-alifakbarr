<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;

class PortfolioController extends BaseController
{
    protected $portfolioModel;

    public function __construct()
    {
        $this->portfolioModel = new PortfolioModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Portfolio Management',
            'portfolio' => $this->portfolioModel->orderBy('created_at', 'DESC')->findAll()
        ];
        return view('admin/portfolio/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin | Create Portfolio'
        ];
        return view('admin/portfolio/create', $data);
    }

    public function save()
    {
        $data = [
            'title' => 'Admin | Create Portfolio'
        ];
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required|min_length[4]|max_length[250]',
            'description' => 'required',
            'role' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $role = $this->request->getPost('role');
        $start_at = $this->request->getPost('start_at');
        $finish_at = $this->request->getPost('finish_at');
        $link = $this->request->getPost('link');

        $portfolioModel = new PortfolioModel();
        // save article
        $data = [
            'title' => $title,
            'description' => $description,
            'role' => $role,
            'start_at' => $start_at,
            'finish_at' => $finish_at,
            'link' => $link,
        ];
        // dd($data);
        $portfolioModel->insert($data);
        return redirect()->to('/admin/portfolio')->with('success', 'Article created successfully');
    }

    public function detail($id)
    {
        $portfolio = $this->portfolioModel->getPortfolio($id);
        $data = [
            'title' => 'Admin | Detail portfolio',
            'portfolio' => $portfolio
        ];

        return view('/admin/portfolio/detail', $data);
    }

    public function edit($id)
    {
        $portofolioModel = new PortfolioModel();
        $portfolio = $portofolioModel->getPortfolio($id);


        if ($portfolio === null) {
            // Artikel tidak ditemukan, tangani sesuai kebutuhan (misalnya, tampilkan pesan error atau redirect ke halaman lain)
        }
        $data = [
            'title' => $portfolio['title'],
            'portfolio' => $portfolio,
        ];

        return view('/admin/portfolio/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required|min_length[4]|max_length[250]',
            'description' => 'required',
            'role' => 'required',
        ]);

        // cek validasi
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $role = $this->request->getPost('role');
        $start_at = $this->request->getPost('start_at');
        $finish_at = $this->request->getPost('finish_at');
        $link = $this->request->getPost('link');

        $portfolioModel = new PortfolioModel();
        $portfolioModel->update($id, [
            'title' => $title,
            'description' => $description,
            'role' => $role,
            'start_at' => $start_at,
            'finish_at' => $finish_at,
            'link' => $link,
        ]);

        return redirect()->to('/admin/portfolio');;
    }

    public function destroy($id)
    {
        $this->portfolioModel->delete($id);
        return redirect()->to('/admin/portfolio');
    }
}
