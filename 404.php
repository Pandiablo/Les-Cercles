<!DOCTYPE html> 
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
      <head> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link rel="stylesheet" href="http://lescercles.net/css/style.css" type="text/css" /> 
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