<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Management
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User Management</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#AddUsermodal">
                    Add User
                </button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tables" width="100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>Photo</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Barman</td>
                            <td>Admin</td>
                            <td><img src=" views/img/users/default/anonymous.png" class="img-thumbnail" width="40px" alt="">
                            </td>
                            <td>Administrator</td>
                            <td><button class="btn btn-success btn-xs">Activate</button></td>
                            <td>2022-12-11 12:50:21</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                                </div>
            </div>
            </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Barman</td>
                <td>Admin</td>
                <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
                <td>Administrator</td>
                <td><button class="btn btn-success btn-xs">Activate</button></td>
                <td>2022-12-11 12:50:21</td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                    </div>
        </div>
        </td>
        </tr>
        <tr>
            <td>1</td>
            <td>yakubu</td>
            <td>security</td>
            <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
            <td>Administrator</td>
            <td><button class="btn btn-success btn-xs">Activate</button></td>
            <td>2022-12-11 12:50:21</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
</div>
</td>
</tr>
<tr>
    <td>1</td>
    <td>james</td>
    <td>ceo</td>
    <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
    <td>Administrator</td>
    <td><button class="btn btn-success btn-xs">Activate</button></td>
    <td>2022-12-11 12:50:21</td>
    <td>
        <div class="btn-group">
            <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-times"></i></button>

        </div>
        </div>
    </td>
</tr>
<tr>
    <td>1</td>
    <td>Carman</td>
    <td>Admin</td>
    <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
    <td>Administrator</td>
    <td><button class="btn btn-success btn-xs">Activate</button></td>
    <td>2022-12-11 12:50:21</td>
    <td>
        <div class="btn-group">
            <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-times"></i></button>

        </div>
        </div>
    </td>
</tr>
</tbody>
</table>
</div>
<!-- /.box-body -->
<div class="box-footer">
    Footer
</div>
<!-- /.box-footer-->
</div>
</section>
</div>

<!-- 
    Add User modal Pop-up Box
 -->

<div id="AddUsermodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="POST" enctype="multipart/form-data" action="">
                <div class="modal-header" style="background:#3c8dbc;color:aliceblue;">
                    <button type="button" class="close" data-dismiss="modal">&times;
                    </button>
                    <h4 class="modal-title">Add Users</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="username" placeholder="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" name="newname" placeholder="login name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="newpassword" placeholder="login Password" required>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <select class="form-control input-lg" name="newProfile" id="">
                                        <option value="">Select Profile Role</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Employee">Employee</option>
                                        <option value="CEO">C.E.O</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="panel"> Submit Picture</div>
                                    <input type="file" id="newphoto" name="newphoto">
                                    <p class="help-block">Upload a picture maximum of 10MB.</p>
                                    <img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="100px" alt="">

                                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">close</button>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</div>
</div>
</div>