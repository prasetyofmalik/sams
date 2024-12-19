<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'SAMS - Sistem Aplikasi Manajemen Siak' ?></title>
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?= $this->renderSection('styles') ?>
</head>
<body class="bg-gray-50">
    <?= $this->include('layout/navbar') ?>
    
    <div class="min-h-screen">
        <?= $this->renderSection('content') ?>
    </div>
    
    <?= $this->include('layout/footer') ?>
    
    <!-- Scripts -->
    <script src="<?= base_url('js/app.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>