<?php


class ClassPaciente {
    private $idPaciente;
	private $now;
    private $historico;
    private $receituario;
	private $exames;
   
                  
    function getIdPaciente() {
        return $this->idPaciente;
    }
	
	function getnow () {
        return $this->now;
    }

    function gethistorico() {
        return $this->historico;
    }

    function getreceituario() {
        return $this->receituario;
    }
	
	function getexames() {
        return $this->exames;
    }

    
    function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }
	
	function setRegistro_agenda($now) {
        $this->now = $now;
    }

    function sethistorico($historico) {
        $this->historico = $historico;
    }

    function setreceituario($receituario) {
        $this->receituario = $receituario;
    }
	
	function setexames($exames) {
        $this->exames = $exames;
    }

   

    
}
