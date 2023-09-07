<div data-elementor-type="wp-post" data-elementor-id="50" class="elementor elementor-50">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-6feebe3 elementor-section-full_width elementor-hidden-mobile elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
        data-id="6feebe3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-18b661d"
                data-id="18b661d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-86ec26d elementor-widget__width-auto elementor-widget elementor-widget-prooty_elementor_contact_info"
                        data-id="86ec26d" data-element_type="widget"
                        data-widget_type="prooty_elementor_contact_info.default">
                        <div class="elementor-widget-container">
                            <div class="ova-contact-info">

                                <div class="icon" style="color: #144174;">
                                    <i class="flaticon flaticon-phone"></i>
                                </div>

                                <div class="contact">


                                    <ul class="info">

                                        <a href="tel:{{ $general->telephone }}" title="telephone">
                                            <li class="item">
                                                +94
                                                {{ substr($general->telephone, 0, 2) . ' ' . substr($general->telephone, 2, 3) . ' ' . substr($general->telephone, 5) }}
                                            </li>
                                        </a>

                                    </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a50388a elementor-widget__width-auto elementor-widget elementor-widget-prooty_elementor_contact_info"
                        data-id="a50388a" data-element_type="widget"
                        data-widget_type="prooty_elementor_contact_info.default">
                        <div class="elementor-widget-container">
                            <div class="ova-contact-info">

                                <div class="icon" style="color: #144174;">
                                    <i class="flaticon flaticon-email"></i>
                                </div>

                                <div class="contact">


                                    <ul class="info">

                                        <li class="item">

                                            <a href="mailto:{{ $general->email }}" title="email" target="_blank">
                                                <span class="__cf_email__">{{ $general->email }}</span>
                                            </a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d7f02fe elementor-widget__width-auto elementor-widget elementor-widget-prooty_elementor_contact_info"
                        data-id="d7f02fe" data-element_type="widget"
                        data-widget_type="prooty_elementor_contact_info.default">
                        <div class="elementor-widget-container">
                            <div class="ova-contact-info">

                                <div class="icon" style="color: #144174;">
                                    <i class="fas fa-map-marker"></i>
                                </div>

                                <div class="contact">


                                    <ul class="info">

                                        <li class="item">

                                            <a href="https://www.google.com/maps/place/Rush+Lanka+Group/@6.8891696,79.8539802,16z/data=!4m7!3m6!1s0x3ae258f85555555d:0x48fe79802b5e28ac!8m2!3d6.8852198!4d79.8555187!15sCiszMSwgTWVsYm91cm5lIEF2ZW51ZSwgQ29sb21ibyA0LCBTcmkgTGFua2EukgESYXBhcnRtZW50X2J1aWxkaW5n4AEA!16s%2Fg%2F1pv2fj9nn?entry=tts&shorturl=1"
                                                target="_blank"
                                                title="{{ $general->address }}">{{ $general->address }}</a>
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-818cc99"
                data-id="818cc99" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-aafe003 elementor-widget__width-auto elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                        data-id="aafe003" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                    line-height: 1;
                                    font-size: 0
                                }

                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                    display: inline-grid
                                }

                                .elementor-widget-social-icons .elementor-grid {
                                    grid-column-gap: var(--grid-column-gap, 5px);
                                    grid-row-gap: var(--grid-row-gap, 5px);
                                    grid-template-columns: var(--grid-template-columns);
                                    justify-content: var(--justify-content, center);
                                    justify-items: var(--justify-content, center)
                                }

                                .elementor-icon.elementor-social-icon {
                                    font-size: var(--icon-size, 25px);
                                    line-height: var(--icon-size, 25px);
                                    width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                    height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                }

                                .elementor-social-icon {
                                    --e-social-icon-icon-color: #fff;
                                    display: inline-flex;
                                    background-color: #69727d;
                                    align-items: center;
                                    justify-content: center;
                                    text-align: center;
                                    cursor: pointer
                                }

                                .elementor-social-icon i {
                                    color: var(--e-social-icon-icon-color)
                                }

                                .elementor-social-icon svg {
                                    fill: var(--e-social-icon-icon-color)
                                }

                                .elementor-social-icon:last-child {
                                    margin: 0
                                }

                                .elementor-social-icon:hover {
                                    opacity: .9;
                                    color: #fff
                                }

                                .elementor-social-icon-android {
                                    background-color: #a4c639
                                }

                                .elementor-social-icon-apple {
                                    background-color: #999
                                }

                                .elementor-social-icon-behance {
                                    background-color: #1769ff
                                }

                                .elementor-social-icon-bitbucket {
                                    background-color: #205081
                                }

                                .elementor-social-icon-codepen {
                                    background-color: #000
                                }

                                .elementor-social-icon-delicious {
                                    background-color: #39f
                                }

                                .elementor-social-icon-deviantart {
                                    background-color: #05cc47
                                }

                                .elementor-social-icon-digg {
                                    background-color: #005be2
                                }

                                .elementor-social-icon-dribbble {
                                    background-color: #ea4c89
                                }

                                .elementor-social-icon-elementor {
                                    background-color: #d30c5c
                                }

                                .elementor-social-icon-envelope {
                                    background-color: #ea4335
                                }

                                .elementor-social-icon-facebook,
                                .elementor-social-icon-facebook-f {
                                    background-color: #3b5998
                                }

                                .elementor-social-icon-flickr {
                                    background-color: #0063dc
                                }

                                .elementor-social-icon-foursquare {
                                    background-color: #2d5be3
                                }

                                .elementor-social-icon-free-code-camp,
                                .elementor-social-icon-freecodecamp {
                                    background-color: #006400
                                }

                                .elementor-social-icon-github {
                                    background-color: #333
                                }

                                .elementor-social-icon-gitlab {
                                    background-color: #e24329
                                }

                                .elementor-social-icon-globe {
                                    background-color: #69727d
                                }

                                .elementor-social-icon-google-plus,
                                .elementor-social-icon-google-plus-g {
                                    background-color: #dd4b39
                                }

                                .elementor-social-icon-houzz {
                                    background-color: #7ac142
                                }

                                .elementor-social-icon-instagram {
                                    background-color: #262626
                                }

                                .elementor-social-icon-jsfiddle {
                                    background-color: #487aa2
                                }

                                .elementor-social-icon-link {
                                    background-color: #818a91
                                }

                                .elementor-social-icon-linkedin,
                                .elementor-social-icon-linkedin-in {
                                    background-color: #0077b5
                                }

                                .elementor-social-icon-medium {
                                    background-color: #00ab6b
                                }

                                .elementor-social-icon-meetup {
                                    background-color: #ec1c40
                                }

                                .elementor-social-icon-mixcloud {
                                    background-color: #273a4b
                                }

                                .elementor-social-icon-odnoklassniki {
                                    background-color: #f4731c
                                }

                                .elementor-social-icon-pinterest {
                                    background-color: #bd081c
                                }

                                .elementor-social-icon-product-hunt {
                                    background-color: #da552f
                                }

                                .elementor-social-icon-reddit {
                                    background-color: #ff4500
                                }

                                .elementor-social-icon-rss {
                                    background-color: #f26522
                                }

                                .elementor-social-icon-shopping-cart {
                                    background-color: #4caf50
                                }

                                .elementor-social-icon-skype {
                                    background-color: #00aff0
                                }

                                .elementor-social-icon-slideshare {
                                    background-color: #0077b5
                                }

                                .elementor-social-icon-snapchat {
                                    background-color: #fffc00
                                }

                                .elementor-social-icon-soundcloud {
                                    background-color: #f80
                                }

                                .elementor-social-icon-spotify {
                                    background-color: #2ebd59
                                }

                                .elementor-social-icon-stack-overflow {
                                    background-color: #fe7a15
                                }

                                .elementor-social-icon-steam {
                                    background-color: #00adee
                                }

                                .elementor-social-icon-stumbleupon {
                                    background-color: #eb4924
                                }

                                .elementor-social-icon-telegram {
                                    background-color: #2ca5e0
                                }

                                .elementor-social-icon-thumb-tack {
                                    background-color: #1aa1d8
                                }

                                .elementor-social-icon-tripadvisor {
                                    background-color: #589442
                                }

                                .elementor-social-icon-tumblr {
                                    background-color: #35465c
                                }

                                .elementor-social-icon-twitch {
                                    background-color: #6441a5
                                }

                                .elementor-social-icon-twitter {
                                    background-color: #1da1f2
                                }

                                .elementor-social-icon-viber {
                                    background-color: #665cac
                                }

                                .elementor-social-icon-vimeo {
                                    background-color: #1ab7ea
                                }

                                .elementor-social-icon-vk {
                                    background-color: #45668e
                                }

                                .elementor-social-icon-weibo {
                                    background-color: #dd2430
                                }

                                .elementor-social-icon-weixin {
                                    background-color: #31a918
                                }

                                .elementor-social-icon-whatsapp {
                                    background-color: #25d366
                                }

                                .elementor-social-icon-wordpress {
                                    background-color: #21759b
                                }

                                .elementor-social-icon-xing {
                                    background-color: #026466
                                }

                                .elementor-social-icon-yelp {
                                    background-color: #af0606
                                }

                                .elementor-social-icon-youtube {
                                    background-color: #cd201f
                                }

                                .elementor-social-icon-500px {
                                    background-color: #0099e5
                                }

                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                    border-radius: 10%
                                }

                                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                    border-radius: 50%
                                }
                            </style>
                            <div class="elementor-social-icons-wrapper elementor-grid">
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-pulse elementor-repeater-item-32dc318"
                                        href="{{ $general->fb_link }}" target="_blank">
                                        <span class="elementor-screen-only">Facebook-square</span>
                                        <i class="fab fa-facebook-square"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-p elementor-animation-pulse elementor-repeater-item-50c5b00"
                                        href="{{ $general->linkedin_link }}" target="_blank">
                                        <span class="elementor-screen-only">Linked-In</span>
                                        <i class="fab fa-linkedin"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-pulse elementor-repeater-item-18cf6e9"
                                        href="{{ $general->ig_link }}" target="_blank">
                                        <span class="elementor-screen-only">Instagram</span>
                                        <i class="fab fa-instagram"></i> </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3c3ed52 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                        data-id="3c3ed52" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                    background-color: #69727d;
                                    color: #fff
                                }

                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                    color: #69727d;
                                    border: 3px solid;
                                    background-color: transparent
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                    margin-top: 8px
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                    width: 1em;
                                    height: 1em
                                }

                                .elementor-widget-text-editor .elementor-drop-cap {
                                    float: left;
                                    text-align: center;
                                    line-height: 1;
                                    font-size: 50px
                                }

                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                    display: inline-block
                                }
                            </style>
                            <p>
                                <a href="{{ route('contact') }}">Contact</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-79e2341 elementor-section-full_width header_sticky mobile_sticky elementor-section-height-default elementor-section-height-default"
        data-id="79e2341" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ca40690"
                data-id="ca40690" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-21d981b elementor-widget__width-auto elementor-widget elementor-widget-ova_logo"
                        data-id="21d981b" data-element_type="widget" data-widget_type="ova_logo.default">
                        <div class="elementor-widget-container">

                            <div class="brand_el">

                                <a href="{{ route('home') }}">

                                    <img src="{{ asset('assets/images/logo.png') }}" alt="Rush Holdings Group logo"
                                        class="logo_desktop" style="width:auto ; height:56px; margin-left:20px;">

                                    <img src="{{ asset('assets/images/logo.png') }}" alt="Rush Holdings Group logo"
                                        class="logo_mobile" style="width:auto ;  height:56px; margin-left:20px;">

                                    <img src="{{ asset('assets/images/logo.png') }}" alt="Rush Holdings Group logo"
                                        class="logo_sticky" style="width:auto ; height:56px; margin-left:20px;">

                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0f531d8"
                data-id="0f531d8" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-d22a9a0 elementor-widget__width-auto elementor-view-primary-menu elementor-hidden-tablet elementor-hidden-mobile ova-menu-custom-line elementor-widget elementor-widget-prooty_elementor_menu_nav"
                        data-id="d22a9a0" data-element_type="widget"
                        data-widget_type="prooty_elementor_menu_nav.default">
                        <div class="elementor-widget-container">

                            <nav class="main-navigation">
                                <button class="menu-toggle">
                                    <span>
                                        Menu </span>
                                </button>
                                <div class="primary-navigation">
                                    <ul id="menu-primary-menu" class="menu">

                                        <li id="menu-item-35 "
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35 {{ Route::is('home') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li id="menu-item-4502"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4502 {{ Route::is('ongoing.apartment') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('ongoing.apartment') }}">Ongoing Projects</a>
                                            <ul class="sub-menu">
                                                @php
                                                    $apartment_nav = App\Models\Project::where('type', 'ongoing')->get();
                                                @endphp
                                                @foreach ($apartment_nav as $item)
                                                    <li id="menu-item-4503"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503">
                                                        <a
                                                            href="{{ route('apartment.inner', ['slug' => $item->slug]) }}">{{ $item->heading }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li id="menu-item-4502"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4502 {{ Route::is('completed.apartment') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('completed.apartment') }}">Completed Projects</a>
                                            <ul class="sub-menu" style="display: flex; flex-direction: row;">
                                                <ul class="list">
                                                    @php
                                                        $apartment_nav = App\Models\Project::where('type', 'completed')
                                                            ->orderBy('order_by')
                                                            ->get();
                                                        $totalProjects = count($apartment_nav);
                                                        $projectsPerList = ceil($totalProjects / 2);
                                                    @endphp
                                                    @foreach ($apartment_nav as $index => $item)
                                                        @if ($index < $projectsPerList)
                                                            <li id="menu-item-4503"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503">
                                                                <a
                                                                    href="{{ route('apartment.inner', ['slug' => $item->slug]) }}">{{ $item->heading }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class="list">
                                                    @foreach ($apartment_nav as $index => $item)
                                                        @if ($index >= $projectsPerList)
                                                            <li id="menu-item-4503"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503">
                                                                <a
                                                                    href="{{ route('apartment.inner', ['slug' => $item->slug]) }}">{{ $item->heading }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </ul>
                                        </li>

                                        <li id="menu-item-35"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35 {{ Route::is('about') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about') }}">About us</a>
                                        </li>


                                        <li id="menu-item-46"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46 {{ Route::is('news') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('news') }}">News</a>
                                        </li>
                                        <li id="menu-item-46"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46 {{ Route::is('contact') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>


                        </div>
                    </div>

                    <div class="elementor-element elementor-element-b3339d3 elementor-view-primary-menu elementor-widget__width-auto elementor-hidden-desktop elementor-widget elementor-widget-prooty_elementor_menu_canvas"
                        data-id="b3339d3" data-element_type="widget"
                        data-widget_type="prooty_elementor_menu_canvas.default">
                        <div class="elementor-widget-container">

                            <nav class="menu-canvas">
                                <button class="menu-toggle">
                                    <span></span>
                                </button>
                                <nav class="container-menu dir_left">
                                    <div class="close-menu">
                                        <i class="ovaicon-cancel"></i>
                                    </div>
                                    <div class="primary-navigation">
                                        <ul id="menu-primary-menu-1" class="menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>

                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
                                                <a href="{{ route('ongoing.apartment') }}">Ongoing Projects</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
                                                <a href="{{ route('completed.apartment') }}">Completed Projects</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
                                                <a href="{{ route('about') }}">About us</a>
                                            </li>


                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46">
                                                <a href="{{ route('news') }}">News</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46">
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46">
                                                <a href="{{ route('schedule.vist') }}">Schedule a visit</a>
                                            </li>

                                        </ul>
                                    </div>
                                </nav>
                                <div class="site-overlay"></div>
                            </nav>


                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1a162a0 elementor-hidden-tablet elementor-hidden-mobile"
                data-id="1a162a0" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7eafef1 elementor-widget elementor-widget-button"
                        data-id="7eafef1" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                    href="{{ route('schedule.vist') }}">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                            <i aria-hidden="true" class="flaticon flaticon-calendar"></i>
                                        </span>
                                        <span class="elementor-button-text">Schedule a visit</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
