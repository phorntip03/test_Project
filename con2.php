<?php
include 'con1.php'; // เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $name = $conn->real_escape_string($_POST['name']);
    $surname = $conn->real_escape_string($_POST['surname']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']); // เก็บรหัสผ่านเป็นข้อความธรรมดา

    // ตรวจสอบการเชื่อมต่อฐานข้อมูล
    if ($conn) {
        // SQL คำสั่งในการแทรกข้อมูล
        $sql = "INSERT INTO member (name, surname, username, password) VALUES ('$name', '$surname', '$username', '$password')";

        // ทำการแทรกข้อมูล
        if ($conn->query($sql) === TRUE) {
            header("Location: signup.php#successModal");
            exit();
        } else {
            if ($conn->errno == 1062) {
                header("Location: signup.php#registerModal");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // ปิดการเชื่อมต่อ
        $conn->close();
    } else {
        echo "Connection failed: " . $conn->connect_error;
    }
}
?>
