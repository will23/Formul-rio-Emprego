<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 21/07/2016
 * Time: 16:25
 */
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$emaildestinatario  = 'contato@protonsprestadora.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$cargoremetente     =    utf8_decode(htmlspecialchars_decode($_POST['cargo']));
$nomeremetente      =    utf8_decode(htmlspecialchars_decode($_POST['nome']));
$nome_maeremetente  =    utf8_decode(htmlspecialchars_decode($_POST['nome_mae']));
$nome_pairemetente  =    utf8_decode(htmlspecialchars_decode($_POST['nome_pai']));
$emailremetente     =    trim($_POST['email']);
$cpfremetente       =    utf8_decode(htmlspecialchars_decode($_POST['cpf']));
$rgremetente        =    utf8_decode(htmlspecialchars_decode($_POST['rg']));
$data_nascremetente =    utf8_decode(htmlspecialchars_decode($_POST['data_nasc']));
$sexoremetente      =    utf8_decode(htmlspecialchars_decode($_POST['sexo']));
$endremetente       =    utf8_decode(htmlspecialchars_decode($_POST['end']));
$bairroremetente    =    utf8_decode(htmlspecialchars_decode($_POST['bairro']));
$compremetente      =    utf8_decode(htmlspecialchars_decode($_POST['comp']));
$cidaderemetente    =    utf8_decode(htmlspecialchars_decode($_POST['cidade']));
$ufremetente        =    utf8_decode(htmlspecialchars_decode($_POST['uf']));
$nacioremetente     =    utf8_decode(htmlspecialchars_decode($_POST['nacio']));
$naturemetente      =    utf8_decode(htmlspecialchars_decode($_POST['natu']));
$tel_residremetente =    utf8_decode(htmlspecialchars_decode($_POST['tel_resid']));
$celremetente       =    utf8_decode(htmlspecialchars_decode($_POST['cel']));
$formacaoremetente  =    utf8_decode(htmlspecialchars_decode($_POST['formacao']));
$cursoremetente     =    utf8_decode(htmlspecialchars_decode($_POST['curso']));
$portremetente      =    utf8_decode(htmlspecialchars_decode(isset($_POST['port']))) ? "Portugu&ecirc;s":null;    //idioma
$inglesremetente    =    utf8_decode(htmlspecialchars_decode(isset($_POST['ingles'])))? "Ingl&ecirc;s":null;     //idioma
$espanholremetente  =    utf8_decode(htmlspecialchars_decode(isset($_POST['espanhol'])))? "Espanhol":null; //idioma
$emp_1remetente     =    utf8_decode(htmlspecialchars_decode($_POST['emp_1']));
$cargo_1remetente   =    utf8_decode(htmlspecialchars_decode($_POST['cargo_1']));
$ent_1remetente     =    utf8_decode(htmlspecialchars_decode($_POST['ent_1']));
$sai_1remetente     =    utf8_decode(htmlspecialchars_decode($_POST['sai_1']));
$descr1remetente    =    utf8_decode(htmlspecialchars_decode($_POST['descr1']));
$emp_2remetente     =    utf8_decode(htmlspecialchars_decode($_POST['emp_2']));
$cargo_2remetente   =    utf8_decode(htmlspecialchars_decode($_POST['cargo_2']));
$ent_2remetente     =    utf8_decode(htmlspecialchars_decode($_POST['ent_2']));
$sai_2remetente     =    utf8_decode(htmlspecialchars_decode($_POST['sai_2']));
$descr2remetente    =    utf8_decode(htmlspecialchars_decode($_POST['descr2']));
$emp_3remetente     =    utf8_decode(htmlspecialchars_decode($_POST['emp_3']));
$cargo_3remetente   =    utf8_decode(htmlspecialchars_decode($_POST['cargo_3']));
$ent_3remetente     =    utf8_decode(htmlspecialchars_decode($_POST['ent_3']));
$sai_3remetente     =    utf8_decode(htmlspecialchars_decode($_POST['sai_3']));
$descr3remetente    =    utf8_decode(htmlspecialchars_decode($_POST['descr3']));
$inforemetente      =    utf8_decode(htmlspecialchars_decode($_POST['info']));



// Montando a mensagem a ser enviada no corpo do e-mail.

