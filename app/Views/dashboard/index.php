<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<main>
    <!-- Hero Section -->
    <section class="hero-section text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Sistem Aplikasi Manajemen Siak</h1>
            <p class="text-xl mb-8">Mengelola workflow dan manajemen kantor secara efisien</p>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="stat-card bg-blue-50 p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-blue-800">Total Pegawai</h3>
                    <p class="text-3xl font-bold text-blue-600"><?= $stats['total_employees'] ?></p>
                </div>
                <div class="stat-card bg-green-50 p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-green-800">Proyek Aktif</h3>
                    <p class="text-3xl font-bold text-green-600"><?= $stats['active_projects'] ?></p>
                </div>
                <div class="stat-card bg-purple-50 p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-purple-800">Rata-rata Penyelesaian</h3>
                    <p class="text-3xl font-bold text-purple-600"><?= $stats['completion_rate'] ?>%</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Proyek Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($recentProjects as $project): ?>
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold mb-2"><?= esc($project['title']) ?></h3>
                    <p class="text-gray-600 mb-4"><?= esc($project['description']) ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Progress: <?= $project['completion_rate'] ?>%</span>
                        <span class="px-3 py-1 rounded-full text-sm <?= $project['status'] === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                            <?= ucfirst($project['status']) ?>
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection() ?>