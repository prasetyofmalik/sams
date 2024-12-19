<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'position', 'division', 'status', 'email'];

    protected $validationRules = [
        'name' => 'required|min_length[3]',
        'position' => 'required',
        'division' => 'required',
        'email' => 'required|valid_email|is_unique[employees.email,id,{id}]'
    ];

    public function getActiveEmployees()
    {
        return $this->where('status', 'active')
                    ->orderBy('name', 'ASC')
                    ->findAll();
    }

    public function getEmployeesByDivision($division)
    {
        return $this->where('division', $division)
                    ->where('status', 'active')
                    ->findAll();
    }
}