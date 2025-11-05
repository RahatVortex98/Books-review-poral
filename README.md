<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
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


---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/book_review_portal.git
cd book_review_portal
2️⃣ Install dependencies
composer install
npm install
npm run dev
3️⃣ Create .env file
cp .env.example .env
Update your .env file with:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_review_portal
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generate app key
php artisan key:generate
5️⃣ Run migrations and seed the database
php artisan migrate --seed
If you encounter memory issues during seeding, run:
php -d memory_limit=1G artisan db:seed
6️⃣ Start the local development server
php artisan serve
Now open your browser and visit:
👉 http://127.0.0.1:8000/books

💡 Technologies Used

Laravel 11.x — Backend framework

MySQL — Database

Blade — Templating engine

TailwindCSS — Optional styling (used for layout)

Faker — Dummy data generator for seeding

🖼️ Screenshots
🔍 Search by title:
<img width="667" height="252" alt="search by title" src="https://github.com/user-attachments/assets/e0750c9e-f1fa-4501-ac20-ad16e9da2844" />
🏠 Home page:
<img width="403" height="638" alt="front page" src="https://github.com/user-attachments/assets/ff173c2c-6fa1-4ea2-8c20-6df70ec50017" />
🌟 Popular last month:
<img width="395" height="633" alt="popular last month" src="https://github.com/user-attachments/assets/53839380-3fe1-4d51-8372-cb006e318fef" />
📅 Popular last 6 months:
<img width="389" height="631" alt="popular last 6 month" src="https://github.com/user-attachments/assets/ff616d27-e1bd-4825-95b8-8b5e71c7c1f3" />
🏆 Highest Rated last Month:
<img width="390" height="638" alt="higest rated last month" src="https://github.com/user-attachments/assets/437da8bb-50e7-4f9e-ab23-2d3db2c0fd7c" />
🏅 Highest Rated last 6 months:
<img width="400" height="635" alt="higest rated last 6 month" src="https://github.com/user-attachments/assets/8e2e4e5c-4de6-4189-98f6-c7c9b6148f52" />
📖 Single Book Review & Rating:
<img width="659" height="639" alt="book review and rating" src="https://github.com/user-attachments/assets/1160b1e5-1848-4fcc-966b-4acfefc40b37" />
