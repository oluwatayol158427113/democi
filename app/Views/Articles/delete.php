<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete Article<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Delete article</h1>
<p>Are you sure you want to delete the article with id <?= $article->id ?>?</p>

<?= form_open('/articles/delete/' . $article->id) ?>

<button>Yes</button>

</form>

<?= $this->endSection() ?>