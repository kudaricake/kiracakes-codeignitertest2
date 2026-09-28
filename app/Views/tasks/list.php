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

    <table border="1" cellpadding="6">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Task Date</th>
            <th>Created At</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
                <td><?= esc($task['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
