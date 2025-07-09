<?php
namespace App\Http\Controllers;

class RoomDetailsController extends Controller
{
    public function index()
    {
        return view('rooms_details.rooms_details');
    }
}
