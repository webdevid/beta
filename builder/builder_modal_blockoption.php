
    <div class="modal fade modal-lg" id="blockModal" tabindex="-1" role="dialog" aria-labelledby="libraryModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="libraryModalLabel">Block Option</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="no-margin">
                            <div class="form-group">
                                <label for="colum-bg">Block Title</label>
                                <input type="text" class="form-control" id="block_row_title" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="colum-bg">Block ID (#)</label>
                                <input type="text" class="form-control" id="block_row_id" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="blockScreen">Fullscreen Block</label>
                                <span class="input-group-btn">
                                    <select class="form-control" id="blockScreen" name="blockScreen">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="blockCentered">Centered Block</label>
                                <span class="input-group-btn">
                                    <select class="form-control" id="blockCentered" name="blockCentered">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="blockBgParallax">Parallax Background</label>
                                <span class="input-group-btn">
                                    <select class="form-control" id="blockBgParallax" name="blockCentered">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="no-margin">
                            <div class="form-group">
                                <label for="colum-bg">Background Image</label>
                                <div class="input-group">
                                    <input type="text" id="block_bg_image" class="form-control" placeholder="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary open_colum_bg" type="button" data-open="block_bg_image">Select Image</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="background-color">Background Overlay Color</label>
                                <input type='text' class="form-control" id="block_bg_color"/>
                                
                            </div>
                            <div class="form-group">
                                <label for="colum-bg">Background Video - ( Youtube ID )</label>
                                <input type="text" class="form-control" id="block_bg_video" class="form-control" placeholder="">
                            </div>
                            <div class="row">
	                            <div class="col-sm-3">
	                            	<div class="form-group">
		                                <label for="blockNoPadding">No Padding</label>
		                                <span class="input-group-btn">
		                                    <select class="form-control" id="blockNoPadding" name="blockNoPadding">
		                                        <option value="no">No</option>
		                                        <option value="yes">Yes</option>
		                                    </select>
		                                </span>
		                            </div>
	                            </div>
	                            <div class="col-sm-2">
	                            	<div class="form-group">
		                                <label for="colum-bg">left</label>
		                                <input type="text" class="form-control" id="block_row_id" class="form-control" placeholder="">
		                            </div>
	                            </div>
	                            <div class="col-sm-2">
	                            	<div class="form-group">
		                                <label for="colum-bg">top</label>
		                                <input type="text" class="form-control" id="block_row_id" class="form-control" placeholder="">
		                            </div>	
	                            </div>
	                            <div class="col-sm-2">
	                            	<div class="form-group">
		                                <label for="colum-bg">right</label>
		                                <input type="text" class="form-control" id="block_row_id" class="form-control" placeholder="">
		                            </div>
	                            </div>
	                            <div class="col-sm-2">
	                            	<div class="form-group">
		                                <label for="colum-bg">bottom</label>
		                                <input type="text" class="form-control" id="block_row_id" class="form-control" placeholder="">
		                            </div>
	                            </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="blockFluid">Block Fluid</label>
                                <span class="input-group-btn">
                                    <select class="form-control" id="blockFluid" name="blockFluid">
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
                    <div class="btn-group" role="group" aria-label="modal-navigation">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"  id="saveBlockOption">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
