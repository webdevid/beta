var dataImages = $('.collage').data('images');
dataImages = dataImages.split(',');

console.log(dataImages);

$('.collage').imagesGrid({
    images: dataImages,
    align: true,
    cells: 5
});

//         $('.modal-content').resizable({
//             alsoResize: ".modal-dialog",
//             minHeight: 150
//         });
//$('.modal-dialog').draggable();

function countdownStart() {
    var getCountdown = $('.countdown').data('countdown');
    $('.countdown').countdown(getCountdown, function(event) {
        $(this).html(event.strftime('<span>%D<span class="small-cd">Days</span></span> <span>%H<span class="small-cd">Hours</span></span> <span>%M<span class="small-cd">Min</span></span> <span>%S<span class="small-cd">Sec</span></span>'));
    });
}


$(document).ready(function() {



    countdownStart();



    var tag = $('.instalive').data('instalive');

    function instalive(tag) {
        $.ajax({
            url: 'http://themesfoundry.com/my/api/instagram/process.php',
            data: 'tag=' + tag,
            dataType: 'json',
            type: 'GET',
            success: function(response) {
                if (response.status == 'Success') {
                    $('.loader').html('');
                    $('.instalive').html(' ');
                    console.log(response.imageset[0].thumbnail);
                    for (var i = 0; i < response.imageset.length; i++) {
                        var url = response.imageset[i].thumbnail;
                        if (url != false)
                            $('.instalive').append('<img class="instalive-invitwo" src="' + url + '">');
                    }
                }
            },
            error: function(e) {
                $('.loader').html('');
                $('.instalive').append('<h3>Error processing your request!</h3>');
            }
        });
    }

    instalive(tag);
    // function myFunction() {
    //     var tag = $('.instalive').data('instalive');
    //     setInterval(instalive(tag), 30000);
    // }
    // myFunction();

});




$('#body .ls-row').each(function() {
    console.log($(this).data('section-title'));
    $('div#menu_page').append(
        $('<div class="form-group"></div>').html(
            $("<input/>", {
                type: 'text',
                id: 'menus-' + $(this).data('id'),
                class: 'form-control',
                name: 'menu-' + $(this).data('id'),
                value: $(this).data('section-title'),
            }),
            $("<input/>", {
                type: 'text',
                id: 'menus-' + $(this).data('id'),
                class: 'form-control',
                name: 'menu-' + $(this).data('id'),
                value: $(this).data('section-title'),
            })
        )
    );
});

$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

$('.open_colum_bg').click(function() {
    var colum_target = $(this).data('open');
    open_popup(base_url + 'file_manager/filemanager/dialog.php?type=1&popup=1&field_id=' + colum_target);
});

function open_popup(url) {
    var w = 880;
    var h = 570;
    var l = Math.floor((screen.width - w) / 2);
    var t = Math.floor((screen.height - h) / 2);
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

// Nestable
/*
$(document).ready(function() {

    var updateOutput = function(e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    $('#nestable-menu').on('click', function(e) {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestableMenus').nestable({
        group: 1
    }).on('change', updateOutput);
    updateOutput($('#nestableMenus').data('output', $('#nestable-output')));

});
*/

/*
 *  search icon list
 */
$("#searchIcons").on("change paste keyup", function() {
    //console.log($(this).val());
    $(".box_content_icons i").hide();
    $(".box_content_icons i[class*='" + $(this).val() + "']").show();
    if ($(this).val() == '') {
        $(".box_content_icons i").show();
    }

});

/*
 * slider bar function for font size
 */

$(function() {
    $("#fonticon-slider-range-min").slider({
        range: "min",
        value: 22,
        min: 1,
        max: 350,
        slide: function(event, ui) {
            $("#fonticon-size").val(ui.value + "px");
        }
    });
    $("#fonticon-size").val($("#fonticon-slider-range-min").slider("value") + "px");
});

/*
 * color function for font icon color
 */
$("#fonticon-color,#colum_bg_color,#block_bg_color,#menus_color").spectrum({
    color: "#ECC",
    showInput: true,
    showAlpha: true,
    allowEmpty: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: true,
    showSelectionPalette: true,
    maxSelectionSize: 10,
    preferredFormat: "rgb",
    move: function(color) {

    },
    show: function() {

    },
    beforeShow: function() {

    },
    hide: function() {

    },
    change: function() {

    },
    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
            "rgb(204, 204, 204)", "rgb(217, 217, 217)", "rgb(255, 255, 255)"
        ],
        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
            "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"
        ],
        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
            "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
            "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
            "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
            "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
            "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
            "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
            "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
            "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
            "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"
        ]
    ]
});

