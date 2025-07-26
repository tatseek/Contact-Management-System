<!--
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
    echo "Contact saved successfully!";

    // Redirect back to index.html
    header("Location: index.html");
    exit();
}
?>

-->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    $xmlFile = 'contacts.xml';
    if (!file_exists($xmlFile)) {
        $xml = new SimpleXMLElement('<contacts></contacts>');
    } else {
        $xml = simplexml_load_file($xmlFile);
    }

    $contact = $xml->addChild('contact');
    $contact->addChild('name', $name);
    $contact->addChild('phone', $phone);
    $contact->addChild('address', $address);
    $contact->addChild('email', $email);
    $contact->addChild('dob', $dob);

    $xml->asXML($xmlFile);
    echo 'Contact saved successfully!';
    header("Location: index.html");
exit;
}
?>
<!--
<?php

function save_contact($name, $phone, $email, $address, $dob) {
    // Load XML file
    $xml = simplexml_load_file("contacts.xml") or die("Error: Cannot create object");
    
    // Create a new contact element
    $contact = $xml->addChild('contact');
    $contact->addChild('name', $name);
    $contact->addChild('phone', $phone);
    $contact->addChild('email', $email);
    $contact->addChild('address', $address);
    $contact->addChild('dob', $dob);
    
    // Save the updated XML file
    $xml->asXML('contacts.xml');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the contact data from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    
    // Save the contact
    save_contact($name, $phone, $email, $address, $dob);
    
    echo "Contact saved successfully!";
}
?>
-->
