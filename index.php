<html lang="fr">

<!-- Mirrored from 172.16.1.18/decharge/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 11:39:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <title>decharge</title>
    
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" type="image/x-icon" href="image/favicon.ico" /> 
      <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
  <h1>Impression de decharge</h1>
  <form class="form" method="post" action="decharge.php">
  <!-- action="http://172.16.1.18/decharge/decharge.php" -->
    
    
    <input type="text" class="name" placeholder="Nom complet" name="name">
    <div>
      <p class="name-help">saisissez votre nom complet </p>
    </div>
    <input type="text" class="name" placeholder="Fonction" name="fonction">
     <div>
      <p class="name-help">Votre fonction</p>
    </div>
    <input type="text" class="name" placeholder="Affectation" name="affectation">
     <div>
      <p class="name-help">Affectation</p>
    </div>
    <input type="text" class="name" placeholder="Produit" name="product">
     <div>
      <p class="name-help">Reference du produit</p>
    </div>
    <input type="text" class="name" placeholder="Numero de serie" name="serial">
     <div>
      <p class="name-help">Numero de serie du produit</p>
    </div>
    <input type="text" id="datetimepicker2" placeholder="Date" name="date"/>
    <input type="radio" name="societe" value="mojazine" checked="checked"> <a style="color: #8E989C;"><strong> Mojazine </strong> </a><br>
    <input type="radio" name="societe" value="abrar"> <a style="color: #8E989C;"><strong> Abrar </strong> </a><br>
    <input type="radio" name="societe" value="bitumed"> <a style="color: #8E989C;"><strong> Bitumed </strong> </a><br>
    <input type="radio" name="societe" value="industri"> <a style="color: #8E989C;"><strong> Industrie </strong> </a><br>
    <br><br>
    <input type="submit" name="create" class="submit" value="imprimer">
  </form>
</div>
  <script src='../../cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script> 

</body>

<!-- Mirrored from 172.16.1.18/decharge/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 11:39:51 GMT -->
</html>