<?php

function input_cleaner($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return preg_replace("/&#?[a-z0-9]+;/i","", $input); // Removes special chars.
 }

    $name = input_cleaner($_POST['name']);
    // echo var_dump($name);
    $company = input_cleaner($_POST['company-name']);
    $email = input_cleaner($_POST['email']);
    // echo var_dump($email);
    $telephone = input_cleaner($_POST['telephone']);
    $subject = input_cleaner($_POST['subject']);
    $message = input_cleaner($_POST['message']);

    try {
    // echo var_dump('test1');
    $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO user_information (name, company, email, telephone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
    // echo var_dump('test2');
    $stmt->bindParam( 1 , $name, PDO::PARAM_STR);
    $stmt->bindParam( 2 , $company, PDO::PARAM_STR);
    $stmt->bindParam( 3 , $email, PDO::PARAM_STR);
    $stmt->bindParam( 4 , $telephone, PDO::PARAM_STR);
    $stmt->bindParam( 5 , $subject, PDO::PARAM_STR);
    $stmt->bindParam( 6 , $message, PDO::PARAM_STR);
    // echo var_dump($_POST);
    // var_dump($stmt);
    $stmt->execute();
    } catch (Exception $e) {
        echo "This is an Execption Test";
        // echo var_dump('Hello');
    }