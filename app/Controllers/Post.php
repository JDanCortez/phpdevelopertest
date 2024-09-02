<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post AS PostModel;
use CodeIgniter\HTTP\ResponseInterface;

class Post extends BaseController
{
    public function index()
    {
        $posts = (new PostModel())->orderBy('created_at','DESC')->findAll();
        return view('welcome_message',['posts'=>$posts]);
    }

    public function create(){
        session();
        $validation = service('validation');

        return view('post',[
            'method' => 'post',
            'path' => 'store',
            'validation' => $validation->listErrors(),
            'formTitle' => 'Add New Post'
        ]);
    }

    public function store(){
        
        $error = $this->validate('post');

        if(!$error){
            return redirect()->back()->withInput();
        }

        $post = new PostModel();

        $post->save([
            'title' => $this->request->getVar('title'),
            'post' =>  $this->request->getVar('post'),
            'user_id' => \auth()->user()->id,
        ]);

        $_SESSION['messageAlert'] = 'Post created succesfully!!';
        
        return redirect('/');

    }

    public function show($id){
        $post = (new PostModel())->find($id);

        return view('post',[
            'post' => $post,
            'show' => true
        ]);
    }

    public function edit($id){
        session();
        $validation = service('validation');

        $post = (new PostModel())->find($id);

        return view('post',[
            'post' => $post,
            'method' => 'PUT',
            'path' => '/post/'. $id,
            'validation' => $validation->listErrors(),
            'formTitle' => 'Edit post'
        ]);
    }

    public function update($id){
        $error = $this->validate('post');

        if(!$error){
            return redirect()->back()->withInput();
        }

        $post = new PostModel();

        $post->update($id,[
            'title' => $this->request->getVar('title'),
            'post' =>  $this->request->getVar('post'),
            'user_id' => \auth()->user()->id,
        ]);

        $_SESSION['messageAlert'] = 'Post updated succesfully!!';

        return redirect('/');
    }

    public function delete($id){

        $post = new PostModel();
        $post->delete($id);

        $_SESSION['messageAlert'] = 'Post deleted succesfully!!';

        return redirect('/');
    }
}
