<?php

/**
 * @file
 * Default theme implementation to display the HTML structure of a single page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
?><!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php /*print $styles;*/ ?>

  <!-- This page CSS -->

  <!-- chartist CSS -->
  <link href="https://new.galobby.com/development/sites/all/themes/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
  
  <!--Toaster Popup message CSS -->
  <link href="https://new.galobby.com/development/sites/all/themes/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="https://new.galobby.com/development/sites/all/themes/dist/css/style.min.css" rel="stylesheet">
  <!-- Dashboard 1 Page CSS -->
  <link href="https://new.galobby.com/development/sites/all/themes/dist/css/pages/dashboard1.css" rel="stylesheet">
  <link href="https://new.galobby.com/development/sites/all/themes/assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
  <!-- Custom CSS -->
  <link href="https://new.galobby.com/development/sites/all/themes/dist/css/custom.css" rel="stylesheet">


  <?php /*print $scripts;*/ ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body<?php print $body_attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
      <div class="loader">
          <div class="loader__figure"></div>
          <p class="loader__label">Georgia Lobby</p>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
          <nav class="navbar top-navbar navbar-expand-md navbar-dark">
              <!-- ============================================================== -->
              <!-- Logo -->
              <!-- ============================================================== -->
              <div class="navbar-header">
                  <a class="navbar-brand" href="index.html">
                      <!-- Logo text --><span>
                       <!-- dark Logo text -->
                       <img src="../assets/images/galobbylogo.png" alt="homepage" class="dark-logo" />
                       <!-- Light Logo text -->
                       <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
              </div>
              <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <div class="navbar-collapse">
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav mr-auto">
                      <!-- This is  -->
                      <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                      <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                      <!-- ============================================================== -->
                      <!-- Search -->
                      <!-- ============================================================== -->
                      <li class="nav-item">
                          <form class="app-search d-none d-md-block d-lg-block">
                              <input type="text" class="form-control" placeholder="Search & enter">
                          </form>
                      </li>
                  </ul>
                  <!-- ============================================================== -->
                  <!-- User profile and search -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav my-lg-0">
                      <!-- ============================================================== -->
                      <!-- Messages -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                              <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                          </a>
                          <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                              <ul>
                                  <li>
                                      <div class="drop-title">Quick Menu</div>
                                  </li>
                                  <li>
                                      <div class="message-center">
                                          <!-- Message -->
                                          <a href="javascript:void(0)">

                                              <div class="mail-contnet">
                                                  <span class="mail-desc">Create Board Watch Notice</span>
                                                </div>
                                          </a>
                                          <!-- Message -->
                                          <a href="javascript:void(0)">

                                              <div class="mail-contnet">
                                                  <span class="mail-desc">Create Government Watch notice</span>
                                                </div>
                                          </a>
                                          <!-- Message -->
                                          <a href="javascript:void(0)">

                                              <div class="mail-contnet">
                                                <span class="mail-desc">Manage Subscribers and Contracts</span>
                                              </div>
                                          </a>
                                          <!-- Message -->
                                          <a href="javascript:void(0)">

                                              <div class="mail-contnet">
                                                  <span class="mail-desc">Add Contract</span>
                                                </div>
                                          </a>
                                      </div>
                                  </li>

                              </ul>
                          </div>
                      </li>
                      <!-- ============================================================== -->
                      <!-- End Messages -->
                      <!-- ============================================================== -->
                      <!-- ============================================================== -->
                      <!-- mega menu -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                          <div class="dropdown-menu animated bounceInDown">
                              <ul class="mega-dropdown-menu row">
                                  <li class="col-lg-3 col-xlg-2 m-b-30">
                                      <h4 class="m-b-20">Photo Gallery</h4>
                                      <!-- CAROUSEL -->
                                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                          <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                  <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                              </div>
                                              <div class="carousel-item">
                                                  <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                              </div>
                                              <div class="carousel-item">
                                                  <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                              </div>
                                          </div>
                                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                      </div>
                                      <!-- End CAROUSEL -->
                                  </li>
                                  <li class="col-lg-3 m-b-30">
                                      <h4 class="m-b-20">Admin Menu</h4>
                                      <!-- Accordian -->
                                      <div class="accordion" id="accordionExample">
                                          <div class="card m-b-0">
                                              <div class="card-header bg-white p-0" id="headingOne">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    System Utilities
                                                  </button>
                                                </h5>
                                              </div>

                                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                  <ul>
                                                  <li>Clear cache</li>
                                                  <li>Email log</li>
                                                  <li>Bill Importer</li>
                                                  <li>Status Report</li>
                                                </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card m-b-0">
                                              <div class="card-header bg-white p-0" id="headingTwo">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Example
                                                  </button>
                                                </h5>
                                              </div>
                                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card m-b-0">
                                              <div class="card-header bg-white p-0" id="headingThree">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                  </button>
                                                </h5>
                                              </div>
                                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="col-lg-3  m-b-30">
                                      <h4 class="m-b-20">CONTACT US</h4>
                                      <!-- Contact -->
                                      <form>
                                          <div class="form-group">
                                              <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                          <div class="form-group">
                                              <input type="email" class="form-control" placeholder="Enter email"> </div>
                                          <div class="form-group">
                                              <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                          </div>
                                          <button type="submit" class="btn btn-info">Submit</button>
                                      </form>
                                  </li>
                                  <li class="col-lg-3 col-xlg-4 m-b-30">
                                      <h4 class="m-b-20">Notices</h4>
                                      <!-- List style -->
                                      <ul class="list-style-none">
                                          <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Create Notice</a></li>
                                          <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Edit Notices</a></li>
                                          <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> View Notices</a></li>
                                          <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                          <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Fifth link</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <!-- ============================================================== -->
                      <!-- End mega menu -->
                      <!-- ============================================================== -->
                      <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                  </ul>
              </div>
          </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- User Profile-->
              <div class="user-profile">
                  <div class="user-pro-body">
                      <div>
                          <img src="../assets/images/users/normer.png" alt="user-img" class="img-circle">
                      </div>
                      <div class="dropdown">
                          <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                              aria-expanded="false">Normer Adams
                              <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu animated flipInY">
                              <!-- text-->
                              <a href="javascript:void(0)" class="dropdown-item">
                                  <i class="ti-user"></i> My Profile</a>
                              <!-- text-->
                              <a href="javascript:void(0)" class="dropdown-item">
                                  <i class="ti-wallet"></i> My Subscriptions</a>

                              <!-- text-->
                              <div class="dropdown-divider"></div>
                              <!-- text-->
                              <a href="javascript:void(0)" class="dropdown-item">
                                  <i class="ti-settings"></i> Account Settings</a>
                              <!-- text-->
                              <div class="dropdown-divider"></div>
                              <!-- text-->
                              <a href="pages-login.html" class="dropdown-item">
                                  <i class="fa fa-power-off"></i> Logout</a>
                              <!-- text-->
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <li class="nav-small-cap">--- Administrator Menu</li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="icon-speedometer"></i>
                              <span class="hide-menu">Dashboard

                              </span>
                          </a>
                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-layout-grid2"></i>
                              <span class="hide-menu">Notice Management</span>
                          </a>
                          <ul aria-expanded="false" class="collapse">
                              <li>
                                  <a href="#">Add Board Watch Notice</a>
                              </li>
                              <li>
                                  <a href="#">Add Government Watch Notice</a>
                              </li>
                              <li>
                                  <a href="#">Manage Subscribers</a>
                              </li>
                              <li>
                                  <a href="#">Manage Contracts</a>
                              </li>
                              <li>
                                  <a href="#">Add Contract</a>
                              </li>

                          </ul>
                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-email"></i>
                              <span class="hide-menu">System Utilites</span>
                          </a>
                          <ul aria-expanded="false" class="collapse">
                              <li>
                                  <a href="a#">Clear Cache</a>
                              </li>
                              <li>
                                  <a href="#">System Log</a>
                              </li>
                              <li>
                                  <a href="#">Bill Importer</a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-small-cap">--- Manage My Subscriptions</li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-layout-media-right-alt"></i>
                              <span class="hide-menu">Board Watch</span>
                          </a>

                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-layout-accordion-merged"></i>
                              <span class="hide-menu">Government Watch</span>
                          </a>

                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-settings"></i>
                              <span class="hide-menu">Bill Watch</span>
                          </a>

                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-settings"></i>
                              <span class="hide-menu">Code Watch</span>
                          </a>

                      </li>
                      <li class="nav-small-cap">--- Client Watch Reporting</li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-gallery"></i>
                              <span class="hide-menu">My Client Watch Bills</span>
                          </a>

                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-files"></i>
                              <span class="hide-menu">My Clients/Issues

                              </span>
                          </a>
                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-files"></i>
                              <span class="hide-menu">Client Watch Reports

                              </span>
                          </a>
                      </li>
                      <li>
                          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                              <i class="ti-pie-chart"></i>
                              <span class="hide-menu">Client Watch Team Collaboration</span>
                          </a>
                      </li>
                      <li class="nav-small-cap">--- My Profile</li>
                      <li>
                          <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false">
                              <i class="far fa-circle text-info"></i>
                              <span class="hide-menu">Edit My Profile</span>
                          </a>
                      </li>
                      <li>
                          <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                              <i class="far fa-circle text-success"></i>
                              <span class="hide-menu">Log Out</span>
                          </a>
                      </li>
                  </ul>
              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
          <!-- ============================================================== -->
          <!-- Container fluid  -->
          <!-- ============================================================== -->
          <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Info box -->
              <!-- ============================================================== -->
              <div class="card-group" id="homepage-top">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                      <div>
                                          <h3><i class="icon-screen-desktop"></i></h3>
                                          <p class="text-muted">Board Watch Notices</p>
                                      </div>
                                      <div class="ml-auto">
                                          <h2 class="counter text-primary">123</h2>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <!-- Column -->
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                      <div>
                                          <h3><i class="icon-note"></i></h3>
                                          <p class="text-muted">Government Watch Notices</p>
                                      </div>
                                      <div class="ml-auto">
                                          <h2 class="counter text-cyan">79</h2>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <!-- Column -->
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                      <div>
                                          <h3><i class="icon-doc"></i></h3>
                                          <p class="text-muted">Contracts</p>
                                      </div>
                                      <div class="ml-auto">
                                          <h2 class="counter text-purple">157</h2>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <!-- Column -->
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                      <div>
                                          <h3><i class="icon-bag"></i></h3>
                                          <p class="text-muted">Users</p>
                                      </div>
                                      <div class="ml-auto">
                                          <h2 class="counter text-success">431</h2>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Info box -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Over Visitor, Our income , slaes different and  sales prediction -->
              <!-- ============================================================== -->
              <div class="row">
                  <!-- Column -->
                  <div class="col-lg-8 col-md-12">

                      <div class="card">
                          <div class="card-body">
                            <div class="col-6">
                                <h3>Create Board Watch Notice</h3>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Committee</label>
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>All</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group row pt-3">
                                <div class="col-sm-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">No date</label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                  <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                  <div class="col-10">
                                      <input class="form-control" type="date" value="2019-07-19" id="example-date-input">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label>Body</label>
                                <textarea class="form-control" id="mymce" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Default file upload</label>
                                <input type="file" class="form-control">
                            </div>
                          </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <div class="col-lg-4 col-md-12">
                      <div class="row">
                          <!-- Column -->
                          <div class="col-md-12">
                              <div class="card bg-cyan text-white">
                                <div class="card-body">
                                  <div class="card-title">Search for Bills</div>
                                      <form class="app-search d-none d-md-block d-lg-block">
                                          <input type="text" class="form-control" placeholder="Search & enter">
                                      </form>

                                </div>

                              </div>
                          </div>

                          <!-- Column -->
                          <div class="col-md-12">
                              <div class="card bg-primary text-white">
                                  <div class="card-body">
                                    <h4 class="card-title">Login</h4>
                                    <form class="form p-t-20">
                                        <div class="form-group">
                                            <label for="exampleInputuname">User Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd1">Password</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="ti-lock"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd2">Confirm Password</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon4">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox m-b-0">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label">Remember me</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>

                                  </div>
                              </div>
                          </div>
                          <!-- Column -->
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- Comment - table -->
              <!-- ============================================================== -->
              <div class="row">
                  <!-- ============================================================== -->
                  <!-- Comment widgets -->
                  <!-- ============================================================== -->
                  <div class="col-lg-6">
                      <div class="card">
                        <div class="card-body ">
                            <h4 class="card-title">Manage My Subscriptions</h4>
                            <div class="vtabs">
                                <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Board Watch</span> </a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gov4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Government Watch</span> </a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Bill Watch</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Code Watch</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home4" role="tabpanel">
                                        <div class="p-20"> List of Committees</div>
                                    </div>
                                    <div class="tab-pane p-20" id="gov4" role="tabpanel">List of Departments</div>
                                    <div class="tab-pane p-20" id="profile4" role="tabpanel">List of Bills</div>
                                    <div class="tab-pane p-20" id="messages4" role="tabpanel">List of Keywords</div>
                                </div>
                              </div>
                            </div>
                      </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- Table -->
                  <!-- ============================================================== -->
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body bg-light">
                              <div class="row">
                                  <div class="col-8">
                                      <h3>Recent Board Watch Notices</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="table-responsive">
                              <table class="table table-hover no-wrap">
                                  <thead>
                                      <tr>
                                          <th class="text-center">#</th>
                                          <th>TITLE</th>
                                          <th>COMMITTEE</th>
                                          <th>DATE SENT</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="text-center">1</td>
                                          <td class="txt-oflo"><a>Board Watch 1</a></td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 18, 2017</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">2</td>
                                          <td class="txt-oflo">Board Watch 2</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 19, 2017</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">3</td>
                                          <td class="txt-oflo">Board Watch 3</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 19, 2017</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">4</td>
                                          <td class="txt-oflo">Board Watch 4</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 20, 2017</td>

                                      </tr>
                                      <tr>
                                          <td class="text-center">5</td>
                                          <td class="txt-oflo">Board Watch 5</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 21, 2017</td>

                                      </tr>
                                      <tr>
                                          <td class="text-center">6</td>
                                          <td class="txt-oflo">Board Watch 6</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 23, 2017</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">7</td>
                                          <td class="txt-oflo">Board Watch 7</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 22, 2017</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">8</td>
                                          <td class="txt-oflo">Board Watch 8</td>
                                          <td>ALL</td>
                                          <td class="txt-oflo">April 19, 2017</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Comment - chats -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Over Visitor, Our income , slaes different and  sales prediction -->
              <!-- ============================================================== -->
              <div class="row">
                  <!-- Column -->
                  <div class="col-lg-8 col-md-12">
                      <div class="card">
                          <div class="card-body">
                            <div class="card-title"><h3>Subscribers</h3></div>
                              <div class="d-flex align-items-center no-block">
                                <div class="table-responsive m-t-40">
                                    <table id="config-table" class="table display table-bordered table-striped no-wrap">
                                        <thead>
                                            <tr>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Contract</th>
                                                <th>Subscriptions</th>
                                                <th>Age</th>
                                                <th>Renweal date</th>
                                                <th>Salary</th>
                                                <th>Extn.</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>5421</td>
                                                <td>t.nixon@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett</td>
                                                <td>Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>8422</td>
                                                <td>g.winters@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton</td>
                                                <td>Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>1562</td>
                                                <td>a.cox@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric</td>
                                                <td>Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>6224</td>
                                                <td>c.kelly@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Airi</td>
                                                <td>Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>5407</td>
                                                <td>a.satou@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle</td>
                                                <td>Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>4804</td>
                                                <td>b.williamson@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod</td>
                                                <td>Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                                <td>9608</td>
                                                <td>h.chandler@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona</td>
                                                <td>Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                                <td>6200</td>
                                                <td>r.davidson@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen</td>
                                                <td>Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                                <td>2360</td>
                                                <td>c.hurst@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya</td>
                                                <td>Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                                <td>1667</td>
                                                <td>s.frost@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jena</td>
                                                <td>Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                                <td>3814</td>
                                                <td>j.gaines@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn</td>
                                                <td>Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                                <td>9497</td>
                                                <td>q.flynn@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Charde</td>
                                                <td>Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                                <td>6741</td>
                                                <td>c.marshall@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Haley</td>
                                                <td>Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                                <td>3597</td>
                                                <td>h.kennedy@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana</td>
                                                <td>Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                                <td>1965</td>
                                                <td>t.fitzpatrick@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Michael</td>
                                                <td>Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                                <td>1581</td>
                                                <td>m.silva@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Paul</td>
                                                <td>Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                                <td>3059</td>
                                                <td>p.byrd@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria</td>
                                                <td>Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                                <td>1721</td>
                                                <td>g.little@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley</td>
                                                <td>Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                                <td>2558</td>
                                                <td>b.greer@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Dai</td>
                                                <td>Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                                <td>2290</td>
                                                <td>d.rios@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette</td>
                                                <td>Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                                <td>1937</td>
                                                <td>j.caldwell@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri</td>
                                                <td>Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                                <td>6154</td>
                                                <td>y.berry@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar</td>
                                                <td>Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                                <td>8330</td>
                                                <td>c.vance@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Doris</td>
                                                <td>Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                                <td>3023</td>
                                                <td>d.wilder@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica</td>
                                                <td>Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                                <td>5797</td>
                                                <td>a.ramos@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin</td>
                                                <td>Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                                <td>8822</td>
                                                <td>g.joyce@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer</td>
                                                <td>Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                                <td>9239</td>
                                                <td>j.chang@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden</td>
                                                <td>Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                                <td>1314</td>
                                                <td>b.wagner@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona</td>
                                                <td>Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                                <td>2947</td>
                                                <td>f.green@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Shou</td>
                                                <td>Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                                <td>8899</td>
                                                <td>s.itou@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle</td>
                                                <td>House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                                <td>2769</td>
                                                <td>m.house@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Suki</td>
                                                <td>Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                                <td>6832</td>
                                                <td>s.burks@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott</td>
                                                <td>Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                                <td>3606</td>
                                                <td>p.bartlett@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin</td>
                                                <td>Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                                <td>2860</td>
                                                <td>g.cortez@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Martena</td>
                                                <td>Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                                <td>8240</td>
                                                <td>m.mccray@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Unity</td>
                                                <td>Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                                <td>5384</td>
                                                <td>u.butler@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Howard</td>
                                                <td>Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                                <td>7031</td>
                                                <td>h.hatfield@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Hope</td>
                                                <td>Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                                <td>6318</td>
                                                <td>h.fuentes@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian</td>
                                                <td>Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                                <td>9422</td>
                                                <td>v.harrell@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy</td>
                                                <td>Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                                <td>7580</td>
                                                <td>t.mooney@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson</td>
                                                <td>Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                                <td>1042</td>
                                                <td>j.bradshaw@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia</td>
                                                <td>Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                                <td>2120</td>
                                                <td>o.liang@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno</td>
                                                <td>Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                                <td>6222</td>
                                                <td>b.nash@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura</td>
                                                <td>Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                                <td>9383</td>
                                                <td>s.yamamoto@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Thor</td>
                                                <td>Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                                <td>8327</td>
                                                <td>t.walton@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Finn</td>
                                                <td>Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                                <td>2927</td>
                                                <td>f.camacho@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Serge</td>
                                                <td>Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                                <td>8352</td>
                                                <td>s.baldwin@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida</td>
                                                <td>Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                                <td>7439</td>
                                                <td>z.frank@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita</td>
                                                <td>Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                                <td>4389</td>
                                                <td>z.serrano@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer</td>
                                                <td>Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                                <td>3431</td>
                                                <td>j.acosta@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Cara</td>
                                                <td>Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                                <td>3990</td>
                                                <td>c.stevens@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione</td>
                                                <td>Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                                <td>1016</td>
                                                <td>h.butler@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Lael</td>
                                                <td>Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                                <td>6733</td>
                                                <td>l.greer@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas</td>
                                                <td>Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                                <td>8196</td>
                                                <td>j.alexander@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Shad</td>
                                                <td>Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                                <td>6373</td>
                                                <td>s.decker@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Michael</td>
                                                <td>Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                                <td>5384</td>
                                                <td>m.bruce@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Donna</td>
                                                <td>Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                                <td>4226</td>
                                                <td>d.snider@datatables.net</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <div class="col-lg-4 col-md-12">
                      <div class="row">
                          <!-- Column -->
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-body">
                                      <h5 class="card-title">SALES DIFFERENCE</h5>
                                      <div class="row">
                                          <div class="col-6  m-t-30">
                                              <h1 class="text-info">$647</h1>
                                              <p class="text-muted">APRIL 2017</p>
                                              <b>(150 Sales)</b> </div>
                                          <div class="col-6">
                                              <div id="sparkline2dash" class="text-right"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Column -->
                          <div class="col-md-12">
                              <div class="card bg-purple text-white">
                                  <div class="card-body">
                                      <h5 class="card-title">VISIT STATASTICS</h5>
                                      <div class="row">
                                          <div class="col-6  m-t-30">
                                              <h1 class="text-white">$347</h1>
                                              <p class="light_op_text">APRIL 2017</p>
                                              <b class="text-white">(150 Sales)</b> </div>
                                          <div class="col-6">
                                              <div id="sales1" class="text-right"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Column -->
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Page Content -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Todo, chat, notification -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Client Watch Report</h4>
                              <div class="select">
                                  <select class="form-control" id="locale">
                                      <option value="en-US" selected></option>
                                  </select>
                              </div>
                              <div id="toolbar">
                                  <button id="remove" class="btn btn-danger" disabled>
                                      <i class="ti-trash"></i> Delete
                                  </button>
                              </div>
                              <table id="exporttable" data-toolbar="#toolbar" data-search="true"
                                  data-show-refresh="true" data-show-toggle="true" data-show-fullscreen="true"
                                  data-show-columns="true" data-detail-view="true" data-show-export="true"
                                  data-detail-formatter="detailFormatter" data-minimum-count-columns="2"
                                  data-show-pagination-switch="true" data-pagination="true" data-id-field="id"
                                  data-page-list="[10, 25, 50, 100, ALL]" data-show-footer="true"
                                  data-side-pagination="server"
                                  data-url="https://examples.wenzhixin.net.cn/examples/bootstrap_table/data"
                                  data-response-handler="responseHandler">
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Page Content -->
              <!-- ============================================================== -->

          </div>
          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer">
          © 2019 Georgia Lobby by <a href="https://countryfriedcreative.com"> Country Fried Creative</a>
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->


  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap popper Core JavaScript -->
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/popper/popper.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!--Wave Effects -->
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/custom.min.js"></script>
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->
  <!--morris JavaScript -->
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/raphael/raphael-min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/morrisjs/morris.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- Popup message jquery
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/toast-master/js/jquery.toast.js"></script> -->
  <!-- Chart JS -->
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/dashboard1.js"></script>
  <!-- Popup message jquery -->
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/toast-master/js/jquery.toast.js"></script>

  <!--Custom JavaScript
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/custom.min.js"></script> -->
  <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/bootstrap-table/dist/bootstrap-table-locale-all.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/dist/js/pages/bootstrap-table.init.js"></script>

  <!-- wysuhtml5 Plugin JavaScript -->
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/tinymce/tinymce.min.js"></script>
  <script>
  $(function() {

      if ($("#mymce").length > 0) {
          tinymce.init({
              selector: "textarea#mymce",
              theme: "modern",
              height: 300,
              plugins: [
                  "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                  "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                  "save table contextmenu directionality emoticons template paste textcolor"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

          });
      }
  });
  </script>

  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="https://new.galobby.com/development/sites/all/themes/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
  <!-- start - This is for export functionality only -->
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
  <!-- end - This is for export functionality only -->
  <script>
      $(function () {
          $('#myTable').DataTable();
          var table = $('#example').DataTable({
              "columnDefs": [{
                  "visible": false,
                  "targets": 2
              }],
              "order": [
                  [2, 'asc']
              ],
              "displayLength": 25,
              "drawCallback": function (settings) {
                  var api = this.api();
                  var rows = api.rows({
                      page: 'current'
                  }).nodes();
                  var last = null;
                  api.column(2, {
                      page: 'current'
                  }).data().each(function (group, i) {
                      if (last !== group) {
                          $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                          last = group;
                      }
                  });
              }
          });
          // Order by the grouping
          $('#example tbody').on('click', 'tr.group', function () {
              var currentOrder = table.order()[0];
              if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                  table.order([2, 'desc']).draw();
              } else {
                  table.order([2, 'asc']).draw();
              }
          });
          // responsive table
          $('#config-table').DataTable({
              responsive: true
          });
          $('#example23').DataTable({
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          });
          $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      });

  </script>
</body>
</html>
