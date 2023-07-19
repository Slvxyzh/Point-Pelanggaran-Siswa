<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}"/>

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css')}}"/>

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg" type="image/x-icon')}}"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png')}}"/></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu"> 
                        

                        <li class="sidebar-item  ">
                            <a href="/dasboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>                                                                            

                    <li class="sidebar-title">Table</li>                      

                    <li class="sidebar-item  ">
                        <a href="/dasboard/tablesiswa" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Siswa</span>
                        </a>
                    </li>                     

                    <li class="sidebar-item  ">
                        <a href="/dasboard/tableguru" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Guru</span>
                        </a>
                    </li>                                                                            
                               
                    {{-- <li class="sidebar-item  ">
                        <a href="application-checkout.html" class='sidebar-link'>
                            <i class="bi bi-basket-fill"></i>
                            <span>Checkout Page</span>
                        </a>
                    </li> --}}

                    {{-- <li class="sidebar-item  has-sub"> --}}

                        <a href="/dasboard/tablepelanggar" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Pelanggaran</span>
                        </a>

                        <li class="sidebar-item  ">
                            <a href="/dasboard/laporan" class='sidebar-link'>
                                {{-- <i class="bi bi-person-circle"></i> --}}
                                <span>Laporan</span>
                            </a>
                        </li> 
                        {{-- <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="auth-login.html">Login</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="auth-register.html">Register</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="auth-forgot-password.html">Forgot Password</a>
                            </li>
                        </ul> --}}
                    </li>               
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @yield('content')

</body>
</html>