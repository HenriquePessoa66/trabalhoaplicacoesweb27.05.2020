<?php
require_once '../Modelo/ClassPaciente.php';
require_once '../Modelo/DAO/ClassPacienteDAO.php';

$id =@$_POST['idex'];
$historico = @$_POST['historico'];
$receituario = @$_POST['receituario'];
$exames = @$_POST['exames'];
$acao = $_GET['ACAO'];


$novoPaciente = new ClassPaciente();
$novoPaciente->setIdPaciente($id);
$novoPaciente->sethistorico($historico);
$novoPaciente->setreceituario($receituario);
$novoPaciente->setexames($exames);

$classPacienteDAO = new ClassPacienteDAO();
switch ($acao) {
	case "cadastrarPaciente":
        $paciente = $classPacienteDAO->cadastrar($novoPaciente);
	    if($paciente >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;
	case 'alterarPaciente':
        $paciente = $classPacienteDAO->alterarPaciente($novoPaciente);
        
        if($paciente == 1){
            header('Location:../index.php?&MSG= Cadastro atualizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar a atualização!');
        }
        
      break;
    
    case "excluirPaciente":
        if (isset($_GET['idex'])) {
            $idPaciente = $_GET['idex'];
            $classPacienteDAO = new ClassPacienteDAO();
            $us = $classPacienteDAO->excluirPaciente($idPaciente);
            if ($us == TRUE) {
                header('Location:../index.php?PAGINA=listarPaciente&MSG= Paciente excluido com sucesso!');
            } else {
                header('Location:../index.php?PAGINA=listarPaciente&MSG=Não foi possivel realizar a exclusão do Paciente!');
            }
        }
        break;
    default :
        break;	
 }
?>