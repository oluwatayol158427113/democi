<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticlesModel extends Model {
  protected $table = 'Articles';
  protected $allowedFields = ['title', 'content'];
  protected $validationRules = [
    'title'             => 'required|max_length[128]',
    'content'           => 'required'
  ];
  protected $validationMessages = [
    'title' => [
      'required' => 'Title is required.',
      'max_length' => '{param} maximum characters for {field}.'
    ],
    'content' => [
      'Content is required.'
    ]
  ];
}