<?php
foreach($block_section as $bs_row){ 
?>
<div class="ls-row <?php if($bs_row->block_group==1){ echo "block-header"; }else{ echo "block-story"; } ?> scrollable-section" data-section-title="<?php echo $bs_row->block_title; ?>" data-id="<?php echo $bs_row->block_id;?>" data-option='<?php echo unserialize($bs_row->block_dataoption);?>' >
    <?php echo stripslashes($bs_row->block_source); ?>
</div>
<?php 
}
?>






<?php /*
<div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="1" >
                <div class="content">
                    <div class="container vertical-align-wrap relative w-960">
                        <div class="vertical-align vertical-align--middle text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="box_text--none">
                                        <div class="ls-edit el-sub-heading">kami yang berbahagia</div>
                                        <h1 class="ls-edit el-heading"><em>Thomas & Andini</em></h1>
                                        <div class="ls-edit el-location">Ritzt Carlton Hotel-Jakarta<br>23 January 2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1450849608880-6f787542c88a.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="2" >
                <div class="content">
                    <div class="container vertical-align-wrap relative w-960">
                        <div class="vertical-align vertical-align--middle text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="box_border--white">
                                    <div class="ls-edit el-sub-heading">kami yang berbahagia</div>
                                    <h1 class="ls-edit el-heading"><em>Thomas & Andini</em></h1>
                                    <div class="ls-edit el-location">Ritzt Carlton Hotel-Jakarta<br>23 January 2017</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="3" >
                <div class="content">
                    <div class="container vertical-align-wrap relative w-960">
                        <div class="vertical-align vertical-align--middle text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="box_text--white">
                                        <div class="ls-edit el-sub-heading">kami yang berbahagia</div>
                                        <h1 class="ls-edit el-heading"><em>Thomas & Andini</em></h1>
                                        <div class="ls-edit el-location">Ritzt Carlton Hotel-Jakarta<br>23 January 2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458724029936-2cc6ee38f5ef.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="4" >
                <div class="content">
                    <div class="container vertical-align-wrap">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <a href="//www.youtube.com/watch?v=Y8TqyCmawZM" class="link-video ls-el-edit" data-youtubeid="Y8TqyCmawZM" data-type="videoimagelink" data-option='{"cropOption":{"ratio":"1.7777777777777777"}}'><img src="img/demo/demo1.jpg"></a>
                                </div>
                                <div class="col-md-5">
                                    <div class="box_text--right">
                                        <div class="ls-edit el-sub-heading">Balai Kartini 23 Mei 2017</div>
                                        <h1 class="ls-edit el-heading  font-60"><em>Thomas & Andini</em></h1>
                                        <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me. That's what I'd hoped to give you forever</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="4b" >
                <div class="content">
                    <div class="container vertical-align-wrap">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-1"></div>    
                                <div class="col-md-5">
                                    <div class="box_text--left">
                                        <div class="ls-edit el-sub-heading">Balai Kartini 23 Mei 2017</div>
                                        <h1 class="ls-edit el-heading font-60"><em>Thomas & Andini</em></h1>
                                        <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me. That's what I'd hoped to give you forever</div>
                                    </div>
                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="//www.youtube.com/watch?v=Y8TqyCmawZM" class="link-video ls-el-edit" data-youtubeid="Y8TqyCmawZM" data-type="videoimagelink"  data-option='{"cropOption":{"ratio":"1.7777777777777777"}}'><img src="img/demo/demo1.jpg"></a>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="5" >
                <div class="content">
                    <div class="container vertical-align-wrap">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-1"></div>
                                
                                <div class="col-md-4">
                                    <div class="box_text--left">
                                        <div class="ls-edit el-sub-heading">Mempelai Pria</div>
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me. That's what I'd hoped to give you forever</div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <h1 class="ls-edit el-heading text-center white p-t-20"><em>&</em></h1>
                                </div>
                                <div class="col-md-4 text-right">
                                    <div class="box_text--right">
                                        <div class="ls-edit el-sub-heading">Mempelai Wanita</div>
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me. That's what I'd hoped to give you forever</div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>


            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="6" >
                <div class="content">
                    <div class="container vertical-align-wrap">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="box_text--left">
                                        <div class="el-sub-heading"></div>
                                        <h1 class="ls-edit el-heading">Organized. Loyal. Charismatic. Peace. Wise. Cool </h1>
                                        <div class="ls-edit el-excerpt p-t-15">- it's Thomas</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <div class="box_text--right">
                                        <div class="el-sub-heading"></div>
                                        <h1 class="ls-edit el-heading">Smart. Cheerful. Helpful. Taugh. Active. Casual. </h1>
                                        <div class="ls-edit el-excerpt p-t-15">- it's Andini</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center white p-t-40">
                                    <div class="ls-edit el-sub-heading">We are together in love harmony</div>
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="7" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box_text--left">
                                        <div class="ls-edit el-sub-heading font-12">Mempelai Pria</div>
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt">GUNAWAN</div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <a href="//www.youtube.com/watch?v=Y8TqyCmawZM" class="link-video ls-el-edit" data-youtubeid="Y8TqyCmawZM" data-type="videoimagelink"   data-option='{"cropOption":{"ratio":"1.7777777777777777"}}'><img src="img/demo/demo1.jpg"></a>
                                </div>
                                <div class="col-md-4 text-right">
                                    <div class="box_text--right">
                                        <div class="ls-edit el-sub-heading font-12">Mempelai Wanita</div>
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt">FELICIA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center white p-t-40">
                                    <div class="ls-edit el-sub-heading">We are together in love harmony</div>
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="8" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="box_text--left">
                                        <div class="ls-edit el-sub-heading font-12">Mempelai Pria</div>
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt">GUNAWAN</div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <a  href="//www.youtube.com/watch?v=2rGuXYAQb8s"  class="link-video  font-64 p-t-20 ls-el-edit" data-type="videoiconlink" data-youtubeid="2rGuXYAQb8s"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-5 text-right">
                                    <div class="box_text--right">
                                        <div class="ls-edit el-sub-heading font-12">Mempelai Wanita</div>
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt">FELICIA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center white p-t-40">
                                    <div class="ls-edit el-sub-heading">We are together in love harmony</div>
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="9" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle w-960">
                            <div class="row">
                                <div class="col-md-12 text-center white p-b-20">
                                    <div class="ls-edit el-sub-heading">Kami yang berbahagia</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="box_text--left">
                                        
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt">GUNAWAN</div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <h1 class="ls-edit el-heading text-center white p-t-20"><em>&</em></h1>
                                </div>
                                <div class="col-md-5 text-right">
                                    <div class="box_text--right">
                                        
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt">FELICIA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center white p-t-80">
                                    <div class="ls-edit el-sub-heading">We are together in love harmony</div>
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="10" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle w-960">
                            <div class="row">
                                <div class="col-md-12 text-center white p-b-40">
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                    <div class="ls-edit el-sub-heading">Turut mengundang anda di acara pernikahan kami</div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="box_text--center">
                                        <div class="thumb-people max-img-250  ls-el-edit" data-type="image"   data-option='{"cropOption":{"ratio":"1"}}'>
                                            <img src="img/thumb-400.jpg" class="rounded">
                                        </div>
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt">GUNAWAN</div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <h1 class="ls-edit el-heading text-center white p-t-80"><em>&</em></h1>
                                </div>
                                <div class="col-md-5 text-right">
                                    <div class="box_text--center">
                                        <div class="thumb-people max-img-250  ls-el-edit" data-type="image"   data-option='{"cropOption":{"ratio":"1"}}'>
                                            <img src="img/thumb-400.jpg" class="rounded">
                                        </div>
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt">FELICIA</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="11" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-12 text-center white p-b-40">
                                    <div class="ls-edit el-sub-heading">We are together in love harmony</div>
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="box_text--left">
                                        <div class="ls-edit el-sub-heading font-12">Mempelai Pria</div>
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt">GUNAWAN</div>
                                        <div class="ls-edit el-excerpt--small p-t-20">Putra pertama Kel. Bpk Soeharto<br>Jakarta</div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                     <a  href="//www.youtube.com/watch?v=2rGuXYAQb8s"  class="link-video  font-64 p-t-20 ls-el-edit" data-type="videoiconlink" data-youtubeid="2rGuXYAQb8s"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-5 text-right">
                                    <div class="box_text--right">
                                        <div class="ls-edit el-sub-heading font-12">Mempelai Wanita</div>
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt">FELICIA</div>
                                        <div class="ls-edit el-excerpt--small p-t-20">Putri ketiga Kel. Bpk Sumaryo<br>Bogor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>


            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="12" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-12 text-center white p-b-40">
                                    <div class="ls-edit el-sub-heading">We are together in love harmony</div>
                                    <div class="ls-edit el-address">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-7 text-center">
                                    <a href="//www.youtube.com/watch?v=Y8TqyCmawZM" class="link-video ls-el-edit" data-youtubeid="Y8TqyCmawZM" data-type="videoimagelink"   data-option='{"cropOption":{"ratio":"1.7777777777777777"}}'><img src="img/demo/demo1.jpg"></a>
                                </div>
                                <div class="col-md-4 text-right">
                                    <div class="box_text--right">
                                        <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                        <div class="ls-edit el-excerpt--small p-t-10">Putra pertama Kel. Bpk Soeharto<br>Jakarta</div>
                                        <h1 class="ls-edit el-heading"><em>&</em></h1>
                                        <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                        <div class="ls-edit el-excerpt--small p-t-10">Putri ketiga Kel. Bpk Sumaryo<br>Bogor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>


            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="13" >
                <div class="content">
                    <div class="container vertical-align-wrap relative">
                        <div class="vertical-align vertical-align--middle">
                            <div class="row">
                                <div class="col-md-12 text-center white p-b-40">
                                    <div class="ls-edit el-sub-heading font-12">We are together in love harmony</div>
                                    <h1 class="ls-edit el-heading font-22"><em>Right in the Middle of an Ordinary Life </em></h1>
                                    <div class="ls-edit el-address font-12">Balai Kartini, 27 January 2017</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="box_text--left">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h1 class="ls-edit el-heading"><em>Thomas</em></h1>
                                                <div class="ls-edit el-excerpt--small">Putra pertama Kel. Bpk Soeharto<br>Jakarta</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="thumb-people max-img-80 p-t-10 ls-el-edit"  data-type="image"   data-option='{"cropOption":{"ratio":"1"}}'>
                                                    <img src="img/thumb-400.jpg" class="rounded  img-fullwidth">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <h1 class="ls-edit el-heading white"><em>&</em></h1>
                                </div>
                                <div class="col-md-5 text-right">
                                    <div class="box_text--right">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="thumb-people max-img-80 p-t-10 ls-el-edit"  data-type="image"   data-option='{"cropOption":{"ratio":"1"}}'>
                                                    <img src="img/thumb-400.jpg" class="rounded img-fullwidth">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <h1 class="ls-edit el-heading"><em>Andini</em></h1>
                                                <div class="ls-edit el-excerpt--small">Putri ketiga Kel. Bpk Sumaryo<br>Bogor</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>


            <div class="ls-row block-header scrollable-section" data-section-title="slide 1" data-id="14" >
                <div class="content">
                    <div class="container vertical-align-wrap relative w-960">
                        <div class="vertical-align vertical-align--middle text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="box_text--none">
                                    <div class="ls-edit el-heading font-23">Denganmu aku sempurna</div>
                                    <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                    <div class="box-video p-t-20 p-b-20">
                                        <a  href="//www.youtube.com/watch?v=2rGuXYAQb8s"  class="link-video  font-64 p-t-20 ls-el-edit" data-type="videoiconlink" data-youtubeid="2rGuXYAQb8s"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="ls-edit el-excerpt">WEDDING INVITATION</div>
                                    <h1 class="ls-edit el-heading"><em>Thomas & Andini</em></h1>
                                    <div class="ls-edit el-location m-t-5">Ritzt Carlton Hotel-Jakarta, 23 January 2017</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url('img/photo-1458668383970-8ddd3927deed.jpg')"></div>
                <div class="background-video" data-bgvideo="TAJh8xEv6D0"></div>
            </div>

            <!-- //////// content story ///// //// -->
            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="16"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-30">
                        <div class="text-left">
                        <div class="row">
                            <div class="col-md-12 m-b-15">
                                <h1 class="ls-edit el-heading"><em>Our Story</em></h1>
                                <div class="ls-edit el-excerpt">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="17"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-30">
                        
                        <div class="row">
                            <div class="col-md-12 m-b-30 text-center">
                                <h1 class="ls-edit el-heading"><em>Our Story</em></h1>
                                <div class="ls-edit el-excerpt">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <div class="">
                                    <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <h1 class="ls-edit el-heading white"><em>&</em></h1>
                            </div>
                            <div class="col-md-5">
                                <div class="">
                                    <div class="ls-edit el-excerpt">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>


            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="18"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-30">
                        <div class="text-center">
                        <div class="row">
                            <div class="col-md-12 m-b-30 text-center">
                                <h1 class="ls-edit el-heading"><em>Our Story</em></h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau.</div>
                                <div class="ls-edit el-excerpt m-b-30 w-960 font-21">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me. The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First sight</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">Proposal</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="19"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        
                        <div class="row">
                            <div class="col-md-5 m-b-30 text-left p-r-20 p-t-20">
                                <div class="ls-edit el-excerpt text-uppercase font-16 letter-2">Awal kami berjumpa di waktu lampau.</div>
                                <h1 class="ls-edit el-heading lh-normal">Our Story</h1>
                                
                                <div class="ls-edit el-excerpt m-t-60 m-b-30 font-21">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box-icon p-t-20 p-b-20 font-22">
                                            <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                        </div>
                                        <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                        <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-icon p-t-20 p-b-20 font-22">
                                            <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                        </div>
                                        <h1 class="ls-edit el-sub-heading m-b-15">Fun date</h1>
                                        <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box-icon p-t-20 p-b-20 font-22">
                                            <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                        </div>
                                        <h1 class="ls-edit el-sub-heading m-b-15">Proposal</h1>
                                        <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-icon p-t-20 p-b-20 font-22">
                                            <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                        </div>
                                        <h1 class="ls-edit el-sub-heading m-b-15">Wedding</h1>
                                        <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="20"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        
                        <div class="row">
                            <div class="col-md-6 m-b-30 text-left p-t-20">
                                <div class="ls-edit el-excerpt text-uppercase font-16 letter-2">Awal kami berjumpa di waktu lampau.</div>
                                <h1 class="ls-edit el-heading lh-normal">Our Love Story</h1>
                                
                            
                            </div>
                            <div class="col-md-6">
                                <div class="ls-edit el-excerpt m-t-20 m-b-20 font-16">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                <div class="ls-edit el-excerpt m-b-40">Awal kami berjumpa di waktu lampau.</div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">Fun date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">Wedding</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="21" data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-30 p-t-60">
                        
                        <div class="row text-center">
                            <div class="col-md-12 m-b-30 p-t-20">
                                <div class="ls-edit el-excerpt text-uppercase font-16 letter-2">Awal kami berjumpa di waktu lampau.</div>
                                <h1 class="ls-edit el-heading lh-normal">Our Love Story</h1>
                                
                            
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="ls-edit el-excerpt m-t-20 m-b-20 font-16">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                <div class="ls-edit el-excerpt m-b-40">Awal kami berjumpa di waktu lampau.</div>
                            </div>

                        </div>
                        
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="22"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-t-60 p-b-60">
                        
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 text-right p-r-30">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default float-right w-30 m-b-20"></div>
                                <div class="clear clearfix"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        
                            <div class="col-md-4 text-left p-l-30">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">Wedding</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="clear clearfix"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                                
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="22-timeline" data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-t-60 p-b-60">
                        
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4  line-vertical  text-right p-r-30">
                                <div class="line-default float-right w-30 m-b-20"></div>
                                
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <div class="ls-edit el-excerpt font-11"><em>Maret 2016</em></div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-60">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                
                            </div>
                        
                            <div class="col-md-4 text-left p-l-30">
                                <div class="thumb-people ls-el-edit"  data-type="image" data-option='{"cropOption":{"ratio":"1"}}'>
                                    <img src="img/thumb-400.jpg" class="w-80 img-fullwidth">
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 text-right p-r-30">
                                <div class="thumb-people ls-el-edit"  data-type="image" data-option='{"cropOption":{"ratio":"1"}}'>
                                    <img src="img/thumb-400.jpg" class=" w-80 img-fullwidth">
                                </div>
                            </div>
                        
                            <div class="col-md-4  line-vertical  text-left p-l-30">
                                <div class="line-default w-30 m-b-20"></div>
                                
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <div class="ls-edit el-excerpt font-11"><em>July 2016</em></div>
                                <h1 class="ls-edit el-sub-heading m-b-15">Wedding</h1>
                                <div class="ls-edit el-excerpt m-b-60">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                
                                
                                
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="23"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        
                        <div class="row">
                            <div class="col-md-6 m-b-30 text-left p-t-50">
                                <h1 class="ls-edit el-heading lh-normal">Love Story</h1>
                                <div class="ls-edit el-excerpt p-t-15 font-16 letter-2">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-icon p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau. berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="24"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        
                        <div class="row">
                            <div class="col-md-6 m-b-30 text-left p-t-50">
                                <div class="thumb-people ls-el-edit"  data-type="image" data-option='{"cropOption":{"ratio":"1.3333333333333333"}}'>
                                    <img src="img/thumb-400.jpg" class="img-fullwidth">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-icon p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau. berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="25"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="box-icon p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-30">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau. berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                <div class="line-default w-30 m-b-20"></div>
                                <div class="ls-edit el-excerpt m-b-30 font-11">Awal kami berjumpa di waktu lampau.</div>
                            </div>
                            <div class="col-md-6 m-b-30 text-left p-t-50">
                                <div class="thumb-people ls-el-edit"  data-type="image" data-option='{"cropOption":{"ratio":"1.3333333333333333"}}'>
                                    <img src="img/thumb-400.jpg" class="img-fullwidth">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="26"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9 m-b-30 text-left p-r-20 p-t-20">
                                <div class="ls-edit el-excerpt text-uppercase font-16 letter-2">Awal kami berjumpa di waktu lampau.</div>
                                <h1 class="ls-edit el-heading lh-normal">Our Love Story</h1>
                                
                                <div class="ls-edit el-excerpt m-t-60 m-b-30 font-21">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                <div class="ls-edit el-excerpt ">Awal kami berjumpa di waktu lampau, Awal kami berjumpa di waktu lampau.</div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="27"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4  line-vertical  text-left p-r-30 p-l-95">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <div class="line-default float-right w-70"></div>
                                <div class="ls-edit el-excerpt font-11"><em>Maret 2016</em></div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-60">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                
                            </div>
                            <div class="col-md-4 text-left p-l-30">
                                <div class="thumb-people ls-el-edit"  data-type="image" data-option='{"cropOption":{"ratio":"1.3333333333333333"}}'>
                                    <img src="img/thumb-400.jpg" class="img-fullwidth">
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>


            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="28"  data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        <div class="row">
                            <div class="col-md-6 p-r-30">
                                <div class="ls-edit el-excerpt text-uppercase font-16 letter-2">Awal kami berjumpa di waktu lampau.</div>
                                <h1 class="ls-edit el-heading lh-normal">Our Story</h1>
                                
                                <div class="ls-edit el-excerpt m-t-60 m-b-30 font-21">The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds. And that's what you've given me.</div>
                                <div class="ls-edit el-excerpt ">Awal kami berjumpa di waktu lampau, Awal kami berjumpa di waktu lampau.</div>
                            </div>
                            <div class="col-md-6  line-vertical line-main text-left p-r-30 p-l-95 p-t-120">
                                <div class="box-icon p-t-20 p-b-20 font-22">
                                    <div class="ls-el-edit" data-type="icon" ><i class="fa fa-heart" aria-hidden="true"></i></div>
                                </div>
                                <div class="line-default float-right w-70"></div>
                                <div class="ls-edit el-excerpt font-11"><em>Maret 2016</em></div>
                                <h1 class="ls-edit el-sub-heading m-b-15">First date</h1>
                                <div class="ls-edit el-excerpt m-b-60">Awal kami berjumpa di waktu lampau Awal kami berjumpa di waktu lampau. Awal kami berjumpa di waktu lampau.<br>-2016-</div>
                                
                            </div>
                        </div>

                        
                    </div>
                </div>
                <div class="background" style="background-color:#000"></div>
                <div class="background-video" data-bgvideo=""></div>
            </div>

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="29" data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-960 p-b-60 p-t-60">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="demoPage grid">

                                    <div class="col-4_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-6_xs-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1441312311734-f44cc0bda31d?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6_xs-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1442120108414-42e7ea50d0b5?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
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

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="30" data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-fullwidth p-b-60 p-t-60">
                        <div class="row">
                            <div class="">
                                <div class="grid">

                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
                                        </div>
                                    </div>

                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
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

            <div class="ls-row scrollable-section block-story text-white" data-section-title="Story 1" data-id="31" data-option='{"blockPadding":{"top":"true","bottom":"true"}}'>
                <div class="content">
                    <div class="container relative w-fullwidth p-b-60 p-t-60">
                        <div class="row">
                            <div class="">
                                <div class="grid">

                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
                                        </div>
                                    </div>

                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
                                        </div>
                                    </div>

                                     <div class="col-4_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
                                        </div>
                                    </div>
                                     <div class="col-4_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
                                        </div>
                                    </div>
                                     <div class="col-_sm-12">
                                        <div class="thecard">
                                            <a class="card-img" href="#_">
                                                <img src="https://images.unsplash.com/photo-1427466920301-a96b3cadc6c8?fit=crop&amp;fm=jpg&amp;h=375&amp;w=500">
                                            </a>
                                            
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
            
            /*?>