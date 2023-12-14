<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Customers | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css?v=1.0">

  <link rel="preload" href="./assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="./assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <!-- ONLY DEV -->

  <style>
    body
    {
      opacity: 0;
    }
  </style>

  <!-- END ONLY DEV -->

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
      <!-- Logo -->
      <a class="navbar-brand" href="./index.html" aria-label="Front">
        <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <div class="navbar-nav-wrap-content-start">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Search Form -->
        <div class="dropdown ms-2">
          <!-- Input Group -->
          <div class="d-none d-lg-block">
            <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>

              <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
              <a class="input-group-append input-group-text" href="javascript:;">
                <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
              </a>
            </div>
          </div>

          <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
            <i class="bi-search"></i>
          </button>
          <!-- End Input Group -->

          <!-- Card Search Content -->
          <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
            <div class="card">
              <!-- Body -->
              <div class="card-body-height">
                <div class="d-lg-none">
                  <div class="input-group input-group-merge navbar-input-group mb-5">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i class="bi-x-lg"></i>
                    </a>
                  </div>
                </div>

                <span class="dropdown-header">Recent searches</span>

                <div class="dropdown-item bg-transparent text-wrap">
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html">
                    Gulp <i class="bi-search ms-1"></i>
                  </a>
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html">
                    Notification panel <i class="bi-search ms-1"></i>
                  </a>
                </div>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Tutorials</span>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-sliders"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>How to set up Gulp?</span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-paint-bucket"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>How to change theme color?</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Members</span>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>David Harrison</span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>Anne Richard</span>
                    </div>
                  </div>
                </a>
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="./index.html">
                See all results <i class="bi-chevron-right small"></i>
              </a>
              <!-- End Footer -->
            </div>
          </div>
          <!-- End Card Search Content -->

        </div>

        <!-- End Search Form -->
      </div>

      <div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Notification -->
            <div class="dropdown">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <i class="bi-bell"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-title mb-0">Notifications</h4>

                    <!-- Unfold -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                        <span class="dropdown-header">Settings</span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-archive dropdown-item-icon"></i> Archive all
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-gift dropdown-item-icon"></i> What's new?
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Feedback</span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                  <!-- End Header -->

                  <!-- Nav -->
                  <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                    </li>
                  </ul>
                  <!-- End Nav -->

                  <!-- Body -->
                  <div class="card-body-height">
                    <!-- Tab Content -->
                    <div class="tab-content" id="notificationTabContent">
                      <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                        <!-- List Group -->
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                    <label class="form-check-label" for="notificationCheck1"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <img class="avatar avatar-sm avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Brian Warner</h5>
                                <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">2hr</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                    <label class="form-check-label" for="notificationCheck2"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">K</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Klara Hampton</h5>
                                <p class="text-body fs-5">mentioned you in a comment</p>
                                <blockquote class="blockquote blockquote-sm">
                                  Nice work, love! You really nailed it. Keep it up!
                                </blockquote>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">10hr</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                    <label class="form-check-label" for="notificationCheck3"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Ruby Walter</h5>
                                <p class="text-body fs-5">joined the Slack group HS Team</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">3dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                    <label class="form-check-label" for="notificationCheck4"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">from Google</h5>
                                <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">17dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                    <label class="form-check-label" for="notificationCheck5"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Sara Villar</h5>
                                <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">2mn</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                        <!-- End List Group -->
                      </div>

                      <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                        <!-- List Group -->
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                    <label class="form-check-label" for="notificationCheck6"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">A</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Anne Richard</h5>
                                <p class="text-body fs-5">accepted your invitation to join Notion</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">1dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                    <label class="form-check-label" for="notificationCheck7"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Finch Hoot</h5>
                                <p class="text-body fs-5">left Slack group HS projects</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">1dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                    <label class="form-check-label" for="notificationCheck8"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-dark avatar-circle">
                                    <span class="avatar-initials">HS</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Htmlstream</h5>
                                <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">6dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                    <label class="form-check-label" for="notificationCheck9"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Linda Bates</h5>
                                <p class="text-body fs-5">Accepted your connection</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">17dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                    <label class="form-check-label" for="notificationCheck10"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">L</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Lewis Clarke</h5>
                                <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">2mts</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                        <!-- End List Group -->
                      </div>
                    </div>
                    <!-- End Tab Content -->
                  </div>
                  <!-- End Body -->

                  <!-- Card Footer -->
                  <a class="card-footer text-center" href="#">
                    View all notifications <i class="bi-chevron-right"></i>
                  </a>
                  <!-- End Card Footer -->
                </div>
              </div>
            </div>
            <!-- End Notification -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Apps -->
            <div class="dropdown">
              <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                <i class="bi-app-indicator"></i>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-title">Web apps &amp; services</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height">
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Atlassian</h5>
                          <p class="card-text text-body">Security and control across Cloud</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                          <p class="card-text text-body">Email collaboration software</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Google webdev</h5>
                          <p class="card-text text-body">Work involved in developing a website</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Frontapp</h5>
                          <p class="card-text text-body">The inbox for teams</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">HS Support</h5>
                          <p class="card-text text-body">Customer service and support</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm avatar-soft-dark">
                            <span class="avatar-initials"><i class="bi-grid"></i></span>
                          </div>
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">More Front products</h5>
                          <p class="card-text text-body">Check out more HS products</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="#">
                    View all apps <i class="bi-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
              </div>
            </div>
            <!-- End Apps -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Activity -->
            <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
              <i class="bi-x-diamond"></i>
            </button>
            <!-- Activity -->
          </li>

          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">Mark Williams</h5>
                      <p class="card-text text-body">mark@site.com</p>
                    </div>
                  </div>
                </div>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success me-1"></span> Available
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger me-1"></span> Busy
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning me-1"></span> Away
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Reset status
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Profile &amp; account</a>
                <a class="dropdown-item" href="#">Settings</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-dark avatar-circle">
                        <span class="avatar-initials">HS</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                      <span class="card-text">hs.example.com</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                    <a class="dropdown-item" href="#">
                      Invite people
                    </a>
                    <a class="dropdown-item" href="#">
                      Analytics
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                    <a class="dropdown-item" href="#">
                      Customize Front
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Manage team</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Sign out</a>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="false" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>

              <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link " href="./index.html">Default</a>
                <a class="nav-link " href="./dashboard-alternative.html">Alternative</a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Pages</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">


     

              <div class="nav-item">
                <a class="nav-link " href="./api-keys.html" data-placement="left">
                  <i class="bi-key nav-icon"></i>
                  <span class="nav-link-title">API Keys</span>
                </a>
              </div>


            <span class="dropdown-header mt-4">Apps</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="./clientes.php" data-placement="left">
                <i class="bi-kanban nav-icon"></i>
                <span class="nav-link-title">Clientes</span>
              </a>
            </div>

       
         
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                </button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Dark">Dark</span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <i class="bi-info-circle"></i>
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                  <span class="dropdown-header">Help</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-journals dropdown-item-icon"></i>
                    <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-command dropdown-item-icon"></i>
                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i>
                    <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-gift dropdown-item-icon"></i>
                    <span class="text-truncate" title="What's new?">What's new?</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Contacts</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                    <span class="text-truncate" title="Contact support">Contact support</span>
                  </a>
                </div>
              </div>
              <!-- End Other Links -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Language -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                  <span class="dropdown-header">Select language</span>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                    <span class="text-truncate" title="English">English (US)</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                    <span class="text-truncate" title="English">English (UK)</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                    <span class="text-truncate" title="Deutsch">Deutsch</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                    <span class="text-truncate" title="Dansk">Dansk</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                    <span class="text-truncate" title="Italiano">Italiano</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                    <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                  </a>
                </div>
              </div>

              <!-- End Language -->
            </li>
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center mb-3">
          <div class="col-md mb-2 mb-md-0">
            <h1 class="page-header-title">Customers <span class="badge bg-soft-dark text-dark ms-2">97,524</span></h1>

            <div class="d-sm-flex mt-2">
              <a class="d-inline-block text-body mb-2 mb-sm-0 me-3" href="javascript:;" data-bs-toggle="modal" data-bs-target="#importCustomersModal">
                <i class="bi-upload me-1"></i> Import customers
              </a>
              <a class="d-inline-block text-body mb-2 mb-sm-0 me-3" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exportCustomersModal">
                <i class="bi-download me-1"></i> Export
              </a>

              <!-- Dropdown -->
              <div class="dropdown">
                <a class="d-inline-block text-body mb-2 mb-sm-0 me-3" href="javascript:;" id="moreOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  More options <i class="bi-chevron-down"></i>
                </a>

                <div class="dropdown-menu mt-1" aria-labelledby="moreOptionsDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="bi-clipboard dropdown-item-icon"></i> Manage duplicates
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Edit users
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-arrow-clockwise dropdown-item-icon"></i> Restore clients
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Col -->

          <div class="col-md-auto">
            <a class="btn btn-primary" href="./ecommerce-add-customers.html">Add customers</a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal">
          <span class="hs-nav-scroller-arrow-prev" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="bi-chevron-left"></i>
            </a>
          </span>

          <span class="hs-nav-scroller-arrow-next" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="bi-chevron-right"></i>
            </a>
          </span>

          <!-- Nav -->
          <ul class="nav nav-tabs page-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Returning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Abandoned checkouts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Email subscribers</a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-sm-between">
          <div class="mb-2 mb-sm-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders" aria-label="Search orders">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="d-grid d-sm-flex justify-content-sm-end align-items-sm-center gap-2">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="fs-5 me-3">
                  <span id="datatableCounter">0</span>
                  Selected
                </span>
                <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                  <i class="bi-trash"></i> Delete
                </a>
              </div>
            </div>
            <!-- End Datatable Info -->

            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="bi-table me-1"></i> Columns <span class="badge bg-soft-dark text-dark rounded-circle ms-1">5</span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown" style="width: 15rem;">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="d-grid gap-3">
                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_name">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Name</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_name" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_email">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">E-mail</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_email" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_phone">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Phone</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_phone">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_country">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Country</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_country" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_account_status">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Account status</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_account_status">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_orders">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Orders</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_orders" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_total_spent">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Total spent</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_total_spent" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_last_activity">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Last activity</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_last_activity">
                        </span>
                      </label>
                      <!-- End Form Switch -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 15,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                <th scope="col" class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th class="table-column-ps-0">Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Country</th>
                <th>Account status</th>
                <th>Orders</th>
                <th>Total spent</th>
                <th>Last activity</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck1">
                    <label class="form-check-label" for="usersDataCheck1"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </a>
                </td>
                <td>amanda@site.com</td>
                <td>+1-202-555-0140</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>3</td>
                <td>$3,511.01</td>
                <td>Aug 17, 2020, 5:48 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Anne Richard</span>
                    </div>
                  </a>
                </td>
                <td>anne@site.com</td>
                <td>+1-752-235-2353</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>1</td>
                <td>$235.00</td>
                <td>Aug 17, 2020, 2:01 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck3">
                    <label class="form-check-label" for="usersDataCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">David Harrison</span>
                    </div>
                  </a>
                </td>
                <td>david@site.com</td>
                <td>+1-235-364-2611</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>53 <span class="badge bg-soft-dark text-dark ms-1">+3 today</span></td>
                <td>$346,410.12</td>
                <td>Aug 17, 2020, 1:55 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck4">
                    <label class="form-check-label" for="usersDataCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Finch Hoot</span>
                    </div>
                  </a>
                </td>
                <td>finch@site.com</td>
                <td>+1-743-632-9574</td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>12 <span class="badge bg-soft-dark text-dark ms-1">+1 today</span></td>
                <td>$1,350.04</td>
                <td>Aug 17, 2020, 1:54 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck5">
                    <label class="form-check-label" for="usersDataCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Bob Dean</span>
                    </div>
                  </a>
                </td>
                <td>bob@site.com</td>
                <td>+1-854-235-9755</td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>8</td>
                <td>$912.13</td>
                <td>Aug 17, 2020, 1:04 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck6">
                    <label class="form-check-label" for="usersDataCheck6"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </a>
                </td>
                <td>ella@site.com</td>
                <td>+1-846-157-2423</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>5</td>
                <td>$451.66</td>
                <td>Aug 17, 2020, 1:01 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck7">
                    <label class="form-check-label" for="usersDataCheck7"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Lori Hunter</span>
                    </div>
                  </a>
                </td>
                <td>hunter@site.com</td>
                <td>+1-844-235-4378</td>
                <td>Estonia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>11 <span class="badge bg-soft-dark text-dark ms-1">+4 today</span></td>
                <td>$3,582.46</td>
                <td>Aug 17, 2020, 12:56 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck16">
                    <label class="form-check-label" for="usersDataCheck16"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">M</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Mark Colbert</span>
                    </div>
                  </a>
                </td>
                <td>mark@site.com</td>
                <td>+1-235-235-7482</td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>4</td>
                <td>$481.00</td>
                <td>Aug 17, 2020, 12:54 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck9">
                    <label class="form-check-label" for="usersDataCheck9"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Costa Quinn</span>
                    </div>
                  </a>
                </td>
                <td>costa@site.com</td>
                <td>+1-543-346-6343</td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>9</td>
                <td>$2,591.00</td>
                <td>Aug 17, 2020, 12:48 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck10">
                    <label class="form-check-label" for="usersDataCheck10"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">R</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Rachel Doe <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </a>
                </td>
                <td>rachel@site.com</td>
                <td>+1-232-643-3643</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>21</td>
                <td>$5,219.18</td>
                <td>Aug 17, 2020, 12:41 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck11">
                    <label class="form-check-label" for="usersDataCheck11"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Linda Bates</span>
                    </div>
                  </a>
                </td>
                <td>linda@site.com</td>
                <td>+1-123-523-5433</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>32 <span class="badge bg-soft-dark text-dark ms-1">+1 today</span></td>
                <td>$8,281.99</td>
                <td>Aug 17, 2020, 12:36 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck12">
                    <label class="form-check-label" for="usersDataCheck12"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Brian Halligan</span>
                    </div>
                  </a>
                </td>
                <td>brian@site.com</td>
                <td>+1-141-463-1512</td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>1</td>
                <td>$100.00</td>
                <td>Aug 17, 2020, 12:25 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck13">
                    <label class="form-check-label" for="usersDataCheck13"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">C</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Chris Mathew</span>
                    </div>
                  </a>
                </td>
                <td>chris@site.com</td>
                <td>+1-253-463-1242</td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>1</td>
                <td>$26.00</td>
                <td>Aug 16, 2020, 4:31 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck14">
                    <label class="form-check-label" for="usersDataCheck14"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </a>
                </td>
                <td>clarice@site.com</td>
                <td>+1-532-325-3253</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>2</td>
                <td>$274.28</td>
                <td>Aug 16, 2020, 3:26 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck15">
                    <label class="form-check-label" for="usersDataCheck15"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Lewis Clarke</span>
                    </div>
                  </a>
                </td>
                <td>lewis@site.com</td>
                <td>+1-235-235-2355</td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>4</td>
                <td>$999.00</td>
                <td>Aug 16, 2020, 2:54 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck8">
                    <label class="form-check-label" for="usersDataCheck8"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Sam Kart</span>
                    </div>
                  </a>
                </td>
                <td>sam@site.com</td>
                <td>+1-457-745-7555</td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>62 <span class="badge bg-soft-dark text-dark ms-1">+9 today</span></td>
                <td>$9,281.58</td>
                <td>Aug 16, 2020, 2:48 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck17">
                    <label class="form-check-label" for="usersDataCheck17"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">J</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Johnny Appleseed</span>
                    </div>
                  </a>
                </td>
                <td>johnny@site.com</td>
                <td>+1-457-734-4544</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>30</td>
                <td>$23,291.37</td>
                <td>Aug 16, 2020, 2:40 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck18">
                    <label class="form-check-label" for="usersDataCheck18"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">P</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Phileas Fogg</span>
                    </div>
                  </a>
                </td>
                <td>phileas@site.com</td>
                <td>+1-065-084-8658</td>
                <td>Spain</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>10</td>
                <td>$82.39</td>
                <td>Aug 16, 2020, 1:59 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck19">
                    <label class="form-check-label" for="usersDataCheck19"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Mark Williams <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </a>
                </td>
                <td>mark@site.com</td>
                <td>+1-340-055-4733</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Disabled
                </td>
                <td>7</td>
                <td>$343.93</td>
                <td>Aug 16, 2020, 1:55 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck20">
                    <label class="form-check-label" for="usersDataCheck20"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">T</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Timothy Silva</span>
                    </div>
                  </a>
                </td>
                <td>timothy@site.com</td>
                <td>+1-083-642-4673</td>
                <td>Italy</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>9</td>
                <td>$2,238.29</td>
                <td>Aug 16, 2020, 1:15 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck21">
                    <label class="form-check-label" for="usersDataCheck21"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">G</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Gary Bishop <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </a>
                </td>
                <td>gary@site.com</td>
                <td>+1-325-547-5683</td>
                <td>Latvia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>6 <span class="badge bg-soft-dark text-dark ms-1">+1 today</span></td>
                <td>$2,120.29</td>
                <td>Aug 16, 2020, 1:15 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck22">
                    <label class="form-check-label" for="usersDataCheck22"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">Y</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Yorker Scogings</span>
                    </div>
                  </a>
                </td>
                <td>yorker@site.com</td>
                <td>+1-954-236-3235</td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>3</td>
                <td>$882.00</td>
                <td>Aug 16, 2020, 1:15 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck23">
                    <label class="form-check-label" for="usersDataCheck23"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">F</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Frank Phillips</span>
                    </div>
                  </a>
                </td>
                <td>frank@site.com</td>
                <td>+1-253-574-3422</td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>1</td>
                <td>$92.00</td>
                <td>Aug 16, 2020, 1:15 (ET)</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck24">
                    <label class="form-check-label" for="usersDataCheck24"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./ecommerce-customer-details.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">E</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="h5 text-inherit">Elizabeth Carter</span>
                    </div>
                  </a>
                </td>
                <td>eliz@site.com</td>
                <td>+1-800-724-3303</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>2</td>
                <td>$50.00</td>
                <td>Aug 16, 2020, 1:15 (ET)</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="10">10</option>
                    <option value="15" selected>15</option>
                    <option value="20">20</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ONLY DEV -->

  <!-- Builder -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBuilder" aria-labelledby="offcanvasBuilderLabel">
    <div class="offcanvas-header align-items-start">
      <div>
        <h3 id="offcanvasBuilderLabel">Front Builder</h3>
        <p class="mb-0">Customize the overview page layout.</p>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
      <h4 class="mb-1">Theme Appearance Mode</h4>
      <p>Check out all <a href="./documentation/layout.html">Layout Options here</a></p>

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked value="default">
            <label class="form-check-label mb-2" for="layoutSkinsRadio1">
              <img class="form-check-img" src="./assets/img/415x310/img1.jpg" alt="Image Description">
            </label>
            <span class="form-check-text">Default</span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="dark">
            <label class="form-check-label mb-2" for="layoutSkinsRadio2">
              <img class="form-check-img" src="./assets/img/415x310/img2.jpg" alt="Image Description">
            </label>
            <span class="form-check-text">Dark Mode</span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio1" checked value="default">
            <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio1">
              <img class="form-check-img" src="./assets/svg/layouts-light/sidebar-default.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/sidebar-default.svg" alt="Image Description" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text">Default</span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio2" value="navbar-dark">
            <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio2">
              <img class="form-check-img" src="./assets/svg/layouts-light/sidebar-dark.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/sidebar-dark.svg" alt="Image Description" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text">Dark</span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <h4 class="mb-1">Sidebar Nav</h4>
      <p>Check out all <a href="./documentation/layout.html">Layout Options here</a></p>

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="sidebarNavOptions" id="sidebarNavOptions1" value="pills" checked>
            <label class="form-check-label mb-2" for="sidebarNavOptions1">
              <img class="form-check-img" src="./assets/svg/layouts-light/demo-layouts-default-classic.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/demo-layouts-default-classic.svg" alt="Image Description" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text">Pills</span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="sidebarNavOptions" id="sidebarNavOptions2" value="tabs">
            <label class="form-check-label mb-2" for="sidebarNavOptions2">
              <img class="form-check-img" src="./assets/svg/layouts-light/demo-layouts-nav-tabs.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/demo-layouts-nav-tabs.svg" alt="Image Description" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text">Tabs</span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <!-- Form Switch -->
      <label class="row form-check form-switch mb-3" for="builderFluidSwitch">
        <span class="col-10 ms-0">
          <span class="d-block h4 mb-1">Header Layout Options</span>
          <span class="d-block fs-5">Toggle to container-fluid layout</span>
        </span>
        <span class="col-2 text-end">
          <input type="checkbox" class="form-check-input" id="builderFluidSwitch">
        </span>
      </label>
      <!-- End Form Switch -->

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions1" value="single-header">
            <label class="form-check-label mb-2" for="headerLayoutOptions1">
              <img class="form-check-img" src="./assets/svg/layouts/header-default-container.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="form-check-img" src="./assets/svg/layouts-light/header-default-container.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </label>
            <span class="form-check-text">Default</span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions2" value="double-header">
            <label class="form-check-label mb-2" for="headerLayoutOptions2">
              <img class="form-check-img" src="./assets/svg/layouts/header-double-line-container.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="form-check-img" src="./assets/svg/layouts-light/header-double-line-container.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </label>
            <span class="form-check-text">Double line</span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->
    </div>

    <!-- Footer -->
    <div class="offcanvas-footer">
      <div class="row gx-3">
        <div class="col">
          <div class="d-grid">
            <button type="button" id="js-builder-reset" class="btn btn-white btn-lg">
              <i class="bi-arrow-counterclockwise"></i> Reset
            </button>
          </div>
        </div>
        <!-- End Col -->

        <div class="col">
          <div class="d-grid">
            <button type="button" id="js-builder-preview" class="btn btn-primary btn-lg">
              <i class="eye-visible"></i> Preview
            </button>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Footer -->
  </div>

  <!-- End Builder -->

  <!-- Builder Toggle -->
  <div id="builderOffcanvas" class="position-fixed bottom-0 end-0 me-5 mb-5" style="z-index: 3;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBuilder" aria-controls="offcanvasBuilder">
    <a class="btn btn-dark btn-lg" href="javascript:;">
      <i class="bi-sliders fs-6 me-2"></i> Customize
    </a>
  </div>
  <!-- End Builder Toggle -->

  <div class="d-none js-build-layouts">
    <div class="js-build-layout-header-default">
      <!-- Single Header -->
      <header id="header" class="navbar navbar-expand-lg navbar-bordered bg-white  ">
        <div class="container">
          <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Logo -->

            <a class="navbar-brand" href="./index.html" aria-label="Front">
              <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
              <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-secondary-content">
              <!-- Navbar -->
              <ul class="navbar-nav">
                <li class="nav-item d-none d-md-inline-block">
                  <!-- Notification -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                      <i class="bi-bell"></i>
                      <span class="btn-status btn-sm-status btn-status-danger"></span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                      <div class="card">
                        <!-- Header -->
                        <div class="card-header card-header-content-between">
                          <h4 class="card-title mb-0">Notifications</h4>

                          <!-- Unfold -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive all
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-gift dropdown-item-icon"></i> What's new?
                              </a>
                              <div class="dropdown-divider"></div>
                              <span class="dropdown-header">Feedback</span>
                              <a class="dropdown-item" href="#">
                                <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                              </a>
                            </div>
                          </div>
                          <!-- End Unfold -->
                        </div>
                        <!-- End Header -->

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                          </li>
                        </ul>
                        <!-- End Nav -->

                        <!-- Body -->
                        <div class="card-body-height">
                          <!-- Tab Content -->
                          <div class="tab-content" id="notificationTabContent">
                            <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                              <!-- List Group -->
                              <ul class="list-group list-group-flush navbar-card-list-group">
                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                          <label class="form-check-label" for="notificationCheck1"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <img class="avatar avatar-sm avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Brian Warner</h5>
                                      <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">2hr</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                          <label class="form-check-label" for="notificationCheck2"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                          <span class="avatar-initials">K</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Klara Hampton</h5>
                                      <p class="text-body fs-5">mentioned you in a comment</p>
                                      <blockquote class="blockquote blockquote-sm">
                                        Nice work, love! You really nailed it. Keep it up!
                                      </blockquote>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">10hr</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                          <label class="form-check-label" for="notificationCheck3"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Ruby Walter</h5>
                                      <p class="text-body fs-5">joined the Slack group HS Team</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">3dy</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                          <label class="form-check-label" for="notificationCheck4"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">from Google</h5>
                                      <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">17dy</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                          <label class="form-check-label" for="notificationCheck5"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Sara Villar</h5>
                                      <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">2mn</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                              </ul>
                              <!-- End List Group -->
                            </div>

                            <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                              <!-- List Group -->
                              <ul class="list-group list-group-flush navbar-card-list-group">
                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                          <label class="form-check-label" for="notificationCheck6"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                          <span class="avatar-initials">A</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Anne Richard</h5>
                                      <p class="text-body fs-5">accepted your invitation to join Notion</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">1dy</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                          <label class="form-check-label" for="notificationCheck7"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Finch Hoot</h5>
                                      <p class="text-body fs-5">left Slack group HS projects</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">1dy</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                          <label class="form-check-label" for="notificationCheck8"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-dark avatar-circle">
                                          <span class="avatar-initials">HS</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Htmlstream</h5>
                                      <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">6dy</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                          <label class="form-check-label" for="notificationCheck9"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Linda Bates</h5>
                                      <p class="text-body fs-5">Accepted your connection</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">17dy</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->

                                <!-- Item -->
                                <li class="list-group-item form-check-select">
                                  <div class="row">
                                    <div class="col-auto">
                                      <div class="d-flex align-items-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                          <label class="form-check-label" for="notificationCheck10"></label>
                                          <span class="form-check-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                          <span class="avatar-initials">L</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col ms-n2">
                                      <h5 class="mb-1">Lewis Clarke</h5>
                                      <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                                    </div>
                                    <!-- End Col -->

                                    <small class="col-auto text-muted text-cap">2mts</small>
                                    <!-- End Col -->
                                  </div>
                                  <!-- End Row -->

                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                              </ul>
                              <!-- End List Group -->
                            </div>
                          </div>
                          <!-- End Tab Content -->
                        </div>
                        <!-- End Body -->

                        <!-- Card Footer -->
                        <a class="card-footer text-center" href="#">
                          View all notifications <i class="bi-chevron-right"></i>
                        </a>
                        <!-- End Card Footer -->
                      </div>
                    </div>
                  </div>
                  <!-- End Notification -->
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                  <!-- Apps -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                      <i class="bi-app-indicator"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                      <div class="card">
                        <!-- Header -->
                        <div class="card-header">
                          <h4 class="card-title">Web apps &amp; services</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body card-body-height">
                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="mb-0">Atlassian</h5>
                                <p class="card-text text-body">Security and control across Cloud</p>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                                <p class="card-text text-body">Email collaboration software</p>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="mb-0">Google webdev</h5>
                                <p class="card-text text-body">Work involved in developing a website</p>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="mb-0">Frontapp</h5>
                                <p class="card-text text-body">The inbox for teams</p>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="mb-0">HS Support</h5>
                                <p class="card-text text-body">Customer service and support</p>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <div class="avatar avatar-sm avatar-soft-dark">
                                  <span class="avatar-initials"><i class="bi-grid"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="mb-0">More Front products</h5>
                                <p class="card-text text-body">Check out more HS products</p>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Body -->

                        <!-- Footer -->
                        <a class="card-footer text-center" href="#">
                          View all apps <i class="bi-chevron-right"></i>
                        </a>
                        <!-- End Footer -->
                      </div>
                    </div>
                  </div>
                  <!-- End Apps -->
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                  <!-- Activity -->
                  <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
                    <i class="bi-x-diamond"></i>
                  </button>
                  <!-- Activity -->
                </li>

                <li class="nav-item">
                  <!-- Style Switcher -->
                  <div class="dropdown ">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                    </button>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                      <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                        <i class="bi-moon-stars me-2"></i>
                        <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                      </a>
                      <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                        <i class="bi-brightness-high me-2"></i>
                        <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                      </a>
                      <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                        <i class="bi-moon me-2"></i>
                        <span class="text-truncate" title="Dark">Dark</span>
                      </a>
                    </div>
                  </div>

                  <!-- End Style Switcher -->
                </li>

                <li class="nav-item">
                  <!-- Account -->
                  <div class="dropdown">
                    <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                      <div class="dropdown-item-text">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-sm avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Mark Williams</h5>
                            <p class="card-text text-body">mark@site.com</p>
                          </div>
                        </div>
                      </div>

                      <div class="dropdown-divider"></div>

                      <!-- Dropdown -->
                      <div class="dropdown">
                        <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                          <a class="dropdown-item" href="#">
                            <span class="legend-indicator bg-success me-1"></span> Available
                          </a>
                          <a class="dropdown-item" href="#">
                            <span class="legend-indicator bg-danger me-1"></span> Busy
                          </a>
                          <a class="dropdown-item" href="#">
                            <span class="legend-indicator bg-warning me-1"></span> Away
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"> Reset status
                          </a>
                        </div>
                      </div>
                      <!-- End Dropdown -->

                      <a class="dropdown-item" href="#">Profile &amp; account</a>
                      <a class="dropdown-item" href="#">Settings</a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-sm avatar-dark avatar-circle">
                              <span class="avatar-initials">HS</span>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-2">
                            <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                            <span class="card-text">hs.example.com</span>
                          </div>
                        </div>
                      </a>

                      <div class="dropdown-divider"></div>

                      <!-- Dropdown -->
                      <div class="dropdown">
                        <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                          <a class="dropdown-item" href="#">
                            Invite people
                          </a>
                          <a class="dropdown-item" href="#">
                            Analytics
                            <i class="bi-box-arrow-in-up-right"></i>
                          </a>
                          <a class="dropdown-item" href="#">
                            Customize Front
                            <i class="bi-box-arrow-in-up-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- End Dropdown -->

                      <a class="dropdown-item" href="#">Manage team</a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" href="#">Sign out</a>
                    </div>
                  </div>
                  <!-- End Account -->
                </li>
              </ul>
              <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>
            <!-- End Toggler -->

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
              <ul class="navbar-nav">
                <!-- Dashboards -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="dashboardsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#" role="button"><i class="bi-house-door dropdown-item-icon"></i> Dashboards</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="dashboardsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item active" href="./index.html">Default</a>
                    <a class="dropdown-item " href="./dashboard-alternative.html">Alternative</a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Dashboards -->

                <!-- Pages -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-files-alt dropdown-item-icon"></i> Pages</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                    <!-- Users -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="usersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Users</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="usersMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./users.html">Overview</a>
                        <a class="dropdown-item " href="./users-leaderboard.html">Leaderboard</a>
                        <a class="dropdown-item " href="./users-add-user.html">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                      </div>
                    </div>
                    <!-- End Users -->

                    <!-- User Profile -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="userProfileMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="userProfileMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./user-profile.html">Profile</a>
                        <a class="dropdown-item " href="./user-profile-teams.html">Teams</a>
                        <a class="dropdown-item " href="./user-profile-projects.html">Projects</a>
                        <a class="dropdown-item " href="./user-profile-connections.html">Connections</a>
                        <a class="dropdown-item " href="./user-profile-my-profile.html">My Profile</a>
                      </div>
                    </div>
                    <!-- End User Profile -->

                    <!-- Account -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="accountMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Account</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./account-settings.html">Settings</a>
                        <a class="dropdown-item " href="./account-billing.html">Billing</a>
                        <a class="dropdown-item " href="./account-invoice.html">Invoice</a>
                      </div>
                    </div>
                    <!-- End Account -->

                    <!-- E-commerce -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="ecommerceMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">E-commerce</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ecommerceMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./ecommerce.html">Overview</a>

                        <!-- Products -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="productsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Products</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="productsMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./ecommerce-products.html">Products</a>
                            <a class="dropdown-item " href="./ecommerce-product-details.html">Product Details</a>
                            <a class="dropdown-item " href="./ecommerce-add-product.html">Add Product</a>
                          </div>
                        </div>
                        <!-- End Products -->

                        <!-- Products -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="ordersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Orders</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ordersMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./ecommerce-orders.html">Orders</a>
                            <a class="dropdown-item " href="./ecommerce-order-details.html">Order Details</a>
                          </div>
                        </div>
                        <!-- End Products -->

                        <!-- Customers -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="customersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Customers</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="customersMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./ecommerce-customers.html">Customers</a>
                            <a class="dropdown-item " href="./ecommerce-customer-details.html">Customer Details</a>
                            <a class="dropdown-item " href="./ecommerce-add-customers.html">Add Customers</a>
                          </div>
                        </div>
                        <!-- End Customers -->

                        <a class="dropdown-item " href="./ecommerce-referrals.html">Referrals</a>
                        <a class="dropdown-item " href="./ecommerce-manage-reviews.html">Manage Reviews</a>
                        <a class="dropdown-item " href="./ecommerce-checkout.html">Checkout</a>
                      </div>
                    </div>
                    <!-- End E-commerce -->

                    <!-- Projects -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="projectsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Projects</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectsMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./projects.html">Overview</a>
                        <a class="dropdown-item " href="./projects-timeline.html">Timeline</a>
                      </div>
                    </div>
                    <!-- End Projects -->

                    <!-- Project -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="projectMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Project</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./project.html">Overview</a>
                        <a class="dropdown-item " href="./project-files.html">Files</a>
                        <a class="dropdown-item " href="./project-activity.html">Activity</a>
                        <a class="dropdown-item " href="./project-teams.html">Teams</a>
                        <a class="dropdown-item " href="./project-settings.html">Settings</a>
                      </div>
                    </div>
                    <!-- End Project -->

                    <!-- Authentication -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="authenticationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Authentication</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="authenticationMegaMenu" style="min-width: 14rem;">
                        <!-- Log In -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="loginMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Log In</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="loginMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-login-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-login-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Log In -->

                        <!-- Sign Up -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="signupMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Sign Up</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="signupMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-signup-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-signup-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Sign Up -->

                        <!-- Reset Password -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="resetPasswordMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Reset Password</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="resetPasswordMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-reset-password-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-reset-password-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Reset Password -->

                        <!-- Email Verification -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="emailVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Email Verification</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="emailVerificationMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-email-verification-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-email-verification-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Email Verification -->

                        <!-- 2-step Verification -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="2stepVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">2-step Verification</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="2stepVerificationMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-2-step-verification-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-2-step-verification-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End 2-step Verification -->

                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                        <a class="dropdown-item " href="./error-404.html">Error 404</a>
                        <a class="dropdown-item " href="./error-500.html">Error 500</a>
                      </div>
                    </div>
                    <!-- End Authentication -->

                    <a class="dropdown-item " href="./api-keys.html" data-placement="left">API Keys</a>
                    <a class="dropdown-item " href="./welcome-page.html" data-placement="left">Welcome Page</a>
                    <a class="dropdown-item " href="./landing.html" data-placement="left">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Pages -->

                <!-- Apps -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="appsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-app-indicator dropdown-item-icon"></i> Apps</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="appsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="./apps-kanban.html">Kanban</a>
               
                  </div>
                </li>
                <!-- End Apps -->

                <li class="nav-item">
                  <a class="nav-link " href="./layouts/index.html">
                    <i class="bi-grid-1x2 dropdown-item-icon"></i> Layouts
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="./documentation/index.html" data-placement="left">
                    <i class="bi-book dropdown-item-icon"></i> Docs
                  </a>
                </li>
              </ul>

            </div>
            <!-- End Collapse -->
          </nav>
        </div>
      </header>

      <!-- End Single Header -->
    </div>
    <div class="js-build-layout-header-double">
      <!-- Double Header -->
      <header id="header" class="navbar navbar-expand-lg navbar-bordered navbar-spacer-y-0 flex-lg-column">
        <div class="navbar-dark w-100 bg-dark py-2">
          <div class="container">
            <div class="navbar-nav-wrap">
              <!-- Logo -->
              <a class="navbar-brand" href="./index.html" aria-label="Front">
                <img class="navbar-brand-logo" src="./assets/svg/logos/logo-white.svg" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Content Start -->
              <div class="navbar-nav-wrap-content-start">
                <!-- Search Form -->
                <div class="d-none d-lg-block">
                  <div class="dropdown ms-2">
                    <!-- Input Group -->
                    <div class="d-none d-lg-block">
                      <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-search"></i>
                        </div>

                        <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                               "clearIcon": "#clearSearchResultsIcon",
                               "dropMenuElement": "#searchDropdownMenu",
                               "dropMenuOffset": 20,
                               "toggleIconOnFocus": true,
                               "activeClass": "focus"
                             }'>
                        <a class="input-group-append input-group-text" href="javascript:;">
                          <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
                        </a>
                      </div>
                    </div>

                    <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                               "clearIcon": "#clearSearchResultsIcon",
                               "dropMenuElement": "#searchDropdownMenu",
                               "dropMenuOffset": 20,
                               "toggleIconOnFocus": true,
                               "activeClass": "focus"
                             }'>
                      <i class="bi-search"></i>
                    </button>
                    <!-- End Input Group -->

                    <!-- Card Search Content -->
                    <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                      <div class="card">
                        <!-- Body -->
                        <div class="card-body-height">
                          <div class="d-lg-none">
                            <div class="input-group input-group-merge navbar-input-group mb-5">
                              <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                              </div>

                              <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                              <a class="input-group-append input-group-text" href="javascript:;">
                                <i class="bi-x-lg"></i>
                              </a>
                            </div>
                          </div>

                          <span class="dropdown-header">Recent searches</span>

                          <div class="dropdown-item bg-transparent text-wrap">
                            <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html">
                              Gulp <i class="bi-search ms-1"></i>
                            </a>
                            <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html">
                              Notification panel <i class="bi-search ms-1"></i>
                            </a>
                          </div>

                          <div class="dropdown-divider"></div>

                          <span class="dropdown-header">Tutorials</span>

                          <a class="dropdown-item" href="./index.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <span class="icon icon-soft-dark icon-xs icon-circle">
                                  <i class="bi-sliders"></i>
                                </span>
                              </div>

                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>How to set up Gulp?</span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="./index.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <span class="icon icon-soft-dark icon-xs icon-circle">
                                  <i class="bi-paint-bucket"></i>
                                </span>
                              </div>

                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>How to change theme color?</span>
                              </div>
                            </div>
                          </a>

                          <div class="dropdown-divider"></div>

                          <span class="dropdown-header">Members</span>

                          <a class="dropdown-item" href="./index.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="./index.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>David Harrison</span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="./index.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                                  <span class="avatar-initials">A</span>
                                </div>
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>Anne Richard</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Body -->

                        <!-- Footer -->
                        <a class="card-footer text-center" href="./index.html">
                          See all results <i class="bi-chevron-right small"></i>
                        </a>
                        <!-- End Footer -->
                      </div>
                    </div>
                    <!-- End Card Search Content -->

                  </div>

                </div>
                <!-- End Search Form -->
              </div>
              <!-- End Content Start -->

              <!-- Content End -->
              <div class="navbar-nav-wrap-content-end">
                <!-- Navbar -->
                <ul class="navbar-nav">
                  <li class="nav-item d-none d-md-inline-block">
                    <!-- Notification -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-ghost-light btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                        <i class="bi-bell"></i>
                        <span class="btn-status btn-sm-status btn-status-danger"></span>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                        <div class="card">
                          <!-- Header -->
                          <div class="card-header card-header-content-between">
                            <h4 class="card-title mb-0">Notifications</h4>

                            <!-- Unfold -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                                <span class="dropdown-header">Settings</span>
                                <a class="dropdown-item" href="#">
                                  <i class="bi-archive dropdown-item-icon"></i> Archive all
                                </a>
                                <a class="dropdown-item" href="#">
                                  <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                                </a>
                                <a class="dropdown-item" href="#">
                                  <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                                </a>
                                <a class="dropdown-item" href="#">
                                  <i class="bi-gift dropdown-item-icon"></i> What's new?
                                </a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-header">Feedback</span>
                                <a class="dropdown-item" href="#">
                                  <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                                </a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                          <!-- End Header -->

                          <!-- Nav -->
                          <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                            </li>
                          </ul>
                          <!-- End Nav -->

                          <!-- Body -->
                          <div class="card-body-height">
                            <!-- Tab Content -->
                            <div class="tab-content" id="notificationTabContent">
                              <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                                <!-- List Group -->
                                <ul class="list-group list-group-flush navbar-card-list-group">
                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                            <label class="form-check-label" for="notificationCheck1"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <img class="avatar avatar-sm avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Brian Warner</h5>
                                        <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">2hr</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                            <label class="form-check-label" for="notificationCheck2"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">K</span>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Klara Hampton</h5>
                                        <p class="text-body fs-5">mentioned you in a comment</p>
                                        <blockquote class="blockquote blockquote-sm">
                                          Nice work, love! You really nailed it. Keep it up!
                                        </blockquote>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">10hr</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                            <label class="form-check-label" for="notificationCheck3"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Ruby Walter</h5>
                                        <p class="text-body fs-5">joined the Slack group HS Team</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">3dy</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                            <label class="form-check-label" for="notificationCheck4"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">from Google</h5>
                                        <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">17dy</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                            <label class="form-check-label" for="notificationCheck5"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Sara Villar</h5>
                                        <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">2mn</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->
                                </ul>
                                <!-- End List Group -->
                              </div>

                              <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                                <!-- List Group -->
                                <ul class="list-group list-group-flush navbar-card-list-group">
                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                            <label class="form-check-label" for="notificationCheck6"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">A</span>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Anne Richard</h5>
                                        <p class="text-body fs-5">accepted your invitation to join Notion</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">1dy</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                            <label class="form-check-label" for="notificationCheck7"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Finch Hoot</h5>
                                        <p class="text-body fs-5">left Slack group HS projects</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">1dy</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                            <label class="form-check-label" for="notificationCheck8"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-dark avatar-circle">
                                            <span class="avatar-initials">HS</span>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Htmlstream</h5>
                                        <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">6dy</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                            <label class="form-check-label" for="notificationCheck9"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Linda Bates</h5>
                                        <p class="text-body fs-5">Accepted your connection</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">17dy</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->

                                  <!-- Item -->
                                  <li class="list-group-item form-check-select">
                                    <div class="row">
                                      <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                            <label class="form-check-label" for="notificationCheck10"></label>
                                            <span class="form-check-stretched-bg"></span>
                                          </div>
                                          <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">L</span>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Col -->

                                      <div class="col ms-n2">
                                        <h5 class="mb-1">Lewis Clarke</h5>
                                        <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                                      </div>
                                      <!-- End Col -->

                                      <small class="col-auto text-muted text-cap">2mts</small>
                                      <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <a class="stretched-link" href="#"></a>
                                  </li>
                                  <!-- End Item -->
                                </ul>
                                <!-- End List Group -->
                              </div>
                            </div>
                            <!-- End Tab Content -->
                          </div>
                          <!-- End Body -->

                          <!-- Card Footer -->
                          <a class="card-footer text-center" href="#">
                            View all notifications <i class="bi-chevron-right"></i>
                          </a>
                          <!-- End Card Footer -->
                        </div>
                      </div>
                    </div>
                    <!-- End Notification -->
                  </li>

                  <li class="nav-item d-none d-sm-inline-block">
                    <!-- Apps -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-icon btn-ghost-light rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                        <i class="bi-app-indicator"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                        <div class="card">
                          <!-- Header -->
                          <div class="card-header">
                            <h4 class="card-title">Web apps &amp; services</h4>
                          </div>
                          <!-- End Header -->

                          <!-- Body -->
                          <div class="card-body card-body-height">
                            <a class="dropdown-item" href="#">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                                </div>
                                <div class="flex-grow-1 text-truncate ms-3">
                                  <h5 class="mb-0">Atlassian</h5>
                                  <p class="card-text text-body">Security and control across Cloud</p>
                                </div>
                              </div>
                            </a>

                            <a class="dropdown-item" href="#">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                                </div>
                                <div class="flex-grow-1 text-truncate ms-3">
                                  <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                                  <p class="card-text text-body">Email collaboration software</p>
                                </div>
                              </div>
                            </a>

                            <a class="dropdown-item" href="#">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                                </div>
                                <div class="flex-grow-1 text-truncate ms-3">
                                  <h5 class="mb-0">Google webdev</h5>
                                  <p class="card-text text-body">Work involved in developing a website</p>
                                </div>
                              </div>
                            </a>

                            <a class="dropdown-item" href="#">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                                </div>
                                <div class="flex-grow-1 text-truncate ms-3">
                                  <h5 class="mb-0">Frontapp</h5>
                                  <p class="card-text text-body">The inbox for teams</p>
                                </div>
                              </div>
                            </a>

                            <a class="dropdown-item" href="#">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                                </div>
                                <div class="flex-grow-1 text-truncate ms-3">
                                  <h5 class="mb-0">HS Support</h5>
                                  <p class="card-text text-body">Customer service and support</p>
                                </div>
                              </div>
                            </a>

                            <a class="dropdown-item" href="#">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="avatar avatar-sm avatar-soft-dark">
                                    <span class="avatar-initials"><i class="bi-grid"></i></span>
                                  </div>
                                </div>
                                <div class="flex-grow-1 text-truncate ms-3">
                                  <h5 class="mb-0">More Front products</h5>
                                  <p class="card-text text-body">Check out more HS products</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Body -->

                          <!-- Footer -->
                          <a class="card-footer text-center" href="#">
                            View all apps <i class="bi-chevron-right"></i>
                          </a>
                          <!-- End Footer -->
                        </div>
                      </div>
                    </div>
                    <!-- End Apps -->
                  </li>

                  <li class="nav-item d-none d-sm-inline-block">
                    <!-- Activity -->
                    <button class="btn btn-ghost-light btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
                      <i class="bi-x-diamond"></i>
                    </button>
                    <!-- Activity -->
                  </li>

                  <li class="nav-item">
                    <!-- Style Switcher -->
                    <div class="dropdown ">
                      <button type="button" class="btn btn-ghost-light btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                      </button>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                        <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                          <i class="bi-moon-stars me-2"></i>
                          <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                        </a>
                        <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                          <i class="bi-brightness-high me-2"></i>
                          <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                        </a>
                        <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                          <i class="bi-moon me-2"></i>
                          <span class="text-truncate" title="Dark">Dark</span>
                        </a>
                      </div>
                    </div>

                    <!-- End Style Switcher -->
                  </li>

                  <li class="nav-item">
                    <!-- Account -->
                    <div class="dropdown">
                      <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                        </div>
                      </a>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                        <div class="dropdown-item-text">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h5 class="mb-0">Mark Williams</h5>
                              <p class="card-text text-body">mark@site.com</p>
                            </div>
                          </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                            <a class="dropdown-item" href="#">
                              <span class="legend-indicator bg-success me-1"></span> Available
                            </a>
                            <a class="dropdown-item" href="#">
                              <span class="legend-indicator bg-danger me-1"></span> Busy
                            </a>
                            <a class="dropdown-item" href="#">
                              <span class="legend-indicator bg-warning me-1"></span> Away
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"> Reset status
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->

                        <a class="dropdown-item" href="#">Profile &amp; account</a>
                        <a class="dropdown-item" href="#">Settings</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <div class="avatar avatar-sm avatar-dark avatar-circle">
                                <span class="avatar-initials">HS</span>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-2">
                              <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                              <span class="card-text">hs.example.com</span>
                            </div>
                          </div>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                            <a class="dropdown-item" href="#">
                              Invite people
                            </a>
                            <a class="dropdown-item" href="#">
                              Analytics
                              <i class="bi-box-arrow-in-up-right"></i>
                            </a>
                            <a class="dropdown-item" href="#">
                              Customize Front
                              <i class="bi-box-arrow-in-up-right"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->

                        <a class="dropdown-item" href="#">Manage team</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">Sign out</a>
                      </div>
                    </div>
                    <!-- End Account -->
                  </li>

                  <li class="nav-item">
                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleLineContainerNavDropdown" aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                      </span>
                      <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                      </span>
                    </button>
                    <!-- End Toggler -->
                  </li>
                </ul>
                <!-- End Navbar -->
              </div>
              <!-- End Content End -->
            </div>
          </div>
        </div>

        <div class="container">
          <nav class="js-mega-menu flex-grow-1">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarDoubleLineContainerNavDropdown">
              <ul class="navbar-nav">
                <!-- Dashboards -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="dashboardsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#" role="button"><i class="bi-house-door dropdown-item-icon"></i> Dashboards</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="dashboardsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item active" href="./index.html">Default</a>
                    <a class="dropdown-item " href="./dashboard-alternative.html">Alternative</a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Dashboards -->

                <!-- Pages -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-files-alt dropdown-item-icon"></i> Pages</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                    <!-- Users -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="usersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Users</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="usersMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./users.html">Overview</a>
                        <a class="dropdown-item " href="./users-leaderboard.html">Leaderboard</a>
                        <a class="dropdown-item " href="./users-add-user.html">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                      </div>
                    </div>
                    <!-- End Users -->

                    <!-- User Profile -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="userProfileMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="userProfileMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./user-profile.html">Profile</a>
                        <a class="dropdown-item " href="./user-profile-teams.html">Teams</a>
                        <a class="dropdown-item " href="./user-profile-projects.html">Projects</a>
                        <a class="dropdown-item " href="./user-profile-connections.html">Connections</a>
                        <a class="dropdown-item " href="./user-profile-my-profile.html">My Profile</a>
                      </div>
                    </div>
                    <!-- End User Profile -->

                    <!-- Account -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="accountMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Account</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./account-settings.html">Settings</a>
                        <a class="dropdown-item " href="./account-billing.html">Billing</a>
                        <a class="dropdown-item " href="./account-invoice.html">Invoice</a>
                      </div>
                    </div>
                    <!-- End Account -->

                    <!-- E-commerce -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="ecommerceMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">E-commerce</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ecommerceMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./ecommerce.html">Overview</a>

                        <!-- Products -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="productsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Products</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="productsMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./ecommerce-products.html">Products</a>
                            <a class="dropdown-item " href="./ecommerce-product-details.html">Product Details</a>
                            <a class="dropdown-item " href="./ecommerce-add-product.html">Add Product</a>
                          </div>
                        </div>
                        <!-- End Products -->

                        <!-- Products -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="ordersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Orders</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ordersMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./ecommerce-orders.html">Orders</a>
                            <a class="dropdown-item " href="./ecommerce-order-details.html">Order Details</a>
                          </div>
                        </div>
                        <!-- End Products -->

                        <!-- Customers -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="customersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Customers</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="customersMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./ecommerce-customers.html">Customers</a>
                            <a class="dropdown-item " href="./ecommerce-customer-details.html">Customer Details</a>
                            <a class="dropdown-item " href="./ecommerce-add-customers.html">Add Customers</a>
                          </div>
                        </div>
                        <!-- End Customers -->

                        <a class="dropdown-item " href="./ecommerce-referrals.html">Referrals</a>
                        <a class="dropdown-item " href="./ecommerce-manage-reviews.html">Manage Reviews</a>
                        <a class="dropdown-item " href="./ecommerce-checkout.html">Checkout</a>
                      </div>
                    </div>
                    <!-- End E-commerce -->

                    <!-- Projects -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="projectsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Projects</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectsMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./projects.html">Overview</a>
                        <a class="dropdown-item " href="./projects-timeline.html">Timeline</a>
                      </div>
                    </div>
                    <!-- End Projects -->

                    <!-- Project -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="projectMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Project</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="./project.html">Overview</a>
                        <a class="dropdown-item " href="./project-files.html">Files</a>
                        <a class="dropdown-item " href="./project-activity.html">Activity</a>
                        <a class="dropdown-item " href="./project-teams.html">Teams</a>
                        <a class="dropdown-item " href="./project-settings.html">Settings</a>
                      </div>
                    </div>
                    <!-- End Project -->

                    <!-- Authentication -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="authenticationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Authentication</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="authenticationMegaMenu" style="min-width: 14rem;">
                        <!-- Log In -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="loginMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Log In</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="loginMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-login-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-login-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Log In -->

                        <!-- Sign Up -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="signupMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Sign Up</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="signupMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-signup-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-signup-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Sign Up -->

                        <!-- Reset Password -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="resetPasswordMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Reset Password</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="resetPasswordMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-reset-password-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-reset-password-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Reset Password -->

                        <!-- Email Verification -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="emailVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Email Verification</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="emailVerificationMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-email-verification-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-email-verification-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End Email Verification -->

                        <!-- 2-step Verification -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="2stepVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">2-step Verification</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="2stepVerificationMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="./authentication-2-step-verification-basic.html">Basic</a>
                            <a class="dropdown-item " href="./authentication-2-step-verification-cover.html">Cover</a>
                          </div>
                        </div>
                        <!-- End 2-step Verification -->

                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                        <a class="dropdown-item " href="./error-404.html">Error 404</a>
                        <a class="dropdown-item " href="./error-500.html">Error 500</a>
                      </div>
                    </div>
                    <!-- End Authentication -->

                    <a class="dropdown-item " href="./api-keys.html" data-placement="left">API Keys</a>
                    <a class="dropdown-item " href="./welcome-page.html" data-placement="left">Welcome Page</a>
                    <a class="dropdown-item " href="./landing.html" data-placement="left">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Pages -->

                <!-- Apps -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="appsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-app-indicator dropdown-item-icon"></i> Apps</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="appsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="./apps-kanban.html">Kanban</a>
        </div>
                </li>
                <!-- End Apps -->

                <li class="nav-item">
                  <a class="nav-link " href="./layouts/index.html">
                    <i class="bi-grid-1x2 dropdown-item-icon"></i> Layouts
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="./documentation/index.html" data-placement="left">
                    <i class="bi-book dropdown-item-icon"></i> Docs
                  </a>
                </li>
              </ul>

            </div>
            <!-- End Collapse -->
          </nav>
        </div>
      </header>
      <!-- End Double Header -->
    </div>
  </div>

  <script src="./assets/js/demo.js"></script>

  <!-- END ONLY DEV -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Export Customers Modal -->
  <div class="modal fade" id="exportCustomersModal" tabindex="-1" aria-labelledby="exportCustomersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exportCustomersModalLabel">Export customers</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <div class="mb-4">
            <label class="form-label">Export</label>

            <div class="d-grid gap-2">
              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportCustomersRadio" id="exportCustomersRadio1" checked>
                <label class="form-check-label" for="exportCustomersRadio1">
                  Current page
                </label>
              </div>
              <!-- End Form Check -->

              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportCustomersRadio" id="exportCustomersRadio2">
                <label class="form-check-label" for="exportCustomersRadio2">
                  All Customers
                </label>
              </div>
              <!-- End Form Check -->

              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportCustomersRadio" id="exportCustomersRadio3" disabled>
                <label class="form-check-label" for="exportCustomersRadio3">
                  Selected: 24 Customers
                </label>
              </div>
              <!-- End Form Check -->

              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportCustomersRadio" id="exportCustomersRadio4">
                <label class="form-check-label" for="exportCustomersRadio4">
                  Order by date
                </label>
              </div>
              <!-- End Form Check -->
            </div>
          </div>

          <label class="form-label">Export as</label>

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exportCustomersAsRadio" id="exportCustomersAsRadio1" checked>
            <label class="form-check-label" for="exportCustomersAsRadio1">
              CSV for Excel, Numbers, or other spreadsheet programs
            </label>
          </div>
          <!-- End Form Check -->

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exportCustomersAsRadio" id="exportCustomersAsRadio2">
            <label class="form-check-label" for="exportCustomersAsRadio2">
              Plain CSV file
            </label>
          </div>
          <!-- End Form Check -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Export customers</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Export Customers Modal -->

  <!-- Import Customers Modal -->
  <div class="modal fade" id="importCustomersModal" tabindex="-1" aria-labelledby="importCustomersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="importCustomersModalLabel">Import customers by CSV</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <p><a class="link" href="#">Download a sample CSV template</a> to see an example of the format required.</p>

          <!-- Dropzone -->
          <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card mb-4">
            <div class="dz-message">
              <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations-light/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="dark">

              <h5>Drag and drop your file here</h5>

              <p class="mb-2">or</p>

              <span class="btn btn-white btn-sm">Browse files</span>
            </div>
          </div>
          <!-- End Dropzone -->

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="overwriteCurrentCustomersCheckbox">
            <label class="form-check-label" for="overwriteCurrentCustomersCheckbox">
              Overwrite existing customers that have the same email or phone
            </label>
          </div>
          <!-- End Form Check -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Import customers</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Import Customers Modal -->

  <!-- Customers Guide Modal -->
  <div class="modal fade" id="exportCustomersGuideModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center mb-5">
            <h4 class="h1">Welcome to Front Customers</h4>
          </div>

          <!-- Media -->
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/illustrations/oc-chatting.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/illustrations-light/oc-chatting.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <div class="flex-grow-1 ms-4">
              <h4>All your customers in one place</h4>
              <p>The E-commerce is where you can view &amp; manage your customers and all their activity at your business.</p>
            </div>
          </div>
          <!-- End Media -->

          <hr class="my-4">

          <!-- Media -->
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/illustrations/oc-looking-for-answers.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/illustrations-light/oc-looking-for-answers.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <div class="flex-grow-1 ms-4">
              <h4>Search, sort, filter, and group your customers</h4>
              <p>Quickly find the customers you need, and organize them however you prefer.</p>
            </div>
          </div>
          <!-- End Media -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Continue</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Customers Guide Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="./assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      });

      const datatable = HSCore.components.HSDatatables.getItem('datatable')

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        datatable.column(targetColumnIndex).search(elVal).draw();
      });

      $('#datatableSearch').on('mouseup', function (e) {
        var $input = $(this),
          oldValue = $input.val();

        if (oldValue == "") return;

        setTimeout(function(){
          var newValue = $input.val();

          if (newValue == ""){
            // Gotcha
            datatable.search('').draw();
          }
        }, 1);
      });

      $('#toggleColumn_name').change(function (e) {
        datatable.columns(1).visible(e.target.checked)
      })

      $('#toggleColumn_email').change(function (e) {
        datatable.columns(2).visible(e.target.checked)
      })

      datatable.columns(3).visible(false)

      $('#toggleColumn_phone').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      })

      $('#toggleColumn_country').change(function (e) {
        datatable.columns(4).visible(e.target.checked)
      })

      datatable.columns(5).visible(false)

      $('#toggleColumn_account_status').change(function (e) {
        datatable.columns(5).visible(e.target.checked)
      })

      $('#toggleColumn_orders').change(function (e) {
        datatable.columns(6).visible(e.target.checked)
      })

      datatable.columns(8).visible(false)

      $('#toggleColumn_last_activity').change(function (e) {
        datatable.columns(8).visible(e.target.checked)
      })

      $('#toggleColumn_total_spent').change(function (e) {
        datatable.columns(7).visible(e.target.checked)
      })
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF MODAL ON PAGE LOAD
        // =======================================================
        new bootstrap.Modal(document.getElementById('exportCustomersGuideModal')).show()


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->
</body>
</html>