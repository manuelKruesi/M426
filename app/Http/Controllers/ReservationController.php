<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
  /**
  * Handles the reservations
  *
  * @param  int  $id
  * @return Response
  */
  public function handleReservation($handleId,$roomId,$eventId,$reservationId=null)
  {
    switch ($handleId) {
      case 1://delete reservation

        break;

      case 2://make reservation
        $this->makeReservation($roomId,$eventId)
        break;

      default:
        // code...
        break;
    }
  }

  /**
  *Handles the creation of Reservations
  *
  *@param int $room
  *
  */
  private function makeReservation($roomId,$eventId)
  {
    DB::insert('insert into Reservation (eventId,roomId) values (?,?)',[$eventId,$roomId]);
  }
}
