<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Staff;

class HomeController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function services()
    {
        $services = Service::where('status', 1)->get();

        return view('services.index', [
            'services' => $services
        ]);
    }

    public function prices()
    {
        return view('prices.index');
    }

    public function team()
    {
        $staff = Staff::where('status', 1)->get();

        return view('team.index', [
            'staff' => $staff
        ]);
    }

    public function contact()
    {
        return view('contact.index');
    }
}
