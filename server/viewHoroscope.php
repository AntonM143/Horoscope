<?php


try{
session_start();

if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] === "GET") {

        if (isset($_SESSION["zodiac"])) {

            echo json_encode(unserialize($_SESSION["zodiac"]));
        } else {
            echo json_encode(false);
        }
    } else {
        echo json_encode("not a Get method");
    }
} else {
    echo json_encode("No valid request");
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