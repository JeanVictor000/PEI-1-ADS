<?php
   session_start();
 include_once('config.php');
  $sql = "SELECT * FROM users ORDER BY id DESC";
  $result = $conexao->query($sql);
 // print_r($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>SISTEMA</title>
    <style>
        body{ 
            background-image:linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            color:white;
            text-align: center;
          
        }
      
        .table{

            background:rgba( 0,0,0,)
        }
        

    </style>
</head>

<body>
<nav class="navbar navbar-expabd-lg navabr-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA MTVX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         </a>
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.pgp" class="btn bnt-danger me-5">Sair</a>
        </div>
    </nav>

   <?php
   echo "<h1>Bem vindo aos agendamentos </h1>";    
?>

            
            <div class="m-5">
            <table class="table table-striped">
            <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">tel</th>
                        <th scope="col">laboratorio</th>
                        <th scope="col">data_reserva</th>
                        <th scope="col">horario_inicio</th>
                        <th scope="col">horario_fim</th>
                        <th scope="col">...</th>
                  </tr>
        </thead> 
          <tbody>  

<?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['tel']."</td>";
        echo "<td>".$user_data['laboratorio']."</td>";
        echo "<td>".$user_data['data_reserva']."</td>";
        echo "<td>".$user_data['horario_inicio']."</td>";
        echo "<td>".$user_data['horario_fim']."</td>";   
        echo "<td>
            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
               </svg>
               </a>
        </td>";
        echo "</tr>";
    }
?>
                </tbody> 
             </table>
            </div>
            
    </body>
</html>
       
      