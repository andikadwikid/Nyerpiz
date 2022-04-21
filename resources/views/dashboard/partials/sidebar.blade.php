<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Nyerpiz</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Service</li>

            <li
                class="{{ request()->is('dashboard/user') ? 'active' : '' }}{{ request()->is('dashboard/admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="far fas fa-th-large"></i>
                    <span>Data</span></a>
            </li>

            <li class="menu-header">Transaksi</li>
            <li class="{{ request()->is('dahsboard/admin/transaksi') ? 'active' : '' }}">
                <a href="{{ route('transaksi') }}" class="nav-link"><i class="fas fa-file-alt"></i>
                    <span>Data Transaksi</span></a>
            </li>

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">

        </div>
    </aside>
</div>
