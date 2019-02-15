<?php
    $app->post('/api/post-employee', function ($request,$response) {
        require_once('dbconnect.php');

        $query = "INSERT INTO `employee`(`FullName`,`EmpCode`,`Mobile`,`Position`) VALUES(?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssss", $FullName, $EmpCode, $Mobile,$Position);
        $FullName = $request->getParsedBody()['FullName'];
        $EmpCode = $request->getParsedBody()['EmpCode'];
        $Mobile = $request->getParsedBody()['Mobile'];
        $Position = $request->getParsedBody()['Position'];
        $result = $stmt->execute();
        return $response->withJSON($result,201);
    });
?>