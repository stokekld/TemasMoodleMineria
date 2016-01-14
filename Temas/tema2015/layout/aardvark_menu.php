<div id="aardvark_menu_date">
<a href="<?php echo $CFG->wwwroot.'/calendar/view.php' ?>"><script language="Javascript" type="text/javascript">
//<![CDATA[
<!--

// Get today's current date.
var now = new Date();

// Array list of days.
var days = new Array('Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado');

// Array list of months.
var months = new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

// Calculate the number of the current day in the week.
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();

// Calculate four digit year.
function fourdigits(number)     {
        return (number < 1000) ? number + 1900 : number;
                                                                }

// Join it all together
today =  days[now.getDay()] + " " +
              date + " " +
                          months[now.getMonth()] + " " +               
                (fourdigits(now.getYear())) ;

// Print out the data.
document.write("" +today+ " ");
  
//-->
//]]>
</script></a>
	
	</div>

<ul>
     
       <li><div><a href="<?php echo $CFG->wwwroot.'/' ?>"><img width="18" height="17" src="<?php echo $CFG->httpswwwroot.'/theme/'.$PAGE->theme->name ?>/pix/images/menu/home_icon.png" alt=""/></a></div>
       </li> 
 
        <!--<li><div><a href="<?php //echo $CFG->wwwroot.'/' ?>">Tutoriales</a>
					
        <ul>-->
       <!-- <h4>Gu&iacute;as de apoyo</h4>-->

        <?php

 //$text ='<li><a href="http://132.248.138.4/tutoriales/Tutorial_%20herramientas.htm" target="_blank">Manual Profesor</a></li>';
 //$text .='<li><a href="http://treadwell.cce.cornell.edu/moodle_doc/" target="_blank">Manual Alumno</a></li>';
 //$text .='<li><a href="" target="_blank">Gu&iacute;a Second Life</a></li>';
 //$text .='<li><a href="" >Foro Moodle</a></li>';
 
 //echo $text;
?>
 <li>
   <div><a href="http://www.mineria.unam.mx/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Míneria </a>
					
      </div>
   <!-- </ul></div>-->
 
        <li><div><a href="<?php echo $CFG->wwwroot.'/' ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descargas </a>
					
        <ul>
        <h4>Para visualizar el contenido de los cursos<br /> aseg&uacute;rate de tener instalado el siguiente <br />navegador y plugins</h4>

        <?php

//ie7 http://www.microsoft.com/downloads/details.aspx?familyid=9AE91EBE-3385-447C-8A30-081805B2F90B&displaylang=es
//moz3 http://www.mozilla-europe.org/es/firefox/
//ar 9 http://get.adobe.com/es/reader/

 $text ='<li><a href="https://www.google.com.mx/chrome/?brand=ECSB&installdataindex=no-apps-no-promo&hl=es-419" target="_blank">Google Chrome</a></li>';
 $text .='<li><a href="http://www.mozilla.org/es-MX/firefox/fx/" target="_blank">Mozilla Firefox </a></li>';
 $text .='<li><a href="http://get.adobe.com/es/reader/" target="_blank">Acrobat Reader</a></li>';
 $text .='<li><a href="http://get.adobe.com/es/flashplayer/" target="_blank">Adobe Flash Player</a></li>';
// $text .='<li><a href="http://secondlife.com/support/downloads/?lang=es-ES" target="_blank">Second Life</a></li>';
 
 echo $text;
?>

           </ul></div>
           
        <li><div><a href="<?php echo $CFG->wwwroot.'/' ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soporte T&eacute;cnico</a>
					
      </div>
           
           
           
           
            <li>
        <div><a href="<?php echo $CFG->wwwroot.'/' ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contacto</a>
					
          <ul>
        <!--<h4>Categor&iacute;as</h4>-->

        <?php


$text ='<div><div style="padding-left:15px;"><h4>Palacio de Miner&iacute;a</h4></div><br>
<div style="padding-left:25px;">Tel: 5521-4021 al 24</div><br>
<div style="padding-left:25px;">informes@mineria.unam.mx</div><br>

<div style="padding-left:25px;">visita nuestra p&aacute;gina:</div>
<li><a href="http://www.mineria.unam.mx/" target="_blank">www.mineria.unam.mx</a></li>

</div>';



 
 
 echo $text;
?>
	

           </ul></div>


        <?php
	
?>
