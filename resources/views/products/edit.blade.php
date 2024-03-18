<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product edit</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-white">
  <div class="login-div">
    <form action="/product/edit/{{$product->id}}" method="post" class="was-validated">
        @csrf
        <h1>ویرایش محصول</h1>
        <br>
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label ">نام:</label>
        <input type="text" class="form-control" id="uname" placeholder="نام" name="name" value="{{$product->name}}"  required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label"> قیمت:</label>
        <input type="number" class="form-control" id="pwd" placeholder="قیمت" name="price" value="{{$product->price}}" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="pwd" class="form-label text-white">رنگ:</label><br>
        <input type="color" class=" form-control-color" id="pwd" name="color" value="{{$product->color}}">
        <br>
      </div>
      <br>
      <h4 class="text-white">وضعیت:</h4>
      <br>
      <div class="form-check">
        <label class="form-check-label" for="radio1">موجود</label>
        <input type="radio" class="form-check-input" id="radio1" name="status" value="موجود" {{($product->status== "موجود")?"checked":""}}>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio2">ناموجود</label>
        <input type="radio" class="form-check-input" id="radio2" name="status" value="ناموجود" {{($product->status== "ناموجود")?"checked":""}}>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio3">به زودی</label>
        <input type="radio" class="form-check-input" id="radio3" name="status" value="به زودی" {{($product->status== "به زودی")?"checked":""}}>
      </div>
      <br>
      <label for="comment2">تعداد:</label>
      <br><br>
      <input type="number" name="number" value="{{$product->number}}"  id="comment2">
      <br><br>
      <label for="comment1">توضیحات:</label>
      <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات">{{$product->comment}}</textarea>
      <br>
      <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </form>

  </div>
</body>

</html>
