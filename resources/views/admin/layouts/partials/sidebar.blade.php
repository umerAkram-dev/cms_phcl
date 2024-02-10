    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">

                <a class="nav-link collapsed" href="{{ route('admin.header') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Header</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link " href="{{ route('admin.index') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Landing Page</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link " href="{{ route('admin.about_us') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>About Us Page</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link " href="{{ route('admin.donation') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Donation</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link " href="{{ route('admin.contact') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Contact</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.programhighlights','cooking_classes') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Cooking Classes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.programhighlights','lifestyle_changes') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Lifestyle Changes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.programhighlights','treatments') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Treatments</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.ride_page') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Ride</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link " href="{{ route('admin.footer') }}" class="active">
                    <i class="bi bi-file-earmark-fill"></i><span>Footer</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#forms-nav" href="{{ route('admin.change_password_index') }}">
                    <i class="bi bi-key"></i><span>Change Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-target="#forms-nav" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right"></i><span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
