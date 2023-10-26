<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tes Programming</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/daterangepicker/daterangepicker.css">  
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('lte')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('lte')}}/dist/img/buku1.jpg" alt="AdminLTELogo" height="60" width="60">
        </div>
        
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a class="brand-link">
                <img src="{{ asset('lte')}}/dist/img/buku1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Tes Program</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/buku" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buku</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kategori" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pengarang" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengarang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        @yield('content')
        

        <footer class="main-footer">
            <strong>by: I Komang Yuda Muliawan</strong>
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>

    </div>
    <script src="{{ asset('lte')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="{{ asset('lte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/sparklines/sparkline.js"></script>
    <script src="{{ asset('lte')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('lte')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('lte')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('lte')}}/dist/js/adminlte.js"></script>
    <script src="{{ asset('lte')}}/dist/js/demo.js"></script>
    <script src="{{ asset('lte')}}/dist/js/pages/dashboard.js"></script>
    <script src="{{ asset('lte')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('lte')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
    $(function () {
    
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script>

    <script>
    $(function() {
        var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.swalDefaultInfo').click(function() {
        Toast.fire({
            icon: 'info',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.swalDefaultError').click(function() {
        Toast.fire({
            icon: 'error',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.swalDefaultWarning').click(function() {
        Toast.fire({
            icon: 'warning',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.swalDefaultQuestion').click(function() {
        Toast.fire({
            icon: 'question',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });

        $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });

        $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
            title: 'Toast Title',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'topLeft',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'bottomRight',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'bottomLeft',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
            title: 'Toast Title',
            autohide: true,
            delay: 750,
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
            title: 'Toast Title',
            fixed: false,
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            icon: 'fas fa-envelope fa-lg',
        })
        });
        $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            image: '../../dist/img/user3-128x128.jpg',
            imageAlt: 'User Picture',
        })
        });
        $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
            class: 'bg-info',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
            class: 'bg-warning',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
        $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
            class: 'bg-maroon',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
    });
    </script>

    <!-- Model Update Data Buku-->
    <script>
        $(document).ready(function () {
            $(document).on('click', '.editbtn', function(){
                var id = $(this).val();
                //alert(id);

                $('#editModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/edit-buku/"+id,
                    success: function (response) {
                        $('#judul').val(response.databuku.judul);
                        $('#kategori').val(response.databuku.id_kategori);
                        $('#tahun').val(response.databuku.tahun);
                        $('#pengarang').val(response.databuku.id_pengarang);
                        $('#id').val(response.databuku.id);
                    }
                });
            });
        });
    </script>

    <!-- Model Update Kategori-->
    <script>
        $(document).ready(function () {
            $(document).on('click', '.editbtndatacat', function(){
                var id_kategori = $(this).val();
                //alert(id);
                $('#editModalkategori').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/edit-kategori/"+id_kategori,
                    success: function (response) {
                        //kalau controllernya makek where, maka data jsonnnnya jadi array, tambahkan [0]
                        $('#kategori').val(response.datakategori[0].kategori);
                        $('#id_kategori').val(response.datakategori[0].id_kategori);
                        
                    }
                });
            });
        });
    </script>

    <!-- Model Update Pengarang-->
    <script>
        $(document).ready(function () {
            $(document).on('click', '.editbtndatap', function(){
                var id_pengarang = $(this).val();
                //alert(id);
                $('#editModalpengarang').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/edit-pengarang/"+id_pengarang,
                    success: function (response) {
                        //kalau controllernya makek where, maka data jsonnnnya jadi array, tambahkan [0]
                        $('#nama_pengarang').val(response.datapengarang[0].nama_pengarang);
                        $('#id_pengarang').val(response.datapengarang[0].id_pengarang);
                        
                    }
                });
            });
        });
    </script>

</body>

</html>
