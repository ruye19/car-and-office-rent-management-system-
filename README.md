<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project: Car & Office Rent Management ERP

This repository contains the backend for a Laravel 9 application designed to manage branch offices, car fleet operations, and associated rental and utility agreements.

### Key Features Implemented
- User authentication and role management (`admin`, `legal`, `fleet_manager`, `driver`, `finance`) via Laravel Breeze.
- Eleven primary database entities with migrations and Eloquent models:
  - `Branch` – office locations and landlord data
  - `OfficeRentAgreement` and `AgreementRenewal` – track rental contracts and renewals
  - `Vehicle`, `VehicleServiceRequest`, `VehicleMaintenanceRecord`, `VehicleLicense`, `VehicleInspection` – full vehicle lifecycle
  - `BranchUtility` and `UtilityPayment` – manage branch utility accounts and payments
- Notification system scaffolded with database notifications and a generic notification class.
- Placeholder scheduling logic in `app/Console/Kernel.php` for periodic tasks.

### Getting Started
1. **Install dependencies**
   ```bash
   composer install
   npm install
   npm run dev    # compile assets
   ```
2. **Configure environment**
   Copy `.env.example` to `.env` and set your database credentials.
3. **Run migrations**
   ```bash
   php artisan migrate:fresh
   ```
4. **Seed data (optional)**
   Create seeders for branches, users, vehicles, etc.
5. **Start development server**
   ```bash
   php artisan serve
   ```

### Next Steps
- Build controllers, routes, and views for each entity.
- Implement authorization policies based on user roles.
- Add automated tests for models & features.
- Create notification classes for real scenarios (expiring agreements, service requests, etc.).

---

This README will evolve as features are added. For now, it outlines current project status and how to get up and running.
