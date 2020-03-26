@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">News Objects</h2>
                    <div class="page-breadcrumb">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block">
                    <h3 class="section-title">Bootstrap Media</h3>
                    <p>The <a href="http://www.stubbornella.org/content/2010/06/25/the-media-object-saves-hundreds-of-lines-of-code/" target="_blank">media object</a> helps build complex and repetitive components where some media is positioned alongside content that doesn’t wrap around said media. Plus, it does this with only two required classes thanks to flexbox.</p>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- basic media -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Basic Example of Media</h5>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 user-avatar-lg rounded" src="../assets/images/avatar-1.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Media heading</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic media -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- nesting media -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Nesting Media</h5>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 user-avatar-lg rounded" src="../assets/images/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                <div class="media mt-3">
                                    <a class="pr-3" href="#">
                                        <img class="mr-2 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image" ></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Top-aligned media</h5>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 user-avatar-lg rounded" src="../assets/images/avatar-4.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Top aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Donec sed odio dm sociis natoque penat lorem ippum dolor sait maettempus viverra turpis. Fusce condimentum nuncac nisi dis parturient montes, nascetur ridiculus mus.</p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante solliciturus ondimentum nunc ac sit ametm nisi vulputate frinue felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end nesting media -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- center aligned media -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Center-aligned media</h5>
                    <div class="card-body">
                        <div class="media">
                            <img class="align-self-center user-avatar-lg mr-3 rounded" src="../assets/images/avatar-5.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Center-aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end center aligned media -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- bootom aligne media -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Bottom-aligned media</h5>
                    <div class="card-body">
                        <div class="media">
                            <img class="align-self-end mr-3 user-avatar-lg rounded" src="../assets/images/avatar-4.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Bottom-aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end bootom aligne media -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- order -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Order</h5>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                            <img class="mr-3 user-avatar-lg rounded" src="../assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end order -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- media list -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Media List</h5>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="media my-4">
                                <img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="media">
                                <img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end media list -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top" src="../assets/images/card-img.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Subject name</h3>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../assets/images/card-img.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Subject name</h3>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../assets/images/card-img.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Subject name</h3>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../assets/images/card-img.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Subject name</h3>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../assets/images/card-img.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Subject name</h3>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
