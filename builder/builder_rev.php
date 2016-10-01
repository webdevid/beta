<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invitwo Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/builder.css">


    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- editor - builder only -->

    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/froala_editor.css">
    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/froala_style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/themes/dark.css">
    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/plugins/code_view.css">
    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/plugins/colors.css">
    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/plugins/image_manager.css">
    <link rel="stylesheet" href="<?php echo base_url();?>builder/plugins/editor/css/plugins/image.css">




</head>
<style>
    /*
	Stylesheet for examples by DevHeart.
	http://devheart.org/

	Article title:	jQuery: Customizable layout using drag n drop
	Article URI:	http://devheart.org/articles/jquery-customizable-layout-using-drag-and-drop/

	Example title:	1. Getting started with sortable lists
	Example URI:	http://devheart.org/examples/jquery-customizable-layout-using-drag-and-drop/1-getting-started-with-sortable-lists/index.html
*/
    /*
	Example specifics
------------------------------------------------------------------- */
    /* Layout */
    
    #pageBlock {
        margin: 0px;
        padding: 0px;
    }
    
    #center-wrapper {
        margin: 0 auto;
        width: 920px;
    }
    /* Columns */
    
    .column {
        margin-left: 2%;
        width: 32%;
    }
    
    .column.first {
        margin-left: 0;
    }
    /* Sortable items */
    
    .sortable-block {
        list-style: none;
        margin: 0;
        min-height: 60px;
    }
    
    .sortable-list,
    .draggable-item {
        background-color: #F93;
        list-style: none;
        margin: 0;
        min-height: 60px;
        padding: 10px;
    }
    
    .sortable-item,
    .widget-box {
        background-color: #FFF;
        border: 1px solid #000;
        cursor: move;
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        padding: 20px 0;
        text-align: center;
    }
    /* Containment area */
    
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
    
    .ui-resizable {
        position: relative;
        border-left: 1px solid #000;
    }
    
    .col-xs-1,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12 {}
    
    .ui-droppable-active {
        background-color: #FF0000;
    }
    
    .ui-droppable-hover {
        background-color: #000000;
    }
</style>

