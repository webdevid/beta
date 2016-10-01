<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'builder_head.php'; ?>
    </head>
<body>
<div class="exit_preview ul-action-preview hide" data-toggle="tooltip" data-placement="right" title="Builder"><i class="pe-7s-plugin"></i></div>
<div class="block_builder">
    <div class="left_control">
        <div class="ul-panel-top">
            <span class="ul-icon" data-toggle="tooltip" data-placement="right" title="Dashboard"> <a href="<?php echo base_url();?>dashboard/"><?php echo get_avatar( iv_user('id'), 32,null,null,array( 'class' => array( 'rounded' ) )); ?></a></span>
            <span class="ul-icon" data-toggle="tooltip" data-placement="right" title="Help"><i class="pe-7s-help1"></i></span>
        </div>
        <div class="ul-panel-middle">
            <span class="ul-icon ul-element-edit" data-toggle="tooltip" data-placement="right" title="Detail Element Edit"><i class="pe-7s-plugin"></i></span>
            <!--<span class="ul-icon" data-toggle="tooltip" data-placement="right" title="Pages"><i class="pe-7s-news-paper"></i></span>
            <span class="ul-icon" data-toggle="tooltip" data-placement="right" title="Design"><i class="pe-7s-paint"></i></span>-->
            <span class="ul-icon ul-action-preview" data-toggle="tooltip" data-placement="right" title="Preview"><i class="pe-7s-look"></i></span>
            
        </div>
        <div class="ul-panel-bottom">
            <!--
            <span class="ul-icon"><i class="pe-7s-back-2"></i></span>
            <span class="ul-icon"><i class="pe-7s-next-2"></i></span>
            -->
            <span class="ul-icon" id="savePredefine" data-toggle="tooltip" data-placement="right" title="Save as Predefine"><i class="pe-7s-diskette"></i></span>
            <span class="ul-icon" id="backup" data-toggle="tooltip" data-placement="right" title="Backup"><i class="pe-7s-clock"></i></span>
            <span class="ul-icon ul-action" id="publish" data-action="publish" data-toggle="tooltip" data-placement="right" title="Publish"><i class="pe-7s-rocket"></i></span>
        </div>
    </div>
    <!-- left control -->
    <div class="right_control">
        <!-- block / widget -->
        <div class="block_component_control scroll active">
            <div class="block_component_control--header">
                <ul>
                    <li class="ls_nav_click active" data-open="blocks_item"><span>Blocks</span></li>
                    <li class="ls_nav_click"   data-open="widgets_item"><span>Widgets</span></li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widgets_item ls_module_builder">
                            <span class="block_component_control--title">Basic</span>
                            <ul class="widgets">
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-photo"></i></span>
                                        <span class="title">Image</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-photo-gallery"></i></span>
                                        <span class="title">Gallery</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-news-paper"></i></span>
                                        <span class="title">Heading</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-news-paper"></i></span>
                                        <span class="title">Text</span>
                                    </div>
                                </li>
                            </ul>
                            <span class="block_component_control--title">Content</span>
                            <ul class="widgets">
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-map-marker"></i></span>
                                        <span class="title">Map</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-mail-open-file"></i></span>
                                        <span class="title">Contact form</span>
                                    </div>
                                </li>
                            </ul>
                            <span class="block_component_control--title">Media</span>
                            <ul class="widgets">
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-film"></i></span>
                                        <span class="title">Video</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_item">
                                        <span class="icon"><i class="pe-7s-music"></i></span>
                                        <span class="title">Music</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blocks_item ls_module_builder open">
                            <?php 
                            /**
                             * block thumb / item
                             */
                            include 'builder_block_item.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--form box -->
        <div class="block_control_option  scroll ">
            <div class="block_control_option--item hide el-pageoption">
                <div class="block_control_option--item--header">
                    <span>Page Options</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- font group -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="box_form--title">Available Fonts:</label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="box_form--title">Types:</label>
                                        <select name="fontType" id="fontType" class="form-control box_form--text">
                                            <option value="">All Types</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="box_form--title">Styles:</label>
                                        <select name="fontVariant" id="fontVariant" class="form-control box_form--text">
                                            <option value="">All Styles</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="box_form--title">Search:</label>
                                        <input id="searchText" type="text" value="" name="searchText" class="form-control box_form--text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="googleFont" id="googleFont" class="form-control box_form--text scroll" size="5">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="box_form--title">Preview Text:</label>
                                        <textarea id="font-preview" class="form-control box_form--text" style="font-size: 18px; font-weight: normal;">Thomas & Andini</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Close</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_control_option--item hide el-background">
                <div class="block_control_option--item--header">
                    <span>Block Background Options</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box_form">
                                <span class="box_form--title">Block name</span>
                                <input class="box_form--text form-control" type="text" name="blockname" id="blockname">
                            </div>
                            <div class="box_form">
                                <span class="box_form--title">Background Overlay</span>
                                <div id="bg_overlay_picker" class="bg_picker input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="rgba(17, 19, 20, 0.5)" class="form-control box_form--picker" id="bgOverlay" />
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                            <div class="box_form">
                                <span class="box_form--title">Background Image</span>
                                <div id="bg_picture" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker bgimage" id="bgimage" />
                                    <span class="input-group-addon open_library"  data-picker="bgimage"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="box_form">
                                <span class="box_form--title">Background Color</span>
                                <div id="box_picker" class="bg_picker input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="#00AABB" class="form-control box_form--picker bgcolor" id="bgColor" />
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                            <div class="box_form">
                                <span class="box_form--title">Youtube Video ID</span>
                                <input class="box_form--text form-control" type="text" id="bgVideo">
                            </div>
                            <div class="box_form ls-checkbox">
                                <span class="box_form--title">Padding</span>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="paddingTop" checked="checked"> Top
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="paddingBottom" checked="checked"> Bottom
                                    </label>
                                </div>
                            </div>
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Close</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_control_option--item hide el-videoiconlink">
                <form id="el-videoiconlink">
                    <div class="block_control_option--item--header">
                        <span>Edit Popup video Icon link</span>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="box_form">
                                    <span class="box_form--title">Youtube Video ID</span>
                                    <input class="box_form--text form-control" type="text" id="el_videoiconlink_youtubeid">
                                </div>
                                <div class="box_form">
                                    <span class="box_form--title">Icon</span>
                                    <div id="box_icons" class="input-group colorpicker-component m-t-10 m-b-10">
                                        <input type="text" value="" class="form-control box_form--picker" id="el_videoiconlink_icon" />
                                        <span class="input-group-addon open_icons" data-picker="el_videoiconlink_icon"><i class="fa fa-fonticons" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                
                                <div class="box_form--button m-b-60">
                                    <span class="box_form--button--save">Save</span>
                                    <span class="box_form--button--cancel">Cancel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="block_control_option--item hide el-videoimagelink">
                <div class="block_control_option--item--header">
                    <span>Edit Popup video link</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--
                            <div class="box_form">
                                <span class="box_form--title">URL / Link Image</span>
                                <div id="box_picture" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker el_image" id="el_image" />
                                    <span class="input-group-addon open_library"  data-picker="el_image"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                                </div>
                            </div> -->
                            <div class="box_form">
                                <span class="box_form--title">Youtube Video ID</span>
                                <input class="box_form--text form-control" type="text" id="el_videoimagelink_youtubeid">
                            </div>
                            
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_control_option--item hide el-imagelink">
                <div class="block_control_option--item--header">
                    <span>Edit Image link</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--
                            <div class="box_form">
                                <span class="box_form--title">URL / Link Image</span>
                                <div id="box_picture" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker el_image" id="el_image" />
                                    <span class="input-group-addon open_library" data-picker="el_image" ><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            -->
                            <div class="box_form">
                                <span class="box_form--title">URL / Link</span>
                                <input class="box_form--text form-control" type="text" id="el_imagelink_url">
                            </div>
                            
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_control_option--item hide el-iconlink">
                <div class="block_control_option--item--header">
                    <span>Edit Icon link</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box_form">
                                <span class="box_form--title">Icon</span>
                                <div id="box_icons" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker" id="el_iconlink_icon" />
                                    <span class="input-group-addon open_icons" ><i class="fa fa-fonticons" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="box_form">
                                <span class="box_form--title">URL / Link</span>
                                <input class="box_form--text form-control" type="text" id="el_iconlink_url">
                            </div>
                            
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_control_option--item hide el-image">
                <div class="block_control_option--item--header">
                    <span>Edit Image</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--
                            <div class="box_form">
                                <span class="box_form--title">URL / Link Image</span>
                                <div id="box_picture" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker el_image" id="el_image"/>
                                    <span class="input-group-addon open_library" data-picker="el_image"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            -->
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_control_option--item hide el-icon">
                <div class="block_control_option--item--header">
                    <span>Edit Icon</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box_form">
                                <span class="box_form--title">Icon</span>
                                <div id="box_icons" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker" id="el_icon"/>
                                    <span class="input-group-addon open_icons" data-picker="el_icon"><i class="fa fa-fonticons" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bloc   k_control_option--item hide el-link">
                <div class="block_control_option--item--header">
                    <span>Edit Link</span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box_form">
                                <span class="box_form--title">Icon</span>
                                <div id="box_icons" class="input-group colorpicker-component m-t-10 m-b-10">
                                    <input type="text" value="" class="form-control box_form--picker" id="el_link_icon" />
                                    <span class="input-group-addon open_icons"><i class="fa fa-fonticons" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="box_form">
                                <span class="box_form--title">URL / Link</span>
                                <input class="box_form--text form-control" type="text" id="el_link_url">
                            </div>
                            
                            <div class="box_form--button m-b-60">
                                <span class="box_form--button--save">Save</span>
                                <span class="box_form--button--cancel">Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- extend form -->
    <div class="form_control">
          <?php /* lagi di evaluasi mungkin di remove ntar 
          <!-- library-->
          <div class="box_form--item box_form_library invisible">
              <div class="library-container">
                  <ul class="list_library">
                      <li><div class="image-item" data-src="demo/img1.jpg"><img src="demo/img1.jpg" class="library_image"></div></li>
                      <li><div class="image-item" data-src="demo/img2.jpg"><img src="demo/img2.jpg" class="library_image"></div></li>
                      <li><div class="image-item" data-src="demo/img3.jpg"><img src="demo/img3.jpg" class="library_image"></div></li>
                      <li><div class="image-item" data-src="demo/img4.jpg"><img src="demo/img4.jpg" class="library_image"></div></li>
                      <li><div class="image-item" data-src="demo/img5.jpg"><img src="demo/img5.jpg" class="library_image"></div></li>
                  </ul>
              </div>
          </div>
          */ ?>
                    <!-- icon list -->
          <div class="box_form--item box_form_icons invisible scroll">
              <div class="search-icons">
                  <input type="text" class="search-box" placeholder="Search icon">
              </div>
              <div class="box_content_icons">
                  <?php 
                  /**
                   * include icons from fontawesome
                   */
                  include 'builder_icons.php';
                  ?>
              </div>
          </div>
    </div> <!-- end form_control -->
