<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
    <link rel="stylesheet" href="./assets/css/Đăng nhập.css">
</head>
<body>
    <div class="container">
        <form id="form" method="POST">
            <h1>Đăng nhập</h1>
            <label for="userName">Tài khoản</label>
            <input type="text" name="userName" placeholder="Tài khoản" required minlength="5">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" placeholder="Mật khẩu" required minlength="8">
            <button type="submit">Đăng nhập</button>
            <p>Bạn chưa có tài khoản? <a href="">Đăng ký</a></p>
        </form>
    </div>
    <script src="./assets/js/Đăng nhập.js"></script>
</body>
</html>