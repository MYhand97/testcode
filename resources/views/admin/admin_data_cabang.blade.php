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
                <h1 class="h3 mb-0 text-gray-800">Tabel Data Cabang</h1>
            </div>
            
            @include('partials.content_form_errors')

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addCabangModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Cabang</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Cabang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Cabang</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach($cabangs as $cabang){
                                    echo('
                                    <tr>
                                    <td>'. ($i+1) .'</td>
                                    <td>'. $cabang->nama_cabang .'</td>
                                    <td>
                                    <a href="" class="btn btn-warning" data-mynamacabang="'.$cabang->nama_cabang.'" data-mycabangid="'.$cabang->id.'" data-toggle="modal" data-target="#editCabangModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Update</span>
                                    </a>
                                    <a href="" class="btn btn-danger" data-mycabangid="'.$cabang->id.'" data-toggle="modal" data-target="#deleteCabangModal">
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

<!-- Add Cabang Modal-->
<div class="modal fade" id="addCabangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Cabang Baru</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/data-cabang/add" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            
            <div class="modal-body">
                @include('partials.cabangform')
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Buat</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            </div>
            
            </form>
            
        </div>
    </div>
</div>
<!-- End Add Cabang Modal-->

<!-- Edit Cabang Modal-->
<div class="modal fade" id="editCabangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Cabang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/data-cabang/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            
            <div class="modal-body">
                <input type="hidden" name="cabang_id" id="cabang_id" value="">
                @include('partials.cabangform')
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-warning" type="submit">Ubah</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            </div>
            
            </form>
            
        </div>
    </div>
</div>
<!-- End Edit Cabang Modal-->

<!-- Delete Cabang Modal-->
<div class="modal fade" id="deleteCabangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/data-cabang/delete" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            
            <div class="modal-body">
                <input type="hidden" name="cabang_id" id="cabang_id" value="">
                <p>
					Kamu yakin ingin menghapus data cabang ini?
				</p>
				
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-danger" type="submit">Hapus</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            </div>
            
            </form>
            
        </div>
    </div>
</div>
<!-- End Delete Cabang Modal-->


@endsection