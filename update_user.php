<?php
require_once("security.php");
require_once("class/class.php");

$users = new User();
$user = $_POST["user"];
$pass = sha1(md5($_POST["pass"]));
$type_user = $_POST["type_user"];
$iduser = $_POST["iduser"];
$result = $users->update($user, $pass, $type_user, $iduser);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrapmod.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="57x57" href="safe_icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="safe_icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="safe_icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="safe_icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="safe_icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="safe_icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="safe_icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="safe_icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="safe_icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="safe_icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="safe_icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="safe_icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="safe_icons/favicon-16x16.png">
    <link rel="manifest" href="safe_icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="safe_icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#11101d">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <title>Form User</title>
    <style type="text/css">
        .ocultar {
            display: none;
        }

        .mostrar {
            display: block;
        }
    </style>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('ServiceWorker.js').then(
                    function(registration) {
                        console.log('ServiceWorker registrado correctametne');
                    },
                    function(err) {
                        console.log('ServiceWorker falló', err);
                    }
                );
            });
        }
    </script>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="img/safe.jpg" alt="" style="width: 40px; height: 40px; margin-left: 15px; margin-right: 15px; border-radius: 10px;">
            <span class="logo_name">SAFE</span>
        </div>
        <ul class="nav-links">
            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <a href="#">
                            <i class='bx bx-search icon'></i>
                            <input type="search" placeholder="Search..." readonly="disable">
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Search</a></li>
                        </ul>
                </div>
            </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Lists</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Lists</a></li>
                    <li><a href="cargament_input.php">List General</a></li>
                    <li><a href="cargament_output.php">List Output</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Register</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Register</a></li>
                    <li><a href="form_cargament.php">Register Cargament</a></li>
                    <li><a href="form_user.php">New User</a></li>
                    <li><a href="form_employee.php">New Employee</a></li>
                </ul>
            </li>
            <li>
                <a href="inventary.php">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="inventary.php">Explore</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-history'></i>
                    <span class="link_name">History</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">History</a></li>
                </ul>
            </li>
            <li>
                <a href="settings.php">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="settings.php">Setting</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="color: white; margin-left: 15px; margin-bottom: 15px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <div class="name-job">
                        <div class="profile_name"></div>
                        <div class="job"></div>
                    </div>
                    <a href="logout.php"><i class='bx bx-log-out'></i></a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text"></span>
        </div>
        <div class="cuadro">
            <form action="update_user.php" method="POST" class="form-control" align="center" style="margin-top: -60px;" onsubmit="verificarPasswords(); return false">
                <div class="container">
                    <div class="form-info">
                        <div class="info">
                            <h2>Update User</h2>
                            <div class="input-group">
                                <input type="text" name="cod_user" placeholder="User Code" required readonly="disable"><br><br>
                            </div>
                            <div class="input-group">
                                <input type="text" name="user" placeholder="User" required readonly="disable"><br><br>
                            </div>
                            <div class="input-group">
                                <input type="password" name="pass" placeholder="Password" required id="pass1"><br>
                                <div class="answer"></div>
                            </div>
                            <div class="input-group">
                                <input type="password" name="pass" placeholder="Confirmation" required id="pass2"><br>
                                <div class="answer"></div>
                            </div><br>
                            <div class="input-group">
                                <select name="type_user" id="" class="form-select" required>
                                    <option value="">Select User</option>
                                    <option value="Area">Area</option>
                                    <option value="Seguridad">Seguridad</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div><br>
                            <input type="submit" value="Uptade" class="btn btn-outline-success"><br><br>
                            <div id="error" class="alert alert-danger ocultar" role="alert">
                                Passwords do not match, try again!
                            </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </section>
    <div>
        <?php
        if ($result) {
        ?>
            <script>
                setTimeout(function() {
                    window.location = "users.php"
                }, 3000)
            </script>
            <script type="text/javascript">
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'User updated!'
                })
            </script>
        <?php
        } else { ?>
            <script>
                setTimeout(function() {
                    window.location = "form_edit_user.php"
                }, 3000)
            </script>
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'User not updated!'
                })
            </script>
        <?php
        }
        ?>
    </div>
</body>

</html>