<?php 

# TODO: quando riceve una POST, questa API deve salvare la riga nel DB
# TODO: quando riceve una GET, questa API deve fornire la tabella delle posizioni in formato JSON

if($_SERVER['REQUEST_METHOD'] == 'GET') {
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

}

?>