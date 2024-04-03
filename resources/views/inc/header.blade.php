<!-- resources/views/app-header.blade.php -->

<div class="app-header header main-header1">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('index-2.html') }}">
                <img src="{{ asset('assets/images/brand/logo-light.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Azea logo">
                <img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Azea logo">
                <img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Azea logo">
            </a>
            <div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
                <a class="open-toggle" href="javascript:void(0);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
                </a>
            </div>
            <div class="mt-1 d-md-block d-none">
                <form class="form-inline">
                    <div class="search-element">
                        <input type="search" class="form-control header-search mobile-view-search" placeholder="Search…" aria-label="Search" tabindex="1">
                        <button class="btn btn-primary-color" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                        </button>
                    </div>
                </form>
            </div><!-- SEARCH -->
            <!-- Add other parts of the header HTML -->
            <!-- ... -->
        </div>
    </div>
</div>
