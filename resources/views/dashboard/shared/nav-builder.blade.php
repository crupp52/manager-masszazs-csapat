<div class="c-sidebar-brand"><h3>Admin</h3></div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.service.edit', ['id' => 1]) }}">
            <span class="c-sidebar-nav-icon">
                <i class="fa fa-home"></i>
            </span> Főoldal szerkesztése
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.service.index') }}">
            <span class="c-sidebar-nav-icon">
                <i class="fa fa-hand-holding"></i>
            </span> Szolgáltatások
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.staff.index') }}">
            <span class="c-sidebar-nav-icon">
                <i class="fa fa-users"></i>
            </span> Munkatársak
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="https://cpanel11.rackforest.com:2096/webmaillogout.cgi" target="_blank">
            <span class="c-sidebar-nav-icon">
                <i class="fa fa-envelope"></i>
            </span> Emailek
        </a>
    </li>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
