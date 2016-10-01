<div class="modalTest">
    <div class="modal fade bs-library-modal-lg" id="libraryModal" tabindex="-1" role="dialog" aria-labelledby="libraryModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="libraryModalLabel">Media Library</h4>
          </div>
          <div class="modal-body">
                  <div class="row">
                      <div class="col-xs-2 modal-navigation">
                            <div >
                                <ul class="listLibrary">
                                    <li class="active" id="libComputer">Crop Image</li>
                                    <li id="libServer">Library</li>
                                </ul>
                            </div>
                      </div>
                      <div class="col-xs-10">
                            <div class="modal-leftcontent scroll">
                                <div class="row no-margin active" id="dataComputer">
                                    <div class="col-xs-12">
                                        <div class="cropperarea">
                                        <div id="preview" >
                                        <!--image will be inserted here-->
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-margin" id="dataLibrary">
                                    <div class="col-xs-12">
                                        <ul class="list_library">
                                        <?php 
                                        foreach($mediafile as $file){
                                        ?>
                                        <li><div class="image-item" data-src="<?php echo $file->url; ?>"><img src="<?php echo $file->url; ?>" class="library_image"></div></li>    
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="enableCrop">Enable Crop</button>
            <button type="button" class="btn btn-primary" id="selectCrop">Select Crop</button>
            </div>
        </div>
      </div>
    </div>
</div>