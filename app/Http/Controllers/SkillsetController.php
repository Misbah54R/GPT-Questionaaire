<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsetController extends Controller
{
    public function skillset() {
        return view('skillset');
}
}