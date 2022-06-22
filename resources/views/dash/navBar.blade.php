<div id="nav" class="nav-container d-flex">
<div class="nav-content d-flex">
<div class="logo position-relative">
<a href="Dashboards.Default.html">
<div class="imng">
	<img src="dash/img/logo.png" alt="logo">
	{{-- <span class="text-white" style="font-size: 30px; font-family: Georgia;">PMS</span> --}}
</div>
</a>
</div>

<div class="user-container d-flex">
<a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="profile" alt="profile" src="dash/img/profile/user.jpg">
<div class="name">Site Admin</div>
</a>
<div class="dropdown-menu dropdown-menu-end user-menu wide">

<div class="row mb-1 ms-0 me-0">

<div class="col-6 ps-1 pe-1">
<ul class="list-unstyled">
<li>
<a href="#">
<i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Help</span>
</a>
</li>
<li>
<a href="#">
<i data-cs-icon="document-full" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Docs</span>
</a>
</li>
</ul>
</div>
<div class="col-6 pe-1 ps-1">
<ul class="list-unstyled">
<li>
<a href="#">
<i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Settings</span>
</a>
</li>
<li>
<a href="login">
<i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Logout</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<ul class="list-unstyled list-inline text-center menu-icons">
<li class="list-inline-item">
<a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
<i data-cs-icon="search" data-cs-size="18"></i>
</a>
</li>
<li style="display: none;" class="list-inline-item">
<a href="#" id="pinButton" class="pin-button">
<i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
<i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
</a>
</li>
<li style="display: none;" class="list-inline-item">
<a href="#" id="colorButton">
<i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
<i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
</a>
</li>
<li style="display: none;" class="list-inline-item">
<a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
<div class="position-relative d-inline-flex">
<i data-cs-icon="bell" data-cs-size="18"></i>
<span class="position-absolute notification-dot rounded-xl"></span>
</div>
</a>
<div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
<div class="scroll">
<ul class="list-unstyled border-last-none">
<li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
<img src="dash/img/profile/profile-1.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
<div class="align-self-center">
<a href="#">Joisse Kaycee just sent a new comment!</a>
</div>
</li>
<li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
<img src="dash/img/profile/profile-2.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
<div class="align-self-center">
<a href="#">New order received! It is total $147,20.</a>
</div>
</li>
<li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
<img src="dash/img/profile/profile-3.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
<div class="align-self-center">
<a href="#">3 items just added to wish list by a user!</a>
</div>
</li>
<li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
<img src="dash/img/profile/profile-6.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
<div class="align-self-center">
<a href="#">Kirby Peters just sent a new message!</a>
</div>
</li>
</ul>
</div>
</div>
</li>
</ul>
<div class="menu-container flex-grow-1">
<ul id="menu" class="menu">
<li>
<a href="#" data-href="Dashboards.html">
<i data-cs-icon="home" class="icon" data-cs-size="18"></i>
<span class="label">Dashboard</span>
</a>

</li>
<li>
<a href="#apps" data-href="#">
<i data-cs-icon="user" class="icon" data-cs-size="18"></i>
<span class="label">Inmates</span>
</a>
<ul id="apps">
<li>
<a href="#">
<span class="label">Admission</span>
</a>
</li>
<li>
<a href="#">
<span class="label">Discharge</span>
</a>
</li>

</ul>
</li>

<li>
<a href="#users" data-href="#">
<i data-cs-icon="user" class="icon" data-cs-size="18"></i>
<span class="label">Users</span>
</a>
<ul id="users">
<li>
<a href="#">
<span class="label">Manage Users</span>
</a>
</li>


</ul>
</li>

<li>
<a href="#facility" data-href="#">
<i data-cs-icon="home" class="icon" data-cs-size="18"></i>
<span class="label">Facilities</span>
</a>
<ul id="facility">
<li>
<a href="#">
<span class="label">Manage Facilities</span>
</a>
</li>


</ul>
</li>

</ul>
</div>
<div class="mobile-buttons-container">
<a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
<i data-cs-icon="menu-dropdown"></i>
</a>
<div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
<a href="#" id="mobileMenuButton" class="menu-button">
<i data-cs-icon="menu"></i>
</a>
</div>
</div>
<div class="nav-shadow"></div>
</div>