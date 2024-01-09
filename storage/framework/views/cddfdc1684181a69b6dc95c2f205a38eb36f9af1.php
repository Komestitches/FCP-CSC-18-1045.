

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">STUDENT LISTS</h4>




                        </div><!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Department</th>
                                    <th>Course</th>
                                    <th>Date of Enrollment</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>tiger.nixon@example.com</td>
                                    <td>+234 805 123 4567</td>
                                    <td>System Architecture</td>
                                    <td>Advanced Computing</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>Deborah Eduotu</td>
                                    <td>komesstiches@gmail.com</td>
                                    <td>+234 806 567 8910</td>
                                    <td>Computer Science</td>
                                    <td>Software Engineering</td>
                                    <td>2020/09/15</td>
                                </tr>
                                <tr>
                                    <td>Jane Doe</td>
                                    <td>jane.doe@example.com</td>
                                    <td>+234 807 101 1122</td>
                                    <td>Mathematics</td>
                                    <td>Data Analysis</td>
                                    <td>2019/08/11</td>
                                </tr>
                                <tr>
                                    <td>John Smith</td>
                                    <td>john.smith@example.com</td>
                                    <td>+234 808 223 3344</td>
                                    <td>Physics</td>
                                    <td>Quantum Mechanics</td>
                                    <td>2018/07/22</td>
                                </tr>
                                <tr>
                                    <td>Alice Johnson</td>
                                    <td>alice.johnson@example.com</td>
                                    <td>+234 809 314 1516</td>
                                    <td>Biology</td>
                                    <td>Genetic Research</td>
                                    <td>2021/01/30</td>
                                </tr>
                                <tr>
                                    <td>Michael Brown</td>
                                    <td>michael.brown@example.com</td>
                                    <td>+234 810 424 2536</td>
                                    <td>Chemistry</td>
                                    <td>Organic Chemistry</td>
                                    <td>2017/05/14</td>
                                </tr>
                                </tbody>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


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
<?php /**PATH /Users/mac1/Attendance/resources/views/admin/students.blade.php ENDPATH**/ ?>