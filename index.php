<?php
  session_start();
  require_once 'connect.php';
?>
  <!--  Cette page etant temporaire, elle a ete modifiee a de nombreuses reprises sans  que l'on prennent soin ni de son code, ni de la presentation de ce dernier.
  En echange, nous vous promettons, une application des Cercles propres, optimisee et utilisant les dernieres technologies deployees. -->
  <!DOCTYPE html> 
  <html> 
      <head> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <link href="css/print.css" media="print" rel="stylesheet" type="text/css" />
      <!--[if IE]>
      <link href="/cercles/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <![endif]-->
      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <title>Projet Les Cercles</title> 
      <script>
                  function change_onglet(name)
                  {
                  	document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                    document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                    document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                    document.getElementById('contenu_onglet_'+name).style.display = 'block';
                    anc_onglet = name;
                  }

                  $(document).ready(function(){
                      $("#part").click(function(){
                          $("#partContent").slideToggle("slow");
                      });
                       $('#musicSwitch').click(function(){
                          var song = document.getElementById('musique');
                          if(song.paused){
                            $('#musicSwitch').attr("src","http://lescercles.net/images/note_musique.png");
                              song.play();
                          }
                          else {
                            $('#musicSwitch').attr("src","http://lescercles.net/images/note_musique_baree.png");
                              song.pause();
                          }
                      });
  
                  });
		  </script>
      </head> 
      <script>

      </script>
      
      <?php
					$sql = "SELECT * FROM news ORDER BY id DESC";
					$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br/>'.mysql_error());		
	   ?>
      
      
      
      
      
      
      
      
      <body>       
              
                 <center><a href="index.php"><img class="logo" src="images/logo.png" alt="Logo des Cercles" /></a></center>

          <div class="wrap">
          
          
             <audio src="http://lescercles.net/DawnOfLegends.mp3" id="musique" loop style="position:absolute; bottom: 45%; left: 1%;	"></audio>

             <img id="musicSwitch" src="http://lescercles.net/images/note_musique.png" alt="Musique switch" style="position:fixed; bottom: 45%; left: 1%; " />
            
             <div><img src="http://lescercles.net/css/img/top.png" style="position: relative; top:5px;"/></div>
              <div class="content">
                  <h1>Bientot disponible !</h1>
                  <p><strong>Les Cercles</strong><br />Plateforme de rassemblement de forums RP</p>
                  <br />
                  
                  <?php
                  $b = 0;
                  if($b){
               echo "<p><em>
                  Un membre de l'&eacute;quipe de d&eacute;veloppement modifie actuellement cette page, le risque d'apparition de bugs est &eacute;lev&eacute; durant cette phase.
                   Merci de revenir nous voir une fois ces travaux termin&eacute;s. L'&eacute;quipe du projet Les Cercles.
                  </em></p>";}
                  ?>
                  <div class="numbers">
                      <div class="bloc" id="days">
                      </div>
                      <div class="bloc" id="hours">
                      </div>
                      <div class="bloc" id="minutes">
                      </div>
                      <div class="bloc last" id="seconds">
                      </div>
                  </div>
              </div>
              <div class="footer">
              
              </div>
          </div>
          
       <!-- SEPARATION ENTRE ONGLETS ET COMPTEUR -->
       <div style="position:fixed; top:275px; right:9px;">
			<button id="part">Nos Partenaires</button>
       </div>
       
       
       <div id="partContent" style="position: fixed; display: none; top:300px; right:0px; background-color: #CCC; border: 1px solid black; border-radius: 5px; padding: 3px;">
       		
                  Sites apportant leur soutien aux Cercles :<br /><br />
                  
                   <strong><a href="http://crepusculedesanges.net">Le Cr&eacute;puscule des Anges</a></strong><br />
       </div>   
          
          
          
  <div class="systeme_onglets">
  <!--
  Pour ajouter un onglet, il faut insérer le code suivant:
  Dans la partie onglet:
  
  <span class="onglet_0 onglet" id="onglet_nom_de_longlet" onclick="javascript:change_onglet('nom_de_longlet');">Nom de l'onglet</span>
  
  Dans la partie contenu:
  
  <div class="contenu_onglet" id="contenu_onglet_nom_de_longlet">Contenu de l'onglet</div>
  -->
          <!--  DEBUT DES ONGLETS -->
          <div class="onglets"><!-- PARTIE ONGLET -->
          	  <span class="onglet_0 onglet" id="onglet_news" onclick="change_onglet('news');">Les News</span>
              <span class="onglet_0 onglet" id="onglet_quoi" onclick="change_onglet('quoi');">Le Projet</span>
              <span class="onglet_0 onglet" id="onglet_qui" onclick="change_onglet('qui');">Je veux aider !</span>
              <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="change_onglet('pourquoi');">Se connecter</span>
          </div>
          <div class="contenu_onglets"> <!-- PARTIE CONTENU -->
              <div class="contenu_onglet" id="contenu_onglet_news"> <!-- NEWS -->
				<?php
				
					while($data=mysql_fetch_assoc($req))
					{
						echo "Le ".date("j/n/Y G:i",strtotime($data['date'])); echo " <h2><strong>"; echo "<u>".$data['titre']."</u>"; echo "</strong></h2><br />";
						//echo '<br />';
						echo "<p>{$data['contenu']}</p>";
						echo '<br /><hr width="100%" align="left" /><br />';
					}
					
				?>
              </div>
              
              
              <div class="contenu_onglet" id="contenu_onglet_quoi"> <!-- PROJET -->
                  Le projet ne porte pas le nom "Les Cercles" pour rien. L'objectif est de former des Cercles de forums ou de jeux. Le principe est donc simple, mais peu habituel aujourd'hui.<br /><br />

Il y a quelques années encore existaient des "cercles" de jeux de rôle. Le principe était de se rassembler à 4 ou 5 forums (voir plus) et de souder les communautés. Inciter les joueurs d'un forum à aller jouer sur un des forums "amis". Souvent des liens forts se formaient, tant dans l'administration qu'entre les joueurs des différents forums.<br />
Une sorte de partenariat plus poussé si vous voulez.<br />
Nous proposons donc de créer une plateforme permettant aux admins de former des cercles de jeu avec l'aide d'une équipe qualifiée pour les aider. Un forum privé aux joueurs de ces forums sera donc mis en place sur notre site pour permettre aux communautés de se rapprocher.<br />
              </div>
              
              
              <div class="contenu_onglet" id="contenu_onglet_qui"> <!-- JE VEUX AIDER -->            
                 <form method="post" name="help" action="help.php">
                 Merci de l'intérêt que vous portez à ce projet !<br />
                 Pour le mener à bien dans les meilleures conditions possibles, nous avons besoin de volontaires tels que vous.
                 <br />
                 Si vous souhaitez nous aider, merci de remplir ce formulaire, nous étudierons votre demande d'accès au projet avec le plus grand soin.
                 <br /><br />
                 Nous sommes actuellement à la recherche de :<br />
                 -Un développeur php<br />
				 -Un autre codeur html/css. Si possible HTML 5.<br />
				 -Un développeur Javascript<br />
				 -Un graphiste spécialisé dans les icônes et les boutons (pixel-artiste si possible)<br />
				 -Un illustrateur<br />
				 -2 Administrateurs expérimentés (afin de mettre en place le forum)<br />
				 -5 modérateurs qui s'occuperont du management des travaux en attendant l'ouverture.<br />
				 -Des pubeurs pour faire communiquer au maximum sur le projet!<br /><br />
                 Pseudo :<input type="text" name="pseudo" /><br />
                 Nom et Prénom (optionnel) :<input type="text" name="name" /><br />
                 Age :<input type="text" name="age" /><br />
                 Adresse mail :<input type="text" name="mail" />
                 <br />
                 Vos connaissances :<br />
                 <textarea name="connaissances" style="min-width:450px;min-height:200px;">Vous savez coder en HTML et/ou CSS ? Vous savez programmer en PHP ? Vous êtes un graphiste ? Ou n'importe quel autre domaine susceptible d'aider les Cercles ? Alors c'est ici que vous devez vous l'indiquer ! Dites nous tout, même ce qui vous semble inintéressant !</textarea><br />
                 <br />
                 Vos motivations :<br />
                 <textarea name="motivations" style="min-width:450px;min-height:200px;">Nous recherchons des gens motivés et sérieux ! Dites nous pourquoi les cercles vous intéressent au point de vouloir y participer !</textarea><br />
                 <br />
                 Votre parrain au sein du projet (optionnel) : <input type="text" name="parrain" /><br />
                 <br />
                 <input type="submit" name="ok" value="Envoyer ma demande" />
                 </form>
                 
                 
              </div>
              
              
              <div class="contenu_onglet" id="contenu_onglet_pourquoi">    <!--  SE CONNECTER -->            
                  <form method="post" name="dev" action="devindex2.php">
                  Pseudo : <input type="text" name="pseudo" style="margin-left:40px;" /><br />
                  Mot de Passe : <input type="password" name="mdp"  /><br />
                  <input type="submit" value="Connexion" style="margin-left:176px;" />
                  </form>
              </div>
              
              
          </div>
          <!--  FIN DES ONGLETS -->
      </div>
      
      <script>
      	var anc_onglet = 'news';
        change_onglet(anc_onglet);
      </script>        
                   
      </body>  
  </html>