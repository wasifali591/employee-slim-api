<?php
    $app->put('/api/put-employee/{id}', function ($request,$response) {
        require_once('dbconnect.php');

        require_once('dbconnect.php');
        $id = $request->getAttribute('id');
        $query = "UPDATE `employee` SET `FullName` = ?, `EmpCode` = ?, `Mobile` = ?,`Position`=? WHERE `EmployeeID` = $id";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssss", $FullName, $EmpCode, $Mobile,$Position);
        $FullName = $request->getParsedBody()['FullName'];
        $EmpCode = $request->getParsedBody()['EmpCode'];
        $Mobile = $request->getParsedBody()['Mobile'];
        $Position = $request->getParsedBody()['Position'];
        $result=$stmt->execute();
        return $response->withJSON($result,200);
    });
?>