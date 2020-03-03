<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">BMC</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Users</span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/user/add">Add User</a>
                <a class="collapse-item" href="/admin/user">All Users</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#family" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Family</span>
        </a>
        <div id="family" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/family/add">Add Family</a>
                <a class="collapse-item" href="/admin/family/all">All Families</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rfid" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>RFID</span>
        </a>
        <div id="rfid" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/rfid/add">Add RFID</a>
                <a class="collapse-item" href="/admin/rfid/all">View RFID's</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/bill">
            <i class="fas fa-fw fa-table"></i>
            <span>Bill</span></a>
    </li>


    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#complain" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Complains</span>
        </a>
        <div id="complain" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/complain/add">Add Complain</a>
                <a class="collapse-item" href="/admin/complain/all">All Complains</a>
            </div>
        </div>
    </li>



    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#feedback" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Feedback</span>
        </a>
        <div id="feedback" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/feedback/add">Add Feedback</a>
                <a class="collapse-item" href="/admin/feedback/all">All Feedbacks</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/consumption">
            <i class="fas fa-fw fa-table"></i>
            <span>Water Consumption</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
