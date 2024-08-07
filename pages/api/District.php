<?php 
    require 'connection.php';

    function getDistrictList($statename){
        global $conn;


        // $statename = 'state'; // define the state name

        // var_dump($statename); // inspect the state name

        $query = "SELECT distinct district from pincode_data where state='".$statename ."'";
        // $query = "SELECT distinct pincode from pincode_data";
        $query_run = mysqli_query($conn, $query);
        // print_r($query_run);      

        if (!$query_run) {
            echo "Error: " . mysqli_error($conn);
        }

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){

                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                $data = [
                    'status' => 200,

                    'message' => 'District found successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 District found successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No District found',
                ];
                header("HTTP/1.0 404 No District found");
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