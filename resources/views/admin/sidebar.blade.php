<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""> <img alt="image" src="/admin/assets/img/school.png" class="header-logo" /><br> <span
                    class="logo-name">

                    29-maktab</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('dashboard') }}" class="menu-toggle"><i
                        class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.categories.index') }}" class="menu-toggle"><i
                        class="fas fa-ellipsis-h"></i><span>Categories</span></a>

            </li>

            <li class="dropdown">
                <a href="{{ route('admin.slider.index') }}" class="menu-toggle"><i
                        class="fas fa-images"></i><span>Slider</span></a>

            </li>

            <li class="dropdown">
                <a href="{{ route('admin.cricle.index') }}" class="menu-toggle"><i
                        class="fas fa-user-circle"></i><span>Cricle</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.image.index') }}" class="menu-toggle"><i
                        class="fas fa-image"></i><span>Image</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.statistic.index') }}" class="menu-toggle"><i
                        class="fas fa-th-list"></i><span>Statistics</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.latestnew.index') }}" class="menu-toggle"><i
                        class="fas fa-newspaper"></i><span>Latest News</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.gallery.index') }}" class="menu-toggle"><i class="fas fa-images"></i><span>Gallery</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.tribe.index') }}" class="menu-toggle"><i class="far fa-credit-card"></i><span>Tribe</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.footer.index') }}" class="menu-toggle"><i class="fas fa-table"></i><span>Footer</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.leader.index') }}" class="menu-toggle"><i class="fas fa-users"></i><span>Rahbariyat</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.contact.index') }}" class="menu-toggle"><i class="fas fa-phone"></i><span>Contact</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('admin.post.index') }}" class="menu-toggle"><i class="fas fa-newspaper"></i><span>News</span></a>

            </li>

        </ul>
    </aside>
</div>

@section('js')
    <script>
        var url = windows.location.href;
        var link = document.querySelectorAll("[href='" + url + "']")[0];
        link.parentElement.classList.add('active')
    </script>
@endsection
