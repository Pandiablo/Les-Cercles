<!DOCTYPE html> 
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
      <head> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <link href="css/print.css" media="print" rel="stylesheet" type="text/css" />
      <!--[if IE]>
      <link href="/cercles/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <![endif]--> 
      <title>Erreur 404 | Les Cercles</title>
      <style>
		p {
			font-size: 30px;
		}
	  </style>
      </head>
<div>
<center>
<img id="logo" src="http://lescercles.net/img/logo.png" alt="Logo des Cercles" />
</center>
<br />
<br />
<br />
<br />
<center>
<p>Une erreur <span style="color: red;">404</span> est survenue !</p><br />
<p>Nous sommes d&eacute;sol&eacute;, votre page est introuvable !</p>
</center>

<?php
if (!empty($_SERVER['HTTP_REFERER'])) {
  echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Retour page pr&eacute;c&eacute;dente</a><br />';

}
echo '<a href="http://lescercles.net">Accueil des Cercles</a>';
?>
</div>
</html>