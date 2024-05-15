<?php
session_start();
$url = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => '6Le8XEohAAAAALSXJcHLWG4clfh2DvA8sgNfhQRR',
    'response' => $_GET['token'],
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$res = json_decode($response, true);

if ($res['success'] != true) {
    echo "fail";
    return false;
}

if (isset($_GET['name'])) {

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $message = $_GET['message'];






    // Please Set Your Mail
    $domain_name = str_replace("www.", "", $_SERVER['SERVER_NAME']);
    $to = "office@$domain_name";
    $subject = "Contact Request From $domain_name";
    $m = "
		<table border='1'>
		  <tr>
		    <td> $name </td>
		    <td> $email </td>
		    <td> $phone </td>
		    <td> $message </td>
		    
		  </tr>
		</table>
	";
    $m = rawurldecode($m);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to, $subject, $m, $headers);
    mail('andrewlavender106@gmail.com', $subject, $m, $headers);
    // Set the session variable
    $_SESSION['success'] = "Message sends successfully.";

    // Redirect back to the previous page
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit(); // Make sure to exit after the redirection
}

