<?php
require('./instamojo.php');
const API_KEY ="test_6cdda13e21f809965c8bbdef4f4";
const AUTH_TOKEN = "test_39088122de736fadf144bbc62ed";


if(isset($_POST['purpose']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount']))
{
    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['amount'],
            "send_email" => true,
            "email" => $_POST['email'],
            "redirect_url" => "http://localhost:8081/Shopping/success.html"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>