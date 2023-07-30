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

    public function getAllArticleWithCategories()
    {
        // $query = $this->db->query("
        //     SELECT articles.id, articles.title, articles.content, articles.created_at, articles.slug,
        //            (
        //                SELECT GROUP_CONCAT(categories.name SEPARATOR ', ') 
        //                FROM article_categories 
        //                JOIN categories ON categories.id = article_categories.category_id
        //                WHERE article_categories.article_id = articles.id
        //            ) as category_names,
        //            (
        //                SELECT GROUP_CONCAT(categories.color SEPARATOR ', ') 
        //                FROM article_categories 
        //                JOIN categories ON categories.id = article_categories.category_id
        //                WHERE article_categories.article_id = articles.id
        //            ) as category_colors
        //     FROM articles
        //     ORDER BY articles.created_at DESC
        // ");

        // return $query->getResultObject();
        return $this->select('articles.id, articles.title, articles.content, articles.created_at, articles.slug')
            ->select('GROUP_CONCAT(categories.name SEPARATOR ", ") as category_names')
            ->select('GROUP_CONCAT(categories.color SEPARATOR ", ") as category_colors')
            ->join('article_categories', 'article_categories.article_id = articles.id', 'left')
            ->join('categories', 'categories.id = article_categories.category_id', 'left')
            ->groupBy('articles.id')
            ->orderBy('articles.created_at', 'DESC')
            ->findAll();
    }

    public function getAllArticleWithCategoriesPaginate()
    {
        return $this->select('articles.id, articles.title, articles.content, articles.created_at, articles.slug')
            ->select('GROUP_CONCAT(categories.name SEPARATOR ", ") as category_names')
            ->select('GROUP_CONCAT(categories.color SEPARATOR ", ") as category_colors')
            ->join('article_categories', 'article_categories.article_id = articles.id', 'left')
            ->join('categories', 'categories.id = article_categories.category_id', 'left')
            ->groupBy('articles.id')
            ->orderBy('articles.created_at', 'DESC');
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
    }
}
