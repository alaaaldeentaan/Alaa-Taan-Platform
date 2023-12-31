<div class="main-sidebar">
    <a title="link"side id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a title="link" href="index.html">MANEGER</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a title="link" href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li ><a title="link" class="nav-link"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>
          <hr>
            <li ><a title="link" class="nav-link" href="{{ route('admin.add_admin') }}"><i class="fas fa-hand-paper"></i> <span>Add Admin</span></a></li>
            <li ><a title="link" class="nav-link" href="{{ route('admin.add_teacher') }}"><i class="fas fa-hand-paper"></i> <span>Add Teacher</span></a></li>
            <li ><a title="link" class="nav-link" href="{{route('admin.addStudent')}}"><i class="fas fa-hand-point-right"></i> <span>Add Student</span></a></li>
            <li ><a title="link" class="nav-link" href="{{route('admin.add_training')}}"><i class="fas fa-hand-point-right"></i> <span>Add Course Training</span></a></li>
            <li ><a title="link" class="nav-link" href="{{route('admin.add_category')}}"><i class="fas fa-hand-point-right"></i> <span>Add New Category</span></a></li>
          <hr>
            <li><a title="link" class="nav-link" href="{{ route('admin.display_admin') }}"><i class="fas fa-hand-point-right"></i> <span>Show Admins</span></a></li>
            <li><a title="link" class="nav-link" href="{{ route('admin.display_teacher') }}"><i class="fas fa-hand-point-right"></i> <span>Show Teachers</span></a></li>
            <li><a title="link" class="nav-link" href="{{ route('admin.displayStudent') }}"><i class="fas fa-hand-point-right"></i> <span>Show Students</span></a></li>
            <li><a title="link" class="nav-link" href="{{ route('admin.displayRequest') }}"><i class="fas fa-hand-point-right"></i> <span>Show Request Teachers </span></a></li>
            <li><a title="link" class="nav-link" href="{{ route('admin.displayCourses') }}"><i class="fas fa-hand-point-right"></i> <span>Show Courses Training</span></a></li>


            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>add Content</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a title="link" class="nav-link" href="#"><i class="fas fa-hand-paper"></i> <span>Add Course</span></a></li>
                    <li class=""><a title="link" class="nav-link" href="#"><i class="fas fa-hand-paper"></i> <span>Add File</span></a></li>
                    <li class=""><a title="link" class="nav-link" href="#"><i class="fas fa-hand-paper"></i> <span>Add Video</span></a></li>
                    <li class=""><a title="link" class="nav-link" href="#"><i class="fas fa-hand-paper"></i> <span>Add News</span></a></li>
                </ul>
            </li>

            <li><a title="link" class="nav-link" href="#"><i class="fas fa-hand-point-right"></i> <span>Show Courses</span></a></li>
        </ul>
    </a>
</div>