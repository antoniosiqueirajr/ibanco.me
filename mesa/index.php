<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Dashboard | Front - Admin &amp; Dashboard Template</title>

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


<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset navbar-vertical-aside-closed-mode" style="opacity: 1;">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
      <!-- Logo -->
      <a class="navbar-brand" href="./index.html" aria-label="Frente">
        <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logotipo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logotipo" data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logotipo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logotipo" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <div class="navbar-nav-wrap-content-start">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler" style="opacity: 1;">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template="<div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><div class=&quot;tooltip-inner&quot;></div></div>" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Colapso" data-bs-original-title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template="<div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><div class=&quot;tooltip-inner&quot;></div></div>" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Expandir" data-bs-original-title="Expand"></i>
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

              <input type="search" class="js-form-search form-control" placeholder="Pesquise na frente" aria-label="Pesquise na frente" data-hs-form-search-options="{
                       &quot;clearIcon&quot;: &quot;#clearSearchResultsIcon&quot;,
                       &quot;dropMenuElement&quot;: &quot;#searchDropdownMenu&quot;,
                       &quot;dropMenuOffset&quot;: 20,
                       &quot;toggleIconOnFocus&quot;: true,
                       &quot;activeClass&quot;: &quot;focus&quot;
                     }">
              <a class="input-group-append input-group-text" href="javascript:;">
                <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
              </a>
            </div>
          </div>

          <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options="{
                       &quot;clearIcon&quot;: &quot;#clearSearchResultsIcon&quot;,
                       &quot;dropMenuElement&quot;: &quot;#searchDropdownMenu&quot;,
                       &quot;dropMenuOffset&quot;: 20,
                       &quot;toggleIconOnFocus&quot;: true,
                       &quot;activeClass&quot;: &quot;focus&quot;
                     }">
            <i class="bi-search"></i>
          </button>
          <!-- End Input Group -->

          <!-- Card Search Content -->
          <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless animated hs-form-search-menu-hidden hs-form-search-menu-initialized fadeOut">
            <div class="card">
              <!-- Body -->
              <div class="card-body-height">
                <div class="d-lg-none">
                  <div class="input-group input-group-merge navbar-input-group mb-5">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <input type="search" class="form-control" placeholder="Pesquise na frente" aria-label="Pesquise na frente">
                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i class="bi-x-lg"></i>
                    </a>
                  </div>
                </div>

                <span class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pesquisas recentes</font></font></span>

                <div class="dropdown-item bg-transparent text-wrap">
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Gole</font></font><i class="bi-search ms-1"></i>
                  </a>
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Painel de notificação</font></font><i class="bi-search ms-1"></i>
                  </a>
                </div>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tutoriais</font></font></span>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-sliders"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Como configurar o Gulp?</font></font></span>
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
                      <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Como mudar a cor do tema?</font></font></span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Membros</font></font></span>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img10.jpg" alt="Descrição da imagem">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amanda Harvey</font></font><i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Mais endossado"></i></span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Descrição da imagem">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">David Harrison</font></font></span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                        <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A</font></font></span>
                      </div>
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ana Ricardo</font></font></span>
                    </div>
                  </div>
                </a>
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="./index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Ver todos os resultados</font></font><i class="bi-chevron-right small"></i>
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
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation="">
                <i class="bi-bell"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-title mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notificações</font></font></h4>

                    <!-- Unfold -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                        <span class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configurações</font></font></span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-archive dropdown-item-icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arquive tudo
                        </font></font></a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-check2-all dropdown-item-icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">marcar tudo como lido
                        </font></font></a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-toggle-off dropdown-item-icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desativar as notificações
                        </font></font></a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-gift dropdown-item-icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">O que há de novo?
                        </font></font></a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opinião</font></font></span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Relatório
                        </font></font></a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                  <!-- End Header -->

                  <!-- Nav -->
                  <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mensagens (3)</font></font></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arquivado</font></font></a>
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
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked="">
                                    <label class="form-check-label" for="notificationCheck1"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <img class="avatar avatar-sm avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Descrição da imagem">
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Brian Warner</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">alterou um problema de "Em andamento" para</font></font><span class="badge bg-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Análise</font></font></span></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2h</font></font></small>
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
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked="">
                                    <label class="form-check-label" for="notificationCheck2"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K</font></font></span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clara Hampton</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">você mencionou em um comentário</font></font></p>
                                <blockquote class="blockquote blockquote-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                  Belo trabalho, amor! </font><font style="vertical-align: inherit;">Você realmente acertou em cheio. </font><font style="vertical-align: inherit;">Mantem!
                                </font></font></blockquote>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10h</font></font></small>
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
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked="">
                                    <label class="form-check-label" for="notificationCheck3"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Descrição da imagem">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rubi Walter</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">juntou-se ao grupo Slack HS Team</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3D</font></font></small>
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
                                    <img class="avatar-img" src="./assets/svg/brands/google-icon.svg" alt="Descrição da imagem">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">do Google</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comece a usar formulários para capturar as informações de clientes potenciais que visitam seu site do Google</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 dias</font></font></small>
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
                                    <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Descrição da imagem">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sara Villar</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">concluído</font></font><i class="bi-journal-bookmark-fill text-primary"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tarefa FD-7</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 minutos</font></font></small>
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
                                    <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A</font></font></span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ana Ricardo</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">aceitou seu convite para ingressar no Notion</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 dia</font></font></small>
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
                                    <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Descrição da imagem">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Passarinho</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">saiu dos projetos HS do grupo Slack</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 dia</font></font></small>
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
                                    <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SH</font></font></span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HTMLstream</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">você ganhou um "Top endossado"</font></font><i class="bi-patch-check-fill text-primary"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">distintivo</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 dias</font></font></small>
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
                                    <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Descrição da imagem">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Linda Bates</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aceitei sua conexão</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 dias</font></font></small>
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
                                    <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">eu</font></font></span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lewis Clarke</font></font></h5>
                                <p class="text-body fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">concluído</font></font><i class="bi-journal-bookmark-fill text-primary"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tarefa FD-134</font></font></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2mts</font></font></small>
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
                  <a class="card-footer text-center" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Ver todas as notificações</font></font><i class="bi-chevron-right"></i>
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
              <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">
                <i class="bi-app-indicator"></i>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aplicativos e serviços da web</font></font></h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height">
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/atlassian-icon.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atlassiano</font></font></h5>
                          <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Segurança e controle na nuvem</font></font></p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/slack-icon.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Folga</font></font><span class="badge bg-primary rounded-pill text-uppercase ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tentar</font></font></span></h5>
                          <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Software de colaboração por e-mail</font></font></p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desenvolvedor web do Google</font></font></h5>
                          <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trabalho envolvido no desenvolvimento de um site</font></font></p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/frontapp-icon.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Frontapp</font></font></h5>
                          <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A caixa de entrada para equipes</font></font></p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/illustrations/review-rating-shield.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suporte HS</font></font></h5>
                          <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atendimento e suporte ao cliente</font></font></p>
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
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mais produtos frontais</font></font></h5>
                          <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confira mais produtos HS</font></font></p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Ver todos os aplicativos</font></font><i class="bi-chevron-right"></i>
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
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation="">
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Descrição da imagem">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Descrição da imagem">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marcos Williams</font></font></h5>
                      <p class="card-text text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mark@site.com</font></font></p>
                    </div>
                  </div>
                </div>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Definir status</font></font></a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success me-1"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Disponível
                    </font></font></a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger me-1"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ocupado
                    </font></font></a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning me-1"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ausente
                    </font></font></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reinicie status
                    </font></font></a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil e conta</font></font></a>
                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configurações</font></font></a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-dark avatar-circle">
                        <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SH</font></font></span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HTMLstream</font></font><span class="badge bg-primary rounded-pill text-uppercase ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PRÓ</font></font></span></h5>
                      <span class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hs.exemplo.com</font></font></span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Costumização</font></font></a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Convidar pessoas
                    </font></font></a>
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Análise
                      </font></font><i class="bi-box-arrow-in-up-right"></i>
                    </a>
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Personalizar Frente
                      </font></font><i class="bi-box-arrow-in-up-right"></i>
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gerenciar equipe</font></font></a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sair</font></font></a>
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

  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white navbar-vertical-aside-initialized">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="./index.html" aria-label="Frente">
          <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logotipo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logotipo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logotipo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logotipo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler" style="opacity: 1;">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template="<div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><div class=&quot;tooltip-inner&quot;></div></div>" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Colapso" data-bs-original-title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template="<div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><div class=&quot;tooltip-inner&quot;></div></div>" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Expandir" data-bs-original-title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle active collapsed" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="false" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Painéis</font></font></span>
              </a>

              <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu" hs-parent-area="#navbarVerticalMenu" style="">
                <a class="nav-link active" href="./index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Padrão</font></font></a>
                <a class="nav-link " href="./dashboard-alternative.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alternativa</font></font></a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Páginas</font></font></span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUsersMenu">
                  <i class="bi-people nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></span>
                </a>

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu" hs-parent-area="#navbarVerticalMenu">
                  <a class="nav-link " href="./users.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visão geral</font></font></a>
                  <a class="nav-link " href="./users-leaderboard.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entre os melhores</font></font></a>
                  <a class="nav-link " href="./users-add-user.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar usuário</font></font><span class="badge bg-info rounded-pill ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quente</font></font></span></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesUserProfileMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                  <i class="bi-person nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil de usuário</font></font><span class="badge bg-primary rounded-pill ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></span>
                </a>

                <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu" hs-parent-area="#navbarVerticalMenu">
                  <a class="nav-link " href="./user-profile.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></a>
                  <a class="nav-link " href="./user-profile-teams.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Equipes</font></font></a>
                  <a class="nav-link " href="./user-profile-projects.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Projetos</font></font></a>
                  <a class="nav-link " href="./user-profile-connections.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conexões</font></font></a>
                  <a class="nav-link " href="./user-profile-my-profile.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meu perfil</font></font></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesAccountMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesAccountMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesAccountMenu">
                  <i class="bi-person-badge nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conta</font></font></span>
                </a>

                <div id="navbarVerticalMenuPagesAccountMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu" hs-parent-area="#navbarVerticalMenu">
                  <a class="nav-link " href="./account-settings.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configurações</font></font></a>
                  <a class="nav-link " href="./account-billing.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cobrança</font></font></a>
                  <a class="nav-link " href="./account-invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura</font></font></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesEcommerceMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                  <i class="bi-basket nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comércio eletrônico</font></font></span>
                </a>

                <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu" hs-parent-area="#navbarVerticalMenu">
                  <a class="nav-link " href="./ecommerce.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visão geral</font></font></a>

                  <div id="navbarVerticalMenuPagesMenuEcommerce">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceProductsMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Produtos
                      </font></font></a>

                      <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce" hs-parent-area="#navbarVerticalMenuPagesEcommerceMenu">
                        <a class="nav-link " href="./ecommerce-products.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos</font></font></a>
                        <a class="nav-link " href="./ecommerce-product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Detalhes do produto</font></font></a>
                        <a class="nav-link " href="./ecommerce-add-product.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar produto</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Pedidos
                      </font></font></a>

                      <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce" hs-parent-area="#navbarVerticalMenuPagesEcommerceMenu">
                        <a class="nav-link " href="./ecommerce-orders.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pedidos</font></font></a>
                        <a class="nav-link " href="./ecommerce-order-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">detalhes do pedido</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Clientes
                      </font></font></a>

                      <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce" hs-parent-area="#navbarVerticalMenuPagesEcommerceMenu">
                        <a class="nav-link " href="./ecommerce-customers.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clientes</font></font></a>
                        <a class="nav-link " href="./ecommerce-customer-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Detalhes do cliente</font></font></a>
                        <a class="nav-link " href="./ecommerce-add-customers.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar clientes</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->
                  </div>

                  <a class="nav-link " href="./ecommerce-referrals.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Referências</font></font></a>
                  <a class="nav-link " href="./ecommerce-manage-reviews.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gerenciar avaliações</font></font></a>
                  <a class="nav-link " href="./ecommerce-checkout.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confira</font></font></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesProjectsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectsMenu">
                  <i class="bi-stickies nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Projetos</font></font></span>
                </a>

                <div id="navbarVerticalMenuPagesProjectsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu" hs-parent-area="#navbarVerticalMenu">
                  <a class="nav-link " href="./projects.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visão geral</font></font></a>
                  <a class="nav-link " href="./projects-timeline.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Linha do tempo</font></font></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuPagesProjectMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectMenu">
                  <i class="bi-briefcase nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Projeto</font></font></span>
                </a>

                <div id="navbarVerticalMenuPagesProjectMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu" hs-parent-area="#navbarVerticalMenu">
                  <a class="nav-link " href="./project.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visão geral</font></font></a>
                  <a class="nav-link " href="./project-files.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">arquivos</font></font></a>
                  <a class="nav-link " href="./project-activity.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atividade</font></font></a>
                  <a class="nav-link " href="./project-teams.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Equipes</font></font></a>
                  <a class="nav-link " href="./project-settings.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configurações</font></font></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle  collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication">
                  <i class="bi-shield-lock nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autenticação</font></font></span>
                </a>

                <div id="navbarVerticalMenuAuthentication" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu" hs-parent-area="#navbarVerticalMenu">
                  <div id="navbarVerticalMenuAuthenticationMenu">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuAuthenticationLoginMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationLoginMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationLoginMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Conecte-se
                      </font></font></a>

                      <div id="navbarVerticalMenuAuthenticationLoginMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu" hs-parent-area="#navbarVerticalMenuAuthentication">
                        <a class="nav-link " href="./authentication-login-basic.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Básico</font></font></a>
                        <a class="nav-link " href="./authentication-login-cover.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cobrir</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuAuthenticationSignupMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationSignupMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationSignupMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Inscrever-se
                      </font></font></a>

                      <div id="navbarVerticalMenuAuthenticationSignupMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu" hs-parent-area="#navbarVerticalMenuAuthentication">
                        <a class="nav-link " href="./authentication-signup-basic.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Básico</font></font></a>
                        <a class="nav-link " href="./authentication-signup-cover.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cobrir</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuAuthenticationResetPasswordMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationResetPasswordMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationResetPasswordMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Redefinir senha
                      </font></font></a>

                      <div id="navbarVerticalMenuAuthenticationResetPasswordMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu" hs-parent-area="#navbarVerticalMenuAuthentication">
                        <a class="nav-link " href="./authentication-reset-password-basic.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Básico</font></font></a>
                        <a class="nav-link " href="./authentication-reset-password-cover.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cobrir</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuAuthenticationEmailVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationEmailVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationEmailVerificationMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        verificação de e-mail
                      </font></font></a>

                      <div id="navbarVerticalMenuAuthenticationEmailVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu" hs-parent-area="#navbarVerticalMenuAuthentication">
                        <a class="nav-link " href="./authentication-email-verification-basic.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Básico</font></font></a>
                        <a class="nav-link " href="./authentication-email-verification-cover.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cobrir</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle collapsed" href="#navbarVerticalMenuAuthentication2StepVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication2StepVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication2StepVerificationMenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Verificação em duas etapas
                      </font></font></a>

                      <div id="navbarVerticalMenuAuthentication2StepVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu" hs-parent-area="#navbarVerticalMenuAuthentication">
                        <a class="nav-link " href="./authentication-2-step-verification-basic.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Básico</font></font></a>
                        <a class="nav-link " href="./authentication-2-step-verification-cover.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cobrir</font></font></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mensagem de boas-vindas</font></font></a>
                    <a class="nav-link " href="./error-404.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 404</font></font></a>
                    <a class="nav-link " href="./error-500.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 500</font></font></a>
                  </div>
                </div>
              </div>
              <!-- End Collapse -->

              <div class="nav-item">
                <a class="nav-link " href="./api-keys.html" data-placement="left">
                  <i class="bi-key nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chaves de API</font></font></span>
                </a>
              </div>

              <div class="nav-item">
                <a class="nav-link " href="./welcome-page.html" data-placement="left">
                  <i class="bi-eye nav-icon"></i>
                  <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Página de boas-vindas</font></font></span>
                </a>
              </div>

            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aplicativos</font></font></span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="./apps-kanban.html" data-placement="left">
                <i class="bi-kanban nav-icon"></i>
                <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kanban</font></font></span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./apps-calendar.html" data-placement="left">
                <i class="bi-calendar-week nav-icon"></i>
                <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Calendário</font></font></span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./apps-invoice-generator.html" data-placement="left">
                <i class="bi-receipt nav-icon"></i>
                <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gerador de faturas</font></font></span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./apps-file-manager.html" data-placement="left">
                <i class="bi-folder2-open nav-icon"></i>
                <span class="nav-link-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gerenciador de arquivos</font></font></span>
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
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation=""><i class="bi-brightness-high"></i></button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Automático (padrão do sistema)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Automático (padrão do sistema)</font></font></span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Padrão (modo claro)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Padrão (modo claro)</font></font></span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Escuro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escuro</font></font></span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">
                  <i class="bi-info-circle"></i>
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                  <span class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajuda</font></font></span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-journals dropdown-item-icon"></i>
                    <span class="text-truncate" title="Resources &amp; tutorials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recursos e tutoriais</font></font></span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-command dropdown-item-icon"></i>
                    <span class="text-truncate" title="Keyboard shortcuts"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atalhos do teclado</font></font></span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i>
                    <span class="text-truncate" title="Connect other apps"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conecte outros aplicativos</font></font></span>
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
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">
                  <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Bandeira dos Estados Unidos">
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

  <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Painel</font></font></h1>
          </div>
          <!-- End Col -->

          <div class="col-auto">
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-person-plus-fill me-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Convidar usuários
            </font></font></a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total de usuários</font></font></h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">72.540</font></font></h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;y&quot;: {
                                     &quot;display&quot;: false
                                   },
                                   &quot;x&quot;: {
                                     &quot;display&quot;: false
                                   }
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;plugins&quot;: {
                                  &quot;tooltip&quot;: {
                                    &quot;postfix&quot;: &quot;k&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }
                            }" width="194" height="96" style="display: block; box-sizing: border-box; height: 48px; width: 97px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-success text-success">
                <i class="bi-graph-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12,5%
              </font></font></span>
              <span class="text-body fs-6 ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">de 70.104</font></font></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sessões</font></font></h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29,4%</font></font></h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;y&quot;: {
                                     &quot;display&quot;: false
                                   },
                                   &quot;x&quot;: {
                                     &quot;display&quot;: false
                                   }
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;plugins&quot;: {
                                  &quot;tooltip&quot;: {
                                    &quot;postfix&quot;: &quot;k&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }
                            }" width="194" height="96" style="display: block; box-sizing: border-box; height: 48px; width: 97px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-success text-success">
                <i class="bi-graph-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,7%
              </font></font></span>
              <span class="text-body fs-6 ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">de 29,1%</font></font></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Média </font><font style="vertical-align: inherit;">Taxa de cliques</font></font></h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">56,8%</font></font></h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;y&quot;: {
                                     &quot;display&quot;: false
                                   },
                                   &quot;x&quot;: {
                                     &quot;display&quot;: false
                                   }
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;plugins&quot;: {
                                  &quot;tooltip&quot;: {
                                    &quot;postfix&quot;: &quot;k&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }
                            }" width="194" height="96" style="display: block; box-sizing: border-box; height: 48px; width: 97px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-danger text-danger">
                <i class="bi-graph-down"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4,4%
              </font></font></span>
              <span class="text-body fs-6 ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">de 61,2%</font></font></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visualizações de página</font></font></h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">92.913</font></font></h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;">
                    <canvas class="js-chart" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;y&quot;: {
                                     &quot;display&quot;: false
                                   },
                                   &quot;x&quot;: {
                                     &quot;display&quot;: false
                                   }
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;plugins&quot;: {
                                  &quot;tooltip&quot;: {
                                    &quot;postfix&quot;: &quot;k&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }
                            }" width="194" height="96" style="display: block; box-sizing: border-box; height: 48px; width: 97px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-secondary text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0%</font></font></span>
              <span class="text-body fs-6 ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">de 2.913</font></font></span>
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Stats -->

      <div class="row">
        <div class="col-lg-5 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Importar dados para o Front Dashboard</font></font></h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown2">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share chart
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veja e converse com seus usuários e leads imediatamente, importando seus dados para a plataforma Front Dashboard.</font></font></p>

              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item">
                  <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Importar usuários de:</font></font></h5>
                </li>

                <!-- List Group Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/capsule-icon.svg" alt="Descrição da imagem">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cápsula</font></font></h5>
                          <span class="d-block fs-6 text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <a class="btn btn-primary btn-sm" href="#" title="Iniciar importador" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Lançar</font></font><span class="d-none d-sm-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">importador</font></font></span>
                            <i class="bi-box-arrow-up-right ms-1"></i>
                          </a>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Group Item -->

                <!-- List Group Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/mailchimp-icon.svg" alt="Descrição da imagem">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MailChimp</font></font></h5>
                          <span class="d-block fs-6 text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <a class="btn btn-primary btn-sm" href="#" title="Iniciar importador" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Lançar</font></font><span class="d-none d-sm-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">importador</font></font></span>
                            <i class="bi-box-arrow-up-right ms-1"></i>
                          </a>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Group Item -->

                <!-- List Group Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Descrição da imagem">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Webdev</font></font></h5>
                          <span class="d-block fs-6 text-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <a class="btn btn-primary btn-sm" href="#" title="Iniciar importador" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Lançar</font></font><span class="d-none d-sm-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">importador</font></font></span>
                            <i class="bi-box-arrow-up-right ms-1"></i>
                          </a>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Group Item -->

                <li class="list-group-item"><span class="small text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ou você pode </font></font><a class="link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sincronizar dados com o Front Dashboard</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> para garantir que seus dados estejam sempre atualizados.</font></font></span></li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-7 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <h4 class="card-header-title mb-2 mb-sm-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Despesas mensais</font></font></h4>

              <!-- Nav -->
              <ul class="nav nav-segment nav-fill" id="expensesTab" role="tablist">
                <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle" role="presentation">
                  <a class="nav-link active" href="javascript:;" data-bs-toggle="tab" aria-selected="true" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Essa semana</font></font></a>
                </li>
                <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle" role="presentation">
                  <a class="nav-link" href="javascript:;" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semana passada</font></font></a>
                </li>
              </ul>
              <!-- End Nav -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-sm mb-2 mb-sm-0">
                  <div class="d-flex align-items-center">
                    <span class="h1 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35%</font></font></span>
                    <span class="text-success ms-2">
                      <i class="bi-graph-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,3%
                    </font></font></span>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto align-self-sm-end">
                  <div class="row fs-6 text-body">
                    <div class="col-auto">
                      <span class="legend-indicator bg-primary"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo
                    </font></font></div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="legend-indicator"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atrasado
                    </font></font></div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Bar Chart -->
              <div class="chartjs-custom">
                <canvas id="updatingBarChart" style="height: 320px; display: block; box-sizing: border-box; width: 562.5px;" data-hs-chartjs-options="{
                          &quot;type&quot;: &quot;bar&quot;,
                          &quot;data&quot;: {
                            &quot;labels&quot;: [&quot;May 1&quot;, &quot;May 2&quot;, &quot;May 3&quot;, &quot;May 4&quot;, &quot;May 5&quot;, &quot;May 6&quot;, &quot;May 7&quot;, &quot;May 8&quot;, &quot;May 9&quot;, &quot;May 10&quot;],
                            &quot;datasets&quot;: [{
                              &quot;data&quot;: [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                              &quot;backgroundColor&quot;: &quot;#377dff&quot;,
                              &quot;hoverBackgroundColor&quot;: &quot;#377dff&quot;,
                              &quot;borderColor&quot;: &quot;#377dff&quot;,
                              &quot;maxBarThickness&quot;: &quot;10&quot;
                            },
                            {
                              &quot;data&quot;: [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                              &quot;backgroundColor&quot;: &quot;#e7eaf3&quot;,
                              &quot;borderColor&quot;: &quot;#e7eaf3&quot;,
                              &quot;maxBarThickness&quot;: &quot;10&quot;
                            }]
                          },
                          &quot;options&quot;: {
                            &quot;scales&quot;: {
                              &quot;y&quot;: {
                                &quot;grid&quot;: {
                                  &quot;color&quot;: &quot;#e7eaf3&quot;,
                                  &quot;drawBorder&quot;: false,
                                  &quot;zeroLineColor&quot;: &quot;#e7eaf3&quot;
                                },
                                &quot;ticks&quot;: {
                                  &quot;beginAtZero&quot;: true,
                                  &quot;stepSize&quot;: 100,
                                  &quot;fontSize&quot;: 12,
                                  &quot;fontColor&quot;:  &quot;#97a4af&quot;,
                                  &quot;fontFamily&quot;: &quot;Open Sans, sans-serif&quot;,
                                  &quot;padding&quot;: 10,
                                  &quot;postfix&quot;: &quot;$&quot;
                                }
                              },
                              &quot;x&quot;: {
                                &quot;grid&quot;: {
                                  &quot;display&quot;: false,
                                  &quot;drawBorder&quot;: false
                                },
                                &quot;ticks&quot;: {
                                  &quot;fontSize&quot;: 12,
                                  &quot;fontColor&quot;:  &quot;#97a4af&quot;,
                                  &quot;fontFamily&quot;: &quot;Open Sans, sans-serif&quot;,
                                  &quot;padding&quot;: 5
                                },
                                &quot;categoryPercentage&quot;: 0.5,
                                &quot;maxBarThickness&quot;: &quot;10&quot;
                              }
                            },
                            &quot;cornerRadius&quot;: 2,
                            &quot;plugins&quot;: {
                              &quot;tooltip&quot;: {
                                &quot;prefix&quot;: &quot;$&quot;,
                                &quot;hasIndicator&quot;: true,
                                &quot;mode&quot;: &quot;index&quot;,
                                &quot;intersect&quot;: false
                              }
                            },
                            &quot;hover&quot;: {
                              &quot;mode&quot;: &quot;nearest&quot;,
                              &quot;intersect&quot;: true
                            }
                          }
                        }" width="1125" height="640"></canvas>
              </div>
              <!-- End Bar Chart -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></h4>

                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-3">
                      <span id="datatableCounter">0</span>
                      Selected
                    </span>
                    <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                      <i class="tio-delete-outlined"></i> Delete
                    </a>
                  </div>
                </div>
                <!-- End Datatable Info -->
              </div>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Filter -->
              <div class="row align-items-sm-center">
                <div class="col-sm-auto">
                  <div class="row align-items-center gx-0">
                    <div class="col">
                      <span class="text-secondary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Status:</font></font></span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless tomselected ts-hidden-accessible" data-target-column-index="2" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options="{
                                  &quot;searchInDropdown&quot;: false,
                                  &quot;hideSearch&quot;: true,
                                  &quot;dropdownWidth&quot;: &quot;10rem&quot;
                                }" id="tomselect-1" tabindex="-1">
                          
                          <option value="successful"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bem-sucedido</font></font></option>
                          <option value="overdue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atrasado</font></font></option>
                          <option value="pending"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendente</font></font></option>
                        <option value="null" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Todos</font></font></option></select><div class="ts-wrapper js-select js-datatable-filter form-select form-select-sm form-select-borderless single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="null" class="item" data-ts-item=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Todos</font></font></div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-1-ts-dropdown"></div></div></div></div>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                  <div class="row align-items-center gx-0">
                    <div class="col">
                      <span class="text-secondary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscreveu-se:</font></font></span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless tomselected ts-hidden-accessible" data-target-column-index="5" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options="{
                                  &quot;searchInDropdown&quot;: false,
                                  &quot;hideSearch&quot;: true,
                                  &quot;dropdownWidth&quot;: &quot;10rem&quot;
                                }" id="tomselect-2" tabindex="-1">
                          
                          <option value="1 year ago"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ano atrás</font></font></option>
                          <option value="6 months ago"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 meses atrás</font></font></option>
                        <option value="null" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Todos</font></font></option></select><div class="ts-wrapper js-select js-datatable-filter form-select form-select-sm form-select-borderless single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="null" class="item" data-ts-item=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Todos</font></font></div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-2-ts-dropdown"></div></div></div></div>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-md">
                  <form>
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                      </div>
                      <input id="datatableSearch" type="search" class="form-control" placeholder="Pesquisar usuários" aria-label="Pesquisar usuários">
                    </div>
                    <!-- End Search -->
                  </form>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Filter -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <div id="datatable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="datatable"></label></div><table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer" data-hs-datatables-options="{
                   &quot;columnDefs&quot;: [{
                      &quot;targets&quot;: [0, 1, 4],
                      &quot;orderable&quot;: false
                    }],
                   &quot;order&quot;: [],
                   &quot;info&quot;: {
                     &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                   },
                   &quot;search&quot;: &quot;#datatableSearch&quot;,
                   &quot;entries&quot;: &quot;#datatableEntries&quot;,
                   &quot;pageLength&quot;: 8,
                   &quot;isResponsive&quot;: false,
                   &quot;isShowPaging&quot;: false,
                   &quot;pagination&quot;: &quot;datatablePagination&quot;
                 }" role="grid" aria-describedby="datatable_info">
            <thead class="thead-light">
              <tr role="row"><th scope="col" class="table-column-pe-0 sorting_disabled" rowspan="1" colspan="1" aria-label="
                  
                    
                    
                  
                " style="width: 36.2266px;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th><th class="table-column-ps-0 sorting_disabled" rowspan="1" colspan="1" aria-label="Nome completo" style="width: 235.211px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome completo</font></font></th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: ativar para classificar a coluna em ordem crescente" style="width: 122.055px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Status</font></font></th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Tipo: ativar para classificar a coluna em ordem crescente" style="width: 157.453px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipo</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="E-mail" style="width: 166.375px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Inscrito: ative para classificar a coluna em ordem crescente" style="width: 127.078px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrito</font></font></th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="ID do usuário: ativar para classificar a coluna em ordem crescente" style="width: 94.602px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID do usuário</font></font></th></tr>
            </thead>

            <tbody>
              

              

              

              

              

              

              

              

              

              

              

              

              

              

              

              

              
            <tr role="row" class="odd">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Descrição da imagem">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amanda Harvey</font></font><i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mais endossado" data-bs-original-title="Top endorsed"></i></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bem-sucedido
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não atribuído</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">amanda@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ano atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">67989</font></font></td>
              </tr><tr role="row" class="even">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck3">
                    <label class="form-check-label" for="usersDataCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                        <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A</font></font></span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ana Ricardo</font></font></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bem-sucedido
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrição</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">anne@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 meses atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">67326</font></font></td>
              </tr><tr role="row" class="odd">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
                    <label class="form-check-label" for="usersDataCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Descrição da imagem">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">David Harrison</font></font></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-danger"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atrasado
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não assinatura</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">david@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 meses atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">55821</font></font></td>
              </tr><tr role="row" class="even">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck5">
                    <label class="form-check-label" for="usersDataCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Descrição da imagem">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Passarinho</font></font></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendente
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrição</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">finch@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ano atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">85214</font></font></td>
              </tr><tr role="row" class="odd">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck6">
                    <label class="form-check-label" for="usersDataCheck6"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B</font></font></span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bob Dean</font></font></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bem-sucedido
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrição</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bob@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 meses atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">75470</font></font></td>
              </tr><tr role="row" class="even">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck7">
                    <label class="form-check-label" for="usersDataCheck7"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Descrição da imagem">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ela Lauda</font></font><i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mais endossado" data-bs-original-title="Top endorsed"></i></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendente
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrição</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ella@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ano atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37534</font></font></td>
              </tr><tr role="row" class="odd">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck8">
                    <label class="form-check-label" for="usersDataCheck8"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Descrição da imagem">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sam Kart</font></font></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bem-sucedido
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não assinatura</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sam@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ano atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">57300</font></font></td>
              </tr><tr role="row" class="even">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck9">
                    <label class="form-check-label" for="usersDataCheck9"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Descrição da imagem">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Costa Quinn</font></font></h5>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="legend-indicator bg-danger"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atrasado
                </font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não atribuído</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">costa@site.com</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ano atrás</font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">71288</font></font></td>
              </tr></tbody>
          </table><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 8 of 17 entries</div></div>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <!-- Pagination -->
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mostrando:</font></font></span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                            &quot;searchInDropdown&quot;: false,
                            &quot;hideSearch&quot;: true
                          }" tabindex="-1">
                    <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                    <option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></option>
                    
                    <option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></option>
                  <option value="8" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></option></select><div class="ts-wrapper js-select form-select form-select-borderless w-auto single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="8" class="item" data-ts-item=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="datatableEntries-ts-dropdown"></div></div></div></div>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">de</font></font></span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Paginação de atividades"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul id="datatable_pagination" class="pagination datatable-custom-pagination"><li class="paginate_item page-item disabled"><a class="paginate_button previous page-link" aria-controls="datatable" data-dt-idx="0" tabindex="0" id="datatable_previous"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anterior</font></font></span></a></li><li class="paginate_item page-item active"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="1" tabindex="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="2" tabindex="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="3" tabindex="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li><li class="paginate_item page-item"><a class="paginate_button next page-link" aria-controls="datatable" data-dt-idx="4" tabindex="0" id="datatable_next"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Próximo</font></font></span></a></li></ul></div></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Pagination -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->

      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <h4 class="card-header-title mb-2 mb-sm-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transações</font></font></h4>

              <!-- Daterangepicker -->
              <button id="js-daterangepicker-predefined" class="btn btn-ghost-secondary btn-sm dropdown-toggle">
                <i class="bi-calendar-week"></i>
                <span class="js-daterangepicker-predefined-preview ms-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de dezembro a 14 de dezembro de 2023</font></font></span>
              </button>
              <!-- End Daterangepicker -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Chart -->
              <div class="chartjs-custom mx-auto" style="height: 20rem;">
                <canvas class="js-chart-datalabels" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;bubble&quot;,
                              &quot;data&quot;: {
                                &quot;datasets&quot;: [
                                  {
                                    &quot;label&quot;: &quot;Label 1&quot;,
                                    &quot;data&quot;: [
                                      {&quot;x&quot;: 50, &quot;y&quot;: 65, &quot;r&quot;: 99}
                                    ],
                                    &quot;color&quot;: &quot;#fff&quot;,
                                    &quot;backgroundColor&quot;: &quot;rgba(55, 125, 255, 0.9)&quot;,
                                    &quot;borderColor&quot;: &quot;transparent&quot;
                                  },
                                  {
                                    &quot;label&quot;: &quot;Label 2&quot;,
                                    &quot;data&quot;: [
                                      {&quot;x&quot;: 46, &quot;y&quot;: 42, &quot;r&quot;: 65}
                                    ],
                                    &quot;color&quot;: &quot;#fff&quot;,
                                    &quot;backgroundColor&quot;: &quot;rgba(100, 0, 214, 0.8)&quot;,
                                    &quot;borderColor&quot;: &quot;transparent&quot;
                                  },
                                  {
                                    &quot;label&quot;: &quot;Label 3&quot;,
                                    &quot;data&quot;: [
                                      {&quot;x&quot;: 48, &quot;y&quot;: 15, &quot;r&quot;: 38}
                                    ],
                                    &quot;color&quot;: &quot;#fff&quot;,
                                    &quot;backgroundColor&quot;: &quot;#00c9db&quot;,
                                    &quot;borderColor&quot;: &quot;transparent&quot;
                                  },
                                  {
                                    &quot;label&quot;: &quot;Label 3&quot;,
                                    &quot;data&quot;: [
                                      {&quot;x&quot;: 55, &quot;y&quot;: 2, &quot;r&quot;: 61}
                                    ],
                                    &quot;color&quot;: &quot;#fff&quot;,
                                    &quot;backgroundColor&quot;: &quot;#4338ca&quot;,
                                    &quot;borderColor&quot;: &quot;transparent&quot;
                                  }
                                ]
                              },
                              &quot;options&quot;: {
                                &quot;scales&quot;: {
                                  &quot;y&quot;: {
                                    &quot;grid&quot;: {
                                      &quot;display&quot;: false,
                                      &quot;drawBorder&quot;: false
                                    },
                                    &quot;ticks&quot;: {
                                      &quot;display&quot;: false,
                                      &quot;max&quot;: 100,
                                      &quot;beginAtZero&quot;: true
                                    }
                                  },
                                  &quot;x&quot;: {
                                  &quot;grid&quot;: {
                                      &quot;display&quot;: false,
                                      &quot;drawBorder&quot;: false
                                    },
                                    &quot;ticks&quot;: {
                                      &quot;display&quot;: false,
                                      &quot;max&quot;: 100,
                                      &quot;beginAtZero&quot;: true
                                    }
                                  }
                                },
                                &quot;plugins&quot;: {
                                  &quot;tooltip&quot;: false
                                }
                              }
                            }" width="945" height="640" style="display: block; box-sizing: border-box; height: 320px; width: 472.5px;"></canvas>
              </div>
              <!-- End Chart -->

              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo
                </font></font></div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="legend-indicator" style="background-color: #7000f2;"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendente
                </font></font></div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="legend-indicator bg-info"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fracassado
                </font></font></div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-6">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visão geral dos relatórios</font></font></h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown1">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share reports
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <span class="h1 d-block mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 7.431,14</font></font></span>

              <!-- Progress -->
              <div class="progress rounded-pill mb-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Valor bruto" data-bs-original-title="Gross value"></div>
                <div class="progress-bar opacity-50" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Volume líquido de vendas" data-bs-original-title="Net volume from sales"></div>
                <div class="progress-bar opacity-25" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Novo volume de vendas" data-bs-original-title="New volume from sales"></div>
              </div>

              <div class="d-flex justify-content-between mb-4">
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></span>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100%</font></font></span>
              </div>
              <!-- End Progress -->

              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-lg table-nowrap card-table mb-0">
                  <tbody><tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Valor bruto
                    </font></font></th>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 3.500,71</font></font></td>
                    <td>
                      <span class="badge bg-soft-success text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+12,1%</font></font></span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary opacity-50"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Volume líquido de vendas
                    </font></font></th>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 2.980,45</font></font></td>
                    <td>
                      <span class="badge bg-soft-warning text-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+6,9%</font></font></span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary opacity-25"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo volume de vendas
                    </font></font></th>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 950,00</font></font></td>
                    <td>
                      <span class="badge bg-soft-danger text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-1,5%</font></font></span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Outro
                    </font></font></th>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></td>
                    <td>
                      <span class="badge bg-soft-success text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,9%</font></font></span>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- End Table -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© Frente.</font></font><span class="d-none d-sm-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022 HTMLstream.</font></font></span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perguntas frequentes</font></font></a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Licença</font></font></a>
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
        <h3 id="offcanvasBuilderLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construtor frontal</font></font></h3>
        <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Personalize o layout da página de visão geral.</font></font></p>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>

    <div class="offcanvas-body">
      <h4 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modo de aparência do tema</font></font></h4>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confira todas as </font></font><a href="./documentation/layout.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">opções de layout aqui</font></font></a></p>

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked="" value="default">
            <label class="form-check-label mb-2" for="layoutSkinsRadio1">
              <img class="form-check-img" src="./assets/img/415x310/img1.jpg" alt="Descrição da imagem">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Padrão</font></font></span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="dark">
            <label class="form-check-label mb-2" for="layoutSkinsRadio2">
              <img class="form-check-img" src="./assets/img/415x310/img2.jpg" alt="Descrição da imagem">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modo escuro</font></font></span>
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
            <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio1" checked="" value="default">
            <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio1">
              <img class="form-check-img" src="./assets/svg/layouts-light/sidebar-default.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/sidebar-default.svg" alt="Descrição da imagem" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Padrão</font></font></span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio2" value="navbar-dark">
            <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio2">
              <img class="form-check-img" src="./assets/svg/layouts-light/sidebar-dark.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/sidebar-dark.svg" alt="Descrição da imagem" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escuro</font></font></span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <h4 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navegação na barra lateral</font></font></h4>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confira todas as </font></font><a href="./documentation/layout.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">opções de layout aqui</font></font></a></p>

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="sidebarNavOptions" id="sidebarNavOptions1" value="pills" checked="">
            <label class="form-check-label mb-2" for="sidebarNavOptions1">
              <img class="form-check-img" src="./assets/svg/layouts-light/demo-layouts-default-classic.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/demo-layouts-default-classic.svg" alt="Descrição da imagem" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprimidos</font></font></span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="sidebarNavOptions" id="sidebarNavOptions2" value="tabs">
            <label class="form-check-label mb-2" for="sidebarNavOptions2">
              <img class="form-check-img" src="./assets/svg/layouts-light/demo-layouts-nav-tabs.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="./assets/svg/layouts/demo-layouts-nav-tabs.svg" alt="Descrição da imagem" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guias</font></font></span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <!-- Form Switch -->
      <label class="row form-check form-switch mb-3" for="builderFluidSwitch">
        <span class="col-10 ms-0">
          <span class="d-block h4 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opções de layout de cabeçalho</font></font></span>
          <span class="d-block fs-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alternar para layout fluido de contêiner</font></font></span>
        </span>
        <span class="col-2 text-end">
          <input type="checkbox" class="form-check-input" id="builderFluidSwitch" disabled="">
        </span>
      </label>
      <!-- End Form Switch -->

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions1" value="single-header">
            <label class="form-check-label mb-2" for="headerLayoutOptions1">
              <img class="form-check-img" src="./assets/svg/layouts/header-default-container.svg" alt="Descrição da imagem" data-hs-theme-appearance="default">
              <img class="form-check-img" src="./assets/svg/layouts-light/header-default-container.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Padrão</font></font></span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions2" value="double-header">
            <label class="form-check-label mb-2" for="headerLayoutOptions2">
              <img class="form-check-img" src="./assets/svg/layouts/header-double-line-container.svg" alt="Descrição da imagem" data-hs-theme-appearance="default">
              <img class="form-check-img" src="./assets/svg/layouts-light/header-double-line-container.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </label>
            <span class="form-check-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Linha dupla</font></font></span>
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
              <i class="bi-arrow-counterclockwise"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reiniciar
            </font></font></button>
          </div>
        </div>
        <!-- End Col -->

        <div class="col">
          <div class="d-grid">
            <button type="button" id="js-builder-preview" class="btn btn-primary btn-lg">
              <i class="eye-visible"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visualização
            </font></font></button>
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
      <i class="bi-sliders fs-6 me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Customizar
    </font></font></a>
  </div>
  <!-- End Builder Toggle -->

  

  <script src="./assets/js/demo.js"></script>

  <!-- END ONLY DEV -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atalhos do teclado</font></font></h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formatação</font></font></h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Audacioso</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">itálico</font></font></em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sublinhado</font></font></u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tachado</font></font></s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Texto pequeno</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Destaque</font></font></mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inserir</font></font></h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mencionar pessoa </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(@Brian)</font></font></a></span>
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
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Link para o documento </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(+Notas da reunião)</font></font></a></span>
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
              <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#hashtag</font></font></a>
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
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Data</font></font></span>
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
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tempo</font></font></span>
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
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caixa de notas</font></font></span>
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
          <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edição</font></font></h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Localizar e substituir</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontre o próximo</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar anterior</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recuar</font></font></span>
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
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Remover recuo</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mover a fila</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mover linha para baixo</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicione um comentário</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desfazer</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Refazer</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aplicativo</font></font></h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Criar novo documento</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Presente</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Compartilhar</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pesquisar documentos</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atalhos do teclado</font></font></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ </font></font></span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span> <kbd class="d-inline-block mb-1">/</kbd>
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
      <h4 id="offcanvasActivityStreamLabel" class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fluxo de atividades</font></font></h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Descrição da imagem">
            </div>

            <div class="step-content">
              <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iana Robinson</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionados 2 arquivos à tarefa</font></font><a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fd-7</font></font></a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="relatórios semanais.xls"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">relatórios semanais.xls</font></font></span>
                          <span class="d-block small text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12kb</font></font></span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Descrição da imagem">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="relatórios semanais.xls"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">relatórios semanais.xls</font></font></span>
                          <span class="d-block small text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4kb</font></font></span>
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

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Agora</font></font></span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B</font></font></span>

            <div class="step-content">
              <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bob Dean</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marcado</font></font><a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fr-6</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> como</font></font><span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"Concluído"</font></font></span></p>

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoje</font></font></span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Descrição da imagem">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guindaste</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionado 5 cartões aos </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">pagamentos</font></font></a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Descrição da imagem">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Descrição da imagem">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Descrição da imagem">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+2</font></font></a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12 de maio</font></font></span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D</font></font></span>

            <div class="step-content">
              <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">David Lidel</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionado um novo membro ao Front Dashboard</font></font></p>

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15 de maio</font></font></span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Descrição da imagem">
            </div>

            <div class="step-content">
              <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Raquel Rei</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marcado</font></font><a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fr-3</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> como</font></font><span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"Concluído"</font></font></span></p>

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29 de abril</font></font></span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Descrição da imagem">
            </div>

            <div class="step-content">
              <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Passarinho</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ganhou um "Top endossado"</font></font><i class="bi-patch-check-fill text-primary"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">distintivo</font></font></p>

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06 de abril</font></font></span>
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
              <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Status do projeto atualizado</font></font></h5>

              <p class="fs-5 mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marcado</font></font><a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fr-3</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> como</font></font><span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"Em andamento"</font></font></span></p>

              <span class="small text-muted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10 de fevereiro</font></font></span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver tudo</font></font><i class="bi-chevron-right"></i></a>
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

  <!-- Create a new user Modal -->
  <div class="modal fade" id="inviteUserModal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inviteUserModalLabel">Invite users</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
          <div class="mb-4">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

              <div class="input-group-append input-group-append-last-sm-down-none">
                <!-- Select -->
                <div class="tom-select-custom tom-select-custom-end">
                  <select class="js-select form-select tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                            &quot;searchInDropdown&quot;: false,
                            &quot;hideSearch&quot;: true,
                            &quot;dropdownWidth&quot;: &quot;11rem&quot;
                          }" id="tomselect-4" tabindex="-1">
                    
                    <option value="can edit">Can edit</option>
                    <option value="can comment">Can comment</option>
                    <option value="full access">Full access</option>
                  <option value="guest" selected="">Guest</option></select><div class="ts-wrapper js-select form-select single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="guest" class="item" data-ts-item="">Guest</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-4-ts-dropdown"></div></div></div></div>
                </div>
                <!-- End Select -->

                <a class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Invite</a>
              </div>
            </div>

            <a class="btn btn-primary w-100 d-sm-none" href="javascript:;">Invite</a>
          </div>
          <!-- End Form -->

          <div class="row">
            <h5 class="col modal-title">Invite users</h5>

            <div class="col-auto">
              <a class="d-flex align-items-center small text-body" href="#">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/gmail-icon.svg" alt="Image Description">
                Import contacts
              </a>
            </div>
          </div>

          <hr class="mt-2">

          <ul class="list-unstyled list-py-2 mb-0">
            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">amanda@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                                  &quot;searchInDropdown&quot;: false,
                                  &quot;hideSearch&quot;: true,
                                  &quot;dropdownWidth&quot;: &quot;11rem&quot;
                                }" id="tomselect-5" tabindex="-1">
                          
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template="<div class=&quot;text-danger&quot;>Remove</div>">Remove</option>
                        <option value="guest" selected="">Guest</option></select><div class="ts-wrapper js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="guest" class="item" data-ts-item="">Guest</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-5-ts-dropdown"></div></div></div></div>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">David Harrison</h5>
                      <span class="d-block small">david@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                                  &quot;searchInDropdown&quot;: false,
                                  &quot;hideSearch&quot;: true,
                                  &quot;dropdownWidth&quot;: &quot;11rem&quot;
                                }" id="tomselect-6" tabindex="-1">
                          
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template="<div class=&quot;text-danger&quot;>Remove</div>">Remove</option>
                        <option value="guest" selected="">Guest</option></select><div class="ts-wrapper js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="guest" class="item" data-ts-item="">Guest</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-6-ts-dropdown"></div></div></div></div>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">Markvt@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                                  &quot;searchInDropdown&quot;: false,
                                  &quot;hideSearch&quot;: true,
                                  &quot;dropdownWidth&quot;: &quot;11rem&quot;
                                }" id="tomselect-7" tabindex="-1">
                          
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template="<div class=&quot;text-danger&quot;>Remove</div>">Remove</option>
                        <option value="guest" selected="">Guest</option></select><div class="ts-wrapper js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="guest" class="item" data-ts-item="">Guest</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-7-ts-dropdown"></div></div></div></div>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                    <span class="avatar-initials">B</span>
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Bob Dean</h5>
                      <span class="d-block small">bob@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 tomselected ts-hidden-accessible" autocomplete="off" data-hs-tom-select-options="{
                                  &quot;searchInDropdown&quot;: false,
                                  &quot;hideSearch&quot;: true,
                                  &quot;dropdownWidth&quot;: &quot;11rem&quot;
                                }" id="tomselect-8" tabindex="-1">
                          
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template="<div class=&quot;text-danger&quot;>Remove</div>">Remove</option>
                        <option value="guest" selected="">Guest</option></select><div class="ts-wrapper js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0 single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="guest" class="item" data-ts-item="">Guest</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-8-ts-dropdown"></div></div></div></div>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->
          </ul>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <div class="row align-items-center flex-grow-1 mx-n2">
            <div class="col-sm-9 mb-2 mb-sm-0">
              <input type="hidden" id="inviteUserPublicClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

              <p class="modal-footer-text">The public share <a href="#">link settings</a>
                <i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="The public share link allows people to view the project without giving access to full collaboration features." data-bs-original-title="The public share link allows people to view the project without giving access to full collaboration features."></i>
              </p>
            </div>

            <div class="col-sm-3 text-sm-end">
              <a class="js-clipboard btn btn-white btn-sm text-nowrap" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" data-hs-clipboard-options="{
                  &quot;type&quot;: &quot;tooltip&quot;,
                  &quot;successText&quot;: &quot;Copied!&quot;,
                  &quot;contentTarget&quot;: &quot;#inviteUserPublicClipboard&quot;,
                  &quot;container&quot;: &quot;#inviteUserModal&quot;
                 }" data-bs-original-title="Copy to clipboard!">
                <i class="bi-link-45deg me-1"></i> Copy link</a>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Create a new user Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="./assets/js/vendor.min.js"></script>

  <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>
  <script src="./assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


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

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      localStorage.removeItem('hs_theme')

      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                formatter: function (value) {
                  return value.r
                },
                offset: 2,
                padding: 0
              }
            },
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
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

  <!-- JS Implementing Plugins -->
  <script src="./assets/js/vendor.min.js"></script>

  <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>
  <script src="./assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


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

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      localStorage.removeItem('hs_theme')

      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                formatter: function (value) {
                  return value.r
                },
                offset: 2,
                padding: 0
              }
            },
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
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