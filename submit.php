<?php
   

   if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $phone = $_POST['phone'];
      
    //    0102085130600
     $phonePattern = '/^01[0-2,5]{1}[0-9]{8}$/';
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
    // example on password 
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'; 
    // Eslam#123

     if(!preg_match($phonePattern, $phone)){
         header('Location: index.php?error=phone');
            exit();}
     if(!preg_match($emailPattern, $email)){
            header('Location: index.php?error=email');
                exit();
     }
     if(!preg_match($passwordPattern, $password)){
        header('Location: index.php?error=password');
            exit();
     } 

     
         $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => sha1($password)
    ];

    
    $file = 'data.json';

    if (file_exists($file)) {
        $jsonData = json_decode(file_get_contents($file), true);
        if (!is_array($jsonData)) {
            $jsonData = [];
        }
    } else {
        $jsonData = [];
    }

    $jsonData[] = $data;

    file_put_contents($file, json_encode($jsonData, JSON_PRETTY_PRINT));

    header("Location: index.php?success=1");

     
        
   }