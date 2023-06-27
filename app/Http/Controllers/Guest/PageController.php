<?php

namespace App\Http\Controllers\Guest;

use Carbon\Carbon;
use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();
        // return view('home', [
        //     'trains' => $trains,
        // ]);
        foreach ($trains as $train) {
            $train->formattedDate = Carbon::createFromFormat('Y-m-d', $train->arrival_date)->format('d-m-Y');
        // ------richiamare {{ $movie->formattedDate }} in HTML
        }
        return view('home', compact('trains'));
    }
}

