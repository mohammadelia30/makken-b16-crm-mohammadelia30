<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order edit</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark text-white">
    <div class="login-div">
        <form action="{{route('orderedit',$order->id)}}" method="post" class="was-validated">
            @csrf
            <h1>ویرایش سفارش</h1>
            <br>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label ">نام فرستنده</label>
                <input type="text" class="form-control" id="uname" placeholder="نام" name="sname" value="{{$order->sname}}" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3">
                <label for="pwd" class="form-label "> نام گیرنده:</label>
                <input type="text" class="form-control" id="pwd" placeholder="نام" name="gname" value="{{$order->gname}}" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label ">کد سفارش:</label>
                    <input type="number" class="form-control" id="uname"  name="code" value="{{$order->code}}" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label ">تاریخ دریافت:</label>
                    <input type="date" class="form-control" id="uname" name="date" value="{{$order->date}}" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label ">ساعت دریافت:</label>
                    <input type="time" class="form-control" id="uname" name="time" value="{{$order->time}}" required>
                    <div class="valid-feedback">درست</div>
                    <div class="invalid-feedback">این فیلد اجباری</div>
                </div>
                <br>
                    <label for="comment1">توضیحات:</label>
                    <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات">{{$order->comment}}</textarea>
                    <br>
                    <button type="submit" class="btn btn-outline-success">ذخیره</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
