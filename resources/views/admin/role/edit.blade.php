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
                                            Role Edit
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
                                            <form action="admin/role/edit/{{$role -> id}}" method="POST" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="roleName" type="text" class="form-control" value="{{$role -> roleName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Confirm Edit</button>
                                                            <a type="submit" href="admin/role/list" class="btn btn-primary waves-effect waves-light">cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
