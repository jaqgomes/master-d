<?php

require_once __DIR__ . '/../security/SessionService.php';
include('AppointmentService.php');

session_start();
SessionService::isRequireLogin();

$appointmentService = new AppointmentService();

$listAppointmentPageLink = "/projeto-final/appointment/list-appointment.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: $listAppointmentPageLink");
    exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

if ($id > 0) {
    ;

    if ($appointmentService->deleteAppointment($id)) {
        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Consulta removida com sucesso.'];
    } else {
        $_SESSION['flash'] = ['type' => 'warning', 'message' => 'Consulta não encontrada ou já removida.'];
    }
} else {
    $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Invalid request.'];
}

header("Location: $listAppointmentPageLink");
exit;
