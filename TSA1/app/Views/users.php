<!DOCTYPE html>
<html>
<head>
    <title>Users</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f6f9;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        }

        nav {
            margin-bottom: 15px;
        }

        nav a {
            text-decoration: none;
            color: #0d6efd;
            font-weight: bold;
            margin-right: 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: #0d6efd;
            color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>

<div class="container">

    <h1>User Accounts</h1>

    <nav>
        <a href="<?= base_url('home') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customers</a> |
        <a href="<?= base_url('users') ?>">Users</a> |
    </nav>

    <hr>

    <table>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
        </tr>

        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username']; ?></td>
            <td><?= esc($user['full_name']); ?></td>
            <td><?= esc($user['created_at']); ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>
