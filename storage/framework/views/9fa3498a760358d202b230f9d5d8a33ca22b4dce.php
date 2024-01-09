

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dastone - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <?php echo $__env->make('company_layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="">
<!-- Left Sidenav -->
<?php echo $__env->make('company_layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- end left-sidenav-->


<div class="page-wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-end mb-0">
                <li class="dropdown hide-phone">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i data-feather="search" class="topbar-icon"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                        <!-- Top Search Bar -->
                        <div class="app-search-topbar">
                            <form action="#" method="get">
                                <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i data-feather="bell" class="align-self-center topbar-icon"></i>
                        <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                    </a>

                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <span class="ms-1 nav-user-name hidden-sm">Nick</span>
                        <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="pages-profile.html"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                        <a class="dropdown-item" href="apps-contact-list.html"><i data-feather="users" class="align-self-center icon-xs icon-dual me-1"></i> Contacts</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="auth-login.html"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                    </div>
                </li>
            </ul><!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile">
                        <i data-feather="menu" class="align-self-center topbar-icon"></i>
                    </button>
                </li>
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ENROLL NEW STUDENT</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form action="/path-to-your-enrollment-handler" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Student Name -->
                                        <div class="mb-3 row">
                                            <label for="student-name" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Student Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="student-name" name="student_name" required>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3 row">
                                            <label for="student-email" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email" id="student-email" name="student_email" required>
                                            </div>
                                        </div>

                                        <!-- Telephone -->
                                        <div class="mb-3 row">
                                            <label for="student-telephone" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Telephone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="tel" id="student-telephone" name="student_telephone">
                                            </div>
                                        </div>

                                        <!-- Department -->
                                        <div class="mb-3 row">
                                            <label for="student-department" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Department</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="student-department" name="student_department">
                                            </div>
                                        </div>

                                        <!-- Course -->
                                        <div class="mb-3 row">
                                            <label for="student-course" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Course</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="student-course" name="student_course">
                                            </div>
                                        </div>

                                        <!-- Date of Enrollment -->
                                        
                                        
                                        
                                        
                                        
                                        

                                        <!-- Submit Button -->
                                        <div class="mb-3 row">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button type="submit" class="btn btn-primary">Enroll Student</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->



        </div><!-- container -->

        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> MARKETING MADNESS <span class="text-muted d-none d-sm-inline-block float-end"> <i
                    class="mdi mdi-heart text-danger"></i>  MM</span>
        </footer><!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->




<!-- jQuery  -->
<?php echo $__env->make('company_layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /Users/mac1/Attendance/resources/views/admin/register.blade.php ENDPATH**/ ?>