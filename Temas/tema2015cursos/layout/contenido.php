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
                   	<?php if(isset($PAGE->activityrecord->content)) { ?>
                   		<div id="region-main" style="width:115%;margin-left:180px;margin-top:-25px;overflow:visible;">
                  	<?php }else{?>
                     	<div id="region-main" style="width:100%;margin-left:190px;overflow:visible;">
                  	<?php }?>
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
    </div></div>
    
<!--FIN Contenido de la pagina-->