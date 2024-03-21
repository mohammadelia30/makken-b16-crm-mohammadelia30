<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user edit</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark text-white">
  <div class="login-div">
    <form action="{{route('postedit',$post->id)}}" method="POST" class="was-validated">
        @csrf
        <h1>ویرایش مقاله</h1>
        <br>
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label">عنوان:</label>
        <input type="text" class="form-control" id="uname" placeholder="عنوان" name="title" value="{{$post->title}}" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label ">نویسنده:</label>
        <input type="text" class="form-control" id="pwd" placeholder="نویسنده"  name="auther" value="{{$post->auther}}" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
        <br>
        <label for="select">دسته بندی:</label>
        <select class="form-select" id="select" name="categury_id" required>
            <option {{($post->categury_id == '0')? "selected":""}}>0</option>
            <option {{($post->categury_id == '1')? "selected":""}}>1</option>
            <option {{($post->categury_id == '2')? "selected":""}}>2</option>
            <option {{($post->categury_id == '3')? "selected":""}}>3</option>
          </select>
        <br>
      <label for="comment1" class="text-white">محتوا:</label>
      <textarea class="form-control" rows="5" id="comment1" name="content" placeholder="محتوا">{{$post->content}}</textarea>
      <br>
      <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </form>

  </div>
</body>

</html>
