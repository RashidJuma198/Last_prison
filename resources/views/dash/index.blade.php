<!DOCTYPE html>
<html lang="en" data-footer="true">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>PMS | Dashboard</title>
<meta name="description" content="A dashboard implementation that mainly has visual items such as banners, call to action buttons and stats.">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="dash/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="dash/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="dash/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="dash/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="dash/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="dash/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="dash/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="dash/img/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="dash/img/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="dash/img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="dash/img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="dash/img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="dash/img/favicon/favicon-128.png" sizes="128x128">
<meta name="application-name" content="&nbsp;">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="dash/img/favicon/mstile-144x144.png">
<meta name="msapplication-square70x70logo" content="dash/img/favicon/mstile-70x70.png">
<meta name="msapplication-square150x150logo" content="dash/img/favicon/mstile-150x150.png">
<meta name="msapplication-wide310x150logo" content="dash/img/favicon/mstile-310x150.png">
<meta name="msapplication-square310x310logo" content="dash/img/favicon/mstile-310x310.png">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="dash/font/CS-Interface/style.css">
<link rel="stylesheet" href="dash/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="dash/css/vendor/OverlayScrollbars.min.css">
<link rel="stylesheet" href="dash/css/vendor/glide.core.min.css">
<link rel="stylesheet" href="dash/css/vendor/glide.core.min.css">
<link rel="stylesheet" href="dash/css/vendor/introjs.min.css">
<link rel="stylesheet" href="dash/css/vendor/select2.min.css">
<link rel="stylesheet" href="dash/css/vendor/select2-bootstrap4.min.css">
<link rel="stylesheet" href="dash/css/vendor/plyr.css">
<link rel="stylesheet" href="dash/css/styles.css">
<link rel="stylesheet" href="dash/css/main.css">
<script src="dash/js/base/loader.js"></script>
</head>

<body>
<div id="root">
@include('dash.navBar')
<main>
<div class="container">
<div class="row">
<div class="col-12">
<div class="page-title-container">
<h1 class="mb-0 pb-0 display-4" id="title">Prison Overview</h1>
{{-- <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
<ul class="breadcrumb pt-0">
<li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
<li class="breadcrumb-item"><a href="Dashboards.html">Dashboards</a></li>
</ul>
</nav> --}}
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-8">
<h2 class="small-title">Inmates</h2>
<div class="mb-5">
<div class="row g-2">
<div class="col-12 col-sm-6 col-lg-3">
<div class="card hover-scale-up cursor-pointer sh-19">
<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
<div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
<i data-cs-icon="user" class="text-white"></i>
</div>
<div class="heading text-center mb-0 d-flex align-items-center lh-1">Total Inmates</div>
<div class="text-small text-primary">14</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-3">
<div class="card hover-scale-up cursor-pointer sh-19">
<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
<div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
<i data-cs-icon="user" class="text-white"></i>
</div>
<div class="heading text-center mb-0 d-flex align-items-center lh-1">Convicts</div>
<div class="text-small text-primary">8</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-3">
<div class="card hover-scale-up cursor-pointer sh-19">
<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
<div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
<i data-cs-icon="user" class="text-white"></i>
</div>
<div class="heading text-center mb-0 d-flex align-items-center lh-1">Remandees</div>
<div class="text-small text-primary">21</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="card hover-scale-up cursor-pointer sh-19">
<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
<div class="bg-gradient-2 sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
<i data-cs-icon="mushrooms" class="text-white"></i>
</div>
<div class="heading text-center mb-0 d-flex align-items-center lh-1">Total Aliens</div>
<div class="text-small text-primary">21</div>
</div>
</div>
</div>

</div>
</div>

