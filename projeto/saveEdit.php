<?php
require ('config.php');

if (isset($_POST['update']))
{ 
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $laboratorio = $_POST['laboratorio'];
    $data_reserva = $_POST['data_reserva'];
    $horario_inicio = $_POST['horario_inicio'];
    $horario_fim = $_POST['horario_fim'];

    $sqlUpdate = "UPDATE users SET nome='$nome', email='$email', tel='$tel', laboratorio='$laboratorio', data_reserva='$data_reserva', horario_inicio='$horario_inicio', horario_fim='$horario_fim' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: sistema.php');
?>