/* functional builder
 * update : 01-09-2016
 */
$('.close-blockcat').click(function() {
    $('.blocks-categories').removeClass('active');
    $('.builder-blocks').removeClass('active');
    $('.ls_button').removeClass('active');
    $('#body').removeClass('p-b-230');
});

$('.ls_button').click(function() {
    var ls_action = $(this).data('action');

    $('.ls_button').removeClass('active');
    $(this).addClass('active');

    if (ls_action == 'blocks') {
        $('.blocks-categories .block,.blocks_item--section').removeClass('hide');
        $('.blocks-categories .component,.widget_item--component').addClass('hide');

        $('.blocks-categories').addClass('active');
        $('.builder-blocks').addClass('active');

        $('#body').addClass('p-b-230');
    }

    if (ls_action == 'widgets') {
        $('.blocks-categories .block,.blocks_item--section').addClass('hide');
        $('.blocks-categories .component,.widget_item--component').removeClass('hide');

        $('.blocks-categories').addClass('active');
        $('.builder-blocks').addClass('active');

        $('#body').addClass('p-b-230');
    }

    if (ls_action == 'preview') {
        // destroy tinymce
        //tinymce.remove();
    }


    if (ls_action == 'themes') {
        $('#libraryModalTheme').modal('show');
    }

    if (ls_action == 'menus') {
        $('#libraryModalMenus').modal('show');
    }

    if (ls_action == 'preview') {
        $('#body').removeClass('preview-tablet preview-phone');
    }
    if (ls_action == 'preview_tablet') {
        $('#body').removeClass('preview-tablet preview-phone');
        $('#body').addClass('preview-tablet');
        tinymce.remove();
    }
    if (ls_action == 'preview_phone') {
        $('#body').removeClass('preview-tablet preview-phone');
        $('#body').addClass('preview-phone');
        tinymce.remove();


    }

    if (ls_action == 'settings') {
        $('#blockModalPageOption').modal('show');
    }



});

/*
 * modal button action
 */
$('.ls-modal-button').click(function() {
    var mbAction = $(this).data('action');
    $('.ls-modal-button').removeClass('active');
    $('.ls-modal-content').removeClass('active');
    //if(mbAction=='library'){
    $(this).addClass('active');
    $('#' + mbAction).addClass('active');
    //}
});


/**
 * Block / section / widget / component  option
 * update : 11-09-2016
 */