<body class="builder">
    <div class="builder-nav">
        <div class="builder-nav-item--top">
            <div class="nav-item-top">
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard"><i class="fa fa-user" aria-hidden="true"></i></div>
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Helps"><i class="fa fa-question" aria-hidden="true"></i></div>
            </div>
        </div>
        <div class="Aligner-item flexcontainer centered">
            <div class="nav-item-top">

                <div class="ls_button active" data-toggle="tooltip" data-placement="right" title="" data-original-title="Blocks"><i class="fa fa-cube" aria-hidden="true"></i></div>
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Widgets"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></div>
                <div class="ls_button " data-toggle="tooltip" data-placement="right" title="" data-original-title="Color Scheme"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Orders"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Menus"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                <div class="ls_button " data-toggle="tooltip" data-placement="right" title="" data-original-title="Settings"><i class="fa fa-cog" aria-hidden="true"></i></div>



            </div>
        </div>
        <div class="builder-nav-item--bottom">
            <div class="nav-item-bottom">
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Save"><i class="fa fa-floppy-o" aria-hidden="true"></i></div>
                <div class="ls_button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Preview"><i class="fa fa-desktop" aria-hidden="true"></i></div>
            </div>
        </div>

    </div>
    <div class="blocks-categories">
        <ul>
            <li data-blockcat="block">Intro</li>
            <li data-blockcat="block">Header</li>
            <li data-blockcat="block">Content</li>
            <li data-blockcat="block">Multimedia</li>
            <li data-blockcat="block">Contact / Reservation</li>
            <li data-blockcat="block">Footer</li>

            <li data-blockcat="-">|</li>
        
            <li data-blockcat="component">Heading</li>
            <li data-blockcat="component">Text / Paragraph</li>
            <li data-blockcat="component">Image</li>
            <li data-blockcat="component">Other</li>
        </ul>
        <div class="close-blockcat">Hide</div>
    </div>
    <div class="builder-blocks scroll">

        <div class="blocks_item--section" data-type="header" data-id="1"><img src="http://themesfoundry.com/my/media/1470747395-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="2"><img src="http://themesfoundry.com/my/media/1470747475-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="3"><img src="http://themesfoundry.com/my/media/1470747557-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="4"><img src="http://themesfoundry.com/my/media/1470747626-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="5"><img src="http://themesfoundry.com/my/media/1470747719-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="6"><img src="http://themesfoundry.com/my/media/1470747801-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="7"><img src="http://themesfoundry.com/my/media/1470747889-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="8"><img src="http://themesfoundry.com/my/media/1470748020-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="9"><img src="http://themesfoundry.com/my/media/1470748118-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="10"><img src="http://themesfoundry.com/my/media/1470748208-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="11"><img src="http://themesfoundry.com/my/media/1470748314-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="12"><img src="http://themesfoundry.com/my/media/1470748389-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="13"><img src="http://themesfoundry.com/my/media/1470748471-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="14"><img src="http://themesfoundry.com/my/media/1470748579-invitwo-1_thumb.jpg"></div>
        <div class="blocks_item--section" data-type="header" data-id="15"><img src="http://themesfoundry.com/my/media/1470748686-invitwo-1_thumb.jpg"></div>

    </div>
    <div class="builder-widgets">

    </div>
    <div class="builder-preview">
        <div id="body" class="" style="padding-bottom:230px;">
            <div id="pageBlock">
                <div class="sortable-block ls-row block-header" data-section-title="Header 01" data-id="1" data-option="">
                    <!--
                    #Block Theme: -
                    #Block Group: Header
                    #Designer: Invitwo Team
                    -->
                    <div class="content">
                        <div class="container vertical-align-wrap relative w-960">
                            <div class="vertical-align vertical-align--middle text-center">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="box_text--none widget-box ui-droppable fr-box fr-inline">
                                            <div class="fr-wrapper" dir="auto">
                                                <div class="fr-element fr-view" dir="auto" contenteditable="true" spellcheck="true">
                                                    <div class="ls-edit el-sub-heading">kami yang berbahagia</div>
                                                    <h1 class="ls-edit el-heading"><em>Thomas &amp; Andini</em></h1>
                                                    <div class="ls-edit el-location">Ritzt Carlton Hotel-Jakarta<br>23 January 2017</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background" style="background-image:url('http://themesfoundry.com/my/builder/img/photo-1450849608880-6f787542c88a.jpg')"></div>
                    <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
                </div>

                <div class="sortable-block ls-row " data-section-title="Content Story 3" data-id="18" data-option="">
                    <!--
                        #Block Theme: -
                        #Block Group: -
                        #Designer: Invitwo Team
                        -->
                    <div class="content">
                        <div class="container relative w-960 p-b-60 p-t-30">
                            <div class="row main-block">
                                <div class="col-sm-4 colum-option">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <h2 class="heading">Mission Statement</h2>
                                                <p class="quiet large">What we want to achieve</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 colum-option">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <h2 class="heading">Mission Statement</h2>
                                                <p class="quiet large">What we want to achieve</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 colum-option">
                                    <div class="sortable-list">
                                        <div class="sortable-item">
                                            <div class="widget-box">
                                                <h2 class="heading">Mission Statement</h2>
                                                <p class="quiet large">What we want to achieve</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background" style="background-color:#000"></div>
                    <div class="background-video" data-bgvideo=""></div>
                </div>
            </div>
        </div>
    </div>

    <?php /**/ ?>



    <!-- BEGIN: XHTML for example 1.3 -->




    <!-- END: XHTML for example 1.3 -->



    <!-- Example JavaScript files -->
    <script src="<?php echo base_url();?>builder/plugins/jquery/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>builder/plugins/jquery-ui/jquery-ui.js"></script> <!-- jquery-ui - builder only -->

    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- froala inline editor / builder only   -->
    <script type="text/javascript" src="<?php echo base_url();?>builder/plugins/editor/js/froala_editor.pkgd.min.js"></script>
    <script type="text/javascript" src="https://css-tricks.com/examples/HorzScrolling/jquery.mousewheel.js"></script>
    
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $.FroalaEditor.DefineIcon('crop', {
            NAME: 'crop'
        });
        $.FroalaEditor.RegisterCommand('crop', {
            title: 'Crop Image',
            focus: false,
            undo: true,
            refreshAfterCallback: true,
            callback: function(response) {
                var elEdit = 'elEditForm';
                var lsel = 'ls-el-edit';

                $('.ls-el-edit').removeClass(elEdit);

                $(lsel).removeClass(elEdit);
                var imageSelected = this.image.get();
                imageSelected.closest('a').addClass(elEdit);
                imageSelected.parent().addClass(elEdit);

                $('#preview').html("<img src='" + imageSelected.attr('src') + "' id='imageCrop' />");
                $('#libraryModal').modal('show');

                var imageCrop = $('#imageCrop');
                var selectCrop = $('#selectCrop');
                var elEditForm = $('.elEditForm');
                var modaloption = elEditForm.data('option');

                if (typeof modaloption === "undefined") {
                    var ratio = 4 / 3;
                    //console.log(modaloption);
                } else {
                    var ratio = modaloption.cropOption.ratio;
                    //console.log(modaloption);
                }

                $('.image-item').click(function() {
                    var imgClick = $(this).attr('data-src');
                    imageCrop.attr('src', imgClick);

                    $('#libComputer').addClass('active');
                    $('#libServer').removeClass('active');
                    $('#dataLibrary').removeClass('active');
                    $('#dataComputer').addClass('active');
                });

                $('#enableCrop').click(function() {
                    imageCrop.cropper({
                        aspectRatio: ratio,
                        crop: function(e) {
                            //this.imageManager.show();
                        }
                    });
                });
                selectCrop.on('click', function() {
                    imageSelected.attr('src', imageCrop.cropper('getCroppedCanvas').toDataURL());
                    $('#libraryModal').modal('hide');
                    //image.cropper('clear');
                });
            }
        });


        $.FroalaEditor.DefineIcon('archive', {
            NAME: 'archive'
        });
        $.FroalaEditor.RegisterCommand('archive', {
            title: 'Media Library',
            focus: false,
            undo: true,
            refreshAfterCallback: true,
            callback: function(response) {
                var elEdit = 'elEditForm';
                var lsel = 'ls-el-edit';

                $('#libComputer').removeClass('active');
                $('#libServer').addClass('active');
                $('#dataLibrary').addClass('active');
                $('#dataComputer').removeClass('active');

                $('.ls-el-edit').removeClass(elEdit);

                $(lsel).removeClass(elEdit);
                var imageSelected = this.image.get();
                imageSelected.closest('a').addClass(elEdit);
                imageSelected.parent().addClass(elEdit);

                $('#preview').html("<img src='" + imageSelected.attr('src') + "' id='imageCrop' />");
                $('#libraryModal').modal('show');

                var imageCrop = $('#imageCrop');
                var selectCrop = $('#selectCrop');
                var elEditForm = $('.elEditForm');
                var modaloption = elEditForm.data('option');

                if (typeof modaloption === "undefined") {
                    var ratio = 4 / 3;
                    //console.log(modaloption);
                } else {
                    var ratio = modaloption.cropOption.ratio;
                    //console.log(modaloption);
                }

                $('.image-item').click(function() {
                    var imgClick = $(this).attr('data-src');
                    imageCrop.attr('src', imgClick);

                    $('#libComputer').addClass('active');
                    $('#libServer').removeClass('active');
                    $('#dataLibrary').removeClass('active');
                    $('#dataComputer').addClass('active');
                });

                $('#enableCrop').click(function() {
                    imageCrop.cropper({
                        aspectRatio: ratio,
                        crop: function(e) {
                            //this.imageManager.show();
                        }
                    });
                });
                selectCrop.on('click', function() {
                    imageSelected.attr('src', imageCrop.cropper('getCroppedCanvas').toDataURL());
                    $('#libraryModal').modal('hide');
                    //image.cropper('clear');
                });
            }
        });


        $('.widget-box').froalaEditor({
            toolbarInline: true,
            toolbarButtons: ['bold', 'italic', 'color', 'paragraphFormat', 'outdent', 'indent', 'undo', 'redo', '-', 'align', 'insertImage', 'insertVideo', 'insertLink', 'fontSize', 'formatOL', 'formatUL'],
            imageEditButtons: ['imageReplace', 'imageAlign', 'imageRemove', '|', 'imageLink', 'linkOpen', 'linkEdit', 'linkRemove', '-', 'imageDisplay', 'imageStyle', 'imageAlt', 'imageSize', 'crop'],
            imageInsertButtons: ['imageBack', '|', 'imageUpload', 'imageByURL', 'archive'],
            fontFamily: {
                "Roboto,sans-serif": 'Roboto',
                "Oswald,sans-serif": 'Oswald',
                "Montserrat,sans-serif": 'Montserrat',
                "'Open Sans Condensed',sans-serif": 'Open Sans Condensed'
            },
            fontFamilySelection: false,
            fontSizeSelection: false,
            useFrTag: false,
            imageUploadURL: '/my/mediafile/uploadimage',
            imageUploadParams: {
                id: 'my_editor'
            },
            // Set the image upload URL.
            imageManagerLoadURL: '/my/mediafile/loadimages'
        });

        //$('div.fr-wrapper + div').remove();
        $('.fr-counter').remove();






        // Example 1.3: Sortable and connectable lists with visual helper
        $('.main-block .sortable-list').sortable({
            connectWith: '.main-block .sortable-list',
            placeholder: 'placeholder',
            forceHelperSize: true,
            forcePlaceholderSize: true,
            handle: '.heading',
            opacity: 0.8,

        });
        $('#pageBlock').sortable({
            placeholder: 'placeholder',
            handle: 'h2',
            sort: function(event, ui) {
                $('.ui-droppable').removeClass("ui-droppable-active");
            },
            start: function(event, ui) {
                $('.ui-droppable').removeClass("ui-droppable-active");
            },
            out: function(event, ui) {
                $('.ui-droppable').removeClass("ui-droppable-active");
            }
        });

        // $(".draggable-item").draggable({
        //     helper: "clone",
        //     connectToSortable: ".sortable-list"
        // });

        // tambahan
        $(".draggable-item,.block-item").draggable({
            appendTo: "body",
            helper: "clone"

        });

        $(".sortable-list").droppable({
            //activeClass: "ui-state-default",
            //hoverClass: "ui-state-hover",
            //connectWith: '.main-block .sortable-list',
            accept: ".draggable-item",
            //accept: ":not(.ui-sortable-helper)",
            placeholder: 'placeholder',
            drop: function(event, ui) {
                $(this).find(".placeholder").remove();
                $('.ui-droppable').removeClass("ui-droppable-active");
                $('<div class="sortable-item"></div>').html('<div class="widget-box"><h2 class="heading">Widget Drop</h2><p class="quiet large">What we want to achieve</p></div>').appendTo(this);

            }
        }).sortable({
            connectWith: '.main-block .sortable-list',
            placeholder: 'placeholder',
            forceHelperSize: true,
            forcePlaceholderSize: true,
            handle: '.heading',
            opacity: 0.8,
            sort: function() {
                $('.ui-droppable').removeClass("ui-droppable-active");
                // gets added unintentionally by droppable interacting with sortable
                // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options


            },
            out: function() {
                $('.ui-droppable').removeClass("ui-droppable-active");
                //getSortable();
            }


        });

        $("#pageBlock").droppable({
            activeClass: "ui-state-default",
            hoverClass: "ui-state-hover",
            accept: ".block-item",
            //accept: ":not(.ui-sortable-helper)",
            placeholder: 'placeholder',
            drop: function(event, ui) {
                $(this).find(".placeholder").remove();
                $('.ui-droppable').removeClass("ui-droppable-active");
                $('<div class="sortable-item"></div>').html('<div class="widget-box"><h2 class="heading">Widget Drop</h2><p class="quiet large">What we want to achieve</p></div>').appendTo(this);

            }
        }).sortable({
            connectWith: '#pageBlock',
            placeholder: 'placeholder',
            forceHelperSize: true,
            forcePlaceholderSize: true,
            handle: 'h2',
            opacity: 0.8,
            sort: function() {
                $('.ui-droppable').removeClass("ui-droppable-active");
                // gets added unintentionally by droppable interacting with sortable
                // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options


            },
            out: function() {
                $('.ui-droppable').removeClass("ui-droppable-active");
                //getSortable();
            }


        });
    </script>


    <script>
        // Resizable in %
        $(function() {

            var bsClass = "col-sm-1 col-sm-2 col-sm-3 col-sm-4 col-sm-5 col-sm-6 col-sm-7 col-sm-8 col-sm-9 col-sm-10 col-sm-11 col-sm-12";

            //var container = $(".row-fluid");
            //var numberOfCol = 3;
            //$(".bb-guide").css('width', 100 / numberOfCol + '%');

            $('.colum-option').resizable({
                    handles: 'e',
                    create: function(e, ui) { // pas besoin de create pour l'instant


                        var parentW = $(this).parent().width();
                        var container = $(this).parent();
                        //var container = $(".row");
                        //alert(parentW);

                    },
                    start: function(e, ui) {

                        //alert(ui.size.width);
                        //var thiscol = $(this);

                        //alert(thiscol.css("width"));

                        //sibTotalWidth = ui.originalSize.width + ui.originalElement.next().outerWidth();
                        //sibTotalWidth = ui.size.width; //GC
                    },
                    stop: function(e, ui) {


                    },
                    resize: function(e, ui) { // pas besoin pour l'instant

                        var thiscol = $(this);




                        var container = thiscol.parent();
                        var containerW = thiscol.parent().width();
                        var containerW = thiscol.parent().outerWidth();

                        var cellPercentWidth = 100 * ui.originalElement.outerWidth() / container.innerWidth();

                        //alert(cellPercentWidth + ' | ' + container.outerWidth() + ' | ' + ui.originalElement.outerWidth())

                        ui.originalElement.css('width', cellPercentWidth + '%');

                        //alert(ui.originalElement.outerWidth());

                        //alert(cellPercentWidth);
                        var Colnum = getClosest(gridsystem, cellPercentWidth);

                        ui.size.height = Math.round(ui.size.height / 30) * 30;

                        console.log('container: ' + ui.size.width);

                        //alert($(this).width() + 'px');
                        var thiscol = $(this);


                        thiscol.removeClass(bsClass).addClass('col-sm-' + Colnum);

                        //$('#bb-guide-column .bb-guide').css("width", ''); // empty all style

                        thiscol.css("width", '');
                        //thiscol.removeAttr("style");
                        thiscol.find(".showClass").text('col-sm-' + Colnum);
                        //alert(cellPercentWidth);

                    }

                }

            );
        });



        // Bootstrap grid system array
        var gridsystem = [{
            grid: 8.33333333,
            col: 1
        }, {
            grid: 16.66666667,
            col: 2
        }, {
            grid: 25,
            col: 3
        }, {
            grid: 33.33333333,
            col: 4
        }, {
            grid: 41.66666667,
            col: 5
        }, {
            grid: 50,
            col: 6
        }, {
            grid: 58.33333333,
            col: 7
        }, {
            grid: 66.66666667,
            col: 8
        }, {
            grid: 75,
            col: 9
        }, {
            grid: 83.33333333,
            col: 10
        }, {
            grid: 100,
            col: 11
        }, {
            grid: 91.66666667,
            col: 12
        }, {
            grid: 10000,
            col: 1
        }];

        // find the closest number from Bootstrap grid
        function getClosest(arr, value) {
            var closest, mindiff = null;

            for (var i = 0; i < arr.length; ++i) {
                var diff = Math.abs(arr[i].grid - value);

                if (mindiff === null || diff < mindiff) {
                    // first value or trend decreasing
                    closest = i;
                    mindiff = diff;
                } else {
                    // trend will increase from this point onwards
                    //return arr[closest]; //object
                    return arr[closest]['col']; // col number
                    //return arr[closest]['grid']; // col percentage

                }
            }
            return null;
        }


        $(function() {

            $(".builder-blocks").mousewheel(function(event, delta) {

                this.scrollLeft -= (delta * 30);

                event.preventDefault();

            });

        });
    </script>
    </div>
    <?php /**/ ?>
</body>

</html>