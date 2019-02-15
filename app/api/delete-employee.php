<?php
    $app->delete('/api/delete-employee/{id}', function ($request,$response) {
        require_once('dbconnect.php');
        $id = $request->getAttribute('id');
        $query = "DELETE FROM `employee` WHERE `EmployeeID`='$id'";
        $result = $mysqli->query($query);
        return $response->withJSON($result, 200);
    });
?>