@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Information Subject </h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Blogging goes here!</h3>
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

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Basic Form Elements</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Basic Form</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Subject name</label>
                                        <input id="inputText3" type="text" class="form-control">
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">File Input</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </p>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
