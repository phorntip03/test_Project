<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อกอิน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>เข้าสู่ระบบ</h2>
    <input type="text" id="username" placeholder="ชื่อผู้ใช้">
    <input type="password" id="password" placeholder="รหัสผ่าน">
    <button onclick="ตรวจสอบข้อมูล()">ล็อกอิน</button>
</div>

<script>
    function ตรวจสอบข้อมูล() {
        const ผู้ใช้ = document.getElementById('username').value;
        const รหัสผ่าน = document.getElementById('password').value;

        if (ผู้ใช้ === 'admin' && รหัสผ่าน === '1234') {
            alert('เข้าสู่ระบบสำเร็จ!');
        } else {
            alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
        }
    }
</script>

</body>
</html>
