<?php
require_once __DIR__ . '/config/menu.php';

$current_page = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.navbar {
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#1f2937;
    padding:10px 20px;
}

.nav-left {
    display:flex;
    align-items:center;
    gap:20px;
}

.nav-right {
    display:flex;
    align-items:center;
    gap:15px;
}

.navbar a {
    color:white;
    text-decoration:none;
    padding:8px 12px;
}

.navbar a.active {
    background:#2563eb;
    border-radius:5px;
}
.cards {
    display:flex;
    gap:20px;
    margin-top:20px;
}

.card {
    background:white;
    padding:20px;
    border-radius:8px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}
</style>

<div class="navbar">

<?php foreach ($menu as $item): ?>

<?php
$is_active = ($current_page == basename($item['link'])) ? "active" : "";
?>

<a class="<?= $is_active ?>" href="<?= $item['link'] ?>">
    <i class="<?= $item['icon'] ?>"></i>
    <?= $item['title'] ?>
</a>

<?php endforeach; ?>

</div>
