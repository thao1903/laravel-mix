<header class="header fs-9">
    <div class="top-bar color-3 fs-9 py-3 d-none d-md-block border-bottom">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="top-bar--left flex-grow-1">
                    <ul class="top-bar-contact d-flex">
                        <li class="top-bar-contact__item me-4">
                            <i class="me-1 fas fa-phone-alt"></i><a class="color-3" href="tel:0962180180">0962.180.180</a>
                        </li>
                        <li class="top-bar-contact__item me-4">
                            <i class="me-1 fas fa-envelope"></i><a class="color-3" href="mailto:info@vmms.vn" subject="subject text">info@vmms.vn</a>
                        </li>
                        <li class="top-bar-contact__item me-4">
                            <i class="me-1 fas fa-clock"></i>Mở cửa: Từ 8:00 đến 20:30 (Tất
                            cả các ngày trong tuần)
                        </li>
                    </ul>
                </div>
                <div class="top-bar--right">
                    <div class="dropdown">
                        <button class="border-0 bg-transparent" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Tiếng việt
                            <i class="ms-2 fas fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li class="text-center">
                                <button class="dropdown-item " type="button">Tiếng
                                    Việt</button>
                            </li>
                            <li class="text-center">
                                <button class="dropdown-item " type="button">Tiếng
                                    Anh</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main color-9 py-4">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row">
                <div class="header-logo header-main--left d-flex align-items-center justify-content-between pb-3 pb-lg-0 col-12 col-lg-3">
                    <div class="menu-bars d-block d-lg-none">
                        <i class="far fa-bars fs-6"></i>
                    </div>
                    <div>
                        <a href="/" class="logo-img">
                            <img src="./images/logo-small.svg" alt="" />
                        </a>
                    </div>
                    <div class="header-cart-mobi d-block d-lg-none">
                        <a href="/gio-hang" class="cart-icon">
                            <i class="color-9 fal fa-shopping-cart fs-5 me-2 position-relative">
                                <span
                                    class="fs-9 ms-0 top-0 start-100 translate-middle cart-qty color-10 position-absolute bg-color-14 px-2 py-1 rounded-circle">
                                    0
                                </span>
                            </i>
                        </a>
                    </div>
                </div>
                <div class="header-main--right d-flex flex-grow-1">
                    <div class="search-form flex-grow-1 position-relative m-auto">
                        <form role="search" method="get" action="/tim-kiem">
                            <input type="search" name=""
                                class="boder-1 border search-form__input py-3 rounded-10 px-4 rounded-6 border-color-5 fs-7 w-100"
                                placeholder="Nhập từ khoá tìm kiếm..." />
                            <button type="submit" value="Tìm kiếm"
                                class="position-absolute top-50 end-0 translate-middle-y border-0 me-3 search-btn search-form__button bg-color-10">
                                <i class="far fa-search fs-7"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-account d-none d-lg-flex align-items-center mx-5">
                        <a href="/tai-khoan" class="account-icon">
                            <i class="fal fa-user fs-1 color-9 me-2"></i>
                        </a>
                        <div class="account-item ms-1">
                            <div class="account-item__title fs-7 fw-4">Tài khoản</div>
                            <div class="account-item__user">
                                <a href="#" class="color-9" data-toggle="modal" data-target="#siginModal">
                                    Đăng nhập</a>
                                /
                                <a href="#" class="color-9" data-toggle="modal" data-target="#register">Đăng ký</a>
                            </div>
                        </div>

                    </div>
                    <div class="header-cart d-none d-lg-flex align-items-center">
                        <a href="/gio-hang" class="cart-icon">
                            <i class="color-9 fal fa-shopping-cart fs-1 me-2 position-relative">
                                <span
                                    class="fs-9 mt-2 top-0 start-100 translate-middle cart-qty color-10 position-absolute bg-color-14 px-2 py-1 rounded-circle">
                                    0
                                </span>
                            </i>
                        </a>
                        <div class="cart-item ms-1">
                            <div class="cart-item__title fs-7 fw-4">Giỏ hàng</div>
                            <div class="cart-item__price color-9">0 VNĐ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom bg-color-9">
        <div class="container">
            <div class="d-none d-lg-flex justify-content-between align-items-center fs-8">
                <div class="header-bottom--left">
                    <div class="dropdown">
                        <button class="bg-color-1 color-10 py-4 px-5 py- fw-4 border-color-1 border" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bars me-3"></i>
                            Danh mục sản phẩm
                        </button>
                        <ul class="dropdown-menu bg-color-5 fs-8 w-100 border-0" aria-labelledby="dropdownMenuButton2">
                            <div class="position-relative">
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Hàng mới về <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Bộ sưu tập <i class="far fa-angle-right"></i>
                                    </a>
                                    <ul class="position-absolute sub-menu d-none top-0 start-100 bg-color-5 rounded-6 h-100 p-5">
                                        <div class="col-8">
                                            <div class="row row-cols-3">
                                                <div class="col mb-4">
                                                    <div class="box-category-item__image image-cover">
                                                        <img src="./images/fashion/category-product1.png" alt="">
                                                    </div>
                                                    <div class="box-category-item__name color-9 fw-4">
                                                        Xuân Hè 2022
                                                    </div>
                                                </div>
                                                <div class="col mb-4">
                                                    <div class="box-category-item__image image-cover">
                                                        <img src="./images/fashion/category-product1.png" alt="">
                                                    </div>
                                                    <div class="box-category-item__name color-9 fw-4">
                                                        Xuân Hè 2022
                                                    </div>
                                                </div>
                                                <div class="col mb-4">
                                                    <div class="box-category-item__image image-cover">
                                                        <img src="./images/fashion/category-product1.png" alt="">
                                                    </div>
                                                    <div class="box-category-item__name color-9 fw-4">
                                                        Xuân Hè 2022
                                                    </div>
                                                </div>
                                                <div class="col mb-4">
                                                    <div class="box-category-item__image image-cover">
                                                        <img src="./images/fashion/category-product1.png" alt="">
                                                    </div>
                                                    <div class="box-category-item__name color-9 fw-4">
                                                        Xuân Hè 2022
                                                    </div>
                                                </div>
                                                <div class="col mb-4">
                                                    <div class="box-category-item__image image-cover">
                                                        <img src="./images/fashion/category-product1.png" alt="">
                                                    </div>
                                                    <div class="box-category-item__name color-9 fw-4">
                                                        Xuân Hè 2022
                                                    </div>
                                                </div>
                                                <div class="col mb-4">
                                                    <div class="box-category-item__image image-cover">
                                                        <img src="./images/fashion/category-product1.png" alt="">
                                                    </div>
                                                    <div class="box-category-item__name color-9 fw-4">
                                                        Xuân Hè 2022
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-4">
                                            <div class="box-cate-info">
                                                <div class="box-cate-info__image position-relative">
                                                    <img class="rounded-6" src="./images/fashion/men-fashionn1.png" alt="sale50%">
                                                    <div class="box-cate-info__title color-10 fs-5 position-absolute top-50 start-0 mt-5 ms-4 pt-5">
                                                        Sale off 50%
                                                    </div>
                                                    <div
                                                        class="  border border-1 border-color-10 color-10 position-absolute bottom-0 start-0 ms-4 mb-4 px-5 py-3 fs-6">
                                                        Mua ngay
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </ul>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Thời trang nam <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Thời trang nữ <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Phụ kiện <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Thương hiệu <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Xu hướng <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Áo khoác <i class="far fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a class="menu-list dropdown-item py-4 fw-4 color-9 d-flex justify-content-between align-items-center"
                                        href="#">Quần <i class="far fa-angle-right"></i></a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom--right">
                    <ul class="d-flex justify-content-end">
                        <li>
                            <a class="fw-4 ms-4 color-10" href="/">
                                Trang chủ
                            </a>
                        </li>
                        <li>
                            <a class="fw-4 ms-4 color-10" href="/gioi-thieu">
                                Giới thiệu
                            </a>
                        </li>
                        <li>
                            <a class="fw-4 ms-4 color-10" href="san-pham">
                                Sản phẩm

                            </a>
                        </li>
                        <li>
                            <a class="fw-4 ms-4 color-10" href="/tin-tuc">
                                Tin tức
                            </a>
                        </li>
                        <li>
                            <a class="fw-4 ms-4 color-10" href="/huong-dan">
                                Hướng dẫn mua hàng
                            </a>
                        </li>
                        <li>
                            <a class="fw-4 ms-4 color-10" href="/cau-hoi">
                                Câu hỏi thường gặp
                            </a>
                        </li>
                        <li>
                            <a class="fw-4 ms-4 color-10" href="/lien-he">
                                Liên Hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
