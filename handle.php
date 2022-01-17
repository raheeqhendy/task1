<?php
$firstname = $_POST ['first-name'];
$secondname= $_POST ['last-name'];
$emailaccount=$_POST ['email-mobile'];
$pass=$_POST ['up-password'];
$dayofbirth= $_POST ['birth-day'];
$monthofbirth=$_POST ['birth-month'];
$yearofbirth=$_POST ['birth-year'];
$gender=$_POST['gen'];

echo "your first name is $firstname and your second name is $secondname .<br/>" ;
echo "your email address is : $emailaccount .<br/>";
echo "your password is : $pass .<br/>";
echo "you were born in $dayofbirth "; echo $monthofbirth; echo "$yearofbirth .<br/>";
echo "and you are a sweet $gender";

//الخطأ 404 يشتغل مع طباعة المصفوفة 
if (isset ($_POST['register'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
else 
{
    echo "error 404";
}


?>