<?= view('partials/header', ['title' => $title]) ?>
<?php $validation = service('validation'); ?>
<p class="eyebrow">Customer form</p><h1><?= $customer ? 'Edit customer' : 'New customer' ?></h1><p class="lead">Required fields are validated before the record is saved.</p>
<?php if ($validation->getErrors()): ?><div class="alert error"><?php foreach ($validation->getErrors() as $error): ?><div><?= esc($error) ?></div><?php endforeach; ?></div><?php endif; ?>
<section class="card"><form class="form-grid" method="post" action=""><input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
<div class="field"><label for="full_name">Full name</label><input id="full_name" name="full_name" value="<?= esc(old('full_name', $customer['full_name'] ?? '')) ?>" required><?php if ($validation->hasError('full_name')): ?><span class="error"><?= esc($validation->getError('full_name')) ?></span><?php endif; ?></div>
<div class="field"><label for="email">Email</label><input id="email" type="email" name="email" value="<?= esc(old('email', $customer['email'] ?? '')) ?>" required><?php if ($validation->hasError('email')): ?><span class="error"><?= esc($validation->getError('email')) ?></span><?php endif; ?></div>
<div class="field"><label for="phone">Phone <small>(optional)</small></label><input id="phone" name="phone" value="<?= esc(old('phone', $customer['phone'] ?? '')) ?>"><?php if ($validation->hasError('phone')): ?><span class="error"><?= esc($validation->getError('phone')) ?></span><?php endif; ?></div>
<div><button class="button" type="submit">Save customer</button> <a class="button secondary" href="<?= base_url('customers') ?>">Cancel</a></div></form></section><?= view('partials/footer') ?>
