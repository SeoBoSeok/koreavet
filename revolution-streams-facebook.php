<?php
	// FACEBOOK CONNECT STREAM CLASS
	require_once 'js/plugins/revolution/php/facebook/class-facebook.php';
	$facebook = new TP_facebook();

	// FACEBOOK PAGE
	$user_id = $facebook->get_user_from_url('https://www.facebook.com/inspirationfeed');

	// API DATA
	// Create App ID and Secret -> https://developers.facebook.com/apps/?action=create
	$app_id = 'YOUR_APP_ID';
	$app_secret = 'YOUR_APP_SECRET';

	// GET POSTS
	$post_feed = $facebook->get_post_feed($user_id,$app_id,$app_secret,5);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="INSPIRO" />
        <meta name="description" content="Themeforest Template Polo">
        <!-- Document title -->
        <title>POLO | The Multi-Purpose HTML5 Template</title>
        <!-- Stylesheets & Fonts --><link href="css/plugins.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- LOAD JQUERY LIBRARY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

        <!-- LOADING FONTS AND ICONS -->
        <link href="http://fonts.googleapis.com/css?family=Quicksand:400%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all">

        <link rel="stylesheet" type="text/css" href="js/plugins/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="js/plugins/revolution/fonts/font-awesome/css/font-awesome.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/settings.css">



        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- PARTICLES ADD-ON FILES -->
        <link rel='stylesheet' href='js/plugins/revolution/revolution-addons/particles/css/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
        <script type='text/javascript' src='js/plugins/revolution/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    </head>

    <body>
        <!-- Body Inner -->    <div class="body-inner">


            <!-- Header -->
            <header id="header">
                <div class="header-inner">
                    <div class="container">
                        <!--Logo-->
                        <div id="logo">
                            <a href="index.html" class="logo" data-src-dark="images/logo-dark.png">
                                <img src="images/logo.png" alt="Polo Logo">
                            </a>
                        </div>
                        <!--End: Logo-->

                                            <!-- Search -->
                    <div id="search">
                        <div id="search-logo"><img src="images/logo.png" alt="Polo Logo"></div>
                        <button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></button>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Search..."
                                autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>

                        <div class="search-suggestion-wrapper">


                            <div class="search-suggestion">
                                <h3>News Articles</h3>
                                <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                                <p><a href="#">New costs and rise of the economy!</a></p>
                                <p><a href="#">A true story, that never been told!</a></p>
                            </div>
                            <div class="search-suggestion">
                                <h3>Looking for these?</h3>
                                <p><a href="#">New costs and rise of the economy!</a></p>
                                <p><a href="#">AI can be trusted to take answer calls </a></p>
                                <p><a href="#">Polo now lets you easily create any beautiful clean website</a></p>
                            </div>
                            <div class="search-suggestion">
                                <h3>Blog Posts</h3>
                                <p><a href="#">A true story, that never been told!</a></p>
                                <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                                <p><a href="#">The most happiest time of the day!</a></p>
                            </div>


                        </div>
                    </div>
                    <!-- end: search -->

                        <!--Header Extras-->
                        <div class="header-extras">
                            <ul>
                                                            <li>
                                <!--search icon-->
                                <a id="btn-search" href="#"> <i class="icon-search1"></i></a>
                                <!--end: search icon-->
                            </li>
                                <li class="d-none d-sm-block">
                                    <!--shopping cart-->
                                    <div id="shopping-cart" class="p-dropdown">
                                    <a href="shop-cart.html"><span class="shopping-cart-items">8</span><i
                                            class="icon-shopping-cart1"></i></a>
                                    <div class="p-dropdown-content ">
                                        <div class="widget-mycart">
                                            <h4>My Cart</h4>
                                            <div class="cart-item">
                                                <div class="cart-image"> <a href="#"><img
                                                            src="images/shop/products/10.jpg"></a></div>
                                                <div class="cart-product-meta">
                                                    <a href="#">Bolt Sweatshirt</a>
                                                    <span>3 x 28$</span>
                                                </div>
                                                <div class="cart-item-remove">
                                                    <a href="#"><i class="icon-x"></i></a></div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-image"> <a href="#"><img
                                                            src="images/shop/products/11.jpg"></a></div>
                                                <div class="cart-product-meta">
                                                    <a href="#">Yellow Sweatshirt</a>
                                                    <span>1 x 18$</span>
                                                </div>
                                                <div class="cart-item-remove">
                                                    <a href="#"><i class="icon-x"></i></a></div>
                                            </div>
                                            <hr>
                                            <div class="cart-total">
                                                <div class="cart-total-labels">
                                                    <span>Subtotal</span>
                                                    <span>Taxes</span>
                                                    <span><strong>Total</strong></span>
                                                </div>
                                                <div class="cart-total-prices">
                                                    <span>320$</span>
                                                    <span>8%</span>
                                                    <span><strong>385$</strong></span>
                                                </div>

                                            </div>
                                            <div class="cart-buttons text-right">
                                                <button class="btn btn-xs">Checkout</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!--end: shopping cart-->
                                </li>
                                <li>
                                    <div class="p-dropdown">
                                    <a href="#"><i class="icon-flag11"></i></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                </li>
                            </ul>
                        </div>
                        <!--end: Header Extras-->

                        <!--Navigation Resposnive Trigger-->
                        <div id="mainMenu-trigger">
                            <button class="lines-button x"> <span class="lines"></span> </button>
                        </div>
                        <!--end: Navigation Resposnive Trigger-->


                        <!--Navigation-->
                        <div id="mainMenu" class="light">
                            <div class="container">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li class="dropdown"> <a href="#">Layout</a>
                                        <ul class="dropdown-menu">
											<li class="dropdown-submenu"><a href="#">Topbar</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-topbar.html">Light</a></li>
                                                            <li><a href="header-topbar-dark.html">Dark</a></li>
                                                            <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                            <li><a href="header-topbar-colored.html">Colored</a></li>
                                                            <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                             </li>									
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-colored.html">Colored</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                            <li><a href="header-modern-colored.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                        <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                        <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
<ul class="dropdown-menu">
                                                                                                                        <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed Logo</a></li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive Logo</a></li>
                                                        </ul>
