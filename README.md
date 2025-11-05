<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-lockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-Database-blue?style=for-the-badge&logo=mysql">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge">
</p>

---

# 📚 Book Review Portal

A **Laravel-based Book Review Portal** where users can browse books, view details, and explore reader reviews dynamically.  
This project demonstrates practical use of **Eloquent ORM**, **database seeding**, **query optimization with `when()`**, and **relationship handling (`hasMany`)** in Laravel.

---

## 🚀 Features

- 📘 List all books dynamically from the database  
- 🧠 Display each book with author and reviews  
- 🧩 Uses `with()` for eager loading to optimize queries  
- 🔍 Dynamic filtering using the `when()` query method  
- 🧰 Seeder integration with `Faker` for dummy data  
- ⚙️ Modern MVC structure following Laravel best practices  
- 🧾 Clean and minimal front-end with Blade templates  

---

## 🧱 Project Structure

book_review_portal/
│
├── app/
│ ├── Models/
│ │ ├── Book.php
│ │ └── Review.php
│ ├── Http/
│ │ └── Controllers/
│ │ └── BookController.php
│
├── database/
│ ├── factories/
│ ├── migrations/
│ └── seeders/
│
├── resources/
│ └── views/
│ ├── layouts/
│ │ └── app.blade.php
│ └── books/
│ └── list.blade.php
│
├── routes/
│ └── web.php
│
├── composer.json
├── package.json
└── README.md

yaml
Copy code

---

## ⚙️ Installation Guide

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/book_review_portal.git
cd book_review_portal
2️⃣ Install Dependencies
bash
Copy code
composer install
npm install
npm run dev
3️⃣ Create .env File
bash
Copy code
cp .env.example .env
Then update your .env file with:

makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_review_portal
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generate Application Key
bash
Copy code
php artisan key:generate
5️⃣ Run Migrations & Seed the Database
bash
Copy code
php artisan migrate --seed
If you encounter memory issues during seeding:

bash
Copy code
php -d memory_limit=1G artisan db:seed
6️⃣ Start the Local Development Server
bash
Copy code
php artisan serve
Now open your browser and visit:
👉 http://127.0.0.1:8000/books

💡 Technologies Used
Laravel 11.x — Backend Framework

MySQL — Database

Blade — Templating Engine

TailwindCSS — Optional styling (used for layout)

Faker — Dummy data generator for seeding

🖼️ Screenshots
All screenshots are stored in the /screenshots folder.

🔍 Search by Title


🏠 Home Page (Latest Books)


🌟 Popular Last Month


📅 Popular Last 6 Months


🏆 Highest Rated Last Month


🏅 Highest Rated Last 6 Months


📖 Single Book Review & Rating


📜 License
This project is licensed under the MIT License.

<p align="center"> Made with ❤️ using Laravel </p> ```
