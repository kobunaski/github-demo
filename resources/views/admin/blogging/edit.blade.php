@extends('admin.layout.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Blogging Management</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
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
                                            <form action="admin/blogging/edit/{{$blogging->id}}" method="POST" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="content1" type="text" class="form-control" placeholder="Content upload" value="{{$blogging->content}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <select name="idSubject" class="form-control">
                                                                <option value="none" selected="" disabled="">Select Subject for homework upload</option>
                                                                @foreach($subject as $rl)
                                                                    @if($blogging -> idSubject == $rl -> id)
                                                                        <option value={{$rl -> id}} selected>{{$rl -> nameSubject}}</option>
                                                                    @endif
                                                                        <option value={{$rl -> id}}>{{$rl -> nameSubject}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Edit</button>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Reset</button>
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
