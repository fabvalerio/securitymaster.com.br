<?php

// paginas htaccess ----------------------------------------------------

// Obtém o protocolo (http ou https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Obtém o host (ex: localhost ou dominio.com)
$host = $_SERVER['HTTP_HOST'];

// Obtém o caminho completo (URI)
$path = $_SERVER['REQUEST_URI'];

// Combina tudo para formar a URL completa
$urlCompleta = $protocol . $host . $path;

// Exibe a URL completa
$url = $protocol . $host . '/';

$url_site = $url; // O mesmo valor de $url é atribuído a $url_site


$verificarUrl = @explode('/', $urlCompleta);
$verificarUrlWWW =  @explode('.', $verificarUrl[2]);


//explode link por "/" come�ando com o "0" .."1" .. "2" ... ... "20"
if( !empty($_GET['page']) ){
$link = explode('/', $_GET['page']);
}else{
   $link = [];
}

if( !empty($link) ){
   foreach( $link AS $key => $val ){
      define('url'.$key, $val);
   }
}

if( empty($link[0]) ){

   $paginaExibi = "pages/home.php";

}elseif( !empty($link[0]) ){

	if( @is_file("pages/".$link[0].".php") ){
         $paginaExibi = "pages/".$link[0].".php";
	}	else{
      $paginaExibi = "pages/404.php";
	}

}else{
   $paginaExibi = "pages/404.php";

}

