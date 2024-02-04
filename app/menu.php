<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>iBanco Me - Connector</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="pt-br">
    <meta property="og:type" content="article">
    <meta property="og:title" content="iBanco Me - Connector">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="Metronic by Keenthemes">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8/demo1/index.html">
    <link rel="shortcut icon" href="assets/media/logos/favicon-1.ico">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="../../../css-1?family=Inter:300,400,500,600,700"> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle-1.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle-1.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle-1.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async="" src="../../../gtag/js-1?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" style="background-image: url()"
    class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-extended " data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">

                <!--begin::Primary-->
                <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
                    <!--begin::Logo-->
                    <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10"
                        id="kt_aside_logo">
                        <a href="../index.html">
                            <img alt="Logo" src="assets/ibanco-logo.png" class="h-20px">
                        </a>
                    </div>
                    <!--end::Logo-->

                    <!--begin::Nav-->
                    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0"
                        id="kt_aside_nav">

                        <!--begin::Wrapper-->
                        <div class="hover-scroll-overlay-y mb-5 scroll-ms px-5" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                            data-kt-scroll-wrappers="#kt_aside_nav"
                            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
                            <!--begin::Nav-->
                            <ul class="nav flex-column w-100" id="kt_aside_nav_tabs">
                                <!--begin::Nav item-->
                                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="right" data-bs-dismiss="click" title="Projects">
                                    <!--begin::Nav link-->
                                    <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light "
                                        data-bs-toggle="tab" href="#kt_aside_nav_tab_projects">
                                        <i class="ki-duotone ki-element-11 fs-2x"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i>
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="right" data-bs-dismiss="click" title="Menu">
                                    <!--begin::Nav link-->
                                    <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light active"
                                        data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
                                        <i class="ki-duotone ki-briefcase fs-2x"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="right" data-bs-dismiss="click" title="Subscription">
                                    <!--begin::Nav link-->
                                    <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light "
                                        data-bs-toggle="tab" href="#kt_aside_nav_tab_subscription">
                                        <i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i>
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="right" data-bs-dismiss="click" title="Tasks">
                                    <!--begin::Nav link-->
                                    <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light "
                                        data-bs-toggle="tab" href="#kt_aside_nav_tab_tasks">
                                        <i class="ki-duotone ki-shield-tick fs-2x"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
                                    <!--begin::Nav link-->
                                    <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light "
                                        data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
                                        <i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Nav item-->
                               

                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Nav-->

                    </div>
                    <!--end::Nav-->

                    <!--begin::Footer-->
                    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto"
                        id="kt_aside_footer">
                        <!--begin::Quick links-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light"
                                data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                                data-bs-dismiss="click" title="Quick links">
                                <i class="ki-duotone ki-educare fs-2 fs-lg-1"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </div>


                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                                    style="background-image:url('assets/media/misc/dropdown-header-bg-1.png')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold mb-3">
                                        Quick Links
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Status-->
                                    <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending
                                        tasks</span>
                                    <!--end::Status-->
                                </div>
                                <!--end::Heading-->

                                <!--begin:Nav-->
                                <div class="row g-0">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../apps/projects/budget.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                            <i class="ki-duotone ki-dollar fs-3x text-primary mb-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <span
                                                class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                            <span class="fs-7 text-gray-500">eCommerce</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->

                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../apps/projects/settings.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                            <i class="ki-duotone ki-sms fs-3x text-primary mb-2"><span
                                                    class="path1"></span><span class="path2"></span></i> <span
                                                class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                            <span class="fs-7 text-gray-500">Console</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->

                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../apps/projects/list.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                            <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2"><span
                                                    class="path1"></span><span class="path2"></span></i> <span
                                                class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                            <span class="fs-7 text-gray-500">Pending Tasks</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->

                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../apps/projects/users.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                            <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2"><span
                                                    class="path1"></span><span class="path2"></span></i> <span
                                                class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                            <span class="fs-7 text-gray-500">Latest cases</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                </div>
                                <!--end:Nav-->

                                <!--begin::View more-->
                                <div class="py-2 text-center border-top">
                                    <a href="../pages/user-profile/activity.html"
                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                        View All
                                        <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Quick links-->

                        <!--begin::Activities-->
                        <div class="d-flex align-items-center mb-3">
                            <!--begin::Drawer toggle-->
                            <div class="btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light"
                                data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                                data-bs-dismiss="click" title="Activity Logs" id="kt_activities_toggle">

                                <i class="ki-duotone ki-chart-simple fs-2 fs-lg-1"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </div>
                            <!--end::drawer toggle-->
                        </div>
                        <!--end::Activities-->

                        <!--begin::Notifications-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-active-color-primary btn-color-gray-500 btn-active-light"
                                data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                                data-bs-dismiss="click" title="Notifications">
                                <i class="ki-duotone ki-element-11 fs-2 fs-lg-1"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </div>


              
                        </div>
                        <!--end::Notifications-->

                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click"
                                data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-dismiss="click" title="User profile">
                                <img src="assets/media/avatars/300-1-1.jpg" alt="image">
                            </div>


                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="assets/media/avatars/300-1-1.jpg">
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                Antonio Siqueira <span
                                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>

                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                max@kt.com </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="" class="menu-link px-5">
                                        Meu Perfil
                                    </a>
                                </div>
                                <!--end::Menu item-->



                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">Meu plano</span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="" class="menu-link px-5">
                                                Metas
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="" class="menu-link px-5">
                                                Faturas
                                            </a>
                                        </div>
                                        <!--end::Menu item-->



                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="" class="menu-link d-flex flex-stack px-5">
                                                Faturamento

                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                    title="View your statements">
                                                    <i class="ki-duotone ki-information-5 fs-5"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notifications">
                                                    <span class="form-check-label text-muted fs-7">
                                                        Notificações
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->



                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->


                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">
                                            Idioma

                                            <span
                                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                Português <img class="w-15px h-15px rounded-1 ms-2"
                                                    src="assets/media/flags/brazil.svg" alt="">
                                            </span>
                                        </span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../account/settings.html" class="menu-link d-flex px-5 active">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/united-states-1.svg"
                                                        alt="">
                                                </span>
                                                English
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/spain-1.svg" alt="">
                                                </span>
                                                Spanish
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/germany-1.svg"
                                                        alt="">
                                                </span>
                                                German
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/japan-1.svg" alt="">
                                                </span>
                                                Japanese
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/france-1.svg" alt="">
                                                </span>
                                                French
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="" class="menu-link px-5">
                                        Minha Conta
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="" class="menu-link px-5">
                                        Sair
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Primary-->

                <!--begin::Secondary-->
                <div class="aside-secondary d-flex flex-row-fluid">
                    <!--begin::Workspace-->
                    <div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
                        <div class="d-flex h-100 flex-column">
                            <!--begin::Wrapper-->
                            <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true"
                                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                                data-kt-scroll-wrappers="#kt_aside_wordspace"
                                data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">

                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade " id="kt_aside_nav_tab_projects" role="tabpanel">

                                        <!--begin::Wrapper-->
                                        <div class="m-0">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex mb-10">

                                                <!--begin::Search-->
                                                <div id="kt_header_search"
                                                    class="header-search d-flex align-items-center w-100"
                                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                                    data-kt-search-responsive="false" data-kt-menu-trigger="auto"
                                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                                                    <!--begin::Tablet and mobile search toggle-->
                                                    <div data-kt-search-element="toggle"
                                                        class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                                        <div class="d-flex ">
                                                            <i class="ki-duotone ki-magnifier fs-1 "><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                    </div>
                                                    <!--end::Tablet and mobile search toggle-->

                                                    <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                                    <form data-kt-search-element="form"
                                                        class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0"
                                                        autocomplete="off">
                                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                        <input type="hidden">
                                                        <!--end::Hidden input-->

                                                        <!--begin::Icon-->
                                                        <i
                                                            class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Input-->
                                                        <input type="text"
                                                            class="search-input form-control form-control-solid  ps-13"
                                                            name="search" value="" placeholder="Search..."
                                                            data-kt-search-element="input">
                                                        <!--end::Input-->

                                                        <!--begin::Spinner-->
                                                        <span
                                                            class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                                            data-kt-search-element="spinner">
                                                            <span
                                                                class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                        </span>
                                                        <!--end::Spinner-->

                                                        <!--begin::Reset-->
                                                        <span
                                                            class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                                            data-kt-search-element="clear">
                                                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                        <!--end::Reset-->
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Menu-->
                                                    <div data-kt-search-element="content"
                                                        class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                                        <!--begin::Wrapper-->
                                                        <div data-kt-search-element="wrapper">
                                                            <!--begin::Recently viewed-->
                                                            <div data-kt-search-element="results" class="d-none">
                                                                <!--begin::Items-->
                                                                <div class="scroll-y mh-200px mh-lg-350px">
                                                                    <!--begin::Category title-->
                                                                    <h3 class="fs-5 text-muted m-0  pb-5"
                                                                        data-kt-search-element="category-title">
                                                                        Users </h3>
                                                                    <!--end::Category title-->




                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <img src="assets/media/avatars/300-6-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Karina
                                                                                Clark</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Marketing
                                                                                Manager</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <img src="assets/media/avatars/300-2-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Olivia
                                                                                Bold</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Software
                                                                                Engineer</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <img src="assets/media/avatars/300-9-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Ana
                                                                                Clark</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">UI/UX
                                                                                Designer</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <img src="assets/media/avatars/300-14-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Nick
                                                                                Pitola</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Art
                                                                                Director</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <img src="assets/media/avatars/300-11-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Edward
                                                                                Kulnic</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">System
                                                                                Administrator</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->
                                                                    <!--begin::Category title-->
                                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                                        data-kt-search-element="category-title">
                                                                        Customers </h3>
                                                                    <!--end::Category title-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <img class="w-20px h-20px"
                                                                                    src="assets/media/svg/brand-logos/volicity-9-1.svg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Company
                                                                                Rbranding</span>
                                                                            <span class="fs-7 fw-semibold text-muted">UI
                                                                                Design</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <img class="w-20px h-20px"
                                                                                    src="assets/media/svg/brand-logos/tvit-1.svg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Company
                                                                                Re-branding</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Web
                                                                                Development</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <img class="w-20px h-20px"
                                                                                    src="assets/media/svg/misc/infography-1.svg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Business
                                                                                Analytics App</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Administration</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <img class="w-20px h-20px"
                                                                                    src="assets/media/svg/brand-logos/leaf-1.svg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">EcoLeaf App
                                                                                Launch</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Marketing</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <img class="w-20px h-20px"
                                                                                    src="assets/media/svg/brand-logos/tower-1.svg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                                            <span class="fs-6 fw-semibold">Tower Group
                                                                                Website</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Google
                                                                                Adwords</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->

                                                                    <!--begin::Category title-->
                                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                                        data-kt-search-element="category-title">
                                                                        Projects </h3>
                                                                    <!--end::Category title-->


                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-notepad fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span><span
                                                                                        class="path3"></span><span
                                                                                        class="path4"></span><span
                                                                                        class="path5"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-6 fw-semibold">Si-Fi Project
                                                                                by AU Themes</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">#45670</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-frame fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span><span
                                                                                        class="path3"></span><span
                                                                                        class="path4"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-6 fw-semibold">Shopix Mobile
                                                                                App Planning</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">#45690</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span><span
                                                                                        class="path3"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-6 fw-semibold">Finance
                                                                                Monitoring SAAS Discussion</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">#21090</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->



                                                                    <!--begin::Item-->
                                                                    <a href="#"
                                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span><span
                                                                                        class="path3"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-6 fw-semibold">Dashboard
                                                                                Analitics Launch</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">#34560</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </a>
                                                                    <!--end::Item-->


                                                                </div>
                                                                <!--end::Items-->
                                                            </div>
                                                            <!--end::Recently viewed-->
                                                            <!--begin::Recently viewed-->
                                                            <div class="" data-kt-search-element="main">
                                                                <!--begin::Heading-->
                                                                <div class="d-flex flex-stack fw-semibold mb-4">
                                                                    <!--begin::Label-->
                                                                    <span class="text-muted fs-6 me-2">Recently
                                                                        Searched:</span>
                                                                    <!--end::Label-->

                                                                    <!--begin::Toolbar-->
                                                                    <div class="d-flex"
                                                                        data-kt-search-element="toolbar">
                                                                        <!--begin::Preferences toggle-->
                                                                        <div data-kt-search-element="preferences-show"
                                                                            class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                                            tooltip"="" title="Show search preferences">
                                                                            <i class="ki-duotone ki-setting-2 fs-2"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span></i>
                                                                        </div>
                                                                        <!--end::Preferences toggle-->

                                                                        <!--begin::Advanced search toggle-->
                                                                        <div data-kt-search-element="advanced-options-form-show"
                                                                            class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Show more search options">
                                                                            <i class="ki-duotone ki-down fs-2"></i>
                                                                        </div>
                                                                        <!--end::Advanced search toggle-->
                                                                    </div>
                                                                    <!--end::Toolbar-->
                                                                </div>
                                                                <!--end::Heading-->

                                                                <!--begin::Items-->
                                                                <div class="scroll-y mh-200px mh-lg-325px">
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-laptop fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                                                by Keenthemes</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#45789</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span><span
                                                                                        class="path3"></span><span
                                                                                        class="path4"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                                                API Project Meeting</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#84050</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-chart fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                                                Monitoring App Launch</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#84250</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                                                Reference FAQ</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#67945</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-sms fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                                                App Development</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#84250</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-bank fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                                                Mobile App</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#45690</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-40px me-4">
                                                                            <span class="symbol-label bg-light">
                                                                                <i
                                                                                    class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->

                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a href="#"
                                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                                                UI Design" Launch</a>
                                                                            <span
                                                                                class="fs-7 text-muted fw-semibold">#24005</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                </div>
                                                                <!--end::Items-->
                                                            </div>
                                                            <!--end::Recently viewed-->
                                                            <!--begin::Empty-->
                                                            <div data-kt-search-element="empty"
                                                                class="text-center d-none">
                                                                <!--begin::Icon-->
                                                                <div class="pt-10 pb-10">
                                                                    <i
                                                                        class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i>
                                                                </div>
                                                                <!--end::Icon-->

                                                                <!--begin::Message-->
                                                                <div class="pb-15 fw-semibold">
                                                                    <h3 class="text-gray-600 fs-5 mb-2">No result found
                                                                    </h3>
                                                                    <div class="text-muted fs-7">Please try again with a
                                                                        different query</div>
                                                                </div>
                                                                <!--end::Message-->
                                                            </div>
                                                            <!--end::Empty-->
                                                        </div>
                                                        <!--end::Wrapper-->

                                                        <!--begin::Preferences-->
                                                        <form data-kt-search-element="advanced-options-form"
                                                            class="pt-1 d-none">
                                                            <!--begin::Heading-->
                                                            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search
                                                            </h3>
                                                            <!--end::Heading-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Contains the word" name="query">
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <!--begin::Radio group-->
                                                                <div class="nav-group nav-group-fluid">
                                                                    <!--begin::Option-->
                                                                    <label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="type" value="has" checked="checked">
                                                                        <span
                                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                                            All
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Option-->

                                                                    <!--begin::Option-->
                                                                    <label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="type" value="users">
                                                                        <span
                                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                            Users
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Option-->

                                                                    <!--begin::Option-->
                                                                    <label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="type" value="orders">
                                                                        <span
                                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                            Orders
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Option-->

                                                                    <!--begin::Option-->
                                                                    <label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="type" value="projects">
                                                                        <span
                                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                            Projects
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Option-->
                                                                </div>
                                                                <!--end::Radio group-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text" name="assignedto"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Assigned to" value="">
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text" name="collaborators"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Collaborators" value="">
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <!--begin::Radio group-->
                                                                <div class="nav-group nav-group-fluid">
                                                                    <!--begin::Option-->
                                                                    <label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="attachment" value="has"
                                                                            checked="checked">
                                                                        <span
                                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                                            Has attachment
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Option-->

                                                                    <!--begin::Option-->
                                                                    <label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="attachment" value="any">
                                                                        <span
                                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                            Any
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Option-->
                                                                </div>
                                                                <!--end::Radio group-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <select name="timezone" aria-label="Select a Timezone"
                                                                    data-control="select2"
                                                                    data-dropdown-parent="#kt_header_search"
                                                                    data-placeholder="date_period"
                                                                    class="form-select form-select-sm form-select-solid">
                                                                    <option value="next">Within the next</option>
                                                                    <option value="last">Within the last</option>
                                                                    <option value="between">Between</option>
                                                                    <option value="on">On</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="row mb-8">
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="number" name="date_number"
                                                                        class="form-control form-control-sm form-control-solid"
                                                                        placeholder="Lenght" value="">
                                                                </div>
                                                                <!--end::Col-->

                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <select name="date_typer"
                                                                        aria-label="Select a Timezone"
                                                                        data-control="select2"
                                                                        data-dropdown-parent="#kt_header_search"
                                                                        data-placeholder="Period"
                                                                        class="form-select form-select-sm form-select-solid">
                                                                        <option value="days">Days</option>
                                                                        <option value="weeks">Weeks</option>
                                                                        <option value="months">Months</option>
                                                                        <option value="years">Years</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Actions-->
                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset"
                                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                                    data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                                                <a href="../utilities/search/horizontal.html"
                                                                    class="btn btn-sm fw-bold btn-primary"
                                                                    data-kt-search-element="advanced-options-form-search">Search</a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Preferences-->
                                                        <!--begin::Preferences-->
                                                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                                                            <!--begin::Heading-->
                                                            <h3 class="fw-semibold text-gray-900 mb-7">Search
                                                                Preferences</h3>
                                                            <!--end::Heading-->

                                                            <!--begin::Input group-->
                                                            <div class="pb-4 border-bottom">
                                                                <label
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                    <span
                                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                                        Projects
                                                                    </span>

                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1" checked="checked">
                                                                </label>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="py-4 border-bottom">
                                                                <label
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                    <span
                                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                                        Targets
                                                                    </span>
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1" checked="checked">
                                                                </label>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="py-4 border-bottom">
                                                                <label
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                    <span
                                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                                        Affiliate Programs
                                                                    </span>
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1">
                                                                </label>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="py-4 border-bottom">
                                                                <label
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                    <span
                                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                                        Referrals
                                                                    </span>
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1" checked="checked">
                                                                </label>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="py-4 border-bottom">
                                                                <label
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                    <span
                                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                                        Users
                                                                    </span>
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1">
                                                                </label>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Actions-->
                                                            <div class="d-flex justify-content-end pt-7">
                                                                <button type="reset"
                                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                                    data-kt-search-element="preferences-dismiss">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-sm fw-bold btn-primary">Save
                                                                    Changes</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Preferences-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Search-->
                                                <!--begin::Filter-->
                                                <div class="flex-shrink-0 ms-2">
                                                    <!--begin::Menu toggle-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-bg-light btn-active-icon-primary btn-color-gray-500"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-filter fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </button>
                                                    <!--end::Menu toggle-->

                                                    <!--begin::Menu-->


                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                        data-kt-menu="true" id="kt_menu_65bc2b8f0ba4d">
                                                        <!--begin::Header-->
                                                        <div class="px-7 py-5">
                                                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                        </div>
                                                        <!--end::Header-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator border-gray-200"></div>
                                                        <!--end::Menu separator-->


                                                        <!--begin::Form-->
                                                        <div class="px-7 py-5">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label fw-semibold">Status:</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <div>
                                                                    <select class="form-select form-select-solid"
                                                                        multiple="" data-kt-select2="true"
                                                                        data-close-on-select="false"
                                                                        data-placeholder="Select option"
                                                                        data-dropdown-parent="#kt_menu_65bc2b8f0ba4d"
                                                                        data-allow-clear="true">
                                                                        <option></option>
                                                                        <option value="1">Approved</option>
                                                                        <option value="2">Pending</option>
                                                                        <option value="2">In Process</option>
                                                                        <option value="2">Rejected</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label fw-semibold">Member
                                                                    Type:</label>
                                                                <!--end::Label-->

                                                                <!--begin::Options-->
                                                                <div class="d-flex">
                                                                    <!--begin::Options-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="1">
                                                                        <span class="form-check-label">
                                                                            Author
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Options-->

                                                                    <!--begin::Options-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="2" checked="checked">
                                                                        <span class="form-check-label">
                                                                            Customer
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Options-->
                                                                </div>
                                                                <!--end::Options-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="form-label fw-semibold">Notifications:</label>
                                                                <!--end::Label-->

                                                                <!--begin::Switch-->
                                                                <div
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" name="notifications" checked="">
                                                                    <label class="form-check-label">
                                                                        Enabled
                                                                    </label>
                                                                </div>
                                                                <!--end::Switch-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Actions-->
                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset"
                                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                                    data-kt-menu-dismiss="true">Reset</button>

                                                                <button type="submit" class="btn btn-sm btn-primary"
                                                                    data-kt-menu-dismiss="true">Apply</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Menu 1--> <!--end::Menu-->
                                                </div>
                                                <!--end::Filter-->
                                            </div>
                                            <!--end::Toolbar-->

                   
                                        </div>
                                        <!--end::Wrapper-->

                                    </div>
                                    <!--end::Tab pane-->

                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade active show" id="kt_aside_nav_tab_menu" role="tabpanel">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                            id="kt_aside_menu" data-kt-menu="true">

                                            <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item here show menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-11 fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Dashboards</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link" href="../index.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Default</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link active" href="ecommerce.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">eCommerce</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->



                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                                    <div class="menu-content"><span
                                                            class="menu-heading fw-bold text-uppercase fs-7">iBanco -
                                                            AG389123</span>
                                                    </div><!--end:Menu content-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->


                                                <div class="menu-item">
                                                    <!--begin:Menu link--><a class="menu-link"
                                                        href="https://developer.ibanco.me" target="_blank"><span
                                                            class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Saldo
                                                        </span></a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <div class="menu-item">
                                                    <!--begin:Menu link--><a class="menu-link"
                                                        href="https://developer.ibanco.me" target="_blank"><span
                                                            class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Extrato
                                                        </span></a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <div class="menu-item">
                                                    <!--begin:Menu link--><a class="menu-link"
                                                        href="https://developer.ibanco.me" target="_blank"><span
                                                            class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Link pagamento
                                                        </span></a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->



                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Assinaturas</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Clientes</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->



                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i class="ki-duotone ki-basket fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Conciliações</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link-->
                                                                <a class="menu-link" href=""><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Connector Banks</span>
                                                                </a><!--end:Menu link-->
                                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                                        </div><!--end:Menu sub-->


                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->


                                                <!--begin:Menu item-->
                                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                                    <div class="menu-content"><span
                                                            class="menu-heading fw-bold text-uppercase fs-7">Central de
                                                            suporte</span>
                                                    </div><!--end:Menu content-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <!--begin:Menu item-->


                                                <div class="menu-item">
                                                    <!--begin:Menu link--><a class="menu-link"
                                                        href="https://developer.ibanco.me" target="_blank"><span
                                                            class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Change log
                                                            v0.0.1</span></a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Tab pane-->

                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_aside_nav_tab_subscription" role="tabpanel">

                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                            id="kt_aside_menu" data-kt-menu="true">

                                            <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item here show menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-11 fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Dashboards</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link" href="../index.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Default</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link active" href="ecommerce.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">eCommerce</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->



                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                                    <div class="menu-content"><span
                                                            class="menu-heading fw-bold text-uppercase fs-7">Aplicações</span>
                                                    </div><!--end:Menu content-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Cliente</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Listagem</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->


                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Contas Receber</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Listagem</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Contas Pagar</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Listagem</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->






                                            </div>
                                        </div>
                                        <!--end::Menu-->
                                        <!--begin::Subscription-->
                                        <div class="mx-5">
                                            <!--begin::Container-->
                                            <div class="text-center pt-10 mb-20">
                                                <!--begin::Title-->
                                                <h2 class="fs-2 fw-bold mb-7">My Subscription</h2>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <p class="text-gray-500 fs-4 fw-semibold mb-10">
                                                    There are no customers added yet.<br>
                                                    Kickstart your CRM by adding a your first customer
                                                </p>
                                                <!--end::Description-->

                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Container-->

                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img src="assets/media/illustrations/sigma-1/18-1.png" alt=""
                                                    class="mw-100 mh-300px">
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Subscription-->
                                    </div>
                                    <!--end::Tab pane-->

                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_aside_nav_tab_tasks" role="tabpanel">

                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                            id="kt_aside_menu" data-kt-menu="true">

                                            <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item here show menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-11 fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Dashboards</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link" href="../index.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Default</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link active" href="ecommerce.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">eCommerce</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->



                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                                    <div class="menu-content"><span
                                                            class="menu-heading fw-bold text-uppercase fs-7">Parceiro
                                                            iBanco</span>
                                                    </div><!--end:Menu content-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Carteira</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Listagem</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->


                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Comissões</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Listagem</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Integrações</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->

                                                </div><!--end:Menu item--><!--begin:Menu item-->






                                            </div>
                                        </div>
                                        <!--end::Menu-->


                                    </div>
                                    <!--end::Tab pane-->

                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_aside_nav_tab_notifications" role="tabpanel">

                                        <!--begin::Notifications-->
                                        <div class="mx-5">
                                            <!--begin::Header-->
                                            <h3 class="fw-bold text-gray-900 mb-10 mx-0">Ibanco Intranet</h3>
                                            <!--end::Header-->

                                        </div>
                                        <!--end::Notifications-->

                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                            id="kt_aside_menu" data-kt-menu="true">

                                            <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item here show menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-11 fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i></span><span
                                                            class="menu-title">Dashboards</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link" href="../index.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Default</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link active" href="ecommerce.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">eCommerce</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->



                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                                    <div class="menu-content"><span
                                                            class="menu-heading fw-bold text-uppercase fs-7">Intranet
                                                            iBanco</span>
                                                    </div><!--end:Menu content-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Carteira</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link-->
                                                            <a class="menu-link" href=""><span class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Listagem</span>
                                                            </a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->


                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link"><span
                                                            class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Empréstimos</span>
                                                            <span class="menu-arrow"></span></span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                   
                                                </div><!--end:Menu item-->
                                                <!--begin:Menu item-->

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link"><span class="menu-icon"><i
                                                                class="ki-duotone ki-element-plus fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i></span><span
                                                            class="menu-title">Connector Bank</span><span
                                                            class="menu-arrow"></span></span>
                                                    <!--end:Menu link--><!--begin:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->






                                            </div>
                                        </div>
                                        <!--end::Menu-->


                                    </div>
                                    <!--end::Tab pane-->

                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Footer-->
                            <div class="flex-column-auto pt-10 px-5" id="kt_aside_secondary_footer">
                                <a href="https://developer.ibanco.me"
                                    class="btn btn-bg-light btn-color-gray-600 btn-flex btn-active-color-primary flex-center w-100"
                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover"
                                    data-bs-offset="0,5" data-bs-dismiss-="click"
                                    title="200+ in-house components and 3rd-party plugins">
                                    <span class="btn-label">
                                        Developer Integrations
                                    </span>
                                    <i class="ki-duotone ki-document btn-icon fs-4 ms-2"><span
                                            class="path1"></span><span class="path2"></span></i> </a>
                            </div>
                            <!--end::Footer-->
                        </div>
                    </div>
                    <!--end::Workspace-->
                </div>
                <!--end::Secondary-->

                <!--begin::Aside Toggle-->
                <button id="kt_aside_toggle"
                    class="aside-toggle btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex mb-5 "
                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                    data-kt-toggle-name="aside-minimize">

                    <i class="ki-duotone ki-arrow-left fs-2 rotate-180"><span class="path1"></span><span
                            class="path2"></span></i> </button>
                <!--end::Aside Toggle-->
            </div>
            <!--end::Aside-->