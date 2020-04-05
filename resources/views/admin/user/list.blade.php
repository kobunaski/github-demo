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
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Image</th>
                                        <th data-field="email" data-editable="true">Name</th>
                                        <th data-field="phone" data-editable="true">Email</th>
                                        <th data-field="complete">Phone</th>
                                        <th data-field="task" data-editable="true">Address</th>
                                        <th data-field="date" data-editable="true">Date of Birth</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Web Development</td>
                                        <td>admin@uttara.com</td>
                                        <td>+8801962067309</td>
                                        <td class="datatable-ct"><span class="pie">1/6</span>
                                        </td>
                                        <td>10%</td>
                                        <td>Jul 14, 2017</td>
                                        <td>
                                          <div class="product-buttons">
                                              <a type="button" class="btn btn-custon-rounded-three btn-primary" href="#">Read More</a>
                                              <a type="button" class="btn btn-custon-rounded-three btn-danger" href="#">Delete</a>
                                          </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>fox@itpark.com</td>
                                        <td>+8801762067304</td>
                                        <td class="datatable-ct"><span class="pie">230/360</span>
                                        </td>
                                        <td>70%</td>
                                        <td>fab 2, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
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
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            @if(session('notificate'))
                <div class="alert alert-success">
                    {{session('notificate')}}
                </div>
            @endif
            <div class="row">
                @foreach($user as $us)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="student-inner-std res-mg-b-30">
                        <div class="student-img">
                            <img width="400px" height="50px" src="admin_asset/upload/image/user/{{$us->image}}" alt="" />
                        </div>
                        <div class="student-dtl">
                            <h2>{{$us->name}}</h2>
                            <p ><b>Email:</b> {{$us->email}}</p>
                            <p ><b>Phone:</b> {{$us->phone}}</p>
                            <p ><b>Address:</b> {{$us->address}}</p>
                            <p ><b>Date of Birth:</b> {{$us->dateOfBirth}}</p>
                        </div>
                        <div class="product-buttons">
                            <a type="button" class="button-default cart-btn" href="admin/user/edit/{{$us->id}}">Read More</a>
                            <a type="button" class="button-default cart-btn" href="admin/user/delete/{{$us->id}}">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
