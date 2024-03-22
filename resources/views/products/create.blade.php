<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product create</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-white">
  <div class="login-div ">
    <form action="{{route('productcreate')}}" method="post" class="was-validated">
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
        <h1>افزودن محصول</h1>
        <br>
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label">نام:</label>
        <input type="text" class="form-control" id="uname" placeholder="نام" name="name" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label"> قیمت:</label>
        <input type="number" class="form-control" id="pwd" placeholder="قیمت" name="price" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="pwd" class="form-label">رنگ:</label>
        <br>
        <input type="color" class=" form-control-color" id="pwd" value="action" name="color">
      </div>
      <br>
      <h4 class="text-white">وضعیت:</h4>
      <br>
      <div class="form-check">
        <label class="form-check-label " for="radio1">موجود</label>
        <input type="radio" class="form-check-input" id="radio1" name="status" value="موجود" >
      </div>
      <div class="form-check">
        <label class="form-check-label " for="radio2">ناموجود</label>
        <input type="radio" class="form-check-input" id="radio2" name="status" value="ناموجود">
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio3">به زودی</label>
        <input type="radio" class="form-check-input" id="radio3" name="status" value="به زودی" >
      </div>
      <br>
      <label for="comment2" >تعداد:</label>
      <br><br>
      <input type="number" name="number" id="comment2">
      <br><br>
      <label for="comment1">توضیحات:</label>
      <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات"></textarea>
      <br>
    <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </form>

  </div>
</body>

</html>
