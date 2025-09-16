<?php

namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends BaseController
{
    protected $commentModel;

    public function __construct()
    {
        $this->commentModel = new CommentModel();
    }

    public function index()
    {
        $comments = $this->commentModel->findAll();
        return view('comments/delete', [
            'comments' => $comments
        ]);
    }

    public function save()
    {
        $commentModel = new CommentModel();

        $data = [
            'post_id'      => $this->request->getPost('post_id'),
            'author'       => $this->request->getPost('author'),
            'content'      => $this->request->getPost('content'),
            'comment_date' => date('Y-m-d H:i'),
        ];

        $commentModel->save($data);

        return redirect()->back()->with('success', 'Commentaire ajouté !');
    }

    public function delete($id = null)
    {
        if ($id === null) {
            return redirect()->back()->with('error', 'Aucun ID de commentaire fourni.');
        }

        $comment = $this->commentModel->find($id);

        if (!$comment) {
            return redirect()->back()->with('error', 'Commentaire introuvable.');
        }

        if ($this->commentModel->delete($id)) {
            return redirect()->back()->with('success', 'Commentaire supprimé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la suppression.');
        }
    }
}
