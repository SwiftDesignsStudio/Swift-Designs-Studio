<?php $page='blog'; include __DIR__.'/../header.php'; ?>

<?php
$slug = isset($_GET['slug']) ? preg_replace('~[^a-z0-9\-]~i','',$_GET['slug']) : '';
require __DIR__.'/blog-data.php';
$post = find_post($slug);

if (!$post) { http_response_code(404); $page='404'; include __DIR__.'/../header.php'; ?>
  <main class="section-padding"><div class="container"><h1>Not Found</h1><p>That article doesn’t exist.</p></div></main>
  <?php include __DIR__.'/../footer.php'; exit; }

$page = 'blog';
include __DIR__.'/../header.php';
?>
<article class="post">
  <header class="post-hero">
    <div class="container">
      <h1 class="post-title"><?= htmlspecialchars($post['title']) ?></h1>
      <p class="post-meta"><?= date('F j, Y', strtotime($post['date'])) ?> • <?= htmlspecialchars($post['author']) ?></p>
    </div>
    <?php if (!empty($post['hero'])): ?>
      <img class="post-hero__img" src="<?= htmlspecialchars($post['hero']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
    <?php endif; ?>
  </header>

  <div class="container post-content">
    <?php
      $bodyPath = __DIR__ . '/' . $post['body'];
      if (is_file($bodyPath)) {
        include $bodyPath;  // HTML snippet
      } else {
        echo '<p>(Body content missing.)</p>';
      }
    ?>
  </div>

  <footer class="post-footer">
    <div class="container">
      <a class="btn btn--outline" href="index.php">← Back to Blog</a>
    </div>
  </footer>
</article>
<?php include __DIR__.'/../footer.php'; ?>
