<?php
session_start();

if (isset($_SESSION['username'])) {
    $nombre = $_SESSION['username'];
    $email = $_SESSION['email'];
} else {
    header('Location: login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../src/styles/sidebars.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">AppExport</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Buscar...">
                <span class="tooltip">Buscar</span>
            </li>
            <li>
                <a href="dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Control</span>
                </a>
                <span class="tooltip">Control</span>
            </li>
            <li>
                <a href="manage">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Gestión</span>
                </a>
                <span class="tooltip">Gestión</span>
            </li>
            <li>
                <a href="data">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Datos</span>
                </a>
                <span class="tooltip">Datos</span>
            </li>
            <li>
                <a href="settings">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Configuracion</span>
                </a>
                <span class="tooltip">Configuracion</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="name_job">
                    <div class="name" id='nombre'><?php echo $nombre ?></div>
                    <div class="job" id="correo"><?php echo $email ?></div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>