</li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
													<li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-slide.html">Slide Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a> </li>
                                                    <li><a href="page-title-video.html">Video background</a> </li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a> </li>
                                                    <li><a href="page-title-background-color.html">Colored background</a> </li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                            <li><a href="page-menu-rounded.html">Rounded</a></li>
                            <li><a href="page-menu-outline.html">Outline</a></li>
                            <li><a href="page-menu-lines.html">Lines</a></li>
                            <li><a href="page-menu-solid.html">Solid</a> </li>
                            <li><a href="page-menu-light.html">Light</a> </li>
                            <li><a href="page-menu-dark.html">Dark</a> </li>
                            <li><a href="page-menu-creative.html">Creative</a> </li>
<li><a href="page-menu.html">Dropdown</a></li>
                                                    
                                                </ul>
                                            </li>
											<li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a> </li>
<li><a href="sidebar.html">Left aligned</a> </li>
                                                    <li><a href="sidebar-right.html">Right aligned</a> </li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a> </li>
                                                    <li><a href="sidebar-modern.html">Modern</a> </li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a> </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a> </li>
													<li><a href="footer-dark.html#footer">Dark</a> </li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a> </li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a> </li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a> </li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a> </li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>                                                    
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                </ul>
                                            </li><li class="dropdown-submenu"><a href="#">Options</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Boxed</a></li>
                                                        <li><a href="#">Wide</a></li>
                                                        <li><a href="#">Modern</a></li>
                                                        <li><a href="#">Border</a></li>
                                                        </ul>
                                                    </li> 
<li><a href="preview/index.html">Layout Demos<span class="badge badge-primary">200+</span></a></li> </ul>
                                    </li>
									<li class="dropdown"> <a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets </a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                                                                        <li><a href="modal-auto-open-subscription.html">Subscription</a></li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
