<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modules</title>
    <link rel="stylesheet" href="/prak6/mvc/assets/css/style.css">
</head>
<body>
<table class="table-style">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($modules as $module): ?>
        <tr>
            <td><?php echo $module['id']; ?></td>
            <td><?php echo $module['name']; ?></td>
            <td><?php echo $module['description']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
