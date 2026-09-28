<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
</head>
<body>
    <h1><?= esc($title) ?></h1>
    <p>These records are loaded from the <code>users</code> table.</p>

    <table border="1" cellpadding="6">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
