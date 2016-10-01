<div class="modal fade modal-lg" id="libraryModalColum" tabindex="-1" role="dialog" aria-labelledby="libraryModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="libraryModalLabel">Colum Option</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!--
                    <div class="col-xs-12 ls-modal-button-group">
                        <div class="btn-group" role="group" aria-label="">
                            <button type="button" class="btn btn-default ls-modal-button" data-action="">Light</button>
                            <button type="button" class="btn btn-default ls-modal-button" data-action="">Dark</button>
                            <button type="button" class="btn btn-default ls-modal-button" data-action="">Alternative</button>
                        </div>
                    </div>-->
                    <div class="col-xs-12">
                        <div class="no-margin">
                            <div class="form-group">
                                <label for="colum-bg">Background Image</label>
                                <div class="input-group">
                                    <input type="text" id="colum_bg_image" class="form-control" placeholder="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary open_colum_bg" type="button" data-open="colum_bg">Select Image</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="background-color">Background Color</label>
                                <span class="input-group-btn">
                                    <input type='text' id="colum_bg_color"/>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="columStyle">Text Style</label>
                                <span class="input-group-btn">
                                    <select class="form-control" id="columStyle" name="columStyle">
                                        <option value="light">Light</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="columEqStyle">equal Hight Colum Style</label>
                                <span class="input-group-btn">
                                    <select class="form-control" id="columEqStyle" name="columEqStyle">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <div class="btn-group" role="group" aria-label="modal-navigation">
                    <button type="button" class="btn btn-primary"  id="updateColum">Select Icon</button>
                </div>
            </div>
        </div>
    </div>
</div>