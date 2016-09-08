<?php
	$nome = '';
	$email = '';
	$empresa = '';
	$telefone = '';
	$mensagem = '';
	$dataenvio = date('d-m-Y');

	if (!isset($_POST['nome'])) {
		header("Location: mailerror.php");
	} else {
		$nome = $_POST['nome'];
	}

	if (!isset($_POST['empresa'])) {
		header("Location: mailerror.php");
	} else {
		$empresa = $_POST['empresa'];
	}

	if (!isset($_POST['email'])) {
		header("Location: mailerror.php");
	} else {
		$email = $_POST['email'];
	}

	if (!isset($_POST['telefone'])) {
		header("Location: mailerror.php");
	} else {
		$telefone = $_POST['telefone'];
	}

	if (!isset($_POST['mensagem'])) {
		header("Location: mailerror.php");
	} else {
		$mensagem = $_POST['mensagem'];
	}

	$assunto = 'Contato realizado através do novo site!';
	$destinatario = 'fapnando@gmail.com';

	$mensagemFormatada = "
	    <html>
	        <table>
	            <tr>
	              <td>
	    			<tr>
	                 <td width='500'>Nome:$nome</td>
	                </tr>
	                <tr>
	                  <td width='320'>E-mail:<b>$email</b></td>
	       			</tr>
	        		<tr>
	                  <td width='320'>Telefone:<b>$telefone</b></td>
	                </tr>
	       			<tr>
	                  <td width='320'>Empresa:$empresa</td>
	                </tr>
	                <tr>
	                  <td width='320'>Mensagem:$mensagem</td>
	                </tr>
	            </td>
	          </tr> 
	          <tr>
	            <td>Este e-mail foi enviado em <b>$dataenvio</b></td>
	          </tr>
	        </table>
	    </html>
	    ";

		$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: CONTATO NOVO SITE pemac@pemaceng.com.br';
	  
	  	mail($destinatario, $assunto, $mensagemFormatada, $headers);

		echo $mensagemFormatada; die();
?>