function add_delete(block_id) {
    $('.ls-block-option').remove();
    $('.ls-widget-option').remove();
    $('.ls-colum-option-col').remove();
    $('.colum-option-col').remove();

    // option setting block / row / section
    $(".ls-row").append('<div class="ls-block-option">' +
        '<i class="fa fa-cubes" aria-hidden="true"></i>' +
        '<div class="ls-block-option_title"  data-toggle="tooltip" data-placement="top" title="Drag block">block</div>' +
        //'<div class="ls-block-option_move"  data-action="up" data-toggle="tooltip" data-placement="top" title="Move up"><i class="fa fa-chevron-up"></i></div>' +
        //'<div class="ls-block-option_move"  data-action="down" data-toggle="tooltip" data-placement="top" title="Move down"><i class="fa fa-chevron-down"></i></div>' +
        '<div class="ls-block-option_setting"  data-toggle="tooltip" data-placement="top" title="Option block"><i class="fa fa-gear"></i></div>' +
        '<div class="ls-block-option_clone" data-id=' + block_id + ' data-toggle="tooltip" data-placement="top" title="Duplicate"><i class="fa fa-clone"></i></div>' +
        '<div class="ls-block-option_save" data-id=' + block_id + ' data-toggle="tooltip" data-placement="top" title="Save Block"><i class="fa fa-floppy-o"></i></div>' +
        '<div class="ls-block-option_delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close" ></i></div>' +
        '</div>');

    // option setting widget-box
    $(".sortable-item").append('<div class="ls-widget-option">' +
        '' +
        '<div class="ls-widget_title"  data-toggle="tooltip" data-placement="top" title="Drag Widget"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> widget </div>' +
        '<div class="ls-widget_duplicate" data-toggle="tooltip" data-placement="top" title="Duplicate"><i class="fa fa-clone" aria-hidden="true"></i></div>' +
        '<div class="ls-widget_settings"  data-toggle="tooltip" data-placement="top" title="Settings"><i class="fa fa-gear"></i></div>' +
        '<div class="ls-widget_delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close" ></i></div>' +
        '</div>');

    // option setting colum
    $(".colum-option").append('<div class="colum-option-col">' +
        '<div class="colum-option-col_setting"  data-toggle="tooltip" data-placement="top" title="Colum option"><i class="fa fa-gear"></i></div>' +
        '<div class="colum-option-col_grid-minus" data-toggle="tooltip" data-placement="top" title="Grid -"><i class="fa fa-minus" aria-hidden="true"></i></div>' +
        '<div class="colum-option-col_grid-add" data-toggle="tooltip" data-placement="top" title="Grid +"><i class="fa fa-plus" aria-hidden="true"></i></div>' +
        '<div class="colum-option-col_delete"  data-toggle="tooltip" data-placement="top" title="Delete Colum"><i class="fa fa-close"></i></div>' +
        '</div>');

    $('.colum-option-col_setting').click(function() {
        $('.colum-option').removeClass('active');
        $('#libraryModalColum').modal('show');
        $(this).parent().parent().addClass('active');
    });

    $('.ls-widget_settings').click(function() {
        $('.widget-box').removeClass('active');
        $(this).parent().prev().addClass('active');
        console.log($(this).parent().prev());
        $('#ModalWidget').modal('show');
        //$(this).parent().parent().addClass('active');
    });

    $('.colum-option-col_grid-add').click(function() {
        //var lg = $(this).parent().parent().parent().parent().data('lg');
        var md = $(this).parent().parent().data('md');
        var sm = $(this).parent().parent().data('sm');
        var xs = $(this).parent().parent().data('xs');
        var target = $(this).parent().parent();

        if ($('#body').hasClass('preview-tablet')) {
            console.log('sm+');
            if (sm < 12) {
                var colSm = ' col-sm-' + (sm + 1);
                target.data('sm', (sm + 1));
            } else {
                var colSm = ' col-sm-' + sm;
            }
            target.removeClass('col-sm-' + sm);
            target.attr('class', 'colum-option ' + ' col-md-' + md + ' col-xs-' + xs + colSm);
        } else if ($('#body').hasClass('preview-phone')) {
            console.log('xs+');
            if (xs < 12) {
                var colXs = ' col-xs-' + (xs + 1);
                target.data('xs', (xs + 1));
            } else {
                var colXs = ' col-xs-' + xs;
            }
            target.removeClass('col-xs-' + xs);
            target.attr('class', 'colum-option ' + ' col-md-' + md + ' col-sm-' + sm + colXs);
        } else {
            console.log('md+');
            if (md < 12) {
                var colMd = ' col-md-' + (md + 1);
                target.data('md', (md + 1));
            } else {
                var colMd = ' col-md-' + md;
            }
            target.removeClass('col-md-' + md);
            target.attr('class', 'colum-option ' + ' col-sm-' + sm + ' col-xs-' + xs + colMd);
        }

    });
    // $('.ls-widget_grid-minus').click(function() {
    $('.colum-option-col_grid-minus').click(function() {
        //var lg = $(this).parent().parent().parent().parent().data('lg');
        var md = $(this).parent().parent().data('md');
        var sm = $(this).parent().parent().data('sm');
        var xs = $(this).parent().parent().data('xs');
        var target = $(this).parent().parent();

        console.log(target);
        if ($('#body').hasClass('preview-tablet')) {
            console.log('sm-');
            if (sm > 1) {
                var colSm = ' col-sm-' + (sm - 1);
                target.data('sm', (sm - 1));
            } else {
                var colSm = ' col-sm-' + sm;
            }
            target.removeClass('col-sm-' + sm);
            target.attr('class', 'colum-option ' + ' col-md-' + md + ' col-xs-' + xs + colSm);
        } else if ($('#body').hasClass('preview-phone')) {
            console.log('xs-');
            if (xs > 1) {
                var colXs = ' col-xs-' + (xs - 1);
                target.data('xs', (xs - 1));
            } else {
                var colXs = ' col-xs-' + xs;
            }
            target.removeClass('col-xs-' + xs);
            target.attr('class', 'colum-option ' + ' col-md-' + md + ' col-sm-' + sm + colXs);
        } else {
            console.log('md-');
            if (md > 1) {
                var colMd = ' col-md-' + (md - 1);
                target.data('md', (md - 1));
            } else {
                var colMd = ' col-md-' + md;
            }
            target.removeClass('col-md-' + md);
            target.attr('class', 'colum-option ' + ' col-sm-' + xs + ' col-xs-' + xs + colMd);
        }
    });
} // end add_delete();

