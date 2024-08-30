<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post AS PostModel;
use CodeIgniter\HTTP\ResponseInterface;

class Post extends BaseController
{
    public function index()
    {
        //
    }

    public function create(){
        return view('post');
    }

    public function store(){
        
        $post = new PostModel();

        $post->save([
            'title' => $this->request->getVar('title'),
            'post' =>  $this->request->getVar('post'),
            'user_id' => auth()->id(),
        ]);
        
        return view('post');

    }
}
