# Implementation Plan: Car & Office Rent Management ERP

This document outlines the steps to build the database schema, models, authentication, and notification support for the Car & Office Rent Management ERP using Laravel 9.

## 1. Analyze Requirements
- Identify the 11 entities and their fields.
- Determine relationships between entities.

## 2. Setup Authentication
- Install Laravel Breeze for scaffolding.
- Add a `role` field to users for `admin`, `legal`, `fleet_manager`, `driver`, and `finance`.

## 3. Generate Models and Migrations
Use `php artisan make:model ModelName -m` for the following:
1. User (update existing migration)
2. Branch
3. OfficeRentAgreement
4. AgreementRenewal
5. Vehicle
6. VehicleServiceRequest
7. VehicleMaintenanceRecord
8. VehicleLicense
9. VehicleInspection
10. BranchUtility
11. UtilityPayment

Additionally, run `php artisan notifications:table`.

### Fields for Migrations
- **Users**: name, email, password, role
- **Branches**: name, location, proposed_office, landlord_details, estimated_rent
- **OfficeRentAgreements**: branch_id, agreement_id, landlord_name, property_address, monthly_rent, payment_schedule, start_date, end_date, status, approved_by
- **AgreementRenewals**: office_rent_agreement_id, new_rent_amount, new_start_date, new_end_date, status, approved_by
- **Vehicles**: plate_number, registration_number, mileage, last_service_date
- **VehicleServiceRequests**: vehicle_id, requested_by, problem_description, service_type, urgency_level, status, service_provider, approved_by
- **VehicleMaintenanceRecords**: vehicle_id, vehicle_service_request_id, service_date, service_report_path, recorded_by
- **VehicleLicenses**: vehicle_id, expiry_date, receipt_path
- **VehicleInspections**: vehicle_id, expiry_date, certificate_path
- **BranchUtilities**: branch_id, type, provider, account_number, payment_cycle
- **UtilityPayments**: branch_utility_id, amount, payment_date, receipt_path, paid_by

## 4. Define Model Relationships
- `Branch` hasMany `OfficeRentAgreement`
- `OfficeRentAgreement` belongsTo `Branch`
- `OfficeRentAgreement` hasMany `AgreementRenewal`
- `Vehicle` hasMany `VehicleServiceRequest`, `VehicleMaintenanceRecord`, `VehicleLicense`, `VehicleInspection`
- `VehicleServiceRequest` belongsTo `Vehicle` and `User` (requested_by/approved_by)
- Etc.

## 5. Notification System
- Use built-in database notifications table.
- Potentially add Notification classes and scheduling.

## 6. Verification
### Automated
- `php artisan migrate:fresh` to test migrations and rollbacks.

### Manual
- Review generated migration files for correct field types and foreign keys.

---
This plan will serve as a reference during development and review.