</div><!-- end .block_builder -->
  
  
<div class="block_preview">
        <!-- block list item -->
  <div id="ls_blocks-preloaded-rows">
     <?php 
     /**
      *  include block / section
      */
     include 'builder_blocks.php';
     ?>
  </div>
        <!-- end block list item -->
    <div id="body" class="scroll">
                
      <div id="ls_content">
          <!-- your block will displayed here -->
      </div>
      <div id="landing-export"></div>
    </div>
</div><!-- end of .block_preview -->



<?php 
    include 'builder_cropmodal.php';
?>


<!-- builder -->
<script src="<?php echo base_url();?>builder/plugins/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>builder/plugins/jquery-ui/jquery-ui.js"></script> <!-- jquery-ui - builder only -->
<script type="text/javascript" src="<?php echo base_url();?>builder/plugins/bootstrap/bootstrap.min.js"></script> <!-- botstrap core -->
<script type="text/javascript" src="<?php echo base_url();?>builder/plugins/bootstrap/bootstrap-notify.js"></script> <!-- botstrap notify - builder only -->
<script type="text/javascript" src="<?php echo base_url();?>builder/plugins/scroll/jquery.section-scroll.js"></script> <!-- vertical navigation -->

<!-- color picker -->
<script src="<?php echo base_url();?>builder/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>

<!-- froala inline editor / builder only   -->
<script type="text/javascript" src="<?php echo base_url();?>builder/plugins/editor/js/froala_editor.pkgd.min.js"></script>
<!-- cropper -->
<link href="https://cdn.rawgit.com/fengyuanchen/cropper/v0.11.1/dist/cropper.min.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/fengyuanchen/cropper/v0.11.1/dist/cropper.min.js"></script>

<!-- script front -->
<script src="<?php echo base_url();?>builder/plugins/youtubebg/jquery.youtubebackground.js"></script>
<script src="<?php echo base_url();?>builder/plugins/lity/lity.min.js"></script>
<!-- apps js -->
<script src="<?php echo base_url();?>builder/js/app.js"></script>


</body>
</html>