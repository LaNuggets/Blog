<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'image', 'publication_date'];
    
    public function getAllPosts()
    {
        return $this->findAll();
    }
}


