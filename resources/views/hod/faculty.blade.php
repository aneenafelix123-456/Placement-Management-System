@extends('hod.layout')

@section('body')

<div class="row">
    <div class="col-sm-12">
        <div class="page-titles">
            <div class="align-self-center text-right">
            </div>
        </div>
        <div class="tab-content">

            <div class="modal fade assign-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                <div class="modal-dialog modle-510">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold">Faculty Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="" method="post" id="form">

                            <div class="modal-body">
                                @csrf
                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="faculty_name">Faculty Name</label>
                                    <input type="text" name="faculty_name" class="form-control" id="faculty_name" aria-describedby="emailHelp" placeholder="Enter faculty name" required>
                                    
                                </div>
                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="username">Username Name</label>
                                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                                </div>

                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-rounded btn-success" value="Save">
                                <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-3 col-sm-3">
                            <h5 class="card-title float-left align-self-center ">Faculties</h5>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">

                                <a data-toggle="modal" href="#" data-target=".assign-members" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="table-responsive">
                        <table class="table color-table primary-table">
                            <thead>
                                <tr>

                                    <th>Faculty Id</th>
                                    <th>Faculty Name</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faculties as $faculty)
                                <tr>
                                    <td>{{$faculty['id']}}</td>
                                    <td>{{$faculty['name']}}</td>
                                    <td>{{$faculty['created_at']}}</td>
                                    <td><a href="/admin/department/{{$faculty['id']}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                        <a id="delete" onclick="verify()" href="/admin/department/delete/{{$faculty['id']}}"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
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
@endsection