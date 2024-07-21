<?php
include 'con1.php'; // เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']); // เก็บรหัสผ่านเป็นข้อความธรรมดา

    // ตรวจสอบการเชื่อมต่อฐานข้อมูล
    if ($conn) {
        // คำสั่ง SQL เพื่อดึงข้อมูลผู้ใช้ตามชื่อผู้ใช้
        $sql = "SELECT password FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // ดึงข้อมูลรหัสผ่านที่เก็บจากฐานข้อมูล
            $row = $result->fetch_assoc();
            $stored_password = $row['password'];

            // ตรวจสอบรหัสผ่าน
            if ($password === $stored_password) {
                echo "Login successful!";
                // ทำสิ่งที่ต้องการเมื่อเข้าสู่ระบบสำเร็จ
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }

        // ปิดการเชื่อมต่อ
        $conn->close();
    } else {
        echo "Connection failed: " . $conn->connect_error;
    }
}
?>