<li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a> </li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="badge badge-danger">NEW</span></a> </li>
                                                    <li><a href="#">Label (hot)<span class="badge badge-danger">HOT</span></a> </li>
                                                    <li><a href="#">Label (popular)<span class="badge badge-success">POPULAR</span></a> </li>
                                                    <li><a href="#">Label (sale)<span class="badge badge-warning">SALE</span></a> </li>
                                                    <li><a href="#">Label (info)<span class="badge badge-info">INFO</span></a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                        <li class="dropdown mega-menu-item"> <a href="#">Elements</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="shortcode-according.html"> <i class="fa fa-list-ul"></i>Accordions</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shortcode-alerts.html"> <i class="fa fa-exclamation-circle"></i>Alerts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shortcode-animations.html"> <i class="fa fa-magic"></i>Animations</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shortcode-audio-video.html"> <i class="fa fa-play-circle"></i> Audio & Video</a>
                                                                </li>
                                                                <li>
                                                                <a href="shortcode-blockquotes.html"> <i class="fa fa-quote-right"></i>Blockquotes</a>
                                                            </li>
<li>
                                                                <a href="component-bootstrap-switch.html"> <i class="fas fa-toggle-off"></i>BS Switch<span class="badge badge-danger">NEW</span></a>
                                                            </li>
<li>
                                                                <a href="component-bootstrap-notify.html"> <i class="fas fa-flag-checkered"></i>BS Notify<span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                                <li>
                                                                    <a href="shortcode-breadcrumbs.html"> <i class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                                </li>
                                                                <li> <a href="shortcode-buttons.html"> <i class="fas fa-external-link-square-alt"></i>Buttons</a> </li>
<li> <a href="component-charts-chartjs.html"> <i class="fas fa-chart-bar"></i>Charts <span class="badge badge-danger">NEW</span></a> </li>
                                                                                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
<li> <a href="component-calendar.html"> <i class="far fa-calendar-alt"></i>Calendar <span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-client-logo.html"> <i class="far fa-gem"></i>Clients logos</a></li>
                                                            <li>
                                                                <a href="shortcode-calltoaction.html"> <i class="fa fa-plus-square"></i>Call to action</a>
                                                            </li>
                                                                <li>
                                                                    <a href="shortcode-carousel.html"> <i class="fas fa-exchange-alt"></i>Carousel</a>
                                                                </li>

                                                                <li>
                                                                    <a href="shortcode-code.html"> <i class="fa fa-code"></i>Code</a>
                                                                </li>
                                                                <li>
                                                                <a href="shortcode-countdown-timer.html"> <i class="far fa-clock"></i>Countdown Timers</a>
                                                            </li>
<li>
                                                                <a href="shortcode-countdown.html"> <i class="fa fa-stopwatch"></i>Countdown <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                                <li><a href="shortcode-counters.html"> <i class="fas fa-sort-numeric-down "></i>Counter Numbers</a></li>
<li> <a href="component-datatable.html"> <i class="fa fa-table"></i>Data Tables <span class="badge badge-danger">NEW</span></a></li><li>
                                                                <a href="component-daterangepicker.html"><i class="fa fa-calendar-alt"></i>Date & Time Pickers</a>
                                                            </li>
 
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <ul>
<li>
                                                                <a href="shortcode-dropcat-highlight.html"> <i class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                            </li>
<li>
                                                                <a href="shortcode-dropdowns.html"> <i class="fa  fa-lightbulb"></i>Dropdown <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-team-members.html"> <i class="fa fa-users"></i>Team members</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-forms.html"> <i class="fa fa-align-justify"></i>Forms</a>
                                                            </li>
                                                            <li>
<a href="shortcode-grid.html"><i class="fa fa-th"></i>Grid System</a></li>
<li>
<a href="shortcode-heading-styles.html"><i class="fa fa-heading"></i>Heading Styles</a>
</li>
                                                            <li>
                                                                <a href="shortcode-icon-boxes.html"> <i class="fa fa-bullseye"></i>Icon Boxes</a>
                                                            </li>
                                                                <li>
                                                                <a href="shortcode-icon-lists.html"> <i class="fa fa-flag"></i>Icons
