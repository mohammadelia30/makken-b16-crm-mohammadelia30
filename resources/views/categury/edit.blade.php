<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categury edit</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-white">
    <div class="login-div">
        <form action="/cat/edit/{{$cat->id}}" method="POST" class="was-validated">
            @csrf
            <h1>ویرایش دسته بندی</h1>
            <br>
            <div class="mb-3">
                <label for="pwd" class="form-label"> عنوان:</label>
                <input type="text" class="form-control" id="pwd" placeholder="عنوان" name="title" value="{{$cat->title}}" required>
                <div class="valid-feedback">درست</div>
                <div class="invalid-feedback">این فیلد اجباری</div>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </div>
    </form>
    </div>
</body>

</html>
