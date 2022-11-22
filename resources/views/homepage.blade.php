{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layout.master')

{{-- Đặt title cho page --}}
@section('title', 'Trang chủ')

{{-- Đặt file css cho page --}}
@section('file', 'home-page')

{{-- Đặt class cho body --}}
@section('page', 'home-page')

@section('content')
    <main class="main">
        <section class="slider-fashion owl-carousel owl-theme">
            <div class="slider-fashion__item">
                <img src="./images/banner.jpg" alt="">
            </div>
            <div class="slider-fashion__item">
                <img src="./images/banner.jpg" alt="">
            </div>
            <div class="slider-fashion__item">
                <img src="./images/banner.jpg" alt="">
            </div>
            <div class="slider-fashion__item">
                <img src="./images/banner.jpg" alt="">
            </div>
        </section>
        <section class="flash-sale bg-color-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="flash-sale-title col-sm-12 d-flex align-items-center justify-content-center">
                        <h1 class="color-9 fs-3 fw-4"><i class="fas fa-bolt me-3"></i>FLASH SALE</h1>
                        <div class="countdowm fw-4 d-flex -align-items-center ms-3">
                            <span class="countdowm__hours bg-color-10 fs-5 color-9 p-2 rounded-6">00</span>
                            <span class="countdowm__minutes fs-5 color-9 p-2 rounded-6">:</span>
                            <span class="countdowm__minutes bg-color-10 fs-5 color-9 p-2 rounded-6">00</span>
                            <span class="countdowm__minutes fs-5 color-9 p-2 rounded-6">:</span>

                            <span class="countdowm__seconds bg-color-10 fs-5 color-9 p-2 rounded-6">00</span>
                        </div>
                    </div>
                    <div class="product-lists owl-carousel owl-theme col-sm-12">
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-new py-5">
            <div class="container">
                <div class="row">
                    <div class="product-new-title text-center col-sm-12">
                        <h2 class="product-new-title__header fs-4 fw-4">SẢN PHẨM MỚI</h2>
                        <p class="product-new-title__caption fs-7 color-3">Những mẫu sản phẩm mới nhất của chúng tôi</p>
                    </div>
                    <div class="product-lists owl-carousel owl-theme col-sm-12">
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                        <div class="box-product hover-shadow position-relative overflow-hidden rounded-10 col my-4 bg-color-10 p-3">
                            <div class="box-product__image image-cover">
                                <img src="./images/anh1.png" alt="Ghế đơn Medini">
                            </div>
                            <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 w-100 h-100 start-0">
                                <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                    <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                    <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                        <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                            <i class="far fa-shopping-cart"></i>

                                        </a>
                                        <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                            <i class="far fa-eye"></i>

                                        </a>
                                    </div>
                                    <div class="box-product-tooltip__name fs-6 pt-3">
                                        <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                    </div>
                                    <div class="box-product-tooltip__price fs-5 fw-4 color-14">
                                        180.000 ₫
                                    </div>
                                    <div class="box-product-action">
                                        <a href="/them-thanh-cong" class="box-product-action__cart">
                                        </a>
                                        <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-product-tooltip--bottom">
                                    <table class="table product-atrribute">
                                        <tr>
                                            <td class="col-6">Mã sản phẩm:</td>
                                            <td class="col fw-4">VMMS01</td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng:
                                            </td>
                                            <td class="fw-4">Còn hàng
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thương hiệu:
                                            </td>
                                            <td class="fw-4">Vito</td>
                                        </tr>
                                        <tr>
                                            <td>Xuất xứ:
                                            </td>
                                            <td class="fw-4">Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-2">Màu sắc:
                                            </td>
                                            <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu:

                                            </td>
                                            <td class="fw-4">Da cao cấp

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước:
                                            </td>
                                            <td class="fw-4">1000*700*120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bảo hành:
                                            </td>
                                            <td class="fw-4">2 năm
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="box-product-sale-off__number">
                                    50%
                                </span>
                                <span class="box-product-sale-off__text">
                                    GIẢM
                                </span>
                            </div>
                            <div class="box-product__content py-3">
                                <h4 class="box-product__content--name">
                                    <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                </h4>
                                <div class="box-product__content--price">
                                    <span class="color-14 fw-4 fs-5 box-product-price__current">
                                        180.000₫
                                    </span>
                                    <del class="box-product-price__old color-3">
                                        360.000 ₫
                                    </del>

                                </div>
                                <div class="box-product__content--color d-flex align-items-center">
                                </div>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                </span>
                                <span
                                    class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us position-relative my-5">
            <div class="about-us__image">
                <img class="h-100 w-100" src="/images/banner-home.png" alt="">
            </div>
            <div class="container">
                <div class="about-us-title d-flex align-items-center position-absolute top-0 mt-4">
                    <div class="about-us-title__logo d-flex align-items-center justify-content-center rounded-circle bg-color-10 py-4 px-3 me-2"><img
                            class="py-1 w-auto" src="./images/logo.svg" alt="Logo"></div>
                    <h3 class="about-us-title__heading  fw-4 fs-7">Trải nghiệm phong cách nội thất vintage từ các kiến trúc sư VMMS</h3>
                </div>
                <div>
                    <i class="fas fa-play-circle position-absolute top-50 start-50 translate-middle fs-1 color-1 rounded-circle"></i>
                </div>
            </div>
        </section>
        <section class="lists-product-category living-room py-5">
            <div class="container">
                <div class="d-flex-column d-lg-flex justify-content-between border-bottom mb-3">
                    <div>
                        <h2 class="fw-4 fs-4 text-center">
                            NỘI THẤT PHÒNG KHÁCH
                        </h2>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-product justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#sofa"
                                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Sofa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tea-table"
                                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bàn uống trà</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="contact-tab" data-bs-toggle="tab" data-bs-target="#recliner"
                                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ghế tựa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="contact-tab" data-bs-toggle="tab" data-bs-target="#curtains"
                                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Rèm cửa</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="sofa" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4">
                            <div class="col-12 col-sm-12 col-lg-6 box-product my-3 rounded-6">
                                <div class="box-product-large__image position-relative">
                                    <img class="rounded-6 w-100" src="./images/pro1.png" alt="BỘ SOFA VĂNG NỈ CAO CẤP SV007">
                                    <div class="box-product__image--hover w-100 color-10 position-absolute top-0 start-0 rounded-6 d-none h-100">
                                        <div class="mt-auto ms-5 mb-5">
                                            <p class="fs-4">BỘ SOFA VĂNG NỈ CAO CẤP SV007</p>
                                            <button class="btn-xl border rounded-6 fs-7 fw-4 btn--color-1 border-color-1">Mua ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tea-table" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="recliner" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="curtains" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                </div>
            </div>
        </section>
        <section class="lists-product-category kitchen py-5">
            <div class="container">
                <div class="d-flex-column d-lg-flex justify-content-between border-bottom mb-3">
                    <div>
                        <h2 class="fw-4 fs-4 text-center">
                            NỘI THẤT PHÒNG BẾP
                        </h2>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-product justify-content-center" id="kitchen" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#dinner-chair"
                                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Ghế ăn</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="profile-tab" data-bs-toggle="tab" data-bs-target="#dinner-table"
                                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bàn ăn</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="contact-tab" data-bs-toggle="tab" data-bs-target="#kitchen-cabinest"
                                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Tủ bếp</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="contact-tab" data-bs-toggle="tab" data-bs-target="#light"
                                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Đèn chiếu</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="kitchen">
                    <div class="tab-pane fade show active" id="dinner-chair" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4">
                            <div class="box-product my-3 col-12 col-sm-12 col-lg-6 rounded-6">
                                <div class="box-product-large__image position-relative">
                                    <img class="rounded-6 w-100" src="./images/collov-home-design.png" alt="BỘ SOFA VĂNG NỈ CAO CẤP SV007">
                                    <div class="box-product__image--hover w-100 color-10 position-absolute top-0 start-0 rounded-6 d-none h-100">
                                        <div class="mt-auto ms-5 mb-5">
                                            <p class="fs-4">Ghế ăn Cherry gỗ tự nhiên</p>
                                            <button class="btn-xl border rounded-6 fs-7 fw-4 btn--color-1 border-color-1">Mua ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2" href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="dinner-table" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="kitchen-cabinest" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="light" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                </div>
            </div>
        </section>
        <section class="lists-product-category bedroom py-5">
            <div class="container">
                <div class="d-flex-column d-lg-flex justify-content-between border-bottom mb-3">
                    <div>
                        <h2 class="fw-4 fs-4 text-center">
                            NỘI THẤT PHÒNG NGỦ
                        </h2>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-product justify-content-center" id="bed-room" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bed"
                                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Giường ngủ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="profile-tab" data-bs-toggle="tab" data-bs-target="#wardrobe"
                                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Tủ quần áo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="contact-tab" data-bs-toggle="tab" data-bs-target="#makeup-table"
                                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Bàn trang điểm</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 color-9 fw-4 fs-7" id="contact-tab" data-bs-toggle="tab" data-bs-target="#lamp"
                                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Đèn ngủ</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="bed-room">
                    <div class="tab-pane fade show active" id="bed" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4">
                            <div class="box-product my-3 col-12 col-sm-12 col-lg-6 rounded-6">
                                <div class="box-product-large__image position-relative">
                                    <img class="rounded-6 w-100" src="./images/chastity.png" alt="Giường ngủ thông minh GNC77">
                                    <div class="box-product__image--hover w-100 color-10 position-absolute top-0 start-0 rounded-6 d-none h-100">
                                        <div class="mt-auto ms-5 mb-5">
                                            <p class="fs-4">Giường ngủ thông minh GNC77</p>
                                            <button class="btn-xl border rounded-6 fs-7 fw-4 btn--color-1 border-color-1">Mua ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-product my-3 position-relative p-2 overflow-hidden rounded-10 col my-2 hover-shadow">
                                    <div class="box-product__image image-cover">
                                        <img src="./images/anh1.png" alt="Ghế đơn Medini">
                                    </div>
                                    <div class="box-product-tooltip d-none d-xl-block position-absolute bg-color-10 p-4 py-5 w-100 h-100 start-0">
                                        <div class="box-product-tooltip--top border-1 rounded-6 w-100 position-relative">
                                            <div class="bg-color-14 color-10 box-product-tooltip__sale-off d-inline p-2 rounded-6">50% GIẢM</div>
                                            <div class="box-product-tooltip__action d-flex flex-column position-absolute top-0 end-0">
                                                <a class="add-to-cart border-1 rounded-circle border border-color-9 px-2 py-1 fs-7 mb-2"
                                                    href="#">
                                                    <i class="far fa-shopping-cart"></i>

                                                </a>
                                                <a class="show-product border-1 rounded-circle border border-color-9 px-2 py-1 fs-7" href="#">
                                                    <i class="far fa-eye"></i>

                                                </a>
                                            </div>
                                            <div class="box-product-tooltip__name fs-5 pt-3">
                                                <a class="color-9 fw-4" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                            </div>
                                            <div class="box-product-tooltip__price fs-4 fw-4 color-14">
                                                180.000 ₫
                                            </div>
                                            <div class="box-product-action">
                                                <a href="/them-thanh-cong" class="box-product-action__cart">
                                                </a>
                                                <a href="/chi-tiet-san-pham" class="box-product-action__view">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-product-tooltip--bottom">
                                            <table class="table product-atrribute">
                                                <tr>
                                                    <td class="col-6">Mã sản phẩm:</td>
                                                    <td class="col fw-4">VMMS01</td>
                                                </tr>
                                                <tr>
                                                    <td>Tình trạng:
                                                    </td>
                                                    <td class="fw-4">Còn hàng
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thương hiệu:
                                                    </td>
                                                    <td class="fw-4">Vito</td>
                                                </tr>
                                                <tr>
                                                    <td>Xuất xứ:
                                                    </td>
                                                    <td class="fw-4">Malaysia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Màu sắc:
                                                    </td>
                                                    <td class="fw-4">Nâu, Đen, Trắng, Vàng, Xanh

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chất liệu:

                                                    </td>
                                                    <td class="fw-4">Da cao cấp

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước:
                                                    </td>
                                                    <td class="fw-4">1000*700*120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bảo hành:
                                                    </td>
                                                    <td class="fw-4">2 năm
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="box-product__sale-off bg-color-14 color-10 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4 d-inline-flex flex-column p-2 position-absolute top-0 start-0 ms-4 mt-4">
                                        <span class="box-product-sale-off__number">
                                            50%
                                        </span>
                                        <span class="box-product-sale-off__text">
                                            GIẢM
                                        </span>
                                    </div>
                                    <div class="box-product__content py-3">
                                        <h4 class="box-product__content--name">
                                            <a class="color-9 fw-4 fs-7" href="/chi-tiet-san-pham">Ghế đơn Medini</a>
                                        </h4>
                                        <div class="box-product__content--price">
                                            <span class="color-14 fw-4 fs-5 box-product-price__current">
                                                180.000₫
                                            </span>
                                            <del class="box-product-price__old color-3">
                                                360.000 ₫
                                            </del>

                                        </div>
                                        <div class="box-product__content--color d-flex align-items-center">
                                        </div>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--brown is-select">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--black">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--white">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--yellow">
                                        </span>
                                        <span
                                            class="box-product-color__item d-inline-flex me-1 justify-content-center border-1 border border-color-9 rounded-circle box-product-color__item--green">
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="wardrobe" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="makeup-table" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="lamp" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                </div>
            </div>
        </section>
        <section class="customer-review py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="customer-review-title text-center col-sm-12 my-5">
                        <h3 class="fs-4 color-10">KHÁCH HÀNG HỌ NÓI GÌ VỀ CHÚNG TÔI?</h3>
                    </div>
                    <div class="customer-review-list owl-carousel owl-theme col-sm-12">
                        <div class="review-item text-center">
                            <div class="review-item__avatar my-3">
                                <img class="w-auto mx-auto" src="./images/avatar.png" alt="SIMONE PAROTTI">
                            </div>
                            <div class="review-item__content fs-7 color-10">
                                <p class="w-65 mx-auto px-5">
                                    "Thời trang VMMS mang sự sáng tạo rất lớn trong các mốt thời gian gần đây. Không chỉ nói đến
                                    chất liệu cao cấp, thân thiện môi trường mà còn là sự tinh tế trong các đường nét trên trang
                                    phục."

                                </p>
                            </div>
                            <div class="review-item__name fs-7 color-10">
                                <i class="fas fa-quote-right fs-3 fst-italic"></i>
                                <p class="mb-5">SIMONE PAROTTI</p>
                            </div>
                        </div>
                        <div class="review-item text-center">
                            <div class="review-item__avatar my-3">
                                <img class="w-auto mx-auto" src="./images/avatar.png" alt="SIMONE PAROTTI">
                            </div>
                            <div class="review-item__content fs-7 color-10">
                                <p class="w-65 mx-auto px-5">
                                    "Thời trang VMMS mang sự sáng tạo rất lớn trong các mốt thời gian gần đây. Không chỉ nói đến
                                    chất liệu cao cấp, thân thiện môi trường mà còn là sự tinh tế trong các đường nét trên trang
                                    phục."

                                </p>
                            </div>
                            <div class="review-item__name fs-7 color-10">
                                <i class="fas fa-quote-right fs-3 fst-italic"></i>
                                <p class="mb-5">SIMONE PAROTTI</p>
                            </div>
                        </div>
                        <div class="review-item text-center">
                            <div class="review-item__avatar my-3">
                                <img class="w-auto mx-auto" src="./images/avatar.png" alt="SIMONE PAROTTI">
                            </div>
                            <div class="review-item__content fs-7 color-10">
                                <p class="w-65 mx-auto px-5">
                                    "Thời trang VMMS mang sự sáng tạo rất lớn trong các mốt thời gian gần đây. Không chỉ nói đến
                                    chất liệu cao cấp, thân thiện môi trường mà còn là sự tinh tế trong các đường nét trên trang
                                    phục."

                                </p>
                            </div>
                            <div class="review-item__name fs-7 color-10">
                                <i class="fas fa-quote-right fs-3 fst-italic"></i>
                                <p class="mb-5">SIMONE PAROTTI</p>
                            </div>
                        </div>
                        <div class="review-item text-center">
                            <div class="review-item__avatar my-3">
                                <img class="w-auto mx-auto" src="./images/avatar.png" alt="SIMONE PAROTTI">
                            </div>
                            <div class="review-item__content fs-7 color-10">
                                <p class="w-65 mx-auto px-5">
                                    "Thời trang VMMS mang sự sáng tạo rất lớn trong các mốt thời gian gần đây. Không chỉ nói đến
                                    chất liệu cao cấp, thân thiện môi trường mà còn là sự tinh tế trong các đường nét trên trang
                                    phục."

                                </p>
                            </div>
                            <div class="review-item__name fs-7 color-10">
                                <i class="fas fa-quote-right fs-3 fst-italic"></i>
                                <p class="mb-5">SIMONE PAROTTI</p>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <section class="customer-brand py-5">
            <div class="container">
                <div class="row">
                    <div class="customer-brand-title text-center col-sm-12">
                        <h3 class="color-9 fs-4">THƯƠNG HIỆU HÀNG ĐẦU</h3>
                        <p class="subtitle pb-5">Các thương hiệu hợp tác với chúng tôi</p>
                    </div>
                    <div class="customer-brand-list owl-carousel owl-theme col-sm-12">
                        <div class="customer-brand-item">
                            <div class="customer-brand-item__image shadow rounded-10 mb-2">
                                <img src="./images/fashion/chanel.png" alt="">
                            </div>
                            <div class="customer-brand-item__name text-center fs-7 fw-4">
                                CHANEL
                            </div>
                        </div>
                        <div class="customer-brand-item">
                            <div class="customer-brand-item__image shadow rounded-10 mb-2">
                                <img src="./images/fashion/hermes.png" alt="">
                            </div>
                            <div class="customer-brand-item__name text-center fs-7 fw-4">
                                HERMES
                            </div>
                        </div>
                        <div class="customer-brand-item">
                            <div class="customer-brand-item__image shadow rounded-10 mb-2">
                                <img src="./images/fashion/gucci.png" alt="">
                            </div>
                            <div class="customer-brand-item__name text-center fs-7 fw-4">
                                GUCCI
                            </div>
                        </div>
                        <div class="customer-brand-item">
                            <div class="customer-brand-item__image shadow rounded-10 mb-2">
                                <img src="./images/fashion/dg.png" alt="">
                            </div>
                            <div class="customer-brand-item__name text-center fs-7 fw-4">
                                DOLCE & GABBANA
                            </div>
                        </div>
                        <div class="customer-brand-item">
                            <div class="customer-brand-item__image shadow rounded-10 mb-2">
                                <img src="./images/fashion/dior.png" alt="">
                            </div>
                            <div class="customer-brand-item__name text-center fs-7 fw-4">
                                DIOR
                            </div>
                        </div>
                        <div class="customer-brand-item">
                            <div class="customer-brand-item__image shadow rounded-10 mb-2">
                                <img src="./images/fashion/louis.png" alt="">
                            </div>
                            <div class="customer-brand-item__name text-center fs-7 fw-4">
                                LOUIS VUITTON
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog py-5 bg-color-6">
            <div class="container">
                <div class="row">
                    <div class="blog-title text-center col-sm-12">
                        <h3 class="blog-title__heade titler fw-4 fs-5">CẨM NANG NỘI THẤT</h3>
                        <p class="blog-title__caption subtitle pb-5">Những tin tức mới nhất về thời trang VMMS</p>
                    </div>
                    <div class="blog-list owl-carousel owl-theme col-sm-12">
                        <div class="box-blog-post position-relative">
                            <div class="box-blog-post__image image-cover">
                                <img src="./images/fashion/blog1.png" alt="Thiết kế đỉnh cao căn hộ 22m2 khiến ai cũng ngưỡng mộ">
                            </div>
                            <h5 class="box-blog-post__title fs-7 fw-4 mt-2">
                                Những"Cẩm nang vàng" khi thiết kế và lựa chọn nội thất
                            </h5>
                            <div
                                class="box-date position-absolute bg-color-10 color-9 top-0 start-0 d-flex flex-column p-2 rounded-6 px-3 ms-2 mt-2 fs-7">
                                <span class="box-date__day">
                                    28
                                </span>
                                <span class="box-date__month">
                                    05
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
