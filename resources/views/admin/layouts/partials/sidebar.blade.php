    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Input Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admin.index') }}" class="active">
                            <i class="bi bi-circle"></i><span>Landing Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.about_us') }}" class="active">
                            <i class="bi bi-circle"></i><span>About Us Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.donation') }}" class="active">
                            <i class="bi bi-circle"></i><span>Donation</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.programhighlights') }}" class="active">
                            <i class="bi bi-circle"></i><span>Program Highlights</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contact') }}" class="active">
                            <i class="bi bi-circle"></i><span>Contact</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-target="#forms-nav" href="{{route('admin.change_password_index')}}">
                    <i class="bi bi-key"></i><span>Change Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-target="#forms-nav" href="{{route('logout')}}">
                    <i class="bi bi-box-arrow-right"></i><span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
