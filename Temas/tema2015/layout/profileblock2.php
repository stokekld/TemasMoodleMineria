<table border="0">
  <tr border="0">
    <td width="450" height="30" valign="bottom"><div class="header-profilename" id="header-profilename">
    <?php
	
	    function get_content () {
        global $USER, $CFG, $SESSION, $COURSE;
        $wwwroot = '';
        $signup = '';}

        if (empty($CFG->loginhttps)) {
            $wwwroot = $CFG->wwwroot;
        } else {
            $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
        }
        
	
if (!isloggedin() or isguestuser()) {
echo '<a href="'.$CFG->wwwroot.'/login/index.php"><span id="blanco">'.get_string('loggedinnot').'</span></a>';

} else {
echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'" style="font-size:22px; color:#ffffff">'.$USER->firstname.' '.$USER->lastname.'</a>';
}		


?>
    </div></td>
<?php 
	if(isloggedin()){
	echo "<td width=90 height=90 rowspan=2><div class=\"header-profilepic\" id=\"header-profilepic\">";

	echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'"><img src="'.$CFG->wwwroot.'/user/pix.php?file=/'.$USER->id.'/f1.jpg" width="80px" height="80px" title="'.$USER->firstname.' '.$USER->lastname.'" alt="'.$USER->firstname.' '.$USER->lastname.'" /></a>'; 

	echo "</div></td>";
	}
?>

  </tr>
  <tr>
    <td width="450" height="25"> <div class="header-profileoptions" id="header-profileoptions">
    
    
    

 <?php
				
if (!isloggedin() or isguestuser()) {
echo '<ul><form class="loginform" id="login" method="post" action="'.$wwwroot.'/login/index.php">';
echo '<li><label for="login_username">'.get_string('username').'</label><input class="loginform" type="text" name="username" id="login_username" value="" /></li>';
echo '<li><label for="login_password">'.get_string('password').'</label><input class="loginform" type="password" name="password" id="login_password" value="" /></li>';
echo '<li><input type="submit" value="&nbsp;&nbsp;'.get_string('login').'&nbsp;&nbsp;" /></li>';
echo '</form></ul>';

} else {
echo '<ul>';
//echo '<li><a href="'.$CFG->wwwroot.'/user/edit.php?id='.$USER->id.'&amp;course='.$COURSE->id.'">'.get_string('updatemyprofile').'</a></li>';
//echo '<li><a href="'.$CFG->wwwroot.'/my">'.get_string('mycourses').'</a></li>';
echo '<li><a href="'.$CFG->wwwroot.'/login/logout.php?sesskey='.sesskey().'"><span id="blanco">'.get_string('logout').'</span></a></li>';
echo '</ul>';

}
?>


    
    </div>
    </td>
  </tr>
</table>

