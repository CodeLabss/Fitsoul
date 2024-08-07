<?php 
    require 'connection.php';
    // require 'state.php';
    // require 'District.php';

    function getOfficeList($districtname, $statename){
        global $conn;
        
        $query = "SELECT distinct officename from pincode_data where state='".$statename ."' AND district='".$districtname ."' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            if(mysqli_num_rows($query_run) > 0){

                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                $data = [
                    'status' => 200,
                    'message' => 'office name found successfully',
                    'data' => $res
                ];
                header("HTTP/1.0 200 office name found successfully");
                return json_encode($data);
            }
            else{
                $data = [
                    'status' => 404,
                    'message' => 'No office name found',
                ];
                header("HTTP/1.0 404 No office name found");
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