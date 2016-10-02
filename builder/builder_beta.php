<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invitwo Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/beta/stylesheets/builder.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/beta/stylesheets/default.css">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- color -->
    <link rel="stylesheet" href="<?php echo base_url();?>/beta/js/plugins/color/spectrum.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/beta/js/plugins/fancybox/jquery.fancybox.css" media="screen" />
        <script>
            var base_url = '<?php echo base_url();?>';
        </script>
</head>
<style>
    /*
    Stylesheet for examples by DevHeart.
    http://devheart.org/

    Article title:  jQuery: Customizable layout using drag n drop
    Article URI:    http://devheart.org/articles/jquery-customizable-layout-using-drag-and-drop/

    Example title:  1. Getting started with sortable lists
    Example URI:    http://devheart.org/examples/jquery-customizable-layout-using-drag-and-drop/1-getting-started-with-sortable-lists/index.html
*/
    /*
    Example specifics
------------------------------------------------------------------- */
    /* Sortable items */

    .sortable-block {
        list-style: none;
        margin: 0;
        min-height: 30px;
    }

    .sortable-list,
    .draggable-item {
        list-style: none;
        margin: 0;
        min-height: 30px;
        padding: 0px;
    }

    #containment {
        background-color: #FFA;
        height: 230px;
    }
    /* Item placeholder (visual helper) */

    .placeholder {
        background-color: #BFB;
        border: 1px dashed #666;
        height: 58px;
        margin-bottom: 5px;
    }

    #bb-guide-column div {
        border-color: #F9F9F9;
        border-right-style: solid;
        border-width: 5px;
        min-height: 200px;
    }

    .bb-guide:nth-of-type(even) {
        background-color: #EAEAEA;
    }

    .bb-guide:nth-of-type(odd) {
        background-color: #F1F1F1;
    }

    .colum-option:hover {
        position: relative;
        box-shadow: inset 0 0 1px #ccc;
    }

    .ui-sortable-helper {
        width: 100% !important;
        height: 150px !important;
        overflow: hidden;
    }

    .ui-sortable-placeholder {
        height: 100px;
        border: 2px dashed #FF0000;
    }
    /*
    .ui-state-hover {
        background: #CCC;
        padding: 40px;
    }
    */

    .ui-state-hover div {
        opacity: 0.3;
    }

    .sortable-item {
        position: relative;
    }

    .sortable-item.ui-sortable-helper {
        border: 2px dashed #FF0000;
        background-color: #ccc;
        padding: 0 30px;
    }

    .sortable-item:before {
        content: "";
        border-left: 2px dashed #ff0000;
        display: block;
        position: absolute;
        opacity: 1;
        z-index: 0;
        left: 0px;
        top: 0px;
    }

    .ui-droppable-active {
        background-color: #FF0000;
        border: 2px dashed #cccccc;
    }

    .ui-droppable-hover {
        background-color: #000000;
        border: 2px dashed #ff0000;
    }

    .widget-box:hover {
        box-shadow: inset 0 0 2px #559ef6;
    }
    .divider{
        cursor: pointer;
    }
    .show-grid .colum-option{
        border:1px solid #FFFFFF;
    }
    .ui-draggable-dragging{
        height:50px;
        width:200px;
        overflow:hidden;
    }
</style>

