<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        
           <br><h2><font color="#2E64FE">Formulário de atualização de Pacientes</font></h2>
        <div class="col-md-4 mb-3">
            <hr>
        </div>
		<div class="col-md-4 mb-3">
        <?php
            require '../Modelo/ClassPaciente.php';
            require '../Modelo/DAO/ClassPacienteDAO.php';
			
			$id =@$_GET['idex'];
            $novoPaciente = new ClassPaciente();
            $pacienteDAO = new ClassPacienteDAO();
			
            $novoPaciente = $pacienteDAO->buscarPaciente($id);

        ?>
        <form method="post" action="../Controle/ControlePaciente.php?ACAO=alterarPaciente" >
                <input type="hidden" name="idex" value="<?php echo $novoPaciente->getIdPaciente(); ?>">
                <font color="#2E64FE">Histórico:</font><input class="form-control" type="text" name="historico" size="1000" value="<?php echo $novoPaciente->gethistorico(); ?>" /><br>
                <font color="#2E64FE">Receituário:</font><input class="form-control" type="text" name="receituario" size="500" value="<?php echo $novoPaciente->getreceituario(); ?>"/><br>
				<font color="#2E64FE">Exames:</font><input class="form-control" type="text" name="exames" size="500" value="<?php echo $novoPaciente->getexames(); ?>"/>
                <br>
				<button class="btn btn-primary" type="submit" value="Alterar">Alterar</button> 
				<button class="btn btn-primary" type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </body>
</html>
