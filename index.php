<?php
    $msg =@$_GET['MSG'];
    if($msg != null || $msg != ''){
        echo "<script>alert('$msg')</script>";
    }
    
    echo "</div>";
    ?>
    <html>
        <head>
            <title></title>
        </head>
        <body>
           
                    <br><h1 align="center"><font color="#2E64FE">Cadastro de Prontuário Eletrônico de Pacientes </font></h1>
          
                    <?php 
                   
                    include 'Visao/FormCadPaciente.php';
					 include 'Visao/ListarPaciente.php';
				
                    ?>
                               
                    
                       
                
    </body>
</html>
