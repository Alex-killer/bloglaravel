<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="fas fa-solid fa-align-justify"></i>
                <p>
                    Посты
{{--                    <span class="badge badge-info right">{{ $posts->count() }}</span>--}}
                </p>
            </a>
        </li>
    </ul>
</nav>
