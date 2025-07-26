<?php
header('Content-Type: text/html');
$xmlFile = 'contacts.xml';

if (file_exists($xmlFile)) {
    $xml = simplexml_load_file($xmlFile);
    $search = isset($_GET['search']) ? strtolower($_GET['search']) : '';

    foreach ($xml->contact as $contact) {
        if ($search === '' || stripos(strtolower($contact->name), $search) !== false) {
            echo "<li> Name: $contact->name | Phone: $contact->phone | Email: $contact->email | Address: $contact->address | DOB: $contact->dob <br>";
        }
    }
} else {
    echo 'No contacts found.';
}
?>

