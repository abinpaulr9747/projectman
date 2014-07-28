<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li @yield('dashboard') >
            <a href="{{{ route('dashboard') }}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li @yield('users') >
            <a href="{{{ route('users') }}}"><i class="fa fa-fw fa-user"></i> Users</a>
        </li>
        <li @yield('table') >
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
        </li>

    </ul>
</div>