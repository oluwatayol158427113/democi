<?php

namespace App\Controllers;

use App\Models\ArticlesModel;

class Articles extends BaseController
{
  public function index()
  {

    $model = new ArticlesModel;

    $data = $model->findAll();

    // dd($data);
    
    return view('Articles/index', [
      'articles' => $data
    ]);
  }

  public function show($id)
  {
    $model = new ArticlesModel;

    $article = $model->find($id);

    return view('Articles/show', [
      'article' => $article
    ]);
  }

  public function new()
  {
    return view('Articles/new');
  }

  public function create()
  {
    $model = new ArticlesModel;

    $id = $model->insert($this->request->getPost());

    if (!$id) {
      dd($model->errors());
    }

    dd($id);
  }
}