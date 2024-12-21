<?php
if (!isset($_SESSION['valid'])) {
    header('Location: /web-penjualan/pages/auth/login.php');
}
