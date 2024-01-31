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
                        <a href="{{ route('admin.contact_us') }}" class="active">
                            <i class="bi bi-circle"></i><span>Contact Us Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.donation') }}" class="active">
                            <i class="bi bi-circle"></i><span>Donation</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
