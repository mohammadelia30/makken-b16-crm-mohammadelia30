<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user edit</title>
  <link rel="stylesheet" href="../bootstrap.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
  <?php
  $id = $_GET["id"];
  $con = mysqli_connect("localhost", "root", "", "crm");
  if (mysqli_connect_errno()) {
    echo "faild" . mysqli_connect_error();
    exit();
  }
  $query = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  }
  ?>
  <div class="login-div">
    <form action="../index.php?type=Edit&own=users&id=<?php echo $row["id"] ?>" method="post" class="was-validated">
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label text-white">نام:</label>
        <input type="text" class="form-control" id="uname" placeholder="نام" name="first_name" value="<?php echo $row["first_name"] ?>" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label text-white">نام خانوادگی:</label>
        <input type="text" class="form-control" id="pwd" placeholder="نام خانوادگی" value="<?php echo $row["last_name"] ?>" name="last_name" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label text-white">رمز عبور:</label>
        <input type="text" class="form-control" id="pwd" placeholder="رمز عبور" value="<?php echo $row["password"] ?>" name="password" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label text-white">موبایل:</label>
        <input type="number" class="form-control" id="uname" placeholder="شماره موبایل" value="<?php echo $row["phone_number"] ?>" name="phone_number" required>
        <div class="valid-feedback">درست</div>
        <div class="invalid-feedback">این فیلد اجباری</div>
      </div>
      <h4 class="text-white">وضعیت:</h4>
      <br>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="status" value="عادی" <?php echo $row["status"] == "عادی" ? "checked" : "" ?>>
        <label class="form-check-label text-white" for="radio1">عادی</label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="status" value="ویژه" <?php echo $row["status"] == "ویژه" ? "checked" : "" ?>>
        <label class="form-check-label text-white" for="radio2">ویژه</label>
      </div>
      <br>
      <h4 class="text-white">جنسیت:</h4>
      <br>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="gender" value="آقا" <?php echo $row["gender"] == "آقا" ? "checked" : "" ?>>
        <label class="form-check-label text-white" for="radio1">آقا</label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="خانم" <?php echo $row["gender"] == "خانم" ? "checked" : "" ?>>
        <label class="form-check-label text-white" for="radio2">خانم</label>
      </div>
      <br>
      <label for="comment1" class="text-white">آدرس:</label>
      <textarea class="form-control" rows="5" id="comment1" name="address" placeholder="آدرس"><?php echo $row["address"] ?></textarea>
      <br>
      <label for="comment1" class="text-white">توضیحات:</label>
      <textarea class="form-control" rows="5" id="comment1" name="comment" placeholder="توضیحات"><?php echo $row["comment"] ?></textarea>
      <br>
      <button type="submit" class="btn btn-outline-success">ذخیره</button>
    </form>

  </div>
</body>

</html>