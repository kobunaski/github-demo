@extends('admin.layout.index')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <h2>
                            Subject Management
                        </h2>
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Basic Information</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
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
                                                <form action="admin/subject/edit/{{$subject -> id}}" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="nameSubject" type="text" class="form-control" placeholder="Full Name" value="{{$subject -> nameSubject}}">
                                                            </div>
                                                            <div class="form-group">
                                                                @if($subject -> status == 1)
                                                                    <input name="status" type="checkbox" class="form-control" value="1" checked>
                                                                    @else
                                                                    <input name="status" type="checkbox" class="form-control" value="1">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    </div>
@endsection