/**
 * function custome widget stye
 * created 16 sep 2016
 */

$('#updateWidget').click(function() {
    var target = $('.widget-box.active');
    var wpl = $('#widget_p_l').val();
    var wpt = $('#widget_p_t').val();
    var wpr = $('#widget_p_r').val();
    var wpb = $('#widget_p_b').val();
    target.css({
        'padding-left': wpl + '.px',
        'padding-top': wpt + '.px',
        'padding-right': wpr + '.px',
        'padding-bottom': wpb + '.px'
    });
    $('.widget-box').removeClass('active');
});
/**
 * function custome colum STYLE
 * created 11-09-206
 */
$('#updateColum').click(function() {
    $('.colum-option.active').removeClass('dark light');
    var backgroundColor = $('#colum_bg_color').val();
    var columStyle = $('#columStyle').val();
    var columEqStyle = $('#columEqStyle').val();
    //alert(columStyle);
    $('.colum-option.active').css({
        'background-color': backgroundColor
    });
    $('.colum-option.active').addClass(columStyle);
    if (columEqStyle == 'yes') {
        $('.colum-option.active').parent().addClass('eq-block');
    } else {
        $('.colum-option.active').parent().removeClass('eq-block');
    }
    $('#libraryModalColum').modal('hide');
});

/**
 * function custome block
 * created 12-09-2016
 */
$('#saveBlockOption').click(function() {
    var backgroundColor = $('#block_bg_color').val();
    var backgroundImage = $('#block_bg_image').val();
    var backgroundVideo = $('#block_bg_video').val();
    var block_row_title = $('#block_row_title').val();
    var block_row_id = $('#block_row_id').val();
    var blockScreen = $('#blockScreen').val();
    var blockCentered = $('#blockCentered').val();
    var blockBgParallax = $('#blockBgParallax').val();
    var blockNoPadding = $('#blockNoPadding').val();
    var blockFluid = $('#blockFluid').val();

    var target = '.ls-row.active';

    $(target + ' .background-color').css({
        'background-color': backgroundColor
    });
    if (backgroundImage != '') {
        $(target + ' .background').removeAttr('style');
        $(target + ' .background').attr('style', 'background-image:url("' + backgroundImage + '");');
    }
    if (backgroundVideo != '') {
        $(target + ' .background-video').data('bgvideo', backgroundVideo);
    }
    if (block_row_title) {
        $(target).data('section-title', block_row_title);
    }
    if (block_row_id) {
        $(target).attr('id', block_row_id);
    }

    if (blockScreen == 'yes') {
        $(target).addClass('fullscreen');
    } else {
        $(target).removeClass('fullscreen');
    }

    if (blockNoPadding == 'yes') {
        $(target + ' .container').removeClass('');
    } else {
        $(target + ' .container').addClass('');
    }

    if (blockFluid == 'yes') {
        if ($(target + ' .content > div:first-child').hasClass('container')) {
            $(target + ' .content > div:first-child').removeClass('container').addClass('container-fluid');
        }
    } else {
        if ($(target + ' .content > div:first-child').hasClass('container-fluid')) {
            $(target + ' .content > div:first-child').removeClass('container-fluid').addClass('container');
        }
    }

    if (blockBgParallax == 'yes') {
        $(target + ' .background').addClass('bg-parallax');
    } else {
        $(target + ' .background').removeClass('bg-parallax');
    }

    if (blockCentered == 'yes') {
        if ($(target + ' .container').hasClass('vertical-align-wrap')) {

        } else {
            $(target + ' .container').addClass('vertical-align-wrap').wrapInner(function() {
                return "<div class='vertical-align vertical-align--middle'></div>";
            });
        }
    } else {
        $(target + '  .container').removeClass('vertical-align-wrap');
        $(target + '  .container > .vertical-align,' + target + ' .container > .vertical-align--middle').contents().unwrap();


    }


    $('.ls-row').remove('active');
    $('#blockModal').modal('hide');
});


/**
 * function delete block/section/widget
 * update : 01-09-2016
 */
