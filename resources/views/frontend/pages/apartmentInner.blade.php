@extends('layouts.master')
@push('style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style id="elementor-post-172">
        .elementor-172 .elementor-element.elementor-element-6feebe3 {
            padding: 0px 30px 0px 30px;
        }

        .elementor-bc-flex-widget .elementor-172 .elementor-element.elementor-element-18b661d.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-18b661d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-86ec26d .ova-contact-info .contact .info .item,
        .elementor-172 .elementor-element.elementor-element-86ec26d .ova-contact-info .contact .info .item a {
            font-size: 14px;
        }

        .elementor-172 .elementor-element.elementor-element-86ec26d>.elementor-widget-container {
            margin: 0px 20px 0px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-86ec26d {
            width: auto;
            max-width: auto;
        }

        .elementor-172 .elementor-element.elementor-element-a50388a .ova-contact-info .contact .info .item,
        .elementor-172 .elementor-element.elementor-element-a50388a .ova-contact-info .contact .info .item a {
            font-size: 14px;
        }

        .elementor-172 .elementor-element.elementor-element-a50388a>.elementor-widget-container {
            margin: 0px 20px 0px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-a50388a {
            width: auto;
            max-width: auto;
        }

        .elementor-172 .elementor-element.elementor-element-d7f02fe .ova-contact-info .contact .info .item,
        .elementor-172 .elementor-element.elementor-element-d7f02fe .ova-contact-info .contact .info .item a {
            font-size: 14px;
        }

        .elementor-172 .elementor-element.elementor-element-d7f02fe {
            width: auto;
            max-width: auto;
        }

        .elementor-bc-flex-widget .elementor-172 .elementor-element.elementor-element-818cc99.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-818cc99.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-818cc99.elementor-column>.elementor-widget-wrap {
            justify-content: flex-end;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 {
            --grid-template-columns: repeat(0, auto);
            --icon-size: 14px;
            --grid-column-gap: 10px;
            width: auto;
            max-width: auto;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-widget-container {
            text-align: center;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-social-icon {
            background-color: #F6F6F6;
            --icon-padding: 0.6em;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-social-icon i {
            color: #292F29;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-social-icon svg {
            fill: #292F29;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-icon {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-social-icon:hover {
            background-color: #C39E76;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-social-icon:hover i {
            color: #FFFFFF;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-social-icon:hover svg {
            fill: #FFFFFF;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003 .elementor-icon.elementor-social-icon {
            display: inline-flex;
        }

        .elementor-172 .elementor-element.elementor-element-aafe003>.elementor-widget-container {
            margin: 0px 35px 0px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-3c3ed52 {
            font-size: 14px;
            width: auto;
            max-width: auto;
        }

        .elementor-172 .elementor-element.elementor-element-3c3ed52 p a {
            color: #7C7C7C;
        }

        .elementor-172 .elementor-element.elementor-element-3c3ed52 p a:hover {
            color: #C39E76;
        }

        .elementor-172 .elementor-element.elementor-element-3c3ed52 p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-79e2341:not(.elementor-motion-effects-element-type-background),
        .elementor-172 .elementor-element.elementor-element-79e2341>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F6F6F6;
        }

        .elementor-172 .elementor-element.elementor-element-79e2341 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-172 .elementor-element.elementor-element-79e2341>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-172 .elementor-element.elementor-element-ca40690.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-ca40690.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-ca40690>.elementor-element-populated {
            padding: 0px 0px 0px 30px;
        }

        .elementor-172 .elementor-element.elementor-element-21d981b {
            width: auto;
            max-width: auto;
        }

        .elementor-bc-flex-widget .elementor-172 .elementor-element.elementor-element-0f531d8.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-0f531d8.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-0f531d8.elementor-column>.elementor-widget-wrap {
            justify-content: space-between;
        }

        .elementor-172 .elementor-element.elementor-element-0f531d8>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-172 .elementor-element.elementor-element-0f531d8>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-172 .elementor-element.elementor-element-d22a9a0 ul {
            padding: 0px 0px 0px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-d22a9a0 ul.menu>li {
            padding: 0px 20px 0px 20px;
        }

        .elementor-172 .elementor-element.elementor-element-d22a9a0 ul li a {
            padding: 31px 0px 31px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-d22a9a0 ul.menu>li.current-menu-item>a {
            color: #292F29;
        }

        .elementor-172 .elementor-element.elementor-element-d22a9a0 {
            width: auto;
            max-width: auto;
        }

        .elementor-172 .elementor-element.elementor-element-6c4afa7>.elementor-widget-container {
            padding: 0px 25px 0px 20px;
            border-style: solid;
            border-width: 0px 0px 0px 1px;
            border-color: #E4E4E4;
        }

        .elementor-172 .elementor-element.elementor-element-6c4afa7 {
            width: auto;
            max-width: auto;
        }

        .elementor-172 .elementor-element.elementor-element-b3339d3 .menu-toggle:before {
            background-color: #292F29;
        }

        .elementor-172 .elementor-element.elementor-element-b3339d3 .menu-toggle span:before {
            background-color: #292F29;
        }

        .elementor-172 .elementor-element.elementor-element-b3339d3 .menu-toggle:after {
            background-color: #292F29;
        }

        .elementor-172 .elementor-element.elementor-element-b3339d3>.elementor-widget-container {
            margin: 0px 20px 0px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-b3339d3 {
            width: auto;
            max-width: auto;
        }

        .elementor-bc-flex-widget .elementor-172 .elementor-element.elementor-element-1a162a0.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-1a162a0.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-172 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper {
            display: flex;
        }

        .elementor-172 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button {
            width: 100%;
        }

        .elementor-172 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button .elementor-button-icon i {
            font-size: 22px;
        }

        .elementor-172 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button .elementor-button-icon {
            background-color: #292F29;
            padding: 13px 13px 13px 13px;
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-172 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button:hover .elementor-button-icon {
            background-color: #C39E76;
        }

        .elementor-172 .elementor-element.elementor-element-7eafef1 .elementor-button {
            font-size: 16px;
            line-height: 1.2em;
            padding: 22px 38px 22px 38px;
        }

        .elementor-172 .elementor-element.elementor-element-945568f {
            margin-top: 0px;
            margin-bottom: 110px;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .cover_color {
            background-color: #212621B5;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el .header_title {
            color: #fff;
            padding: 0px 0px 140px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el ul.breadcrumb li {
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el ul.breadcrumb li a {
            color: #fff;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el ul.breadcrumb a {
            color: #fff;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el ul.breadcrumb li .separator i {
            color: #fff;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el ul.breadcrumb li a:hover {
            color: #C39E76;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el .header_breadcrumbs {
            padding: 150px 0px 15px 0px;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26 {
            text-align: center;
        }

        .elementor-172 .elementor-element.elementor-element-658fd26>.elementor-widget-container {
            background-image: url("{{ asset('storage/' . $project->breadcrumb_image) }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media(min-width:768px) {
            .elementor-172 .elementor-element.elementor-element-18b661d {
                width: 60%;
            }

            .elementor-172 .elementor-element.elementor-element-818cc99 {
                width: 40%;
            }

            .elementor-172 .elementor-element.elementor-element-ca40690 {
                width: 18.5%;
            }

            .elementor-172 .elementor-element.elementor-element-0f531d8 {
                width: 65.5%;
            }

            .elementor-172 .elementor-element.elementor-element-1a162a0 {
                width: 16%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-172 .elementor-element.elementor-element-18b661d {
                width: 100%;
            }

            .elementor-172 .elementor-element.elementor-element-818cc99 {
                width: 100%;
            }

            .elementor-172 .elementor-element.elementor-element-ca40690 {
                width: 25%;
            }

            .elementor-172 .elementor-element.elementor-element-0f531d8 {
                width: 75%;
            }

            .elementor-172 .elementor-element.elementor-element-1a162a0 {
                width: 100%;
            }
        }

        @media(max-width:1024px) {
            .elementor-172 .elementor-element.elementor-element-6feebe3 {
                padding: 0px 20px 0px 20px;
            }

            .elementor-172 .elementor-element.elementor-element-ca40690>.elementor-element-populated {
                padding: 0px 0px 0px 20px;
            }

            .elementor-172 .elementor-element.elementor-element-0f531d8.elementor-column>.elementor-widget-wrap {
                justify-content: flex-end;
            }

            .elementor-172 .elementor-element.elementor-element-0f531d8>.elementor-element-populated {
                padding: 20px 0px 20px 0px;
            }

            .elementor-172 .elementor-element.elementor-element-945568f {
                margin-top: 0px;
                margin-bottom: 80px;
            }

            .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el .header_title {
                padding: 0px 0px 90px 0px;
            }

            .elementor-172 .elementor-element.elementor-element-658fd26 .header_banner_el .header_breadcrumbs {
                padding: 90px 0px 15px 0px;
            }
        }

        @media(max-width:767px) {
            .elementor-172 .elementor-element.elementor-element-ca40690 {
                width: 50%;
            }

            .elementor-172 .elementor-element.elementor-element-ca40690>.elementor-element-populated {
                padding: 0px 0px 0px 10px;
            }

            .elementor-172 .elementor-element.elementor-element-0f531d8 {
                width: 50%;
            }

            .elementor-172 .elementor-element.elementor-element-6c4afa7>.elementor-widget-container {
                border-width: 0px 0px 0px 0px;
            }
        }
    </style>
@endpush
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="172" class="elementor elementor-172">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-945568f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="945568f" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cd08dce"
                    data-id="cd08dce" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-658fd26 elementor-widget elementor-widget-prooty_elementor_header_banner"
                            data-id="658fd26" data-element_type="widget"
                            data-widget_type="prooty_elementor_header_banner.default">
                            <div class="elementor-widget-container">
                                <!-- Display when you choose background per Post -->
                                <div class="wrap_header_banner  center ">


                                    <div class="cover_color"></div>

                                    <div class="header_banner_el ">

                                        <div class="header_breadcrumbs">
                                            <div id="breadcrumbs">
                                                <ul class="breadcrumb">
                                                    <li><a href="{{ route('home') }}" title="Home">Home</a>
                                                    </li>
                                                    <li class="li_separator"><span class="separator"><i
                                                                class="ovaicon-next"></i></span></li>
                                                    <li><a href="javascript:void(0)">Apartment</a>
                                                    </li>
                                                    <li class="li_separator"><span class="separator"><i
                                                                class="ovaicon-next"></i></span></li>
                                                    <li>{{ $project->slug }}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h1 class=" header_title">
                                            {{ $project->heading }}</h1>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row_site">
        <div class="container_site">

            <article class="ova_apartment_single" id="apartment-post-4426">

                <div class="apartment-info ">

                    <div class="apartment-post-media">

                        <div id="carousel4426gallery" class="owl-carousel slide_gallery owl-loaded owl-drag" data-items="1"
                            data-loop="false" data-dots="true" data-nav="false" data-autoplay="true"
                            data-autoplaytimeout="5000" data-autoplayspeed="500" data-stoponhover="true">

                            <!-- Featured Image -->





                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1872px, 0px, 0px); transition: all 0s ease 0s; width: 2808px;">
                                    @foreach ($project->gallery as $key => $item)
                                        <div class="owl-item {{ $key = 0 ? 'active' : '' }}" style="width: 936px;">
                                            <div class="carousel-item">
                                                <img width="768" height="574" src="{{ asset('storage/' . $item) }}"
                                                    class="attachment-prooty_thumbnail size-prooty_thumbnail" alt=""
                                                    decoding="async" loading="lazy">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                    class="owl-next"><span aria-label="Next">›</span></button></div>

                        </div>

                    </div>


                    <ul class="info-list">


                        {{-- <li class="item item-0">

                            <span class="value">
                                {{ $project->sqft }} <sup>ft2</sup>
                            </span>

                            <span class="label">
                                Square Area
                            </span>


                        </li> --}}

                        <li class="item item-2">

                            <span class="value">
                                {{ $project->bedrooms }} </span>

                            <span class="label">
                                Number of Bedrooms

                            </span>


                        </li>


                        <li class="item item-3">

                            <span class="value">
                                {{ $project->bathrooms }} </span>

                            <span class="label">
                                Number of Bathrooms

                            </span>


                        </li>


                        <li class="item item-4">

                            <span class="value">
                                {{ $project->parkings }} </span>

                            <span class="label">
                                Car parkings
                            </span>


                        </li>

                    </ul>



                </div>

                <h2 class="apartment-title">{{ $project->heading }}</h2>
                <div class="main-content">

                    <div data-elementor-type="wp-post" data-elementor-id="4428" class="elementor elementor-4428">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-99f17ef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="99f17ef" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d310b50"
                                    data-id="d310b50" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3d4167b elementor-widget elementor-widget-text-editor"
                                            data-id="3d4167b" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>{{ $project->description }}</p>

                                                <div style="margin-top: 30px;"
                                                    class="elementor-element elementor-element-cdb7322 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                    data-id="cdb7322" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container"
                                                        style="display: flex;
                                                    flex-direction: row;
                                                    flex-wrap: wrap;
                                                    gap: 10px;">
                                                        @if ($project_document)
                                                            <div class="elementor-button-wrapper">
                                                                @if ($project_document->e_brochure)
                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                        href="{{ asset('storage/' . $project_document->e_brochure) }}"
                                                                        target="_blank">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span
                                                                                class="elementor-button-text">E-Brochure</span>
                                                                        </span>
                                                                    </a>
                                                                @endif
                                                                @if ($project_document->coc)
                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                        href="{{ asset('storage/' . $project_document->coc) }}"
                                                                        target="_blank">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-text">COC &
                                                                                CMA</span>
                                                                        </span>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5e62609 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="5e62609" data-element_type="section" style="margin: 100px 0 100px 0;">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-935bcb2"
                                    data-id="935bcb2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cb7c4e0 elementor-widget elementor-widget-prooty_elementor_heading"
                                            data-id="cb7c4e0" data-element_type="widget"
                                            data-settings="{&quot;invert_background_image_color&quot;:&quot;no&quot;}"
                                            data-widget_type="prooty_elementor_heading.default">
                                            <div class="elementor-widget-container">

                                                <div class="ova-heading">

                                                    <div class="top-heading ">

                                                        <div class="sub-title-wrapper">
                                                            <h3 class="sub-title"> What about apartment</h3>
                                                        </div>



                                                        <h2 class="title"> {{ $project->heading }}</h2>



                                                    </div>

                                                    <p class="description">{{ $project->about_description }}</p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9f08af8"
                                    data-id="9f08af8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4cdcbc3 elementor-widget elementor-widget-image"
                                            data-id="4cdcbc3" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="600" height="450"
                                                    src="{{ asset('storage/' . $project->about_image) }}"
                                                    sizes="(max-width: 600px) 100vw, 600px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9f65b7d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            id="virtual-tour" data-id="9f65b7d" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                            style="width: 1399px; left: 0px;">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-837fd2a"
                                    data-id="837fd2a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2f1d7b6 elementor-tabs-alignment-end elementor-tabs-view-horizontal elementor-widget elementor-widget-tabs"
                                            data-id="2f1d7b6" data-element_type="widget" data-widget_type="tabs.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.14.0 - 26-06-2023 */
                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                                        width: 25%;
                                                        flex-shrink: 0
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active {
                                                        border-right-style: none
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after,
                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                                        height: 999em;
                                                        width: 0;
                                                        right: 0;
                                                        border-right-style: solid
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                                        top: 0;
                                                        transform: translateY(-100%)
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after {
                                                        top: 100%
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title {
                                                        display: table-cell
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active {
                                                        border-bottom-style: none
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,
                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                                        bottom: 0;
                                                        height: 0;
                                                        width: 999em;
                                                        border-bottom-style: solid
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                                        right: 100%
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after {
                                                        left: 100%
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-content,
                                                    .elementor-widget-tabs .elementor-tab-title,
                                                    .elementor-widget-tabs .elementor-tab-title:after,
                                                    .elementor-widget-tabs .elementor-tab-title:before,
                                                    .elementor-widget-tabs .elementor-tabs-content-wrapper {
                                                        border: 1px #d5d8dc
                                                    }

                                                    .elementor-widget-tabs .elementor-tabs {
                                                        text-align: left
                                                    }

                                                    .elementor-widget-tabs .elementor-tabs-wrapper {
                                                        overflow: hidden
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-title {
                                                        cursor: pointer;
                                                        outline: var(--focus-outline, none)
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title {
                                                        position: relative;
                                                        padding: 20px 25px;
                                                        font-weight: 700;
                                                        line-height: 1;
                                                        border: solid transparent
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active {
                                                        border-color: #d5d8dc
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:after,
                                                    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:before {
                                                        display: block;
                                                        content: "";
                                                        position: absolute
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title:focus-visible {
                                                        border: 1px solid #000
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-mobile-title {
                                                        padding: 10px;
                                                        cursor: pointer
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-content {
                                                        padding: 20px;
                                                        display: none
                                                    }

                                                    @media (max-width:767px) {

                                                        .elementor-tabs .elementor-tab-content,
                                                        .elementor-tabs .elementor-tab-title {
                                                            border-style: solid solid none
                                                        }

                                                        .elementor-tabs .elementor-tabs-wrapper {
                                                            display: none
                                                        }

                                                        .elementor-tabs .elementor-tabs-content-wrapper {
                                                            border-bottom-style: solid
                                                        }

                                                        .elementor-tabs .elementor-tab-content {
                                                            padding: 10px
                                                        }
                                                    }

                                                    @media (min-width:768px) {
                                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs {
                                                            display: flex
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                                            flex-direction: column
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-content-wrapper {
                                                            flex-grow: 1;
                                                            border-style: solid solid solid none
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-content {
                                                            border-style: none solid solid
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper,
                                                        .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper,
                                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch .elementor-tabs-wrapper {
                                                            display: flex
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper {
                                                            justify-content: center
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper {
                                                            justify-content: flex-end
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-horizontal .elementor-tab-title {
                                                            width: 100%
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-vertical .elementor-tab-title {
                                                            height: 100%
                                                        }

                                                        .elementor-tabs .elementor-tab-mobile-title {
                                                            display: none
                                                        }


                                                    }
                                                </style>
                                                <div class="elementor-tabs">
                                                    <div class="elementor-tabs-wrapper" role="tablist">
                                                        @if (!empty($blocks))
                                                            <div id="elementor-tab-title-4941"
                                                                class="elementor-tab-title elementor-active"
                                                                aria-selected="true" data-tab="1" role="tab"
                                                                tabindex="0" aria-controls="elementor-tab-content-4941"
                                                                aria-expanded="true">
                                                                Residencies</div>
                                                        @endif
                                                        <div id="elementor-tab-title-4942 {{ !empty($blocks) ? '' : 'elementor-active' }}"
                                                            class="elementor-tab-title" aria-selected="false"
                                                            data-tab="2" role="tab" tabindex="-1"
                                                            aria-controls="elementor-tab-content-4942"
                                                            aria-expanded="false">
                                                            Project Overview</div>
                                                        <div id="elementor-tab-title-4943" class="elementor-tab-title"
                                                            aria-selected="false" data-tab="3" role="tab"
                                                            tabindex="-1" aria-controls="elementor-tab-content-4943"
                                                            aria-expanded="false">
                                                            Virtual Tour</div>
                                                    </div>
                                                    <div class="elementor-tabs-content-wrapper" role="tablist"
                                                        aria-orientation="vertical">
                                                        <div class="elementor-tab-title elementor-tab-mobile-title elementor-active"
                                                            aria-selected="true" data-tab="1" role="tab"
                                                            tabindex="0" aria-controls="elementor-tab-content-4941"
                                                            aria-expanded="true">
                                                            Residencies</div>
                                                        <div id="elementor-tab-content-4941"
                                                            class="elementor-tab-content elementor-clearfix elementor-active"
                                                            data-tab="1" role="tabpanel"
                                                            aria-labelledby="elementor-tab-title-4941" tabindex="0"
                                                            style="display: block; border: none; margin-top: 20px; padding: 0;">
                                                            <section
                                                                class="elementor-section elementor-top-section elementor-element elementor-element-9aa2f94 animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default animated ova-move-up"
                                                                data-id="9aa2f94" data-element_type="section"
                                                                data-settings="{&quot;animation&quot;:&quot;ova-move-up&quot;,&quot;animation_tablet&quot;:&quot;none&quot;}">
                                                                <div class="elementor-container elementor-column-gap-no"
                                                                    style="justify-content: space-between; margin-top: 40px;">
                                                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-508e567"
                                                                        data-id="508e567" data-element_type="column"
                                                                        style="width: 100%;">
                                                                        <div
                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                            <div class="elementor-element elementor-element-508e567 elementor-widget elementor-widget-prooty_elementor_ova_icon_list"
                                                                                data-id="508e567"
                                                                                data-element_type="widget"
                                                                                data-widget_type="prooty_elementor_ova_icon_list.default">
                                                                                <div class="elementor-widget-container">

                                                                                    <div class="ova-icon-list ova-icon-list-template2 one_column"
                                                                                        style="overflow: auto;">
                                                                                        @if (!empty($blocks))
                                                                                            @foreach ($blocks->block as $item)
                                                                                                <div class="item"
                                                                                                    style="border-bottom: 1px solid; gap: 56px; ">
                                                                                                    <h3 class="title">
                                                                                                        {{ $item['block_name'] }}
                                                                                                    </h3>

                                                                                                    @if ($item['rooms'])
                                                                                                        <p class="text">
                                                                                                            {{ $item['rooms'] }}
                                                                                                            Bedrooms
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    @if ($item['bathrooms'])
                                                                                                        <p class="text">
                                                                                                            {{ $item['bathrooms'] }}
                                                                                                            Bathrooms
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    @if ($item['sqft'])
                                                                                                        <p class="text">
                                                                                                            {{ $item['sqft'] }}
                                                                                                            Sqft
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    @if ($item['image'])
                                                                                                        <div class="owl-item active"
                                                                                                            style="width: 219px; margin-right: 20px;">
                                                                                                            <div
                                                                                                                class="gallery-box ">

                                                                                                                <div
                                                                                                                    class="list-gallery">

                                                                                                                    <div
                                                                                                                        class="icon-box">
                                                                                                                        <a data-fancybox="apartment-gallery-slide"
                                                                                                                            data-src="{{ asset('storage/' . $item['image']) }}"
                                                                                                                            data-caption="{{ $item['block_name'] }}"
                                                                                                                            aria-hidden="true"
                                                                                                                            class="text"
                                                                                                                            style="cursor: pointer">
                                                                                                                            View
                                                                                                                        </a>
                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="owl-item active"
                                                                                                            style="width: 219px; margin-right: 20px;">
                                                                                                            <div
                                                                                                                class="gallery-box ">

                                                                                                                <div
                                                                                                                    class="list-gallery">

                                                                                                                    <div
                                                                                                                        class="icon-box">
                                                                                                                        <a aria-hidden="true"
                                                                                                                            class="text"
                                                                                                                            style="color: gray !important">
                                                                                                                            View
                                                                                                                        </a>
                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </section>
                                                        </div>
                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                            aria-selected="false" data-tab="2" role="tab"
                                                            tabindex="-1" aria-controls="elementor-tab-content-4942"
                                                            aria-expanded="false">
                                                            Project Overview</div>
                                                        <div id="elementor-tab-content-4942 {{ !empty($blocks) ? '' : 'elementor-active' }}"
                                                            class="elementor-tab-content elementor-clearfix {{ !empty($blocks) ? '' : 'elementor-active' }}"
                                                            data-tab="2" role="tabpanel"
                                                            aria-labelledby="elementor-tab-title-4942" tabindex="0"
                                                            style=" border: none; padding: 0; {{ !empty($blocks) ? '' : 'display: block;' }}"
                                                            hidden="hidden">
                                                            <style id="elementor-post-4848">
                                                                .elementor-bc-flex-widget .elementor-4848 .elementor-element.elementor-element-a449317.elementor-column .elementor-widget-wrap {
                                                                    align-items: center;
                                                                }

                                                                .elementor-4848 .elementor-element.elementor-element-a449317.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                                                                    align-content: center;
                                                                    align-items: center;
                                                                }

                                                                .elementor-4848 .elementor-element.elementor-element-a449317>.elementor-element-populated {
                                                                    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                                                                    margin: 0px 20px 0px 20px;
                                                                    --e-column-margin-right: 20px;
                                                                    --e-column-margin-left: 20px;
                                                                }

                                                                .elementor-4848 .elementor-element.elementor-element-a449317>.elementor-element-populated>.elementor-background-overlay {
                                                                    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                                                                }

                                                                .elementor-bc-flex-widget .elementor-4848 .elementor-element.elementor-element-00f1a99.elementor-column .elementor-widget-wrap {
                                                                    align-items: center;
                                                                }

                                                                .elementor-4848 .elementor-element.elementor-element-00f1a99.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                                                                    align-content: center;
                                                                    align-items: center;
                                                                }

                                                                .elementor-4848 .elementor-element.elementor-element-7dcc422 p {
                                                                    margin: 0px 0px 25px 0px;
                                                                }

                                                                .elementor-4848 .elementor-element.elementor-element-1dd570c .elementor-button-wrapper .elementor-button {
                                                                    text-align: center;
                                                                }

                                                                @media(max-width:1024px) {
                                                                    .elementor-4848 .elementor-element.elementor-element-a449317>.elementor-element-populated {
                                                                        margin: 20px 0px 40px 0px;
                                                                        --e-column-margin-right: 0px;
                                                                        --e-column-margin-left: 0px;
                                                                    }

                                                                    .elementor-4848 .elementor-element.elementor-element-7dcc422 {
                                                                        text-align: center;
                                                                    }
                                                                }

                                                                @media(min-width:768px) {
                                                                    .elementor-4848 .elementor-element.elementor-element-a449317 {
                                                                        width: 35%;
                                                                    }

                                                                    .elementor-4848 .elementor-element.elementor-element-00f1a99 {
                                                                        width: 31.333%;
                                                                    }
                                                                }

                                                                @media(max-width:1024px) and (min-width:768px) {
                                                                    .elementor-4848 .elementor-element.elementor-element-508e567 {
                                                                        width: 100%;
                                                                    }

                                                                    .elementor-4848 .elementor-element.elementor-element-a449317 {
                                                                        width: 100%;
                                                                    }

                                                                    .elementor-4848 .elementor-element.elementor-element-00f1a99 {
                                                                        width: 100%;
                                                                    }
                                                                }
                                                            </style>
                                                            <div data-elementor-type="page" data-elementor-id="4848"
                                                                class="elementor elementor-4848"
                                                                style="margin-top: 20px;">
                                                                <style id="elementor-post-4669">
                                                                    .elementor-bc-flex-widget .elementor-4669 .elementor-element.elementor-element-a449317.elementor-column .elementor-widget-wrap {
                                                                        align-items: center;
                                                                    }

                                                                    .elementor-4669 .elementor-element.elementor-element-a449317.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                                                                        align-content: center;
                                                                        align-items: center;
                                                                    }

                                                                    .elementor-4669 .elementor-element.elementor-element-a449317>.elementor-element-populated {
                                                                        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                                                                        margin: 0px 20px 0px 20px;
                                                                        --e-column-margin-right: 20px;
                                                                        --e-column-margin-left: 20px;
                                                                    }

                                                                    .elementor-4669 .elementor-element.elementor-element-a449317>.elementor-element-populated>.elementor-background-overlay {
                                                                        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                                                                    }

                                                                    .elementor-bc-flex-widget .elementor-4669 .elementor-element.elementor-element-00f1a99.elementor-column .elementor-widget-wrap {
                                                                        align-items: center;
                                                                    }

                                                                    .elementor-4669 .elementor-element.elementor-element-00f1a99.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                                                                        align-content: center;
                                                                        align-items: center;
                                                                    }

                                                                    .elementor-4669 .elementor-element.elementor-element-7dcc422 p {
                                                                        margin: 0px 0px 25px 0px;
                                                                    }

                                                                    .elementor-4669 .elementor-element.elementor-element-1dd570c .elementor-button-wrapper .elementor-button {
                                                                        text-align: center;
                                                                    }

                                                                    @media(max-width:1024px) {
                                                                        .elementor-4669 .elementor-element.elementor-element-a449317>.elementor-element-populated {
                                                                            margin: 20px 0px 40px 0px;
                                                                            --e-column-margin-right: 0px;
                                                                            --e-column-margin-left: 0px;
                                                                        }

                                                                        .elementor-4669 .elementor-element.elementor-element-7dcc422 {
                                                                            text-align: center;
                                                                        }
                                                                    }

                                                                    @media(min-width:768px) {
                                                                        .elementor-4669 .elementor-element.elementor-element-a449317 {
                                                                            width: 35%;
                                                                        }

                                                                        .elementor-4669 .elementor-element.elementor-element-00f1a99 {
                                                                            width: 31.333%;
                                                                        }
                                                                    }

                                                                    @media(max-width:1024px) and (min-width:768px) {
                                                                        .elementor-4669 .elementor-element.elementor-element-508e567 {
                                                                            width: 100%;
                                                                        }

                                                                        .elementor-4669 .elementor-element.elementor-element-a449317 {
                                                                            width: 100%;
                                                                        }

                                                                        .elementor-4669 .elementor-element.elementor-element-00f1a99 {
                                                                            width: 100%;
                                                                        }
                                                                    }
                                                                </style>
                                                                <div data-elementor-type="page" data-elementor-id="4669"
                                                                    class="elementor elementor-4669">
                                                                    <div class="elementor-element elementor-element-32b938e elementor-widget elementor-widget-accordion"
                                                                        data-id="32b938e" data-element_type="widget"
                                                                        data-widget_type="accordion.default">
                                                                        <div class="elementor-widget-container"
                                                                            style="    display: flex; width: 100%; justify-content: space-between; gap:20px;">
                                                                            <style>
                                                                                /*! elementor - v3.14.0 - 26-06-2023 */
                                                                                ul {
                                                                                    padding: 0;
                                                                                }

                                                                                .elementor-accordion {
                                                                                    text-align: left
                                                                                }

                                                                                .elementor-accordion .elementor-accordion-item {
                                                                                    border: 1px solid #d5d8dc
                                                                                }

                                                                                .elementor-accordion .elementor-accordion-item+.elementor-accordion-item {
                                                                                    border-top: none
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title {
                                                                                    margin: 0;
                                                                                    padding: 15px 20px;
                                                                                    font-weight: 700;
                                                                                    line-height: 1;
                                                                                    cursor: pointer;
                                                                                    outline: none
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                                                                                    display: inline-block;
                                                                                    width: 1.5em
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon svg {
                                                                                    width: 1em;
                                                                                    height: 1em
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right {
                                                                                    float: right;
                                                                                    text-align: right
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-left {
                                                                                    float: left;
                                                                                    text-align: left
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed {
                                                                                    display: block
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened,
                                                                                .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-closed {
                                                                                    display: none
                                                                                }

                                                                                .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened {
                                                                                    display: block
                                                                                }

                                                                                .elementor-accordion .elementor-tab-content {
                                                                                    display: none;
                                                                                    padding: 15px 20px;
                                                                                    border-top: 1px solid #d5d8dc
                                                                                }

                                                                                @media (max-width:767px) {
                                                                                    .elementor-accordion .elementor-tab-title {
                                                                                        padding: 12px 15px
                                                                                    }

                                                                                    .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                                                                                        width: 1.2em
                                                                                    }

                                                                                    .elementor-accordion .elementor-tab-content {
                                                                                        padding: 7px 15px
                                                                                    }
                                                                                }

                                                                                .e-con-inner>.elementor-widget-accordion,
                                                                                .e-con>.elementor-widget-accordion {
                                                                                    width: var(--container-widget-width);
                                                                                    --flex-grow: var(--container-widget-flex-grow)
                                                                                }

                                                                                li {
                                                                                    list-style: none;
                                                                                }
                                                                            </style>
                                                                            @php
                                                                                $counter = 0;
                                                                                $remainingItems = [];
                                                                            $Restcounter = 0; @endphp
                                                                            @if (!empty($overviews->description))
                                                                                <div class="elementor-accordion"
                                                                                    style="margin-top: 30px; {{ count($overviews->description) <= 8 ? 'width: 100%;' : 'width: 50%;' }}">

                                                                                    @foreach ($overviews->description as $key => $item)
                                                                                        @if ($counter < 8)
                                                                                            <div
                                                                                                class="elementor-accordion-item">
                                                                                                <div id="elementor-tab-title-5311"
                                                                                                    class="elementor-tab-title"
                                                                                                    data-tab="{{ $key }}"
                                                                                                    role="button"
                                                                                                    aria-controls="elementor-tab-content-5311"
                                                                                                    aria-expanded="false"
                                                                                                    tabindex="-1"
                                                                                                    aria-selected="false"
                                                                                                    fdprocessedid="6k7i6">
                                                                                                    <span
                                                                                                        class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="elementor-accordion-icon-closed"><i
                                                                                                                class="ovaicon ovaicon-plus-1"></i></span>
                                                                                                        <span
                                                                                                            class="elementor-accordion-icon-opened"><i
                                                                                                                class="ovaicon ovaicon-minus"></i></span>
                                                                                                    </span>
                                                                                                    <a class="elementor-accordion-title"
                                                                                                        tabindex="0">{{ $item['name'] }}</a>
                                                                                                </div>
                                                                                                <div id="elementor-tab-content-5311"
                                                                                                    class="elementor-tab-content elementor-clearfix"
                                                                                                    data-tab="{{ $key }}"
                                                                                                    role="region"
                                                                                                    aria-labelledby="elementor-tab-title-5311"
                                                                                                    style="display: none;"
                                                                                                    hidden="hidden">
                                                                                                    <ul
                                                                                                        class="elementor-icon-list-items">
                                                                                                        {!! $item['points'] !!}
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        @else
                                                                                            @php $remainingItems[] = $item; @endphp
                                                                                        @endif
                                                                                        @php $counter++; @endphp
                                                                                    @endforeach
                                                                            @endif

                                                                        </div>
                                                                        @if (!empty($remainingItems))
                                                                            <div class="elementor-accordion"
                                                                                style="margin-top: 30px; width: 50%;">
                                                                                @php $Restcounter = $counter ; @endphp
                                                                                @foreach ($remainingItems as $key => $item)
                                                                                    @php $Restcounter++; @endphp
                                                                                    @if ($counter > 8)
                                                                                        <div
                                                                                            class="elementor-accordion-item">
                                                                                            <div id="elementor-tab-title-5311"
                                                                                                class="elementor-tab-title"
                                                                                                data-tab="{{ $Restcounter }}"
                                                                                                role="button"
                                                                                                aria-controls="elementor-tab-content-5311"
                                                                                                aria-expanded="false"
                                                                                                tabindex="-1"
                                                                                                aria-selected="false"
                                                                                                fdprocessedid="6k7i6">
                                                                                                <span
                                                                                                    class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                    aria-hidden="true">
                                                                                                    <span
                                                                                                        class="elementor-accordion-icon-closed"><i
                                                                                                            class="ovaicon ovaicon-plus-1"></i></span>
                                                                                                    <span
                                                                                                        class="elementor-accordion-icon-opened"><i
                                                                                                            class="ovaicon ovaicon-minus"></i></span>
                                                                                                </span>
                                                                                                <a class="elementor-accordion-title"
                                                                                                    tabindex="0">{{ $item['name'] }}</a>
                                                                                            </div>
                                                                                            <div id="elementor-tab-content-5311"
                                                                                                class="elementor-tab-content elementor-clearfix"
                                                                                                data-tab="{{ $Restcounter }}"
                                                                                                role="region"
                                                                                                aria-labelledby="elementor-tab-title-5311"
                                                                                                style="display: none;"
                                                                                                hidden="hidden">
                                                                                                <ul
                                                                                                    class="elementor-icon-list-items">
                                                                                                    {!! $item['points'] !!}
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <script>
                                                                    $(document).ready(function() {

                                                                        var listItems = $("#elementor-tab-content-5311 ul.elementor-icon-list-items li");


                                                                        listItems.each(function() {
                                                                            var listItem = $(this).html();
                                                                            var checkIcon =
                                                                                '<span style="margin-right:10px;" class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-check-circle"></i></span>';
                                                                            $(this).html(checkIcon +
                                                                                listItem);
                                                                        });


                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="elementor-tab-title elementor-tab-mobile-title"
                                                        aria-selected="false" data-tab="3" role="tab"
                                                        tabindex="-1" aria-controls="elementor-tab-content-4943"
                                                        aria-expanded="false">
                                                        Virtual Tour</div>
                                                    <div id="elementor-tab-content-4943"
                                                        class="elementor-tab-content elementor-clearfix" data-tab="3"
                                                        role="tabpanel" aria-labelledby="elementor-tab-title-4943"
                                                        tabindex="0" style="display: none; border: none;"
                                                        hidden="hidden">
                                                        {!! $project->v_tour ?? '-' !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </section>


                    @if (!count($floors) == 0)
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9f65b7d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="9f65b7d" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                            style="width: 1312px; left: 0px; margin-top: 100px; margin-bottom: 100px;">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-837fd2a"
                                    data-id="837fd2a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6bf90ee elementor-widget elementor-widget-prooty_elementor_heading"
                                            data-id="6bf90ee" data-element_type="widget"
                                            data-settings="{&quot;invert_background_image_color&quot;:&quot;no&quot;}"
                                            data-widget_type="prooty_elementor_heading.default">
                                            <div class="elementor-widget-container">

                                                <div class="ova-heading">

                                                    <div class="top-heading ">

                                                        <div class="sub-title-wrapper">
                                                            <h3 class="sub-title">Availability</h3>
                                                        </div>



                                                        <h2 class="title">Check Our
                                                            Apartment Availability</h2>



                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2f1d7b6 elementor-tabs-alignment-end elementor-tabs-view-horizontal elementor-widget elementor-widget-tabs"
                                            data-id="2f1d7b6" data-element_type="widget" data-widget_type="tabs.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.14.0 - 26-06-2023 */
                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                                        width: 25%;
                                                        flex-shrink: 0
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active {
                                                        border-right-style: none
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after,
                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                                        height: 999em;
                                                        width: 0;
                                                        right: 0;
                                                        border-right-style: solid
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                                        top: 0;
                                                        transform: translateY(-100%)
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after {
                                                        top: 100%
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title {
                                                        display: table-cell
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active {
                                                        border-bottom-style: none
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,
                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                                        bottom: 0;
                                                        height: 0;
                                                        width: 999em;
                                                        border-bottom-style: solid
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                                        right: 100%
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after {
                                                        left: 100%
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-content,
                                                    .elementor-widget-tabs .elementor-tab-title,
                                                    .elementor-widget-tabs .elementor-tab-title:after,
                                                    .elementor-widget-tabs .elementor-tab-title:before,
                                                    .elementor-widget-tabs .elementor-tabs-content-wrapper {
                                                        border: 1px #d5d8dc
                                                    }

                                                    .elementor-widget-tabs .elementor-tabs {
                                                        text-align: left
                                                    }

                                                    .elementor-widget-tabs .elementor-tabs-wrapper {
                                                        overflow: hidden
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-title {
                                                        cursor: pointer;
                                                        outline: var(--focus-outline, none)
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title {
                                                        position: relative;
                                                        padding: 20px 25px;
                                                        font-weight: 700;
                                                        line-height: 1;
                                                        border: solid transparent
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active {
                                                        border-color: #d5d8dc
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:after,
                                                    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:before {
                                                        display: block;
                                                        content: "";
                                                        position: absolute
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-desktop-title:focus-visible {
                                                        border: 1px solid #000
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-mobile-title {
                                                        padding: 10px;
                                                        cursor: pointer
                                                    }

                                                    .elementor-widget-tabs .elementor-tab-content {
                                                        padding: 20px;
                                                        display: none
                                                    }

                                                    @media (max-width:767px) {

                                                        .elementor-tabs .elementor-tab-content,
                                                        .elementor-tabs .elementor-tab-title {
                                                            border-style: solid solid none
                                                        }

                                                        .elementor-tabs .elementor-tabs-wrapper {
                                                            display: none
                                                        }

                                                        .elementor-tabs .elementor-tabs-content-wrapper {
                                                            border-bottom-style: solid
                                                        }

                                                        .elementor-tabs .elementor-tab-content {
                                                            padding: 10px
                                                        }
                                                    }

                                                    @media (min-width:768px) {
                                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs {
                                                            display: flex
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                                            flex-direction: column
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-content-wrapper {
                                                            flex-grow: 1;
                                                            border-style: solid solid solid none
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-content {
                                                            border-style: none solid solid
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper,
                                                        .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper,
                                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch .elementor-tabs-wrapper {
                                                            display: flex
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper {
                                                            justify-content: center
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper {
                                                            justify-content: flex-end
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-horizontal .elementor-tab-title {
                                                            width: 100%
                                                        }

                                                        .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-vertical .elementor-tab-title {
                                                            height: 100%
                                                        }

                                                        .elementor-tabs .elementor-tab-mobile-title {
                                                            display: none
                                                        }
                                                    }
                                                </style>
                                                <div class="elementor-tabs">
                                                    <div class="elementor-tabs-wrapper" role="tablist"
                                                        style="    display: flex; flex-wrap: wrap; align-items: center; justify-content: flex-start; gap: 10px;">
                                                        @foreach ($floors as $key => $floor)
                                                            @php
                                                                $key++;
                                                            @endphp
                                                            <div id="elementor-tab-title-4941"
                                                                class="elementor-tab-title {{ $key == 1 ? 'elementor-active' : ' ' }}"
                                                                aria-selected="true" data-tab="{{ $key }}"
                                                                role="tab" tabindex="0"
                                                                aria-controls="elementor-tab-content-4941"
                                                                aria-expanded="true">
                                                                {{ $floor->name }}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="elementor-tabs-content-wrapper" role="tablist"
                                                        aria-orientation="vertical">
                                                        @foreach ($floors as $key => $floor)
                                                            @php
                                                                $key++;
                                                            @endphp
                                                            <div id="elementor-tab-content-4943"
                                                                class="elementor-tab-content elementor-clearfix  {{ $key == 1 ? 'elementor-active' : ' ' }}"
                                                                data-tab="{{ $key }}" role="tabpanel"
                                                                aria-labelledby="elementor-tab-title-4943" tabindex="0"
                                                                style="{{ $key == 1 ? 'display: block;' : 'display: none;' }} border: none;">
                                                                <section
                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-9aa2f94 animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default animated ova-move-up"
                                                                    data-id="9aa2f94" data-element_type="section"
                                                                    data-settings="{&quot;animation&quot;:&quot;ova-move-up&quot;,&quot;animation_tablet&quot;:&quot;none&quot;}">
                                                                    <style>
                                                                        .label-sold {
                                                                            padding: 5px 15px;
                                                                            background-color: #ff0b691c;
                                                                            border-radius: 12px;
                                                                            color: #ab232a !important;
                                                                        }

                                                                        .label-available {
                                                                            padding: 5px 15px;
                                                                            background-color: #0bff851c;
                                                                            border-radius: 12px;
                                                                            color: #23ab4c !important;
                                                                        }
                                                                    </style>
                                                                    <div class="elementor-container elementor-column-gap-no"
                                                                        style="justify-content: space-between; margin-top: 40px;">
                                                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-508e567"
                                                                            data-id="508e567" data-element_type="column"
                                                                            style="width: 100%;">
                                                                            <div
                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-508e567 elementor-widget elementor-widget-prooty_elementor_ova_icon_list"
                                                                                    data-id="508e567"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="prooty_elementor_ova_icon_list.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">

                                                                                        <div class="ova-icon-list ova-icon-list-template2 one_column"
                                                                                            style="overflow: auto; padding:0;">

                                                                                            @foreach ($floor->blocks as $block)
                                                                                                <div class="item"
                                                                                                    style="border-bottom: 1px solid; gap: 56px; ">
                                                                                                    <h3 class="title">
                                                                                                        {{ $block['block_name'] }}
                                                                                                    </h3>

                                                                                                    @if ($block['bedroom_bathroom'])
                                                                                                        <p class="text">
                                                                                                            {{ $block['bedroom_bathroom'] }}
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    @if ($block['additional'])
                                                                                                        <p class="text">
                                                                                                            {{ $block['additional'] }}
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    @if ($block['sqft'])
                                                                                                        <p class="text">
                                                                                                            {{ $block['sqft'] }}
                                                                                                            Sqft
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    @if ($block['status'])
                                                                                                        @if ($block['status'] == 'sold')
                                                                                                            <p
                                                                                                                class="text label-sold ">
                                                                                                                Sold
                                                                                                            </p>
                                                                                                        @else
                                                                                                            <p
                                                                                                                class="text label-available ">
                                                                                                                Available
                                                                                                            </p>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                    @if ($block['image'])
                                                                                                        <div class="owl-item active"
                                                                                                            style="width: 219px; margin-right: 20px;">
                                                                                                            <div
                                                                                                                class="gallery-box ">

                                                                                                                <div
                                                                                                                    class="list-gallery">

                                                                                                                    <div
                                                                                                                        class="icon-box">
                                                                                                                        <a data-fancybox="apartment-gallery-slide"
                                                                                                                            data-src="{{ asset('storage/' . $block['image']) }}"
                                                                                                                            data-caption="{{ $block['block_name'] }}"
                                                                                                                            aria-hidden="true"
                                                                                                                            class="text"
                                                                                                                            style="cursor: pointer">
                                                                                                                            View
                                                                                                                        </a>
                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                            @endforeach


                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif


                </div>
        </div>



        </article>

    </div>
@endsection
