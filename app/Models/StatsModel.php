<?php

namespace App\Models;

use CodeIgniter\Model;

class StatsModel extends Model
{
    public function getDashboardStats()
    {
        $db = \Config\Database::connect();
        
        return [
            'total_employees' => $db->table('employees')->countAllResults(),
            'active_projects' => $db->table('projects')->where('status', 'active')->countAllResults(),
            'completion_rate' => $this->calculateCompletionRate()
        ];
    }

    public function getEmployeeStats()
    {
        $db = \Config\Database::connect();
        
        return [
            'by_division' => $db->table('employees')
                               ->select('division, COUNT(*) as count')
                               ->groupBy('division')
                               ->get()
                               ->getResultArray(),
            'by_status' => $db->table('employees')
                             ->select('status, COUNT(*) as count')
                             ->groupBy('status')
                             ->get()
                             ->getResultArray()
        ];
    }

    private function calculateCompletionRate()
    {
        $db = \Config\Database::connect();
        $result = $db->table('projects')
                    ->selectAvg('completion_rate')
                    ->where('status', 'active')
                    ->get()
                    ->getRowArray();
                    
        return round($result['completion_rate'] ?? 0, 2);
    }
}