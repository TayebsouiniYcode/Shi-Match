<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./assets/style/main.css" rel="stylesheet">
    <title>Shi-match</title>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/" class="navbar-brand mx-4 mb-3">
                    <img src="/assets/img/Logo-BG.png" alt="" width="150" height="150">
                </a>
                <!-- <div class="d-flex flex-column align-items-center mb-4 w-100">
                    
                        <h5 class="mb-0">Tayeb souini</h5>
                        <h6 class="text-muted">Admin</h6>
                </div> -->
                <div class="navbar-nav w-100">
                    <a href="/" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="./student" class="nav-link"><i class="bi bi-people-fill me-2"></i>Players</a>
                    </div>
                    <div class="nav-item">
                        <a href="./teacher" class="nav-link"><i class="bi bi-people-fill me-2"></i>Teams</a>
                    </div>
                    <div class="nav-item">
                        <a href="./class" class="nav-link"><i class="bi bi-people-fill me-2"></i>Matchs</a>
                    </div>
                    <div class="nav-item">
                        <a href="./class" class="nav-link"><i class="bi bi-people-fill me-2"></i>Tournois</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <!-- this is here -->
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars text-primary"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Tayeb souini</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/profile" class="dropdown-item">My Profile</a>
                            <a href="/settings" class="dropdown-item">Settings</a>
                            <a href="/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            

            <div class="container px-4 mt-2">
                {{content}}
            </div>
            

            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="./assets/js/main.js"></script>
</body>
</html>