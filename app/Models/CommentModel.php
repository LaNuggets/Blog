<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'commentaires';
    protected $primaryKey = 'id';
    protected $allowedFields = ['post_id', 'author', 'content', 'comment_date'];

        
    public function getCommentsByPostId(int $postId)
    {
        return $this->where('post_id', $postId)
            ->orderBy('comment_date', 'ASC')
            ->findAll();
    }
}
