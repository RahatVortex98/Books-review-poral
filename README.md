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

## 🖼️ Screenshots
> All screenshots are stored in the `/screenshots` folder.

### 🔍 Search by Title
![Search by title](screenshots/search_by_title.PNG)

### 🏠 Home Page (Latest Books)
![Front page](screenshots/front_page.PNG)

### 🌟 Popular Last Month
![Popular last month](screenshots/popular_last_month.PNG)

### 📅 Popular Last 6 Months
![Popular last 6 months](screenshots/popular_last_6_month.PNG)

### 🏆 Highest Rated Last Month
![Highest rated last month](screenshots/highest_rated_last_month.PNG)

### 🏅 Highest Rated Last 6 Months
![Highest rated last 6 months](screenshots/highest_rated_last_6_month.PNG)

### 📖 Single Book Review & Rating
![Book review and rating](screenshots/book_review_and_rating.PNG)


