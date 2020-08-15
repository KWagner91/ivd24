<?php
require 'database.php';

// Get the posted data.
$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  // Extract the data.
  $request = json_decode($postdata);

 /*  // Validate.
  if(trim($request->number) === '' || (float)$request->amount < 0)
  {
    return http_response_code(400);
  } */

  // Sanitize.
  $gender = mysqli_real_escape_string($con, trim($request->gender));
  $firstName = mysqli_real_escape_string($con, trim($request->firstName));
  $lastName = mysqli_real_escape_string($con, trim($request->lastName));
  $address = mysqli_real_escape_string($con, trim($request->address));
  $postCode = mysqli_real_escape_string($con, trim($request->postCode));
  $city = mysqli_real_escape_string($con, trim($request->city));
  $country = mysqli_real_escape_string($con, trim($request->country));
  $company = mysqli_real_escape_string($con, trim($request->company));
  $phone = mysqli_real_escape_string($con, trim($request->phone));
  $mobilePhone = mysqli_real_escape_string($con, trim($request->mobilePhone));
  $fax = mysqli_real_escape_string($con, trim($request->fax));
  $email = mysqli_real_escape_string($con, trim($request->email));
  $userName = mysqli_real_escape_string($con, trim($request->userName));
  $password = mysqli_real_escape_string($con, trim($request->password));
  $passwordRepeat = mysqli_real_escape_string($con, trim($request->passwordRepeat));

  // Create.
  $sql = "INSERT INTO `registeredUsers`(`id`, `gender`,`firstName`,`lastName`, `address`, `postCode`, `city`, `country`, `company`, `phone`, `mobilePhone`, `fax`, `email`, `userName`, `password`, `passwordRepeat`)
  VALUES (null,'{$gender}','{$firstName}', '{$lastName}', '{$address}', '{$postCode}', '{$city}', '{$country}', '{$company}', '{$phone}', '{$mobilePhone}', '{$fax}', '{$email}', '{$userName}', '{$password}', '{$passwordRepeat}')";

  if(mysqli_query($con,$sql))
  {
    http_response_code(201);
    $registeredUsers = [
      'gender' => $gender,
      'firstName' => $firstName,
      'lastName' => $lastName,
      'address' => $address,
      'postCode' => $postCode,
      'city' => $city,
      'country' => $country,
      'company' => $company,
      'phone' => $phone,
      'mobilePhone' => $mobilePhone,
      'fax' => $fax,
      'email' => $email,
      'userName' => $userName,
      'password' => $password,
      'passwordRepeat' => $passwordRepeat,
      'id'    => mysqli_insert_id($con)
    ];
    echo json_encode($registeredUsers);
  }
  else
  {
    http_response_code(422);
  }
}