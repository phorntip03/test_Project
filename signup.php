<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .form-signin {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-signin img {
            display: block;
            margin: 0 auto 20px;
        }
        .form-signin h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-floating input {
            border-radius: 0.375rem;
        }
        .form-check {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<main class="form-signin">
    <form action="con1.php" method="post">
        <img src="img/p4.png" alt="" width="100" height="150">
        <h1 class="h3 mb-3 fw-normal">สมัครสมาชิก</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingName" name="name" placeholder="name" required>
            <label for="floatingName">ชื่อผู้ใช้</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com" required>
            <label for="floatingEmail">อีเมล</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">รหัสผ่าน</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">สมัครสมาชิก</button>
        <p class="mt-5 mb-3 text-body-secondary text-center">© 2024 Phorntip, Sakchai</p>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Y1J3zn4=" crossorigin="anonymous"></script>
</body>
</html>
