# News Portal

A modern news portal built with Laravel 12, featuring authentication with Laravel Breeze and admin panel powered by Filament.

## Description

News Portal is a web application that allows users to read and manage news articles. It provides a user-friendly interface for readers and a powerful admin panel for content management.

## Technologies Used

-   **Laravel 12** - PHP Framework
-   **Laravel Breeze** - Authentication System
-   **Filament 3** - Admin Panel
-   **MySQL** - Database
-   **TailwindCSS** - Frontend Styling

## Installation

1. Clone the repository

```bash
git clone https://github.com/DimassRfyy/Laravel-NewsPortal.git
cd Laravel-NewsPortal
```

2. Install dependencies

```bash
composer install
npm install
```

3. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database

-   Create a new MySQL database
-   Update .env file with your database credentials

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations and create filament user

```bash
php artisan migrate --seed
php artisan make:filament-user
```

6. Build assets

```bash
npm run dev
```

7. Start the server

```bash
php artisan serve
```

## Documentation

### User Interface

![Homepage Screenshot](https://github.com/DimassRfyy/Laravel-NewsPortal/blob/main/public/assets/images/thumbnails/preview.jpeg?raw=true)

### Admin Panel

![Admin Panel Screenshot](https://github.com/DimassRfyy/Laravel-NewsPortal/blob/main/public/assets/images/thumbnails/preview-admin.png?raw=true)

### Features

1. User Features

    - Browse news articles
    - Filter by categories
    - Search functionality
    - User registration and login
    - Comment on articles

2. Admin Features
    - Manage news articles
    - Category management
    - User management
    - Media library
    - Analytics dashboard

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
