
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estiloMapa.css">
    <title>Mapa en coordenadas</title>

  </head>
  <body>
<div class="card-header">
    <h1>Mapa con coordenadas</h1>
</div>

<img id="ImgMap" src="/assets/images/Mapa1.jpg" usemap="#process-map">
<map name="process-map">
  <area
    title="Nombre: Juan Ruben<br>Correo: juanmarvenn@gmail.com"
    data-toggle="tooltip"
    coords="131, 42, 184, 84"
   >
   <area
    coords="229, 66, 278, 109"
    title="Nombre: Administrador<br>Correo: admin@gmail.com"
    data-toggle="tooltip"
   >
   <area
    coords="312, 96, 356, 130"
    data-toggle="tooltip"
    title="Coahuila"
   >
   <area
    coords="181, 166, 216, 210"
    data-toggle="tooltip"
    title="Sinaloa"
   >
   <area
    coords="359, 166, 398, 212"
    data-toggle="tooltip"
    title="Nuevo León"
   >
   <area
    coords="229, 256, 266, 297"
    data-toggle="tooltip"
    title="Nayarit"
   >
   <area
    coords="300, 277, 341, 316"
    data-toggle="tooltip"
    title="Jalisco"
   >
   <area
    coords="258, 341, 303, 385"
    data-toggle="tooltip"
    title="Colima"
   >
   <area
   coords="388, 320, 412, 358"
   data-toggle="tooltip"
   title="Mexico"
   >

   <area
    coords="417, 344, 444, 388"
    data-toggle="tooltip"
    title="Puebla"
    >
   <area
    coords="465, 355, 511, 405"
    data-toggle="tooltip"
    title="Veracruz"
   >

</map>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script>

$('[data-toggle="tooltip"]').tooltip({
    placement: "bottom",
    html:true,

});

$(document).mousemove( function(e) {
	  var mouseX = e.pageX - $('#ImgMap').offset().left;
    var mouseY = e.pageY - $('#ImgMap').offset().top + 20;
    $('.tooltip').css({'top':mouseY,'left':mouseX}).fadeIn('slow');
});
</script>
  </body>
</html>
