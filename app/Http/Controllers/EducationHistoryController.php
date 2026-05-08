<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EducationHistoryController extends Controller
{
    public function index()
    {
        $educations = DB::table('education_histories')->get();
      return view('education', [
          'educations' => $educations
     ]);

}}




