<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Certificate;
use App\Models\WorkExperience;
use App\Models\Activity;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $certificates_programming = Certificate::where('category', 'programming')->get();
        $certificates_academic = Certificate::where('category', 'academic')->get();
        $work_experiences = WorkExperience::orderByDesc('id')->get();
        $activities = Activity::orderByDesc('id')->get();
        $name = 'Muhamad Ammar Raihan Ardiyanto';
        $job_position = 'Junior Developer';

        return view('cv-web', compact(
            'projects',
            'certificates_programming',
            'certificates_academic',
            'work_experiences',
            'activities',
            'name',
            'job_position'
        ));
    }
}
