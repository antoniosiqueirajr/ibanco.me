<?php include_once "menu.php" ?>
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header " data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">

        <!--begin::Container-->
        <div class=" container-xxl  d-flex align-items-center justify-content-between" id="kt_header_container">

            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap mt-n5 mt-lg-0 me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">

                <!--begin::Heading-->
                <h1 class="text-gray-900 fw-bold my-0 fs-2">
                   Dashboard </h1>
                <!--end::Heading-->

            </div>
            <!--end::Page title--->

            <!--begin::Wrapper-->
            <div class="d-flex d-lg-none align-items-center ms-n4 me-2">
                <!--begin::Aside mobile toggle-->
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Aside mobile toggle-->

                <!--begin::Logo-->
                <a href="../index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="assets/media/logos/demo7-1.svg" class="h-30px">
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Toolbar wrapper-->
            <div class="d-flex flex-shrink-0">
                <!--begin::Invite user-->
                <div class="d-flex ms-3">
                    <a href="#" class="btn btn-flex flex-center btn-light btn-color-gray-600 btn-active-primary w-40px w-md-auto h-40px px-0 px-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                        <i class="ki-duotone ki-plus fs-2 me-0 me-md-2"></i> <span class="d-none d-md-inline">Nova Cobrança</span>
                    </a>
                </div>
                <!--end::Invite user-->

                <!--begin::Create app-->
                <div class="d-flex ms-3">
                    <a href="#" class="btn btn-flex btn-light flex-center btn-color-gray-600 btn-active-primary w-40px w-md-auto h-40px px-0 px-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                        <i class="ki-duotone ki-document fs-2 me-0 me-md-2"><span class="path1"></span><span class="path2"></span></i> <span class="d-none d-md-inline">Novo Cliente</span>
                    </a>
                </div>
                <!--end::Create app-->

                <!--begin::Theme mode-->
                <div class="d-flex align-items-center ms-3">

                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-icon flex-center bg-body btn-color-gray-600 btn-active-color-primary h-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span class="path2"></span></i></a>
                    <!--begin::Menu toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i> </span>
                                <span class="menu-title">
                                    Light
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                <span class="menu-title">
                                    Dark
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </span>
                                <span class="menu-title">
                                    System
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->

                </div>
                <!--end::Theme mode-->

                <!--begin::Chat-->
                <div class="d-flex align-items-center ms-3">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white" id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> <span class="pulse-ring"></span>
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Chat-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class=" container-xxl " id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                    <!--begin::Card widget 4-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">$</font>
                                        </font>
                                    </span>
                                    <!--end::Currency-->

                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0</font>
                                        </font>
                                    </span>
                                    <!--end::Amount-->

                                    <!--begin::Badge-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2,2%
                                            </font>
                                        </font>
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->

                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ganhos esperados</font>
                                    </font>
                                </span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center me-5 pt-2">
                                <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
                                    <span></span><canvas height="70" width="70"></canvas>
                                </div>
                            </div>
                            <!--end::Chart-->

                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center w-100">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Vencidos</font>
                                        </font>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">R$ 0</font>
                                        </font>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Recebidos</font>
                                        </font>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">R$ 0</font>
                                        </font>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Outros</font>
                                        </font>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Stats-->
                                    <div class=" fw-bolder text-gray-700 text-xxl-end">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">R$ 1.000.000,00</font>
                                        </font>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 4-->

                    <!--begin::Card widget 5-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0</font>
                                        </font>
                                    </span>
                                    <!--end::Amount-->

                                    <!--begin::Badge-->
                                    <span class="badge badge-light-danger fs-base">
                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                0%
                                            </font>
                                        </font>
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->

                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Previsto mês</font>
                                    </font>
                                </span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-bolder fs-6 text-gray-900">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">R$ 15.000,00</font>
                                        </font>
                                    </span>
                                    <span class="fw-bold fs-6 text-gray-500">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0%</font>
                                        </font>
                                    </span>
                                </div>

                                <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                    <div class="bg-success rounded h-8px" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 5-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 6-->
                    <div class="card card-flush  h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">$</font>
                                        </font>
                                    </span>
                                    <!--end::Currency-->

                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0</font>
                                        </font>
                                    </span>
                                    <!--end::Amount-->

                                    <!--begin::Badge-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2,6%
                                            </font>
                                        </font>
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->

                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Vendas Médias Diárias</font>
                                    </font>
                                </span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end px-0 pb-0">
                            <!--begin::Chart-->
                            <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px; min-height: 80px;">
                                <div id="apexchartsdkgiwdb4" class="apexcharts-canvas apexchartsdkgiwdb4 apexcharts-theme-light" style="width: 289px; height: 80px;"><svg id="SvgjsSvg1534" width="289" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="289" height="80">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 40px;"></div>
                                        </foreignObject>
                                        <g id="SvgjsG1580" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG1536" class="apexcharts-inner apexcharts-graphical" transform="translate(35.43888888888889, 4.5)">
                                            <defs id="SvgjsDefs1535">
                                                <clipPath id="gridRectMaskdkgiwdb4">
                                                    <rect id="SvgjsRect1538" width="281.99999999999994" height="111" x="-32.43888888888889" y="-20" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskdkgiwdb4"></clipPath>
                                                <clipPath id="nonForecastMaskdkgiwdb4"></clipPath>
                                                <clipPath id="gridRectMarkerMaskdkgiwdb4">
                                                    <rect id="SvgjsRect1539" width="230.1222222222222" height="75" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1559" class="apexcharts-grid">
                                                <g id="SvgjsG1560" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line id="SvgjsLine1563" x1="-21.43888888888889" y1="0" x2="247.5611111111111" y2="0" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1564" x1="-21.43888888888889" y1="17.75" x2="247.5611111111111" y2="17.75" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1565" x1="-21.43888888888889" y1="35.5" x2="247.5611111111111" y2="35.5" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1566" x1="-21.43888888888889" y1="53.25" x2="247.5611111111111" y2="53.25" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1567" x1="-21.43888888888889" y1="71" x2="247.5611111111111" y2="71" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1561" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line id="SvgjsLine1569" x1="0" y1="71" x2="226.1222222222222" y2="71" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1568" x1="0" y1="1" x2="0" y2="71" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1562" class="apexcharts-grid-borders" style="display: none;"></g>
                                            <g id="SvgjsG1540" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1541" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0">
                                                    <path id="SvgjsPath1546" d="M -10.363935185185184 65.001 L -10.363935185185184 50.376 C -10.363935185185184 47.376 -7.363935185185184 44.376 -4.363935185185184 44.376 L -4.363935185185184 44.376 C -1.5 44.376 1.3639351851851842 47.376 1.3639351851851842 50.376 L 1.3639351851851842 65.001 C 1.3639351851851842 68.001 -1.6360648148148158 71.001 -4.636064814814816 71.001 L -4.636064814814816 71.001 C -7.5 71.001 -10.363935185185184 68.001 -10.363935185185184 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M -10.363935185185184 65.001 L -10.363935185185184 50.376 C -10.363935185185184 47.376 -7.363935185185184 44.376 -4.363935185185184 44.376 L -4.363935185185184 44.376 C -1.5 44.376 1.3639351851851842 47.376 1.3639351851851842 50.376 L 1.3639351851851842 65.001 C 1.3639351851851842 68.001 -1.6360648148148158 71.001 -4.636064814814816 71.001 L -4.636064814814816 71.001 C -7.5 71.001 -10.363935185185184 68.001 -10.363935185185184 65.001 Z " pathFrom="M -10.363935185185184 71.001 L -10.363935185185184 71.001 L 1.3639351851851842 71.001 L 1.3639351851851842 71.001 L 1.3639351851851842 71.001 L 1.3639351851851842 71.001 L 1.3639351851851842 71.001 L -10.363935185185184 71.001 Z" cy="44.375" cx="5.863935185185184" j="0" val="30" barHeight="26.625" barWidth="20.72787037037037"></path>
                                                    <path id="SvgjsPath1548" d="M 27.323101851851852 65.001 L 27.323101851851852 23.751 C 27.323101851851852 20.751 30.323101851851852 17.751 33.32310185185185 17.751 L 33.32310185185185 17.751 C 36.18703703703704 17.751 39.05097222222222 20.751 39.05097222222222 23.751 L 39.05097222222222 65.001 C 39.05097222222222 68.001 36.05097222222222 71.001 33.05097222222222 71.001 L 33.05097222222222 71.001 C 30.187037037037037 71.001 27.323101851851852 68.001 27.323101851851852 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M 27.323101851851852 65.001 L 27.323101851851852 23.751 C 27.323101851851852 20.751 30.323101851851852 17.751 33.32310185185185 17.751 L 33.32310185185185 17.751 C 36.18703703703704 17.751 39.05097222222222 20.751 39.05097222222222 23.751 L 39.05097222222222 65.001 C 39.05097222222222 68.001 36.05097222222222 71.001 33.05097222222222 71.001 L 33.05097222222222 71.001 C 30.187037037037037 71.001 27.323101851851852 68.001 27.323101851851852 65.001 Z " pathFrom="M 27.323101851851852 71.001 L 27.323101851851852 71.001 L 39.05097222222222 71.001 L 39.05097222222222 71.001 L 39.05097222222222 71.001 L 39.05097222222222 71.001 L 39.05097222222222 71.001 L 27.323101851851852 71.001 Z" cy="17.75" cx="43.55097222222222" j="1" val="60" barHeight="53.25" barWidth="20.72787037037037"></path>
                                                    <path id="SvgjsPath1550" d="M 65.01013888888889 65.001 L 65.01013888888889 29.963500000000007 C 65.01013888888889 26.963500000000007 68.01013888888889 23.963500000000007 71.01013888888889 23.963500000000007 L 71.01013888888889 23.963500000000007 C 73.87407407407407 23.963500000000007 76.73800925925926 26.963500000000007 76.73800925925926 29.963500000000007 L 76.73800925925926 65.001 C 76.73800925925926 68.001 73.73800925925926 71.001 70.73800925925926 71.001 L 70.73800925925926 71.001 C 67.87407407407407 71.001 65.01013888888889 68.001 65.01013888888889 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M 65.01013888888889 65.001 L 65.01013888888889 29.963500000000007 C 65.01013888888889 26.963500000000007 68.01013888888889 23.963500000000007 71.01013888888889 23.963500000000007 L 71.01013888888889 23.963500000000007 C 73.87407407407407 23.963500000000007 76.73800925925926 26.963500000000007 76.73800925925926 29.963500000000007 L 76.73800925925926 65.001 C 76.73800925925926 68.001 73.73800925925926 71.001 70.73800925925926 71.001 L 70.73800925925926 71.001 C 67.87407407407407 71.001 65.01013888888889 68.001 65.01013888888889 65.001 Z " pathFrom="M 65.01013888888889 71.001 L 65.01013888888889 71.001 L 76.73800925925926 71.001 L 76.73800925925926 71.001 L 76.73800925925926 71.001 L 76.73800925925926 71.001 L 76.73800925925926 71.001 L 65.01013888888889 71.001 Z" cy="23.962500000000006" cx="81.23800925925926" j="2" val="53" barHeight="47.037499999999994" barWidth="20.72787037037037"></path>
                                                    <path id="SvgjsPath1552" d="M 102.69717592592592 65.001 L 102.69717592592592 37.063500000000005 C 102.69717592592592 34.063500000000005 105.69717592592592 31.0635 108.69717592592592 31.0635 L 108.69717592592592 31.0635 C 111.5611111111111 31.0635 114.42504629629629 34.063500000000005 114.42504629629629 37.063500000000005 L 114.42504629629629 65.001 C 114.42504629629629 68.001 111.42504629629629 71.001 108.42504629629629 71.001 L 108.42504629629629 71.001 C 105.5611111111111 71.001 102.69717592592592 68.001 102.69717592592592 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M 102.69717592592592 65.001 L 102.69717592592592 37.063500000000005 C 102.69717592592592 34.063500000000005 105.69717592592592 31.0635 108.69717592592592 31.0635 L 108.69717592592592 31.0635 C 111.5611111111111 31.0635 114.42504629629629 34.063500000000005 114.42504629629629 37.063500000000005 L 114.42504629629629 65.001 C 114.42504629629629 68.001 111.42504629629629 71.001 108.42504629629629 71.001 L 108.42504629629629 71.001 C 105.5611111111111 71.001 102.69717592592592 68.001 102.69717592592592 65.001 Z " pathFrom="M 102.69717592592592 71.001 L 102.69717592592592 71.001 L 114.42504629629629 71.001 L 114.42504629629629 71.001 L 114.42504629629629 71.001 L 114.42504629629629 71.001 L 114.42504629629629 71.001 L 102.69717592592592 71.001 Z" cy="31.0625" cx="118.92504629629629" j="3" val="45" barHeight="39.9375" barWidth="20.72787037037037"></path>
                                                    <path id="SvgjsPath1554" d="M 140.38421296296298 65.001 L 140.38421296296298 23.751 C 140.38421296296298 20.751 143.38421296296298 17.751 146.38421296296298 17.751 L 146.38421296296298 17.751 C 149.24814814814818 17.751 152.11208333333335 20.751 152.11208333333335 23.751 L 152.11208333333335 65.001 C 152.11208333333335 68.001 149.11208333333335 71.001 146.11208333333335 71.001 L 146.11208333333335 71.001 C 143.24814814814818 71.001 140.38421296296298 68.001 140.38421296296298 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M 140.38421296296298 65.001 L 140.38421296296298 23.751 C 140.38421296296298 20.751 143.38421296296298 17.751 146.38421296296298 17.751 L 146.38421296296298 17.751 C 149.24814814814818 17.751 152.11208333333335 20.751 152.11208333333335 23.751 L 152.11208333333335 65.001 C 152.11208333333335 68.001 149.11208333333335 71.001 146.11208333333335 71.001 L 146.11208333333335 71.001 C 143.24814814814818 71.001 140.38421296296298 68.001 140.38421296296298 65.001 Z " pathFrom="M 140.38421296296298 71.001 L 140.38421296296298 71.001 L 152.11208333333335 71.001 L 152.11208333333335 71.001 L 152.11208333333335 71.001 L 152.11208333333335 71.001 L 152.11208333333335 71.001 L 140.38421296296298 71.001 Z" cy="17.75" cx="156.61208333333335" j="4" val="60" barHeight="53.25" barWidth="20.72787037037037"></path>
                                                    <path id="SvgjsPath1556" d="M 178.07124999999996 65.001 L 178.07124999999996 10.438500000000001 C 178.07124999999996 7.438500000000001 181.07124999999996 4.4385 184.07124999999996 4.4385 L 184.07124999999996 4.4385 C 186.93518518518516 4.4385 189.79912037037033 7.438500000000001 189.79912037037033 10.438500000000001 L 189.79912037037033 65.001 C 189.79912037037033 68.001 186.79912037037033 71.001 183.79912037037033 71.001 L 183.79912037037033 71.001 C 180.93518518518516 71.001 178.07124999999996 68.001 178.07124999999996 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M 178.07124999999996 65.001 L 178.07124999999996 10.438500000000001 C 178.07124999999996 7.438500000000001 181.07124999999996 4.4385 184.07124999999996 4.4385 L 184.07124999999996 4.4385 C 186.93518518518516 4.4385 189.79912037037033 7.438500000000001 189.79912037037033 10.438500000000001 L 189.79912037037033 65.001 C 189.79912037037033 68.001 186.79912037037033 71.001 183.79912037037033 71.001 L 183.79912037037033 71.001 C 180.93518518518516 71.001 178.07124999999996 68.001 178.07124999999996 65.001 Z " pathFrom="M 178.07124999999996 71.001 L 178.07124999999996 71.001 L 189.79912037037033 71.001 L 189.79912037037033 71.001 L 189.79912037037033 71.001 L 189.79912037037033 71.001 L 189.79912037037033 71.001 L 178.07124999999996 71.001 Z" cy="4.4375" cx="194.29912037037033" j="5" val="75" barHeight="66.5625" barWidth="20.72787037037037"></path>
                                                    <path id="SvgjsPath1558" d="M 215.758287037037 65.001 L 215.758287037037 29.963500000000007 C 215.758287037037 26.963500000000007 218.758287037037 23.963500000000007 221.758287037037 23.963500000000007 L 221.758287037037 23.963500000000007 C 224.6222222222222 23.963500000000007 227.48615740740738 26.963500000000007 227.48615740740738 29.963500000000007 L 227.48615740740738 65.001 C 227.48615740740738 68.001 224.48615740740738 71.001 221.48615740740738 71.001 L 221.48615740740738 71.001 C 218.6222222222222 71.001 215.758287037037 68.001 215.758287037037 65.001 Z " fill="rgba(0,162,97,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdkgiwdb4)" pathTo="M 215.758287037037 65.001 L 215.758287037037 29.963500000000007 C 215.758287037037 26.963500000000007 218.758287037037 23.963500000000007 221.758287037037 23.963500000000007 L 221.758287037037 23.963500000000007 C 224.6222222222222 23.963500000000007 227.48615740740738 26.963500000000007 227.48615740740738 29.963500000000007 L 227.48615740740738 65.001 C 227.48615740740738 68.001 224.48615740740738 71.001 221.48615740740738 71.001 L 221.48615740740738 71.001 C 218.6222222222222 71.001 215.758287037037 68.001 215.758287037037 65.001 Z " pathFrom="M 215.758287037037 71.001 L 215.758287037037 71.001 L 227.48615740740738 71.001 L 227.48615740740738 71.001 L 227.48615740740738 71.001 L 227.48615740740738 71.001 L 227.48615740740738 71.001 L 215.758287037037 71.001 Z" cy="23.962500000000006" cx="231.98615740740738" j="6" val="53" barHeight="47.037499999999994" barWidth="20.72787037037037"></path>
                                                    <g id="SvgjsG1543" class="apexcharts-bar-goals-markers">
                                                        <g id="SvgjsG1545" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                        <g id="SvgjsG1547" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                        <g id="SvgjsG1549" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                        <g id="SvgjsG1551" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                        <g id="SvgjsG1553" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                        <g id="SvgjsG1555" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                        <g id="SvgjsG1557" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdkgiwdb4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1544" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                </g>
                                                <g id="SvgjsG1542" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1570" x1="-21.43888888888889" y1="0" x2="247.5611111111111" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1571" x1="-21.43888888888889" y1="0" x2="247.5611111111111" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1572" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1573" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1581" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1582" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1583" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 162, 97);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 6-->


                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">0</font>
                                    </font>
                                </span>
                                <!--end::Amount-->

                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Novos clientes este mês</font>
                                    </font>
                                </span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Os heróis de hoje</font>
                                </font>
                            </span>
                            <!--end::Title-->

                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">A</font>
                                        </font>
                                    </span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Éberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                    <img alt="Foto" src="assets/media/avatars/300-11-1.jpg">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">S</font>
                                        </font>
                                    </span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melodia Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                    <img alt="Foto" src="assets/media/avatars/300-2-1.jpg">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">P</font>
                                        </font>
                                    </span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                    <img alt="Foto" src="assets/media/avatars/300-12-1.jpg">
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">+42</font>
                                        </font>
                                    </span>
                                </a>
                            </div>
                            <!--end::Users group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Chart widget 3-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Vendas nestes meses</font>
                                    </font>
                                </span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Usuários de todos os canais</font>
                                    </font>
                                </span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                            Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Statistics-->
                            <div class="px-9 mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2">
                                    <span class="fs-4 fw-semibold text-gray-500 me-1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">$</font>
                                        </font>
                                    </span>
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0</font>
                                        </font>
                                    </span>
                                </div>
                                <!--end::Statistics-->

                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Outros R$ 0 para a meta</font>
                                    </font>
                                </span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->

                            <!--begin::Chart-->
                            <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px; min-height: 315px;">
                                <div id="apexchartsgnt2gc3r" class="apexcharts-canvas apexchartsgnt2gc3r apexcharts-theme-light" style="width: 579.5px; height: 300px;"><svg id="SvgjsSvg1295" width="579.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="579.5" height="300">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect1324" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1387" class="apexcharts-yaxis" rel="0" transform="translate(35.0390625, 0)">
                                            <g id="SvgjsG1388" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1390" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1391">$24K</tspan>
                                                    <title>$24K</title>
                                                </text><text id="SvgjsText1393" font-family="inherit" x="20" y="87.12466666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1394">$20.5K</tspan>
                                                    <title>$20.5K</title>
                                                </text><text id="SvgjsText1396" font-family="inherit" x="20" y="142.84933333333333" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1397">$17K</tspan>
                                                    <title>$17K</title>
                                                </text><text id="SvgjsText1399" font-family="inherit" x="20" y="198.57399999999998" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1400">$13.5K</tspan>
                                                    <title>$13.5K</title>
                                                </text><text id="SvgjsText1402" font-family="inherit" x="20" y="254.29866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1403">$10K</tspan>
                                                    <title>$10K</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1297" class="apexcharts-inner apexcharts-graphical" transform="translate(65.0390625, 30)">
                                            <defs id="SvgjsDefs1296">
                                                <clipPath id="gridRectMaskgnt2gc3r">
                                                    <rect id="SvgjsRect1301" width="511.4609375" height="238.89866666666666" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskgnt2gc3r"></clipPath>
                                                <clipPath id="nonForecastMaskgnt2gc3r"></clipPath>
                                                <clipPath id="gridRectMarkerMaskgnt2gc3r">
                                                    <rect id="SvgjsRect1302" width="508.4609375" height="226.89866666666666" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1307" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1308" stop-opacity="0.4" stop-color="rgba(0,106,230,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1309" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop>
                                                    <stop id="SvgjsStop1310" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1313" class="apexcharts-grid">
                                                <g id="SvgjsG1314" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1318" x1="0" y1="55.724666666666664" x2="504.4609375" y2="55.724666666666664" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1319" x1="0" y1="111.44933333333333" x2="504.4609375" y2="111.44933333333333" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1320" x1="0" y1="167.17399999999998" x2="504.4609375" y2="167.17399999999998" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1315" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1323" x1="0" y1="222.89866666666666" x2="504.4609375" y2="222.89866666666666" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1322" x1="0" y1="1" x2="0" y2="222.89866666666666" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1316" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1317" x1="0" y1="0" x2="504.4609375" y2="0" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1321" x1="0" y1="222.89866666666666" x2="504.4609375" y2="222.89866666666666" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1303" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1304" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1311" d="M 0 222.89866666666666 L 0 95.52799999999996C4.670934606481482, 95.52799999999996, 18.683738425925924, 95.52799999999996, 28.02560763888889, 95.52799999999996S46.70934606481482, 63.68533333333329, 56.05121527777778, 63.68533333333329S74.73495370370371, 63.68533333333329, 84.07682291666667, 63.68533333333329S102.7605613425926, 95.52799999999996, 112.10243055555556, 95.52799999999996S130.7861689814815, 95.52799999999996, 140.12803819444446, 95.52799999999996S158.81177662037038, 31.842666666666616, 168.15364583333334, 31.842666666666616S186.83738425925927, 31.842666666666616, 196.17925347222223, 31.842666666666616S214.86299189814815, 63.68533333333329, 224.20486111111111, 63.68533333333329S242.88859953703707, 63.68533333333329, 252.23046875000003, 63.68533333333329S270.914207175926, 95.52799999999996, 280.2560763888889, 95.52799999999996S298.9398148148148, 95.52799999999996, 308.28168402777777, 95.52799999999996S326.9654224537037, 63.68533333333329, 336.3072916666667, 63.68533333333329S354.9910300925926, 63.68533333333329, 364.3328993055556, 63.68533333333329S383.0166377314815, 95.52799999999996, 392.35850694444446, 95.52799999999996S411.04224537037044, 95.52799999999996, 420.38411458333337, 95.52799999999996S439.06785300925924, 63.68533333333329, 448.40972222222223, 63.68533333333329S467.09346064814815, 63.68533333333329, 476.43532986111114, 63.68533333333329S502.4220721998492, 34.15922333039614, 504.46093750000006, 31.842666666666616 L 504.46093750000006 222.89866666666666 L 0 222.89866666666666M 0 95.52799999999996z" fill="url(#SvgjsLinearGradient1307)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgnt2gc3r)" pathTo="M 0 222.89866666666666 L 0 95.52799999999996C4.670934606481482, 95.52799999999996, 18.683738425925924, 95.52799999999996, 28.02560763888889, 95.52799999999996S46.70934606481482, 63.68533333333329, 56.05121527777778, 63.68533333333329S74.73495370370371, 63.68533333333329, 84.07682291666667, 63.68533333333329S102.7605613425926, 95.52799999999996, 112.10243055555556, 95.52799999999996S130.7861689814815, 95.52799999999996, 140.12803819444446, 95.52799999999996S158.81177662037038, 31.842666666666616, 168.15364583333334, 31.842666666666616S186.83738425925927, 31.842666666666616, 196.17925347222223, 31.842666666666616S214.86299189814815, 63.68533333333329, 224.20486111111111, 63.68533333333329S242.88859953703707, 63.68533333333329, 252.23046875000003, 63.68533333333329S270.914207175926, 95.52799999999996, 280.2560763888889, 95.52799999999996S298.9398148148148, 95.52799999999996, 308.28168402777777, 95.52799999999996S326.9654224537037, 63.68533333333329, 336.3072916666667, 63.68533333333329S354.9910300925926, 63.68533333333329, 364.3328993055556, 63.68533333333329S383.0166377314815, 95.52799999999996, 392.35850694444446, 95.52799999999996S411.04224537037044, 95.52799999999996, 420.38411458333337, 95.52799999999996S439.06785300925924, 63.68533333333329, 448.40972222222223, 63.68533333333329S467.09346064814815, 63.68533333333329, 476.43532986111114, 63.68533333333329S502.4220721998492, 34.15922333039614, 504.46093750000006, 31.842666666666616 L 504.46093750000006 222.89866666666666 L 0 222.89866666666666M 0 95.52799999999996z" pathFrom="M -1 382.11199999999997 L -1 382.11199999999997 L 28.02560763888889 382.11199999999997 L 56.05121527777778 382.11199999999997 L 84.07682291666667 382.11199999999997 L 112.10243055555556 382.11199999999997 L 140.12803819444446 382.11199999999997 L 168.15364583333334 382.11199999999997 L 196.17925347222223 382.11199999999997 L 224.20486111111111 382.11199999999997 L 252.23046875000003 382.11199999999997 L 280.2560763888889 382.11199999999997 L 308.28168402777777 382.11199999999997 L 336.3072916666667 382.11199999999997 L 364.3328993055556 382.11199999999997 L 392.35850694444446 382.11199999999997 L 420.38411458333337 382.11199999999997 L 448.40972222222223 382.11199999999997 L 476.43532986111114 382.11199999999997 L 504.46093750000006 382.11199999999997"></path>
                                                    <path id="SvgjsPath1312" d="M 0 95.52799999999996C4.670934606481482, 95.52799999999996, 18.683738425925924, 95.52799999999996, 28.02560763888889, 95.52799999999996S46.70934606481482, 63.68533333333329, 56.05121527777778, 63.68533333333329S74.73495370370371, 63.68533333333329, 84.07682291666667, 63.68533333333329S102.7605613425926, 95.52799999999996, 112.10243055555556, 95.52799999999996S130.7861689814815, 95.52799999999996, 140.12803819444446, 95.52799999999996S158.81177662037038, 31.842666666666616, 168.15364583333334, 31.842666666666616S186.83738425925927, 31.842666666666616, 196.17925347222223, 31.842666666666616S214.86299189814815, 63.68533333333329, 224.20486111111111, 63.68533333333329S242.88859953703707, 63.68533333333329, 252.23046875000003, 63.68533333333329S270.914207175926, 95.52799999999996, 280.2560763888889, 95.52799999999996S298.9398148148148, 95.52799999999996, 308.28168402777777, 95.52799999999996S326.9654224537037, 63.68533333333329, 336.3072916666667, 63.68533333333329S354.9910300925926, 63.68533333333329, 364.3328993055556, 63.68533333333329S383.0166377314815, 95.52799999999996, 392.35850694444446, 95.52799999999996S411.04224537037044, 95.52799999999996, 420.38411458333337, 95.52799999999996S439.06785300925924, 63.68533333333329, 448.40972222222223, 63.68533333333329S467.09346064814815, 63.68533333333329, 476.43532986111114, 63.68533333333329S502.4220721998492, 34.15922333039614, 504.46093750000006, 31.842666666666616" fill="none" fill-opacity="1" stroke="#006ae6" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgnt2gc3r)" pathTo="M 0 95.52799999999996C4.670934606481482, 95.52799999999996, 18.683738425925924, 95.52799999999996, 28.02560763888889, 95.52799999999996S46.70934606481482, 63.68533333333329, 56.05121527777778, 63.68533333333329S74.73495370370371, 63.68533333333329, 84.07682291666667, 63.68533333333329S102.7605613425926, 95.52799999999996, 112.10243055555556, 95.52799999999996S130.7861689814815, 95.52799999999996, 140.12803819444446, 95.52799999999996S158.81177662037038, 31.842666666666616, 168.15364583333334, 31.842666666666616S186.83738425925927, 31.842666666666616, 196.17925347222223, 31.842666666666616S214.86299189814815, 63.68533333333329, 224.20486111111111, 63.68533333333329S242.88859953703707, 63.68533333333329, 252.23046875000003, 63.68533333333329S270.914207175926, 95.52799999999996, 280.2560763888889, 95.52799999999996S298.9398148148148, 95.52799999999996, 308.28168402777777, 95.52799999999996S326.9654224537037, 63.68533333333329, 336.3072916666667, 63.68533333333329S354.9910300925926, 63.68533333333329, 364.3328993055556, 63.68533333333329S383.0166377314815, 95.52799999999996, 392.35850694444446, 95.52799999999996S411.04224537037044, 95.52799999999996, 420.38411458333337, 95.52799999999996S439.06785300925924, 63.68533333333329, 448.40972222222223, 63.68533333333329S467.09346064814815, 63.68533333333329, 476.43532986111114, 63.68533333333329S502.4220721998492, 34.15922333039614, 504.46093750000006, 31.842666666666616" pathFrom="M -1 382.11199999999997 L -1 382.11199999999997 L 28.02560763888889 382.11199999999997 L 56.05121527777778 382.11199999999997 L 84.07682291666667 382.11199999999997 L 112.10243055555556 382.11199999999997 L 140.12803819444446 382.11199999999997 L 168.15364583333334 382.11199999999997 L 196.17925347222223 382.11199999999997 L 224.20486111111111 382.11199999999997 L 252.23046875000003 382.11199999999997 L 280.2560763888889 382.11199999999997 L 308.28168402777777 382.11199999999997 L 336.3072916666667 382.11199999999997 L 364.3328993055556 382.11199999999997 L 392.35850694444446 382.11199999999997 L 420.38411458333337 382.11199999999997 L 448.40972222222223 382.11199999999997 L 476.43532986111114 382.11199999999997 L 504.46093750000006 382.11199999999997" fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1305" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1407" r="0" cx="0" cy="0" class="apexcharts-marker w4444pz0ei no-pointer-events" stroke="#006ae6" fill="#006ae6" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1306" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1325" x1="0" y1="0" x2="0" y2="222.89866666666666" stroke="#006ae6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="222.89866666666666" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1326" x1="0" y1="0" x2="504.4609375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1327" x1="0" y1="0" x2="504.4609375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1328" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1329" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1331" font-family="inherit" x="0" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1332"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1334" font-family="inherit" x="28.025607638888893" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1335"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1337" font-family="inherit" x="56.051215277777786" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1338"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1340" font-family="inherit" x="84.07682291666667" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 85.07682037353516 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1341">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText1343" font-family="inherit" x="112.10243055555556" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1344"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1346" font-family="inherit" x="140.12803819444443" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1347"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1349" font-family="inherit" x="168.15364583333331" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 169.1536407470703 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1350">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText1352" font-family="inherit" x="196.1792534722222" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1353"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1355" font-family="inherit" x="224.2048611111111" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1356"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1358" font-family="inherit" x="252.23046875" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 253.23046875 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1359">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText1361" font-family="inherit" x="280.2560763888889" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1362"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1364" font-family="inherit" x="308.2816840277778" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1365"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1367" font-family="inherit" x="336.30729166666674" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 337.3072814941406 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1368">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText1370" font-family="inherit" x="364.33289930555566" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1371"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1373" font-family="inherit" x="392.35850694444457" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1374"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1376" font-family="inherit" x="420.3841145833335" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 421.3841247558594 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1377">Apr 16</tspan>
                                                        <title>Apr 16</title>
                                                    </text><text id="SvgjsText1379" font-family="inherit" x="448.4097222222224" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1380"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1382" font-family="inherit" x="476.4353298611113" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1383"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1385" font-family="inherit" x="504.4609375000002" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1386"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1404" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1405" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1406" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1408" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1409" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 106, 230);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">


                <!--begin::Col-->
                <div class="col-xl-12 mb-12 mb-xl-12">
                    <!--begin::Chart widget 4-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Vendas de produtos com desconto</font>
                                    </font>
                                </span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Usuários de todos os canais</font>
                                    </font>
                                </span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                            Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Info-->
                            <div class="px-12 mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">$</font>
                                        </font>
                                    </span>
                                    <!--end::Currency-->

                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0</font>
                                        </font>
                                    </span>
                                    <!--end::Value-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-down fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0%
                                            </font>
                                        </font>
                                    </span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->

                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Total de vendas com desconto neste mês</font>
                                    </font>
                                </span>
                                <!--end::Description-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Chart-->
                            <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px; min-height: 315px;">
                                <div id="apexchartsuiiyq5e8" class="apexcharts-canvas apexchartsuiiyq5e8 apexcharts-theme-light" style="width: 579.5px; height: 300px;"><svg id="SvgjsSvg1411" width="579.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="579.5" height="300">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect1442" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1505" class="apexcharts-yaxis" rel="0" transform="translate(23.6953125, 0)">
                                            <g id="SvgjsG1506" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1508" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1509">$362</tspan>
                                                    <title>$362</title>
                                                </text><text id="SvgjsText1511" font-family="inherit" x="20" y="68.74977777777778" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1512">$357</tspan>
                                                    <title>$357</title>
                                                </text><text id="SvgjsText1514" font-family="inherit" x="20" y="105.89955555555557" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1515">$351</tspan>
                                                    <title>$351</title>
                                                </text><text id="SvgjsText1517" font-family="inherit" x="20" y="143.04933333333335" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1518">$346</tspan>
                                                    <title>$346</title>
                                                </text><text id="SvgjsText1520" font-family="inherit" x="20" y="180.19911111111114" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1521">$340</tspan>
                                                    <title>$340</title>
                                                </text><text id="SvgjsText1523" font-family="inherit" x="20" y="217.34888888888892" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1524">$335</tspan>
                                                    <title>$335</title>
                                                </text><text id="SvgjsText1526" font-family="inherit" x="20" y="254.4986666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1527">$330</tspan>
                                                    <title>$330</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1413" class="apexcharts-inner apexcharts-graphical" transform="translate(53.6953125, 30)">
                                            <defs id="SvgjsDefs1412">
                                                <clipPath id="gridRectMaskuiiyq5e8">
                                                    <rect id="SvgjsRect1417" width="522.8046875" height="238.89866666666666" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskuiiyq5e8"></clipPath>
                                                <clipPath id="nonForecastMaskuiiyq5e8"></clipPath>
                                                <clipPath id="gridRectMarkerMaskuiiyq5e8">
                                                    <rect id="SvgjsRect1418" width="519.8046875" height="226.89866666666666" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1423" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1424" stop-opacity="0.4" stop-color="rgba(0,162,97,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1425" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop>
                                                    <stop id="SvgjsStop1426" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1429" class="apexcharts-grid">
                                                <g id="SvgjsG1430" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1434" x1="0" y1="37.14977777777778" x2="515.8046875" y2="37.14977777777778" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1435" x1="0" y1="74.29955555555556" x2="515.8046875" y2="74.29955555555556" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1436" x1="0" y1="111.44933333333333" x2="515.8046875" y2="111.44933333333333" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1437" x1="0" y1="148.5991111111111" x2="515.8046875" y2="148.5991111111111" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1438" x1="0" y1="185.7488888888889" x2="515.8046875" y2="185.7488888888889" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1439" x1="0" y1="222.89866666666668" x2="515.8046875" y2="222.89866666666668" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1431" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1441" x1="0" y1="222.89866666666666" x2="515.8046875" y2="222.89866666666666" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1440" x1="0" y1="1" x2="0" y2="222.89866666666666" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1432" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1433" x1="0" y1="0" x2="515.8046875" y2="0" stroke="#363843" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1419" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1420" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1427" d="M 0 222.89866666666666 L 0 121.58109090909011C4.775969328703703, 121.58109090909011, 19.103877314814817, 121.58109090909011, 28.65581597222222, 121.58109090909011S47.75969328703704, 87.8085656565645, 57.31163194444444, 87.8085656565645S76.41550925925927, 87.8085656565645, 85.96744791666667, 87.8085656565645S105.07132523148148, 54.03604040403934, 114.62326388888889, 54.03604040403934S133.7271412037037, 54.03604040403934, 143.27907986111111, 54.03604040403934S162.38295717592592, 87.8085656565645, 171.93489583333334, 87.8085656565645S191.03877314814815, 87.8085656565645, 200.59071180555554, 87.8085656565645S219.69458912037035, 54.03604040403934, 229.24652777777777, 54.03604040403934S248.35040509259258, 54.03604040403934, 257.90234375, 54.03604040403934S277.00622106481484, 87.8085656565645, 286.55815972222223, 87.8085656565645S305.66203703703707, 87.8085656565645, 315.21397569444446, 87.8085656565645S334.3178530092593, 121.58109090909011, 343.8697916666667, 121.58109090909011S362.97366898148147, 121.58109090909011, 372.52560763888886, 121.58109090909011S391.6294849537037, 87.8085656565645, 401.1814236111111, 87.8085656565645S420.2853009259259, 87.8085656565645, 429.8372395833333, 87.8085656565645S448.94111689814815, 54.03604040403934, 458.49305555555554, 54.03604040403934S477.5969328703704, 54.03604040403934, 487.14887152777777, 54.03604040403934S513.8055355430917, 85.45245023434899, 515.8046875, 87.8085656565645 L 515.8046875 222.89866666666666 L 0 222.89866666666666M 0 121.58109090909011z" fill="url(#SvgjsLinearGradient1423)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskuiiyq5e8)" pathTo="M 0 222.89866666666666 L 0 121.58109090909011C4.775969328703703, 121.58109090909011, 19.103877314814817, 121.58109090909011, 28.65581597222222, 121.58109090909011S47.75969328703704, 87.8085656565645, 57.31163194444444, 87.8085656565645S76.41550925925927, 87.8085656565645, 85.96744791666667, 87.8085656565645S105.07132523148148, 54.03604040403934, 114.62326388888889, 54.03604040403934S133.7271412037037, 54.03604040403934, 143.27907986111111, 54.03604040403934S162.38295717592592, 87.8085656565645, 171.93489583333334, 87.8085656565645S191.03877314814815, 87.8085656565645, 200.59071180555554, 87.8085656565645S219.69458912037035, 54.03604040403934, 229.24652777777777, 54.03604040403934S248.35040509259258, 54.03604040403934, 257.90234375, 54.03604040403934S277.00622106481484, 87.8085656565645, 286.55815972222223, 87.8085656565645S305.66203703703707, 87.8085656565645, 315.21397569444446, 87.8085656565645S334.3178530092593, 121.58109090909011, 343.8697916666667, 121.58109090909011S362.97366898148147, 121.58109090909011, 372.52560763888886, 121.58109090909011S391.6294849537037, 87.8085656565645, 401.1814236111111, 87.8085656565645S420.2853009259259, 87.8085656565645, 429.8372395833333, 87.8085656565645S448.94111689814815, 54.03604040403934, 458.49305555555554, 54.03604040403934S477.5969328703704, 54.03604040403934, 487.14887152777777, 54.03604040403934S513.8055355430917, 85.45245023434899, 515.8046875, 87.8085656565645 L 515.8046875 222.89866666666666 L 0 222.89866666666666M 0 121.58109090909011z" pathFrom="M -1 2451.8853333333445 L -1 2451.8853333333445 L 28.65581597222222 2451.8853333333445 L 57.31163194444444 2451.8853333333445 L 85.96744791666667 2451.8853333333445 L 114.62326388888889 2451.8853333333445 L 143.27907986111111 2451.8853333333445 L 171.93489583333334 2451.8853333333445 L 200.59071180555554 2451.8853333333445 L 229.24652777777777 2451.8853333333445 L 257.90234375 2451.8853333333445 L 286.55815972222223 2451.8853333333445 L 315.21397569444446 2451.8853333333445 L 343.8697916666667 2451.8853333333445 L 372.52560763888886 2451.8853333333445 L 401.1814236111111 2451.8853333333445 L 429.8372395833333 2451.8853333333445 L 458.49305555555554 2451.8853333333445 L 487.14887152777777 2451.8853333333445 L 515.8046875 2451.8853333333445"></path>
                                                    <path id="SvgjsPath1428" d="M 0 121.58109090909011C4.775969328703703, 121.58109090909011, 19.103877314814817, 121.58109090909011, 28.65581597222222, 121.58109090909011S47.75969328703704, 87.8085656565645, 57.31163194444444, 87.8085656565645S76.41550925925927, 87.8085656565645, 85.96744791666667, 87.8085656565645S105.07132523148148, 54.03604040403934, 114.62326388888889, 54.03604040403934S133.7271412037037, 54.03604040403934, 143.27907986111111, 54.03604040403934S162.38295717592592, 87.8085656565645, 171.93489583333334, 87.8085656565645S191.03877314814815, 87.8085656565645, 200.59071180555554, 87.8085656565645S219.69458912037035, 54.03604040403934, 229.24652777777777, 54.03604040403934S248.35040509259258, 54.03604040403934, 257.90234375, 54.03604040403934S277.00622106481484, 87.8085656565645, 286.55815972222223, 87.8085656565645S305.66203703703707, 87.8085656565645, 315.21397569444446, 87.8085656565645S334.3178530092593, 121.58109090909011, 343.8697916666667, 121.58109090909011S362.97366898148147, 121.58109090909011, 372.52560763888886, 121.58109090909011S391.6294849537037, 87.8085656565645, 401.1814236111111, 87.8085656565645S420.2853009259259, 87.8085656565645, 429.8372395833333, 87.8085656565645S448.94111689814815, 54.03604040403934, 458.49305555555554, 54.03604040403934S477.5969328703704, 54.03604040403934, 487.14887152777777, 54.03604040403934S513.8055355430917, 85.45245023434899, 515.8046875, 87.8085656565645" fill="none" fill-opacity="1" stroke="#00a261" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskuiiyq5e8)" pathTo="M 0 121.58109090909011C4.775969328703703, 121.58109090909011, 19.103877314814817, 121.58109090909011, 28.65581597222222, 121.58109090909011S47.75969328703704, 87.8085656565645, 57.31163194444444, 87.8085656565645S76.41550925925927, 87.8085656565645, 85.96744791666667, 87.8085656565645S105.07132523148148, 54.03604040403934, 114.62326388888889, 54.03604040403934S133.7271412037037, 54.03604040403934, 143.27907986111111, 54.03604040403934S162.38295717592592, 87.8085656565645, 171.93489583333334, 87.8085656565645S191.03877314814815, 87.8085656565645, 200.59071180555554, 87.8085656565645S219.69458912037035, 54.03604040403934, 229.24652777777777, 54.03604040403934S248.35040509259258, 54.03604040403934, 257.90234375, 54.03604040403934S277.00622106481484, 87.8085656565645, 286.55815972222223, 87.8085656565645S305.66203703703707, 87.8085656565645, 315.21397569444446, 87.8085656565645S334.3178530092593, 121.58109090909011, 343.8697916666667, 121.58109090909011S362.97366898148147, 121.58109090909011, 372.52560763888886, 121.58109090909011S391.6294849537037, 87.8085656565645, 401.1814236111111, 87.8085656565645S420.2853009259259, 87.8085656565645, 429.8372395833333, 87.8085656565645S448.94111689814815, 54.03604040403934, 458.49305555555554, 54.03604040403934S477.5969328703704, 54.03604040403934, 487.14887152777777, 54.03604040403934S513.8055355430917, 85.45245023434899, 515.8046875, 87.8085656565645" pathFrom="M -1 2451.8853333333445 L -1 2451.8853333333445 L 28.65581597222222 2451.8853333333445 L 57.31163194444444 2451.8853333333445 L 85.96744791666667 2451.8853333333445 L 114.62326388888889 2451.8853333333445 L 143.27907986111111 2451.8853333333445 L 171.93489583333334 2451.8853333333445 L 200.59071180555554 2451.8853333333445 L 229.24652777777777 2451.8853333333445 L 257.90234375 2451.8853333333445 L 286.55815972222223 2451.8853333333445 L 315.21397569444446 2451.8853333333445 L 343.8697916666667 2451.8853333333445 L 372.52560763888886 2451.8853333333445 L 401.1814236111111 2451.8853333333445 L 429.8372395833333 2451.8853333333445 L 458.49305555555554 2451.8853333333445 L 487.14887152777777 2451.8853333333445 L 515.8046875 2451.8853333333445" fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1421" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1531" r="0" cx="0" cy="0" class="apexcharts-marker w42v2t3z6h no-pointer-events" stroke="#00a261" fill="#00a261" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1422" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1443" x1="0" y1="0" x2="0" y2="222.89866666666666" stroke="#00a261" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="222.89866666666666" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1444" x1="0" y1="0" x2="515.8046875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1445" x1="0" y1="0" x2="515.8046875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1446" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1447" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1449" font-family="inherit" x="0" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1450"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1452" font-family="inherit" x="28.655815972222218" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1453"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1455" font-family="inherit" x="57.31163194444443" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1456"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1458" font-family="inherit" x="85.96744791666666" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 86.96744537353516 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1459">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText1461" font-family="inherit" x="114.62326388888889" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1462"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1464" font-family="inherit" x="143.27907986111111" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1465"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1467" font-family="inherit" x="171.93489583333334" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 172.9348907470703 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1468">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText1470" font-family="inherit" x="200.59071180555557" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1471"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1473" font-family="inherit" x="229.2465277777778" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1474"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1476" font-family="inherit" x="257.90234375000006" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 258.90234375 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1477">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText1479" font-family="inherit" x="286.5581597222223" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1480"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1482" font-family="inherit" x="315.2139756944445" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1483"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1485" font-family="inherit" x="343.86979166666674" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 344.8697814941406 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1486">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText1488" font-family="inherit" x="372.52560763888897" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1489"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1491" font-family="inherit" x="401.1814236111112" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1492"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1494" font-family="inherit" x="429.8372395833334" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 430.8372497558594 240.89866638183594)">
                                                        <tspan id="SvgjsTspan1495">Apr 18</tspan>
                                                        <title>Apr 18</title>
                                                    </text><text id="SvgjsText1497" font-family="inherit" x="458.49305555555566" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1498"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1500" font-family="inherit" x="487.1488715277779" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1501"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1503" font-family="inherit" x="515.8046875000001" y="245.89866666666666" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1504"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1528" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1529" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1530" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1532" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1533" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 162, 97);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <?php include_once "footer.php" ?>