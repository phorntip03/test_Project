<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
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
        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .signup-container h2 {
            margin-bottom: 20px;
        }
        .signup-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>สมัครสมาชิก</h2>
    <input type="text" id="new-username" placeholder="ชื่อผู้ใช้">
    <input type="password" id="new-password" placeholder="รหัสผ่าน">
    <button onclick="สมัครสมาชิก()">สมัครสมาชิก</button>
</div>

<script>
    function สมัครสมาชิก() {
        const ผู้ใช้ใหม่ = document.getElementById('new-username').value;
        const รหัสผ่านใหม่ = document.getElementById('new-password').value;

        // ทำการบันทึกข้อมูลหรือทำอะไรก็ได้ตามต้องการ
        alert(`สมัครสมาชิกสำเร็จสำหรับผู้ใช้: ${ผู้ใช้ใหม่}`);
    }
</script>

</body>
</html>
