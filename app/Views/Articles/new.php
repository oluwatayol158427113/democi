<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New Article<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <h1>New Article</h1>

  <?php if(session()->has('errors')): ?>
    <ul>
      <?php foreach(session('errors') as $error): ?>
        <li><?= $error ?></li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>

  <?= form_open('articles/create') ?>
    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <label for="content">Content</label>
    <textarea name="content" id="content"></textarea>

    <button>Save</button>
  <?= form_close() ?>
<?= $this->endSection() ?>