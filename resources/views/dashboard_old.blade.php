@extends('include.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div id='top-bar-app' class="ipsResponsive_hideDesktop">
            <style>
                .vertical-center {
                    margin: 0;
                    top: 10%;
                }
            </style>
            {{-- <div style="height:45px; background:#056565;">
                <div class='ipsGrid'>
                    <div class='ipsGrid_span2' style="text-align:center ;"><img src="/img/voterapp30.png"
                            style="margin-top:7px"></div>
                    <div class='ipsGrid_span4 vertical-center' style="text-align:left;  margin-left:0px;"><span
                            style="color:#fff; font-size:14px; position:absolute; margin-top:14px;"> Voter Helpline
                            App</span></div>
                    <div class='ipsGrid_span6' style="text-align:right; padding-left:10px;"><a
                            class="ipsButton ipsButton_verySmall ipsButton_primary"
                            href="https://play.google.com/store/apps/details?id=com.eci.citizen&hl=en"
                            style="line-height:25px; background:#083e54;  margin-top:10px; padding-left:10px; padding-right:10px">Android</a>
                        &nbsp;&nbsp;<a class="ipsButton ipsButton_verySmall ipsButton_primary"
                            href="https://apps.apple.com/us/app/voter-helpline/id1456535004"
                            style="line-height:25px; background:#083e54;  margin-top:10px; margin-right: -15px; padding-left:10px; padding-right:10px">iOS</a>
                    </div>
                </div>
            </div>
        </div> --}}
            {{-- <div id='top-bar-screen-reader' class="ipsResponsive_hidePhone">
            <Span class="ipsResponsive_hidePhone">
                <a href="https://hindi.eci.gov.in/" style="color:#fff"> हिंदी में देखें </a> &nbsp; <span
                    style="color:#fff">|</span> &nbsp; <a accesskey="m" href="#elContent" rel="" style="color:#fff"
                    title="{lang=&quot;jump_to_content_desc&quot;}">Skip to main content</a> &nbsp;
                <span style="color:#fff">|</span> &nbsp; <a href="/screen-reader-access/" style="color:#fff"> Screen
                    Reader
                    Access</a> &nbsp; <span style="color:#fff">|</span> &nbsp; <a id="minustext" onclick="resizeText(-1)"
                    rel="" style="cursor:pointer; color:#fff">A-</a> &nbsp; <span style="color:#fff">|</span>
                &nbsp; <a id="plustext" onclick="resizeText(1)" rel="" style=" cursor:pointer;color:#fff">A+</a>
            </span> &nbsp; <span style="color:#fff">|</span> &nbsp;
            <a href='#elNavTheme_menu' id='elNavTheme' data-ipsMenu data-ipsMenu-above
                style=" cursor:pointer;color:#fff">Theme <i class='fa fa-caret-down'></i></a>
            <ul id='elNavTheme_menu' class='ipsMenu ipsMenu_selectable ipsHide'>
                <li class='ipsMenu_item'>
                    <form action="//eci.gov.in/theme/?csrfKey=c4f6c1e7a1dc2b7673f39e1972396267" method="post">
                        <button type='submit' name='id' value='25'
                            class='ipsButton ipsButton_link ipsButton_link_secondary'>High Contrast 4.7 </button>
                    </form>
                </li>
                <li class='ipsMenu_item ipsMenu_itemChecked'>
                    <form action="//eci.gov.in/theme/?csrfKey=c4f6c1e7a1dc2b7673f39e1972396267" method="post">
                        <button type='submit' name='id' value='28'
                            class='ipsButton ipsButton_link ipsButton_link_secondary'>Modern 4.8 (Default)</button>
                    </form>
                </li>
            </ul> 
        </div> --}}
            {{-- <a href="#ipsLayout_mainArea" class="ipsHide" title="Go to main content on this page" accesskey="m">Jump to
            content</a> --}}
            <div id="ipsLayout_header" class="ipsClearfix">
                <header>
                    <div class="ipsLayout_container">
                        <a href='https://eci.gov.in/' id='elLogo' accesskey='1'><img
                                src="https://eci.gov.in/uploads/monthly_2022_06/logo.png.d0e6aee2d64193769bffbc6e720bbe96.png"
                                alt='Election Commission of India'></a>
                        <ul id="elUserNav" class="ipsList_inline cSignedOut ipsResponsive_showDesktop">
                            <li>
                                <div id="elSearchWrapper">
                                    <div id='elSearch' data-controller="core.front.core.quickSearch">
                                        <form accept-charset='utf-8' action='//eci.gov.in/search/?do=quicksearch'
                                            method='post'>
                                            <input type='search' id='elSearchField' placeholder='Search...' name='q'
                                                autocomplete='off' aria-label='Search'>
                                            <details class='cSearchFilter'>
                                                <summary class='cSearchFilter__text'></summary>
                                                <ul class='cSearchFilter__menu'>

                                                    <li><label><input type="radio" name="type" value="all"
                                                                checked><span
                                                                class='cSearchFilter__menuText'>Everywhere</span></label>
                                                    </li>
                                                    <li><label><input type="radio" name="type"
                                                                value="gallery_image"><span
                                                                class='cSearchFilter__menuText'>Images</span></label></li>
                                                    <li><label><input type="radio" name="type"
                                                                value="gallery_album_item"><span
                                                                class='cSearchFilter__menuText'>Albums</span></label></li>
                                                    <li><label><input type="radio" name="type"
                                                                value="downloads_file"><span
                                                                class='cSearchFilter__menuText'>Files</span></label></li>
                                                    <li><label><input type="radio" name="type"
                                                                value="cms_pages_pageitem"><span
                                                                class='cSearchFilter__menuText'>Pages</span></label></li>
                                                    <li><label><input type="radio" name="type"
                                                                value="cms_records2"><span
                                                                class='cSearchFilter__menuText'>FAQs</span></label></li>
                                                    <li><label><input type="radio" name="type"
                                                                value="cms_records18"><span
                                                                class='cSearchFilter__menuText'>Videos</span></label></li>
                                                </ul>
                                            </details>
                                            <button class='cSearchSubmit' type="submit" aria-label='Search'><i
                                                    class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="alerts-border" style="padding: 10px; background: #ffe60a; border-radius: 5px;">
                                <a href="https://hindi.eci.gov.in/" style="font-size:18px; color: #083e54;"><strong>हिंदी
                                        में
                                        देखें</strong></a>
                            </li>
                            <li id="elSignInLink">
                                <a href="https://eci.gov.in/webnetlogin/" data-ipsmenu-closeonclick="false" data-ipsmenu
                                    id="elUserSignIn">
                                    Existing user? Sign In <i class="fa fa-caret-down"></i>
                                </a>

                                <div id='elUserSignIn_menu' class='ipsMenu ipsMenu_auto ipsHide'>
                                    <form accept-charset='utf-8' method='post' action='https://eci.gov.in/webnetlogin/'>
                                        <input type="hidden" name="csrfKey" value="c4f6c1e7a1dc2b7673f39e1972396267">
                                        <input type="hidden" name="ref" value="aHR0cHM6Ly9lY2kuZ292LmluLw==">
                                        <div data-role="loginForm">
                                            <div class="ipsPad ipsForm ipsForm_vertical">
                                                <h4 class="ipsType_sectionHead">Sign In</h4>
                                                <br><br>
                                                <ul class='ipsList_reset'>
                                                    <li class="ipsFieldRow ipsFieldRow_noLabel ipsFieldRow_fullWidth">
                                                        <input type="email" placeholder="Email Address" name="auth"
                                                            autocomplete="email">
                                                    </li>
                                                    <li class="ipsFieldRow ipsFieldRow_noLabel ipsFieldRow_fullWidth">
                                                        <input type="password" placeholder="Password" name="password"
                                                            autocomplete="current-password">
                                                    </li>
                                                    <li class="ipsFieldRow ipsFieldRow_checkbox ipsClearfix">
                                                        <span class="ipsCustomInput">
                                                            <input type="checkbox" name="remember_me"
                                                                id="remember_me_checkbox" value="1" checked
                                                                aria-checked="true">
                                                            <span></span>
                                                        </span>
                                                        <div class="ipsFieldRow_content">
                                                            <label class="ipsFieldRow_label"
                                                                for="remember_me_checkbox">Remember
                                                                me</label>
                                                            <span class="ipsFieldRow_desc">Not recommended on shared
                                                                computers</span>
                                                        </div>
                                                    </li>
                                                    <li class="ipsFieldRow ipsFieldRow_fullWidth">
                                                        <button type="submit" name="_processLogin"
                                                            value="usernamepassword"
                                                            class="ipsButton ipsButton_primary ipsButton_small"
                                                            id="elSignIn_submit">Sign In</button>
                                                        <p class="ipsType_right ipsType_small">
                                                            <a href='https://eci.gov.in/1211lostpassword/' data-ipsDialog
                                                                data-ipsDialog-title='Forgot your password?'>
                                                                Forgot your password?</a>
                                                        </p>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        {{-- <ul class='ipsMobileHamburger ipsList_reset ipsResponsive_hideDesktop'>
                        <li data-ipsDrawer data-ipsDrawer-drawerElem='#elMobileDrawer'>
                            <a href='#'>
                                <i class='fa fa-navicon'></i>
                            </a>
                        </li>
                    </ul> --}}

                    </div>
                </header>
            </div>
            <ul id='elMobileNav' class='ipsResponsive_hideDesktop' data-controller='core.front.core.mobileNav'>
                <li>
                    <a data-action="defaultStream" href='https://eci.gov.in/discover/followed-members/'><i
                            class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                </li>
                <li class='ipsJS_show'>
                    <a href='https://eci.gov.in/search/'><i class='fa fa-search'></i></a>
                </li>
            </ul>
        </div>
        <div class="ta_Slider ipsResponsive_hidePhone ipsResponsive_hideTablet">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/WEBSITE_SLIDER_2.jpg.05abf7477660ad06d5151c5e8ee79e45.jpg">
                        </div>
                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/WEBSITE_SLIDER_3.jpg.ad43a94571c24cc1a8830d7379fe28e8.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDERCHATTISGARH.jpg.dca6bac080c0076b0b292f3d9e00241b.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='3 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/WEBSITE_SLIDER_1.jpg.a276b78cd38e10c5fa5a628d96a488b0.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/WEBSITE_SLIDER_001.jpg.49271eba0ed216fc0d6480d9bde1627e.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDERfoewebsite.jpg.6cd6ad6e932b82d6677f90dedec36e00.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-0">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/WEBSITE_SLIDER_002.jpg.653dd0e0e80c192fdc6a6dbee9842085.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-1">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/nvd2.jpg.12f59fa6b46cdb9c55167faa9714cd0e.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>


                    <div class="swiper-slide slide-Custom-2">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/nvd1.jpg.35271a3ccf08dcd3f22bb8d1ab1336ad.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-3">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/002_31_01_2023.jpg.cbe611d3d951b4901081cf628208c092.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-4">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDERMP.jpg.423255aab9cf4c4a4fe16594acf1ef0a.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-5">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/nvd3.jpg.793136801c3e9e074748b129ec64f8f7.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-6">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/nvd4.jpg.31a258bd9ed0d4cd3ccaa8ba6e33a590.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-7">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDER-International-Conference-230123.jpg.c6d3ad7db17a67c1147d3c09e411f3d0.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-8">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/001_31_01_2023.jpg.086cf79eff5b6fdab0bf156567a6bd97.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                    <div class="swiper-slide slide-Custom-10">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/Slider_commission_1.jpg.6be195cb68449b7c585f5f31cbfdb2e8.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                    <div class="swiper-slide slide-Custom-12">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDER_MIZORAM.jpg.aa6000abcf53561ce63f7065b7a16667.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#000000;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-13">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/Slider-1.jpg.2eb60d853334e46b38af9a58c242a2d9.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-15">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/Slider-171122-9.jpg.1c44934582ded111a8a984cebac7f8ae.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-17">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/Slider-171122-1.jpg.bb9c67d0cec14ab6a5b544596f2e211b.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-18">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/Slider-171122-2.jpg.4555f9d0515375528440532f98d22d67.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-19">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDER_IC1.jpg.758eb641d96df395e3e28189e7d47548.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>

                    <div class="swiper-slide slide-Custom-20">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDER-1.jpg.d29157e36d29eeb8fdc97a5446d8455b.jpg">
                        </div>


                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                    <div class="swiper-slide slide-Custom-21">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/SLIDER-3.jpg.2f5e6f0664825990ff44e5b317e65b9c.jpg">
                        </div>
                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                    <div class="swiper-slide slide-Custom-22">
                        <div class="Ta-lazyPreloader-wrapper" style="background-color: #d8d6d6;">
                            <div class="lazyPreloader-spinner"></div>
                        </div>
                        <div class="swiper-lazy slide-bg"
                            style="background-color: #d8d6d6;  background-size: cover; background-repeat: no-repeat;  background-position: center center;"
                            data-background="https://eci.gov.in/uploads/swiperslider_images/Slider-2.jpg.3d3380e041d47da0a7c6ca048d354681.jpg">
                        </div>
                        <div class="slide-overlay"></div>
                        <div class="slide-contents" style="background-color: rgba(0, 0, 0, 0)"
                            data-swiper-parallax="-20%">
                            <h4 class="ipsType_veryLarge" style="color:#f5f5f5;" data-swiper-parallax="-100%">
                                <span></span>
                            </h4>
                            <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                                data-ipsTruncate-size='4 lines' data-ipsTruncate-type='hide' style="color:#c1c5c7;"
                                data-swiper-parallax="-55%"></section>
                        </div>
                    </div>
                </div>
                <div class="SwiperNav">
                    <div class="swiper-next"></div>
                    <div class="swiper-prev"></div>
                </div>
            </div>
        </div>
        <main id="ipsLayout_body" class="ipsLayout_container">
        </main>
        {{-- <div class="af_Container">
        <div class='af_Column ipsLayout_container af_columnID_1'>
            <div class='ipsColumns ipsColumns_collapseTablet'>
                <div class='ipsColumn af_quicklinksCol af_quicklinksCol_1'>
                    <div class="af_Content">
                        <h3>Quick Links</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break'>
                            <ul class='af_quicklinks'
                                style='-webkit-column-count: 2;-moz-column-count: 2;column-count: 2;'>
                                <li><a href='https://www.nvsp.in/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="Apply for Voter Card">Apply for Voter Card</a></li>
                                <li><a href='https://eci-citizenservices.eci.nic.in/' class='ipsTruncate ipsTruncate_line'
                                        target='blank' title="Public Grievance">Public Grievance</a></li>
                                <li><a href='https://rti.eci.nic.in' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="RTI Online">RTI Online</a></li>
                                <li><a href='https://pprtms.eci.gov.in/' class='ipsTruncate ipsTruncate_line'
                                        target='blank'
                                        title="Political Parties Registration Tracking Management System">Political
                                        Parties Registration Tracking Management System</a></li>
                                <li><a href='https://observerseci.eci.nic.in/' class='ipsTruncate ipsTruncate_line'
                                        target='blank' title="Observer Portal">Observer Portal</a></li>
                                <li><a href='https://cvigil.eci.gov.in/mcc' class='ipsTruncate ipsTruncate_line'
                                        target='blank' title="MCC Cases">MCC Cases</a></li>
                                <li><a href='https://play.google.com/store/apps/details?id=in.nic.eci.cvigil&amp;hl=en_US'
                                        class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="Download cVIGIL">Download cVIGIL</a></li>
                                <li><a href='https://affidavit.eci.gov.in/' class='ipsTruncate ipsTruncate_line'
                                        target='blank' title="Candidate Affidavits">Candidate Affidavits</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class='ipsColumn af_quicklinksCol af_quicklinksCol_2'>
                    <div class="af_Content">
                        <h3>Media & Publications</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break'>
                            <ul class='af_quicklinks'
                                style='-webkit-column-count: 2;-moz-column-count: 2;column-count: 2;'>
                                <li><a href='/files/category/10-current-issues/' class='ipsTruncate ipsTruncate_line'
                                        title="Current Issues">Current
                                        Issues</a></li>
                                <li><a href='/files/category/11-press-releases/' class='ipsTruncate ipsTruncate_line'
                                        title="Press Releases">Press
                                        Releases</a></li>
                                <li><a href='/important-instructions/' class='ipsTruncate ipsTruncate_line'
                                        title="Important Instructions">Important Instructions</a></li>
                                <li><a href='/files/category/3-handbooks/' class='ipsTruncate ipsTruncate_line'
                                        title="Handbooks">Handbooks</a></li>
                                <li><a href='/statistical-report/statistical-reports/'
                                        class='ipsTruncate ipsTruncate_line' title="Results And Statistics">Results
                                        And
                                        Statistics</a></li>
                                <li><a href='/files/category/4-manuals/' class='ipsTruncate ipsTruncate_line'
                                        title="Manuals">Manuals</a></li>
                                <li><a href='/files/category/8-compendium-of-instructions/'
                                        class='ipsTruncate ipsTruncate_line' title="Compendium of Instructions">Compendium
                                        of Instructions</a></li>
                                <li><a href='/files/category/112-eci-publication/' class='ipsTruncate ipsTruncate_line'
                                        title="Library &amp; Publications">Library & Publications</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class='ipsColumn af_quicklinksCol af_quicklinksCol_4'>
                    <div class="af_Content">
                        <h3>ECI Divisions</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break'>
                            <ul class='af_quicklinks'
                                style='-webkit-column-count: 2;-moz-column-count: 2;column-count: 2;'>
                                <li><a href='/divisions-of-eci/communication' class='ipsTruncate ipsTruncate_line'
                                        title="Communication">Communication</a></li>
                                <li><a href='/delimitation-website/index/' class='ipsTruncate ipsTruncate_line'
                                        title="Delimitation">Delimitation</a></li>
                                <li><a href='/candidate-political-parties/expenditure-reports/expenditure-reports/'
                                        class='ipsTruncate ipsTruncate_line' title="Expenditure">Expenditure</a>
                                </li>
                                <li><a href='/divisions-of-eci/international-cooperation/'
                                        class='ipsTruncate ipsTruncate_line'
                                        title="International Cooperation">International Cooperation</a></li>
                                <li><a href='/divisions-of-eci/ict-apps/' class='ipsTruncate ipsTruncate_line'
                                        title="ICT">ICT</a></li>
                                <li><a href='/candidate-political-parties/' class='ipsTruncate ipsTruncate_line'
                                        title="Political Parties">Political Parties</a></li>
                                <li><a href='/divisions-of-eci/eps/' class='ipsTruncate ipsTruncate_line'
                                        title="Election Planning">Election Planning</a></li>
                                <li><a href='/persons-with-disabilities/' class='ipsTruncate ipsTruncate_line'
                                        title="Accessibility &amp; Inclusion">Accessibility & Inclusion</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class='ipsColumn af_quicklinksCol af_quicklinksCol_10'>
                    <div class="af_Content">
                        <h3>Explore More</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break'>
                            <ul class='af_quicklinks'
                                style='-webkit-column-count: 2;-moz-column-count: 2;column-count: 2;'>
                                <li><a href='http://ecisveep.nic.in/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="SVEEP">SVEEP</a></li>
                                <li><a href='http://indiaawebcentre.org/' class='ipsTruncate ipsTruncate_line'
                                        target='blank' title="India A-WEB Centre">India A-WEB Centre</a></li>
                                <li><a href='http://servicevoter.nic.in/' class='ipsTruncate ipsTruncate_line'
                                        target='blank' title="Service Voter Portal">Service Voter Portal</a></li>
                                <li><a href='http://voicenet.in/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="VoiceNet">VoiceNet</a></li>
                                <li><a href='/about/about-eci/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="About ECI">About ECI</a></li>
                                <li><a href='/honble-commission/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="Commission">Commission</a></li>
                                <li><a href='/contact-us/directory/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="Officers Directory">Officers Directory</a></li>
                                <li><a href='/contact-us/contact-us/' class='ipsTruncate ipsTruncate_line' target='blank'
                                        title="Contact Us">Contact Us</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class='af_Column ipsLayout_container af_columnID_4'>

            <div class="af_colSeparator">

                <svg style='fill: #0a2b38;' xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 1200 30"
                    preserveAspectRatio="none">
                    <path
                        d="M0,0S1.209,1.508,200.671,7.031C375.088,15.751,454.658,30,600,30V0H0ZM1200,0s-90.21,1.511-200.671,7.034C824.911,15.751,745.342,30,600,30V0h600Z">
                    </path>
                </svg>

            </div>

            <div class='ipsColumns ipsColumns_collapseTablet' style='background-color: #0a2b38;'>



                <div class='ipsColumn af_customCol af_customCol_11'>
                    <div class="af_Content">
                        <h3>ECI Main Website</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                            data-ipsTruncate-size='5 lines' data-ipsTruncate-type='hide'>

                            <p>
                                <a class="ipsAttachLink ipsAttachLink_left" href="https://eci.gov.in/" rel=""
                                    style="float: left;"><img title="ECI Website" alt="ECI Main website"
                                        class="ipsImage" height="180" style="width: 120px; height: auto;"
                                        width="200"
                                        data-src="https://eci.gov.in/uploads/monthly_2018_10/eci-logo.png.2e8f591ce7b8147f8f3148bcd50de79e.png"
                                        src="https://eci.gov.in/applications/core/interface/js/spacer.png"></a>The
                                Election Commission of India is an autonomous constitutional authority responsible for
                                administering election processes in India. The body administers elections to the Lok
                                Sabha, Rajya Sabha, State Legislative Assemblies in India, and the offices of the
                                President and Vice President in the country. The Election Commission operates under the
                                authority of Constitution per Article 324, and subsequently enacted Representation of
                                the People Act.
                            </p>
                        </section>
                    </div>
                </div>
                <div class='ipsColumn af_downloadsCol af_downloadsCol_12'>
                    <div class="af_Content">
                        <h3>Latest Publication</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break'>
                            <ul class="af_Downloads">
                                <li>
                                    <div class='af_itemsThumb'>
                                        <span>
                                            <span class=' ipsNoThumb ipsThumb ipsThumb_medium'></span>
                                        </span>
                                    </div>
                                    <div class='af_itemsTitle'>
                                        <span>
                                            <a href='https://eci.gov.in/files/file/15437-electing-the-first-citizen/'
                                                class='ipsTruncate ipsTruncate_line'
                                                title='View the file Electing the First Citizen'>Electing the First
                                                Citizen</a>
                                            <span class='af_itemsMeta'>By
                                                ECI</span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class='af_itemsThumb'>
                                        <span>
                                            <span class=' ipsNoThumb ipsThumb ipsThumb_medium'></span>
                                        </span>
                                    </div>
                                    <div class='af_itemsTitle'>
                                        <span>
                                            <a href='https://eci.gov.in/files/file/15298-observer-hand-book-september-2023vol-123/'
                                                class='ipsTruncate ipsTruncate_line'
                                                title='View the file Observer Hand Book September 2023(VOL 1,2&amp;3)'>Observer
                                                Hand Book September 2023(VOL 1,2&amp;3)</a>
                                            <span class='af_itemsMeta'>By
                                                ECI</span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class='af_itemsThumb'>
                                        <span>
                                            <span
                                                style='background-image: url( "https://eci.gov.in/uploads/monthly_2023_08/CLRO.thumb.jpeg.ac9ad866c1980fb788d16383c52743e3.jpeg" )'
                                                class=' ipsThumb ipsThumb_medium ipsThumb_bg'>
                                                <img src='https://eci.gov.in/uploads/monthly_2023_08/CLRO.thumb.jpeg.ac9ad866c1980fb788d16383c52743e3.jpeg'
                                                    alt=''>
                                            </span>
                                        </span>
                                    </div>
                                    <div class='af_itemsTitle'>
                                        <span>
                                            <a href='https://eci.gov.in/files/file/15256-checklist-for-returning-officer-2023/'
                                                class='ipsTruncate ipsTruncate_line'
                                                title='View the file CHECKLIST FOR RETURNING OFFICER, 2023'>CHECKLIST
                                                FOR RETURNING OFFICER, 2023</a>
                                            <span class='af_itemsMeta'>By
                                                Sanjeev Kumar Prasad,Secretary</span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class='ipsColumn af_downloadsCol af_downloadsCol_13'>
                    <div class="af_Content">
                        <h3>Forms Download</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break'>
                            <ul class="af_Downloads">
                                <li>
                                    <div class='af_itemsThumb'>
                                        <span>
                                            <span
                                                class="af_itemsStatus ipsBadge ipsBadge_icon ipsBadge_small ipsBadge_positive"
                                                data-ipsTooltip title='Pinned'><i class='fa fa-thumb-tack'></i></span>
                                            <span class=' ipsNoThumb ipsThumb ipsThumb_medium'></span>
                                        </span>
                                    </div>
                                    <div class='af_itemsTitle'>
                                        <span>
                                            <a href='https://eci.gov.in/files/file/14359-form-6b-letter-of-information-of-aadhaar-number-for-the-purpose-of-electoral-roll-authentication/'
                                                class='ipsTruncate ipsTruncate_line'
                                                title='View the file Form 6B - Letter of Information of Aadhaar number for the purpose of electoral roll authentication'>Form
                                                6B - Letter of Information of Aadhaar number for the purpose of
                                                electoral roll authentication</a>
                                            <span class='af_itemsMeta'>By
                                                ECI-IT</span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class='af_itemsThumb'>
                                        <span>
                                            <span
                                                class="af_itemsStatus ipsBadge ipsBadge_icon ipsBadge_small ipsBadge_positive"
                                                data-ipsTooltip title='Pinned'><i class='fa fa-thumb-tack'></i></span>
                                            <span
                                                class="af_itemsStatus ipsBadge ipsBadge_icon ipsBadge_small ipsBadge_positive"
                                                data-ipsTooltip title='Featured'><i class='fa fa-star'></i></span>
                                            <span class=' ipsNoThumb ipsThumb ipsThumb_medium'></span>
                                        </span>
                                    </div>
                                    <div class='af_itemsTitle'>
                                        <span>
                                            <a href='https://eci.gov.in/files/file/4843-form-6-application-form-for-new-voters/'
                                                class='ipsTruncate ipsTruncate_line'
                                                title='View the file Form 6 - Application Form for New Voters'>Form 6
                                                -
                                                Application Form for New Voters</a>
                                            <span class='af_itemsMeta'>By
                                                ECI-IT</span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class='af_itemsThumb'>
                                        <span>
                                            <span
                                                class="af_itemsStatus ipsBadge ipsBadge_icon ipsBadge_small ipsBadge_positive"
                                                data-ipsTooltip title='Pinned'><i class='fa fa-thumb-tack'></i></span>
                                            <span class=' ipsNoThumb ipsThumb ipsThumb_medium'></span>
                                        </span>
                                    </div>
                                    <div class='af_itemsTitle'>
                                        <span>
                                            <a href='https://eci.gov.in/files/file/4834-form-6a-application-for-inclusion-of-name-in-electoral-roll-by-an-overseas-indian-elector/'
                                                class='ipsTruncate ipsTruncate_line'
                                                title='View the file Form 6A - Application for inclusion of name in Electoral Roll by an overseas Indian elector.'>Form
                                                6A - Application for inclusion of name in Electoral Roll by an overseas
                                                Indian elector.</a>
                                            <span class='af_itemsMeta'>By
                                                ECI-IT</span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                {{-- <div class='ipsColumn af_customCol af_customCol_15'>
                    <div class="af_Content">
                        <h3>Voter Helpline App</h3>
                        <section class='ipsType_normal ipsType_richText ipsType_break' data-ipsTruncate
                            data-ipsTruncate-size='5 lines' data-ipsTruncate-type='hide'>
                            <p>
                                <a class="ipsAttachLink ipsAttachLink_left"
                                    href="https://play.google.com/store/apps/details?id=com.eci.citizen&amp;hl=en"
                                    rel="external nofollow" style="float: left;"><img
                                        title="Scan to download Voter Helpline App" alt="Voter Helpline"
                                        class="ipsImage ipsImage_thumbnailed" data-extension="core_Attachment"
                                        data-fileid="118" data-unique="cexgozu84" style="width: 120px; height: auto;"
                                        data-src="https://eci.gov.in/uploads/monthly_2019_01/frame.png.26c1e19c63f59899a2e937fff764ce0f.png"
                                        src="https://eci.gov.in/applications/core/interface/js/spacer.png"></a>Download
                                our Mobile App <strong>'<a
                                        href="https://play.google.com/store/apps/details?id=com.eci.citizen&amp;hl=en"
                                        rel="external nofollow">Voter Helpline</a>'</strong> from <a
                                    href="https://play.google.com/store/apps/details?id=com.eci.citizen&amp;hl=en"
                                    rel="external nofollow">Play Store</a> and <a
                                    href="https://apps.apple.com/us/app/voter-helpline/id1456535004"
                                    rel="external nofollow">App Store</a>. The App 'Voter Helpline' provides you easy
                                searching of your name in Electoral Roll, filling up online forms, knowing about
                                Elections, and most importantly, lodging grievance. You will have access to everything
                                about Election Commission of India. You can view the latest Press release, Current News,
                                Events, Gallery and much more. You can also track your form application and status of
                                your grievance. Click here to download. Don't forget to give your feedback from the link
                                provided within the Application.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="ipsLayout_footer" class="ipsClearfix">
        <div class="ipsLayout_container">
            <ul id='elFooterSocialLinks' class='ipsList_inline ipsType_center ipsSpacer_top'>
                <li class='cUserNav_icon'>
                    <a href='https://www.facebook.com/eci/' target='_blank' class='cShareLink cShareLink_facebook'
                        rel='noopener noreferrer' title='facebook'><i class='fa fa-facebook'></i></a>
                </li>
                <li class='cUserNav_icon'>
                    <a href='https://www.youtube.com/eci/' target='_blank' class='cShareLink cShareLink_youtube'
                        rel='noopener noreferrer' title='youtube'><i class='fa fa-youtube'></i></a>
                </li>
                <li class='cUserNav_icon'>
                    <a href='https://twitter.com/ECISVEEP' target='_blank' class='cShareLink cShareLink_twitter'
                        rel='noopener noreferrer' title='twitter'><i class='fa fa-twitter'></i></a>
                </li>
                <li class='cUserNav_icon'>
                    <a href='https://www.instagram.com/ecisveep/' target='_blank' class='cShareLink cShareLink_instagram'
                        rel='noopener noreferrer' title='instagram'><i class='fa fa-instagram'></i></a>
                </li>
            </ul>
            {{-- <ul class='ipsList_inline ipsType_center ipsSpacer_top' id="elFooterLinks">
                <li>
                    <a href='#elNavTheme_menu' id='elNavTheme' data-ipsMenu data-ipsMenu-above>Theme <i
                            class='fa fa-caret-down'></i></a>
                    <ul id='elNavTheme_menu' class='ipsMenu ipsMenu_selectable ipsHide'>

                        <li class='ipsMenu_item'>
                            <form action="//eci.gov.in/theme/?csrfKey=c4f6c1e7a1dc2b7673f39e1972396267" method="post">
                                <input type="hidden" name="ref" value="aHR0cHM6Ly9lY2kuZ292LmluLw==">
                                <button type='submit' name='id' value='25'
                                    class='ipsButton ipsButton_link ipsButton_link_secondary'>High Contrast 4.7
                                </button>
                            </form>
                        </li>
                        <li class='ipsMenu_item ipsMenu_itemChecked'>
                            <form action="//eci.gov.in/theme/?csrfKey=c4f6c1e7a1dc2b7673f39e1972396267" method="post">
                                <input type="hidden" name="ref" value="aHR0cHM6Ly9lY2kuZ292LmluLw==">
                                <button type='submit' name='id' value='28'
                                    class='ipsButton ipsButton_link ipsButton_link_secondary'>Modern 4.8
                                    (Default)</button>
                            </form>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href='/website-policy/privacy-policy-r5/'>Privacy Policy</a>
                </li>
                <li>
                    <a href='/website-policy/copyright-r4/'>Content Copyright</a>
                </li>
                <li>
                    <a href='/website-policy/hyperlinking-policy-r3/'>Content Hyperlinking</a>
                </li>
                <li>
                    <a href='/website-policy/terms-conditions-r2/'>Terms &amp; Conditions</a>
                </li>
                <li>
                    <a href='/website-policy/abbreviationsacronym-r1/'>Abbreviations</a>
                </li>
                <li>
                    <a href='/sitemap/'>Site Map</a>
                </li>
            </ul>
            <div id="elCopyright" class="ipsType_center ipsSpacer_top" style="text-align:center;font-size: 11px;">
                <a href="https://eci.gov.in/divisions-of-eci/ict-apps/" target="_blank">Made in ECI</a>
            </div> 
       <p id='elCopyright'>
                    <span id='elCopyright_userLine'>© Copyright Election Commission of India<br> Current version of
                        website
                        updated on 24.02.2020</span>
                </p>
             </div>
        </footer>
        <div id='elMobileDrawer' class='ipsDrawer ipsHide'>
            <div class='ipsDrawer_menu'>
                <a href='#' class='ipsDrawer_close' data-action='close'><span>&times;</span></a>
                <div class='ipsDrawer_content ipsFlex ipsFlex-fd:column'>
                    <div class='ipsPadding'>
                    </div>
                    <ul class='ipsDrawer_list ipsFlex-flex:11'>
                        <li><a href='https://eci.gov.in'>Home</a></li>
                        <li><a href='https://eci.gov.in/candidate-political-parties/instructions-on-covid-19/'>Instructions
                                on Covid-19</a></li>
                        <li><a href='https://eci.gov.in/files/category/10-current-issues/'>Current Issues</a></li>
                        <li><a href='https://eci.gov.in/files/category/11-press-releases/'>Press Releases</a></li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>Electors</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li><a href='https://eci.gov.in/voter/voter/'>Electors</a></li>
                                <li>
                                    <a href='https://voterportal.eci.gov.in/' target='_blank' rel="noopener">
                                        Register to Vote
                                    </a>
                                </li>
                                <li>
                                    <a href='https://voterportal.eci.gov.in/' target='_blank' rel="noopener">
                                        Track Your Application
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/electoral-roll/forms/'>
                                        Download Forms
                                    </a>
                                </li>
                                <li>
                                    <a href='http://servicevoter.nic.in/' target='_blank' rel="noopener">
                                        Service Voters
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/voter/overseas-electors/'>
                                        Overseas Electors
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/persons-with-disabilities/'>
                                        Persons with Disabilities
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/electoral-roll/electoral-roll/'>
                                        Electoral Roll
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci-citizenservices.eci.nic.in/' target='_blank' rel="noopener">
                                        Lodge a Complain
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/faqs/'>
                                        FAQs
                                    </a>
                                </li>
                                <li>
                                    <a href='http://ecisveep.nic.in' target='_blank' rel="noopener">
                                        Voter Education
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>Elections</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li><a href='https://eci.gov.in/elections/election/'>Elections</a></li>
                                <li>
                                    <a href='https://eci.gov.in/elections/currentelections/'>
                                        Current Elections
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/elections/future-elections/'>
                                        Future Elections
                                    </a>
                                </li>
                                <li class='ipsDrawer_itemParent'>
                                    <h4 class='ipsDrawer_title'><a href='#'>Past Elections</a></h4>
                                    <ul class='ipsDrawer_list'>
                                        <li data-action="back"><a href='#'>Back</a></li>
                                        <li>
                                            <a href='https://eci.gov.in/assembly-election/assembly-election/'>
                                                Assembly Election
                                            </a>
                                        </li>
                                        <li>
                                            <a href='https://eci.gov.in/general-election/general-election/'>
                                                General Election
                                            </a>
                                        </li>
                                        <li>
                                            <a href='https://eci.gov.in/bye-election/bye-elections/'>
                                                Bye Elections
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/statistical-report/election-results/'>
                                        Results and Statistics
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/elections/term-of-houses/'>
                                        Term of the Houses
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/electoral-roll/electoral-roll/'>
                                        Electoral Roll
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/election-laws/election-law/'>
                                        Election Law
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/mcc/'>
                                        Model Code of Conduct
                                    </a>
                                </li>
                                <li class='ipsDrawer_itemParent'>
                                    <h4 class='ipsDrawer_title'><a href='#'>Judicial Reference</a></h4>
                                    <ul class='ipsDrawer_list'>
                                        <li data-action="back"><a href='#'>Back</a></li>
                                        <li>
                                            <a href='https://eci.gov.in/files/category/15-office-of-profit/'>
                                                Office of Profit (Reference Cases)
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href='https://eci.gov.in/files/category/16-orders-notices-model-code-of-conduct/'>
                                                Model Code of Conduct
                                            </a>
                                        </li>
                                        <li>
                                            <a href='https://eci.gov.in/files/category/17-orders-notices-miscellaneous/'>
                                                Miscellaneous
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/election-manifestos/'>
                                        Election Manifestos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>EVM/VVPAT</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li><a href='https://eci.gov.in/evm/'>EVM/VVPAT</a></li>
                                <li>
                                    <a
                                        href='https://eci.gov.in/files/file/9228-evm-credibility-technological-and-administrative-safeguards/'>
                                        Presentation on EVM
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/files/file/8756-status-paper-on-evm-edition-3/'>
                                        Status Paper on EVM
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/faqs/evm/general-qa/electronic-voting-machine-r17/'>
                                        FAQs on EVM
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href='https://eci.gov.in/files/file/15217-manual-on-electronic-voting-machine-and-vvpat-edition-8-august-2023/'>
                                        Manual on EVM and VVPAT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>Candidate / Political Party</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li><a href='https://eci.gov.in/candidate-political-parties/candidate-politicalparties/'>Candidate
                                        / Political Party</a></li>
                                <li>
                                    <a href='https://eci.gov.in/candidate-political-parties/nomination-related-forms/'>
                                        Candidate Nomination & other Forms
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href='https://eci.gov.in/candidate-political-parties/link-to-candidate-affidavits/'>
                                        Links to Candidate Affidavits
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href='https://eci.gov.in/candidate-political-parties/political-parties-registration/'>
                                        Political Parties Registration
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/candidate-political-parties/election-symbol/'>
                                        Political Parties & Election Symbol
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/candidate-political-parties/instructions-on-covid-19/'>
                                        Instructions on Covid-19
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>Media & Publication</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li><a href='https://eci.gov.in/media-publication/media-publication/'>Media &
                                        Publication</a></li>
                                <li>
                                    <a href='https://eci.gov.in/statistical-report/statistical-reports/'>
                                        Election Results & Statics
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/media-publication/publication/'>
                                        ECI Publications
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/files/category/8-compendium-of-instructions/'>
                                        Compendium of Instructions
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/election-laws/election-law/'>
                                        Election Law
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/files/category/1581-pocket-books/'>
                                        Electoral Statistics Pocket Books
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>About ECI</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li><a href='https://eci.gov.in/about/about-eci/'>About ECI</a></li>
                                <li>
                                    <a href='https://eci.gov.in/divisions-of-eci/divisions-of-eci/'>
                                        Divisions of ECI
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/contact-us/directory/'>
                                        ECI Officials Contact Details
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/contact-us/contact-us/'>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href='https://eci.gov.in/gallery/'>Gallery</a></li>
                        <li class='ipsDrawer_itemParent'>
                            <h4 class='ipsDrawer_title'><a href='#'>For ECI Officials</a></h4>
                            <ul class='ipsDrawer_list'>
                                <li data-action="back"><a href='#'>Back</a></li>
                                <li>
                                    <a href='https://eci.gov.in/eci-officials/'>
                                        Quick Links for ECI Officials
                                    </a>
                                </li>
                                <li>
                                    <a href='https://eci.gov.in/important-instructions/'>
                                        Important Instructions
                                    </a>
                                </li>
                            </ul>
                        </li>








                        <li><a href='https://hindi.eci.gov.in/'>हिंदी में देखें </a></li>




                    </ul>


                </div>
            </div>
        </div>

        <div id='elMobileCreateMenuDrawer' class='ipsDrawer ipsHide'>
            <div class='ipsDrawer_menu'>
                <a href='#' class='ipsDrawer_close' data-action='close'><span>&times;</span></a>
                <div class='ipsDrawer_content ipsSpacer_bottom ipsPad'>
                    <ul class='ipsDrawer_list'>
                        <li class="ipsDrawer_listTitle ipsType_reset">Create New...</li>

                    </ul>
                </div>
            </div>
        </div> 
    </div> --}}
    @endsection
