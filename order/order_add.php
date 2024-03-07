<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order edit</title>
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="login-div">
        <form action="/action_page.php" class="was-validated">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label text-white">نام فرستنده</label>
                <input type="text" class="form-control" id="uname" placeholder="نام" name="sendname" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3">
                <label for="pwd" class="form-label text-white"> نام گیرنده:</label>
                <input type="number" class="form-control" id="pwd" placeholder="نام" name="getnaeme" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label text-white">کد سفارش:</label>
                    <input type="number" class="form-control" id="uname"  name="ordercode" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label text-white">تاریخ دریافت:</label>
                    <input type="date" class="form-control" id="uname" name="orderdate" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label text-white">ساعت دریافت:</label>
                    <input type="time" class="form-control" id="uname" name="ordertime" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                    <label for="comment1" class="text-white">توضیحات:</label>
                    <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات"></textarea>
                    <br>
                    <button type="submit" class="btn btn-outline-success">ذخیره</button>
                </div> 
            </div>
        </form>  
    </div>
</body>
</html>