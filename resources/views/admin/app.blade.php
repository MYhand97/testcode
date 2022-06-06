<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Test Web - {{$title}}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/auth-logo.png')}}">

    <!-- Custom fonts for this template-->
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.admin_sidebar')

        @yield('content')

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="/logout">Logout</a>    
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        
        <script src="{{asset('jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        
        <script>
        $('#editUserModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var name = button.data('myname')
            var email = button.data('myemail')
            var role = button.data('myrole')
            var userid = button.data('myuserid')
            var modal = $(this)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #role').val(role);
            modal.find('.modal-body #user_id').val(userid);
        })
        $('#deleteUserModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var userid = button.data('myuserid')
            var modal = $(this)
            modal.find('.modal-body #user_id').val(userid);
        })
        $('#editCabangModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var cabangid = button.data('mycabangid')
            var nama_cabang = button.data('mynamacabang')
            var modal = $(this)
            modal.find('.modal-body #cabang_id').val(cabangid);
            modal.find('.modal-body #nama_cabang').val(nama_cabang);
        })
        $('#deleteCabangModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var cabangid = button.data('mycabangid')
            var modal = $(this)
            modal.find('.modal-body #cabang_id').val(cabangid);
        })
        </script>

</body>

</html>