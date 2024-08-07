<?php 
    require 'connection.php';

    function getstateList(){
        global $conn;

        $query = "SELECT distinct state from pincode_data";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){

                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                $data = [
                    'status' => 200,

                    'message' => 'State found successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 State found successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No state found',
                ];
                header("HTTP/1.0 404 No state found");
                return json_encode($data);
            }
        }
        else{
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',
            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
?>