<?php
// require the Faker autoloader
require_once 'E:/OpenServer/vendor/fzaninotto/faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)
$link = mysqli_connect("localhost", "root", "", "super_web_project");
$link->set_charset("utf8");
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create("uk_UA");
$actions = 20;
//==================================FOR MANAGERS TABLE==========================
for($i = 0; $i<$actions; $i++){
$dateBirth = strval($faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years', $timezone = date_default_timezone_get())->format('Y-m-d'));
$positions = array('dean', 'minister', 'controller');
$position = array_rand($positions);
$position = $positions[$position];
$sql="INSERT INTO Admin
			(a_surname, a_name, a_fathname, a_datebirth, a_position, a_email, a_password) 
			VALUES('$faker->lastName', '$faker->firstNameMale','$faker->middleName', '$dateBirth', '$position', '$faker->safeEmail', '$faker->password')";
$result= mysqli_query($link, $sql);
}
// ==================================FOR DESIGNERS TABLE==========================
// for($i = 0; $i<$actions; $i++){
// $passport_number = intval($faker->numberBetween($min = 10000000, $max = 99999999));
// $salary = intval($faker->numberBetween($min = 3000, $max = 8000));
// $sql="INSERT INTO Designers
// 			(Designer_pasport_number, Surname, Name, Father_name, Salary, Gender, Email) 
// 			VALUES('$passport_number', '$faker->lastName', '$faker->firstNameMale', '$faker->middleName', '$salary' ,'Чол', '$faker->freeEmail')";
// $result= mysqli_query($link, $sql);
// }
// ==================================FOR CLIENTS TABLE==========================
// for($i = 0; $i<$actions; $i++){
// $dateBirth = strval($faker->dateTimeThisCentury->format('Y-m-d'));
// $sql="SELECT Manager_pasport_number FROM Managers ORDER BY RAND() LIMIT 1";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result)) {
//      $passport_number = strval($row[0]);
// }
// $salary = intval($faker->numberBetween($min = 3000, $max = 8000));
// $sql="INSERT INTO Clients
// 			( Surname, Name, Father_name, Birthday, Gender, Manager_pasport_number) 
// 			VALUES( '$faker->lastName',
// 			 '$faker->firstNameMale', '$faker->middleName', '$dateBirth','Чол', '$passport_number')";
// $result= mysqli_query($link, $sql);
// }
// ==================================FOR PICTURES TABLE==========================
// for($i = 0; $i<$actions; $i++){
// $dateMade = strval($faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get())->format("Y-m-d H:i:s"));
// $styles = array('Колаж', 'Поп-арт' ,'Портрет');
// $style = array_rand($styles);
// $style = $styles[$style];
// $sql="SELECT Designer_pasport_number FROM Designers ORDER BY RAND() LIMIT 1";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result)) {
//      $passport_number = strval($row[0]);
// }
// $width = intval($faker->numberBetween($min = 300, $max = 900));
// $height = intval( $faker->numberBetween($min = 200, $max = 600));
// $categories = array( 'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife', 'fashion', 'people', 'nature', 'technics', 'transport');
// $categorie = array_rand($categories);
// $categorie = $categories[$categorie];
// $myFile = $faker->imageUrl($width, $height, $ca);
// $price = intval($faker->numberBetween($min = 200, $max = 900));
// $sql="INSERT INTO Pictures
// 			( Date_made, File, Style, Price, Designer_pasport_number) 
// 			VALUES(  '$dateMade', '$myFile','$style','$price', '$passport_number')";
// $result= mysqli_query($link, $sql);
// }
// ==================================FOR ORDERS TABLE==========================
// for($i = 0; $i<$actions; $i++){
// $dateOrder = strval($faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get())->format("Y-m-d H:i:s"));
// $sql="SELECT Manager_pasport_number FROM Managers ORDER BY RAND() LIMIT 1";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result)) {
//      $passport_number = strval($row[0]);
// }
// $town = $faker->city;
// $street = $faker->streetName ;
// $house = rand(1, 95);
// $sql="INSERT INTO Orders
// 			( Order_Date, Town, Street, House, Manager_pasport_number) 
// 			VALUES(  '$dateOrder', '$town','$street','$house', '$passport_number')";
// $result= mysqli_query($link, $sql);
// }
// ==================================FOR Phone_numbers TABLE==========================
// $sql="SELECT Manager_pasport_number FROM Managers ";
// $result = mysqli_query($link, $sql);
// $j = 0;
// $passport_number = array();
// while ($row = mysqli_fetch_array($result)) {
//      $passport_number[$j] = strval($row[0]);
//      $j++;
// }
// for($i = 0; $i<$actions; $i++){
// $dateOrder = strval($faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get())->format("Y-m-d H:i:s"));
// $mobile= $faker->phoneNumber;
// $home= $faker->phoneNumber;
// $sql="INSERT INTO Phone_numbers
// 			( Mobile, Home, Manager_pasport_number) 
// 			VALUES(  '$mobile', '$home', '$passport_number[$i]')";
// $result= mysqli_query($link, $sql);
// }
// ==================================FOR CHEKS TABLE==========================
// for($i = 0; $i<$actions; $i++){
// $count = rand(1,5);
// $sql="SELECT Picture_id FROM Pictures ORDER BY RAND() LIMIT 1";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result)) {
//      $picture_number = strval($row[0]);
// }
// $sql="SELECT Price FROM Pictures WHERE Picture_id = $picture_number";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result)) {
//      $picture_price = intval($row[0]);
// }
// $total_price = $count * $picture_price;
// $sql="SELECT Order_id FROM Orders ORDER BY RAND() LIMIT 1";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result)) {
//      $order_number = strval($row[0]);
// }
// $sql="INSERT INTO Cheks
// 			( Count, Total_price, Picture_number, Order_number) 
// 			VALUES(  '$count', '$total_price','$picture_number', '$order_number')";
// $result= mysqli_query($link, $sql);
// }