<?php
require_once 'db_connection.php'; 
require_once 'reservation_model.php'; 

class ReservationController {
    private $model;

    public function __construct() {
        global $conn; 
        $this->model = new ReservationModel($conn);
    }

    public function submitReservation($name, $email, $phone, $date, $time, $guests) {
        return $this->model->submitReservation($name, $email, $phone, $date, $time, $guests);
    }
}

// Create an instance of the controller
$reservationController = new ReservationController();
?>
