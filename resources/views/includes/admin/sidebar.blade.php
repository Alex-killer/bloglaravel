<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-users"></i>
                <p>
                    Пользователи
{{--                    <span class="badge badge-info right">{{ $categories->count() }}</span>--}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-align-justify"></i>
                <p>
                    Категории
{{--                    <span class="badge badge-info right">{{ $categories->count() }}</span>--}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                    Посты
{{--                    <span class="badge badge-info right">{{ $posts->count() }}</span>--}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-tags"></i>
                <p>
                    Теги
{{--                    <span class="badge badge-info right">{{ $tags->count() }}</span>--}}
                </p>
            </a>
        </li>
    </ul>
</nav>
