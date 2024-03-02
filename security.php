<?php 

session_start();

if (!isset($_SESSION["user"])) {
    header("location: index.php");
}
 ?>
  <link rel="apple-touch-icon" sizes="57x57" href="safe_icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="safe_icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="safe_icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="safe_icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="safe_icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="safe_icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="safe_icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="safe_icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="safe_icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="safe_icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="safe_icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="safe_icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="safe_icons/favicon-16x16.png">
  <link rel="manifest" href="safe_icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="safe_icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#11101d">
     <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('ServiceWorker.js').then(
                    function (registration) {
                        console.log('ServiceWorker registrado correctametne');
                    },
                    function (err) {
                        console.log('ServiceWorker falló', err);
                    }
                );
            });
        }
    </script>