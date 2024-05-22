<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Entities\Article;

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
    return view('Articles/new', [
      'article' => new Article
    ]);
  }

  public function create()
  {
    $model = new ArticlesModel;

    $article = new Article($this->request->getPost());

    $id = $model->insert($article);

    if (!$id) {

      return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
    }

    return redirect()->to("articles/$id")
                        ->with('message', 'Successfully saved new article.');
  }

  public function edit($id)
  {
    $model = new ArticlesModel;

    $article = $model->find($id);

    return view('Articles/edit', [
      'article' => $article
    ]);
  }

  public function update($id)
  {
    $model = new ArticlesModel;

    $article = $model->find($id);

    $article->fill($this->request->getPost());

    if (!$article->hasChanged())
    {
      return redirect()->back()
                        ->with('message','There is nothing to update.');
    }

    if(!$model->save($article))
    {
      return redirect()->back()
                        ->with('errors', $model->errors());
    }

    return redirect()->to("articles/$id")
                        ->with('message', 'Article updated.');
  }
}