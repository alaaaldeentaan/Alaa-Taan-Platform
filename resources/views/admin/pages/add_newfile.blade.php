<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" >

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font_awesome_5_free.min.css">
    <link rel="stylesheet" href="dist/css/select2.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="dist/css/duotone-dark.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <link rel="stylesheet" href="dist/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap4-toggle.min.css">
    <link rel="stylesheet" href="dist/css/summernote-bs4.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/components.css">
    <link rel="stylesheet" href="dist/css/spacing.css">
    <link rel="stylesheet" href="dist/css/custom.css">

    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/tooltip.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.nicescroll.min.js"></script>
    <script src="dist/js/moment.min.js"></script>
    <script src="dist/js/stisla.js"></script>
    <script src="dist/js/jscolor.js"></script>
    <script src="dist/js/bootstrap-datepicker.min.js"></script>
    <script src="dist/js/bootstrap-timepicker.min.js"></script>
    <script src="dist/js/bootstrap-tagsinput.min.js"></script>
    <script src="dist/js/select2.full.min.js"></script>
    <script src="dist/js/summernote-bs4.js"></script>
    <script src="dist/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap4.min.js"></script>
    <script src="dist/js/iziToast.min.js"></script>
    <script src="dist/js/fontawesome-iconpicker.js"></script>
    <script src="dist/js/bootstrap4-toggle.min.js"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper">
<div class="navbar-bg">

<!--                                          -------------          NAVBAR        --------------                                    -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a title="link" href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a title="link" href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                
                <li class="dropdown"><a title="link" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="uploads/user.jpg" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">John Doe</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a title="link" href="profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Edit Profile
                        </a>
                        <a title="link" href="login.html" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
<!--                                          -------------         END NAVBAR        --------------                                 -->


<!--                                          -------------          SIDEBARBAR        --------------                                 -->
        <div class="main-sidebar">
            <a title="link"side id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a title="link" href="index.html">MANEGER</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a title="link" href="index.html"></a>
                </div>

                <ul class="sidebar-menu">

                    <li ><a title="link" class="nav-link" href="index.html"><i class="fas fa-street-view"></i> <span>Dashboard</span></a></li>

                    <li ><a title="link" class="nav-link" href="addteacher.html"><i class="fas fa-plus-circle"></i> <span>Add Teacher</span></a></li>

                    <li><a title="link" class="nav-link" href="showteacher.html"><i class="fas fa-caret-square-up"></i> <span>Show Teachers</span></a></li>
                    
                    <li ><a title="link" class="nav-link" href="addstudent.html"><i class="fas fa-plus-circle"></i> <span>Add Student</span></a></li>

                    
                    <li><a title="link" class="nav-link" href="showstudent.html"><i class="fas fa-caret-square-up"></i> <span>Show Students</span></a></li>


                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-sort-alpha-down"></i><span>add Content</span></a>
                        <ul class="dropdown-menu">
                          <li class=""><a title="link" class="nav-link" href="addcourse.html"><i class="fas fa-plus-square"></i> <span>Add Course</span></a></li>
<li class=""><a title="link" class="nav-link" href="addnewfile.html"><i class="fas fa-plus-circle"></i> <span>Add File</span></a></li>
<li class=""><a title="link" class="nav-link" href="addvedio.html"><i class="fas fa-plus-circle"></i> <span>Add Video</span></a></li>
<li class=""><a title="link" class="nav-link" href="addnews.html"><i class="fas fa-plus-circle"></i> <span>Add News</span></a></li>
                        </ul>
                    </li>

                    <li><a title="link" class="nav-link" href="showcourse.html"><i class="fas fa-caret-square-up"></i> <span>Show Courses</span></a></li>





                </ul>
            </a>
        </div>
        <!--                                          -------------         END SIDEBAR        --------------                                 -->


        <!--                                          -------------         MAIN        --------------                                 -->
         <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>ADD NEW FILE</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <form action="" >
                           
                   <div  class="col-sm-12">
                    <label for="">Course Name</label>
                    <input  type="text"  name="Course name" placeholder="Give a Course Name" required="" class="form-control p_input">
                          </div>

                     
                         <div class="col-sm-12">
                        <label for=""> New Photo</label>
                        <input  type="file" name="Cartificates" placeholder="Give a Trainer Experience" required="" height="10px" class="form-control p_input">
                        </div>	
                        
                </form>

                                        <div class="form-group mt_30">
                                            <button type="submit" class="btn btn-primary btn-block">ADD</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

</body>
</html>