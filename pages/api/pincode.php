<?php 
    require 'connection.php';

    function getPincodeList($districtname, $statename, $officename){
        global $conn;
        
        $query = "SELECT distinct pincode from pincode_data where state='".$statename ."' AND district='".$districtname ."' AND officename='".$officename ."' ";
        // $pincode = trim($office['pincode']);

        $query_run = mysqli_query($conn, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){

                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                $data = [
                    'status' => 200,
                    'message' => 'Pincode found successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 Pincode found successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No Pincode found',
                ];
                header("HTTP/1.0 404 No Pincode found");
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