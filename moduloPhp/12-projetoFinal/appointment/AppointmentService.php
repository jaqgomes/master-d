<?php

require_once __DIR__ . '/../config/Database.php';

class AppointmentService
{
    private $database;
    public function __construct()
    {
        $this->database = (new Database())->conexao;

    }
    public function createAppointment($id_utilizador, $data_consulta, $observacoes)
    {
        $stmt = $this->database->prepare("INSERT INTO consultas (id_utilizador, data_consulta, observacoes) VALUES(?,?,?)");
        $stmt->bind_param("iss", $id_utilizador, $data_consulta, $observacoes);
        return $stmt->execute();

    }
    public function getAllAppointment()
    {
        $result = $this->database->query("SELECT * FROM consultas");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllAppointmentByUserId($userId)
    {
        $stmt = $this->database->prepare("SELECT * FROM consultas where id_utilizador = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function getAppointmentById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM consultas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }


    public function updateAppointment($id, $id_utilizador, $data_consulta, $observacoes)
    {
        $stmt = $this->database->prepare("UPDATE consultas SET id_utilizador = ?, data_consulta = ?, observacoes = ? WHERE id = ?");
        $stmt->bind_param("issi", $id_utilizador, $data_consulta, $observacoes, $id);
        return $stmt->execute();
    }

    public function deleteAppointment($id)
    {
        $stmt = $this->database->prepare("DELETE FROM consultas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>