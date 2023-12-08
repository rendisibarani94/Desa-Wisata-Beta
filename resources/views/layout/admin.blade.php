<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul_tab')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    @yield('additional_style')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="{{ route('admin') }}">Admin</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            Tambah Akomodasi
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><b>- Homestay</b></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><b>- Kuliner</b></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><b>- Kesehatan</b></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><b>- Ibadah</b></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><b>- Bank</b></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            Tambah Paket Wisata
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('addGaleri') }}" class="sidebar-link collapsed" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            Tambah Galeri
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('addLinimasa') }}" class="sidebar-link collapsed" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            Tambah Linimasa
                        </a> 
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                @yield('content')
            </main>
        </div>
    </div>
    {{-- @yield('additional_script') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit-icons.min.js"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function autoResize() {
            const textarea = document.getElementById('deskripsiTextarea');
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        }
    
        document.addEventListener('input', autoResize);
        window.addEventListener('load', autoResize);
    </script>
    <script>
        // Tambahkan script SweetAlert2 di sini
        @if (session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: 'Error!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</body>

</html>