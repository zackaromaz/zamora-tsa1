<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        :root { --ink:#172033; --muted:#667085; --brand:#635bff; --soft:#f4f6fb; --line:#e5e7eb; }
        * { box-sizing:border-box; } body { margin:0; color:var(--ink); background:var(--soft); font-family:Inter,system-ui,-apple-system,"Segoe UI",sans-serif; }
        .shell { width:min(1050px, calc(100% - 32px)); margin:0 auto; } .topbar { background:#fff; border-bottom:1px solid var(--line); }
        .nav { display:flex; align-items:center; justify-content:space-between; gap:20px; min-height:72px; } .brand { color:var(--ink); text-decoration:none; font-weight:800; letter-spacing:-.03em; }
        .links { display:flex; gap:18px; flex-wrap:wrap; } .links a { color:var(--muted); text-decoration:none; font-size:.95rem; } .links a:hover { color:var(--brand); }
        main { padding:48px 0 64px; } .eyebrow { color:var(--brand); font-size:.78rem; font-weight:800; letter-spacing:.12em; text-transform:uppercase; }
        h1 { margin:8px 0 10px; font-size:clamp(2rem, 5vw, 3.4rem); letter-spacing:-.06em; } h2 { margin:0 0 8px; letter-spacing:-.03em; }
        .lead { color:var(--muted); margin:0 0 28px; } .card { background:#fff; border:1px solid var(--line); border-radius:18px; padding:24px; box-shadow:0 8px 28px rgba(23,32,51,.05); }
        .table-wrap { overflow-x:auto; } table { border-collapse:collapse; width:100%; } th, td { border-bottom:1px solid var(--line); padding:15px 12px; text-align:left; white-space:nowrap; } th { color:var(--muted); font-size:.78rem; letter-spacing:.08em; text-transform:uppercase; } tr:last-child td { border-bottom:0; }
        .badge { display:inline-block; border-radius:999px; padding:5px 10px; background:#eef0ff; color:#4d46c4; font-size:.8rem; font-weight:700; } .empty { color:var(--muted); padding:18px 0 4px; }
        .profile { display:grid; gap:10px; max-width:620px; } .profile-row { display:flex; justify-content:space-between; gap:20px; border-bottom:1px solid var(--line); padding:14px 0; } .profile-row span:first-child { color:var(--muted); }
        footer { color:var(--muted); text-align:center; padding:24px 0; font-size:.9rem; } @media (max-width:600px) { .nav { align-items:flex-start; flex-direction:column; padding:18px 0; } .profile-row { flex-direction:column; gap:5px; } }
    </style>
</head>
<body>
<header class="topbar"><div class="shell nav"><a class="brand" href="<?= base_url('/') ?>">Tasks for Today</a><nav class="links" aria-label="Main navigation">
    <a href="<?= base_url('/') ?>">Today</a><a href="<?= base_url('tasks') ?>">All Tasks</a><a href="<?= base_url('profile') ?>">Profile</a><a href="<?= base_url('about') ?>">About</a>
</nav></div></header>
<main class="shell">
