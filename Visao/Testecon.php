<?php
require_once '../Modelo/ClassPaciente.php';
require_once '../Modelo/DAO/ClassPacienteDAO.php';
require_once '../Modelo/DAO/Conexao.php';
class TesteCon {

    public function acessar() {
        try {
            $pdo = Conexao::getInstance();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
  $a = new TesteCon;
  $a->acessar();
?>