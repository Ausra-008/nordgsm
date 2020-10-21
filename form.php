<?php

//jei norim kad nerodytu array eilutes puslapyje, slepiam/trinam apacije uzrasyta funkcija
// print_r($_POST);

$sender_error = $name_error = $email_error = $phone_error = $delivery_error = "";
$sender = $name = $email = $phone = $delivery = $message = $success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['sender'])) {
        $sender_error = "<br>Pasirinkite siuntėją";
    }
}

if (empty($_POST["name"])) {
    $name_error = "Įveskite siuntėją";
}

if (empty($_POST["email"])) {
    $email_error = "Įveskite elektroninio pašto adresą";
} else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Neteisingas formatas";
    }
}

if (empty($_POST["phone"])) {
    $phone_error = "Įveskite telefono numerį";
} else {
    $phone = test_input($_POST["phone"]);
    if(!is_numeric($phone)){
        $phone_error = "Neteisingas formatas";
    }
}

if (empty($_POST["delivery"])) {
    $delivery_error = "Įveskite tikslų pristatymo adresą";
} else {
    $delivery = test_input($_POST["delivery"]);
}


if (empty($_POST["message"])) {
    $message = "";
} else {
    $message = test_input($_POST["message"]);
}

if ($sender_error == '' and $name_error == '' and $email_error == '' and $phone_error == '' and $delivery_error == '') {
    $message_body = '';
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
        $message_body .= "$key: $value\n\n";
    }
    $mailTo = "uabnordgsm@gmail.com";
    $subject = "Request from: " . $email;
    $txt = "You have received an email from " . $name . ".\n\n" . "Contact number " . $phone . ".\n\n" .
        "Delivery to " . $delivery . ".\n\n" . $message;
   
    if (mail($mailTo, $subject, $txt)) {
        $success = "Dėkojame, užklausa gauta. Susisieksime su Jumis!";
        $sender = $name = $email = $phone = $delivery = $message = '';
    }
    // header("Location: .../request.php");
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
