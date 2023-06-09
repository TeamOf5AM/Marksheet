<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex bg-white align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text text-black">Marksheet</div>
    </a>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item px-2 py-1">
        <a class="nav-link p-2 rounded active w-100" href="{{url('dashboard')}}">
            <i class="fa fa-home"></i>
            <span>Home</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item px-2">
        <a class="nav-link p-2 rounded w-100 collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user-graduate"></i>
            <span>Classes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('class/add')}}">Create Class</a>
                <a class="collapse-item" href="{{url('class/all')}}">All Class</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item px-2">
        <a class="nav-link p-2 rounded w-100 collapsed" href="#" data-toggle="collapse" data-target="#subjects"
            aria-expanded="true" aria-controls="subjects">
            <i class="fas fa-user-graduate"></i>
            <span>Subjects</span>
        </a>
        <div id="subjects" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('subject/all')}}">All Subjects</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item px-2">
        <a class="nav-link p-2 rounded w-100 collapsed" href="#" data-toggle="collapse" data-target="#students"
            aria-expanded="true" aria-controls="students">
            <i class="fas fa-user-graduate"></i>
            <span>Students</span>
        </a>
        <div id="students" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('student/all')}}">All Students</a>
            </div>
        </div>
    </li>

    <li class="nav-item px-2">
        <a class="nav-link p-2 rounded w-100 collapsed" href="#" data-toggle="collapse" data-target="#results"
            aria-expanded="true" aria-controls="results">
            <i class="fas fa-user-graduate"></i>
            <span>Results</span>
        </a>
        <div id="results" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('result/all')}}">Results</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-auto">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->