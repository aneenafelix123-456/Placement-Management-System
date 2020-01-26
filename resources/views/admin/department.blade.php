@extends('admin.layout')

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
                            <h4 class="modal-title font-weight-bold">Department Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="" method="post" id="form">

                            <div class="modal-body">
                                @csrf
                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="department">Department Name</label>
                                    <input type="text" name="department_name" class="form-control" id="department" aria-describedby="emailHelp" placeholder="Enter department name" required>
                                    <small id="emailHelp" class="form-text text-muted">Please enter name as in Elive</small>
                                </div>



                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="hod">HoD Name</label>
                                    <input type="text" name="hod_name" class="form-control" id="hod" aria-describedby="emailHelp" placeholder="Enter HoD name" required>
                                </div>

                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="username">Username Name</label>
                                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                                </div>

                                <div class="row form-group col-md-12 m-b-20">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter password" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="loadDoc()" class="btn btn-rounded btn-success" data-dismiss="modal" aria-hidden="true">Save</button>
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
                            <h5 class="card-title float-left align-self-center ">Departments</h5>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">

                                <a data-toggle="modal" href="#" data-target=".assign-members" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Task</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="table-responsive">
                        <table class="table color-table primary-table">
                            <thead>
                                <tr>
                                    <th class="w-20"> </th>
                                    <th>Department Name</th>
                                    <th>Head of Department</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="table_body">
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 page-n">Show: <a href="#" class="active">10</a> <a href="#">20</a> <a href="#">50</a></div>
                        <div class="col-md-6 text-right page-n">Prev <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> ... <a href="#">10</a> <a href="#">11</a> <a href="#">12</a> <a href="#">Next</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function loadDoc() {

            var x = document.getElementById("form");
            var text = "";
            var i;
            for (i = 0; i < x.length; i++) {
                text += x.elements[i].name + "=" + x.elements[i].value + "&";
            }
            document.getElementById("table_body").innerHTML = text;
        

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("table_body").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "/admin/department", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(text);
    }
</script>
@endsection