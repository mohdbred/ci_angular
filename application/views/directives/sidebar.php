<nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right visible-xs visible-sm" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right visible-md visible-lg">
                        <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
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
                    <a class="h5 text-white" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content side-content-full">
                    <ul class="nav-main">
                        <li class="open">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-home"></i><span class="sidebar-mini-hide">Home</span></a>
                            <ul>
                                <li>
                                    <a class="active" href="frontend_home.html">Default Navigation</a>
                                </li>
                                <li>
                                    <a href="frontend_home_header_nav.html">Header Navigation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="frontend_features.html"><i class="si si-energy"></i><span class="sidebar-mini-hide">Features</span></a>
                        </li>
                        <li>
                            <a href="frontend_pricing.html"><i class="si si-wallet"></i><span class="sidebar-mini-hide">Pricing</span></a>
                        </li>
                        <li>
                            <a href="frontend_contact.html"><i class="si si-envelope-open"></i><span class="sidebar-mini-hide">Contact</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Pages</span></a>
                            <ul>
                                <li>
                                    <a href="frontend_team.html">Team</a>
                                </li>
                                <li>
                                    <a href="frontend_support.html">Support</a>
                                </li>
                                <li>
                                    <a href="frontend_search.html">Search</a>
                                </li>
                                <li>
                                    <a href="frontend_about.html">About</a>
                                </li>
                                <li>
                                    <a href="frontend_login.html">Log In</a>
                                </li>
                                <li>
                                    <a href="frontend_signup.html">Sign Up</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Pages Packs</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-pencil"></i><span class="sidebar-mini-hide">Blog</span></a>
                            <ul>
                                <li>
                                    <a href="frontend_blog_classic.html">Classic</a>
                                </li>
                                <li>
                                    <a href="frontend_blog_list.html">List</a>
                                </li>
                                <li>
                                    <a href="frontend_blog_grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="frontend_blog_story.html">Story</a>
                                </li>
                                <li>
                                    <a href="frontend_blog_story_cover.html">Story Cover</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-graduation"></i><span class="sidebar-mini-hide">e-Learning</span></a>
                            <ul>
                                <li>
                                    <a href="frontend_elearning_courses.html">Courses</a>
                                </li>
                                <li>
                                    <a href="frontend_elearning_course.html">Course</a>
                                </li>
                                <li>
                                    <a href="frontend_elearning_lesson.html">Lesson</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bag"></i><span class="sidebar-mini-hide">e-Commerce</span></a>
                            <ul>
                                <li>
                                    <a href="frontend_ecom_home.html">Home</a>
                                </li>
                                <li>
                                    <a href="frontend_ecom_search.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="frontend_ecom_products.html">Products List</a>
                                </li>
                                <li>
                                    <a href="frontend_ecom_product.html">Product Page</a>
                                </li>
                                <li>
                                    <a href="frontend_ecom_checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-plane"></i><span class="sidebar-mini-hide">Travel</span></a>
                            <ul>
                                <li>
                                    <a href="frontend_travel_agency.html">Agency</a>
                                </li>
                                <li>
                                    <a href="frontend_travel_package.html">Package</a>
                                </li>
                                <li>
                                    <a href="frontend_travel_guide.html">Guide</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>