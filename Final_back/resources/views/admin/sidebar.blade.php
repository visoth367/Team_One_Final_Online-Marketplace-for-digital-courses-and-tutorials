<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Management</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('admin.messages') }}">
                <i class='bx bx-envelope'></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="{{ route('admin.profile') }}">
                <i class='bx bx-user'></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="/admin/user">
                <i class='bx bx-group'></i>
                <span class="links_name">Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>
        <li>
            <a href="/admin/courses">
                <i class='bx bx-book'></i> 
                <span class="links_name">Courses</span>
            </a>
            <span class="tooltip">Courses</span>    
        <li class="profile">
            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background-color: #344EAD;">
                <i class='bx bx-log-out' id="log_out" style="color: #D0E4FF"></i>
                <span class="links_name" style="color: #D0E4FF; font-size: large; margin-left: 20px;">Exit Admin Mode</span>
            </a>
            <span class="tooltip">Exit</span>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        
    </ul>
</div>
