<aside class="main-sidebar sidebar-dark-primary elevation-4 pt-0" style="width: 250px;">
    <a href="{{ url('/admin') }}" class="brand-link navbar-brand" style="border-bottom: unset;padding: 20px 20px;line-height: unset">
        <img src="{{ asset('images/logo.png') }}"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light m-2">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar pt-4">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column2" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
                <li class="nav-item {{ Auth::user()->id == 1 ? '' : 'd-none' }}">
                    <a href="{{ route('io_generator_builder') }}"
                        class="nav-link {{ Request::is('generator_builder*') ? 'active' : '' }}">
                        <p>IO Generator</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
