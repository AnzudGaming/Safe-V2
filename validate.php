  <?php
  $user1 = $_POST["user"];
  $pass = sha1(md5($_POST["pass"]));
  require_once("class/class.php");

  $user = new User();

  $result = $user->search($user1, $pass);

  $validation = mysqli_num_rows($result);

  if ($validation == 1) {
    session_start();
    $_SESSION['user'] = $user;

    $dates = mysqli_fetch_array($result);
    $type_user = $dates['type_user'];

    if ($type_user == "Admin") {
      header("location: inventary.php");
    } else if ($type_user == "Area") {
      header("location: inventary2.php");
    } else if ($type_user == "Seguridad") {
      header("location: inventary1.php");
    }
  ?>
  <?php
  } else if ($validation == 0) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="manifest" href="safe_icons/manifest.json">
      <link rel="stylesheet" href="css/estilo.css">
      <!-- <link rel="stylesheet" href="css/bootstrapmod.css"> -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/sweetalert2.min.css">
      <link rel="stylesheet" href="css/time.css">
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
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="safe_icons/ms-icon-144x144.png">
      <meta name="theme-color" content="#11101d">
      <script type="text/javascript" src="js/jquery.js"></script>
      <script src="js/sweetalert2.all.min.js"></script>
      <script src="js/sweetalert2.min.js"></script>
      <script src="js/time.js"></script>
      <title>Login</title>
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

      <style type="text/css">
        .info2 {
          display: none;
        }

        @media(min-width: 390px) and (max-width: 390px) and (min-height: 844px) and (max-height: 844px) {
          .info {
            width: 350px !important;
          }
        }

        @media(min-width: 844px) and (max-width: 844px) and (min-height: 390px) and (max-height: 390px) {
          .info {
            display: none;
          }

          .info2 {
            display: flex;
            margin: 0 auto;
            padding: 80px;
          }

          h1 {
            font-weight: 700;
            text-align: center;
          }
        }

        @media (min-width: 768px) and (max-width: 768px) and (min-height: 1024px) and (max-height: 1024px) {}

        @media (min-width: 1024px) and (max-width: 1024px) and (min-height: 768px) and (max-height: 768px) {}
      </style>
    </head>

    <body>
      <nav align="center" style="background: white;">
        <div>
          <div>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <h2>SAFE</h2>
              </li>
              <li class="nav-item dropdown">
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav><br><br><br>
      <div class="wrapper">
        <div class="display">
          <div id="tiempo">12:00:00 PM</div>
        </div>
        <span></span>
        <span></span>
      </div>
      <div class="cuadro">
        <form action="validate.php" method="POST" align="center">
          <div class="container">
            <div class="form-info">
              <div class="info">
                <h2>Login</h2>
                <div class="input-group">
                  <input type="text" placeholder="Username" name="user" required id="user" disabled><br><br>
                </div>
                <div class="input-group">
                  <input type="password" placeholder="Password" name="pass" required id="pass" disabled><br><br>
                </div><br>
                <input type="submit" value="Login" class="btn btn-outline-primary btn-block">
        </form>
      </div>
      </div>
      </div>
      </div>
    </body>

    </html>
    <script>
      setTimeout(function() {
        window.location = "index.php"
      }, 3000)
    </script>
    <script>
      Swal.fire({
  icon: 'error',
  title: 'Incorrect username or password',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: false,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
    </script>
  <?php
  }
  ?>