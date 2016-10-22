<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protons Soluções em Serviços</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- jQuery library -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
    <!--CSS page -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--CSS Style -->
    <style>
        .img-logo {
            bottom: 542px !important;
        }
        .text-left{
            color: #000;
            font-size: 1.8em;
            margin-left: 390px;
        }
        .new-text{
            margin-left: -145px;
            text-align: justify;
        }
        #grad3 {
            width: 13%;
            height: 3px;
            background: #54c41b;
            margin-left: 117px;
        }
        p{
            font-size: 30px;
            text-transform: uppercase;

        }
        a{
            padding: 2px;
        }
        .col-xs-6, .col-sm-6 {
            padding-left: 360px;
            padding-top: 12px;
            display: inline-flex;
        }
        /* IMAGEM TRABALHE CONOSCO */
        #img-trab{
            width: 100%;
            height: auto;
            margin-top: -40px;
        }
        .TitLs{
            text-transform: uppercase;
        }
		#endereco {
				visibility: hidden;
            }
		
		/* MOBILE */
        @media only screen and (min-width: 200px) and (max-width: 800px) {
		body{
                width: 132%;
            }
			.img-logo {
				position: absolute;
				bottom: 543px !important;
				width: 370px;
				margin-left: 5px;
			}	
		
            .navbar-nav {
                padding-left: 0;
            }
            .nav > li {
                position: absolute;
                display: table-column;
            }
            li#one {
                margin-left: -28px;
                font-size: smaller;
            }
            li#two {
                margin-left: 15px;
                font-size: smaller;
            }
            li#tree {
                margin-left: 104px;
                font-size: smaller;
            }
            li#for {
                margin-left: 171px;
                font-size: smaller;
            }
            li#five {
                margin-left: 232px;
                font-size: smaller;
            }
            li#six {
                margin-left: 363px;
                font-size: smaller;
            }
		.text-left {
			color: #000;
			font-size: 1.8em;
			margin-left: 10px;
		}
		.new-text {
			margin-left: 5px;
			width: 320px;
		}
		#contato {
                margin-left: -370px;
                margin-top: 2px;
                width: auto;
                padding-right: 14px;
            }
            #grad6 {
                width: 32%;
            }
            #grad2 {
                height: 490px;
            }
            #endereco {
                margin-left: -220px;
                margin-top: 4px;
                width: 172px;
				visibility: hidden;
            }
            #grad7 {
                width: 23%;
            }
            .col-xs-6, .col-sm-6 {
                padding-top: 102px;
                display: flex;
                float: left;
                margin-left: -716px;
                width: auto;
            }
		
		}

        /* RESOLUÇÃO PC 1920px */
        @media only screen and (min-width: 1920px) {
            .img-logo {
                bottom: 835px !important;
                width: 90%;
                margin-left: -315px;
            }
        }
    </style>
    <link rel="stylesheet" href="form/colorbox.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="form/jquery.mincolor.js"></script>


    <script src="form/jquery.min.js"></script>

    <!-- SINTESE: onFocus="clearText(this)" onBlur="clearText(this)" -->
    <script type="text/javascript">
        function clearText(field){

            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;

        }
    </script>

    <script src="form/jquery.js" type="text/javascript"></script>
    <script src="form/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function clearText(field){

            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;

        }
    </script>

    <script src="form/jquery.js" type="text/javascript"></script>
    <script src="form/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $.mask.definitions['~']='[+-]';
            $('#data_nasc').mask('99/99/9999');
            $('#ent_1').mask('99/99/9999');
            $('#ent_2').mask('99/99/9999');
            $('#ent_3').mask('99/99/9999');
            $('#sai_1').mask('99/99/9999');
            $('#sai_2').mask('99/99/9999');
            $('#sai_3').mask('99/99/9999');
            $('#tel').mask('(99) 9999-9999');
            $('#tel_resid').mask('(99) 9999-9999');
            $('#cel').mask('(99) 9-9999-9999');
            $('#fax').mask('(99) 9999-9999');
            $("#cep").mask("99999-999");
            $("#cpf").mask("999.999.999-99");

        });
    </script>
    <!-- MASCARAS -->

    <!-- ALERTA CAMPOS VAZIS -->
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="js/jquery-validation-v1.11.1.js"></script>
    <script language="javascript">
       $(function(){
           /* ========================================================================= */
           /*	Contact Form
            /* ========================================================================= */

           $('#formu').validate({
               rules: {
                   name: {
                       required: true,
                       minlength: 2
                        }
                   },
               messages: {
                   name: {
                       required: "Você não digitou seu nome.",
                       minlength: "O seu nome deve ser composto de pelo menos 2 caracteres"
                   }
               },
               submitHandler: function(form) {
                   $(form).ajaxSubmit({
                       type:"POST",
                       data: $(form).serialize(),
                       url:"envia_trabalhe_conosco.php",
                       success: function() {
                           $('#formu :input').attr('disabled', 'disabled');
                           $('#formu').fadeTo( "slow", 0.15, function() {
                               $(this).find(':input').attr('disabled', 'disabled');
                               $(this).find('label').css('cursor','default');
                               $('#success').fadeIn();
                               alert('Curriculo enviado com sucesso!');
                           });
                       },
                       error: function() {
                           $('#formu').fadeTo( "slow", 0.15, function() {
                               $('#error').fadeIn();
                               alert('Erro! Curriculo não enviado.');
                           });
                       }
                   });
               }
           });
       });

    </script>
