<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/exp.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link href="jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen"/>
  <title>Box-X-File</title>
</head>

<header>
<div class="xBoxFile">
  <div><h2>Box  </h2></div>
  <div><h1>✘</h1></div>
  <div><h2>  File</h2></div>
</div>
</header>

<body>
  <div class="zone" id="zone">
    <div class="navButt">
      <input type="submit" id="create" name="ajouter" value="New Dir" onclick="demande()">
      </div>
      <div id="zonumerique">
</div>
  <input type="submit" id="fileBox" name="fileBox" value="Go in your File Box">
    <div id="zona">
  </div>
 <input type="submit" id="delBox" name="Fermer" value="Close">
</div>
  
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.easing.js" type="text/javascript"></script>
<script src="jqueryFileTree.js" type="text/javascript"></script>
<script src="exp.js" type="text/javascript"></script>
		
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>

$('#zona').hide()
$('#delBox').hide()
$('#create').hide()
 
$('#fileBox').on( 'click', function () {
  $('body').css('background-color', 'black')
  $('.zone').css('animation', 'yyy')
  $('#zona').fadeIn(2150)
  $('#delBox').fadeIn(2150)
  $('#create').fadeIn(2150)
  $('#fileBox').hide(2000)
});

$('#delBox').on('click', function () {
  $('body').css('background-color', 'rgb(3, 133, 255')
  $('#zona').hide(3000)
  $('#delBox').hide(3000)
  $('#create').hide(3000)
  $('#fileBox').fadeIn(2000)
});
</script>


</body>

</html>