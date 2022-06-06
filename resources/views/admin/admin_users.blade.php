@extends('admin.app')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('partials.admin_topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Users Table</h1>
            </div>
            
            @include('partials.content_form_errors')

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add New User</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach($users as $user){
                                    echo('
                                    <tr>
                                    <td>'. ($i+1) .'</td>
                                    <td>'. $user->name .'</td>
                                    <td>'. $user->email .'</td>
                                    <td>
                                    <a href="" class="btn btn-warning" data-myname="'.$user->name.'" data-myemail="'.$user->email.'" data-myuserid="'.$user->id.'" data-toggle="modal" data-target="#editUserModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Update</span>
                                    </a>
                                    <a href="" class="btn btn-danger" data-myuserid="'.$user->id.'" data-toggle="modal" data-target="#deleteUserModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                    </td>
                                    </tr>
                                    ');
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Main Content -->

        @include('partials.admin_footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Add User Modal-->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/users/add" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            
            <div class="modal-body">
                @include('partials.usersform')
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Create</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
            
            </form>
            
        </div>
    </div>
</div>
<!-- End Add User Modal-->

<!-- Edit User Modal-->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/users/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            
            <div class="modal-body">
                <input type="hidden" name="user_id" id="user_id" value="">
                @include('partials.usersform')
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-warning" type="submit">Update</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
            
            </form>
            
        </div>
    </div>
</div>
<!-- End Edit User Modal-->

<!-- Delete User Modal-->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/users/delete" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            
            <div class="modal-body">
                <input type="hidden" name="user_id" id="user_id" value="">
                <p>
					Are you sure you want to delete this account?
				</p>
				
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-danger" type="submit">Delete</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
            
            </form>
            
        </div>
    </div>
</div>
<!-- End Delete User Modal-->


@endsection