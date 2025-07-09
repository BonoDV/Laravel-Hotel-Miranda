<?php
namespace App\Http\Controllers;

use App\Models\Room;

class OffersController extends Controller
{
    public function index()
    {
        $offers = Room::where('offer', 'YES')->get();
        return view('offers.offers', compact('offers'));
    }
}
