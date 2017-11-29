<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
    'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
-->

<div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
    <!-- Sidebar -->
    <sidebar></sidebar>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full hidden-md hidden-lg">
        <div class="content-boxed">
            <!-- Header Navigation Right -->
            <ul class="nav-header pull-right">
                <li>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group">
                        <button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
                            <li>
                                <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="app/styles/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="app/styles/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="app/styles/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="app/styles/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="app/styles/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-white pull-right" type="button" data-toggle="layout" data-action="sidebar_open">
                        <i class="fa fa-navicon"></i>
                    </button>
                </li>
            </ul>
            <!-- END Header Navigation Right -->

            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="header-content">
                    <a class="h5" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-white">ne</span>
                    </a>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </div>
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-image" style="background-image: url('app/img/photos/photo24@2x.jpg');">
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed overflow-hidden">
                    <!-- Section Content -->
                    <div class="push-100-t push-50 text-center">
                        <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">The latest stories only for you.</h1>
                        <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Feel free to explore and read.</h2>
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div>
        <!-- END Hero Content -->

        <!-- Grid Content -->
        <section class="content content-boxed">
            <!-- Section Content -->
            <div class="push-50-t push-50">
                <!-- <div class="row"> -->
                    <!-- Story -->
                  
                    <div ng-repeat="data in datascope" ng-show="(data.urlToImage) && (data.description) 
                    && (data.url) && (data.title)">
                        <div class="col-md-4" data-toggle="appear" data-offset="50" data-class="animated fadeIn" >
                            <a class="block block-link-hover2" href="{{data.url}}">
                                <img class="img-responsive" src="{{data.urlToImage}}" alt="">
                                <div class="block-content">
                                    <div class="font-s12 push">
                                        <!--<em class="pull-right">10 min</em>-->
                                        <span class="text-primary">{{data.source.name}}</span> on {{data.publishedAt}}
                                    </div>
                                    <h4 class="push-10">{{data.title | limitTo: 70}}</h4>
                                    <!-- <p>{{data.description | limitTo: 220 }}</p> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Story -->

                <!-- </div> -->

                <!-- Pagination -->
                <nav class="text-center">
                    <ul class="pagination">
                        <li class="active">
                            <a href="javascript:void(0)">1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">3</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">4</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">5</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
            <!-- END Section Content -->
        </section>
        <!-- END Grid Content -->

        <!-- Get Started -->
        <div class="bg-primary-dark">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-20-t push-20 text-center">
                    <h3 class="h4 text-white-op push-20 visibility-hidden" data-toggle="appear">Do you like our stories? Sign up today and get access to over <strong>10.000</strong> travel stories!</h3>
                    <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_pricing.html">Get Started Today</a>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END Get Started -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footermain></footermain>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="<?php echo base_url() ?>app/js/core/jquery.min.js"></script>
<script src="<?php echo base_url() ?>app/js/core/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>app/js/core/jquery.scrollLock.min.js"></script>
<script src="<?php echo base_url() ?>app/js/core/jquery.appear.min.js"></script>
<script src="<?php echo base_url() ?>app/js/core/jquery.countTo.min.js"></script>
<script src="<?php echo base_url() ?>app/js/core/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url() ?>app/js/core/js.cookie.min.js"></script>
<script src="<?php echo base_url() ?>app/js/app.js"></script>

<!-- Page JS Code -->
<script>
   jQuery(function () {
                // Init page helpers (Appear plugin)
                App.initHelpers('appear');
            });
        </script>