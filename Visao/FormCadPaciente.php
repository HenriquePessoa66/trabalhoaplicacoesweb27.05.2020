<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        
			<br><br><h2><font color="#2E64FE">Formulário:</font></h2>
        <div class="col-md-4 mb-3">
            <hr>
        </div>
		<div class="col-md-4 mb-3" >
        <form method="post" action="./Controle/ControlePaciente.php?ACAO=cadastrarPaciente" >
				
                <font color="#2E64FE">Histórico:</font><input class="form-control" type="text" name="historico" maxlength="1000" placeholder="Digite o Histórico" />
                <br>
				<font color="#2E64FE">Receituário:</font><input class="form-control" type="text" name="receituario" maxlength="500" placeholder="Digite o Receituário"/>
                <br>
				<font color="#2E64FE">Exames:</font><input class="form-control" type="text" name="exames" maxlength="500" placeholder="Digite os Exames"/>
                <br>
                <button class="btn btn-primary" type="submit" value="Registrar">Registrar</button> 
				<button class="btn btn-primary" type="reset" value="Limpar">Limpar</button>
            </div>
			
			<table border=0 align=center width=500>
			<td><font color="#2E64FE">Buscar:</font><input class="form-control" type="text" name="buscar" maxlength="80" placeholder="Digite o nome"/><br>
			<button class="btn btn-primary" type="search" value="buscar">Buscar</button></td>
	        </table>
			
			<br>
        </form>
    </body>
</html>
