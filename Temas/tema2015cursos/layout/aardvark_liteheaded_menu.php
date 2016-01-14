<?php
echo '<ul>';
echo '<li class="color"><a href="'.$CFG->wwwroot.'/"><img width="18" height="17" src="'.$CFG->httpswwwroot.'/theme/'.current_theme().'/pix/images/menu/home_icon.png" alt="Home" /></a>
	</li>';
?>

	<!--INICIO-->

  		<li class="color"><a href="<?php echo $CFG->wwwroot ?>/course/view.php?id=<?php echo  $_SESSION['curso_id'] ?>">Inicio</a></li>  

	<!--UNIDADES-->

      	<li class="color"><a href="#">Unidades</a>
	      	<ul>				
                <li><a href="<?php echo $CFG->wwwroot ?>/mod/page/view.php?id=14">Unidad 1</a></li>
                <li><a href="<?php echo $CFG->wwwroot ?>/mod/page/view.php?id=17">Unidad 2</a></li>
                <li><a href="<?php echo $CFG->wwwroot ?>/mod/page/view.php?id=24">Unidad 3</a></li>
     	 	</ul>
      	</li>
	  
 	<!--ACTIVIDADES-->
		      
	 	 <li class="color"><a href="#">Actividades</a>
	    	<ul>           
		    	<li><a href="<?php echo $CFG->wwwroot ?>/mod/quiz/view.php?id=15">Evaluación Diagnóstica Cuestionario </a></li>
               	<li><a href="<?php echo $CFG->wwwroot ?>/mod/forum/view.php?id=13">Foro de Preguntas generales </a></li>
               	<li><a href="#" class="fly" >Unidad 1</a>
  				<li><a href="#" class="fly" >Unidad 2</a>
					<ul>
						<li><a href="<?php echo $CFG->wwwroot ?>/mod/page/view.php?id=18">Actividad 1</a></li>
              			<li><a href="<?php echo $CFG->wwwroot ?>/mod/page/view.php?id=21">Actividad 2</a></li>
          			</ul>           
      			<li><a href="#" class="fly" >Unidad 3</a>
					<ul>
						<li><a href="<?php echo $CFG->wwwroot ?>/mod/assign/view.php?id=25">Actividad 3</a></li>
          			</ul>         
      			<li class="select"><a href="<?php echo $CFG->wwwroot ?>/mod/survey/view.php?id=28" target="_blank">Encuesta de Satisfacción</a></li>
         	</ul>
                                
         			 

    	
	
    
    <!--DOCUMENTOS-->                                
     	<li class="color"><a href="#">Documentos</a>
	    	<ul>
		    	<li class="select"><a href="http://132.248.138.25/moodle/cursos_archivos/Lineamientos.pdf" target="_blank">Lineamientos</a></li>
             	<li class="select"><a href="http://132.248.138.25/moodle/cursos_archivos/cursos/propedeutico/Documentos/Calendario_propedeutico.pdf" target="_blank">Calendario</a></li>
            	<li class="select"><a href="http://132.248.138.25/moodle/cursos_archivos/cursos/propedeutico/Documentos/reglas_v2.pdf" target="_blank">Reglas de participación en los foros</a></li>
			</ul>
	  	</li>
                
                
			
      
	<!--COMUNIDAD-->
		<li class="color"><a href="#">Comunidad</a>
	  	 	<ul>
				<li><a href="<?php echo $CFG->wwwroot ?>/user/index.php?contextid=<?php echo $currentcontext->id ?>'] ?>" >Participantes</a></li>
				<li><a href="<?php echo $CFG->wwwroot ?>/user/index.php?contextid=<?php echo $currentcontext->id ?>&roleid=4 '] ">Tutores</a></li>
				<li><a href="mailto:soptecmoodle@mineria.unam.mx">Soporte t&eacute;cnico</a></li>
              	<li><a href="#" class="fly" >Administrador Estudiantil</a>
					<ul>
						<li><a href="#">Nombre</a></li>
               			<li><a href="#">Telefono</a></li>
              			<li><a href="#">Correo</a></li>
      				</ul>
			</ul>
	 	</li>
      
      
	<!--CALIFICACIONES-->
	  	<li class="color"><a  href="<?php echo $CFG->wwwroot ?>/grade/report/index.php?id=<?php echo  $_SESSION['curso_id'] ?>">Calificaciones</a></li>
	  
      
    <!--MENSAJE-->
	  <li class="color"><a href="<?php echo $CFG->wwwroot ?>/blocks/email_list/email/index.php?id=<?php echo  $_SESSION['curso_id'] ?>"><img src="http://campusvirtual.mineria.unam.mx/cursos/theme/energia_2013/images/menu/mail.png"  /></a></li>
		
</ul> 


<?php echo '<ul style="float:right;"><li class="color">'; ?>  
<a href="<?php echo $CFG->wwwroot.'/calendar/view.php' ?>">
<script language="Javascript" type="text/javascript">
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
</script></a></li></ul>