</a>
                                                            </li>
                                                                <li>
                                                                    <a href="shortcode-images.html"> <i class="far fa-image"></i>Images</a>
                                                                </li> <li>
                                                                <a href="shortcode-labels-badgets.html"> <i class="fa fa-check-square"></i>Labels and Badges</a>
                                                            </li>

                                                                

                                                        </ul>

                                                    </div>

                                                    <div class="col-lg-2">

                                                        <ul>
                                                                                                                            <li>
                                                                <a href="shortcode-lightbox.html"> <i class="fa fa-arrows-alt"></i>Lightbox</a>
                                                            </li>
<li>
                                                                <a href="shortcode-lists.html"> <i
                                                                        class="fa fa-th-list"></i>Lists & Bullet
                                                                    lists</a>
                                                            </li> <li>

                                                                <a href="shortcode-maps.html"> <i class="fa fa-compass"></i>Maps</a>

                                                            </li>
                                                            <li>

                                                                <a href="shortcode-modal.html"> <i class="fa fa-search-plus"></i>Modal</a>

                                                            </li>
<li>
                                                                <a href="shortcode-modal-strip.html"> <i class="fas fa-bolt"></i>Modal Strip</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-navs.html"> <i class="fa fa-bars"></i>Navbar & Navs</a>
                                                            </li>
                                                                <li>
                                                                    <a href="shortcode-paginations.html"> <i class="fa fa-arrow-circle-right"></i>Pagination & Pager</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shortcode-panels.html"> <i class="fa fa-list-alt"></i>Panels</a>
                                                                </li>
                                                                <li> <a href="shortcode-pie-chart.html"><i class="fas fa-chart-pie"></i>Pie charts</a> </li>
                                                                <li> <a href="shortcode-popover-tooltip.html"><i class="far fa-lightbulb"></i>Popover & tooltips</a> </li>
                                                                
                                                                
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul><li> <a href="shortcode-pricing-table.html"><i class="fas fa-dollar-sign"></i>Pricing
                                                                    tables</a> </li>
<li>
                                                                <a href="shortcode-progress-bar.html"> <i class="fa fa-align-left"></i>Progress bars</a>
                                                            </li>
 <li>
                                                                <a href="shortcode-parallax.html"> <i class="fa fa-gift"></i>Parallax</a>
                                                            </li>
<li>
                                                                <a href="shortcode-particles.html"> <i class="fab fa-connectdevelop"></i>Particles <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-responsive-utilities.html"> <i class="fa fa-laptop"></i>Responsive utilities</a>
                                                            </li>
<li>
                                                                <a href="component-ion-range-slider.html"> <i class="fas fa-exchange-alt"></i>Range Slider<span class="badge badge-danger">NEW</span></a>
                                                            </li>

                                                                <li>
                                                                    <a href="shortcode-sections.html"> <i class="fa fa-bookmark"></i>Sections</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shortcode-smooth-scrolling.html"> <i class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                                </li>
                                                                <li>
                                                                <a href="shortcode-social-icons.html"> <i class="fab fa-facebook"></i>Social Icons</a>
                                                            </li>
<li>

                                                                <a href="component-toggles-radio-checkboxes.html"> <i class="fas fa-toggle-on"></i>Switch Toggle<span class="badge badge-danger">NEW</span></a>

                                                            </li>
                                                                
                                                                
                                                                                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
<li>
<a href="shortcode-tables.html"> <i class="fa fa-table"></i>Tables</a></li>
<li>
                                                                <a href="shortcode-textbox.html"> <i class="fa fa-star"></i>Text
                                                                    Boxes</a>
                                                            </li>
<li><a href="shortcode-tabs.html"> <i class="fa fa-indent"></i>Tabs</a>
</li>                                                            <li>
                                                                <a href="shortcode-testimonial.html"> <i class="fa fa-question-circle"></i>Testimonials</a>
                                                            </li>

                                                                <li>
                                                                    <a href="shortcode-toggles.html"> <i class="fa fa-toggle-on"></i>Toggles</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shortcode-typography.html"> <i class="fa fa-font"></i>Typography</a>
                                                                </li>
                                                                <li>
                                                                <a href="shortcode-text-rotator.html"> <i class="fa fa-random"></i>Text Rotator</a>
                                                            </li>
