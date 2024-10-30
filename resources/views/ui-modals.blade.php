@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Modals</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Modals</li>
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

                        <h4 class="card-title">Modals Examples</h4>
                        <p class="card-title-desc">Modals are streamlined, but flexible dialog prompts powered by JavaScript. They support a number of use cases from user notification to completely custom content and feature a handful of helpful subcomponents, sizes, and more.</p>

                        <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>One fine body&hellip;</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                        <div class="row">

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Standard modal</p>
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#myModal">Standard modal</button>
                                </div>

                                <!-- sample modal content -->
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Extra large modal</p>
                                    <!-- Extra Large modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra large
                                        modal</button>
                                </div>


                                <!--  Modal content for the above example -->
                                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Extra
                                                    large modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Large modal</p>
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Large
                                        modal</button>
                                </div>


                                <!--  Modal content for the above example -->
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Small modal</p>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Small
                                        modal</button>
                                </div>

                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Center modal</p>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Center
                                        modal</button>
                                </div>

                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">Center modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Scrollable modal</p>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalScrollable">Scrollable modal</button>
                                </div>

                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">
                                                    Scrollable Modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Static backdrop modal</p>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Static
                                        backdrop</button>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" role="dialog"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Static backdrop
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>I will not close if you click outside me. Don't even try to
                                                    press escape key.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="my-4 text-center">
                                    <p class="text-muted">Fullscreen modal</p>

                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreen">Fullscreen modal</button>
                                </div>

                                <!-- sample modal content -->
                                <div id="exampleModalFullscreen" class="modal fade" tabindex="-1"
                                    aria-labelledby="#exampleModalFullscreenLabel" style="display: none;"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="exampleModalFullscreenLabel">
                                                    Fullscreen Modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                    odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                    risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                    rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                        </div> <!-- end row -->
                        <!-- end row -->
                    </div>
                </div>
            </div>
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