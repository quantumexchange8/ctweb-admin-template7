@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Timeline</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Timeline</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <section id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block timeline-right">
                                <div class="cd-timeline-img bg-success">
                                    <i class="mdi mdi-adjust"></i>
                                </div>
                                <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Timeline Event One</h3>
                                    <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora
                                        laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <span class="cd-date">May 23</span>
                                </div>
                                <!-- cd-timeline-content -->
                            </div>
                            <!-- cd-timeline-block -->

                            <div class="cd-timeline-block timeline-left">
                                <div class="cd-timeline-img bg-danger">
                                    <i class="mdi mdi-adjust"></i>
                                </div>
                                <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Timeline Event Two</h3>
                                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora
                                        laudantium</p>
                                    <button type="button"
                                        class="btn btn-primary btn-rounded waves-effect waves-light mt-1">See more
                                        detail</button>

                                    <span class="cd-date me-2">May 30</span>
                                </div>
                                <!-- cd-timeline-content -->
                            </div>
                            <!-- cd-timeline-block -->

                            <div class="cd-timeline-block timeline-right">
                                <div class="cd-timeline-img bg-info">
                                    <i class="mdi mdi-adjust"></i>
                                </div>
                                <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Timeline Event Three</h3>
                                    <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Excepturi, obcaecati, quisquam id molestias eaque error assumenda delectus.
                                        Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident
                                        pariatur temporibus quia eos repellat ... <a href="#" class="text-primary">Read
                                            more</a></p>
                                    <span class="cd-date">Jun 05</span>
                                </div>
                                <!-- cd-timeline-content -->
                            </div>
                            <!-- cd-timeline-block -->

                            <div class="cd-timeline-block timeline-left">
                                <div class="cd-timeline-img bg-pink">
                                    <i class="mdi mdi-adjust"></i>
                                </div>
                                <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Timeline Event Four</h3>
                                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Iusto, optio, dolorum provident rerum aut.</p>
                                        <div class="d-flex flex-wrap gap-3">
                                            <img src="assets/images/small/img-1.jpg" alt="" class="rounded" width="120">
                                            <img src="assets/images/small/img-2.jpg" alt="" class="rounded" width="120">
                                        </div>
                                    <span class="cd-date">Jun 14</span>
                                </div>
                                <!-- cd-timeline-content -->
                            </div>
                            <!-- cd-timeline-block -->

                            <div class="cd-timeline-block timeline-right">
                                <div class="cd-timeline-img bg-warning">
                                    <i class="mdi mdi-adjust"></i>
                                </div>
                                <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Timeline Event Five</h3>
                                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Iusto, optio, dolorum provident rerum.</p>
                                    <button type="button"
                                        class="btn btn-primary btn-rounded waves-effect waves-light">See more
                                        detail</button>
                                    <span class="cd-date me-2">Jun 18</span>
                                </div>
                                <!-- cd-timeline-content -->
                            </div>
                            <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">

                                <div class="cd-timeline-img bg-primary d-xl-none">
                                    <i class="mdi mdi-adjust"></i>
                                </div>
                                <!-- cd-timeline-img -->
                                <div class="cd-timeline-content">
                                    <h3>Timeline Event End</h3>
                                    <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus
                                        cupiditate error assumenda delectus odit similique earum voluptatem doloremque
                                        dolorem ipsam quae rerum quis. Deserunt corporis vero ipsum nisi eius odio natus
                                        ullam provident pariatur temporibus quia eos repellat consequuntur.</p>
                                    <span class="cd-date">Jun 30</span>
                                </div>
                                <!-- cd-timeline-content -->
                            </div>
                            <!-- cd-timeline-block -->
                        </section>
                        <!-- cd-timeline -->

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
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