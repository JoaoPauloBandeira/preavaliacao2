<?php
/*
 *	Auto validaчуo e verificaчуo com jQuery e PHP
 * 
 * @copyright
 * Copyright (C) 2014 butSource.
 *
 * http://butsource.com.br/blog/auto-validacao-e-verificacao-com-jquery-e-php
 *
 */

if (isset($_POST['usuario'])) {
	
	$usuario = mysql_real_escape_string($_POST['usuario']);
	
	$sql = mysql_fetch_assoc(mysql_query("SELECT id FROM usuarios WHERE nome_usuario = '{$usuario}' ORDER BY id ASC LIMIT 0,1"));	
	
	echo ($sql['id']) ? 1 : 0;
}

if (isset($_POST['email'])) {
	
	$email = mysql_real_escape_string($_POST['email']);
	
	$sql = mysql_fetch_assoc(mysql_query("SELECT id FROM usuarios WHERE email_usuario = '{$email}' ORDER BY id ASC LIMIT 0,1"));	
	
	echo ($sql['id']) ? 1 : 0;
}
?>