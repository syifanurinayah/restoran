<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran </title>

    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
</head>
<body>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">  
            @include('admin/header') 
            @yield('content')
            @include('admin/sidebar')
        </div>

    <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
    <script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>


</body>
</html>