<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
</head>
<body>
    <nav>
        <a href="<?= base_url('/') ?>">Welcome</a> |
        <a href="<?= base_url('tasks') ?>">All Tasks</a> |
        <a href="<?= base_url('profile') ?>">Profile</a> |
        <a href="<?= base_url('about') ?>">About</a>
    </nav>

    <h1><?= esc($title) ?></h1>
    <p>Username: <?= esc($user['username']) ?></p>
    <p>Full name: <?= esc($user['full_name']) ?></p>
    <p>Email: <?= esc($user['email']) ?></p>
</body>
</html>
