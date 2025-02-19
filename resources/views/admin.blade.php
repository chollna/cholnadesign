<x-app-layout>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://themewagon.github.io/darkpan/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{ asset('assets') }}/css/backend/css2.css" rel="stylesheet"> 
    
   
    <link href="{{ asset('assets') }}/css/backend/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/backend/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets') }}/css/backend/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/backend/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets') }}/css/backend/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets') }}/css/backend/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="https://themewagon.github.io/darkpan/index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets') }}/images/backend/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="https://themewagon.github.io/darkpan/index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="https://themewagon.github.io/darkpan/button.html" class="dropdown-item">Buttons</a>
                            <a href="https://themewagon.github.io/darkpan/typography.html" class="dropdown-item">Typography</a>
                            <a href="https://themewagon.github.io/darkpan/element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="https://themewagon.github.io/darkpan/widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Feature ARticle</a>
                    <a href="https://themewagon.github.io/darkpan/form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="https://themewagon.github.io/darkpan/table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="https://themewagon.github.io/darkpan/chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="https://themewagon.github.io/darkpan/signin.html" class="dropdown-item">Sign In</a>
                            <a href="https://themewagon.github.io/darkpan/signup.html" class="dropdown-item">Sign Up</a>
                            <a href="https://themewagon.github.io/darkpan/404.html" class="dropdown-item">404 Error</a>
                            <a href="https://themewagon.github.io/darkpan/blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
       
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete) with Image Upload</h2>
                    </div>
                    <div class="pull-right" style="margin-bottom:10px;">
                    <a class="btn btn-success" href="{{ url('create') }}"> Create New Product</a>
                    </div>
                </div>
            </div>
             
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
         
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>tittle</th>
                    <th>contenl</th>
                    <th>describ</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/{{ $product->image }}" width="100px"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    
                    <td>{{ $product->User['name']}}</td>
                    <td>
                        <form action="{{ route('destroy',$product->id) }}" method="POST">
              
                            <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>
               
                            <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>
              
                            @csrf
                            @method('DELETE')
                 
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
             
            {!! $products->links() !!}
        </div>
        </body>
        <!-- Content End -->
        @yield('cholna')
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets') }}/js/backend/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/chart.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/easing.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/moment-timezone.min.js"></script>
    <script src="{{ asset('assets') }}/js/backend/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets') }}/js/backend/main.js"></script>


</body></html>

</x-app-layout>