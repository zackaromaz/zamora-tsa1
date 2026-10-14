<?= view('partials/header', ['title' => $title]) ?>
<p class="eyebrow">User profile</p><h1>Profile</h1><p class="lead">The demo user for this task-management system.</p>
<section class="card profile"><?php if ($user): ?>
<div class="profile-row"><span>Username</span><strong><?= esc($user['username']) ?></strong></div>
<div class="profile-row"><span>Full name</span><strong><?= esc($user['full_name']) ?></strong></div>
<div class="profile-row"><span>Email</span><strong><?= esc($user['email']) ?></strong></div>
<div class="profile-row"><span>Member since</span><strong><?= esc($user['created_at']) ?></strong></div>
<?php else: ?><p class="empty">No demo user found.</p><?php endif; ?></section><?= view('partials/footer') ?>
