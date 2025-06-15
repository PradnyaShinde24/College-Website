<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--cdn-> contanet delivery network css file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="Datatables/Main_Jquery.js"></script>
    <script src="Datatables/datatables.js"></script>
    <link rel="stylesheet" href="Datatables/datatables.css" />

    <title>ADMIN DASHBOARD</title>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>ADMIN DASHBOARD</h2>
                    <h3>Enquiry Form Data</h3>
                </div>
            </div>

            <div class="row">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="wrapper">
                                    <table id="myTable">
                                        <!-- ... your existing table content ... -->
                                        <thead >
                                            <tr>
                                                <th>Enquiry Date</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Address</th>
                                                <th>Class 10th or 12th</th>
                                                <th>Contact Number</th>
                                                <th>Department</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                        <?php
                                                require 'connection.php';

                                                $encryption_key = 'usoftsabdevajit';
                                                $cipher_method = 'AES-256-CBC';

                                                // Decrypt function (define only once)
                                                function decryptData($encryptedData, $encryption_key) {
                                                    $data = base64_decode($encryptedData);
                                                    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
                                                    $iv = substr($data, 0, $ivLength);
                                                    $encryptedText = substr($data, $ivLength);
                                                    return openssl_decrypt($encryptedText, 'AES-256-CBC', $encryption_key, 0, $iv);
                                                }

                                                $sql = "SELECT * FROM enquiryform";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        $encrypted_first_Name = $row['First_Name'];
                                                        $encrypted_Last_Name = $row['Last_Name'];
                                                        $encrypted_Address = $row['Address'];
                                                        $encrypted_class = $row['Class'];
                                                        $encrypted_contacu_Number = $row['Contacut_Number'];
                                                        $encrypted_Department = $row['Department'];

                                                        $decrypted_first_Name = decryptData($encrypted_first_Name, $encryption_key);
                                                        $decrypted_Last_Name = decryptData($encrypted_Last_Name, $encryption_key);
                                                        $decrypted_Address = decryptData($encrypted_Address, $encryption_key);
                                                        $decrypted_class = decryptData($encrypted_class, $encryption_key);
                                                        $decrypted_contacu_Number = decryptData($encrypted_contacu_Number, $encryption_key);
                                                        $decrypted_Department = decryptData($encrypted_Department, $encryption_key);

                                                        echo "<tr>";
                                                        echo "<td>{$row['Enquiry_Date']}</td>";
                                                        echo "<td>{$decrypted_first_Name}</td>";
                                                        echo "<td>{$decrypted_Last_Name}</td>";
                                                        echo "<td>{$decrypted_Address}</td>";
                                                        echo "<td>{$decrypted_class}</td>";
                                                        echo "<td>{$decrypted_contacu_Number}</td>";
                                                        echo "<td>{$decrypted_Department}</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }

                                                $conn->close();
                                                ?>


                                        </tbody>
                                    </table>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

</html>