<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'alumno') {
    header('Location: ../views/dashboard.php');
    exit;
}
