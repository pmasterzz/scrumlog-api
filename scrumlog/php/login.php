<?php

session_start();
    if(isset($_POST['submit'])) {
        $_SESSION['login'] = 'ingelogd';
        login();
        //header("Location: ../home.php?page=scrumloginvullen");
        
    }
    else{
       header("Location: http://www.google.nl");
    }
function login(){    
    $url = 'http://localhost/scrumlog-api/index.php/api/login';
    $fields = array(
            'username' => urlencode($_POST['form-username']),
            'password' => urlencode($_POST['form-password']),
    );

    $fields_string = "";
    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    //execute post
    $result = curl_exec($ch);

    curl_close($ch);

    $res = json_decode($result, true);

    echo $res['Token'];

    //close connection
    
}