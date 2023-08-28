<section
    class="elementor-section elementor-top-section elementor-element elementor-element-2798e3c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="2798e3c" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-790feca"
            data-id="790feca" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-f3a5898 elementor-widget elementor-widget-slider_revolution"
                    data-id="f3a5898" data-element_type="widget" data-widget_type="slider_revolution.default">
                    <div class="elementor-widget-container">

                        <div class="wp-block-themepunch-revslider">
                            <!-- START Home 1 REVOLUTION SLIDER 6.6.10 -->
                            <p class="rs-p-wp-fix"></p>
                            <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
                                style="visibility:hidden;background:#212621;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                <rs-module id="rev_slider_1_1" style data-version="6.6.10">
                                    <rs-slides style="overflow: hidden; position: absolute;">
                                        @foreach ($slides as $key => $slide)
                                            <rs-slide style="position: absolute;" data-key="rs-{{ $key }}"
                                                data-title="Slide {{ $key }}" data-anim="d:10;f:oppslidebased;"
                                                data-in="o:0;sx:1.1;sy:1.1;m:true;row:6;col:6;" data-out="a:false;">
                                                <img decoding="async" src="{{ asset('storage/' . $slide->image) }}"
                                                    alt="{{ $slide->sub_heading }}" title="bg-revslider-home1-01"
                                                    width="1920" height="769"
                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                    data-lazyload="{{ asset('storage/' . $slide->image) }}"
                                                    data-panzoom="d:6000ms;e:slow;ss:100%;se:105%;" data-no-retina>
                                                <rs-layer id="slider-1-slide-1-layer-0" data-type="text"
                                                    data-rsp_ch="on" data-xy="xo:35px;yo:215px,215px,140px,120px;"
                                                    data-text="w:normal;s:14;l:14;ls:1px;fw:600;"
                                                    data-padding="t:15;r:30;b:15;l:30;" data-frame_0="y:100%;"
                                                    data-frame_0_mask="u:t;"
                                                    data-frame_1="e:power2.inOut;st:1000;sp:1000;"
                                                    data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                                                    style="z-index:8;background-color:#292f29;font-family:&#x27;Inter&#x27;;text-transform:uppercase;">{!! $slide->heading !!}<br>

                                                </rs-layer>
                                                <h1 id="slider-1-slide-1-layer-1" class="rs-layer" data-type="text"
                                                    data-rsp_ch="on"
                                                    data-xy="xo:30px,30px,35px,35px;y:m;yo:40px,40px,40px,0;"
                                                    data-text="w:normal;s:90,90,80,48;l:100,100,90,50;fw:800;"
                                                    data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:90deg;oZ:-50;"
                                                    data-frame_1="st:1500;sp:500;"
                                                    data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;"
                                                    data-frame_999="o:0;st:w;"
                                                    style="z-index:7;font-family:&#x27;Inter&#x27;;">
                                                    {!! $slide->sub_heading !!}
                                                </h1>
                                                <rs-layer id="slider-1-slide-1-layer-2" data-type="image"
                                                    data-rsp_ch="on" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                    data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide"
                                                    data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;"
                                                    data-frame_1="e:power2.out;st:4500;sp:1200;"
                                                    data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                                                    style="z-index:6;"><img decoding="async"
                                                        src="{{ asset('assets/images/dummy.png') }}" alt
                                                        class="tp-rs-img rs-lazyload" width="1920" height="419"
                                                        data-c="fullwidth" data-no-retina>
                                                </rs-layer>
                                            </rs-slide>
                                        @endforeach
                                        {{-- <rs-slide style="position: absolute;" data-key="rs-6" data-title="Slide 2"
                                            data-anim="d:10;f:oppslidebased;"
                                            data-in="o:0;sx:1.1;sy:1.1;m:true;row:6;col:6;" data-out="a:false;">
                                            <img decoding="async" src="images/02.jpg" alt title="bg-revslider-home1-02"
                                                width="1920" height="770" class="rev-slidebg tp-rs-img rs-lazyload"
                                                data-lazyload="{{ asset('assets/images/02.jpg') }}"
                                                data-panzoom="d:6000ms;e:slow;ss:100%;se:105%;" data-no-retina>
                                            <rs-layer id="slider-1-slide-6-layer-0" data-type="text" data-rsp_ch="on"
                                                data-xy="xo:35px;yo:215px,215px,140px,120px;"
                                                data-text="w:normal;s:14;l:14;ls:1px;fw:600;"
                                                data-padding="t:15;r:30;b:15;l:30;" data-frame_0="y:100%;"
                                                data-frame_0_mask="u:t;" data-frame_1="e:power2.inOut;st:1000;sp:1000;"
                                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                                                style="z-index:8;background-color:#292f29;font-family:&#x27;Inter&#x27;;text-transform:uppercase;">Welcome
                                                to Rush<br>

                                            </rs-layer>
                                            <h1 id="slider-1-slide-6-layer-1" class="rs-layer" data-type="text"
                                                data-rsp_ch="on"
                                                data-xy="xo:30px,30px,35px,35px;y:m;yo:40px,40px,40px,0;"
                                                data-text="w:normal;s:90,90,80,60;l:100,100,90,70;fw:800;"
                                                data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:90deg;oZ:-50;"
                                                data-frame_1="st:1500;sp:500;"
                                                data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;"
                                                data-frame_999="o:0;st:w;"
                                                style="z-index:7;font-family:&#x27;Inter&#x27;;">
                                                Building Dreams,<br>
                                                Building Luxury
                                            </h1><rs-layer id="slider-1-slide-6-layer-2" data-type="image"
                                                data-rsp_ch="on" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide"
                                                data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;"
                                                data-frame_1="e:power2.out;st:4500;sp:1200;" data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;st:w;" style="z-index:6;"><img decoding="async"
                                                    src="{{ asset('assets/images/dummy.png') }}" alt
                                                    class="tp-rs-img rs-lazyload" width="1920" height="419"
                                                    data-c="fullwidth" data-no-retina>
                                            </rs-layer>
                                        </rs-slide>
                                        <rs-slide style="position: absolute;" data-key="rs-7" data-title="Slide 3"
                                            data-anim="d:10;f:oppslidebased;"
                                            data-in="o:0;sx:1.1;sy:1.1;m:true;row:6;col:6;" data-out="a:false;">
                                            <img decoding="async" src="{{ asset('assets/images/03.jpg') }}" alt
                                                title="bg-revslider-home1-03" width="1920" height="770"
                                                class="rev-slidebg tp-rs-img rs-lazyload"
                                                data-lazyload="{{ asset('assets/images/03.jpg') }}"
                                                data-panzoom="d:6000ms;e:slow;ss:100%;se:105%;" data-no-retina>
                                            <rs-layer id="slider-1-slide-7-layer-0" data-type="text" data-rsp_ch="on"
                                                data-xy="xo:35px;yo:215px,215px,140px,120px;"
                                                data-text="w:normal;s:14;l:14;ls:1px;fw:600;"
                                                data-padding="t:15;r:30;b:15;l:30;" data-frame_0="y:100%;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="e:power2.inOut;st:1000;sp:1000;"
                                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                                                style="z-index:8;background-color:#292f29;font-family:&#x27;Inter&#x27;;text-transform:uppercase;">Welcome
                                                to Rush<br>

                                            </rs-layer>
                                            <h1 id="slider-1-slide-7-layer-1" class="rs-layer" data-type="text"
                                                data-rsp_ch="on"
                                                data-xy="xo:30px,30px,35px,35px;y:m;yo:40px,40px,40px,0;"
                                                data-text="w:normal;s:90,90,80,60;l:100,100,90,70;fw:800;"
                                                data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:90deg;oZ:-50;"
                                                data-frame_1="st:1500;sp:500;"
                                                data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;"
                                                data-frame_999="o:0;st:w;"
                                                style="z-index:7;font-family:&#x27;Inter&#x27;;">
                                                A perfect place<br>
                                                to call" Home"
                                            </h1><rs-layer id="slider-1-slide-7-layer-2" data-type="image"
                                                data-rsp_ch="on" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide"
                                                data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;"
                                                data-frame_1="e:power2.out;st:4500;sp:1200;" data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;st:w;" style="z-index:6;"><img decoding="async"
                                                    src="{{ asset('assets/images/dummy.png') }}" alt
                                                    class="tp-rs-img rs-lazyload" width="1920" height="419"
                                                    data-c="fullwidth" data-no-retina>
                                            </rs-layer>
                                        </rs-slide> --}}
                                    </rs-slides>
                                </rs-module>
                                <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
                                <script>
                                    setREVStartSize({
                                        c: 'rev_slider_1_1',
                                        rl: [1240, 1024, 778, 480],
                                        el: [770, 770, 600, 600],
                                        gw: [1230, 1024, 778, 480],
                                        gh: [770, 770, 600, 600],
                                        type: 'standard',
                                        justify: '',
                                        layout: 'fullwidth',
                                        mh: "0"
                                    });
                                    if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                                            "revslider11"] !== undefined) {
                                        window.RS_MODULES.modules["revslider11"].once = false;
                                        window.revapi1 = undefined;
                                        if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                    }
                                </script>
                            </rs-module-wrap>
                            <!-- END REVOLUTION SLIDER -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
