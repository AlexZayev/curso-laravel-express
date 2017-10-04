<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*
      $post1 = new Post;
      $post1->title = 'Meu primeiro Post';
      $post1->content = 'Este é o meu primeiro post! Fique a vontade para fazer algum comentário';

      $post2 = new Post;
      $post2->title = 'Meu segundo Post';
      $post2->content = 'Este é o meu segundo post! Fique a vontade para fazer algum comentário';

      $post3 = new Post;
      $post3->title = 'Meu terceiro Post';
      $post3->content = 'Este é o meu terceiro post! Fique a vontade para fazer algum comentário';
  */
      $post1 = (object) array(
        'title'  =>'Meu primeiro Post Casting Object',
        'content' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

      $post2 = (object) array(
        'title'  =>'Meu segundo Post Casting Object',
        'content' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

      $post3 = (object) array(
        'title'  =>'Meu terceiro Post Casting Object',
        'content' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

      $post4 = (object) array(
          'title'  =>'Meu quarto Post Casting Object',
          'content' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

/*
	//exemplo de estrutura de dados sem criar objetos
      $posts =
          [
            [
              'title'  =>'Meu primeiro Post',
              'content' =>'Este é o meu primeiro post! Fique a vontade para fazer algum comentário'
            ],
            [
              'title'  =>'Meu segundo Post',
              'content' =>'Este é o meu segundo post! Fique a vontade para fazer algum comentário'
            ],
            [
              'title'  =>'Meu terceiro Post',
              'content' =>'Este é o meu terceiro post! Fique a vontade para fazer algum comentário'
            ],
          ];

        // no blade fica assim
        <!--<h2>{{$post['title']}}</h2>
        <p>{{$post['content']}}</p>-->


          */

          $posts = array($post1,$post2,$post3,$post4);

          return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
