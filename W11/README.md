# Smart Cafe — Laravel Authentication & CRUD Submission

## รายวิชา
โครงงานระบบจัดการร้าน Smart Cafe ด้วย Laravel Framework

## ส่วนประกอบ
1. Authentication ด้วย Laravel Breeze
2. ฐานข้อมูล 3 ตาราง: customers, products, orders
3. CRUD สินค้า
4. Dashboard
5. Blade Layout ด้วย `<x-app-layout>`
6. Route Protection ด้วย middleware `auth`

## วิธีติดตั้ง

```bash
composer install
cp .env.example .env
php artisan key:generate
```

ตั้งค่าฐานข้อมูลใน `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smart_cafe
DB_USERNAME=root
DB_PASSWORD=
```

ติดตั้ง Breeze:

```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
php artisan migrate
npm install
npm run build
php artisan db:seed
php artisan serve
```

เปิด:
`http://127.0.0.1:8000`

## บัญชีทดสอบ
Seeder จะสร้างผู้ใช้:
- Email: admin@smartcafe.test
- Password: password

## เส้นทางหลัก
- `/` หน้าแรก
- `/dashboard` Dashboard (ต้อง Login)
- `/products` รายการสินค้า
- `/products/create` เพิ่มสินค้า (ต้อง Login)
- `/products/{id}/edit` แก้ไขสินค้า (ต้อง Login)
- `/customers` ลูกค้า
- `/orders` รายการคำสั่งซื้อ

## สิ่งที่ควรถ่ายภาพส่งอาจารย์
1. หน้า Register
2. หน้า Login
3. Dashboard หลัง Login
4. หน้า Products
5. หน้า Add Product
6. หน้า Edit Product
7. ผลการ Logout/กลับไป Login
8. phpMyAdmin แสดง 3 ตาราง
9. `php artisan route:list`
10. `php artisan migrate:status`
