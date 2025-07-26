<?php
// save_contact.php
header('Content-Type: text/plain');
$xmlFile = 'contacts.xml';

function save_contact($name, $phone, $email, $address, $dob) {
    global $xmlFile;

    if (!file_exists($xmlFile)) {
        $xml = new SimpleXMLElement('<contacts></contacts>');
    } else {
        $xml = simplexml_load_file($xmlFile);
    }

    $contact = $xml->addChild('contact');
    $contact->addChild('name', $name);
    $contact->addChild('phone', $phone);
    $contact->addChild('email', $email);
    $contact->addChild('address', $address);
    $contact->addChild('dob', $dob);

    $xml->asXML($xmlFile);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];

    save_contact($name, $phone, $email, $address, $dob);

    // Redirect back to index.html after saving
    header("Location: index.html");
    exit();
}
