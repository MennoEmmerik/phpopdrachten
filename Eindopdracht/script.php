<?php
/*--------------------- MODULE HEADER --------------------

Auteur: <Menno Emmerik>
Aanmaakdatum: <19-4-2020>
Bestandsnaam: <script.php>
Versie: 1.0 Release

-----------------------------------------------------------*/
//Array aanmaken met gebruikersnaam en wachtwoord
$userAndPass = array("Menno2001" => "Emmerik2001", "Roos2000" => "roosCorduwener", "AimeeEmmerik" => "Aimee2810", "shadowRelic" => "Wouter98", "shadowStorm" => "poeperd123", "php321" => "php2020", "html2020" => "html321", "iLoveRoos" => "loveYouTo", "driveBoost" => "driverBoos2020", "officeWord" => "powerOffice");

//ophalen van de gebruikers naam en wachtwoord
$username = $_POST["username"];
$password= $_POST["password"];

//Loop die controleert op gebruikersnaam en wachtwoord
foreach($userAndPass as $name => $key)
{
    if($name == $username && $key == $password)
    {
        //Login niet meer laten showen
        $showLoginScreen = false;
    }
//Als de gebruikersnaam en wachtwoord niet kloppen wordt dit weergegeven
    else
    {
        $message = "De gebruiksnaam of wachtwoord is onjuist";
    }
}