<?php
// Authentication functions
function checkAuth() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
}

// Database helper functions
function getEmployeeList($pdo) {
    $stmt = $pdo->query("SELECT * FROM employees ORDER BY name ASC");
    return $stmt->fetchAll();
}

function getProjectStats($pdo) {
    $stmt = $pdo->query("SELECT 
        COUNT(*) as total_projects,
        SUM(CASE WHEN status = 'active' THEN 1 ELSE 0 END) as active_projects,
        AVG(completion_rate) as avg_completion_rate
        FROM projects");
    return $stmt->fetch();
}

// Date formatting functions
function formatIndonesianDate($date) {
    $months = array(
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    
    $date = new DateTime($date);
    return $date->format('d') . ' ' . $months[$date->format('n')] . ' ' . $date->format('Y');
}