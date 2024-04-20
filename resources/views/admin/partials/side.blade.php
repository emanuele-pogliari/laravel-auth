<div class=" my-content-side p-2 d-flex flex-column justify-content-between">
    {{-- <button class="position-absolute">Resize</button> --}}
    <div>
    <h3 class="m-2">Admin Panel</h3>
    
    <div class="search">
        <div class="input-group">
            <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
      </div>
    <ul class="list-unstyled">
        <li class="fs-4 p-2">Home</li>
        <li class="fs-4 p-2">Manage</li>
        <li class="fs-4 p-2">Content</li>
        <li class="fs-4 p-2">Other Content</li>
        <li class="fs-4 p-2">Options</li>
        <li class="fs-4 p-2">Config</li>
    </ul>
</div>
    <div class="profile-opt d-flex flex-column gap-4 mb-3">
        <div class="usr-box d-flex align-items-center gap-4 ">
            <img src="{{ Vite::asset('resources/img/profile.png') }}" alt="">
            <h3 class="m-0">{{auth()->user()->name}}</h3>
        </div>
        <ul class="list-unstyled">
            <li class="fs-4 p-2">Profile</li>
            <li class="fs-4 p-2">Dashboard</li>
            <li class="fs-4 p-2">Logout</li>
        </ul>
    </div>
</div>