<?php
require_once __DIR__ . '/../security/SessionService.php';
include('ProjectService.php');

session_start();
$projectService = new ProjectService();

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$project = $projectService->getProjectById($id);

require_once __DIR__ . '/../includes/header.php';
?>

<article class="view-article">
    <!-- Back Button -->
    <div class="view-back">
        <a href="list-project.php" class="btn btn-dark">
            <i class="bi bi-arrow-bar-left"></i>
            Voltar
        </a>
    </div>

    <!-- Title -->
    <h1 class="view-title"><?= htmlspecialchars($project['nome_projeto']) ?></h1>

    <!-- Meta Information -->
    <?php if (!empty($project['tempo_conclusao'])): ?>
        <div class="view-meta">
            <span class="view-date"><i class="bi bi-calendar3"></i>
                <?= date('d-m-Y', strtotime($project['tempo_conclusao'])) ?>
            </span>
        </div>
    <?php endif; ?>

    <!-- Featured Image -->
    <?php if (!empty($project['fotografia'])): ?>
        <div class="view-image-container">
            <img src="/projeto-final/project/uploads/<?= htmlspecialchars($project['fotografia']) ?>"
                alt="<?= htmlspecialchars($project['nome_projeto']) ?>" class="view-image">
        </div>
    <?php endif; ?>

    <!-- Content -->
    <div class="view-content">
        <?= htmlspecialchars($project['descricao']) ?>

        <!-- Tech -->
        <?php if (!empty($project['tecnologia'])): ?>
            <div class="view-content-technology">
                <?= htmlspecialchars($project['tecnologia']) ?>
            </div>

        <?php endif; ?>
    </div>


</article>

<?php require_once __DIR__ . '/../includes/footer.html'; ?>