function perform_delete() {
    $(".ls-block-option_delete").click(function() {
        $(this).parent().parent().remove();
    });
    $(".ls-widget_delete").click(function() {
        $(this).parent().parent().remove();
    });
    $(".colum-option-col_delete").click(function() {
        $(this).parent().parent().remove();
    });
    $(".ls-block-option_setting").click(function() {
        $('.ls-row').removeClass('active');
        $('#blockModal').modal('show');
        $(this).parent().parent().addClass('active');
        $('#block_row_title').val($(this).parent().parent().data('section-title'));
        $('#block_row_id').val($(this).parent().parent().attr('id'));
    });
    $('#block_library').click(function() {
        $('#libraryModal').modal('show');
    });
}

// define & activate froala editor
// date : 31 august 2016

function editorBuilder() {
    tinymce.remove();
    tinymce.init({
        selector: 'div.widget-box',
        //theme: 'inlite',
        menubar: false,
        schema: "html5",
        plugins: 'image table link paste contextmenu textpattern autolink imagetools fontawesome noneditable textcolor colorpicker lineheight ',
        insert_toolbar: 'quickimage quicktable',
        selection_toolbar: 'insertfile undo redo | fontawesome responsivefilemanager |  styleselect | bold italic | alignleft | link image',
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignmentsplit outdent indent | link image fontawesome',
        toolbar2: 'forecolor backcolor | fontselect fontsizeselect lineheightselect',
        imagetools_toolbar: "editimage imageoptions",
        imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
        inline: true,
        paste_data_images: true,
        image_advtab: true,
        external_filemanager_path: "http://themesfoundry.com/my/file_manager/filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {
            "filemanager": "http://themesfoundry.com/my/file_manager/filemanager/plugin.min.js"
        },
        noneditable_noneditable_class: 'fa,divider,ls_navigation,menu-mobile',
        extended_valid_elements: 'span[*],a[*],img[*],hr[*],font[*],div[*],p[*]',
        content_css: [
            '//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
            '//fonts.googleapis.com/css?family=Abril+Fatface|Lato|Allura|Amatic+SC|Damion|Dancing+Script|Eczar|Fredericka+the+Great|Great+Vibes|Mr+Dafoe|Mrs+Saint+Delafield|Pacifico|Pinyon+Script|Playball|Playfair+Display|Playfair+Display+SC|Rouge+Script|Satisfy|Seaweed+Script|Vidaloka|Yellowtail|Yesteryear',
        ],
        font_formats: 'Pacifico= Pacifico, cursive;' +
            'Dancing Script= Dancing Script, cursive;' +
            'Lato= Lato;' +
            'Amatic SC= Amatic SC, cursive;' +
            'Abril Fatface= Abril Fatface, cursive;' +
            'Yellowtail= Yellowtail, cursive;' +
            'Satisfy= Satisfy, cursive;' +
            'Great Vibes= Great Vibes, cursive;' +
            'Playball= Playball, cursive;' +
            'Vidaloka= Vidaloka, serif;' +
            'Damion= Damion, cursive;' +
            'Yesteryear= Yesteryear, cursive;' +
            'Fredericka the Great= Fredericka the Great, cursive;' +
            'Eczar= Eczar, serif;' +
            'Seaweed Script= Seaweed Script, cursive;' +
            'Playfair Display= Playfair Display, serif;' +
            'Playfair Display SC= Playfair Display SC, serif;' +
            'Mr Dafoe= Mr Dafoe, cursive;' +
            'Mrs Saint Delafield= Mrs Saint Delafield, cursive;' +
            'Pinyon Script= Pinyon Script, cursive;' +
            'Rouge Script= Rouge Script, cursive;' +
            'Allura= Allura, cursive;' +
            //
            'Andale Mono=andale mono,times;' +
            'Arial=arial,helvetica,sans-serif;' +
            'Arial Black=arial black,avant garde;' +
            'Book Antiqua=book antiqua,palatino;' +
            'Comic Sans MS=comic sans ms,sans-serif;' +
            'Courier New=courier new,courier;' +
            'Georgia=georgia,palatino;' +
            'Helvetica=helvetica;' +
            'Impact=impact,chicago;' +
            'Symbol=symbol;' +
            'Tahoma=tahoma,arial,helvetica,sans-serif;' +
            'Terminal=terminal,monaco;' +
            'Times New Roman=times new roman,times;' +
            'Trebuchet MS=trebuchet ms,geneva;' +
            'Verdana=verdana,geneva;' +
            'Webdings=webdings;' +
            'Wingdings=wingdings,zapf dingbats',
        fontsize_formats: "8px 10px 12px 14px 16px 18px 24px 26px 30px 32px 34px 36px 40px 46px 48px 56px 58px 60px 62px 68px 72px",
        lineheight_formats: "8px 10px 12px 14px 16px 18px 24px 26px 30px 32px 34px 36px 40px 46px 48px 56px 58px 60px 62px 68px 72px",
        //fontsize_formats: "8pt 10pt 12pt 14pt 16pt 18pt 24pt 26pt 30pt 32pt 34pt 36pt 40pt 46pt 48pt 56pt 58pt 60pt 62pt 68pt 72pt",
        //lineheight_formats: "8pt 10pt 12pt 14pt 16pt 18pt 24pt 26pt 30pt 32pt 34pt 36pt 40pt 46pt 48pt 56pt 58pt 60pt 62pt 68pt 72pt",
        // align dropdown
        setup: function(editor) {
            editor.on('click', function() {
                $('.widget-box .fa').click(function() {
                    $(this).addClass('edit-icons');
                    $('#libraryModalFonticons').modal('show');
                });
                $('.widget-box .ls_navigation').click(function() {
                    $(this).addClass('edit-menu');
                    $('#libraryModalMenus').modal('show');
                    $('#libraryModalMenus input').val(' ');
                    $('#libraryModalMenus select#int_menu_title_link, #libraryModalMenus select#pag_menu_title_link').find('option').remove().end();
                });

                $('.menu-mobile').unbind().bind('click', function() {
                    console.log('run menu mobile inside');
                    $('.menu-position').toggleClass('active');
                });

            });
            editor.on('init', function() {
                //this.getDoc().body.style.fontSize = '16px';
                //this.getDoc().body.style.fontFamily = 'Georgia';
            });
            editor.addButton('alignmentsplit', {
                type: 'splitbutton',
                text: '',
                icon: 'alignleft',
                onclick: function(e) {
                    tinyMCE.execCommand(this.value);
                },
                menu: [{
                    icon: 'alignleft',
                    text: 'Align Left',
                    onclick: function() {
                        tinyMCE.execCommand('JustifyLeft');
                        this.parent().parent().icon('alignleft');
                        this.parent().parent().value = 'JustifyLeft'
                    }
                }, {
                    icon: 'alignright',
                    text: 'Align Right',
                    onclick: function() {
                        tinyMCE.execCommand('JustifyRight');
                        this.parent().parent().icon('alignright');
                        this.parent().parent().value = 'JustifyRight';
                    }
                }, {
                    icon: 'aligncenter',
                    text: 'Align Center',
                    onclick: function() {
                        tinyMCE.execCommand('JustifyCenter');
                        this.parent().parent().icon('aligncenter');
                        this.parent().parent().value = 'JustifyCenter';
                    }
                }, {
                    icon: 'alignjustify',
                    text: 'Justify',
                    onclick: function() {
                        tinyMCE.execCommand('JustifyFull');
                        this.parent().parent().icon('alignjustify');
                        this.parent().parent().value = 'JustifyFull';
                    }
                }],
                onPostRender: function() {
                    // Select the first item by default
                    this.value = 'JustifyLeft';
                }
            });
        },
        // imagetools save
        images_upload_url: '/my/postAcceptor.php',
        images_upload_base_path: 'http://themesfoundry.com/my/',
        images_upload_credentials: true,
        relative_urls: false,
        image_dimensions: false,

    });

    $('.modal-backdrop').click(function() {
        $('.widget-box .ls_navigation').removeClass('edit-menu');
        $('#libraryModalFonticons').modal('hide');
    })


    $('.widget-box .fa').click(function() {
        $(this).addClass('edit-icons');
        $('#libraryModalFonticons').modal('show');
    });

    $('.widget-box .menu-mobile').unbind().bind('click', function() {
        console.log('run menu mobile outside');
        $('.menu-position').toggleClass('active');
    });


    $('.box_content_icons i').click(function() {
        var iclass = $(this).attr('class');
        var iconColor = $('#fonticon-color').val();
        var iconSize = $('#fonticon-size').val();

        $('.edit-icons').attr('class', 'edit-icons ' + iclass);
        // $('.edit-icons').css({
        //     "color": iconColor,
        //     "font-size": iconSize
        // });
        $('.fa').removeClass('edit-icons');
        $('#libraryModalFonticons').modal('hide');
    });

    $('#selectIcon').click(function() {
        var iconColor = $('#fonticon-color').val();
        var iconSize = $('#fonticon-size').val();
        //console.log(iconColor);
        $('.edit-icons').css({
            "color": iconColor,
            "font-size": iconSize
        });
        $('.fa').removeClass('edit-icons');
        $('#libraryModalFonticons').modal('hide');
    });


}


