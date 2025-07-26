<?php

namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends BaseController
{
    public function save()
    {
        $commentModel = new CommentModel();

        $data = [
            'post_id'      => $this->request->getPost('post_id'),
            'author'       => $this->request->getPost('author'),
            'content'      => $this->request->getPost('content'),
            'comment_date' => date('Y-m-d'),
        ];

        $commentModel->save($data);

        return redirect()->back()->with('success', 'Commentaire ajouté !');
    }
}
