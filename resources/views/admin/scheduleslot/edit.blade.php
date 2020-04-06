@extends('admin.layout.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Schedule Management</a></li>
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
                                            <form action="admin/scheduleslot/edit/{{$scheduleslot->id}}" method="POST" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="idSlot" class="form-control">
                                                                <option value="none" selected="" disabled="">Select Role</option>
                                                                @foreach($slot as $slt)
                                                                    @if($slt -> id == $scheduleslot -> idSlot)
                                                                        <option value="{{$slt -> id}}" selected>{{$slt -> id}}</option>
                                                                    @else
                                                                        <option value={{$slt -> id}}>{{$slt -> id}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            <select name="idSchedule" class="form-control">
                                                                <option value="none" selected="" disabled="">Select Role</option>
                                                                @foreach($schedule as $sche)
                                                                    @if($sche -> id == $scheduleslot -> idSlot)
                                                                        <option value="{{$sche -> id}}" selected>{{$sche -> startTime}} > {{$sche -> endTime}}</option>
                                                                    @else
                                                                        <option value={{$sche -> id}}>{{$sche -> startTime}} > {{$sche -> endTime}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            <div class="form-group">
                                                                <label>Day: </label>
                                                                <input name="day" type="date" class="form-control" value="{{$scheduleslot-> day}}" >
                                                            </div>
                                                            <select name="idRoom" class="form-control">
                                                                <option value="none" selected="" disabled="">Select Role</option>
                                                                @foreach($room as $rm)
                                                                    @if($rm -> id == $scheduleslot -> idRoom)
                                                                        <option value="{{$rm -> id}}" selected>{{$rm -> id}}</option>
                                                                    @else
                                                                        <option value={{$rm -> id}}>{{$rm -> id}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            <select name="idCourse" class="form-control">
                                                                <option value="none" selected="" disabled="">Select Role</option>
                                                                @foreach($course as $cour)
                                                                    @if($cour -> id == $scheduleslot -> idCourse)
                                                                        <option value="{{$cour -> id}}" selected>{{$cour -> courseName}}</option>
                                                                    @else
                                                                        <option value={{$cour -> id}}>{{$cour -> courseName}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>
                                                                <a type="submit" href="admin/scheduleslot/list" class="btn btn-primary waves-effect waves-light">cancel</a>
                                                            </div>
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
