<?php
$message = '';
$controlAlert = '';
if (!empty($_SESSION['success'])) {
    $message = $_SESSION['success'];
    $controlAlert = "alert-success";
    unset($_SESSION['success']);
} else if (!empty($_SESSION['error'])) {
    $message = $_SESSION['error'];
    $controlAlert = "alert-danger";
    unset($_SESSION['error']);
}
if ($message) : ?>
    <div class="alert <?= $controlAlert ?>"><?= $message ?></div>
<?php endif ?>