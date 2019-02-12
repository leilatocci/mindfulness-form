<?php

if (isset($_POST['name'] ) && ($_POST['surname']) && ($_POST['age']) && ($_POST['DNI']) && ($_POST['phone']) && ($_POST['email']) && ($_POST['mindfulnessExperience']) && ($_POST['psycho']) && ($_POST['treatment']) && ($_POST['mood']) && ($_POST['comments']))
{
	
     
	$content = '<p><b>Nombre: </b>'. $_POST['name'].'<br><br></p><p><b>Apellido: </b>'. 
  $_POST['surname'].'<br><br></p><p><b>Edad: </b>'. 
  $_POST['age'].'<br><br></p><p><b>DNI: </b>'. 
  $_POST['DNI'].'<br><br></p><p><b>Telefono: </b>'. 
     $_POST['phone'].'<br><br></p><p><b>Email: </b>'. 
     $_POST['email'].'<br><br></p><p><b>Experiencia en meditacion?: </b>'. 
     $_POST['mindfulnessExperience'].'<br><br></p><p><b>¿Recibís o has recibido atención psiquiátrica/psicológica? ¿Tomás alguna medicación?: </b>'. 
     $_POST['psycho'].'<br><br></p><p><b>Indicá si recibís o has recibido algún tratamiento médico que consideres importante: </b>'. 
     $_POST['treatment'].'<br><br></p><p><b>¿Cómo describirías tu estado de ánimo últimamente?: </b>'. $_POST['mood'] .'<br><br></p><p><b>Comentarios adicionales: </b>'. $_POST['comments'] .'<br><br></p>';
    
	
	 $header = "De: ". $_POST['email'] ."\nReply-To:". $_POST['email'] ."\n"; // datos que necesita php para enviar el mail
     $header .= "Mime-Version: 1.0\n";
     $header .= "Content-type: text/html; charset=utf-8\r\n";
     $subject = "Me quiero inscribir a un taller de Mindfulness Caballito";    // asunto del mail
     
	
	if( mail ("mindfulnesscaballito@gmail.com", $subject, $content, $header ))  // validacion del mail
    {      
	
		
		header('Location:answerForm.html');
    }
	else
	{
          echo "<h1>Error al enviar el mail</h1>";
	}
}
else
{
	

		  echo "<h1>No completaste todos los datos! Volvé a llenar TODOS los campos</h1>";
}
	
?>