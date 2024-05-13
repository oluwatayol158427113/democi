<?php

namespace App\Controllers;

class Articles extends BaseController
{
  public function index()
  {

    $db = db_connect();
    $db->listTables();

    $data = [
      ['title' => 'First Article', 'content' => 'Content of the first article.'],
      ['title' => 'Second Article', 'content' => 'Content of the second article.']
    ];
    
    return view('Articles/index', [
      'articles' => $data
    ]);
  }
}