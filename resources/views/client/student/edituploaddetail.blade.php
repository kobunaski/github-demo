@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
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
        <form action="client/student/edit/detail/{{$uploaddoc -> id}}" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="card">
                <h5 class="card-header">Document upload for subject: {{$subName}}</h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            {{--<img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image">--}}
                            <div class="media-body">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input name="link" type="text" class="form-control"
                                               placeholder="Google Drive Link" value="{{$uploaddoc -> link}}">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">edit</button>
                        <a href="client/student/profile" class="btn btn-secondary waves-effect waves-light">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
