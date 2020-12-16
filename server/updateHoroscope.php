<?php
require "./signList.php";
try{
    session_start();
    
    if(isset($_SERVER["REQUEST_METHOD"])){
        
        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if (isset($_SESSION["zodiac"])){
                $month = $_POST["month"];
                $day = $_POST["day"];
                $zodiac = horoscopeCheck($month, $day);
                error_log($zodiac);
                $_SESSION["zodiac"] = serialize($zodiac);
                echo json_encode(true);
                exit;
            } else {
                echo json_encode(false);
                exit;
            }
        } else {
            echo json_encode(false);
        }
    }else {
        throw new Exception("error", 405);
    }

} catch (Exception $error){
    echo json_encode(
        array(
            "Message" => $error -> getMessage(),
            "Status" => $error -> getCode()
        )
    );
    exit;
}
?>

