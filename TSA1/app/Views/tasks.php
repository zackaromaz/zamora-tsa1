<?= view('partials/header', ['title' => $title]) ?>
<p class="eyebrow">Complete record</p><h1>Task list</h1><p class="lead">Every task in the system, ordered by scheduled date.</p>
<section class="card"><div class="table-wrap"><table><thead><tr><th>Task</th><th>Status</th><th>Task date</th><th>Created</th></tr></thead><tbody>
<?php foreach ($tasks as $task): ?><tr><td><?= esc($task['title']) ?></td><td><span class="badge"><?= esc(ucfirst($task['status'])) ?></span></td><td><?= esc($task['task_date']) ?></td><td><?= esc($task['created_at']) ?></td></tr><?php endforeach; ?>
</tbody></table></div></section><?= view('partials/footer') ?>
