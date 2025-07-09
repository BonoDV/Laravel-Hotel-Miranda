<?php
namespace App\Http\Controllers;

use App\Models\Room;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.rooms', compact('rooms'));
    }
}
