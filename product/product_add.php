<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product add</title>
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="login-div">
        <form action="/action_page.php" class="was-validated">
                <div class="mb-3 mt-3">
                <label for="uname" class="form-label text-white">نام:</label>
                <input type="text" class="form-control" id="uname" placeholder="نام" name="pname" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <div class="mb-3">
                <label for="pwd" class="form-label text-white"> قیمت:</label>
                <input type="number" class="form-control" id="pwd" placeholder="قیمت" name="price" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label text-white">موبایل:</label>
                    <input type="number" class="form-control" id="uname" placeholder="شماره موبایل" name="phone_number" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                    </div>
        </form>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="pwd" class="form-label text-white">رنگ:</label>
                <input type="color" class="form-control form-control-color" id="pwd" placeholder="" name="color">
                <br>
                <button class="btn btn-light" type="submit">افزودن</button>
            </div>
            <br>
            <h4 class="text-white">وضعیت:</h4>
            <br>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio1" name="status-n" value="موجود" checked>
              <label class="form-check-label text-white" for="radio1">موجود</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio2" name="status-p" value="ناموجود">
              <label class="form-check-label text-white" for="radio2">ناموجود</label>
            </div>
            <br>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio3" name="gender-m" value="به زودی" checked>
              <label class="form-check-label text-white" for="radio3">به زودی</label>
            </div>
            <br>
            <label for="comment2" class="text-white">تعداد:</label>
            <br><br>
            <input type="number" name="number" id="comment2">
            <br><br>
            <label for="comment1" class="text-white">توضیحات:</label>
            <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات"></textarea>
        </form>
          <br>
        <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </div>
</body>
</html>