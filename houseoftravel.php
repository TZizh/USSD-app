    <?php
    include ("php_fpm.php");
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the 1st menu screen
if ( $text == "" ) {
$response  = "CON Hi welcome, How can we be of assistance today \n";
$response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the 1st menu
// Will be brought to this 2nd menu screen
if ($text == "1") {
    $response  = "CON  WELCOME TO THE HOUSE OF TRAVEL . PLIZ SELECT WHAT YOU WOULD LIKE TO DO \n";
    $response .= "1. HOTELS \n";
    $response .= "2. TRANSPORT \n";
    $response .= "3. ACTIVITIES \n";
}
// Menu for a user who selects '1' from the 2nd menu
// Will be brought to this 3rd menu screen
if ($text == "1*1") {
$response  = "CON  Pick your destination location \n";
$response .= "1. KARIBA \n";
$response .= "2. VICTORIA FALLS \n";
$response .= "3. NYANGA \n";
}
//Menu for a user who selects '1' from the 3rd menu above
// Will be brought to this 4th menu screen
if ($text == "1*1*1") {
$response = "CON THESE ARE THE HOTELS THAT ARE AVAILABLE IN KARIBA. PLIZ SELECT THE HOTEL YOU WOULD LIKE TO BOOK \n";
$response .= "1. JECHA POINT FISHING LODGE\n";
$response .= "2. TIGER SAFARIS\n";
}
//Menu for a user who selects '1' from the 4th menu above
// Will be brought to this 5th menu screen
if ($text == "1*1*1*1") {
$response = "CON PLIZ SELECT THE ROOM YOU WOULD LIKE TO BOOK \n";
$response .= "1. STANDARD $80\n";
$response .= "2. DOUBLE ROOM $120\n";
$response .= "3. EXECUVTIVE SUITE $165\n";
$response .= "Enter 0 to cancel";
}
//Menu for a user who selects '1' from the 5th menu above
// Will be brought to this 6th menu screen
else if ($text == "1*1*1*1*1") {
$response = "CON PLIZ SELECT THE PLAYMENT METHOD YOU WOULD LIKE TO USE ";
$response .= "1. CASH\n";
$response .= "2. ECOCASH\n";
$response .= "3. INNBUCKS\n";
}
//Menu for a user who selects '1' from the 6th menu above
// Will be brought to this 7th menu screen
else if ($text == "1*1*1*1*1*1") {
$response = "CON THANK YOU FOR SELECTING THE CASH OPTION PLIZ BE NOTIFIED THAT YOUR BOOKING HAS BEEN PROCESSED AND PAYMENT WILL BE DONE AT UR DESTINATION HOTEL. PLIZ SELECT IF YOU WOULD LIKE TO CONTINUE USI NG THIS PLATFORM.";
$response .= "1. BACK TO 2nd MENU\n";
$response .= "2. TRANSPORT OPTIONS";
}
// Menu for a user who selects "2" from the 7th menu above
// Will be brought to this 8th menu screen
else if ($text == "1*1*1*1*1*1*2") {
$response = "CON PLIZ SELECT THE MODE OF TRANSPORT YOU WOULD LIKE TO USE  \n";
$response .= "1. ROAD TRANSPORT \n";
$response .= "2. AIR TRANSPORT \n";
}
// Menu for a user who selects "2" from the 8th menu above
// Will be brought to this 9th menu screen
else if ($text == "1*1*1*1*1*1*2*2") {
    $response = "CON PLIZ SELECT YOUR DESIRED SERVICE PROVIDER \n";
    $response .= "1. AIRZIM \n";
    $response .= "2. FAST JET \n";
    $response .= "3. SAA \n";
}
// Menu for a user who selects "1" from the 9th menu above
// Will be brought to this 10th menu screen
else if ($text == "1*1*1*1*1*1*2*2*1") {
    $response = "CON YOU HAVE SELECTED TO AIRZIM AS YOUR TRANSPORT PROVIDER PLIZ DO CONTACT THEM VIA THE FOLLOWING INFORMATTION P.O.BOX AP1, Harare, Zimbabwe.
    Email: reservations@airzimbabwe.aero
    Tel: +263-24-2575 021, +263-8688007438/39
    VoIP: +263-8688007438/39
    Mobile: +263 716801440/441 \n";
    $response .= "1. MOVE TO BOOK ACTIVITIES TO ENJOY AND YOUR LOCATION \n";
    $response .= "2. CANCEL SESSION \n";

}
// Menu for a user who selects "1" from the 10th menu above
// Will be brought to this 11th menu screen
else if ($text == "1*1*1*1*1*1*2*2*1") {
    $response = "CON SELECT THE ACTIVITIE YOU WOULD LIKE TO PARTAKE IN AT YOUR DESTINATION OF KARIBA \n";
    $response .= "1. QUADBIKE RIDES $10 \n";
    $response .= "2. BOAT CRUISE $85 \n";
    $response .= "3. SAFARI DRIVE $135 \n";
}
// Menu for a user who selects "2" from the 11th menu above
// Will be brought to this 12th menu screen
else if ($text == "1*1*1*1*1*1*2*2*1*2") {
    $response = "CON PLIZ SELECT YOUR PAYMENT METHOD \n";
    $response .= "1. CASH  \n";
    $response .= "2. INNBUCKS \n";
    $response .= "3. ECOCASH \n";
}
// Menu for a user who enters "1" from the 12th menu above
// Will be brought to this 13th menu screen
else if ($text == "1*1*1*1*1*1*2*2*1*2*1") {
$response = "CON PLIZ BE NOTIFIED THAT A BOOKING FOR YOUR ACTIVITY HAS BEEN SET AND PAYMENT FOR IT WILL BEEN DONE ON YOUR DAY OF ARRIVAL  \n";
    $response .= "0. END SESSION \n";
}
else if ($text == "1*1*1*1*1*1*2*2*1*2*1*0") {
    $response = "THANK YOU FOR USING OUR SERVICES AND WOULD LIKE TO WISH YOU A ENJOYABLE TIME AT YOUR TRAVEL DESTINATION";
}    
