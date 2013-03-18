<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <!--
  <meta name="viewport" content="width=device-width" />-->

  <title>Administracion De Vacaciones</title>

  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  <link rel="stylesheet" href="css/datepicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <title>DatePicker - jQuery plugin</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>

  <script>

        function validar()
        {
            var mensaje= document.getElementById("texto").innerHTML;
            var array = mensaje.split(" ");



            var mes1;

            switch(array[1])
            {

                case 'January,':

                     mes1="01";

                break;

                case 'February,':

                     mes1="02";

                break;

                case 'March,':

                     mes1="03";

                break;

                case 'April,':

                     mes1="04";

                break;

                case 'May,':

                     mes1="05";

                break;

                case 'June,':

                     mes1="06";

                break;

                case 'July,':

                     mes1="07";

                break;

                case 'August,':

                     mes1="08";

                break;

                case 'September,':

                     mes1="09";

                break;

                case 'October,':

                     mes1="10";

                break;

                case 'November,':

                     mes1="11";

                break;

                case 'December,':

                     mes1="12";

                break;
            }


            var mes2;

            switch(array[5])
            {

                case 'January,':

                     mes2="01";

                break;

                case 'February,':

                     mes2="02";

                break;

                case 'March,':

                     mes2="03";

                break;

                case 'April,':

                     mes2="04";

                break;

                case 'May,':

                     mes2="05";

                break;

                case 'June,':

                     mes2="06";

                break;

                case 'July,':

                     mes2="07";

                break;

                case 'August,':

                     mes2="08";

                break;

                case 'September,':

                     mes2="09";

                break;

                case 'October,':

                     mes2="10";

                break;

                case 'November,':

                     mes2="11";

                break;

                case 'December,':

                     mes2="12";

                break;
            }

            var fecha_inicio = (array[2]+"-"+mes1+"-"+array[0]);
            var fecha_final = (array[6]+"-"+mes2+"-"+array[4]);



            document.getElementById("fecha_ini").value = fecha_inicio;
            document.getElementById("fecha_fin").value = fecha_final;

            alert(document.getElementById("fecha_ini").value);
            alert(document.getElementById("fecha_fin").value);

       
        }

    </script>


</head>
<body>

    <div style="padding: 20px; border-bottom: 5px solid #870064; border-top: 20px solid #870064;">
		<img id="logo" src="images/logo.jpg">
    	<div class="name" style="float: right;"><h3>Administracion Vacaciones</h3></div>
	</div>





	
    



				
	