</head>
<body id="back">
<?php include_once("analyticstracking.php") ?>
<div id="grad1"></div>

<div class="container">
    <div class="img-logo">
        <img src="icon/logo.png" width="100%" height="auto">
    </div>
</div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <ul class="nav navbar-nav">
            <li id="one"><a href="index.html">Home</a> </li>
            <li id="two"><a href="quemsomos.html">Quem Somos</a></li>
            <li id="tree"><a href="servicos.html">Serviços</a></li>
            <li id="for"><a href="eventos.html">Eventos</a></li>
            <li id="five" class="active"><a href="#">Trabalhe Conosco</a></li>
            <li id="six"><a href="contato.html">Contato</a></li>
        </ul>
    </div>
</nav>

<!-- INICIO TRABALHE CONOSCO -->
<div class="container">
    <div class="img-bar">
        <img src="images/trabalhe_conosco.jpg" id="img-trab">
    </div>
</div>

<div class="container">
    <div class="text-left">
        <br>
        <p>Trabalhe Conosco</p>
        <div id="grad3"></div>
        <br>
        <div class="new-text" style="text-align: justify">
            Trabalhar aqui é viver em um ambiente muito alegre e agradável, onde todos buscam contribuir,<br>
            não só para nossa liderança em serviços, como também para o cumprimento de nossa missão.
        </div>
    </div><!-- /text-left -->
</div><!-- /container -->

<!-- INICIO FORMULARIO -->

<div align="center">
<table width="894" height="642" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td height="123" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td align="center" valign="top">
<table width="99%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
    <td width="26%" align="right" valign="top"></td>
