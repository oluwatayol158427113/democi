<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticlesModel extends Model {
  protected $table = 'Articles';
  protected $allowedFields = ['title', 'content'];
}