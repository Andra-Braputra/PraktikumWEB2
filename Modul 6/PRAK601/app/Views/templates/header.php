<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Praktikum CI4</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        nav { background: #333; padding: 10px; }
        nav a { color: white; margin-right: 15px; text-decoration: none; }
        .container { padding: 20px; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= base_url() ?>">Beranda</a>
        <a href="<?= base_url('profile') ?>">Profil</a>
    </nav>
    <div class="container">