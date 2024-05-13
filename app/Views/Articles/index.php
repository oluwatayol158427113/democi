<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Articles<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <h1>Articles Page</h1>

  <?php foreach ($articles as $article): ?>
    <article>
      <h2><a href="<?= site_url('/articles/' . $article['id']) ?>"><?= $article['title'] ?></a></h2>
      <p><?= $article['content'] ?></p>
    </article>
  <?php endforeach; ?>
<?= $this->endSection() ?>