<?php

namespace App\Controllers;

class Articles extends BaseController
{
  public function index()
  {
    $data = [
      ['title' => 'First Article', 'content' => 'Content of the first article.'],
      ['title' => 'Second Article', 'content' => 'Content of the second article.']
    ];
    
    return view('Articles/index', [
      'articles' => $data
    ]);
  }
}