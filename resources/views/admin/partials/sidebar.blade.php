<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a>
        <a href="{{ route('admin.kesekretariatan') }}">{{ env('APP_NAME') }}</a>
        <a href="{{ route('admin.acara') }}">{{ env('APP_NAME') }}</a>
        <a href="{{ route('admin.konsultasi') }}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">WBRM</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link"
                href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Beranda</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.kesekretariatan' ? ' active' : '' }}"><a
                class="nav-link" href="{{ route('admin.kesekretariatan') }}"><i class="fa fa-columns"></i>
                <span>Kesekretariatan</span></a>
        </li>
        <li class="{{ Request::route()->getName() == 'admin.acara' ? ' active' : '' }}"><a class="nav-link"
                href="{{ route('admin.acara') }}"><i class="fa fa-columns"></i> <span>Acara</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.konsultasi' ? ' active' : '' }}"><a
                class="nav-link" href="{{ route('admin.konsultasi') }}"><i class="fa fa-columns"></i>
                <span>Konsultasi</span></a></li>
        @if (Auth::user()->can('manage-users'))
            <li class="menu-header">Users</li>
            <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
        @endif
    </ul>
</aside>
