<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{url('mahasiswa')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Mahasiswa
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('profile', ['dhayu', '11 Oktober 2003', 'Jl.Teluk Etna V kav.94B'])}}" class="nav-link">
                    {{-- /profile/zul --}}
                    {{-- route('profile', 2) --}}
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Profile
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('pengalaman')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Pengalaman
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('articles')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Artikel
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('siswa')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Siswa
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('dosen')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Dosen
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('hobi')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Hobi
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('matkul')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Matkul
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('keluarga')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Keluarga
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
