<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="public/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/vendor/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <?php global $c; ?>
    <div class="container header" style="margin-top:20px;">
        <div class="col-md-6">
            <a href="/" class="<?= $c == 'emp' ? 'active' : '' ?> btn btn-info">Employees</a>
            <a href="?c=dep" class=" <?= $c == 'dep' ? 'active' : '' ?> btn btn-info">Department</a>
            <?php if (empty($_SESSION['email'])) : ?>
            <button type="button" class="btn btn-success btn-round" data-toggle="modal"
                data-target="#loginModal">Login</button>
            <?php else : ?>
            <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#loginModal">
                <?= $_SESSION['name'] ?>
            </button>
            <a href="?c=auth&a=logout" class="btn btn-danger btn-round">Log out</a>
            <?php endif ?>
            <?php require 'layout/message.php' ?>
        </div>
        <br>