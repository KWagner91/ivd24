<?php
// Tutorial from Brad Traversy (https://github.com/bradtraversy/php_rest_myblog/blob/master/models/Post.php)
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once 'database.php';
include_once 'User.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$user = new User($db);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

$user->gender = $data->gender;
$user->firstName = $data->firstName;
$user->lastName = $data->lastName;
$user->address = $data->address;
$user->postCode = $data->postCode;
$user->city = $data->city;
$user->country = $data->country;
$user->company = $data->company;
$user->phone = $data->phone;
$user->mobilePhone = $data->mobilePhone;
$user->fax = $data->fax;
$user->email = $data->email;
$user->userName = $data->userName;
$user->password = $data->password;
$user->passwordRepeat = $data->passwordRepeat;

  // Create Category
if($user->create()) {
    http_response_code(201);
    echo json_encode($user);
    // Email (Tutorial from https://www.tutorialspoint.com/php/php_sending_emails.htm)
    /* $to = $data->email;
    $subject = "Ivd24 und Ebay Kleinanzeigen Registrierung";
    $message = "Vielen Dank für Ihre Registrierung";
    $header = "From:abc@somedomain.com \r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail ($to,$subject,$message,$header);
    if($retval == true) {
       echo "Message sent successfully...";
    } else {
       echo "Message could not be sent...";
    } */

} else {
    http_response_code(404);
    echo json_encode(array('message' => 'User Not Created'));
  }