</tr>
<tr>
<td height="330" align="center" valign="top" bgcolor="#FFFFFF">
<table width="98%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td align="left" valign="top"><!-- FORM -->
     <span class="TitContPag"><div align="center">

     <form action="envia_trabalhe_conosco.php" method="post" enctype="multipart/form-data" name="formu" id="formu">
     <span class="TitTitulo"><br><br>Formulario</span><br>
     <table width="550" border="0" cellpadding="0" cellspacing="2" class="tablecartao">
     <tbody>
     <tr>
         <td height="37" colspan="2" align="center" valign="middle"><strong class="TitLs" style="color: #000">Informações Pessoais</strong> </td>
     </tr>
     <tr>
         <td width="151" align="right" valign="middle"><strong style="color: #FF0000">*</strong>Cargo Pretendido </td>
         <td width="393" align="left" valign="middle">
             <label>
                 <select name="cargo" id="cargo" required="">
                     <option value="">Selecione</option>
                     <option value="ANALISTA DE DP">ANALISTA DE DP</option>
                     <option value="ANALISTA DE PCE">ANALISTA DE PCE</option>
                     <option value="ANALISTA DE PLANEJAMENTO E CONTROLE DE ESTOQUE">ANALISTA DE PLANEJAMENTO E CONTROLE DE ESTOQUE</option>
                     <option value="ANALISTA DE RH">ANALISTA DE RH</option>
                     <option value="ASSISTENTE ADMINISTRATIVO">ASSISTENTE ADMINISTRATIVO</option>
                     <option value="ASSISTENTE DE AVARIA">ASSISTENTE DE AVARIA</option>
                     <option value="ASSISTENTE DE MARKETING">ASSISTENTE DE MARKETING</option>
                     <option value="ASSISTENTE FINANCEIRO">ASSISTENTE FINANCEIRO</option>
                     <option value="ATENDENTE DE LANCHONETE">ATENDENTE DE LANCHONETE</option>
                     <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                     <option value="AUXILIAR DE ALMOXARIFADO">AUXILIAR DE ALMOXARIFADO</option>
                     <option value="AUXILIAR DE COMPRAS">AUXILIAR DE COMPRAS</option>
                     <option value="AUXILIAR DE CUSTO">AUXILIAR DE CUSTO</option>
                     <option value="AUXILIAR DE DEPARTAMENTO PESSOAL">AUXILIAR DE DEPARTAMENTO PESSOAL</option>
                     <option value="AUXILIAR DE ESCRITÓRIO">AUXILIAR DE ESCRITÓRIO</option>
                     <option value="AUXILIAR DE FATURAMENTO">AUXILIAR DE FATURAMENTO</option>
                     <option value="AUXILIAR DE FROTA">AUXILIAR DE FROTA</option>
                     <option value="AUXILIAR DE LOGÍSTICA">AUXILIAR DE LOGÍSTICA</option>
                     <option value="AUXILIAR DE MARKETING">AUXILIAR DE MARKETING</option>
                     <option value="AUXILIAR DE RH">AUXILIAR DE RH</option>
                     <option value="AUXILIAR DE VENDAS">AUXILIAR DE VENDAS</option>
                     <option value="CALL CENTER">CALL CENTER</option>
                     <option value="CONFERENTE">CONFERENTE</option>
                     <option value="EMBALADOR">EMBALADOR</option>
                     <option value="ENCARREGADO DE PCE">ENCARREGADO DE PCE</option>
                     <option value="FISCAL DE CAIXA">FISCAL DE CAIXA</option>
                     <option value="FISCAL DE LOJA">FISCAL DE LOJA</option>
                     <option value="GARAGISTA">GARAGISTA</option>
                     <option value="GERENTE DE COMPRAS">GERENTE DE COMPRAS</option>
                     <option value="GERENTE DE LOGÍSTICA">GERENTE DE LOGÍSTICA</option>
                     <option value="GERENTE DE MARKETING">GERENTE DE MARKETING</option>
                     <option value="GERENTE DE RH">GERENTE DE RH</option>
                     <option value="GERENTE FINANCEIRO">GERENTE FINANCEIRO</option>
                     <option value="MOTOBOY">MOTOBOY</option>
                     <option value="MOTORISTA">MOTORISTA</option>
                     <option value="OFFICE BOY">OFFICE BOY</option>
                     <option value="OFICIAL DE MANUTENÇÃO">OFICIAL DE MANUTENÇÃO</option>
                     <option value="OPERADOR DE CAIXA">OPERADOR DE CAIXA</option>
                     <option value="OPERADOR DE EMPILHADEIRA">OPERADOR DE EMPILHADEIRA</option>
                     <option value="PORTEIRO">PORTEIRO</option>
                     <option value="PROMOTORA">PROMOTORA</option>
                     <option value="RECEPCIONISTA DE CRÉDITO">RECEPCIONISTA DE CRÉDITO</option>
                     <option value="RECEPCIONISTA-GUARDA VOLUME">RECEPCIONISTA-GUARDA VOLUME</option>
                     <option value="RECREADORA">RECREADORA</option>
                     <option value="SERVIǇOS GERAIS">SERVIÇOS GERAIS</option>
                     <option value="SUPERVISOR">SUPERVISOR</option>
                     <option value="SUPERVISOR DE DEPOSITO">SUPERVISOR DE DEPOSITO</option>
                     <option value="SUPERVISOR DE EXPEDIÇÃO">SUPERVISOR DE EXPEDIÇÃO</option>
                     <option value="TELEFONISTA">TELEFONISTA</option>
                     <option value="VENDEDOR">VENDEDOR</option>
                     <option value="VIGIA">VIGIA</option>
                     <option value="OUTROS - PNE (Portador de Necessidades Especiais)">OUTROS - PNE (Portador de Necessidades Especiais)</option>
                 </select>
             </label>
         </td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color: #FF0000">*</strong>Nome:</td>
         <td align="left" valign="middle"><input name="nome" type="text" id="nome" size="38" required="required" class="maiusculo"></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Nome da Mãe:</td>
         <td align="left" valign="middle"><input name="nome_mae" type="text" id="nome3" size="38" required="required" class="maiusculo"></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000"></strong>Nome do Pai:</td>
         <td align="left" valign="middle"><input name="nome_pai" type="text" id="nome_pai" size="38"  class="maiusculo"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">E-mail: </td>
         <td align="left" valign="middle"><input name="email" type="text" id="email" size="38"></td>
     </tr>
     <!--<tr>
         <td align="right" valign="middle">Foto:</td>
         <td align="left" valign="middle">
             <label for='uploaded_file'>
                 <input type="file" name="uploaded_file" id="uploaded_file">
             </label>
         </td>
     </tr>1-->
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>CPF:</td>
         <td align="left" valign="middle"><input name="cpf" type="text" id="cpf" size="15" required=""></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>RG:</td>
         <td align="left" valign="middle"><input name="rg" type="text" id="rg" size="15" required=""></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Data Nasc.:</td>
         <td align="left" valign="middle"><input name="data_nasc" type="text" id="data_nasc" size="15" required="required"></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Sexo:</td>
         <td align="left" valign="middle"><input name="sexo" type="radio" value="Masculino" checked="checked" style="margin-left: 3px">
             Masculino
             <input name="sexo" type="radio" value="Feminino">
             Feminino</td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Endereço:</td>
         <td align="left" valign="middle"><input name="end" type="text" id="end" size="40" required=""></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Bairro:</td>
         <td align="left" valign="middle"><input name="bairro" type="text" id="bairro" size="15" required="">        </td>
     </tr>
     <tr>
         <td align="right" valign="middle">Complemento:</td>
         <td align="left" valign="middle"><input name="comp" type="text" id="comp" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Cidade:</td>
         <td align="left" valign="middle"><input name="cidade" type="text" id="cidade" size="15" required=""></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Estado:</td>
         <td align="left" valign="middle"><select name="uf" required="required">
                 <option value="">-- </option>
                 <option value="AP">AP </option>
                 <option value="AC">AC </option>
                 <option value="AL">AL </option>
                 <option value="AM">AM </option>
                 <option value="BA">BA </option>
                 <option value="CE">CE </option>
                 <option value="DF">DF </option>
                 <option value="ES">ES </option>
                 <option value="GO">GO </option>
                 <option value="MA">MA </option>
                 <option value="MG">MG </option>
                 <option value="MS">MS </option>
                 <option value="MT">MT </option>
                 <option value="PA">PA </option>
                 <option value="PB">PB </option>
                 <option value="PE">PE </option>
                 <option value="PI">PI </option>
                 <option value="PR">PR </option>
                 <option value="RJ">RJ </option>
                 <option value="RN">RN </option>
                 <option value="RO">RO </option>
                 <option value="RR">RR </option>
                 <option value="RS">RS </option>
                 <option value="SC">SC </option>
                 <option value="SP">SP </option>
                 <option value="TO">TO </option>
             </select></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Nacionalidade:</td>
         <td align="left" valign="middle"><input name="nacio" type="text" id="nacio" size="15" required="required"></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Naturalidade:</td>
         <td align="left" valign="middle"><input name="natu" type="text" id="natu" size="15" required=""></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Telefone Residencial:</td>
         <td align="left" valign="middle"><input name="tel_resid" type="text" id="tel_resid" size="15" required=""></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Celular:</td>
         <td align="left" valign="middle"><input name="cel" type="text" id="cel" size="15"></td>
     </tr>
     <tr>
         <td height="37" colspan="2" align="center" valign="middle"><strong class="TitLs" style="color: #000">Formação Acadêmica </strong></td>
     </tr>
     <tr>
         <td align="right" valign="middle"><strong style="color:#FF0000">*</strong>Formação: </td>
         <td align="left" valign="middle"><select name="formacao" id="formacao" required="">
                 <option value="">--</option>
                 <option value="Ensino Medio Completo">Ensino Médio Completo</option>
                 <option value="Ensino Medio incompleto">Ensino Médio incompleto</option>
                 <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                 <option value="Ensino Fundamental incompleto">Ensino Fundamental incompleto</option>
                 <option value="Superior Completo">Superior Completo</option>
                 <option value="Superior Incompleto">Superior Incompleto</option>
                 <option value="Pos-graduacao">Pós-Graduação</option>
                 <option value="Outros">Outros</option>
             </select></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Curso:</td>
         <td align="left" valign="middle"><input name="curso" type="text" id="curso" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Idiomas:</td>
         <td align="left" valign="middle">
             <table width="40%" border="0" cellspacing="0" cellpadding="0">
                 <tbody>
                 <tr>
                     <td align="left"><label style="display: inline-flex;margin: 6px;"><input name="port" type="checkbox" value="PORTUGUÊS">Português</label></td>
                     <td align="left"><label style="display: inline-flex;margin: 6px;"><input name="ingles" type="checkbox" value="INGLÊS">Inglês</label></td>
                     <td align="left"><label style="display: inline-flex;margin: 6px;"><input name="espanhol" type="checkbox" value="ESPANHOL">Espanhol</label></td>
                 </tr>
                 </tbody>
             </table>
         </td>
     </tr>
     <tr>
         <td height="37" colspan="2" align="center" valign="middle"><strong class="TitLs" style="color: #000">Experiência Profissional </strong></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Empresa: </td>
         <td align="left" valign="middle"><input name="emp_1" type="text" id="emp_1" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Cargo: </td>
         <td align="left" valign="middle"><input name="cargo_1" type="text" id="cargo_1" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Data Entrada: </td>
         <td align="left" valign="middle"><input name="ent_1" type="text" id="ent_1" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Data Saída: </td>
         <td align="left" valign="middle"><input name="sai_1" type="text" id="sai_1" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Descrição Sumária:</td>
         <td align="left" valign="middle"><label>
                 <textarea name="descr1" cols="35" rows="5" id="descr1"></textarea>
             </label></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Empresa: </td>
         <td align="left" valign="middle"><input name="emp_2" type="text" id="emp_2" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Cargo: </td>
         <td align="left" valign="middle"><input name="cargo_2" type="text" id="cargo_2" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Data Entrada: </td>
         <td align="left" valign="middle"><input name="ent_2" type="text" id="ent_2" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Data Saída: </td>
         <td align="left" valign="middle"><input name="sai_2" type="text" id="sai_2" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Descrição Sumária:</td>
         <td align="left" valign="middle"><label>
                 <textarea name="descr2" cols="35" rows="5" id="descr2"></textarea>
             </label></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Empresa: </td>
         <td align="left" valign="middle"><input name="emp_3" type="text" id="emp_3" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Cargo: </td>
         <td align="left" valign="middle"><input name="cargo_3" type="text" id="cargo_3" size="38"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Data Entrada: </td>
         <td align="left" valign="middle"><input name="ent_3" type="text" id="ent_3" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Data Saída: </td>
         <td align="left" valign="middle"><input name="sai_3" type="text" id="sai_3" size="15"></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Descrição Sumária:</td>
         <td align="left" valign="middle"><label>
                 <textarea name="descr3" cols="35" rows="5" id="descr3"></textarea>
             </label></td>
     </tr>
     <tr>
         <td height="37" colspan="2" align="center" valign="middle"><strong class="TitLs" style="color: #000">Informações Adicionais </strong></td>
     </tr>
     <tr>
         <td align="right" valign="middle">Informações<br>Adicionais:  </td>
         <td align="left" valign="middle"><textarea name="info" cols="40" rows="5" id="info"></textarea></td>
     </tr>
     <tr>
         <td align="left" valign="middle">&nbsp;</td>
         <td align="left" valign="middle">&nbsp;</td>
     </tr>
     <tr>
         <td align="left" valign="middle"></td>
         <td align="right" valign="middle" style="text-align: left;">
         </td>
     </tr>
     <tr>
         <td height="44" align="left" valign="middle">&nbsp;</td>
         <td align="left" valign="middle">

             <label>
                 <button type="submit" onclick="return verifica()" value="Cadastrar" name="Cadastrar" class="button" style="padding: 5px 14px; margin: 9px 2px; color: #ffffff; font-size: 16px;"><b>Cadastrar</b></button>
             </label></td>
     </tr>
     </tbody>
     </table>
     </form>
     </div>
     </span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div><br><br><br><br>
