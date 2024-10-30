@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Kanban Board</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Kanban Board</li>
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

                        <div class="row">
                            <div class="col-xl-12">
                               <div class="card bg-transparent shadow-none">
                                    <div class="task-board">
                                        <div class="task-list">
                                            <div class="card shadow-none h-100">
                                                <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <h4 class="card-title mb-0">Todo <span class="font-size-14 text-muted">(03)</span></h4>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div> <!-- end dropdown -->
                                                    </div>
                                                </div><!-- end card-header -->
                
                                                <div>
                                                    <div class="text-center p-3">
                                                        <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                                    </div>
            
                                                    <div data-simplebar class="tasklist-content p-3">
                                                        <div id="todo-task" class="tasks">
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-todoCheck1">
                                                                                <label class="form-check-label text-primary" for="task-todoCheck1">DS-045</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-success">Testing</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Dashboard UI</h5>
                                                                    <p class="text-muted mb-0">Vitae turpis scelerisque scelerisque venenatis lorem quis enim congue aliquet.</p>
                    
                                                                    
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            E
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 5 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 1 File</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                        
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex mb-3 align-items-start">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-todoCheck2">
                                                                                <label class="form-check-label text-primary" for="task-todoCheck2">DS-046</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge bg-info">Development</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Calendar App Page</h5>
                                                                    <p class="text-muted mb-0">Pellentesque aliquet eros viverra turpis tellus bibendum posuere orci
                                                                         convallis est.</p>
                    
                                                                </div><!-- end cardbody -->
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                                    <div class="avatar">
                                                                                        <img src="assets/images/users/user-9.jpg" alt="" class="img-fluid rounded-circle">
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lynn Hackett">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-info">
                                                                                            E
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 41 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 21 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                        
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-todoCheck3">
                                                                                <label class="form-check-label text-primary" for="task-todoCheck3">DS-047</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-danger">Design</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Authentication Page Design</h5>
                                                                    <p class="text-muted mb-0">Etiam orci aliquam feugiat velit aenean urna volutpat felis tincidunt ultricies.</p>
                    
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-danger">
                                                                                            E
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 24 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 32 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                                                        </div>
                                                    </div>
                
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tasklist -->
            
                                        <div class="task-list">
                                            <div class="card shadow-none h-100">
                                                <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <h4 class="card-title mb-0">In Progress <span class="font-size-14 text-muted">(01)</span></h4>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div> <!-- end dropdown -->
                                                    </div>
                                                </div>
                
                                                <div>
                                                    <div class="text-center p-3">
                                                        <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                                    </div>
            
                                                    <div data-simplebar class="tasklist-content p-3">
                                                        <div id="inprogress-task" class="tasks">
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-inprogressCheck1">
                                                                                <label class="form-check-label text-primary" for="task-inprogressCheck1">DS-044</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-warning">UX Design</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Component Pages</h5>
                                                                    <p class="text-muted mb-0">Etiam orci aliquam feugiat velit aenean urna volutpat felis tincidunt ultricies.</p>
            
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                                    <div class="avatar">
                                                                                        <img src="assets/images/users/user-4.jpg" alt="" class="img-fluid rounded-circle">
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 24 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 23 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end card-footer -->
                                                            </div><!-- end task card -->
                                                        </div>
                                                    </div><!-- end data - simplebar -->
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end tasklist -->
            
                                        <div class="task-list">
                                            <div class="card shadow-none h-100">
                                                <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <h4 class="card-title mb-0">On Hold <span class="font-size-14 text-muted">(02)</span></h4>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div> <!-- end dropdown -->
                                                    </div>
                                                </div>
                
                                                <div>
                                                    <div class="text-center p-3">
                                                        <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                                    </div>
            
                                                    <div data-simplebar class="tasklist-content p-3">
                                                        <div id="hold-task" class="tasks">
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-completeCheck11">
                                                                                <label class="form-check-label text-primary" for="task-completeCheck11">DS-041</label>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-danger">Design</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Admin Layout Design</h5>
                                                                    <p class="text-muted mb-0">Aenean congue lacus ultricies purus quis fend nunc eget efficitur rutrum.</p>
                                                                
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                                    <div class="avatar">
                                                                                        <img src="assets/images/users/user-7.jpg" alt="" class="img-fluid rounded-circle">
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lynn Hackett">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-info">
                                                                                            L
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 14 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 52 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                        
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-completeCheck22">
                                                                                <label class="form-check-label text-primary" for="task-completeCheck22">DS-042</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-primary">Graphic Design</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Brand Logo Design</h5>
                                                                    <p class="text-muted mb-0">Mauris pharetra erat augue tincidunt auctor lorem congue vehicula euismod.</p>
            
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            E
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 24 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 23 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end tasklist -->
            
                                        <div class="task-list">
                                            <div class="card shadow-none h-100">
                                                <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <h4 class="card-title mb-0">Completed <span class="font-size-14 text-muted">(03)</span></h4>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div> <!-- end dropdown -->
                                                    </div>
                                                </div>
                
                                                <div>
                                                    <div class="text-center p-3">
                                                        <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                                    </div>
            
                                                    <div data-simplebar class="tasklist-content p-3">
                                                        <div id="completed-task" class="tasks">
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-completeCheck1">
                                                                                <label class="form-check-label text-primary" for="task-completeCheck1">DS-041</label>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
            
                                                                    <span class="badge bg-info">Design</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Admin Layout Design</h5>
                                                                    <p class="text-muted mb-0">Pellentesque aliquet eros viverra turpis tellus bibendum posuere orci
                                                                        convallis est.</p>
                                                                    
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                                    <div class="avatar">
                                                                                        <img src="assets/images/users/user-2.jpg" alt="" class="img-fluid rounded-circle">
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lynn Hackett">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-info">
                                                                                            L
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 43 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 32 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                        
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-completeCheck2">
                                                                                <label class="form-check-label text-primary" for="task-completeCheck2">DS-042</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-success">Testing</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">Brand Logo Design</h5>
                                                                    <p class="text-muted mb-0">Etiam orci aliquam feugiat velit aenean urna volutpat felis tincidunt ultricies.</p>
                    
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            E
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 12 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 32 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
            
                                                            <div class="card task-box">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-start mb-3">
                                                                        <div class="flex-grow-1">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="task-completeCheck33">
                                                                                <label class="form-check-label text-primary" for="task-completeCheck33">DS-024</label>
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                                </a>
                                    
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="#">View</a>
                                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                                    <a class="dropdown-item" href="#">Remove</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <span class="badge bg-warning">Design</span>
                                                                    <h5 class="font-size-16 mb-2 mt-2 pt-1">New Landing Pege</h5>
                                                                    <p class="text-muted mb-0">Etiam orci aliquam feugiat velit aenean urna volutpat felis tincidunt ultricies.</p>
                    
                                                                </div>
                                                                <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                                    <div class="avatar">
                                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                                            O
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 05 Comments</a>
                                                                            </li>
                                                                            <li class="list-inline-item ms-1">
                                                                                <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 43 Files</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end task card -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end tasklist -->
                                    </div> 
                               </div>
                            </div>
                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection
                @section('scripts')
        <!-- dragula plugins -->
        <script src="assets/libs/dragula/dragula.min.js"></script>

        <script src="assets/js/pages/kanbanboard.init.js"></script>

        <script src="assets/js/app.js"></script>
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
        </script>>
@endsection