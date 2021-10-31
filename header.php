<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cafe</title>
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="d-flex grid-container">
        <div class="sidebar bg-light">
            <hr>
            <ul class="nav nav-pills">
                <li class="nav-item sidebarItem ">
                    <a href="" class="nav-link">
                        <i class="fab fa-500px"></i> DASHBOARD
                    </a>
                </li>

                <li class="nav-item sidebarItem">
                    <button class="btn dropdown-btn">
                        <div class="sidebarText"><i class="fas fa-tv"></i> COMPUTER <i class="fas fa-caret-down"></i></div>
                    </button>
                    <div class="dropdown-container">
                        <a href="add-computer.php">Add Computer </a>
                        <a href="manage-computer.php">Manage Computer</a>
                    </div>
                </li>

                <li class="nav-item sidebarItem">
                    <button class="btn dropdown-btn">
                        <div class="sidebarText"><i class="fas fa-users"></i> USERS <i class="fas fa-caret-down"></i></div>
                    </button>
                    <div class="dropdown-container">
                        <a href="add-users.php">Add User</a>
                        <a href="manage-active-users.php">Manage Active Users</a>
                        <a href="manage-user-archive.php">View Users Archive</a>
                    </div>
                </li>

                <li class="nav-item sidebarItem">
                    <a href="search.php" class="nav-link">
                        <i class="fas fa-search"></i> SEARCH
                    </a>
                </li>

                <li class="nav-item sidebarItem">
                    <button class="btn dropdown-btn">
                        <div class="sidebarText"><i class="fas fa-book"></i> REPORTS <i class="fas fa-caret-down"></i></div>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Between Dates Report</a>
                    </div>
                </li>
            </ul>
            <button id="sidebarButton">M</button>
        </div>
        <div class="main-content">

            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid me-auto">
                    <a class="navbar-brand" href="#"><i class="fas fa-coffee"></i> CCMS ADMIN | Admin</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <div class="dropdown dropstart">
                                    <a href="#" class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-circle fa-2x"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="adminProfile.php"><i class="far fa-user-circle"></i> My Profile</a></li>
                                        <li><a class="dropdown-item" href="changePassword.php"><i class="fas fa-key"></i> Change Password</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                                    </ul>
                                </div>
                                <a class="nav-link active" aria-current="page" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>