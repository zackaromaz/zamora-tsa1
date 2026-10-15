<?= view('partials/header', ['title' => $title]) ?>
<p class="eyebrow">User accounts</p><h1>Users</h1>
<div class="actions"><p class="lead">Manage users and their profile avatars.</p><a class="button" href="<?= base_url('users/new') ?>">+ New user</a></div>
<?php if (session()->getFlashdata('message')): ?><div class="alert"><?= esc(session()->getFlashdata('message')) ?></div><?php endif; ?>
<?php if (session()->getFlashdata('error')): ?><div class="alert error"><?= esc(session()->getFlashdata('error')) ?></div><?php endif; ?>
<section class="card"><div class="table-wrap"><table><thead><tr><th>Avatar</th><th>Username</th><th>Full name</th><th>Email</th><th>Action</th></tr></thead><tbody>
<?php foreach ($users as $user): ?><tr><td><?php if (!empty($user['avatar']) && is_file(FCPATH . 'uploads/avatars/' . $user['avatar'])): ?><img class="avatar" src="<?= base_url('uploads/avatars/' . rawurlencode($user['avatar'])) ?>" alt="<?= esc($user['full_name']) ?> avatar"><?php else: ?><img class="avatar" src="<?= base_url('uploads/placeholder.svg') ?>" alt="Placeholder avatar"><?php endif; ?></td><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td><td><?= esc($user['email']) ?></td><td><a class="button secondary" href="<?= base_url('users/edit/' . $user['id']) ?>">Edit</a></td></tr><?php endforeach; ?>
</tbody></table></div></section><?= view('partials/footer') ?>
