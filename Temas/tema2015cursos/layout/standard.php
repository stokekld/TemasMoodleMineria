<?php 

// print_r ($_SESSION[USER]->editing);

if(!isset($_SERVER['HTTPS'])){
	$prtcl = 'http://';
}else{
	$prtcl = 'http://';
}
$ruta = $prtcl.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

if($ruta==$CFG->wwwroot.'/course/view.php'){	    
    if(isset($_GET['id'])){    	
        $_SESSION['curso_id'] = $_GET['id'];
    }else{
    	$_SESSION['curso_id'] = $_POST['id'];
    }
}
if(isset($_SESSION['curso_id'])){
    if($ruta==$CFG->wwwroot.'/login/logout.php'){
        unset($_SESSION['curso_id']);
    }
    if($ruta==$CFG->wwwroot.'/user/edit.php'){
        unset($_SESSION['curso_id']);
    }
    if($ruta==$CFG->wwwroot.'/index.php'){
        unset($_SESSION['curso_id']);
    } 
    if($ruta==$CFG->wwwroot.'/login/index.php'){
        unset($_SESSION['curso_id']);
    } 
}
// Variables auxiliares
$hassidepre = $PAGE->blocks -> region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks -> region_has_content('side-post', $OUTPUT);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />   <!--Favicon-->
    <meta name="keywords" content="moodle, <?php echo $title ?> " />
    <title><?php echo $title ?></title>
    <?php echo $OUTPUT->standard_head_html() ?>
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<!-- Inicia body -->
<body id="<?php echo $PAGE->bodyid; ?>" class="<?php echo $PAGE->bodyclasses; ?>">
<?php
if (!$currentcontext = get_context_instance(CONTEXT_COURSE, $COURSE->id)) {
            $this->content = '';
            return $this->content;
        }
        
        if ($COURSE->id == SITEID) {
            if (!has_capability('moodle/site:viewparticipants', get_context_instance(CONTEXT_SYSTEM))) {
                $this->content = '';
                return $this->content;
            }
        } else {
            if (!has_capability('moodle/course:viewparticipants', $currentcontext)) {
                $this->content = '';
                return $this->content;
            }
        }
?>      

<div id="page">
  	<?php  if ($PAGE->heading) {  // This is what gets printed on any other page with a heading ?>
    <div id="header">
      <div id="logo">
        <div id="profileblock"><?php include('aardvark_liteheaded_profileblock.php'); ?></div>  <!-- nombre usuario header -->
        </div>
    </div>
  		<div id="aardvark_liteheaded_menu" style="position:relative;z-index:999;"> 
    <?php include('aardvark_liteheaded_menu.php'); ?>
  		</div>  

	<?php } ?> 
	<?php if ($PAGE->has_navbar() and $OUTPUT->page_heading_button() != "" ) { // This is the navigation bar with breadcrumbs  ?>
    	<div class="navbar clearfix" style="position:relative;float:right;z-index:998;">
      		<div class="navbutton"><?php echo $OUTPUT->page_heading_button(); ?></div>
    	</div>
	<?php } ?>
  
    
	<?php  
  		if($ruta==$CFG->wwwroot.'/mod/chat/gui_header_js/chatinput.php' || $ruta==$CFG->wwwroot.'/mod/chat/gui_header_js/users.php'){
  		}
  		else
  		{
	?>  
    <!-- <div id="menu_usuario">
    </div>   -->


  	<?php  if($ruta==$CFG->wwwroot.'/course/view.php') { ?>    
    	<div style="display:block;margin-top:-32px;">
      		<iframe width="960" height="541" frameborder="0" src="http://132.248.138.25/moodle/cursos_archivos/cursos/Propedeutico/Bienvenida/entrada/prope.html" style="margin-top:-32px"></iframe> 
    	</div>
    <?php  if(is_siteadmin()) { ?>
   	<?php  if($_SESSION[USER]->editing) { ?>
    	<div id="content" style="display:block;z-index:-1;">
   	<?php }else{?>
        <div id="content" style="display:none;">
   	<?php }?>
    <?php }else{?>
      	<div id="content" style="display:none;">
    <?php }?>
    
        <!--Contenido de la pagina-->

 	<?php     
   		include("contenido.php");
    	}else{
    	echo '<div id="content" style="display:block;z-index:-1;">';
	?>
            <!--Contenido de la pagina-->
            
  <?php
      include("contenido.php");
    }    
  }?>
  </div>
  <?php
 
  // no estoy seguro
  $OUTPUT->container_end(); // content container
    
    
    echo '<div id="footer">';

    echo '<div class="fondo"></div>';
    if ($navigation and false) { ?>

    <div class="navbar clearfix">
        <div class="breadcrumb"><?php print_navigation($navigation); ?></div>
        <div class="menu"><?php echo $menu; ?></div>
    </div>
<?php }

    echo '<br/>'.$loggedinas;
    //echo $homelink;
   // echo '<p class="copyright">Aardvark-Liteheaded theme by Mary L.Evans</p>';
    //echo '<p class="copyright">Original Aardvark theme created by Shaun Daubney (Newbury College)</p>';

    // if (!empty($performanceinfo)) {
        echo $OUTPUT->login_info();
    // }

    echo '</div>';
?>

</div><!-- ends page -->
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>






    