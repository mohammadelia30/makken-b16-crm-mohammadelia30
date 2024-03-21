<!DOCTYPE html>
"
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
    <div class="container mt-3 panel">
        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a class="nav-link active" href="/">خانه</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">کاربران</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('userslist')}}">لیست کاربران</a></li>
                    <li><a class="dropdown-item" href="{{route('usercreatepage')}}">افزودن کاربر</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">محصولات</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('productslist')}}">لیست محصولات</a></li>
                    <li><a class="dropdown-item" href="{{route('productcretepage')}}">افزودن محصول</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">سفارشات</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('orderslist')}}">لیست سفارشات</a></li>
                    <li><a class="dropdown-item" href="{{route('ordercreatepage')}}">افزودن سفارش</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">مقالات</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('postslist')}}">لیست مقالات</a></li>
                    <li><a class="dropdown-item" href="{{route('postcreatepage')}}">افزودن مقاله</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">دسته بندی</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('categureslist')}}">لیست دسته بندی</a></li>
                    <li><a class="dropdown-item" href="{{route('categutycreatepage')}}">افزودن دسته بندی</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-grid-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                    </svg></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">دیجیتال</a></li>
                    <li><a class="dropdown-item" href="#"></a>پوشاک</li>
                    <li><a class="dropdown-item" href="#"></a>نوشت افزار</li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-danger text-white mynav" href="{{route('loginpage')}}">ورود/ثبت نام</a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h1 class="text-white">مقالات</h1>
        <hr class="bg-light">
        <div class="row">
            <div class="col row_div">
                <div>
                    <div>
                        <img src="https://static.roocket.ir/images/cover/2024/2/17/wqA6qZR2T5kYFqKYSEWRdKuKWGmqBquwKTAy6xQe.jpg"
                            alt="page1">
                    </div>
                    <div>
                        <h3>مقاله شماره1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, asperiores!</p>
                        <div class="d-grid but"><button class="btn btn-warning btn-block"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg></button></div>
                    </div>

                </div>
            </div>
            <div class="col row_div">
                <div>
                    <div>
                        <img src="https://static.roocket.ir/images/cover/2024/2/18/0ZgD2y2iowukoP8gKuqhT8ddLwQWMY8O8ovFzDt1.jpg"
                            alt="page1">
                    </div>
                    <div>
                        <h3>مقاله شماره2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, asperiores!</p>
                        <div class="d-grid but"><button class="btn btn-warning btn-block"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg></button></div>
                    </div>

                </div>
            </div>
            <div class="col row_div">
                <div>
                    <div>
                        <img src="https://static.roocket.ir/images/cover/2024/2/16/5FIK0oH8QmTY9AC3FgPtbLDZgglJnMeBQ5VlPW6w.jpg"
                            alt="page1">
                    </div>
                    <div>
                        <h3>مقاله شماره3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, asperiores!</p>
                        <div class="d-grid but"><button class="btn btn-warning btn-block"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg></button></div>
                    </div>

                </div>
            </div>
            <div class="col row_div">
                <div>
                    <div>
                        <img src="https://static.roocket.ir/images/cover/2024/1/3/x8Vuc4ykIUVPqlxnSLzJLc01VnJWylLNdFwu1jKs.jpg"
                            alt="page1">
                    </div>
                    <div>
                        <h3>مقاله شماره4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, asperiores!</p>
                        <div class="d-grid but"><button class="btn btn-warning btn-block"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg></button></div>
                    </div>

                </div>
            </div>
    </div>
</body>

</html>
