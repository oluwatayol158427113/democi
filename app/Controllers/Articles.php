<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Entities\Article;

class Articles extends BaseController
{

  private ArticlesModel $model;

  public function __construct()
  {
    $this->model = new ArticlesModel;
  }

  public function index()
  {
    $data = $this->model->findAll();

    // dd($data);
    
    return view('Articles/index', [
      'articles' => $data
    ]);
  }

  public function show($id)
  {
    $article = $this->model->find($id);

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
    $article = new Article($this->request->getPost());

    $id = $this->model->insert($article);

    if (!$id) {

      return redirect()->back()
                        ->with('errors', $this->model->errors())
                        ->withInput();
    }

    return redirect()->to("articles/$id")
                        ->with('message', 'Successfully saved new article.');
  }

  public function edit($id)
  {
    $article = $this->model->find($id);

    return view('Articles/edit', [
      'article' => $article
    ]);
  }

  public function update($id)
  {
    $article = $this->model->find($id);

    $article->fill($this->request->getPost());

    if (!$article->hasChanged())
    {
      return redirect()->back()
                        ->with('message','There is nothing to update.');
    }

    if(!$this->model->save($article))
    {
      return redirect()->back()
                        ->with('errors', $this->model->errors());
    }

    return redirect()->to("articles/$id")
                        ->with('message', 'Article updated.');
  }
}