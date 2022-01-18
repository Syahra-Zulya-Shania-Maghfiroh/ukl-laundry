<?php
$employee = [
    'Name' => 'Bobby ',
    'Address' => 'Malang ',
    'Phone' => '12345 ',
    'hobbies' => ['Tennis ', 'Football '],
    'profiles' => ['facebook' => 'bobsfb ', 'twitter' => 'bobstwt '],
];

echo $employee['Name']."<br>";
echo $employee['Address']."<br>";
echo $employee['Phone']."<br>";
echo $employee['hobbies'][0]."<br>"; //tennis
echo $employee['profiles']['twitter'];
?>