<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" />
    <title>VMMS</title>
    <meta name="description" content="VMMS">

    <link rel="stylesheet" href="{{ mix('/css/' . View::getSection('file') . '.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/global.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/header.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/footer.css') }}" />


    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />

</head>

<body>
    <div class="wrapper @yield('page')">
        @section('header')
            @include('layout.header')
        @show
        @yield('content')
        @section('footer')
            @include('layout.footer')
        @show
        <div class="mobile-sidebar">
            <div class="mobile-sidebar--top bg-color-10 d-flex justify-content-between align-items-center border-bottom py-4 px-4">
                <a href="/" class="mobile-sidebar-logo">
                    <img class="h-100" src="./images/logo-small.svg" alt="" />
                </a>
                <i class="fs-5 color-3 fw-1 fal fa-times mobile-sidebar-close p-2 ms-5"></i>
            </div>
            <div class="mobile-sidebar--bottom bg-color-5 h-100 px-4">
                <ul class="menu fs-8">
                    <li class="menu-item py-4 border-bottom active">
                        <a href="/" class="menu-link fw-4">Trang chủ</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/gioi-thieu" class="menu-link fw-4">Về chúng tôi</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/san-pham" class="menu-link fw-4">Sản phẩm</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/tin-tuc" class="menu-link fw-4">Tin tức</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/chinh-sach" class="menu-link fw-4">Chính sách</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/cau-hoi" class="menu-link fw-4">Câu hỏi thường gặp</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/lien-he" class="menu-link fw-4">Liên Hệ</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="#" data-toggle="modal" data-target="#siginModal" class="menu-link fw-4">Đăng
                            nhập</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="/dang-ky" class="menu-link fw-4" data-target="#register">Đăng ký</a>
                    </li>
                    <li class="menu-item py-4 border-bottom">
                        <a href="#" class="menu-link fw-4">
                            Ngôn ngữ
                            <i class="show"></i>
                        </a>
                    </li>
                    <div class="phone-number d-block bg-color-14 mb-3 py-3 text-center">
                        <a class="color-10 fs-3 fw-4" href="tel:0962180180">0962.180.180</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="menu-bars-close"></div>
        <div class="modal fade" id="siginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-10">
                    <div class="modal-body p-5 pt-0">
                        <div class="logo-image text-center my-5">
                            <img class="w-auto" src="./images/logo-small.svg" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label color-3">Tài khoản</label>
                            <input type="email" class="form-control px-4 py-3 rounded-6" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label color-3">Mật khẩu</label>
                            <input type="password" class="form-control px-4 py-3 rounded-6" id="exampleFormControlInput1">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ghi nhớ tài khoản
                                </label>
                            </div>
                            <div>
                                <a href="/quen-mat-khau" class="color-9 text-decoration-underline fw-4">Quên mật khẩu</a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="btn--color-1 w-100 border-0 border border-color-1 rounded-6 fw-4 fs-7 btn-lg">Đăng nhập</button>
                        </div>
                        <div class="color-3 text-center mt-2">
                            Bạn chưa có tài khoản<span class="ms-3 color-9 text-decoration-underline fw-4"><a href="/dang-ky" data-toggle="modal"
                                    data-target="#register">Đăng ký</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-10">
                    <div class="modal-body p-5 pt-0">
                        <div class="logo-image text-center my-5">
                            <img class="w-auto" src="./images/logo-small.svg" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label color-3">Email đăng ký</label>
                            <input type="email" class="form-control px-4 py-3 rounded-6" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label color-3">Mật khẩu</label>
                            <input type="password" class="form-control px-4 py-3 rounded-6" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label color-3">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control px-4 py-3 rounded-6" id="exampleFormControlInput1">
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Tôi đã đọc và đồng ý<a class="text-decoration-underline text-primary" href="#"> Điều khoản sử dụng</a> và
                                    <a class="text-decoration-underline text-primary" href="">Chính sách bảo mật</a>
                                    tại VMMS.
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="btn--color-1 w-100 border-0 border border-color-1 rounded-6 fw-4 fs-7 btn-lg">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
</script>
<script rel="preload" as="script" src="{{ url('js/app.js') }}" async></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
