## Panduan Penggunaan
- Jalankan `composer update` (di dalam repo project)
- Kemudian jalankan on windows `copy .env.example .env` on linux `cp .env.example .env`
- Selanjutnya jalankan `php artisan key:generate`
- Buat databas (your_database_name) di phpmyadmin
- Langkah selanjutnya setting database nya di .env sebagai berikut:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=username_database
  DB_PASSWORD=password_username
  ```
- Lanjut jalankan `php artisan migrate`
- Jalankan juga `php artisan db:seed`
- Dan yang terakhir jalankan `php artisan serve`

- Done...
