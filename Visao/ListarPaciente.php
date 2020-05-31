<script language="javaScript" type="text/javascript">
function checkDelete(){
    return confirm('Deseja continuar?');
}
</script>

<?php
    require './Modelo/ClassPaciente.php';
    require './Modelo/DAO/ClassPacienteDAO.php';

    $classPacienteDAO = new ClassPacienteDAO();
    $us = $classPacienteDAO->listarPaciente();

    echo "<table class='table'>";
    echo "  <tr>";
	echo "      <th scope='col'><p align='center'><font color=#2E64FE>Registro</font></p></th> ";
	echo "      <th scope='col'><p align='center'><font color=#2E64FE>Data</font></p></th> ";
    echo "      <th scope='col'><p align='center'><font color=#2E64FE>Histórico</font></p></th> ";
    echo "      <th scope='col'><p align='center'><font color=#2E64FE>Receituário</font></p></th> ";
    echo "      <th scope='col'><p align='center'><font color=#2E64FE>Exames</font></p></th> ";
	echo "      <th scope='col'><p align='center'><font color=#2E64FE>Exluir</font></p></th> ";
    echo "      <th scope='col'><p align='center'><font color=#2E64FE>Alterar</font></p></th>";
    echo "  <tr>";

    foreach ($us as $us) {
        echo "<tr>";
		echo "<td scope='col'><p align='center'>" . $us['idPaciente'] . "</p></td>";
		echo "<td scope='col'><p align='center'>" . $us['Registro_agenda'] . "</p></td>";
        echo "<td scope='col'><p align='center'>" . $us['historico'] . "</p></td>";
        echo "<td scope='col'><p align='center'>" . $us['receituario'] . "</p></td>";
		echo "<td scope='col'><p align='center'>" . $us['exames'] . "</p></td>";
            echo "<td scope='col'><p align='center'><a href='Controle/ControlePaciente.php?ACAO=excluirPaciente&idex=".$us["idPaciente"]."' onclick='return checkDelete()'><input type='button' name='excluir' id='excluir' value='excluir' class='btn btn-danger'></a></td>";
            echo "<td scope='col'><p align='center'><a href='Visao/FormAltPaciente.php?idex=" . $us["idPaciente"] . "'><input type='button' value='alterar' class='btn btn-warning'></a></td>";
        echo "</tr>";
    }


