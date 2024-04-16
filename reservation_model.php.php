<?php
class ReservationModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function submitReservation($name, $email, $phone, $date, $time, $guests) {
        $stmt = $this->conn->prepare("INSERT INTO reservations (name, email, phone, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $name, $email, $phone, $date, $time, $guests);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
