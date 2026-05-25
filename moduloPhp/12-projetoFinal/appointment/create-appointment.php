<?php
require_once __DIR__ . '/../security/SessionService.php';
include('AppointmentService.php');

session_start();
SessionService::isRequireLogin();
$id_utilizador = $_SESSION['user_id'];

$appointmentService = new AppointmentService();

$listAppointmentPageLink = "/projeto-final/appointment/list-appointment.php";

$pageTitle = 'Add Contacto — Web System';
$errors = [];
$input = ['data_consulta' => '', 'observacoes' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $input['data_consulta'] = trim($_POST['data_consulta'] ?? '');
    $input['observacoes'] = trim($_POST['observacoes'] ?? '');

    if ($input['data_consulta'] === '') {
        $errors['data_consulta'] = 'Date is required.';
    }

    if (empty($errors)) {

        $appointmentService->createAppointment(
            $id_utilizador,
            $input['data_consulta'],
            $input['observacoes']
        );

        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Consulta adicionada com sucesso!'];
        header("Location: $listAppointmentPageLink");
        exit;
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-lg-7">
        <h2 class="page-header">Adicionar Consulta</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <i class="bi bi-exclamation-triangle me-2"></i>
                Por favor, corrija os erros abaixo.
            </div>

        <?php endif; ?>

        <div class="card form-card">
            <div class="card-header">
                <i class="bi bi-plus-circle me-2"></i>Nova Consulta
            </div>
            <div class="card-body p-4">
                <form method="POST" action="/projeto-final/appointment/create-appointment.php" novalidate
                    enctype="multipart/form-data">

                    <?php include __DIR__ . '/appointment-details.html'; ?>

                    <hr class="my-4">

                    <div class="d-flex gap-2 justify-content-end">
                        <a href="<?= $listAppointmentPageLink ?>" class="btn btn-outline-secondary">
                            <i class="bi bi-x-lg me-1"></i>
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-dark">
                            <i class="bi bi-save me-1"></i>
                            Salvar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.html'; ?>