<!-- FIM FORMULARIO -->

<!-- Inicio Footer -->
<footer class="container-fluid">
    <div class="row" id="row-rodape">
        <div class="col-xs-1 col-sm-1" id="contato">
            <h4>Contato</h4>
            <div id="grad6"></div><br>
            <span class="glyphicon glyphicon-earphone"></span>
            21 3027-7292 / 21 96419-8934<br>
            <span class="glyphicon glyphicon-envelope"></span>
            contato@protonsprestadora.com.br
        </div>
        <div class="col-xs-1 col-sm-1" id="endereco">
            <h4>Endereço</h4>
            <div id="grad7"></div><br>
            Rua Demétrio de Toledo, 368 - Ilha do Governador - Rio de Janeiro.
        </div>
        <br>
        <div class="col-xs-6 col-sm-6">
            <a href="https://goo.gl/RxOBPa" target="_blank"><img src="icon/facebook-logo.png" width="40" height="40"></a>
            <a href="http://wwww.twitter.com" target="_blank"><img src="icon/twitter-logo.png" width="40" height="40"></a>
            <a href="http://wwww.linkedin.com" target="_blank"><img src="icon/linkedin-logo.png" width="40" height="40"></a>
        </div>
    </div><!-- /row -->

</footer><!-- /container-fluid -->


</body>
</html>