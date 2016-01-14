<?php

// Funcion para obtener URL actual
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80")
	{
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	}
	else
	{
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
// Variables auxiliares
$hassidepre = $PAGE->blocks -> region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks -> region_has_content('side-post', $OUTPUT);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());


// echo basename($_SERVER['PHP_SELF']);

if ( basename($_SERVER['PHP_SELF']) == "search.php")
	$hassidepre = false;

// Cabecera de HTML
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />   <!--Favicon-->
    <?php echo $OUTPUT->standard_head_html() ?>
    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-47753545-1']);
    _gaq.push(['_trackPageview']);

    (function() {
	      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    </script>
</head>

<!-- Inicia body -->
<body id="<?php echo $PAGE->bodyid; ?>" class="<?php echo $PAGE->bodyclasses; ?>">

<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<div id="page">

	<?php
	// Si la página tiene header, se habilita
	if ($PAGE->heading)
	{
	?>
		<div id="header">
			<!-- Se incluye profileblock -->
			<div id="logo">
			  <div id="profileblock">
			    <?php include('profileblock2.php'); ?>      
			  </div>
			</div>
		</div>

		<div id="aardvark_menu">
			<?php include('aardvark_menu.php'); ?>      
		</div>
	<?php 
	}

	// Si la página incluye barra de navegación, se habilita
	if ($PAGE->has_navbar() and ( $CFG->wwwroot.'/' != curPageURL() or isloggedin() ))
	{
	?>
		<!-- Se incluye navbar -->
		<div class="navbar clearfix">
		    <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
		    <div class="navbutton"><?php echo $OUTPUT->page_heading_button(); ?></div>
		</div>

	<?php 
	}

	// Si no esta logueado y es la página principal, se habilita el interactivo
	if ( (!isloggedin() or isguestuser()) and $CFG->wwwroot.'/' == curPageURL())
	{
		
	?>
		    <div class="interactivo" style="width: 100%; height:100%; background: #ffffff; "> <iframe width="100%" height="460" frameborder="0" src="http://campusvirtual.mineria.unam.mx/cursos_archivos/galeria/index.html" scrolling="no"></iframe></div>
	<?php
			echo "<div style=\"display: none;\">";
			echo core_renderer::MAIN_CONTENT_TOKEN;
			echo "</div>";
		
	}

	// Si esta logueado o la página es diferente de la principal
	if (isloggedin() or $CFG->wwwroot.'/' != curPageURL())
	{

	?>

		<!--Contenido de la pagina-->
		    <div id="page-content">
		        <div id="region-main-box">
		            <div id="region-post-box">

		                <div id="region-main-wrap">
		                    <?php if ( ($hassidepost OR (right_to_left() AND $hassidepre)) and ($hassidepre OR (right_to_left() AND $hassidepost)) ) { ?>
		                        <div id="region-main">
		                        <div class="region-content">
		                    <?php }else if ( !($hassidepost OR (right_to_left() AND $hassidepre)) and ($hassidepre OR (right_to_left() AND $hassidepost)) ){?>
		                        <div id="region-main" style="width:100%">
		                        <div class="region-content" style="width:78%">
		                    <?php }else{?>
		                        <div id="region-main" style="width:100%;margin-left:200px;">
		                        <div class="region-content" style="width:100%">
		                    <?php }?>
		                            <?php echo $coursecontentheader; ?>
		                            <?php echo $OUTPUT->main_content() ?>
		                            <?php echo $coursecontentfooter; ?>
		                        </div>
		                    </div>
		                </div>

		                <?php if ($hassidepre OR (right_to_left() AND $hassidepost)) { ?>
		                <div id="region-pre" class="block-region">
		                    <div class="region-content">
		                            <?php
		                        if (!right_to_left()) {
		                            echo $OUTPUT->blocks_for_region('side-pre');
		                        } elseif ($hassidepost) {
		                            echo $OUTPUT->blocks_for_region('side-post');
		                    } ?>

		                    </div>
		                </div>
		                <?php } ?>

		                <?php if ($hassidepost OR (right_to_left() AND $hassidepre)) { ?>
		                <div id="region-post" class="block-region">
		                    <div class="region-content">
		                           <?php
		                       if (!right_to_left()) {
		                           echo $OUTPUT->blocks_for_region('side-post');
		                       } elseif ($hassidepre) {
		                           echo $OUTPUT->blocks_for_region('side-pre');
		                    } ?>
		                    </div>
		                </div>
		                <?php } ?>

		            </div>
		        </div>
		    </div>
		<!--FIN Contenido de la pagina-->
		<div class="clearfix"></div>
	<?php 
	}
  	?> 

  	<div id="footer">
  		<?php echo $OUTPUT->login_info(); ?>
  		<div class="footerlogos"></div>
  	</div>

</div></div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body></html>