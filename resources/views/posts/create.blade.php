<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user create</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-white">
  <div class="login-div">
    <form action="{{route("postcreate")}}" method="post" class="was-validated">
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
      <h1>افزودن مقاله</h1>
      <br>
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label">عنوان:</label>
        <input type="text" class="form-control" id="uname" placeholder="عنوان" name="title" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">نویسنده</label>
        <input type="text" class="form-control" id="pwd" placeholder="نویسنده" name="auther" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
        <br>
        <label for="select">دسته بندی</label>
        <select class="form-select" name="categury_id">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
          <br>
      </div>
      <label for="comment1">محتوا</label>
      <textarea class="form-control" rows="5" id="comment1" name="content" placeholder="محتوا"></textarea>
      <br>
      <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </form>
  </div>
</body>

</html>
