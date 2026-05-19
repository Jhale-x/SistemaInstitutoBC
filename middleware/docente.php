<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'docente') {
    header('Location: ../views/dashboard.php');
    exit;
}
