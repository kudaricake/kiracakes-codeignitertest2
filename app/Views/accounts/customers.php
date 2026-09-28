<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
</head>
<body>
    <h1><?= esc($title) ?></h1>
    <p>These records are loaded from the <code>customers</code> table.</p>

    <table border="1" cellpadding="6">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
        </tr>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
                <td><?= esc($customer['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
