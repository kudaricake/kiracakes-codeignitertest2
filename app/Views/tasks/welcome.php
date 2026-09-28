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
    <p>Date: <?= esc($today) ?></p>

    <?php if (empty($tasks)): ?>
        <p>No tasks scheduled for today.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?= esc($task['title']) ?>
                    (<?= esc($task['status']) ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
