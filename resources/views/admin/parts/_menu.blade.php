<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('assets/web/img/logoSinFondo.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">ByA</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class="material-icons-outlined">home</i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">store</i>
                    </div>
                    <div class="menu-title">Productos</div>
                </a>
                <ul>
                    <li><a href="index.html"><i class="material-icons-outlined">arrow_right</i>Agregar Productos</a>
                    </li>
                    <li><a href="index2.html"><i class="material-icons-outlined">arrow_right</i>Listado Productos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i>
                    </div>
                    <div class="menu-title">Usuarios Sistema</div>
                </a>
                <ul>
                    <li><a href="{{ route('add.user') }}"><i class="material-icons-outlined">arrow_right</i>Agregar
                            Usuario</a>
                    </li>
                    <li><a href="{{ route('list.user') }}"><i class="material-icons-outlined">arrow_right</i>Listado
                            Usuarios</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
