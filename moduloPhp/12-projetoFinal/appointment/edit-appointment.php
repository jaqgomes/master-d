<?php
require_once __DIR__ . '/../security/SessionService.php';
include('AppointmentService.php');

$listAppointmentPageLink = "/projeto-final/appointment/list-appointment.php";

session_start();
SessionService::isRequireLogin();
$id_utilizador = $_SESSION['user_id'];

$appointmentService = new AppointmentService();

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$appointment = $appointmentService->getAppointmentById($id);

if (!$appointment || ($appointment['id_utilizador'] !== $id_utilizador && !SessionService::isAdmin())) {
    http_response_code(404);
    $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Consulta não encontrada.'];
    header("Location: $listAppointmentPageLink");
    exit;
}

//metodo usado para validar e convertar data para exibir na tela
if (!empty($appointment['data_consulta'])) {
    $dateObj = new DateTime($appointment['data_consulta']);
    $date = $dateObj->format('Y-m-d H:i');
}

$pageTitle = 'Editar Consulta — Web System';
$errors = [];
$input = $appointment;
$input['data_consulta'] = $date ?? ''; //se tiver valor em $date usa ele, se não tiver usa ''

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $input['data_consulta'] = trim($_POST['data_consulta'] ?? '');
    $input['observacoes'] = trim($_POST['observacoes'] ?? '');

    if ($input['data_consulta'] === '') {
        $errors['data_consulta'] = 'Data consulta é obrigatório.';
    }

    // Prevent non-admin users from updating an appointment within 72 hours
    if (!SessionService::isAdmin()) {
        $now = new DateTime();
        $original = new DateTime($appointment['data_consulta']);
        $secondsUntil = $original->getTimestamp() - $now->getTimestamp();
        if ($secondsUntil < 72 * 3600) {
            $errors['data_consulta'] = 'Não é possível alterar a consulta dentro de 72 horas da data marcada.';
        }
    }


    if (empty($errors)) {
        $appointmentService->updateAppointment(
            $id,
            $input['id_utilizador'],
            $input['data_consulta'],
            $input['observacoes'],
        );

        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Consulta alterada com sucesso!'];
        header('Location: /projeto-final/appointment/list-appointment.php');
        exit;
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-lg-7">
        <h2 class="page-header">Editar Consulta</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <i class="bi bi-exclamation-triangle me-2"></i>
                Por favor, corrija os erros abaixo.
            </div>

        <?php endif; ?>

        <div class="card form-card">
            <div class="card-header">
                <i class="bi bi-plus-circle me-2"></i>Dados da Consulta
            </div>
            <div class="card-body p-4">
                <form method="POST" action="/projeto-final/appointment/edit-appointment.php?id=<?= $id ?>" novalidate
                    enctype="multipart/form-data">

                    <?php include __DIR__ . '/appointment-details.html'; ?>

                    <hr class="my-4">

                    <div class="d-flex gap-2 justify-content-end">
                        <a href="/projeto-final/appointment/list-appointment.php" class="btn btn-outline-secondary">
                            <i class="bi bi-x-lg me-1"></i>
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-dark">
                            <i class="bi bi-save me-1"></i>
                            Atualizar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.html'; ?>