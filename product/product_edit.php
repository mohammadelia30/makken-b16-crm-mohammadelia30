<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product edit</title>
  <link rel="stylesheet" href="../bootstrap.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
  <?php
  $con = mysqli_connect("localhost", "root", "", "crm");
  if (mysqli_connect_errno()) {
    printf("faild", mysqli_connect_error());
    exit();
  }
  $id = $_GET["id"];
  $query = "SELECT * FROM product WHERE id=$id";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
  }
  ?>
  <div class="login-div">
    <form action="../index.php?type=Edit&own=product&id=<?php echo $row["id"] ?>" method="post" class="was-validated">
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label text-white">نام:</label>
        <input type="text" class="form-control" id="uname" placeholder="نام" name="name" value="<?php echo $row["name"] ?>" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label text-white"> قیمت:</label>
        <input type="number" class="form-control" id="pwd" placeholder="قیمت" name="price" value="<?php echo $row["price"] ?>" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="pwd" class="form-label text-white">رنگ:</label><br>
        <input type="color" class=" form-control-color" id="pwd" value="<?php echo $row["color"] ?>" name="color">
        <br><br>
        <button class="btn btn-light" type="submit">افزودن</button>
      </div>
      <br>
      <h4 class="text-white">وضعیت:</h4>
      <br>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="status" value="موجود" <?php echo $row["status"] == "موجود" ? "checked" : " " ?>>
        <label class="form-check-label text-white" for="radio1">موجود</label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="status" value="ناموجود" <?php echo $row["status"] == "ناموجود" ? "checked" : " " ?>>
        <label class="form-check-label text-white" for="radio2">ناموجود</label>
      </div>
      <br>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio3" name="gender" value="به زودی" <?php echo $row["status"] == "به زودی" ? "checked" : " " ?>>
        <label class="form-check-label text-white" for="radio3">به زودی</label>
      </div>
      <br>
      <label for="comment2" class="text-white">تعداد:</label>
      <br><br>
      <input type="number" name="number" value="<?php echo $row["number"] ?>" id="comment2">
      <br><br>
      <label for="comment1" class="text-white">توضیحات:</label>
      <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات"><?php echo $row["comment"] ?></textarea>
      <br>
      <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </form>

  </div>
</body>

</html>