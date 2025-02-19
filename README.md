# Hướng dẫn sử dụng:
- [Hướng dẫn sử dụng:](#hướng-dẫn-sử-dụng)
  - [Quy định](#quy-định)
  - [Cài đặt](#cài-đặt)
    - [Cài đặt project](#cài-đặt-project)
    - [Cài đặt laravel](#cài-đặt-laravel)
    - [Cài đặt NPM package](#cài-đặt-npm-package)
  - [Viết HTML và SCSS](#viết-html-và-scss)
    - [Tạo view](#tạo-view)
    - [Khai báo đường dẫn](#khai-báo-đường-dẫn)
    - [Tạo file scss](#tạo-file-scss)
    - [Biên dịch scss](#biên-dịch-scss)

- [Hướng dẫn sử dụng:](#hướng-dẫn-sử-dụng)
  - [Quy định](#quy-định)
  - [Cài đặt](#cài-đặt)
    - [Cài đặt project](#cài-đặt-project)
    - [Cài đặt laravel](#cài-đặt-laravel)
    - [Cài đặt NPM package](#cài-đặt-npm-package)
  - [Viết HTML và SCSS](#viết-html-và-scss)
    - [Tạo view](#tạo-view)
    - [Khai báo đường dẫn](#khai-báo-đường-dẫn)
    - [Tạo file scss](#tạo-file-scss)
    - [Biên dịch scss](#biên-dịch-scss)


## Quy định

- Sử dụng Laravel Blade Template để khai báo các page https://laravel.com/docs/9.x/views
- Chỉ được code vào file `scss` trong thư mục `resources/sass`, các file `scss` này sẽ được tự động compile thành file css trong thư mục `public/css`. Dùng lệnh `yarn watch` để compile scss tự động thành css. **KHÔNG ĐƯỢC CHỈNH SỬA FILE CSS TRỰC TIẾP**
- Mỗi page cần tạo 1 file `scss` riêng cho page đó, 1 page không được load nhiều file `scss` của nhiều page (các file `resources/sass/vendor.scss` `resources/sass/global.scss` `resources/sass/header.scss` `resources/sass/footer.scss` sẽ được load vào tất cả các page)
- HTML/CSS cần được làm theo chuẩn BEM https://getbem.com/
- Không được cập nhật file `resources/sass/vendor.scss`, trong trường hợp cần cập nhật file này thì cần báo lại để thảo luận
- Tất cả các tham số về màu sắc, font cần được khai báo ở `resources/sass/global.scss` và sử dụng các biến này ở tất cả các nơi cần thiết, cấm hard code các thông số này. **Sử dụng tính năng variable có sẵn của css, KHÔNG dùng variable của scss**
- Mỗi khi tạo 1 page mới thì cần tạo file `resources/sass/TEN-PAGE.scss` và cập nhật file `webpack.mix.js` để compile file vừa tạo, không đc import tất cả các file `scss` vào chung 1 file vì nó sẽ tạo thành 1 file lớn
- KHÔNG sử dụng các mixin tự tạo chỉ đc sử dụng mixin có sẵn của bootstrap https://getbootstrap.com/docs/5.0/layout/breakpoints/ 
- Sự dụng Media Query của bootstrap https://getbootstrap.com/docs/5.0/layout/breakpoints/
- Không được dùng file `reset.css` để reset các thuộc tính mặc định của các element
- Sử dụng đúng grid system của bootstrap https://getbootstrap.com/docs/5.0/layout/grid/
- **Cấu trúc trong CSS gần GIỐNG với cấu trúc trong file html**
  
## Cài đặt
### Cài đặt project
```
git clone https://github.com/webpress-theme/laravel-mix.git
```
### Cài đặt laravel 

Hướng dẫn https://laravel.com/docs/9.x/installation
### Cài đặt NPM package

```
npm install
```
## Viết HTML và SCSS

Để tạo mới một page cần khai báo như sau

### Tạo view

Tạo file `*.blade.php` trong thư mục `resources/views`. 
Ví dụ `resources/views/homepage.blade.php`

Khai báo nội dung của file blade như sau: 

```
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
        <h1>h1. Bootstrap heading</h1>
    </main>
@endsection

```

**Chú ý: **
Mỗi page sẽ cần có file css riêng, không được load file css của page khác.

Không được thay đổi nội dung của file `resources/sass/vendor.scss`
Mỗi template sẽ có các màu, font-size, font-family theo quy định. các thông số này cần được khai báo trong file `resources/sass/global.scss`. Tất cả những nơi sử dụng các thông số này cần được sử dụng dưới dạng biến (tham khảo https://www.w3schools.com/css/css3_variables.asp)

Mỗi page sẽ load các file css theo thứ tự sau

```
<link rel="stylesheet" href="./css/vendor.css" />
<link rel="stylesheet" href="./css/global.css" />
<link rel="stylesheet" href="./css/header.css" />
<link rel="stylesheet" href="./css/footer.css" />
<link rel="stylesheet" href="./css/@yield('file').css">
```

### Khai báo đường dẫn
Khai báo đường dẫn cho page này bằng cách cập nhật file `routes/web.php`.

> Chi tiết hướng dẫn https://laravel.com/docs/9.x/routing
```
Route::get('/', function () {
    return view('homepage');
});
```

### Tạo file scss

- File `scss` được viết ở thư mục `resources/sass`

- Cấu hình `webpack.mix.js`

```
mix.sass('resources/sass/filename.scss', 'public/css'); 
```

### Biên dịch scss

```
npm run watch
```

> Khi thay đổ cấu hình `webpack.mix.js` cần phải chạy lại lệnh biên dịch 















