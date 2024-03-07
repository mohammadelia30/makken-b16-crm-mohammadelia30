<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="login-div">
        <form action="/action_page.php" class="was-validated">
                <div class="mb-3 mt-3">
                <label for="uname" class="form-label text-white">موبایل:</label>
                <input type="number" class="form-control" id="uname" placeholder="شماره موبایل" name="phone_number" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <div class="mb-3">
                <label for="pwd" class="form-label text-white">رمز عبور:</label>
                <input type="password" class="form-control" id="pwd" placeholder="رمز عبور" name="password" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
            <button type="submit" class="btn btn-outline-success">ورود</button>
            <a href="./rigester.php"><button type="button" class="btn btn-outline-warning">ثبت نام</button></a>
        </form>
    </div>
</body>
</html>