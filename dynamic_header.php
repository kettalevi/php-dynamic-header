<?php
require_once __DIR__ . '/config/menu.php';

$current_page = basename($_SERVER['PHP_SELF'] ?? '');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.navbar {
    display: flex;
    background: #1f2937;
    padding: 10px;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    margin-right: 5px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.navbar a:hover {
    background: #374151;
    border-radius: 5px;
}

.navbar a.active {
    background: #2563eb;
    border-radius: 5px;
}
</style>

<div class="navbar">

<?php if (!empty($menu) && is_array($menu)): ?>

<?php foreach ($menu as $item): ?>

<?php
$link = $item['link'] ?? '#';
$title = $item['title'] ?? '';
$icon = $item['icon'] ?? '';
$is_active = ($current_page === basename($link)) ? 'active' : '';
?>

<a class="<?= $is_active ?>" href="<?= htmlspecialchars($link) ?>">
    <?php if ($icon): ?>
        <i class="<?= htmlspecialchars($icon) ?>"></i>
    <?php endif; ?>
    <?= htmlspecialchars($title) ?>
</a>

<?php endforeach; ?>

<?php endif; ?>

</div>
