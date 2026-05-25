<?php

require_once __DIR__ . '/../security/SessionService.php';

include 'ProjectService.php';

$projectService = new ProjectService();
$projectList = $projectService->getAllProjects();

session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

require_once __DIR__ . '/../includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="page-header mb-0">Projetos</h2>

    <?php if (SessionService::isAdmin()): ?>
        <a href="/projeto-final/project/list-project-manager.php" class="btn btn-dark">
            <i class="bi bi-plus-lg me-1"></i>Gerenciar</a>
    <?php endif; ?>
</div>

<?php if (empty($projectList)): ?>
    <h1>Nenhum Projeto</h1>
<?php else: ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($projectList as $project) { ?>
            <div class="col">
                <div class="card h-100">
                    <?php if (!empty($project['fotografia'])): ?>
                        <img src="/projeto-final/project/uploads/<?= $project['fotografia'] ?>" class="card-img-top img-preview">
                    <?php else: ?>
                        <div class="card-img-top card-image-placeholder">
                            <span>Sem imagem</span>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($project['nome_projeto']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars(mb_strlen($project['descricao']) > 100 ? mb_substr($project['descricao'], 0, 100) . '...' : $project['descricao']) ?></p>
                          <hr class="my-4">

                        <div class="d-flex gap-2 justify-content-end">
                            <a type="button" class="btn btn-dark" href="view-project.php?id=<?= $project['id'] ?>">
                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                Visualizar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>



<?php endif; ?>
<?php require_once __DIR__ . '/../includes/footer.html'; ?>