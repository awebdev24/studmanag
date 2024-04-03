<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ url('/') }}">
            <h3 class="header-brand-img desktop-lgo">A-WEBSOLUTIONS</h3>
            <h5 class="header-brand-img dark-logo">A-WEBSOLUTIONS</h5>
            <!-- Use Laravel's asset function to generate the URL for assets -->
            <!-- <img src="{{ asset('assets/images/brand/logo-light.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo"> -->
            <!-- <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt=" logo"> -->
            <!-- <img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt=" logo"> -->
            <!-- <img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt=" logo"> -->
        </a>
    </div>

    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category">Main</li>
        <li class="slide">
        <a class="side-menu__item" href="{{ url('/dashboard') }}">

                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>
        <li><a href="{{ url ('/enquiry')}}" class="slide-item"><h5>Enquiries</h5></a></li>
        <li><a href="{{ url ('/review') }}" class="slide-item"><h5>Review</h5></a></li>
        <li><a href="{{ url ('/user')}}" class="slide-item"><h5>User</h5></a></li>
        <li><a href="{{ url ('/enquiry')}}" class="slide-item"><h5>Designation</h5></a></li>
        <li><a href="{{ url ('/enquiry')}}" class="slide-item"><h5>Holiday</h5></a></li>

        <li><a href="{{ url ('/enquiry')}}" class="slide-item"><h5>Leaves</h5></a></li>
        <li><a href="{{ url ('/enquiry')}}" class="slide-item"><h5>Notice</h5></a></li>
        <li><a href="{{ url ('/enquiry')}}" class="slide-item"><h5>Report</h5></a></li>





       
        <!-- Add more menu items as needed -->

    </ul>
</aside>
<!--aside closed-->
