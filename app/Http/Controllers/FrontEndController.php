<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Member;

class FrontEndController extends Controller
{
    public function index(){
        $services_count=Service::all()->count();
        $members_count=Member::all()->count();
        $female_count=Member::all()->where('gender',1)->count();
        $male_count=Member::all()->where('gender',0)->count();

        return view('welcome')
        ->with('services_count', $services_count)
        ->with('members_count', $members_count)
        ->with('female_count',$female_count)
        ->with('male_count', $male_count);
    }
}
