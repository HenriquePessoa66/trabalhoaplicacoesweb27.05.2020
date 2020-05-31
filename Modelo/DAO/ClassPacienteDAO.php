<?php
require_once 'Conexao.php';
class ClassPacienteDAO {

    public function cadastrar(ClassPaciente $cadastrarPaciente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO paciente (Registro_agenda, historico, receituario, exames) values (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
			$stmt->bindValue(1, $cadastrarPaciente->getnow());
            $stmt->bindValue(2, $cadastrarPaciente->gethistorico());
            $stmt->bindValue(3, $cadastrarPaciente->getreceituario());
			$stmt->bindValue(4, $cadastrarPaciente->getexames());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
	
	 public function buscarPaciente($idPaciente){
        try {
            $paciente = new ClassPaciente(); 
            $pdo = Conexao::getInstance();
            $sql = "SELECT idPaciente, historico, receituario, exames FROM paciente WHERE idPaciente =:id LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idPaciente);

            $stmt->execute();
            $usuarioAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $paciente -> setIdPaciente($usuarioAssoc['idPaciente']);
            $paciente -> sethistorico($usuarioAssoc['historico']);
            $paciente -> setreceituario($usuarioAssoc['receituario']);
			$paciente -> setexames($usuarioAssoc['exames']);

            return $paciente;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
 public function listarPaciente() {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM paciente";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $alunos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


public function alterarPaciente(ClassPaciente $alterarPaciente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE paciente SET Registro_agenda=now(), historico=?, receituario=?, exames=? WHERE idPaciente=? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1,$alterarPaciente->gethistorico());
            $stmt->bindValue(2,$alterarPaciente->getreceituario());
            $stmt->bindValue(3,$alterarPaciente->getexames());
			$stmt->bindValue(4,$alterarPaciente->getIdPaciente());
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

	
	
public function excluirPaciente($idPaciente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM paciente WHERE idPaciente =:idPaciente";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idPaciente',$idPaciente);       
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $ex->getMessage();
        }
    }
   
}