<div class="mb-5" data-title="Fancy Charts" data-intro="Some charts over here!" data-step="1">
<h2 class="small-title">Admissions & Discharges</h2>
<div class="card mb-2 h-auto sh-xl-24">
<div class="card-body">
<div class="row g-0 h-100 chart-container">
<div class="col-12 col-sm-auto d-flex flex-column justify-content-between custom-tooltip pe-0 pe-sm-4">
<p class="heading title mb-1"></p>
<div>
<div>
<div class="cta-2 text-primary value d-inline-block align-middle sw-4"></div>
<i class="icon d-inline-block align-middle text-primary" data-cs-size="15"></i>
</div>
<div class="text-small text-muted mb-1 text"></div>
</div>
<div class="row">
<div class="col-auto">
<div class="cta-3 text-alternate">84</div>
<div class="text-small text-muted mb-1">THIS WEEK</div>
</div>
<div class="col">
<div class="cta-3 text-alternate">792</div>
<div class="text-small text-muted mb-1">THIS MONTH</div>
</div>
</div>
</div>
<div class="col-12 col-sm sh-17">
<canvas id="largeLineChart1"></canvas>
</div>
</div>
</div>
</div>
<div class="card h-auto sh-xl-24">
<div class="card-body">
<div class="row g-0 h-100 chart-container">
<div class="col-12 col-sm-auto d-flex flex-column justify-content-between custom-tooltip pe-0 pe-sm-4">
<p class="heading title"></p>
<div>
<div>
<div class="cta-2 text-primary value d-inline-block align-middle sw-4"></div>
<i class="icon d-inline-block align-middle text-primary" data-cs-size="15"></i>
</div>
<div class="text-small text-muted mb-1 text"></div>
</div>
<div class="row">
<div class="col-auto">
<div class="cta-3 text-alternate">84</div>
<div class="text-small text-muted mb-1">THIS WEEK</div>
</div>
<div class="col">
<div class="cta-3 text-alternate">792</div>
<div class="text-small text-muted mb-1">THIS MONTH</div>
</div>
</div>
</div>
<div class="col-12 col-sm sh-17">
<canvas id="largeLineChart2"></canvas>
</div>
</div>
</div>
</div>
</div>

{{-- start --}}

<div class="mb-5" style="display: none;">
<h2 class="small-title">Latest Admissions</h2>
<div class="card h-100-card">
<div class="card-body">
<div class="scroll-out">
<div class="scroll-by-count mb-n2" data-childselector=".scroll-item" data-count="5">
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-6.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Joisse Kaycee</div>
<div class="text-small text-muted">UX Designer</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-7.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Zayn Hartley</div>
<div class="text-small text-muted">Frontend Developer</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-8.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Esperanza Lodge</div>
<div class="text-small text-muted">Project Manager</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-2.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Kathryn Mengel</div>
<div class="text-small text-muted">Executive Team Leader</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-5.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Blaine Cottrell</div>
<div class="text-small text-muted">Accounting</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-8.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Cherish Kerr</div>
<div class="text-small text-muted">Development Lead</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mb-2 scroll-item">
<div class="row g-0 sh-10 sh-sm-7">
<div class="col-auto">
<img src="dash/img/profile/profile-3.jpg" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
</div>
<div class="col">
<div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
<div class="d-flex flex-column mb-2 mb-sm-0">
<div>Olli Hawkins</div>
<div class="text-small text-muted">Client Relations Lead</div>
</div>
<div class="d-flex">
<button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
<button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
<i data-cs-icon="more-vertical"></i>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

{{-- end --}}

</div>
<div class="col-12 col-lg-4">
<h2 class="small-title">Today's Activities</h2>
<div class="card w-100 sh-50 mb-5" style="background: #EFF0F2;">
{{-- <img src="dash/img/banner/cta-square-4.jpg" class="card-img h-100" alt="card image"> --}}
<div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
<div class="d-flex flex-column h-100 justify-content-between align-items-start">
<div>
<div class="cta-1 text-primary mb-1">124</div>
<div class="lh-1-25 mb-0">Remandees Admitted</div>
</div>
<div>
<div class="cta-1 text-primary mb-1">64</div>
<div class="lh-1-25 mb-0">Remandees Discharged</div>
</div>
<div>
<div class="cta-1 text-primary mb-1">34</div>
<div class="lh-1-25 mb-0">Convicts Admitted</div>
</div>
<div>
<div class="cta-1 text-primary mb-1">23</div>
<div class="lh-1-25 mb-0">Convicts Discharged</div>
</div>
</div>
</div>
</div>
<h2 class="small-title">Today's Court Mentions & Hearings</h2>
<div class="card mb-5 h-auto sh-lg-23">
<div class="card-body h-100">
<div class="row g-0 h-100">
<div class="col-12 col-sm-6 h-100 d-flex justify-content-between flex-column">
<a href="#" class="body-link d-flex mb-2">Kibera (2)</a>
<a href="#" class="body-link d-flex mb-2">Ngong (6)</a>
<a href="#" class="body-link d-flex mb-2">Gatundu (4)</a>

