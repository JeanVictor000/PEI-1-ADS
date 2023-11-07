<?php

   if (isset($_POST['submit'])) 
   { 
   
        include_once('config.php');

        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $tel = $_POST ['telefone'];
        $laboratorio = $_POST['laboratorio'];
        $data_reserva = $_POST ['data_reserva'];
        $horario_inicio = $_POST ['horario_inicio'];
        $horario_fim = $_POST ['horario_fim'];

            $result = mysqli_query($conexao, "INSERT INTO users(nome,email,tel,laboratorio,data_reserva,horario_inicio,horario_fim)
            VALUES ('$nome','$email','$tel','$laboratorio','$data_reserva','$horario_inicio','$horario_fim')");
   
   $sql = "SELECT * FROM users ORDER BY id DESC";

   $result = $conexao->query($sql);

   //print_r($result);
}
?>

<?php

include_once('config.php');

// Função para verificar se já existe um agendamento para a mesma hora e o mesmo dia
function verificarAgendamento($conexao, $laboratorio, $data_reserva, $horario_inicio, $horario_fim) 
{
    $query = "SELECT * FROM agendamentos WHERE laboratorio = '$laboratorio' AND data_reserva = '$data_reserva' AND horario_inicio = '$horario_inicio' AND horario_fim = '$horario_fim'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_num_rows($resultado) > 0;
}

// Função para agendar um laboratório
function agendarLaboratorio($conexao, $laboratorio,  $data_reserva, $horario_inicio, $horario_fim) {
    if (verificarAgendamento($conexao, $laboratorio,  $data_reserva, $horario_inicio, $horario_fim)) {
        echo "Já existe um agendamento para a mesma hora e o mesmo dia.";
    } else {
        $query = "INSERT INTO agendamentos (laboratorio, data_reserva, horario_inicio, horario_fim ) VALUES ('$laboratorio','$data_reserva', '$horario_inicio', '$horario_fim')";
        if (mysqli_query($conexao, $query)) {
            echo "Agendamento realizado com sucesso.";
        } else {
            echo "Erro ao realizar o agendamento: " . mysqli_error($conexao);
        }
    }
}


mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro-MTVX</title>
    <style>
        body{ 
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(to right, rgb(22, 22, 22), rgb(36, 2, 65));

        }
        .box{
            color: rgb(255, 255, 255);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(19, 1, 1, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid rgb(0, 78, 52);
        }
        legend{
            border: 1px solid rgb(0, 78, 52);
            padding: 10px;
            text-align: center;
            background-color: rgb(0, 78, 52);
            border-radius: 8px;
            
        }
        .inputBox{
                position: relative;
        }
        .inputUser{
           background: none; 
           border: none;
           border-bottom: 1px solid;
           outline:none;
           color: rgb(255, 255, 255);
           font-size: 15px;
           width: 100%;
           letter-spacing: 0.5px;
            
        }
            .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        
        #data_reserva{
            border:none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;   
        }

        #horario_inicio{
            border:none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #horario_fim{
            border:none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

       #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

    </style>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="post">
            <fieldset>
                 <!-- Titulo-->
                <legend><b>Agendamento de laboratórios</b></legend>
                <br>
                 <!-- Dados -->
                <div class = "inputBox">
                    <input type="text" name="nome" id="nome"class="inputUser" required>
                    <label for="nome" class="labelinput" >Nome Completo</label>
                </div>
                <br>
                <div class = "inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput" >Email</label>
                </div>
                <br>
                <div class = "inputBox">
                    <input type="tel" name="telefone" id="tel" class="inputUser" required>
                    <label for="telefone" class="labelinput" >Telefone</label>
                </div>
                <br>
                 <!-- Labs-->
                <p>Laboratórios:</p>
                <input type="radio" id="lab1" name="laboratorio" value="lab1" required>
                <label for="lab1">Laboratório 1</label>
                <br>
                <input type="radio" id="lab2" name="laboratorio" value="lab2" required>
                <label for="lab2">Laboratório 2</label>
                <br>
                 <!--
                <input type="radio" id="lab3" name="genero" value="lab3" required>
                <label for="lab3">Laboratório 3</label>
                <br>
                <input type="radio" id="lab4" name="genero" value="lab4" required>
                <label for="lab4">Laboratório 4</label>
                <br>
                <input type="radio" id="lab5" name="genero" value="lab5" required>
                <label for="lab5">Laboratório 5</label>
                <br> 
            -->

                 <!-- Dta -->
                 <br>
                    <label for="data_reserva"><b>Data da Reserva:</b></label>
                    <input type="date" name="data_reserva" id="data_reserva" required>

                <br>
                <!-- Horas-->
                <br>
               
                    <label for="horario_inicio">Hora da Reserva <b>Inicio:</b></label>
                    <input type="time" name="horario_inicio" id="horario_inicio" required>
                    <br> <br>

                    <label for="horario_fim">Hora da Reserva <b>Fim:</b></label>
                    <input type="time" name="horario_fim" id="horario_fim" required>
                
                <br> <br>
                <input type="submit" name="submit" id="submit"> 
            </fieldset>
        </form>
    </div>
</body>
</html>