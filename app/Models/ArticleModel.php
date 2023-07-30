<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'articles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content', 'slug', 'share', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllArticle()
    {
        $query = $this->db->query("
        SELECT articles.id, articles.title, articles.content, articles.created_at, articles.slug,
               (
                   SELECT GROUP_CONCAT(categories.name SEPARATOR ', ') 
                   FROM article_categories 
                   JOIN categories ON categories.id = article_categories.category_id
                   WHERE article_categories.article_id = articles.id
               ) as category_names,
               (
                   SELECT GROUP_CONCAT(categories.color SEPARATOR ', ') 
                   FROM article_categories 
                   JOIN categories ON categories.id = article_categories.category_id
                   WHERE article_categories.article_id = articles.id
               ) as category_colors
        FROM articles
        ORDER BY articles.created_at DESC
    ");

        return $query->getResultArray();
    }

    public function getArticle($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function categories()
    {
        return $this->belongsToMany(CategoryModel::class, 'article_categories');
        // return $this->belongsToMany(CategoryModel::class, 'article_categories', 'article_id', 'category_id');
    }

    public function getArticleWithCategories($slug)
    {
        $builder = $this->db->table('articles');
        $builder->select('articles.*, categories.name, categories.color');
        $builder->join('article_categories', 'article_categories.article_id = articles.id');
        $builder->join('categories', 'categories.id = article_categories.category_id');
        $builder->where('articles.slug', $slug);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function search($keyword)
    {
        $query = $this->db->query("
            SELECT articles.id, articles.title, articles.content, articles.created_at, articles.slug,
                   (
                       SELECT GROUP_CONCAT(categories.name SEPARATOR ', ') 
                       FROM article_categories 
                       JOIN categories ON categories.id = article_categories.category_id
                       WHERE article_categories.article_id = articles.id
                   ) as category_names,
                   (
                       SELECT GROUP_CONCAT(categories.color SEPARATOR ', ') 
                       FROM article_categories 
                       JOIN categories ON categories.id = article_categories.category_id
                       WHERE article_categories.article_id = articles.id
                   ) as category_colors
            FROM articles
            WHERE articles.title LIKE '%{$keyword}%'
            ORDER BY articles.created_at DESC
        ");
        return $query->getResultArray();

        // $builder = $this->table('articles');
        // $builder->like('title', $keyword);
        // // dd($articles);
        // return $builder;
        // return $query;
        // return $this->table('articles')->like('title', $keyword);
    }
}
