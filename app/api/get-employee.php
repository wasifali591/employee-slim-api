<?php 
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    $app->get('/api/get-employee', function ($request, $response) {
        require_once('dbconnect.php');
        $query = "select * from employee";
        $result = $mysqli->query($query);

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $response->withJSON($data, 200);
    });
?>