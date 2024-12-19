<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <img src="<?= base_url('images/logo.png') ?>" alt="BPS Siak" class="h-10 w-auto">
                <span class="ml-3 text-xl font-semibold text-gray-800">SAMS</span>
            </div>
            <div class="hidden md:block">
                <div class="flex items-center space-x-4">
                    <?php
                    $nav_items = [
                        'dashboard' => 'Beranda',
                        'employees' => 'Kepegawaian',
                        'projects' => 'Proyek',
                        'reports' => 'Laporan',
                        'settings' => 'Pengaturan'
                    ];
                    
                    foreach ($nav_items as $url => $label):
                        $is_active = current_url(true)->getSegment(1) === $url;
                    ?>
                    <a href="<?= base_url($url) ?>" 
                       class="px-3 py-2 rounded-md text-sm font-medium <?= $is_active 
                           ? 'bg-gray-100 text-gray-900' 
                           : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' ?>">
                        <?= $label ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="p-2 rounded-full text-gray-600 hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center space-x-2 text-sm text-gray-700 hover:text-gray-900">
                        <img src="<?= base_url('images/avatar.png') ?>" alt="Profile" 
                             class="w-8 h-8 rounded-full">
                        <span class="font-medium"><?= $user['name'] ?? 'User' ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>