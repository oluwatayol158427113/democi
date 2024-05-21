<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit Article<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <h1>Edit Article</h1>

  <?php if(session()->has('errors')): ?>
    <ul>
      <?php foreach(session('errors') as $error): ?>
        <li><?= $error ?></li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>

  <?= form_open('articles/update/' . $article['id']) ?>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?= old('title', esc($article['title'])) ?>">

    <label for="content">Content</label>
    <textarea name="content" id="content"><?= old('content', esc($article['content'])) ?></textarea>

    <button>Save</button>
  <?= form_close() ?>
<?= $this->endSection() ?>