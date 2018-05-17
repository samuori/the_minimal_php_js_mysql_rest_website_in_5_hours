<?php
    $conn = mysqli_connect('localhost', 'root', '') or die('Connection error');
    mysqli_select_db($conn, 'esempio') or die('DB error');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Parse JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Insert data
        $sql = $conn->prepare("INSERT INTO posizione VALUES(1, 1, ".$data['lat'].", ".$data['lon'].", '')");
        $sql->execute();

    }else if($_SERVER['REQUEST_METHOD'] == 'GET') {
        header('Content-type: application/json;');
        echo '
            [
                {"id": 1, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 2, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 3, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 4, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 5, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 6, "user": "radeox", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 7, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"},
                {"id": 8, "user": "tapion", "lat": 43.3499293, "lon": 12.9138412, "timestamp": "now"}
            ]
        ';
        // TODO
        // $sql = $conn->prepare("SELECT * FROM posizione");
        // $sql->execute();

        // $result = $sql->get_result();
        // Giusto cosi? Bhooo
        // echo json_encode($result);
    }

    mysqli_close($conn);
?>
