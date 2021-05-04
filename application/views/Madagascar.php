<!DOCTYPE html>
<html lang="en">
<title>Covid-19 : Situation a Madagascar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo site_url("assets/css/style.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/form.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/style1.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/black-theme.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/family.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/eo.css"); ?>" rel="stylesheet">
<link href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <h4> <a href="<?php echo site_url('Accueil.html'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">  </a></h4>
	<h4> <a href="<?php echo site_url('Accueil.html'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Accueil</a></h4>
	<h4> <a href="<?php echo site_url('authentification.html');?>"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a></h4>
  </div>
</div>



<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
	<div class="w3-main" style="margin-left:250px">
		  
	<div class="w3-row w3-padding-64">
			<div class="container">  
           <br /><br /><br /> 
		<h1>Modifier le texte</h1>		   
      <form method="post" action="<?php echo base_url(); ?>main/updatetext">
      <div class="separation"></div>
		<h2 class="w3-text-teal"><?php echo $contenue['titre'] ?></h2>	
      <div class="corps-formulaire">
	  <input type="hidden" name="id" value=<?php echo $contenue['idSubject'] ?> />
        <div class="gauche">
          <div class="groupe">
            <h3>Phrase d'intro</h3>
            <textarea  name='sousTitre'><?php echo $contenue['sousTitre'] ?></textarea>
            <i class="fas fa-user"></i>
          </div>
        </div>

        <div class="droite">
          <div class="groupe">
            <h3>Text</h3>
            <textarea name='content'><?php echo $contenue['content'] ?></textarea>
          </div>
        </div>
      </div>

      <div class="pied-formulaire" align="center">
        <button>modifier le message</button>
      </div>
    </form>
      </div> 

  </div>
</div>
  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Le Journal des MDG© Copyright 2021, Mada media All Rights Reserved</a></p>
    </div>
  </footer>

<!-- END MAIN -->



</body>
</html>
