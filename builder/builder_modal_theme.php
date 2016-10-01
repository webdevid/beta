
    <div class="modal fade modal-lg" id="libraryModalTheme" tabindex="-1" role="dialog" aria-labelledby="libraryModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="libraryModalLabel">Theme Color</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 ls-modal-button-group hide">
                            <div class="btn-group" role="group" aria-label="">
                                <button type="button" class="btn btn-default ls-modal-button" data-action="">Light</button>
                                <button type="button" class="btn btn-default ls-modal-button" data-action="">Dark</button>
                                <button type="button" class="btn btn-default ls-modal-button" data-action="">Alternative</button>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="no-margin">
                                <ul class="themeListColor">
                                <?php 
                                for($i=1;$i<50;$i++){
                                ?>
                                    <li><div class="themeColor"><div class="themeColorItem theme-<?php echo $i;?>" data-theme="theme01" data-themeuri="theme01.css"></div></div></li>
                                <?php 
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
