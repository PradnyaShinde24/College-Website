<?php
require 'connection.php';

if (isset($_POST['submit'])) {
    $first_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $Address = $_POST["Address"];
    $class = $_POST["class"];
    $contacu_Number = $_POST["CN_Name"];
    $Department = $_POST["Dep_Name"];

    $cont10digit = 10;
    if (strlen($contacu_Number) != $cont10digit) {
        echo "<script>alert('Please Enter 10 Digit Number.');</script>";
    } else {
        $encryption_key = 'usoftsabdevajit';
        $cipher_method = 'AES-256-CBC';
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));

        $encrypted_first_Name = openssl_encrypt($first_Name, $cipher_method, $encryption_key, 0, $iv);
        $encrypted_Last_Name = openssl_encrypt($Last_Name, $cipher_method, $encryption_key, 0, $iv);
        $encrypted_Address = openssl_encrypt($Address, $cipher_method, $encryption_key, 0, $iv);
        $encrypted_class = openssl_encrypt($class, $cipher_method, $encryption_key, 0, $iv);
        $encrypted_contacu_Number = openssl_encrypt($contacu_Number, $cipher_method, $encryption_key, 0, $iv);
        $encrypted_Department = openssl_encrypt($Department, $cipher_method, $encryption_key, 0, $iv);

        $encrypted_first_Name = base64_encode($iv . $encrypted_first_Name);
        $encrypted_Last_Name = base64_encode($iv . $encrypted_Last_Name);
        $encrypted_Address = base64_encode($iv . $encrypted_Address);
        $encrypted_class = base64_encode($iv . $encrypted_class);
        $encrypted_contacu_Number = base64_encode($iv . $encrypted_contacu_Number);
        $encrypted_Department = base64_encode($iv . $encrypted_Department);

        $InsertData = "INSERT INTO `enquiryform` (`First_Name`, `Last_Name`, `Address`, `Class`, `Contacut_Number`, `Department`) 
                        VALUES ('$encrypted_first_Name', '$encrypted_Last_Name', '$encrypted_Address', '$encrypted_class', '$encrypted_contacu_Number', '$encrypted_Department')";
        
        if ($conn->query($InsertData)) {
            echo "<script>
                    if (confirm('Successfully Submitted.')) {
                        window.location.href = 'contactus.php';
                    }
                  </script>";
        } else {
            echo "<script>alert('Error while submitting data.');</script>";
        }
    }
}
?>
