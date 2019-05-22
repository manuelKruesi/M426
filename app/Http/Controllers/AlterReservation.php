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
  public function handleRequest($reservationId,$start=null,$end=null)
  {
    if((!isset($start))&&(!isset($end))){
      $this->deleteReservation($reservationId);
    } else{
      $this->alterReservation($reservationId,$start,$end);
    }
  }

  /**
  *
  *
  *
  */
  private function deleteReservation($resId)
  {
    DB::delete('delete * from Reservation where reservationId=?',[$resId]);
  }

  /**
  * Alters the database entry of a reservation
  *@param $reservationId
  *
  */
  private function alterReservation($resId,$s,$e)
  {
    DB::update{'update'}
  }
}