</div>
<div class="col-12 col-sm-6 h-100 d-flex justify-content-between flex-column">
<a href="#" class="body-link d-flex mb-2">Kiambu (2)</a>
<a href="#" class="body-link d-flex mb-2">Milimani (6)</a>
<a href="#" class="body-link d-flex mb-2">Makadara (2)</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</main>
@include('dash.footer')
</div>
<div style="display: none;" class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="settings" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable full" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"> Settings</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" style="display: none;">
<div class="scroll-track-visible">
<div class="mb-5" id="color">
<label class="mb-3 d-inline-block form-label">Color</label>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="blue-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT BLUE</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="blue-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK BLUE</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="red-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT RED</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="red-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK RED</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="green-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT GREEN</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="green-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK GREEN</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="purple-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT PURPLE</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="purple-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK PURPLE</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="pink-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT PINK</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="pink-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK PINK</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="navcolor">
<label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DEFAULT</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-secondary figure-light top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-muted figure-dark top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="placement">
<label class="mb-3 d-inline-block form-label">Menu Placement</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal" data-parent="placement">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">HORIZONTAL</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="vertical" data-parent="placement">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary left"></div>
<div class="figure figure-secondary right"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">VERTICAL</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="behaviour">
<label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary left large"></div>
<div class="figure figure-secondary right small"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">PINNED</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary left"></div>
<div class="figure figure-secondary right"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">UNPINNED</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="layout">
<label class="mb-3 d-inline-block form-label">Layout</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">FLUID</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom small"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">BOXED</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="radius">
<label class="mb-3 d-inline-block form-label">Radius</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
<div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">ROUNDED</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
<div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">STANDARD</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
<div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">FLAT</span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn settings-button btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
<i data-cs-icon="paint-roller" class="position-relative"></i>
</button>
<div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header border-0 p-0">
<button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body ps-5 pe-5 pb-0 border-0">
<input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off">
</div>
<div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
<span class="text-alternate d-inline-block m-0 me-3">
<i data-cs-icon="arrow-bottom" data-cs-size="15" class="text-alternate align-middle me-1"></i>
<span class="align-middle text-medium">Navigate</span>
</span>
<span class="text-alternate d-inline-block m-0 me-3">
<i data-cs-icon="arrow-bottom-left" data-cs-size="15" class="text-alternate align-middle me-1"></i>
<span class="align-middle text-medium">Select</span>
</span>
</div>
</div>
</div>
</div>
<script src="dash/js/vendor/jquery-3.5.1.min.js"></script>
<script src="dash/js/vendor/bootstrap.bundle.min.js"></script>
<script src="dash/js/vendor/OverlayScrollbars.min.js"></script>
<script src="dash/js/vendor/autoComplete.min.js"></script>
<script src="dash/js/vendor/clamp.min.js"></script>
<script src="dash/js/vendor/Chart.bundle.min.js"></script>
<script src="dash/js/vendor/chartjs-plugin-datalabels.js"></script>
<script src="dash/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
<script src="dash/js/vendor/glide.min.js"></script>
<script src="dash/js/vendor/intro.min.js"></script>
<script src="dash/js/vendor/select2.full.min.js"></script>
<script src="dash/js/vendor/plyr.min.js"></script>
<script src="dash/font/CS-Line/csicons.min.js"></script>
<script src="dash/js/base/helpers.js"></script>
<script src="dash/js/base/globals.js"></script>
<script src="dash/js/base/nav.js"></script>
<script src="dash/js/base/search.js"></script>
<script src="dash/js/base/settings.js"></script>
<script src="dash/js/base/init.js"></script>
<script src="dash/js/cs/glide.custom.js"></script>
<script src="dash/js/cs/charts.extend.js"></script>
<script src="dash/js/pages/dashboard.default.js"></script>
<script src="dash/js/common.js"></script>
<script src="dash/js/scripts.js"></script>
</body>

</html>
