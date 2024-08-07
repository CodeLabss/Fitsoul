  <?php 

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization ');

include ('state.php');
$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){
    $stateList = getStateList();
    echo $stateList;
}else{
    $data = [
        'status' => 405,
        'message' => $requestMethod. "Method not allowed",
    ];
    header("HTTP/1.0 405 Method not allowed");
    echo json_encode($data);
}

?> 