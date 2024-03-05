<?php
$error="";
$secret="6LfF6aQhAAAAAHYiBjDr4LYuu8jCjvpx7yHnuWnf";
$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["g-recaptcha-response"];
$verify = json_decode(file_get_contents($url));
if (!$verify->success) { $error = "Invalid captcha"; }
unset($_POST['g-recaptcha-response']);
// (C) SEND MAIL
if ($error=="") {
    $to = "info@scotlandtoppublishers.co.uk";
    $subject = "Lead from Scotland Top Publishers";
    $message = "
        <html><head>
        <style>#customers {font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;}#customers td, #customers th {border: 1px solid #ddd;padding: 8px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #2e8cb1;color: white;text-transform: capitalize;}</style>
        <title>Lead from Scotland Top Publishers</title>
        </head><body><table id='customers'>";
    foreach ($_POST as $k => $v)
        $message .= "
        <tr>
        <th>" . $k . "</th>
        <td>" . $v . "</td>
        </tr>
    ";
    $message .= "</table></body></html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <info@scotlandtoppublishers.co.uk>' . "\r\n";
    mail($to, $subject, $message, $headers);
    header('Location: ' . 'thank-you');
}
else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
