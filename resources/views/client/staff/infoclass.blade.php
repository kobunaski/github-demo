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
                    <h3 class="section-title">Class information</h3>
                    <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
                </div>
                <div class="card">
                    <h5 class="card-header">Class:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="input-select">Select a class</label>
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
                    <h5 class="card-header">Your class:</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Clas name</th>
                                    <th>Tutors</th>
                                    <th>Slot</th>
                                    <th>Address</th>
                                    <th>Time Start</th>
                                    <th>Time End</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>B</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Action</th>
                                    <th>Date</th>
                                    <th>Slot</th>
                                    <th>Room</th>
                                    <th>Time Start</th>
                                    <th>Time End</th>
                                </tr>
                                </tfoot>
                            </table>
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
