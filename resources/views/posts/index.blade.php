<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts list</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
            <li class="nav-item">
                <a class="nav-link bg-danger text-white mynav" href="{{route('loginpage')}}">ورود/ثبت نام</a>
            </li>
        </ul>
    </div>
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th>نویسنده</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->categury_id}}</td>
                    <td>{{$post->auther}}</td>
                    <td>
                        <form action="{{ route('postdelete',$post->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('آیا از حذف این مورد اطمینان دارید')" type="submit" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td><a href="{{ route('posteditpage',$post->id)}}">
                            <button class="btn btn-outline-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-feather" viewBox="0 0 16 16">
                                    <path
                                        d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.8 3.8 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1S3.147 6.824 2.557 8.523c-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88q.025.061.056.122A68 68 0 0 0 .08 15.198a.53.53 0 0 0 .157.72.504.504 0 0 0 .705-.16 68 68 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.53.53 0 0 0 0-.739l-.729-.744 1.311.209a.5.5 0 0 0 .443-.15l.663-.684c.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.5.5 0 0 0-.112-.172M3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.3 1.3 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a7 7 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a8 8 0 0 1 1.564-.173" />
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
