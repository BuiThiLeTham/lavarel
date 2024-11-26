<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Bài Tập Laravel

Yêu cầu bài tập:

- Bài 1: Giao Diện Frontend.
- Bài 2: Giao Diện Backend.
- Bài 3: Đăng nhập đăng xuất Admin.
- Bài 4: Danh mục sản phẩm.
- Bài 5: Sửa Danh mục sản phẩm.
- Bài 6: Thêm thương hiệu sản phẩm.
- Bài 7: Sửa xóa thương hiệu sản phẩm.
- Bài 8: Hiểu thị thương hiệu sản phẩm ra trang chủ.

## Cài đặt môi trường phát triển

Trước khi clone và chạy dự án Laravel, bạn cần chuẩn bị môi trường phát triển phù hợp. Đảm bảo rằng bạn đã cài đặt các công cụ sau:

- Git: Dùng để clone dự án.
- PHP: Laravel yêu cầu PHP phiên bản <strong> 8.x </strong> trở lên.
- Composer: Quản lý các phụ thuộc của dự án Laravel.
- MySQL (hoặc bất kỳ cơ sở dữ liệu nào được sử dụng trong dự án).
- Nếu chưa cài đặt, bạn có thể tải về và cài đặt các công cụ này:

Git: https://git-scm.com/

PHP: https://www.php.net/

Composer: https://getcomposer.org/

MySQL: https://dev.mysql.com/downloads/

## Hướng dẫn sử dụng

B1: Tải các ứng dụng xampp, vscode.

B2: Git clone https://github.com/BuiThiLeTham/lavarel.git

B3: Tạo CSDL tên lavarel sau đó Copy đoạn lệnh mysql trong tệp database.txt và dán lên.

Hoặc import lavarel.sql vào cơ sở dữ liệu.

B4: Sau đó mở project trên vscode. Mở new terminal trên vscode.

B5: Chạy lệnh các lệnh sau:
- composer install
- cp .env.example .env

B6: Sau đó, mở file .env và thay đổi các thông số như:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=laravel

DB_USERNAME=root

DB_PASSWORD=  (nếu có mật khẩu)

B7: Chạy lệnh sau: 
- php artisan key:generate
- php artisan migrate
- php artisan serve

Lệnh này sẽ khởi động một server phát triển và bạn có thể truy cập ứng dụng Laravel của mình tại http://localhost:8000 hoặc một địa chỉ khác tùy thuộc vào cổng mà server đang sử dụng.

B8: Mở trình duyệt, dán http://localhost:8000/

http://localhost:8000/admin để đăng nhập
email: admin@gmail.com
pass: 123456