<body class="builder">
    <div class="style-code">
        <style>
            /* rule custome css */

        </style>
    </div>
    <?php
        include "builder_modal_theme.php";
        include "builder_modal_fonticons.php";
        include "builder_modal_blockoption.php";
        include "builder_modal_menus.php";
        include "builder_modal_colum.php";
        include "builder_modal_pageoption.php";
        include "builder_modal_widget.php";
        include "builder_modal_widget-countdown.php";
        include "builder_modal_widget-gallery.php";
        include "builder_modal_widget-instagram.php";
    ?>

    <div class="builder-nav">
        <div class="builder-nav-item--top">
            <div class="nav-item-top">
                <div class="ls_button" data-action="dashboard" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard"><i class="fa fa-user" aria-hidden="true"></i></div>
                <div class="ls_button" data-action="helps" data-toggle="tooltip" data-placement="right" title="" data-original-title="Helps"><i class="fa fa-question" aria-hidden="true"></i></div>
            </div>
        </div>
        <div class="Aligner-item flexcontainer centered">
            <div class="nav-item-top">
                <div class="ls_button active" data-action="blocks" data-toggle="tooltip" data-placement="right" title="" data-original-title="Blocks"><i class="fa fa-cube" aria-hidden="true"></i></div>
                <div class="ls_button" data-action="widgets" data-toggle="tooltip" data-placement="right" title="" data-original-title="Widgets"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></div>
                <div class="ls_button" data-action="themes" data-toggle="tooltip" data-placement="right" title="" data-original-title="Color Scheme"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                <div class="ls_button hide" data-action="orders" data-toggle="tooltip" data-placement="right" title="" data-original-title="Orders"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div class="ls_button" data-action="menus" data-toggle="tooltip" data-placement="right" title="" data-original-title="Menus"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                <div class="ls_button" data-action="settings" data-toggle="tooltip" data-placement="right" title="" data-original-title="Settings"><i class="fa fa-cog" aria-hidden="true"></i></div>
            </div>
        </div>
        <div class="builder-nav-item--bottom">
            <div class="nav-item-bottom">
                <div class="ls_button" data-action="save" data-toggle="tooltip" data-placement="right" title="" data-original-title="Save"><i class="fa fa-floppy-o" aria-hidden="true"></i></div>
                <div class="ls_button" data-action="preview" data-toggle="tooltip" data-placement="top" title="" data-original-title="Desktop"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                <div class="nav-item-bottom_left">
                    <div class="ls_button" data-action="preview_tablet" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tablet"><i class="fa fa-tablet" aria-hidden="true"></i></div>
                    <div class="ls_button" data-action="preview_phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Phone"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>

    </div>
    <div class="blocks-categories">
        <ul>
            <li class="block" data-blockcat="all">All</li>
            <li class="block" data-blockcat="intro">Intro</li>
            <li class="block" data-blockcat="header">Header</li>
            <li class="block" data-blockcat="content">Content</li>
            <li class="block" data-blockcat="multimedia">Multimedia</li>
            <li class="block" data-blockcat="rspv">Contact / Reservation</li>
            <li class="block" data-blockcat="footer">Footer</li>
            <li class="component hide" data-blockcat="all">All</li>
            <li class="component hide" data-blockcat="heading">Heading</li>
            <li class="component hide" data-blockcat="text">Text / Paragraph</li>
            <li class="component hide" data-blockcat="image">Image</li>
            <li class="component hide" data-blockcat="component">Other</li>
        </ul>
        <div class="close-blockcat">Hide</div>
    </div>
    <div class="builder-blocks scroll">
        <!-- widget -->
                <?php
                //print_code($widget_items);
                foreach($widget_items as $w){
                ?>
                <div class="widget_item--component" data-type="intro" data-id="<?php echo $w->widget_id; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $w->widget_title; ?>"><img src="<?php echo base_url().'/media/'.$w->widget_thumb;?>"></div>
                <?php
                }
                ?>

                <?php
                foreach($block_section as $bs){
                ?>
                <div class="blocks_item--section" data-type="intro" data-id="<?php echo $bs->block_id;?>"><img src="<?php echo base_url(); ?>/media/<?php echo $bs->block_thumb; ?>"></div>
                <?php
                }
                ?>

    </div>
    <div class="builder-widgets">

    </div>
    <div class="builder-preview">
        <div class="style-code">
            <style type="text/css">
            .dark .widget-box,
            .dark .widget-box a{
                color:#444444;
            }
            .dark .button-box a{
                color: #FFFFFF;
            }
            .ds-btn li{ list-style:none; float:left; padding:10px; }
            .ds-btn li a span{padding-left:15px;padding-right:5px;width:100%;display:inline-block; text-align:left;}
            .ds-btn li a span small{width:100%; display:inline-block; text-align:left;}
            .btn a{color:#FFFFFF;}
            .ls-row .instalive img{max-width: 12.5%;}
            .instalive-invitwo{display: inline-block;}
            </style>
        </div>
        <div id="body" class="dark">
            <div id="pageBlock">
                <div class="sortable-block ls-row fullscreen dark" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 ">
                            <div class="row main-block hide">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-4 col-sm-12 col-xs-12 colum-option"  data-md="4" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="heading"><span style="font-family: Playfair Display, serif; font-size: 40px;">D & A</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12 colum-option" data-md="8" data-sm="9" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-right" data-widget="text-02" data-widget-filter="heading-divider" style="padding-top:35px;padding-bottom:35px;">
                                              <div class="menu-mobile">
                                                <div class="float-left">MENUS</div>
                                                <div class="openmobile float-right"><span class="fa fa-align-justify"></span></div>
                                              </div>
                                              <div class="menu-position">
                                                <ul class="ls_navigation">
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#">Story</a></li>
                                                    <li><a href="#">Event</a></li>
                                                    <li><a href="#">Gallery</a></li>
                                                </ul>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-5 col-sm-12 col-xs-12 colum-option"  data-md="5" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box p-t-100" style="height:26vh">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p>Come & Join in Our Wedding day</p>
                                                <h1 class="heading m-t-0 m-b-20 font-size-60"><em>Diana & Arjuna</em></h1>
                                                <p class="">Hotel Indonesia, Jakarta. 24 October 2016</p>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box p-t-90" style="height:26vh">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p><small>See invitation</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12 colum-option"  data-md="7" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block hide">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color: rgba(0, 0, 0, 0.0);"></div>
                    <div class="background" style='background-image:url("http://themesfoundry.com/my/file_manager/source/elegant01.jpg");'></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>

                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-center">
                                                <img src="http://themesfoundry.com/my/file_manager/source/elegant01-divider.png">
                                                <p class="quiet large">Just like a fairy tale in the storybook romance comes true,
                                                <br>We request the honour of your presence at our marriage: </p>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option"  data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 colum-option" data-md="4" data-sm="6" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-right"  style="padding-right:20px;">
                                                <img src="http://themesfoundry.com/my/file_manager/source/1475043422-invitwo-imagetools0.png" width="167">
                                                <h2 class="heading"><em>Diana Mentari</em></h2>
                                                <p class="quiet large">Putri pertama dari Prof.dr. Susilo Yudhoyono</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 colum-option" data-md="4" data-sm="6" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" style="padding-left:20px;">
                                                <img src="http://themesfoundry.com/my/file_manager/source/1475043391-invitwo-imagetools0.png" width="167">
                                                <h2 class="heading"><em>Arjuna Saputra</em></h2>
                                                <p class="quiet large">Putri pertama dari Prof.dr. Muhammad Idris</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option" data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option"  data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12 colum-option" data-md="8" data-sm="6" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-center">
                                                <p class="quiet large">Invite you to share in the joy when they exchange marriage vows.</p>
                                                <p>Countdown to the wedding day:</p>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="countdown-box p-t-20  p-b-30 text-center">
                                                <div id="clock" class="font-heading countdown cd_style_01"></div>
                                                <style type="text/css">
                                                    .cd_style_01{
                                                        font-size: 60px;
                                                        color: #666666;
                                                        padding: 0px 0px 20px 0px;
                                                    }
                                                    .cd_style_01 .small-cd{
                                                        font-size: 10px;
                                                        vertical-align: middle;
                                                        padding: 15px;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option" data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color: rgba(0, 0, 0, 0);"></div>
                    <div class="background" style='background-image:url("http://themesfoundry.com/my/file_manager/source/elegant01-white-bg.jpg");'></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>

                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-center">
                                                <img src="http://themesfoundry.com/my/file_manager/source/elegant01-divider.png">
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-6 col-sm-6 col-xs-12 colum-option" data-md="6" data-sm="6" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-center" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p>OUR LOVE STORY</p>
                                                <h1 class="heading m-t-0 m-b-20"><em><strong>Love at the first sight</strong></em></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colum-option" data-md="6" data-sm="6" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p class="">Will planned a picnic in the park just after sunset to watch the July 4th fireworks display. He popped the question as fireworks burst overhead, and of course, Diane said yes! They celebrated with their
                                                    families the next day with dinner and a champagne toast. Will planned a picnic in the park just after sunset to watch the July 4th fireworks display. He popped the question as fireworks burst overhead, and of course, Diane said yes! They celebrated with their
                                                    families the next day with dinner and a champagne toast.</p>
                                                <p>Will planned a picnic in the park just after sunset to watch the July 4th fireworks display. He popped the question as fireworks burst overhead, and of course, Diane said yes! They celebrated with their
                                                    families the next day with dinner and a champagne toast.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color: #fcfcfc;"></div>
                    <div class="background" style=''></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>

                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="collage-box">
                                                <div class="collage" id="gallery1" data-images="https://unsplash.it/660/440?image=875,https://unsplash.it/660/990?image=874,https://unsplash.it/660/440?image=872,https://unsplash.it/750/500?image=868,https://unsplash.it/660/990?image=839,https://unsplash.it/660/455?image=838,https://unsplash.it/660/440?image=875,https://unsplash.it/660/990?image=874">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color: #ffffff;"></div>
                    <div class="background" style=''></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>


                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-12 col-sm-12 col-xs-12 colum-option" data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-center" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p>OUR LOVE STORY</p>
                                                <h2 class="heading m-t-0 m-b-20">Wedding Ceremony</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option"   data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 colum-option" data-md="4" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-center">
                                                <img src="http://themesfoundry.com/my/file_manager/source/img-masjid.jpg">
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box button-box text-center">
                                                <a href="#" class="btn btn-block btn-small btn-success"><span class="fa fa-map-marker"></span>&nbsp;&nbsp; View on  Google Map</a>

                                                <a href="#" class="btn btn-block btn-small btn-success"><span class="fa fa-calendar"></span>&nbsp;&nbsp; Add to  Calendar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 colum-option" data-md="4" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="row">
                                                    <div class="col-xs-2 text-center">
                                                        <p class="p-t-30 font-size-30"><span class="fa fa-clock-o"></span></p>
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p><strong>DATE</strong></p>
                                                        <p class="">Saturday, 15 Januari 2018<br>09.00 - 11.00 WIB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="row">
                                                    <div class="col-xs-2 text-center">
                                                        <p class="p-t-30 font-size-30"><span class="fa fa-building-o"></span></p>
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p><strong>LOCATION</strong></p>
                                                        <p class=""><strong>Masjid Al Azhar</strong> <br>
                                                            Kota BNI, Jl. Wolter Mongonsidi 3<br>
                                                            Daerah Khusus Ibukota Jakarta 10220</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-left" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="row">
                                                    <div class="col-xs-2 text-center">
                                                        <p class="p-t-30 font-size-30"><span class="fa fa-star"></span></p>
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p><strong>ATTIRE</strong></p>
                                                        <p class="">Indonesia formal<br/><small>- Please arrive 30minute before</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option"   data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color:#F3f3f3;"></div>
                    <div class="background" style=''></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>

                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-12 col-sm-12 col-xs-12 colum-option" data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-center" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p>OUR LOVE STORY</p>
                                                <h2 class="heading m-t-0 m-b-20">Wedding Reception</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option"   data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 colum-option" data-md="4" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-right" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="row">

                                                    <div class="col-xs-10">
                                                        <p><strong>DATE</strong></p>
                                                        <p class="">Saturday, 15 Januari 2018<br>09.00 - 11.00 WIB</p>
                                                    </div>
                                                    <div class="col-xs-2 text-center">
                                                        <p class="p-t-30 font-size-30"><span class="fa fa-clock-o"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-right" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="row">

                                                    <div class="col-xs-10">
                                                        <p><strong>LOCATION</strong></p>
                                                        <p class=""><strong>Masjid Al Azhar</strong> <br>
                                                            Kota BNI, Jl. Wolter Mongonsidi 3<br>
                                                            Daerah Khusus Ibukota Jakarta 10220</p>
                                                    </div>
                                                    <div class="col-xs-2 text-center">
                                                        <p class="p-t-30 font-size-30"><span class="fa fa-building-o"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-right" data-widget="text-01" data-widget-filter="heading-lead">
                                                <div class="row">

                                                    <div class="col-xs-10">
                                                        <p><strong>ATTIRE</strong></p>
                                                        <p class="">Indonesia formal<br><small>- Please arrive 30minute before</small></p>
                                                    </div>
                                                    <div class="col-xs-2 text-center">
                                                        <p class="p-t-30 font-size-30"><span class="fa fa-star"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 colum-option" data-md="4" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box text-center">
                                                <img src="http://themesfoundry.com/my/file_manager/source/img-masjid.jpg">
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box button-box text-center">
                                                <a href="#" class="btn btn-block btn-small btn-success"><span class="fa fa-map-marker"></span>&nbsp;&nbsp; View on  Google Map</a>

                                                <a href="#" class="btn btn-block btn-small btn-success"><span class="fa fa-calendar"></span>&nbsp;&nbsp; Add to  Calendar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12 colum-option"   data-md="2" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-30">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color:#F3f3f3;"></div>
                    <div class="background" style=''></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>

                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container-fluid relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-center">
                                                <img src="http://themesfoundry.com/my/file_manager/source/elegant01-divider.png">
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-center" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p class="display-p"><span class="display-block font-size-30 text-center"><span class="fa fa-instagram"></span></span>
                                                </p>
                                                <p>INSTAGRAM PHOTO UPDATE</p>
                                                <h1 class="heading m-t-0 m-b-20">Our Wedding Preparation</h1>
                                                <p class=""><a href="https://www.instagram.com/explore/tags/weddingday"> use hastag #invitwoweddingday in your istagram </a></p>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                         <div class="sortable-item">
                                            <div class="instalive-box  p-t-15">
                                                <div class="instalive" data-instalive="invitwoweddingday"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color: #fcfcfc;"></div>
                    <div class="background" style=''></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>

                <div class="sortable-block ls-row" data-section-title="Block 1" id="1" data-id="1" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container-fluid relative w-960 ">
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 dark colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box text-center" data-widget="text-01" data-widget-filter="heading-lead">
                                                <p class="display-p"><span class="display-block font-size-30 text-center"><span class="fa fa-heart" style="color:red;"></span></span>
                                                </p>
                                                <h1 class="heading m-t-0 m-b-20"> Many Thanks </h1>
                                                <p>To our family and friends</p>
                                                <p class=""> Thank you for being a part of our special day and making it even more special.</p>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15 text-center">
                                                <p><a href="" style="color:#FFFFFF;">www.invitwo.com</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row main-block">
                                <div class="col-sm-12 col-md-12 col-xs-12 colum-option"   data-md="12" data-sm="12" data-xs="12">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-15">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                        <div class="sortable-item">
                                            <div class="widget-box  p-t-25">
                                                <div class="widget-box_space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-color" style="background-color: #333333;"></div>
                    <div class="background" style=''></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>
            </div>
        </div>
    </div>



    <div id="ls_blocks-preloaded-rows">
       <?php
             /**
                *  include block / section
                */
             foreach($block_section as $bs_row){
                  $dataid = 'data-id="'.$bs_row->block_id.'"';
                    echo str_replace('data-id="1"',$dataid,urldecode(stripslashes($bs_row->block_source)));
             }
             ?>
    </div>

    <!-- JavaScript files -->
    <script type="text/javascript" src="<?php echo base_url();?>/beta/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/beta/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/beta/js/plugins/bootstrap.min.js"></script>
    <!-- froala inline editor / builder only   -->
    <script type="text/javascript" src="<?php echo base_url();?>/beta/js/plugins/jquery.mousewheel.js"></script>
    <!-- script front -->
    <script src="<?php echo base_url();?>/beta/js/plugins/youtubebg/jquery.youtubebackground.js"></script>
    <script src="<?php echo base_url();?>/beta/js/plugins/lity/lity.min.js"></script>
    <script src="<?php echo base_url();?>/beta/tinymce/tinymce.min.js"></script>
    <!-- color picker -->
    <script src="<?php echo base_url();?>/beta/js/plugins/color/spectrum.js"></script>
    <script src="<?php echo base_url();?>/beta/js/plugins/jquery.nestable.js"></script>
    <script src="<?php echo base_url();?>/beta/js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>/beta/js/plugins/countdown/jquery.countdown.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>/beta/js/plugins/imagegrid/images-grid.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/beta/js/plugins/imagegrid/images-grid.css">

    <script src="<?php echo base_url();?>/beta/js/source.js" type="text/javascript"></script>
    </div>
    <?php /**/ ?>
</body>

</html>