<li>
                                                                <a href="component-clipboard.html"> <i class="far fa-clipboard"></i>Clipboard <span class="badge badge-danger">NEW</span></a>
                                                            </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                         <li class="dropdown"> <a href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-about-basic.html">Basic</a> </li>
                                                        <li><a href="page-about-extended.html">Extended</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-about-me-creative.html">Creative<span class="badge badge-danger">NEW</span></a></li>
    
                                                        <li><a href="page-about-me-basic.html">Basic</a></li>
    
                                                        <li><a href="page-about-me-extended.html">Extended</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-contact-classic.html">Classic</a> </li>
                                                        <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a> </li>
                                                        <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a> </li>
                                                        <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                                        <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                                        <li><a href="page-contact-sidebar-right.html">Sidebar Right</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                    <ul class="dropdown-menu">
                                                       <li> <a href="page-gallery-2.html">Two Columns</a> </li>
    <li> <a href="page-gallery-3.html">Three Columns</a> </li>
    <li> <a href="page-gallery-4.html">Four Columns</a> </li>
    <li> <a href="page-gallery-5.html">Five Columns</a> </li>
    <li> <a href="page-gallery-6.html">Six Columns</a> </li>
    <li> <a href="page-gallery-sidebar.html">Sidebar version</a> </li>
                                                                <li> <a href="page-gallery-wide.html">Wide version</a> </li>
    <li> <a href="page-gallery-load-more.html">Load more</a> </li>
    <li> <a href="page-gallery-infinite-scroll.html">Infinity Scroll</a> </li>
    <!--<li> <a href="page-gallery-gallery-albums.html">Gallery Albums</a> </li>-->
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-user-login.html">Login</a> </li>
    <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                            <li><a href="page-user-register.html">Register</a> </li>
                            <li><a href="page-user-register-classic.html">Register - Classic</a> </li>
                             <li><a href="page-user-password-recovery.html">Recovery Password</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="page-services.html">Services</a> </li>
                                                <li> <a href="page-our-team.html">Our team</a> </li>
                                                <li> <a href="page-our-clients.html">Our clients</a> </li>
                                                <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                                <li> <a href="page-404.html">404 Page</a> </li>
                        <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                                <li> <a href="page-500.html">500 Page</a> </li>
                                                <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                                <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                    <ul class="dropdown-menu">
                                                        <li> <a href="page-sidebar.html">Sidebar Left</a> </li>
                                                        <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                                        <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="page-site-map.html">Site Map</a> </li>
                                                <li> <a href="page-faq.html">FAQ</a> </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item"> <a href="#">Portfolio</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Grids</li>
                                                                <li> <a href="portfolio-2.html">Two Columns</a> </li>
                                                                <li> <a href="portfolio-3.html">Three Columns</a> </li>
                                                                <li> <a href="portfolio-4.html">Four Columns</a> </li>
                                                                <li> <a href="portfolio-5.html">Five Columns</a> </li>
                                                                <li> <a href="portfolio-6.html">Six Columns</a> </li>
                                                                <li> <a href="portfolio-sidebar.html">Sidebar version</a> </li>
                                                                <li> <a href="portfolio-wide-3.html">Wide version</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Masonry</li>
                                                                <li> <a href="portfolio-masonry-2.html">Two Columns</a> </li>
                                                                <li> <a href="portfolio-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a> </li>
                                                                <li> <a href="portfolio-masonry-4.html">Four Columns</a> </li>
                                                                <li> <a href="portfolio-masonry-5.html">Five Columns</a> </li>
                                                                <li> <a href="portfolio-masonry-6.html">Six Columns</a> </li>
                                                                <li> <a href="portfolio-masonry-sidebar.html">Sidebar version</a> </li>
                                                                <li> <a href="portfolio-masonry-wide-3.html">Wide version</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Styles</li>
                                                                <li> <a href="portfolio-filter-styles.html">Filter Styles</a> </li>
                                                                <li> <a href="portfolio-load-more.html">Load more</a> </li>
                                                                <li> <a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a> </li>
                                                                <li> <a href="portfolio-infinite-scroll.html">Infinity Scroll</a> </li>
                                                                <li> <a href="portfolio-ajax.html">Portfolio Ajax</a> </li>
                                                                <li> <a href="portfolio-gallery-modal.html">Gallery Modal</a> </li>
                                                                <li> <a href="portfolio-video-modal.html">Video Modal</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Layouts</li>
                                                                <li> <a href="portfolio-sidebar-left.html">Left Sidebar</a> </li>
                                                                <li> <a href="portfolio-sidebar-right.html">Right Sidebar</a> </li>
                                                                <li> <a href="portfolio-sidebar-both.html">Both Sidebars</a> </li>
                                                                <li> <a href="portfolio-slider-3.html">Slider Default</a> </li>
                                                                <li> <a href="portfolio-no-page-title.html">No Page Title</a> </li>
                                                                <li> <a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a> </li>
                                                                <li> <a href="portfolio-hover-styles.html">Hover Styles</a> </li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Single Project</li>
                                                                <li> <a href="portfolio-page-grid-gallery.html">Grid Gallery</a> </li>
                                                                <li> <a href="portfolio-page-particles.html">Particles Wide Project</a> </li>
                                                                <li> <a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a> </li>
                                                                <li> <a href="portfolio-page-slider.html">Slider version</a> </li>
                                                                <li> <a href="portfolio-page-background-image.html">Fullscreen image</a> </li>
                                                                <li> <a href="portfolio-page-background-video.html">Fullscreen Video</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
   <div class="container">
    <div class="row">
                                                            <div class="col-lg-9 m-t-10">
                                                                <div class="text-center center">
                                                                    <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a>
                                                            </div>
                                                        </div></div></div>

                                                        <ul class="d-block d-lg-none">
                                                            <li> <a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a> </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li> <li class="dropdown mega-menu-item"> <a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="blog-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a> </li>
                                                            <li> <a href="blog-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="blog-masonry-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-masonry-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-masonry-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-masonry-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li> <a href="blog-1.html">One Column</a> </li>
                                                            <li> <a href="blog-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-3.html">Three Columns</a> </li>
                                                            <li> <a href="blog-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li> <a href="blog-left-image-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-left-image-no-sidebar.html">No Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-left-image-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-left-image-author-info.html">Author Info</a> </li>
                                                            <li> <a href="blog-left-image-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="blog-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-fullwidth.html">Fullwidth</a> </li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li> <a href="blog-single.html">Default</a> </li>
                                                            <li> <a href="blog-single-slider.html">Slider</a> </li>
                                                            <li> <a href="blog-single-video.html">Video</a> </li>
                                                            <li> <a href="blog-single-audio.html">Audio</a> </li>
                                                            <li> <a href="blog-single-creative.html">Creative</a> </li>
                                                            <li class="mega-menu-title">Comments<span class="badge badge-danger">NEW</span></li>
                                                            <li> <a href="blog-comments.html#comments">Default Comments</a> </li>
                                                            <li> <a href="blog-comments-disqus.html#comments">Disqus Comments</a> </li>
                                                            <li> <a href="blog-comments-facebook.html#comments">Facebook Comments</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                        <li class="dropdown mega-menu-item"> <a href="#">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Columns</li>
                                                                <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                                <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                                <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                                <li> <a href="shop-columns-5.html">Five Columns</a> </li>
                                                                <li> <a href="shop-columns-6.html">Six Columns</a> </li>
                                                                <li> <a href="shop-sidebar-sticky.html">Sidebar Sticky</a> </li>
                                                                <li> <a href="shop-wide.html">Wide version</a> </li>
                                                                <li> <a href="shop-no-page-title.html">No page title</a> </li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Layouts</li>
                                                                <li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                                <li> <a href="shop-sidebar-right.html">Right Sidebar</a> </li>
                                                                <li> <a href="shop-sidebar-both.html">Both Sidebars</a> </li>
                                                                <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a> </li>
                                                                <li class="mega-menu-title">Loading Styles</li>

                                                                <li> <a href="shop-load-more.html">Load more</a>
                                                                    <a href="shop-load-more-sidebar.html">Load Sidebar</a> </li>

                                                                <li> <a href="shop-infinite-scroll.html">Infinity Scroll</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                            <ul>
                                                                <li class="mega-menu-title">Order process</li>
                                                                <li> <a class="animsition-link" href="shop-cart.html">Shoping Cart</a> </li>
                                                                <li> <a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a> </li>
                                                                <li> <a class="animsition-link" href="shop-checkout.html">Checkout</a> </li>
                                                                <li> <a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a> </li>
                                                                <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                                <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-both.html">Both Sidebars</a> </li>
                                                        </ul>
                                                    </div>
