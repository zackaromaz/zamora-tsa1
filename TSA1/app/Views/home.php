<?= view('partials/header', ['title' => $title]) ?>
<p class="eyebrow">Daily dashboard</p>
<h1>Welcome back.</h1>
<p class="lead">Here are the tasks scheduled for today, <?= esc(date('F j, Y')) ?>.</p>
<section class="card"><h2>Today's tasks</h2>
<?php if ($tasks): ?><div class="table-wrap"><table><thead><tr><th>Task</th><th>Status</th><th>Date</th></tr></thead><tbody>
<?php foreach ($tasks as $task): ?><tr><td><?= esc($task['title']) ?></td><td><span class="badge"><?= esc(ucfirst($task['status'])) ?></span></td><td><?= esc($task['task_date']) ?></td></tr><?php endforeach; ?>
</tbody></table></div><?php else: ?><p class="empty">No tasks are scheduled for today.</p><?php endif; ?></section>
<?= view('partials/footer') ?>
