<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

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
        return view('team.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
