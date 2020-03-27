@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <!-- select options  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="select">
                    <h3 class="section-title">Allocate Tutors and Students</h3>
                    <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
                </div>
                <div class="card">
                    <h5 class="card-header">Class:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="input-select">Example Select</label>
                                <select class="form-control" id="input-select">
                                    <option>Choose Example</option>
                                    <option>Choose Example</option>
                                    <option>Choose Example</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <h5 class="card-header">Tutor:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="input-select">Example Select</label>
                                <select class="form-control" id="input-select">
                                    <option>Choose Example</option>
                                    <option>Choose Example</option>
                                    <option>Choose Example</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <h5 class="card-header">Subject:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="input-select">Example Select</label>
                                <select class="form-control" id="input-select">
                                    <option>Choose Example</option>
                                    <option>Choose Example</option>
                                    <option>Choose Example</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end select options  -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Students</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Check</span>
                                        </label></td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                </tr>

                                </tfoot>
                            </table>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection
