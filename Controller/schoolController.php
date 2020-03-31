<?php
require_once('../connec.php');
include_once('../Model/schoolModel.php');

if (isset($_POST['create'])) {
    $city = trim($_POST['city_user']);
    createSchool($city, $_POST['capacity_user']);
    header('Location: ../index.php?success=Utilisateur Ok');
}

if (isset($_POST['delete'])) {
    deleteSchool($_POST['id']);
    header('Location: ../index.php?success=Utilisateur KO');
}

if (isset($_POST['update'])) {
    $city = $_POST['city_user'];
    $capacity = $_POST['capacity_user'];
    $id = $_POST['id'];
    updateSchool($city, $capacity, $id);
    header('Location: ../index.php?success=Utilisateur update ok');
}
