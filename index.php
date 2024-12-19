<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

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
                    <p class="text-3xl font-bold text-blue-600">150</p>
                </div>
                <div class="stat-card bg-green-50 p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-green-800">Proyek Aktif</h3>
                    <p class="text-3xl font-bold text-green-600">12</p>
                </div>
                <div class="stat-card bg-purple-50 p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-purple-800">Tugas Selesai</h3>
                    <p class="text-3xl font-bold text-purple-600">89%</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Kalender Kegiatan</h2>
            <div class="calendar-container p-6">
                <!-- Your existing Google Calendar integration -->
                <iframe src="https://calendar.google.com/calendar/embed?src=your-calendar-id" 
                        style="border: 0" 
                        width="100%" 
                        height="600" 
                        frameborder="0" 
                        scrolling="no">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Employee Database Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Database Pegawai</h2>
            <div class="bg-white rounded-lg shadow-sm p-6">
                <!-- Add your employee database content here -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Divisi</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Add your employee data rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>