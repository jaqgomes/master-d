<?php
require_once __DIR__ . '/../security/SessionService.php';
include('NewsService.php');

session_start();

$newsService = new NewsService();
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$news = $newsService->getNewsById($id);

require_once __DIR__ . '/../includes/header.php';
?>

<article class="view-article">
    <!-- Back Button -->
    <div class="view-back">
        <a href="list-news.php" class="btn btn-dark">
            <i class="bi bi-arrow-bar-left"></i>
            Voltar
        </a>
    </div>

    <!-- Title -->
    <h1 class="view-title"><?= htmlspecialchars($news['titulo']) ?></h1>

    <!-- Meta Information -->
    <div class="view-meta">
        <span class="view-date"><i class="bi bi-calendar3"></i>
            <?= date('d-m-Y', strtotime($news['data_publicacao'])) ?>
        </span>
    </div>

    <!-- Featured Image -->
    <?php if (!empty($news['imagem'])): ?>
        <div class="view-image-container">
            <img src="/projeto-final/news/uploads/<?= htmlspecialchars($news['imagem']) ?>"
                alt="<?= htmlspecialchars($news['titulo']) ?>" class="view-image">
        </div>
    <?php endif; ?>

    <!-- Content -->
    <div class="view-content">
        <?= htmlspecialchars($news['conteudo']) ?>
    </div>
</article>

<?php require_once __DIR__ . '/../includes/footer.html'; ?>