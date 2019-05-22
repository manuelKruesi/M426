<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlterReservation extends Controller
{
  /**
  * Handles the reservations
  *
  * @param  int  $id
  * @return Response
  */
  public function handleRequest($reservationId,$)
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
}