$mensagemHTML = '<body style="font: 14px Lucida Grande, Trebuchet MS, Verdana, sans-serif; color: #3b3b3b;">
		<h1 style="border-bottom: 3px solid #97DC22;background-color: #000;	color: #ddd;padding: 5px;">
            <img src="http://www.protonsprestadora.com.br/icon/logo.png"  width="10%" height="auto"  style="background-color: #000000;">
        </h1>

		<div class="secao" style="background-color: #eee;padding-left: 15px;border: #ccc 1px dotted;margin-top: 1em;">
            <br>
			<h2 style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;background-color: #DDD;padding-left: 5px;margin: 0 0 0 -15px;font-weight: normal;">Dados Pessoais</h2>
			<p><b>Cargo Pretendido:</b> <i>'.$cargoremetente.'</i></p>
				<div id="hcard-Ademir-Mazer-Jr" class="vcard">
					 <div style="text-transform: uppercase"><b>'.$nomeremetente.'</b></div><p>
					 <div><b>Nome da M&atilde;e:</b> '.$nome_maeremetente.'</div>
					 <div><b>Nome do Pai:</b> '.$nome_pairemetente.'</div>
					 <div class="email"><b>Email:</b> '.$emailremetente.'</div>
					 <div><b>CPF:</b> '.$cpfremetente .'</div>
					 <div class="email"><b>RG:</b> '.$rgremetente.'</div>
					 <div><b>Data Nascimento:</b> '.$data_nascremetente.'</div>
					 <div><b>Sexo:</b> '.$sexoremetente.'</div>
					 <div class="adr">
						  <span class="locality"><b>Endere&ccedil;o:</b> '.$endremetente.'</span> -
						  <span class="region"> '.$bairroremetente.'</span>
					 </div>
					 <div><b>Complemento:</b> '.$compremetente.'</div>
					 <div class="adr">
						  <span class="locality"><b>Cidade:</b> '.$cidaderemetente.'</span> -
						  <span class="region"><b>Estado:</b> '.$ufremetente.'</span>
					 </div>
					 <div><b>Nacionalidade:</b> '.$nacioremetente.'</div>
					 <div><b>Naturalidade:</b> '.$naturemetente.'</div>
					 <div><b>Telefone Residencial:</b> '.$tel_residremetente.'</div>
					 <div><b>Celular:</b> '.$celremetente.'</div>
				</div>
		</div><br>

		<div class="secao" style="background-color: #eee;padding-left: 15px;border: #ccc 1px dotted;margin-top: 1em;">
			<h2 style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;background-color: #DDD;padding-left: 5px;margin: 0 0 0 -15px;font-weight: normal;">Forma&ccedil;&atilde;o Acad&ecirc;mica</h2>

			<div><label><b>Forma&ccedil;&atilde;o:</b></label> '.$formacaoremetente.'</div>
			<div><label><b>Curso:</b></label> '.$cursoremetente.'</div>
			<div><label><b>Idiomas:</b></label> '.$portremetente.' - '.$inglesremetente.' - '.$espanholremetente.'</div>
		</div><br>

		<div class="secao" style="background-color: #eee;padding-left: 15px;border: #ccc 1px dotted;margin-top: 1em;">
			<h2 style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;background-color: #DDD;padding-left: 5px;margin: 0 0 0 -15px;font-weight: normal;">Experi&ecirc;ncia Profissional</h2>
			<br>
			<div><label><b>Empresa:</b></label> '.$emp_1remetente.'</div>
			<div><label><b>Cargo:</b></label> '.$cargo_1remetente.'</div>
			<div><label><b>Data de Entrada:</b></label> '.$ent_1remetente.'</div>
			<div><label><b>Data de Sa&iacute;da:</b></label> '.$sai_1remetente.'</div>
			<div><label><b>Descri&ccedil;&atilde;o Sum&aacute;ria:</b></label> '.$descr1remetente.'</div>
			<br><br>
			<div><label><b>Empresa:</b></label> '.$emp_2remetente.'</div>
			<div><label><b>Cargo:</b></label> '.$cargo_2remetente.'</div>
			<div><label><b>Data de Entrada:</b></label> '.$ent_2remetente.'</div>
			<div><label><b>Data de Sa&iacute;da:</b></label> '.$sai_2remetente.'</div>
			<div><label><b>Descri&ccedil;&atilde;o Sum&aacute;ria:</b></label> '.$descr2remetente.'</div>
			<br><br>
			<div><label><b>Empresa:</b></label> '.$emp_3remetente.'</div>
			<div><label><b>Cargo:</b></label> '.$cargo_3remetente.'</div>
			<div><label><b>Data de Entrada:</b></label> '.$ent_3remetente.'</div>
			<div><label><b>Data de Sa&iacute;da:</b></label> '.$sai_3remetente.'</div>
			<div><label><b>Descri&ccedil;&atilde;o Sum&aacute;ria:</b></label> '.$descr3remetente.'</div>
		</div><br>

		<div class="secao" style="background-color: #eee;padding-left: 15px;border: #ccc 1px dotted;margin-top: 1em;">
			<h2 style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;background-color: #DDD;padding-left: 5px;margin: 0 0 0 -15px;font-weight: normal;">Forma&ccedil;&atilde;o Adicionais</h2>
			<br>
			<div><label><b>Informa&ccedil;&otilde;es Adicionais:</b></label> '.$inforemetente.'</div>
		</div>
		<br>
		<h1 style="border-top: 3px solid #97DC22;background-color: #000; color: #ddd;padding: 5px; ">
        </h1>
	</body>';
$html = $mensagemHTML;

require 'classes/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.protonsprestadora.com.br';
$mail->SMTPAuth = true;
$mail->Username = 'contato@protonsprestadora.com.br';
$mail->Password = '@servico10';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = 'contato@protonsprestadora.com.br';
$mail->FromName = 'Novo Curriculo enviado!';
$mail->addAddress($emaildestinatario);

$mail->isHTML(true);

$mail->Subject = 'Novo Curriculo - www.protonsprestadora.com.br';
$mail->Body    = $mensagemHTML;

if(!$mail->send()) {
    echo "Erro! Currículo não enviado. \n".$mail->ErrorInfo; //mensagem de erro
} else {
    echo "Seu Currículo foi enviado!"; // Página que será redirecionada
}
?>