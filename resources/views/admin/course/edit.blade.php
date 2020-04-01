@extends('admin.layout.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Role Management</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <h1>
                                            Course Edit
                                        </h1>
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            @if(count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    @foreach($errors -> all() as $err)
                                                        {{$err}}<br>
                                                    @endforeach
                                                </div>
                                            @endif
                                            @if(session('notificate'))
                                                <div class="alert alert-success">
                                                    {{session('notificate')}}
                                                </div>
                                            @endif
                                            <form action="admin/course/edit/{{$course -> id}}" method="POST" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="courseName" type="text" class="form-control" value="{{$course -> courseName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Confirm Edit</button>
                                                            <button type="reset" class="btn btn-primary waves-effect waves-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Message</h5>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>idUser</th>
                                                    <th>Content</th>
                                                    <th>Create at</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($course -> messagebox as $mess)
                                                        <tr>
                                                            <td>{{$mess -> id}}</td>
                                                            <td>{{$mess -> user -> name}}</td>
                                                            <td>{{$mess -> content}}</td>
                                                            <td>{{$mess -> created_at}}</td>
                                                            <td class="center" ><i class="fa fa-trash-o fa-fw"></i>
                                                                <a href="admin/messagebox/delete/{{$mess->id}}/{{$course->id}}">Delete</a></td>
                                                        </tr>
                                                @endforeach
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
                </div>
            </div>
        </div>
    </div>
@endsection
