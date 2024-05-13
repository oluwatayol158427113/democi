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
}