<div class="sidebar">
  <div class="logo-details">
    <i class='bx bx-menu' id="btn"></i>
    <span class="logo_name">Management</span>
  </div>
  <ul class="nav-list">
    <li>
      <a href="/home">
        <i class='bx bx-home'></i>
        <span class="links_name">Home</span>
      </a>
      <span class="tooltip">Home</span>
    </li>
    <li>
      <a href="/contact-us">
        <i class='bx bx-envelope'></i>
        <span class="links_name">Contact Us</span>
      </a>
      <span class="tooltip">Contact Us</span>
    </li>
    <li>
      <a href="/profile">
        <i class='bx bx-user'></i>
        <span class="links_name">User</span>
      </a>
      <span class="tooltip">User</span>
    </li>
    <li>
      <a href="/about-us">
        <i class='bx bx-book-content'></i>
        <span class="links_name">Content</span>
      </a>
      <span class="tooltip">Content</span>
    </li>
    <li>
      <a href="/video">
        <i class='bx bx-video'></i>
        <span class="links_name">Upload Video</span>
      </a>
      <span class="tooltip">Upload Video</span>
    </li>
    <li>
      <a href="/purchased-courses">
        <i class='bx bx-purchase-tag'></i>
        <span class="links_name">Purchased Video</span>
      </a>
      <span class="tooltip">Purchased Video</span>
    </li>
    <li class="profile">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">
          <i class='bx bx-log-out' id="log_out"></i>
          <span class="links_name">Logout</span>
        </button>
      </form>
      <span class="tooltip">Logout</span>
    </li>
  </ul>
</div>