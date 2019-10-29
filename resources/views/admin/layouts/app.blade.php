<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>IMDB Dashboard</title>
  <link href="{{ mix('css/dashboard.css') }}" rel="stylesheet" />
  <link href="{{ mix('css/plugins.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  @yield('style')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <b>
                    <img src="{{ asset('/backend/images/imdb-logo.jpeg') }}" alt="homepage" class="img-responsive" style="width: 100px"/>
                  </b>
                </a>
              </div>
            </nav>
        </header>
        <aside class="left-sidebar">
          <div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
              <div class="user-profile" style="background: url({{ asset('/backend/images/background/user-info.jpg') }}) no-repeat;">
                  <div class="profile-img"> <img src="http://themes-lab.com/make/admin/assets/global/images/avatars/avatar2_big@2x.png" alt="user" /> </div>
                  <div class="profile-text">
                    {{-- <a href="#">{{ Auth::user()->name }}</a> --}}
                  </div>
              </div>
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <li class="nav-small-cap">MENU</li>
                      <li>
                        <a class="waves-effect waves-dark" href="{{ url('admin/dashboard') }}">
                          <i class="fa fa-circle"></i><span class="hide-menu"> Dashboard </span>
                        </a>
                      </li>
                      <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                          <i class="fa fa-circle"></i><span class="hide-menu"> Content </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                          <li><a href="{{ url('admin/movies') }}">Movies</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="waves-effect waves-dark" href="{{ url('admin/setting') }}">
                          <i class="fa fa-circle"></i><span class="hide-menu"> Setting </span>
                        </a>
                      </li>
                      <li>
                        <a class="waves-effect waves-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="fa fa-circle"></i><span class="hide-menu"> Logout </span>
                        </a>
                      </li>
                  </ul>
              </nav>
          </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
              @yield('content')
            </div>
            <footer class="footer"> © {{ date('Y') }} IMDB</footer>
        </div>
        <div id="noty-holder"></div>
    </div>

    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!-- Core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ mix('js/dashboard.js') }}"></script>
    @yield('script')
    <script>
      $(document).ready(function() {
        $('.textarea_editor').wysihtml5();
      });

        $(function () {
            $('#myTable').DataTable();
            $(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
</body>
</html>
