<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user create</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-white">
    <div class="login-div">
        <form action="{{ route('usercreate') }}" method="post" class="was-validated">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1>افزودن کاربر</h1>
            <br>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">نام:</label>
                <input type="text" class="form-control" id="uname" placeholder="نام" name="first_name" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">نام خانوادگی:</label>
                <input type="text" class="form-control" id="pwd" placeholder="نام خانوادگی" name="last_name"
                    required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">رمز عبور:</label>
                <input type="password" class="form-control" id="pwd" placeholder="رمز عبور" name="password"
                    required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
            </div>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">موبایل:</label>
                <input type="number" class="form-control" id="uname" placeholder="شماره موبایل" name="phone_number"
                    required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
            </div>
            <h4 class="">وضعیت:</h4>
            <br>
            <div class="form-check">
                <label class="form-check-label" for="radio1">عادی</label>
                <input type="radio" class="form-check-input" id="radio1" name="status" value="عادی">
            </div>
            <div class="form-check">
                <label class="form-check-label " for="radio2">ویژه</label>
                <input type="radio" class="form-check-input" id="radio2" name="status" value="ویژه">
            </div>
            <br>
            <h4 class="text-white">جنسیت:</h4>
            <br>
            <div class="form-check">
                <label class="form-check-label" for="radio1">آقا</label>
                <input type="radio" class="form-check-input" id="radio1" name="gender" value="آقا">
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="gender" value="خانم">
                <label class="form-check-label text-white" for="radio2">خانم</label>
            </div>
            <br>
            <label for="comment1">آدرس:</label>
            <textarea class="form-control" rows="5" id="comment1" name="address" placeholder="آدرس"></textarea>
            <br>
            <label for="comment1">توضیحات:</label>
            <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات"></textarea>
            <br>
            <button type="submit" class="btn btn-outline-success">ذخیره</button>
        </form>
    </div>
</body>

</html>
