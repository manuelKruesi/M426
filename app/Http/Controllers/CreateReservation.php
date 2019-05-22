<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateReservation extends Controller
{
  public function __invoke($roomId,$eventId,$start,$end)
  {
    DB::insert('insert into Reservation (eventId,roomId,start,end) values (?,?,?,?)',[$eventId,$roomId,$start,$end]);
  }
}