// drag & drop component / widget
// date : 31 august 2016
function componentBuilder() {
    $(".widget_item--component").draggable({
        appendTo: "body",
        helper: "clone"
    });

    $(".sortable-list").droppable({
        //activeClass: "ui-state-default",
        //hoverClass: "ui-state-hover",
        //connectWith: '.main-block .sortable-list',
        accept: ".widget_item--component",
        //accept: ":not(.ui-sortable-helper)",
        placeholder: 'placeholder',
        drop: function(event, ui) {
            var draggableId = ui.draggable.attr("data-id");
            var droppableId = $(this).attr("data-id");
            //$(this).find(".placeholder").remove();
            // $('.ui-droppable').removeClass("ui-droppable-active");
            var target = $(this);
            $.ajax({
                type: "GET",
                url: base_url + "superadmin/widgets/getwidget/" + encodeURIComponent(draggableId),
                dataType: 'json',
                beforeSend: function(x) {
                    //console.log('beforesend');
                    //$('#ajax-loader').css('visibility', 'visible');
                },
                success: function(msg) {
                    var datax = msg;
                    $.each(datax, function(index, element) {
                        //console.log(element.widget_source);
                        var finalData = element.widget_source.replace(/\\/g, "");
                        $('<div class="sortable-item">' + finalData + '</div>').appendTo(target);
                        editorBuilder();
                        add_delete();
                        perform_delete();
                    });
                }, // end success
                error: function(jqXHR, exception) {
                    console.log(jqXHR);
                    if (jqXHR.status === 0) {
                        console.log('Not connect.\n Verify Network.');
                    } else if (jqXHR.status == 404) {
                        console.log('Requested page not found. [404]');
                    } else if (jqXHR.status == 500) {
                        console.log('Internal Server Error [500].');
                    } else if (exception === 'parsererror') {
                        console.log('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        console.log('Time out error.');
                    } else if (exception === 'abort') {
                        console.log('Ajax request aborted.');
                    } else {
                        console.log('Uncaught Error.\n' + jqXHR.responseText);
                    }
                }
            }); // end $ajax



            //alert(draggableId); // do someting loading wait in here





            alert('success drop'); // do something remove loading in here

        }
    }).sortable({
        connectWith: '.main-block .sortable-list',
        placeholder: 'placeholder',
        forceHelperSize: true,
        forcePlaceholderSize: true,
        handle: '.ls-widget_title',
        opacity: 0.8,
        sort: function() {
            console.log('on sortable');
            $('.ls-row:hover .colum-option').css({
                'border': '1px solid #fff'
            });
            $('.ls-row:hover .widget-box_space').css({
                'background': '#FFFFFF'
            });
            $('.ls-row:hover .sortable-list.ui-droppable.ui-sortable').css({
                'background': '#ff0000'
            });
            //$('.ui-droppable').removeClass("ui-droppable-active");
            // gets added unintentionally by droppable interacting with sortable
            // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
        },
        out: function() {
            $('.colum-option').css({
                'border': '0px solid #fff'
            });
            $('.widget-box_space').css({
                'background': 'transparent'
            });
            $('.sortable-list.ui-droppable.ui-sortable').removeAttr('style');
            //$('.ui-droppable').removeClass("ui-droppable-active");
            //getSortable();
        }


    });
}




$(".blocks_item--section").hover(function() {
        $(this).append('<div class="blocks_item--section-add"><i class="fa fa-plus"></i>&nbsp;Insert</div>');
        $('.blocks_item--section-add').click(function() {

            $("#pageBlock").append($("#ls_blocks-preloaded-rows .ls-row[data-id='" + $(this).parent().attr("data-id") + "']").clone());

            perform_delete();
            editorBuilder();
            componentBuilder();
        });
    },
    function() {
        $(this).children(".blocks_item--section-add").remove();
    });
/**
 *  function duplicate block/section
 */
function perform_duplicate() {
    $(".ls-block-option_clone").unbind().bind('click', function() {
        var clone_block = $(this).parent().parent().clone(true, true);
        var clone_block = $(this).parent().parent().clone(true, true);
        clone_block.insertAfter($(this).parent().parent());

    });
}

$("#pageBlock").sortable({
    items: ".ls-row",
    revert: true,
    handle: '.ls-block-option_title',
    placeholder: "ls-row",
});


// mouse scroll block & widget area
// date : 31 august 2016
$(function() {
    $(".builder-blocks").mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 30);
        event.preventDefault();
    });
});


