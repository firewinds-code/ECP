<body class="hold-transition sidebar-mini sidebar-collapse text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user mr-2"></i>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="changepassword()" data-toggle="modal"
                            data-target="#changepassword">
                            <i class="fa fa-user-shield mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit(); "
                                class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <aside class="main-sidebar sidebar-dark-info  elevation-4">
                <a href="#" class="brand-link">
                    <span class="brand-text font-weight-light">ELECTION COMMISSION</span>
                </a>
                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('images/EC.png') }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                    </div>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                        </ul>
                        @if (Auth::user()->usertype == '1')
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <li class="nav-item">
                                    <a href="{{ route('manageuser.list') }}" class="nav-link ">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>Manage User</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <li class="nav-item">
                                    <a href="{{ route('uploaddata.excel') }}" class="nav-link">
                                        <i class="nav-icon fas fa-upload"></i>
                                        <p>Upload Data</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <li class="nav-item">
                                    <a href="{{ route('report') }}" class="nav-link">
                                        <i class="nav-icon fas fa-file"></i>
                                        <p>Report</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="{{ route('job-card-report') }}" class="nav-link">
                                    <i class="nav-icon fas fa-search"></i>
                                    <p>Search Data</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        </form>
        <div class="modal fade" id="changepassword">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title">Change Password</h4>
                        <button type="button" style="color: #ffffff" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="card-body" id="changepasswordbody">
                    </div>
                </div>
            </div>
        </div>
        <script>
            function changepassword(id) {
                $.ajax({
                    type: "get",
                    url: "{{ route('changepassword') }}",
                    data: {
                        "id": id
                    },
                    success: function(data) {
                        console.log(data.url);
                        $("#changepassword").modal('show');
                        $('#changepasswordbody').html(data.html);
                    }
                });
            };
        </script>
