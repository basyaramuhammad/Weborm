<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">WEBORM</a>
        {{-- <img src="{{ asset('assets/img/321.png') }}" alt="logo" width="50%" href="{{ route('admin.dashboard') }}"> --}}
        {{-- <a href="{{ route('admin.kesekretariatan') }}">{{ env('APP_NAME') }}</a>
        <a href="{{ route('admin.acara') }}">{{ env('APP_NAME') }}</a>
        <a href="{{ route('admin.konsultasi') }}">{{ env('APP_NAME') }}</a> --}}
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">WBRM</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link"
                href="{{ route('admin.dashboard') }}"><i class="nav-icon fas fa-home"></i> <span>Beranda</span></a>
        </li>
        <li class="{{ Request::route()->getName() == 'admin.kesekretariatan' ? ' active' : '' }}"><a
                class="nav-link" href="{{ route('admin.kesekretariatan') }}"><i
                    class="bi fas bi-person-lines-fill"></i>
                <span>Kesekretariatan</span></a>
        </li>
        <li class="{{ Request::route()->getName() == 'admin.acara' ? ' active' : '' }}"><a class="nav-link"
                href="{{ route('admin.acara') }}"><i class="bi fas bi-calendar2-event"></i> <span>Acara</span></a>
        </li>
        <li class="{{ Request::route()->getName() == 'admin.konsultasi' ? ' active' : '' }}"><a class="nav-link"
                href="{{ route('admin.konsultasi') }}"><i class="bi fas bi-chat-dots"></i>
                <span>Konsultasi</span></a></li>
        @if (Auth::user()->can('manage-users'))
            <li class="menu-header">Users</li>
            <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.users') }}"><i class="fa fas fa-users"></i> <span>Users</span></a></li>
        @endif
    </ul>
</aside>
