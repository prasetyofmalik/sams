<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $employeeModel;
    protected $projectModel;
    protected $statsModel;

    public function __construct()
    {
        $this->employeeModel = new \App\Models\EmployeeModel();
        $this->projectModel = new \App\Models\ProjectModel();
        $this->statsModel = new \App\Models\StatsModel();
    }

    public function index()
    {
        $data = $this->loadDefaultData();
        $data['stats'] = $this->statsModel->getDashboardStats();
        $data['recentProjects'] = $this->projectModel->getRecentProjects();
        
        return view('dashboard/index', $data);
    }

    public function calendar()
    {
        $data = $this->loadDefaultData();
        $data['events'] = $this->projectModel->getCalendarEvents();
        
        return view('dashboard/calendar', $data);
    }

    public function stats()
    {
        $data = $this->loadDefaultData();
        $data['employeeStats'] = $this->statsModel->getEmployeeStats();
        $data['projectStats'] = $this->statsModel->getProjectStats();
        
        return view('dashboard/stats', $data);
    }
}