<?php
require_once __DIR__ . '/../security/SessionService.php';
include 'AppointmentService.php';

$pageTitle = 'Gerenciar Contactos - Sistema Web';

// Flash messages via session
session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
SessionService::isRequireLogin();

$appointmentService = new AppointmentService();
$appointmentList = null;
if (SessionService::isAdmin()) {
    $appointmentList = $appointmentService->getAllAppointment();
} else {
    $id_utilizador = $_SESSION['user_id'];
    $appointmentList = $appointmentService->getAllAppointmentByUserId($id_utilizador);
}

$createAppointmentPageLink = "create-appointment.php";
$deleteAppointmentPageLink = "delete-appointment.php";

require_once __DIR__ . '/../includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-3">

    <h2 class="page-header mb-0">Contactos</h2>
    <?php if (SessionService::isLoggedIn()): ?>
        <a href="<?= $createAppointmentPageLink ?>" class="btn btn-dark">
            <i class="bi bi-plus-lg me-1"></i>
            Agendar
        </a>
    <?php endif; ?>
</div>

<?php if ($flash): ?>
    <div class="alert alert-<?= $flash['type'] ?> alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $flash['type'] === 'success' ? 'check-circle' : 'exclamation-triangle' ?> me-2"></i>
        <?= htmlspecialchars($flash['message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if (empty($appointmentList)): ?>

    <div class="card form-card">
        <div class="empty-state">
            <i class="bi bi-newspaper"></i>
            <h4>Nenhuma consulta encontrada. </h4>
            <p>Comece marcando sua primeira consulta.</p>
            <a href="<?= $createAppointmentPageLink ?>" class="btn btn-dark">Marcar consulta</a>
        </div>
    </div>

<?php else: ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data Consulta</th>
                <th scope="col">Observações</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($appointmentList as $appointment) { ?>
                <tr>
                    <td><?= $appointment['id'] ?></td>
                    <td><?= date('d-m-Y H:i', strtotime($appointment['data_consulta'])) ?></td>
                    <td><?= $appointment['observacoes'] ?></td>
                    <td>
                        <a href="edit-appointment.php?id=<?= $appointment['id'] ?>" class="btn btn-outline-dark btn-sm flex-fill">
                            <i class="bi bi-pencil me-1"></i>Edit
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-sm flex-fill" data-bs-toggle="modal"
                            data-bs-target="#deleteModal" data-id="<?= $appointment['id'] ?>"
                            data-name="<?= date('d-m-Y H:i', strtotime($appointment['data_consulta'])) ?>"
                            data-action="<?= $deleteAppointmentPageLink ?>">
                            <i class="bi bi-trash me-1"></i>Delete
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php include __DIR__ . '/../includes/modal.html'; ?>

<?php endif; ?>

<?php require_once __DIR__ . '/../includes/footer.html'; ?>