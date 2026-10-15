<?= view('partials/header', ['title' => $title]) ?>
<p class="eyebrow">Editable POS</p><h1>Dashboard</h1><p class="lead">Manage customer and user accounts with validated forms.</p>
<div class="hero-grid"><a class="card hero-link" href="<?= base_url('customers') ?>"><h2>Customers</h2><p class="lead">Create and edit customer records.</p></a><a class="card hero-link" href="<?= base_url('users') ?>"><h2>Users</h2><p class="lead">Manage accounts and prepared avatars.</p></a></div>
<?= view('partials/footer') ?>
