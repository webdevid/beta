
    <div class="modal fade modal-lg" id="libraryModalFonticons" tabindex="-1" role="dialog" aria-labelledby="libraryModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="libraryModalLabel">Icons</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 ls-modal-button-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default ls-modal-button" data-action="icons">Awesome Icons</button>
                                    <button type="button" class="btn btn-default ls-modal-button" data-action="icons">Line Icons</button>
                                    <button type="button" class="btn btn-default ls-modal-button" data-action="icons">Ornamen Icons</button>
                                </span>
                                <input type="text" id="searchIcons"  class="form-control" placeholder="Search icon.">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="scroll no-margin ls-modal-overflow">
                                
                                <div class="row ls-modal-content-active active" id="icons">
                                    <div class="col-xs-12">
                                        <div class="box_content_icons">
                                            <?php include"builder_icons.php"; ?>
                                        </div>

                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row p-t-15">
                                <div class="col-xs-6">
                                    <p>
                                    <label for="fonticon-size">Icon Size :</label>
                                    <input type="text" id="fonticon-size" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    </p>
                                    <div id="fonticon-slider-range-min"></div>
                                </div>
                                <div class="col-xs-6">
                                    <p>
                                    <label for="fonticon-color">Icon Color :</label>
                                    </p>
                                    <input type='text' id="fonticon-color"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <div class="btn-group" role="group" aria-label="modal-navigation">
                        <button type="button" class="btn btn-primary"  id="selectIcon">Select Icon</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
