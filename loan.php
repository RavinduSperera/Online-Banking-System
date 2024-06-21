<?php

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $name     = $_POST['name'];
    $nic     = $_POST['nic'];
    $age   = $_POST['age'];
    $phone    = $_POST['conatct'];
    $address   = $_POST['address'];
    $email    = $_POST['email'];
    $designation    = $_POST['designation'];
    $employer   = $_POST['employer'];
    $income    = $_POST['netIncome'];
    
    $sql = "INSERT INTO loan (name, nic, age, phone, address, email, designation, employer, income) VALUES ('$name', '$nic', '$age', '$phone', '$address', '$email','$designation', '$employer','$income')";

    $result = mysqli_query($conn, $sql);
        
    if($result)
    {
        // echo "User successfully created";
        header('location:login.html');
    }
    else{
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>
