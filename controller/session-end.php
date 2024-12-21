<?php
session_start();
session_destroy();
header("Location:/web-penjualan/pages/auth/login.php");
