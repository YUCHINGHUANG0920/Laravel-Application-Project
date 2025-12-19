# Laravel Application Project

## Project Overview

**SampleName** is a simple Laravel-based web application that demonstrates user management, domain management, and subscription plan selection. The project features:

- User registration, login, and authentication.
- Domain management: users can add, view, and manage their domains. Domains are cleaned and stored uniquely.
- Admin-only users page: view all registered users and their associated domains.
- Plans page: users can view different subscription plans and change their current plan.
- Responsive UI using **Bootstrap**.
- Footer with dynamic current year.
- Middleware protection for authenticated and admin-only routes.

## Project Goals

The main goal of this project is to showcase:

1. Laravel backend development including models, controllers, migrations, and middleware.
2. User authentication and authorization (including admin checks).
3. Database relationships: one-to-many (users → domains), one-to-one (user → plan).
4. Clean and reusable frontend using Blade templates and Bootstrap.
5. Proper seeding and setup for testing purposes.


## Requirements:
- PHP
- Composer
- SQLite


## Installation & Setup

Follow these steps to run the project locally:

### 1. Clone the repository

```bash
git clone <your-repo-url>
cd sample-project
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create .env file

```bash
cp .env.example .env
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Database configuration
Using SQLite (default)  
```bash
touch database/database.sqlite
```

### 6. Run migrations and seeders

```bash
php artisan migrate --seed
```

### 7. Run the development server

```bash
php artisan serve
```
Open in browser:  
http://127.0.0.1:8000 will redirect you to /login automatically


### 8. Default Admin Login

After seeding, you can log in with the admin account:  

Email: admin@example.com  
Password: password  

### 9. Test Non-Admin Users

If you want to test with a non-admin user, pick any user from the `users` table.   
All seeded users have the default password: password  
