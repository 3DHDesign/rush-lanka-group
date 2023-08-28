<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Rush Holdings</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! RecaptchaV3::initJs() !!}
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('assets/css/style.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="classic-theme-styles-css" href="{{ asset('assets/css/classic-themes.min.css') }}"
        type="text/css" media="all">
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('prooty.html#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('prooty.html#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('prooty.html#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('prooty.html#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('prooty.html#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('prooty.html#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('prooty.html#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('prooty.html#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('assets/css/styles.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="image-map-pro-dist-css-css" href="{{ asset('assets/css/image-map-pro.min.css') }}"
        type="text/css" media>
    <link rel="stylesheet" id="apartment_style-css" href="{{ asset('assets/css/style.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="prooty-style-css" href="{{ asset('assets/css/style_2.css') }}" type="text/css"
        media="all">
    <style id="prooty-style-inline-css" type="text/css">
        :root {
            --primary: #ab232a;
            --secondary: #f6f6f6;
            --heading: #292f29;
            --text: #7c7c7c;
            --light: #e4e4e4;
            --primary-font: Inter;
            --font-size: 16px;
            --line-height: 1.86em;
            --letter-spacing: 0px;
            --width-sidebar: 320px;
            --main-content: calc(100% - 320px);
            --container-width: 1190px;
            --boxed-offset: 20px;
            --woo-layout: layout_1c;
            --woo-width-sidebar: 320px;
            --woo-main-content: calc(100% - 320px);
        }

        @media (min-width: 1024px) and (max-width: 1250px) {

            body .row_site,
            body .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 100%;
                padding-left: 30px;
                padding-right: 30px;
            }

            .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs .elementor-container {
                padding-left: 0;
                padding-right: 0;
            }
        }
    </style>
    <link rel="stylesheet" id="child-style-css" href="{{ asset('assets/css/style_1.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="ova-google-fonts-css"
        href="//fonts.googleapis.com/css?family=Inter%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900"
        type="text/css" media="all">
    <link rel="stylesheet" id="carousel-css" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="ovaicon-css" href="{{ asset('assets/css/ovaicon.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="flaticon-prooty-css" href="{{ asset('assets/css/flaticon_prooty.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('assets/css/elementor-icons.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('assets/css/frontend-lite.min.css') }}"
        type="text/css" media="all">
    <style id="elementor-frontend-inline-css" type="text/css">
        .elementor-kit-7 {
            --e-global-color-primary: #C39E76;
            --e-global-color-secondary: #F6F6F6;
            --e-global-color-text: #7C7C7C;
            --e-global-color-accent: #292F29;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .e-con {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-14 .elementor-element.elementor-element-db49a9b>.elementor-background-overlay {
            background-image: url("images/bg-right-about-home3.png");
            background-position: bottom right;
            background-repeat: no-repeat;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-db49a9b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 110px 0px 36px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-97076d9 .ova-image .ova-image-content img {
            height: 500px;
        }

        .elementor-14 .elementor-element.elementor-element-97076d9 .ova-image .text {
            background-color: #02010100;
        }

        .elementor-14 .elementor-element.elementor-element-97076d9 .ova-image:after {
            background-image: url("images/dots.png");
        }

        .elementor-14 .elementor-element.elementor-element-97076d9>.elementor-widget-container {
            margin: 0px 10px 0px 10px;
        }

        .elementor-14 .elementor-element.elementor-element-9b2fdf7.elementor-view-framed .elementor-icon {
            background-color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-9b2fdf7.elementor-view-stacked .elementor-icon {
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-9b2fdf7.elementor-view-stacked .elementor-icon svg {
            fill: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-9b2fdf7 .elementor-icon {
            font-size: 50px;
            padding: 20px;
        }

        body:not(.rtl) .elementor-14 .elementor-element.elementor-element-9b2fdf7 {
            left: -40px;
        }

        body.rtl .elementor-14 .elementor-element.elementor-element-9b2fdf7 {
            right: -40px;
        }

        .elementor-14 .elementor-element.elementor-element-9b2fdf7 {
            bottom: 20px;
            z-index: 2;
        }

        .elementor-14 .elementor-element.elementor-element-07a17e5>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 30px;
        }

        .elementor-14 .elementor-element.elementor-element-07a17e5>.elementor-element-populated {
            margin: 0px 30px 0px 20px;
            --e-column-margin-right: 30px;
            --e-column-margin-left: 20px;
        }

        .elementor-14 .elementor-element.elementor-element-84ccb75 .ova-heading {
            text-align: left;
        }

        .elementor-14 .elementor-element.elementor-element-84ccb75 .ova-heading .top-heading:before {
            background-position: bottom left;
            background-image: url("images/bg-logo-heading.png");
        }

        .elementor-14 .elementor-element.elementor-element-84ccb75 .ova-heading .description {
            font-size: 18px;
            font-weight: 500;
            color: #292F29;
        }

        .elementor-14 .elementor-element.elementor-element-f7912e1 .elementor-icon-list-icon i {
            transition: color 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-f7912e1 .elementor-icon-list-icon svg {
            transition: fill 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-f7912e1 {
            --e-icon-list-icon-size: 14px;
            --icon-vertical-offset: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f7912e1 .elementor-icon-list-text {
            transition: color 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-f7912e1>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-cdb7322 .elementor-button-wrapper .elementor-button {
            text-align: center;
        }

        .elementor-14 .elementor-element.elementor-element-cdb7322 .elementor-button {
            padding: 20px 60px 20px 60px;
        }

        .elementor-14 .elementor-element.elementor-element-cdb7322 {
            width: auto;
            max-width: auto;
        }

        .elementor-14 .elementor-element.elementor-element-f158120>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f158120>.elementor-element-populated {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.05);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: -120px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f158120>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-1a71f98 .ova-heading {
            text-align: left;
        }

        .elementor-14 .elementor-element.elementor-element-1a71f98 .ova-heading .top-heading:before {
            background-position: bottom left;
        }

        .elementor-14 .elementor-element.elementor-element-1a71f98 .ova-heading .description {
            font-weight: 600;
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-1a71f98 .ova-heading .description {
            padding: 40px 40px 40px 40px;
        }

        .elementor-14 .elementor-element.elementor-element-1a71f98>.elementor-widget-container {
            background-image: url("images/earth-location.png");
            background-position: 100% 50px;
            background-repeat: no-repeat;
        }

        .elementor-14 .elementor-element.elementor-element-c1fd138 .ova-counter {
            border-style: none;
        }

        .elementor-14 .elementor-element.elementor-element-706256b:not(.elementor-motion-effects-element-type-background),
        .elementor-14 .elementor-element.elementor-element-706256b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F6F6F6;
        }

        .elementor-14 .elementor-element.elementor-element-706256b>.elementor-background-overlay {
            background-image: url("images/test-bg.png");
            background-position: center center;
            opacity: 0.15;
            mix-blend-mode: luminosity;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-706256b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 37px 0px 25px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-a60eee6 {
            margin-top: 0px;
            margin-bottom: 5px;
        }

        .elementor-14 .elementor-element.elementor-element-786ea43 .ova-heading {
            text-align: left;
        }

        .elementor-14 .elementor-element.elementor-element-786ea43 .ova-heading .top-heading:before {
            background-position: bottom left;
            background-image: url("images/bg-logo-heading.png");
        }

        .elementor-bc-flex-widget .elementor-14 .elementor-element.elementor-element-e7c9f67.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-14 .elementor-element.elementor-element-e7c9f67.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-14 .elementor-element.elementor-element-8e1db99 {
            text-align: left;
        }

        .elementor-14 .elementor-element.elementor-element-8e1db99 p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-d6f7902 .ova-icon-box:hover .button-readmore:before {
            background-image: url("images/bg-readmore-icon-box.jpg");
        }

        .elementor-14 .elementor-element.elementor-element-b4604ef .ova-icon-box:hover .button-readmore:before {
            background-image: url("images/bg-readmore-icon-box.jpg");
        }

        .elementor-14 .elementor-element.elementor-element-8e62602 .ova-icon-box:hover .button-readmore:before {
            background-image: url("images/bg-readmore-icon-box.jpg");
        }

        .elementor-14 .elementor-element.elementor-element-73e332b .ova-icon-box:hover .button-readmore:before {
            background-image: url("images/bg-readmore-icon-box.jpg");
        }

        .elementor-14 .elementor-element.elementor-element-f05b50f:not(.elementor-motion-effects-element-type-background),
        .elementor-14 .elementor-element.elementor-element-f05b50f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #292F29;
        }

        .elementor-14 .elementor-element.elementor-element-f05b50f>.elementor-background-overlay {
            background-image: url("images/background-iconbox-template2.jpg");
            background-position: center right;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.05;
            mix-blend-mode: luminosity;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-f05b50f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 105px 0px 240px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-9482327 .ova-heading {
            text-align: center;
        }

        .elementor-14 .elementor-element.elementor-element-9482327 .ova-heading .top-heading:before {
            background-position: bottom center;
            background-image: url("images/bg-logo-heading.png");
        }

        .elementor-14 .elementor-element.elementor-element-9482327 .ova-heading .title,
        .elementor-14 .elementor-element.elementor-element-9482327 .ova-heading .title a {
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-3b8acaa {
            margin-top: -220px;
            margin-bottom: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-4a0a18f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 60px 0px 60px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-4a0a18f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-48bd6e4>.elementor-element-populated {
            border-style: solid;
            border-width: 1px 1px 0px 0px;
            border-color: #E4E4E4;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 60px 60px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-48bd6e4>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-14 .elementor-element.elementor-element-4b275e7.elementor-column .elementor-widget-wrap {
            align-items: space-between;
        }

        .elementor-14 .elementor-element.elementor-element-4b275e7.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: space-between;
            align-items: space-between;
        }

        .elementor-14 .elementor-element.elementor-element-4b275e7>.elementor-element-populated {
            padding: 0px 10px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-0b94faf .elementor-heading-title {
            font-size: 24px;
            font-weight: 800;
            line-height: 1.25em;
        }

        .elementor-14 .elementor-element.elementor-element-983eb9b p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-e75af69 {
            text-align: right;
        }

        .elementor-14 .elementor-element.elementor-element-e75af69 img {
            width: 185px;
            height: 185px;
            object-fit: cover;
            border-style: solid;
            border-width: 0px 0px 0px 10px;
            border-color: #C39E76;
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-14 .elementor-element.elementor-element-da12d21>.elementor-element-populated {
            border-style: solid;
            border-width: 1px 0px 0px 0px;
            border-color: #E4E4E4;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 60px 0px 0px 60px;
        }

        .elementor-14 .elementor-element.elementor-element-da12d21>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-14 .elementor-element.elementor-element-783f1af.elementor-column .elementor-widget-wrap {
            align-items: space-between;
        }

        .elementor-14 .elementor-element.elementor-element-783f1af.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: space-between;
            align-items: space-between;
        }

        .elementor-14 .elementor-element.elementor-element-783f1af>.elementor-element-populated {
            padding: 0px 10px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-aca58a1 .elementor-heading-title {
            font-size: 24px;
            font-weight: 800;
            line-height: 1.25em;
        }

        .elementor-14 .elementor-element.elementor-element-c8f0603 p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-33f93ad {
            text-align: right;
        }

        .elementor-14 .elementor-element.elementor-element-33f93ad img {
            width: 185px;
            height: 185px;
            object-fit: cover;
            border-style: solid;
            border-width: 0px 0px 0px 10px;
            border-color: #C39E76;
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-14 .elementor-element.elementor-element-883d734:not(.elementor-motion-effects-element-type-background),
        .elementor-14 .elementor-element.elementor-element-883d734>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(180deg, #FFFFFF 0%, #F3F3F3 100%);
        }

        .elementor-14 .elementor-element.elementor-element-883d734 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-883d734>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-c83218e {
            --spacer-size: 50px;
        }

        .elementor-14 .elementor-element.elementor-element-988fab6 {
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: #E4E4E4;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 55px 0px 55px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-988fab6>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-9f65b7d:not(.elementor-motion-effects-element-type-background),
        .elementor-14 .elementor-element.elementor-element-9f65b7d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F6F6F6;
        }

        .elementor-14 .elementor-element.elementor-element-9f65b7d {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 105px 0px 110px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-9f65b7d>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-6bf90ee .ova-heading {
            text-align: left;
        }

        .elementor-14 .elementor-element.elementor-element-6bf90ee .ova-heading .top-heading:before {
            background-position: bottom left;
            background-image: url("images/bg-logo-heading.png");
        }

        .elementor-14 .elementor-element.elementor-element-2f1d7b6 .elementor-tab-title,
        .elementor-14 .elementor-element.elementor-element-2f1d7b6 .elementor-tab-title:before,
        .elementor-14 .elementor-element.elementor-element-2f1d7b6 .elementor-tab-title:after,
        .elementor-14 .elementor-element.elementor-element-2f1d7b6 .elementor-tab-content,
        .elementor-14 .elementor-element.elementor-element-2f1d7b6 .elementor-tabs-content-wrapper {
            border-width: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-2f1d7b6>.elementor-widget-container {
            margin: -145px 0px 0px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-4db4993>.elementor-container {
            max-width: 1600px;
        }

        .elementor-14 .elementor-element.elementor-element-4db4993 {
            padding: 33px 0px 5px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-e862cb3>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-859bfd7 .ova-heading {
            text-align: center;
        }

        .elementor-14 .elementor-element.elementor-element-859bfd7 .ova-heading .top-heading:before {
            background-position: bottom center;
            background-image: url("images/bg-logo-heading.png");
        }

        .elementor-14 .elementor-element.elementor-element-e78aa21>.elementor-background-overlay {
            background-image: url("images/bg-why-chose-home3-1.png");
            background-position: -900px 0px;
            background-repeat: no-repeat;
            background-size: contain;
            opacity: 0.5;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-e78aa21 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-e185d5f>.elementor-element-populated {
            margin: 0px 110px 110px 0px;
            --e-column-margin-right: 110px;
            --e-column-margin-left: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-4737e7d .ova-heading {
            text-align: left;
        }

        .elementor-14 .elementor-element.elementor-element-4737e7d .ova-heading .top-heading:before {
            background-position: bottom left;
            background-image: url("images/bg-logo-heading.png");
        }

        .elementor-14 .elementor-element.elementor-element-4737e7d .ova-heading .title {
            margin: 0px 0px 10px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-item {
            border-width: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-item .elementor-tab-content {
            border-width: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-item .elementor-tab-title.elementor-active {
            border-width: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-icon,
        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-title {
            color: #292F29;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-icon svg {
            fill: #292F29;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion-title {
            font-size: 18px;
            font-weight: 800;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-tab-title {
            padding: 23px 0px 23px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-tab-title .elementor-accordion-icon i:before {
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-tab-title .elementor-accordion-icon svg {
            fill: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-tab-title.elementor-active .elementor-accordion-icon i:before {
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-tab-title.elementor-active .elementor-accordion-icon svg {
            fill: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-tab-content {
            padding: 0px 0px 25px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion .elementor-tab-title {
            display: list-item;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion .elementor-accordion-item {
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: #E4E4E4;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion .elementor-tab-title::marker {
            font-size: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion .elementor-tab-title i {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            font-size: 9px;
            top: -6px;
            right: 5px;
            width: 30px;
            height: 30px;
            background-color: #292F29;
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion .elementor-tab-title.elementor-active i {
            background-color: #C39E76;
        }

        .elementor-14 .elementor-element.elementor-element-f03c5f4 .elementor-accordion .elementor-tab-content p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-14 .elementor-element.elementor-element-4aca62f.elementor-column .elementor-widget-wrap {
            align-items: flex-end;
        }

        .elementor-14 .elementor-element.elementor-element-4aca62f.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: flex-end;
            align-items: flex-end;
        }

        .elementor-14 .elementor-element.elementor-element-004670e>.elementor-background-overlay {
            background-image: url("{{ asset('assets/images/test-bg.png') }}");
            background-position: center center;
            background-size: contain;
            opacity: 0.05;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14 .elementor-element.elementor-element-004670e {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 105px 0px 380px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-71817b7 .ova-heading {
            text-align: center;
        }

        .elementor-14 .elementor-element.elementor-element-71817b7 .ova-heading .top-heading:before {
            background-position: bottom center;
            background-image: url("{{ asset('assets/images/bg-logo-heading.png') }}");
        }

        .elementor-14 .elementor-element.elementor-element-71817b7 .ova-heading .sub-title-pre {
            color: #FFFFFF;
        }

        .ova-heading .sub-title-pre,
        .ova-heading .sub-title {
            color: #ff8288;

        }

        .elementor-14 .elementor-element.elementor-element-71817b7 .ova-heading .sub-title {
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-71817b7 .ova-heading .title,
        .elementor-14 .elementor-element.elementor-element-71817b7 .ova-heading .title a {
            color: #FFFFFF;
        }

        .elementor-14 .elementor-element.elementor-element-f1d94b4 {
            margin-top: -358px;
            margin-bottom: 0px;
        }

        .elementor-14 .elementor-element.elementor-element-fc47535 .ova-blog .item .media .post-date {
            right: 20px;
        }

        .elementor-14 .elementor-element.elementor-element-65fbdb5>.elementor-container {
            max-width: 1465px;
        }

        .elementor-14 .elementor-element.elementor-element-65fbdb5 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 90px 0px 90px 0px;
        }

        .elementor-14 .elementor-element.elementor-element-65fbdb5>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        @media(min-width:768px) {
            .elementor-14 .elementor-element.elementor-element-7f0ca25 {
                width: 32%;
            }

            .elementor-14 .elementor-element.elementor-element-07a17e5 {
                width: 40.332%;
            }

            .elementor-14 .elementor-element.elementor-element-f158120 {
                width: 27%;
            }

            .elementor-14 .elementor-element.elementor-element-9b5cb56 {
                width: 58%;
            }

            .elementor-14 .elementor-element.elementor-element-e7c9f67 {
                width: 42%;
            }

            .elementor-14 .elementor-element.elementor-element-4b275e7 {
                width: 55%;
            }

            .elementor-14 .elementor-element.elementor-element-30e24f4 {
                width: 45%;
            }

            .elementor-14 .elementor-element.elementor-element-783f1af {
                width: 55%;
            }

            .elementor-14 .elementor-element.elementor-element-978b31e {
                width: 45%;
            }

            .elementor-14 .elementor-element.elementor-element-e185d5f {
                width: 60%;
            }

            .elementor-14 .elementor-element.elementor-element-4aca62f {
                width: 40%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-14 .elementor-element.elementor-element-7f0ca25 {
                width: 50%;
            }

            .elementor-14 .elementor-element.elementor-element-07a17e5 {
                width: 50%;
            }

            .elementor-14 .elementor-element.elementor-element-f158120 {
                width: 100%;
            }

            .elementor-14 .elementor-element.elementor-element-89a2df4 {
                width: 50%;
            }

            .elementor-14 .elementor-element.elementor-element-c9e8bc6 {
                width: 50%;
            }

            .elementor-14 .elementor-element.elementor-element-9de7791 {
                width: 50%;
            }

            .elementor-14 .elementor-element.elementor-element-1d2ae0d {
                width: 50%;
            }

            .elementor-14 .elementor-element.elementor-element-48bd6e4 {
                width: 100%;
            }

            .elementor-14 .elementor-element.elementor-element-da12d21 {
                width: 100%;
            }

            .elementor-14 .elementor-element.elementor-element-e185d5f {
                width: 100%;
            }

            .elementor-14 .elementor-element.elementor-element-4aca62f {
                width: 100%;
            }
        }

        @media(max-width:1024px) {
            .elementor-14 .elementor-element.elementor-element-db49a9b {
                padding: 90px 0px 80px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-97076d9 .ova-image .ova-image-content img {
                height: 100%;
            }

            body:not(.rtl) .elementor-14 .elementor-element.elementor-element-9b2fdf7 {
                left: 20px;
            }

            body.rtl .elementor-14 .elementor-element.elementor-element-9b2fdf7 {
                right: 20px;
            }

            .elementor-14 .elementor-element.elementor-element-9b2fdf7 {
                bottom: 40px;
            }

            .elementor-14 .elementor-element.elementor-element-f158120>.elementor-element-populated {
                margin: 40px 20px 20px 20px;
                --e-column-margin-right: 20px;
                --e-column-margin-left: 20px;
            }

            .elementor-14 .elementor-element.elementor-element-1a71f98>.elementor-widget-container {
                background-position: 100% 10px;
            }

            .elementor-14 .elementor-element.elementor-element-706256b {
                padding: 80px 0px 80px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-f05b50f {
                padding: 80px 0px 200px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-3b8acaa {
                margin-top: -180px;
                margin-bottom: 0px;
            }

            .elementor-14 .elementor-element.elementor-element-48bd6e4>.elementor-element-populated {
                border-width: 0px 0px 0px 0px;
                padding: 30px 30px 30px 30px;
            }

            .elementor-bc-flex-widget .elementor-14 .elementor-element.elementor-element-4b275e7.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-14 .elementor-element.elementor-element-4b275e7.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-14 .elementor-element.elementor-element-da12d21>.elementor-element-populated {
                border-width: 0px 0px 0px 0px;
                padding: 30px 30px 30px 30px;
            }

            .elementor-bc-flex-widget .elementor-14 .elementor-element.elementor-element-783f1af.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-14 .elementor-element.elementor-element-783f1af.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-14 .elementor-element.elementor-element-33f93ad {
                text-align: right;
            }

            .elementor-14 .elementor-element.elementor-element-988fab6 {
                padding: 35px 0px 35px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-9f65b7d {
                padding: 80px 0px 30px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-2f1d7b6>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-4db4993 {
                padding: 80px 0px 55px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-e78aa21>.elementor-background-overlay {
                background-position: 0px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-e185d5f>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 20px 0px 20px;
            }

            .elementor-14 .elementor-element.elementor-element-4aca62f>.elementor-element-populated {
                padding: 60px 20px 80px 20px;
            }

            .elementor-14 .elementor-element.elementor-element-004670e {
                padding: 80px 0px 80px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-f1d94b4 {
                margin-top: -58px;
                margin-bottom: 0px;
                padding: 0px 10px 0px 10px;
            }

            .elementor-14 .elementor-element.elementor-element-65fbdb5 {
                padding: 50px 0px 50px 0px;
            }
        }

        @media(max-width:767px) {
            .elementor-14 .elementor-element.elementor-element-07a17e5>.elementor-element-populated {
                margin: 0px 0px 0px 10px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 10px;
            }

            .elementor-14 .elementor-element.elementor-element-1a71f98>.elementor-widget-container {
                background-position: 100% 10px;
            }

            .elementor-14 .elementor-element.elementor-element-48bd6e4>.elementor-element-populated {
                padding: 0px 10px 0px 10px;
            }

            .elementor-14 .elementor-element.elementor-element-4b275e7>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-0b94faf {
                text-align: center;
            }

            .elementor-14 .elementor-element.elementor-element-983eb9b {
                text-align: center;
            }

            .elementor-14 .elementor-element.elementor-element-30e24f4>.elementor-element-populated {
                padding: 20px 0px 0px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-e75af69 {
                text-align: center;
            }

            .elementor-14 .elementor-element.elementor-element-da12d21>.elementor-element-populated {
                padding: 40px 10px 0px 10px;
            }

            .elementor-14 .elementor-element.elementor-element-783f1af>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-aca58a1 {
                text-align: center;
            }

            .elementor-14 .elementor-element.elementor-element-c8f0603 {
                text-align: center;
            }

            .elementor-14 .elementor-element.elementor-element-978b31e>.elementor-element-populated {
                padding: 20px 0px 0px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-33f93ad {
                text-align: center;
            }

            .elementor-14 .elementor-element.elementor-element-9f65b7d {
                padding: 80px 0px 50px 0px;
            }

            .elementor-14 .elementor-element.elementor-element-e78aa21>.elementor-background-overlay {
                background-position: 0px 0px;
            }
        }
    </style>
    <link rel="stylesheet" id="swiper-css" href="{{ asset('assets/css/swiper.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('assets/css/all.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{ asset('assets/css/v4-shims.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('assets/css/fontawesome.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('assets/css/solid.min.css') }}"
        type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/v4-shims.min.js') }}" id="font-awesome-4-shim-js"></script>
    <link rel="icon" href="{{ asset('assets/images/cropped-favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/images/cropped-favicon-192x192.png') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/cropped-favicon-180x180.png') }}">

    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-14 wp-embed-responsive safari layout_2r woo_layout_1c elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-14">

    <div id="ova-custom-cursor__cursor"></div>
    <div id="ova-custom-cursor__cursor-border"></div>
    <div class="wrap-fullwidth">
        <div class="inside-content">


            <style id="elementor-post-50">
                .elementor-50 .elementor-element.elementor-element-6feebe3 {
                    padding: 0px 30px 0px 30px;
                }

                .elementor-bc-flex-widget .elementor-50 .elementor-element.elementor-element-18b661d.elementor-column .elementor-widget-wrap {
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-18b661d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                    align-content: center;
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-86ec26d .ova-contact-info .contact .info .item,
                .elementor-50 .elementor-element.elementor-element-86ec26d .ova-contact-info .contact .info .item a {
                    font-size: 14px;
                }

                .elementor-50 .elementor-element.elementor-element-86ec26d>.elementor-widget-container {
                    margin: 0px 20px 0px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-86ec26d {
                    width: auto;
                    max-width: auto;
                }

                .elementor-50 .elementor-element.elementor-element-a50388a .ova-contact-info .contact .info .item,
                .elementor-50 .elementor-element.elementor-element-a50388a .ova-contact-info .contact .info .item a {
                    font-size: 14px;
                }

                .elementor-50 .elementor-element.elementor-element-a50388a>.elementor-widget-container {
                    margin: 0px 20px 0px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-a50388a {
                    width: auto;
                    max-width: auto;
                }

                .elementor-50 .elementor-element.elementor-element-d7f02fe .ova-contact-info .contact .info .item,
                .elementor-50 .elementor-element.elementor-element-d7f02fe .ova-contact-info .contact .info .item a {
                    font-size: 14px;
                }

                .elementor-50 .elementor-element.elementor-element-d7f02fe {
                    width: auto;
                    max-width: auto;
                }

                .elementor-bc-flex-widget .elementor-50 .elementor-element.elementor-element-818cc99.elementor-column .elementor-widget-wrap {
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-818cc99.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                    align-content: center;
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-818cc99.elementor-column>.elementor-widget-wrap {
                    justify-content: flex-end;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 {
                    --grid-template-columns: repeat(0, auto);
                    --icon-size: 14px;
                    --grid-column-gap: 10px;
                    width: auto;
                    max-width: auto;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-widget-container {
                    text-align: center;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-social-icon {
                    background-color: #F6F6F6;
                    --icon-padding: 0.6em;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-social-icon i {
                    color: #292F29;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-social-icon svg {
                    fill: #292F29;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-icon {
                    border-radius: 50% 50% 50% 50%;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-social-icon:hover {
                    background-color: #C39E76;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-social-icon:hover i {
                    color: #FFFFFF;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-social-icon:hover svg {
                    fill: #FFFFFF;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003 .elementor-icon.elementor-social-icon {
                    display: inline-flex;
                }

                .elementor-50 .elementor-element.elementor-element-aafe003>.elementor-widget-container {
                    margin: 0px 35px 0px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-3c3ed52 {
                    font-size: 14px;
                    width: auto;
                    max-width: auto;
                }

                .elementor-50 .elementor-element.elementor-element-3c3ed52 p a {
                    color: #7C7C7C;
                }

                .elementor-50 .elementor-element.elementor-element-3c3ed52 p a:hover {
                    color: #C39E76;
                }

                .elementor-50 .elementor-element.elementor-element-3c3ed52 p {
                    margin: 0px 0px 0px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-79e2341:not(.elementor-motion-effects-element-type-background),
                .elementor-50 .elementor-element.elementor-element-79e2341>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                    background-color: #F6F6F6;
                }

                .elementor-50 .elementor-element.elementor-element-79e2341 {
                    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                }

                .elementor-50 .elementor-element.elementor-element-79e2341>.elementor-background-overlay {
                    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                }

                .elementor-bc-flex-widget .elementor-50 .elementor-element.elementor-element-ca40690.elementor-column .elementor-widget-wrap {
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-ca40690.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                    align-content: center;
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-ca40690>.elementor-element-populated {
                    padding: 0px 0px 0px 30px;
                }

                .elementor-50 .elementor-element.elementor-element-21d981b {
                    width: auto;
                    max-width: auto;
                }

                .elementor-bc-flex-widget .elementor-50 .elementor-element.elementor-element-0f531d8.elementor-column .elementor-widget-wrap {
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-0f531d8.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                    align-content: center;
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-0f531d8.elementor-column>.elementor-widget-wrap {
                    justify-content: space-between;
                }

                .elementor-50 .elementor-element.elementor-element-0f531d8>.elementor-element-populated {
                    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                }

                .elementor-50 .elementor-element.elementor-element-0f531d8>.elementor-element-populated>.elementor-background-overlay {
                    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                }

                .elementor-50 .elementor-element.elementor-element-d22a9a0 ul {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-d22a9a0 ul.menu>li {
                    padding: 0px 20px 0px 20px;
                }

                .elementor-50 .elementor-element.elementor-element-d22a9a0 ul li a {
                    padding: 31px 0px 31px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-d22a9a0 ul.menu>li.current-menu-item>a {
                    color: #292F29;
                }

                .elementor-50 .elementor-element.elementor-element-d22a9a0 {
                    width: auto;
                    max-width: auto;
                }

                .elementor-50 .elementor-element.elementor-element-6c4afa7>.elementor-widget-container {
                    padding: 0px 25px 0px 20px;
                    border-style: solid;
                    border-width: 0px 0px 0px 1px;
                    border-color: #E4E4E4;
                }

                .elementor-50 .elementor-element.elementor-element-6c4afa7 {
                    width: auto;
                    max-width: auto;
                }

                .elementor-50 .elementor-element.elementor-element-b3339d3 .menu-toggle:before {
                    background-color: #292F29;
                }

                .elementor-50 .elementor-element.elementor-element-b3339d3 .menu-toggle span:before {
                    background-color: #292F29;
                }

                .elementor-50 .elementor-element.elementor-element-b3339d3 .menu-toggle:after {
                    background-color: #292F29;
                }

                .elementor-50 .elementor-element.elementor-element-b3339d3>.elementor-widget-container {
                    margin: 0px 20px 0px 0px;
                }

                .elementor-50 .elementor-element.elementor-element-b3339d3 {
                    width: auto;
                    max-width: auto;
                }

                .elementor-bc-flex-widget .elementor-50 .elementor-element.elementor-element-1a162a0.elementor-column .elementor-widget-wrap {
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-1a162a0.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                    align-content: center;
                    align-items: center;
                }

                .elementor-50 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper {
                    display: flex;
                }

                .elementor-50 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button {
                    width: 100%;
                }

                .elementor-50 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button .elementor-button-icon i {
                    font-size: 22px;
                }

                .elementor-50 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button .elementor-button-icon {
                    background-color: #292F29;
                    padding: 13px 13px 13px 13px;
                    border-radius: 50% 50% 50% 50%;
                }

                .elementor-button-wrapper .elementor-button {
                    background-color: #144174;
                }

                .elementor-50 .elementor-element.elementor-element-7eafef1 .elementor-button-wrapper .elementor-button:hover .elementor-button-icon {
                    background-color: #C39E76;
                }

                .elementor-50 .elementor-element.elementor-element-7eafef1 .elementor-button {
                    font-size: 16px;
                    line-height: 1.2em;
                    padding: 22px 38px 22px 38px;
                }

                @media(min-width:768px) {
                    .elementor-50 .elementor-element.elementor-element-18b661d {
                        width: 60%;
                    }

                    .elementor-50 .elementor-element.elementor-element-818cc99 {
                        width: 40%;
                    }

                    .elementor-50 .elementor-element.elementor-element-ca40690 {
                        width: 18.5%;
                    }

                    .elementor-50 .elementor-element.elementor-element-0f531d8 {
                        width: 65.5%;
                    }

                    .elementor-50 .elementor-element.elementor-element-1a162a0 {
                        width: 16%;
                    }
                }

                @media(max-width:1024px) and (min-width:768px) {
                    .elementor-50 .elementor-element.elementor-element-18b661d {
                        width: 100%;
                    }

                    .elementor-50 .elementor-element.elementor-element-818cc99 {
                        width: 100%;
                    }

                    .elementor-50 .elementor-element.elementor-element-ca40690 {
                        width: 25%;
                    }

                    .elementor-50 .elementor-element.elementor-element-0f531d8 {
                        width: 75%;
                    }

                    .elementor-50 .elementor-element.elementor-element-1a162a0 {
                        width: 100%;
                    }
                }

                @media(max-width:1024px) {
                    .elementor-50 .elementor-element.elementor-element-6feebe3 {
                        padding: 0px 20px 0px 20px;
                    }

                    .elementor-50 .elementor-element.elementor-element-ca40690>.elementor-element-populated {
                        padding: 0px 0px 0px 20px;
                    }

                    .elementor-50 .elementor-element.elementor-element-0f531d8.elementor-column>.elementor-widget-wrap {
                        justify-content: flex-end;
                    }

                    .elementor-50 .elementor-element.elementor-element-0f531d8>.elementor-element-populated {
                        padding: 20px 0px 20px 0px;
                    }
                }

                @media(max-width:767px) {
                    .elementor-50 .elementor-element.elementor-element-ca40690 {
                        width: 50%;
                    }

                    .elementor-50 .elementor-element.elementor-element-ca40690>.elementor-element-populated {
                        padding: 0px 0px 0px 10px;
                    }

                    .elementor-50 .elementor-element.elementor-element-0f531d8 {
                        width: 50%;
                    }

                    .elementor-50 .elementor-element.elementor-element-6c4afa7>.elementor-widget-container {
                        border-width: 0px 0px 0px 0px;
                    }
                }
            </style>
            @stack('style')
            <!-- start Header -->
            @include('frontend.components.nav')
            <!-- End Header -->
            @yield('content')
        </div> <!-- /Inside Content -->

        <!-- footer -->
        @include('frontend.components.footer')

        <!-- /body -->
        <script>
            var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?22251';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url;
            var options = {
                "enabled": true,
                "chatButtonSetting": {
                    "backgroundColor": "#00e785",
                    "borderRadius": "25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "80",
                    "ctaIconWATI": false,
                    "position": "right"
                },
                "brandSetting": {
                    "brandName": "Wati",
                    "brandSubTitle": "undefined",
                    "brandImg": "",
                    "welcomeText": "Hi there!\nHow can I help you?",
                    "messageText": "Hello, %0A I have a question about",
                    "backgroundColor": "#00e785",
                    "ctaText": "Chat with us",
                    "borderRadius": "25",
                    "autoShow": false,
                    "phoneNumber": "94777707874"
                }
            };
            s.onload = function() {
                CreateWhatsappChatWidget(options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        </script>
        <!-- Messenger Chat plugin Code -->
        <div id="fb-root"></div>

        <!-- Your Chat plugin code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "116948425040090");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v17.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
</body>
