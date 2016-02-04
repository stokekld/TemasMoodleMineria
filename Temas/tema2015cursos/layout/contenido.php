<div id="page-content">
    <div id="region-main-box">
        <div id="region-post-box">
            <?php if ( is_siteadmin() ) { ?>
            <div id="region-main-wrap">
            <?php }else{ ?>
            <div id="region-main-wrap" style="right:90%;width:70%;">  <!-- right: 90%, width: 70%  -->
            <?php } ?>
                <div id="region-main">
                    <div class="region-content">
                        <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                    </div>
                </div>
            </div>
            <?php if ( $hassidepre AND is_siteadmin() ) { ?>
                <div id="region-pre">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                    </div>
                </div>
                <?php } ?>
 
                <?php if ( $hassidepost AND is_siteadmin() ) { ?>
                <div id="region-post">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>