$(document).ready(function() {
    add_delete();
    perform_delete();
    editorBuilder();
    componentBuilder();

    $('.widget-box .menu-mobile').unbind().bind('click', function() {
        console.log('run menu mobile outside');
        $('.menu-position').toggleClass('active');
    });

    $(".ls_navigation_ctrl").sortable();
    $('.add-new-menu').click(function() {
        var li = $('<li  data-title="default" data-link="#default" data-linktype="int">');
        var licontent = $('<a href="#">New Menu item </a><span class="icon-right"  data-action="update"><i class="fa fa-gear"></i></span> <span class="icon-right" data-action="remove"><i class="fa fa-close"></i></span>');
        licontent.appendTo(li);
        li.appendTo(".ls_navigation_ctrl");
        actionMenu();
    });

    function actionMenu() {
        $('.icon-right').click(function() {
            var action = $(this).data('action');
            if (action == 'remove') {
                $(this).parent().remove();
            }
            if (action == 'update') {
                console.log('update');
                $('.ls_navigation_ctrl li').removeClass('edit-nav');
                $(this).parent().addClass('edit-nav');
                var target = '.ls_navigation_ctrl li.edit-nav';
                $('#menu_title_update').val($(target + ' a').html());
            }

            if ($("#menu_title_link").val() == 'ext') {
                $('#ext_link').removeClass('hide');
                //DoSomething();
            }

            $("#menu_title_link").on('change', function() {
                console.log('change');
                $('.menu-link-option').addClass('hide');

                if ($(this).val() == 'ext') {
                    $('#ext_link').removeClass('hide');
                    //DoSomething();
                }
                if ($(this).val() == 'int') {
                    $('#int_link').removeClass('hide');
                    $('select#int_menu_title_link').find('option').remove().end();
                    $('#body .ls-row').each(function() {
                        console.log($(this).data('section-title'));
                        console.log($(this).data('id'));
                        console.log($(this).attr('id'));
                        $("select#int_menu_title_link").prepend('<option value="#' + $(this).attr('id') + '">' + $(this).data('section-title') + '</option>');
                    });
                }
                if ($(this).val() == 'pag') {
                    $('#pag_link').removeClass('hide');
                }
            });

        });
    }
    actionMenu();

    function updateMenus() {
        $('#updateMenus').click(function() {
            var target = '.ls_navigation_ctrl li.edit-nav';
            var menu_title = $('#menu_title_update').val();
            var int_link = $('#int_menu_title_link').val();
            var pag_link = $('#pag_menu_title_link').val();
            var ext_link = $('#ext_menu_title_link').val();
            var title_link = $("#menu_title_link").val();
            var link;
            var lineheight = $('#menu_title_lineheight').val();
            var float_menu = $('#menu_title_float').val();
            var target_menu = $('ul.ls_navigation.edit-menu');

            $(target + ' a').html(menu_title);
            if (title_link == 'int') {
                link = int_link;
            }
            if (title_link == 'ext') {
                link = ext_link;
            }
            if (title_link == 'pag') {
                link = pag_link;
            }

            $(target).attr('data-title', menu_title).attr('data-link', link).attr('data-linktype', title_link);
            $('.ls_navigation_ctrl li').removeClass('edit-nav');

            target_menu.find('li').remove().end();
            $('.ls_navigation_ctrl li').each(function() {
                var data_link = $(this).data('link');
                var data_title = $(this).data('title');
                target_menu.append('<li><a href="' + $.trim(data_link) + '">' + data_title + '</a></li>');
                if (float_menu == 'float-center') {
                    if (target_menu.parent().hasClass('float-center-menu')) {

                    } else {
                        target_menu.parent().addClass('float-center-menu');
                    }
                } else {
                    target_menu.parent().removeClass('float-center-menu');
                    target_menu.removeClass('float-right float-left')
                    target_menu.css({
                        'line-height': lineheight
                    }).addClass(float_menu);
                }
            });

            var menucolor = $('#menus_color').val();
            $("<style>.ls_navigation li a{ color:" + menucolor + ";}</style>").appendTo(".style-code");

        });


    }
    updateMenus();


});