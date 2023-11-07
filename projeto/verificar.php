<?php
// Função para verificar se já existe um agendamento para a mesma hora e o mesmo dia
function verificarAgendamento($conexao, $laboratorio, $data_reserva, $horario_inicio, $horario_fim) 
{
    $query = "SELECT * FROM users WHERE laboratorio = '$laboratorio' AND  data_reserva, horario_inicio, horario_fim = '$data_reserva', '$horario_inicio', '$horario_fim'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_num_rows($resultado) > 0;
}

// Função para agendar um laboratório
function agendarLaboratorio($conexao, $laboratorio,  $data_reserva, $horario_inicio, $horario_fim) {
    if (verificarAgendamento($conexao, $laboratorio,  $data_reserva, $horario_inicio, $horario_fim)) {
        echo "Já existe um agendamento para a mesma hora e o mesmo dia.";
    } else {
        $query = "INSERT INTO agendamentos (laboratorio, data_hora) VALUES ('$laboratorio','$data_reserva', '$horario_inicio', '$horario_fim')";
        if (mysqli_query($conexao, $query)) {
            echo "Agendamento realizado com sucesso.";
        } else {
            echo "Erro ao realizar o agendamento: " . mysqli_error($conexao);
        }
    }
}

// Configurações do banco de dados
require ('config.php');


// Exemplo de uso
agendarLaboratorio($conexao, "Laboratório A", "2023-06-15 09:00:00");  // Agendamento válido
agendarLaboratorio($conexao, "Laboratório A", "2023-06-15 09:00:00");  // Agendamento repetido

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>