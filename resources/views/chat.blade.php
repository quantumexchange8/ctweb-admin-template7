@extends('Layouts.master')
@section('contents')

        <div class="page-content">
            <div class="container-fluid">
        
                <!-- start page title -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4>Chat</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Chat</a></li>
                                <li class="breadcrumb-item active">Chat</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1" data-colors='["--bs-primary"]'></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2" data-colors='["--bs-info"]'></div>
                                <div class="info">Item Sold 1,230</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                        <div class="d-lg-flex">
                            <div class="chat-leftsidebar card">
                                <div class="card-body">
                                    
                                   <div class="text-center bg-light rounded px-4 py-3">
                                            <div class="text-end">
                                                <div class="dropdown chat-noti-dropdown">
                                                    <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-cog"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Profile</a>
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Add Contact</a>
                                                        <a class="dropdown-item" href="#">Setting</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-user-status">
                                                <img src="assets/images/users/user-4.jpg" class="avatar-md rounded-circle" alt="">
                                                <div class="">
                                                    <div class="status"></div>
                                                </div>
                                            </div>
                                            <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-reset">James Williams </a></h5>
                                            <p class="text-muted mb-0">Available</p>
                                   </div>
                                </div>
        
                                <div class="p-3">
                                    <div class="search-box position-relative">
                                        <input type="text" class="form-control rounded border" placeholder="Search...">
                                        <i class="mdi mdi-magnify search-icon"></i>
                                    </div>
                                </div>
        
                                <div class="chat-leftsidebar-nav">
                                    <ul class="nav nav-pills nav-justified bg-light m-3 rounded">
                                        <li class="nav-item">
                                            <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                                <span class="d-none d-sm-block">Chat</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="bx bx-group font-size-20 d-sm-none"></i>
                                                <span class="d-none d-sm-block">Groups</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                                <span class="d-none d-sm-block">Contacts</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="chat">
                                            <div class="chat-message-list" data-simplebar>
                                                <div class="pt-3">
                                                    <div class="px-3">
                                                        <h5 class="font-size-14 mb-3">Recent</h5>
                                                    </div>
                                                    <ul class="list-unstyled chat-list p-3">
                                                        <li class="active">
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Jennie Sherlock</h5>
                                                                        <p class="text-white-50 mb-0 mt-1 text-truncate">Job: Senior UX Designer Design Team </p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-3">
                                                                        <span class="badge bg-danger rounded-pill">3</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                        <div class="avatar align-self-center">
                                                                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary font-size-16 font-size-18">
                                                                                S
                                                                            </span>
                                                                        </div>
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Stacie Dube</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Suspendisse ut diam ut eros bibendum finibus non  </p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Katie Olson</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Mauris eros odio, ornare  </p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <span class="badge bg-warning rounded-pill">4</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Marshall Wilson</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Integer sed nunc purus. Nulla id volutpat neque.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                        <div class="avatar align-self-center">
                                                                            <span class="avatar-title rounded-circle bg-primary-subtle        text-primary font-size-16 font-size-18">
                                                                                J
                                                                            </span>
                                                                        </div>
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">James Lee</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Cras leo dolor semper ut sollicitudin</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
        
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                        <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Ronald Tucker</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Job: Senior UX Designer Design Team </p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-3">
                                                                        <span class="badge bg-success rounded-pill">23</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
        
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                    <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                        <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Dennis Stewart</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Pellentesque iaculis consequat nibh id tempor </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Katie Olson</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Job: Senior UX Designer Design Team </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                    <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-15 mb-0">Marshall Wilson</h5>
                                                                        <p class="text-muted mb-0 mt-1 text-truncate">Job: Senior UX Designer Design Team </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="tab-pane" id="groups">
                                            <div class="chat-message-list" data-simplebar>
                                                <div class="pt-3">
                                                    <div class="px-3">
                                                        <h5 class="font-size-14 mb-3">Groups</h5>
                                                    </div>
                                                    <ul class="list-unstyled chat-list p-3 pt-0">
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 avatar me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary-subtle        text-primary font-size-16">
                                                                            G
                                                                        </span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-13 mb-0">General</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
        
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 avatar me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary-subtle        text-primary font-size-16">
                                                                            R
                                                                        </span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-13 mb-0">Reporting</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
        
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 avatar me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary-subtle        text-primary font-size-16">
                                                                            M
                                                                        </span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-13 mb-0">Meeting</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
        
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 avatar me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary-subtle        text-primary font-size-16">
                                                                            A
                                                                        </span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-13 mb-0">Project A</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
        
                                                        <li>
                                                            <a href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 avatar me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary-subtle        text-primary font-size-16">
                                                                            B
                                                                        </span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-13 mb-0">Project B</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="tab-pane" id="contacts">
                                            <div class="chat-message-list" data-simplebar>
                                                <div class="pt-3">
                                                    <div class="px-3">
                                                        <h5 class="font-size-14 mb-3">Contacts</h5>
                                                    </div>
        
                                                    <div class="p-3 pt-0">
                                                        <div>
                                                            <div class="px-3 contact-list">A</div>
        
                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Adam Miller</h5>
                                                                    </a>
                                                                </li>
            
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Alfonso Fisher</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
        
                                                        <div class="mt-4">
                                                            <div class="px-3 contact-list">B</div>
        
                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Bonnie Harney</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
        
                                                        <div class="mt-4">
                                                            <div class="px-3 contact-list">C</div>
        
                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Charles Brown</h5>
                                                                    </a>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Carmella Jones</h5>
                                                                    </a>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Carrie Williams</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
        
                                                        <div class="mt-4">
                                                            <div class="px-3 contact-list">D</div>
        
                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-13 mb-0">Dolores Minter</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <!-- end chat-leftsidebar -->
        
                            <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
                                <div class="card">
                                    <div class="p-3 px-lg-4 border-bottom">
                                        <div class="row">
                                            <div class="col-xl-4 col-7">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar me-3 d-sm-block d-none">
                                                        <img src="assets/images/users/user-2.jpg" alt="" class="img-fluid d-block avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-16 mb-1 text-truncate"><a href="#" class="text-reset">Jennie Sherlock</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Online</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-5">
                                                <ul class="list-inline user-chat-nav text-end mb-0">
                                                    <li class="list-inline-item">
                                                        <div class="dropdown">
                                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-search"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                                                <form class="px-2">
                                                                    <div>
                                                                        <input type="text" class="form-control border bg-light-subtle" placeholder="Search...">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
        
                                                    <li class="list-inline-item">
                                                        <div class="dropdown">
                                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Profile</a>
                                                                <a class="dropdown-item" href="#">Archive</a>
                                                                <a class="dropdown-item" href="#">Muted</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>                                                                                                                                                                                                                                                                                        
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="chat-conversation p-4" data-simplebar>
                                        <ul class="list-unstyled mb-0">
                                            <li class="chat-day-title"> 
                                                <span class="title">Thursday</span>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar" alt="">
                                                        <div class="flex-1 ms-3">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="font-size-16 conversation-name align-middle"> Jennie Sherlock </h5>
                                                                <span class="time fw-normal text-muted me-0 me-md-4">Thursday 10:02 AM</span>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0">Hi Jordan! </br>
                                                                        Feels like it's been a while! Home are you? Do you
                                                                        have ant time for the remainder of the week to help me with an ongoing project?</p>
                                                                    
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <div class="flex-1 me-3">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="time fw-normal text-muted ms-0 ms-md-4">Thursday 10:02 AM</span>
                                                                <h5 class="font-size-16 conversation-name align-middle"> James Williams </h5>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 text-start">Hi Martin, Glad to hear from you, I'm fine,what about you? and how it's going with the velocity website?
                                                                    </br>
                                                                    Of course I will help with this project
                                                                    </p>
                                                                   
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                    </div>
                                                    
                                                </div>
                                                
                                            </li>
        
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar" alt="">
                                                        <div class="flex-1 ms-3">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="font-size-16 conversation-name align-middle"> Jennie Sherlock </h5>
                                                                <span class="time fw-normal text-muted me-0 me-md-4">Thursday 10:04 AM</span>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                   <p class="mb-0">
                                                                        Super, I will get you the new brief for our own site over to you this evening, so you have time to read over I'm good thank you!
                                                                    </p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </li>
        
                                            <li class="chat-day-title"> 
                                                <span class="title">Today</span>
                                            </li>
        
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <div class="flex-1 me-3">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="time fw-normal text-muted ms-0 ms-md-4">Today 10:08 AM</span>
                                                                <h5 class="font-size-16 conversation-name align-middle"> James Williams </h5>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 text-start">
                                                                        Of course I can, just catching up with Steve on it and i'll write it out. Speak tomorrow! Let me know if you have any questions!
                                                                    </p>
        
                                                                    <p class="mb-0 text-start mt-2">
                                                                        img-1.jpg & img-2.jpg images for a New Projects
                                                                    </p>
        
                                                                    <ul class="list-inline message-img mt-2 mb-0">
                                                                        <li class="list-inline-item message-img-list">
                                                                            <a class="d-inline-block" href="">
                                                                                <img src="assets/images/small/img-1.jpg" alt="" class="rounded img-thumbnail">
                                                                            </a>                                                                  
                                                                        </li>
                
                                                                        <li class="list-inline-item message-img-list">
                                                                            <a class="d-inline-block" href="">
                                                                                <img src="assets/images/small/img-2.jpg" alt="" class="rounded img-thumbnail">
                                                                            </a>                                                                 
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                    </div>
                                                </div>
                                            </li>
        
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar" alt="">
                                                        <div class="flex-1 ms-3">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="font-size-16 conversation-name align-middle"> Jennie Sherlock </h5>
                                                                <span class="time fw-normal text-muted me-0 me-md-4">Today 10:04 AM</span>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0">
                                                                       Thank You very much, I am waiting Project.
                                                                    </p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <div class="flex-1 me-3">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="time fw-normal text-muted ms-0 ms-md-4">Today 10:08 AM</span>
                                                                <h5 class="font-size-16 conversation-name align-middle"> James Williams </h5>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 text-start">
                                                                        When someone thanks us, our automatic response is to say, “You’re welcome.” This is something that we have 
                                                                        learned from our parents and family and have been doing for a long time.
                                                                    </p>
                                                                </div>
                                                                
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Save</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
        
                                    <div class="p-3 border-top">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control border chat-input" placeholder="Enter Message...">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user chat -->
                        </div>
                        <!-- End d-lg-flex  -->

                    </div>
                    <!-- container-fluid -->
            </div>
                <!-- End Page-content -->
@endsection
@section('scripts')
<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>

<!-- email editor init -->
<script src="assets/js/pages/email-editor.init.js"></script>

<script>
    $('#header-chart-1').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
        type: 'bar',
        height: '32',
        barWidth: '5',
        barSpacing: '3',
        barColor: '#7A6FBE'
    });
    $('#header-chart-2').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
        type: 'bar',
        height: '32',
        barWidth: '5',
        barSpacing: '3',
        barColor: '#29bbe3'
    });
</script>
@endsection
                
               

    