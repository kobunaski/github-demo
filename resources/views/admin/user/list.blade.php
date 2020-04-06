@extends('admin.layout.index')

@section('content')
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
  @if(session('notificate'))
      <div class="alert alert-success">
          {{session('notificate')}}
      </div>
  @endif
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                              <h1>Users list</h1>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th >Image</th>
                                        <th >Name</th>
                                        <th >Email</th>
                                        <th >Phone</th>
                                        <th >Address</th>
                                        <th >Date of Birth</th>
                                        <th >ID Role</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $us)
                                    <tr>

                                        <td><img width="50px" height="50px" src="admin_asset/upload/image/user/{{$us->image}}" alt="" /></td>
                                        <td>{{$us->name}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>{{$us->phone}}</td>
                                        <td>{{$us->address}}</td>
                                        <td>{{$us->dateOfBirth}}</td>
                                        <td>{{$us->idRole}}</td>
                                        <td>
                                          <div class="product-buttons">
                                              <a   href="admin/user/edit/{{$us->id}}">Edit</a>
                                              <a>|</a>
                                              <a   href="admin/user/delete/{{$us->id}}">Delete</a>
                                          </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->


@endsection
