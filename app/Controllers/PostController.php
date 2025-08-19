<?php

namespace App\Controllers;
use App\Models\PostModel;

class PostController extends BaseController
{
    public function index()
    {
        $postModel = new \App\Models\PostModel();
        $commentModel = new \App\Models\CommentModel();
        $posts = $postModel->findAll();

        foreach($posts as &$post){
            $post['comments'] = $commentModel->getCommentsByPostId($post['id']);
        }

        $data['posts'] = $posts;
        return view('posts/index', $data);
    }
    
    public function create()
    {
        return view('posts/create');
    }

    // Create a new post
    public function save()
    {
        $postModel = new PostModel();

        $imageFile = $this->request->getFile('image');

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $newName = $imageFile->getRandomName();
            $imageFile->move('uploads/', $newName);
        } else {
            $newName = null;
        }
        
        if($this->request->getPost('date') == "" || $this->request->getPost('date') == null){
            $publication_date = date('Y-m-d');
        } else {
            $publication_date = $this->request->getPost('date');
        }

        $postModel->save([
            'title'            => $this->request->getPost('title'),
            'content'          => $this->request->getPost('content'),
            'image'            => $newName,
            'publication_date' => $publication_date
        ]);

        return redirect()->to('/posts')->with('success', 'Post créé avec succès');
    }
}