<div class="col-lg-2-5 p-l-0">

                                        <h4 class="text-theme">BIG SALE <small>Up to</small></h4>

                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                        <p class="m-b-0">The most happiest time of the day!. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p>

                                        <a class="btn btn-shadow btn-rounded btn-block m-t-10">SHOP NOW!</a><small class="t300"><p class="text-center m-0"><em>* Limited time Offer</em></p></small>
                          
</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--end: Navigation-->
                    </div>
                </div>
            </header>
            <!-- end: Header -->

            <!-- Revolution Slider -->
            <section id="slider">

                <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#dddddd;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                    <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0">
                        <ul>
                            <!-- SLIDE  -->
                            <?php 
						foreach ($post_feed as $post) :
							if($post->status_type!="wall_post") :
								//var_dump($post);
								
								// get normal sized image
								if(!empty($post->object_id)){
									$image_url = 'https://graph.facebook.com/'.$post->object_id.'/picture';//$post->picture;
								}
								elseif (!empty($post->picture)) {
									$image_url = TP_facebook::decode_facebook_url($post->picture);
									$image_url = parse_str(parse_url($image_url, PHP_URL_QUERY), $array);
									$image_url = explode('&', $array['url']);
									$image_url = $image_url[0];
								}
					?>
                                <li data-index="rs-<?php echo $post->id; ?>" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="<?php echo $image_url; ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="<?php $date = new DateTime($post->updated_time); echo $date->format('F d, Y'); ?>" data-param2="<?php echo $post->message; ?>" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="../../assets/images/dummy.png" alt="" data-lazyload="<?php echo $image_url; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption Facebook-Likes" id="slide-<?php echo $post->id; ?>-layer-1" data-x="10" data-y="bottom" data-voffset="10" data-width="['90']" data-height="['32']" data-transform_idle="o:1;tO:-20% 50%;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:700;e:Power1.easeInOut;s:700;e:Power1.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5; min-width: 90px; min-height: 32px; white-space: normal; max-width: 90px; max-height: 32px; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-align:center;background-color:rgba(59, 89, 153, 1.00);padding:5px 15px 5px 15px;border-radius:0 0 0 0;">
                                        <i class="fa-icon-thumbs-o-up"></i>
                                        <?php echo isset($post->likes->data) ? sizeof($post->likes->data) : 0 ; ?>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <a class="tp-caption Facebook-Likes" href="<?php echo $post->link; ?>" target="_blank" id="slide-<?php echo $post->id; ?>-layer-2" data-x="105" data-y="bottom" data-voffset="10" data-width="['45']" data-height="['32']" data-transform_idle="o:1;tO:-20% 50%;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 0, 0, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:700;e:Power1.easeInOut;s:700;e:Power1.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-actions='' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; min-width: 45px; min-height: 32px; white-space: normal; max-width: 45px; max-height: 32px; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(0, 0, 0, 1.00);font-family:Roboto;text-align:center;background-color:rgba(255, 255, 255, 1.00);padding:5px 15px 5px 15px;border-radius:0 0 0 0;"><i class="fa-icon-chain"></i> 
									</a>
                                </li>
                                <?php
							endif;
						endforeach;
					?>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                    <!-- ENF OF SLIDER WRAPPER -->
                </div>





                <script type="text/javascript">
                    var revapi24;
                    jQuery(document).ready(function() {
                        if (jQuery("#rev_slider").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider");
                        } else {
                            revapi24 = jQuery("#rev_slider").show().revolution({
                                sliderType: "standard",
                                //jsFileLocation:"../../revolution/js",
                                sliderLayout: "auto",
                                dottedOverlay: "none",
                                delay: 9000,
                                navigation: {
                                    keyboardNavigation: "on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    onHoverStop: "off",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    },
                                    arrows: {
                                        style: "gyges",
                                        enable: true,
                                        hide_onmobile: false,
                                        hide_onleave: false,
                                        tmp: '',
                                        left: {
                                            h_align: "right",
                                            v_align: "bottom",
                                            h_offset: 40,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "bottom",
                                            h_offset: 0,
                                            v_offset: 0
                                        }
                                    },
                                    tabs: {
                                        style: "ares",
                                        enable: true,
                                        width: 350,
                                        height: 80,
                                        min_width: 350,
                                        wrapper_padding: 0,
                                        wrapper_color: "#f5f5f5",
                                        wrapper_opacity: "1",
                                        tmp: '<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{param2}}</span></div><div class="tp-tab-image"></div>',
                                        visibleAmount: 10,
                                        hide_onmobile: true,
                                        hide_under: 776,
                                        hide_onleave: false,
                                        hide_delay: 200,
                                        direction: "vertical",
                                        span: true,
                                        position: "outer-left",
                                        space: 0,
                                        h_align: "left",
                                        v_align: "top",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                gridwidth: 800,
                                gridheight: 640,
                                lazyType: "single",
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "on",
                                stopAfterLoops: 0,
                                stopAtSlide: 1,
                                shuffle: "off",
                                autoHeight: "off",
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                startWithSlide: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: "off",
                                }
                            });
                        }
                    }); /*ready*/

                </script>
            </section>


            <!-- end: Revolution Slider-->

            <!-- Footer -->
            <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                            <div class="col-lg-5">
                                    <div class="widget">
                                
                                            <div class="widget-title">Polo HTML5 Template</div>
                                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                                All rights reserved. Copyright © 2019. INSPIRO.</p>
                                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted">Purchase Now</a>
                                    </div>
                        </div> <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-title">Discover</div>
                                            <ul class="list">                                           
                                                    <li><a href="#">Features</a></li>
                                                    <li><a href="#">Layouts</a></li>
                                                    <li><a href="#">Corporate</a></li>
                                                    <li><a href="#">Updates</a></li>
                                                    <li><a href="#">Pricing</a></li>
                                                    <li><a href="#">Customers</a></li>
                                                </ul>
                                        </div>  
                                    </div>

                                        <div class="col-lg-3">
                                                <div class="widget">
                                                    <div class="widget-title">Features</div>
                                                    <ul class="list">                                           
                                                            <li><a href="#">Layouts</a></li>
                                                            <li><a href="#">Headers</a></li>
                                                            <li><a href="#">Widgets</a></li>
                                                            <li><a href="#">Footers</a></li>
                                                        </ul>
                                                </div>  
                                            </div>
                                
                                                <div class="col-lg-3">
                                                        <div class="widget">
                                                            <div class="widget-title">Pages</div>
                                                            <ul class="list">                                           
                                                                    <li><a href="#">Portfolio</a></li>
                                                                    <li><a href="#">Blog</a></li>
                                                                    <li><a href="#">Shop</a></li>
                                                                </ul>
                                                        </div>  
                                                    </div>
                                                    <div class="col-lg-3">
                                                            <div class="widget">
                                                                <div class="widget-title">Support</div>
                                                                <ul class="list">                                           
                                                                        <li><a href="#">Help Desk</a></li>
                                                                        <li><a href="#">Documentation</a></li>
                                                                        <li><a href="#">Contact Us</a></li>
                                                                    </ul>
                                                            </div>  
                                                        </div>
                            </div>
                        </div>
                

                </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2019 POLO -  Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="http://www.inspiro-media.com" target="_blank"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>
            <!-- end: Footer -->

        </div>
        <!-- end: Body Inner -->

        <!-- Scroll top -->
        <a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>
        <!--Plugins-->
        <!--<script src="js/jquery.js"></script>-->
        <script src="js/plugins.js"></script>

        <!--Template functions-->
        <script src="js/functions.js"></script>


    </body>

    </html>