# 🎓 Internship Portal Project

The **Internship Portal** is a Laravel-based web application designed to streamline the management of internship opportunities for students, companies, and administrators. It helps manage applications, postings, user roles, and reporting in a secure, efficient manner.

---

## 📌 Key Features

✅ **User Authentication & Role Management**  
- Secure login & registration with email verification  
- Role-based access for Admins, Students, and Companies  

✅ **Internship Listings Management**  
- Companies can post, edit, and manage internship opportunities  
- Students can browse and apply for internships  

✅ **Application Tracking System**  
- Track application status (Pending, Accepted, Rejected)  
- Notifications for status updates and new opportunities  

✅ **Resume & Profile Management**  
- Students can upload resumes and maintain personal profiles  
- Companies can view applicant profiles and resumes  

✅ **Admin Dashboard**  
- Monitor site statistics, user activity, and manage content  
- Generate reports on users and applications  

✅ **Secure & Scalable Architecture**  
- Built using Laravel 10+ and MySQL  
- Adopts security best practices for user data and APIs  

---

## 🛠️ Tech Stack

| Technology  | Description                  |
|-------------|------------------------------|
| **Backend** | Laravel (PHP Framework)      |
| **Frontend**| Blade, Tailwind CSS          |
| **Database**| MySQL                        |
| **Auth**    | Laravel Breeze / Sanctum     |
| **Notifications**| Laravel Mail / Toast    |

---

## 🚀 Getting Started

### 📌 Prerequisites

Ensure the following are installed:
- **PHP** (v8.1 or above)  
- **Composer**  
- **MySQL**  
- **Node.js & npm**

---

### 🏗️ Installation

#### 1️⃣ Clone the Repository
```bash
git clone https://github.com/yourusername/internship-portal.git
cd internship-portal

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

