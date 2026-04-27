# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Loan Origination System (LOS) for BANK HALDEN PRIME, built with Laravel 10 and Vite. The system manages credit applications, debtor information, credit analysis, simulations, and document generation for various loan-related documents.

## Tech Stack

- **Backend**: Laravel 10 (PHP 8.1+)
- **Frontend**: Vite, Bootstrap 5.3.0, SCSS
- **Database**: MySQL (db_kredit)
- **Authentication**: Laravel UI with Laravel Sanctum
- **Excel Export**: Maatwebsite Excel 3.1

## Development Commands

### Initial Setup
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy .env file if needed
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Seed database (if seeders exist)
php artisan db:seed
```

### Development
```bash
# Start development server
php artisan serve
# Default: http://localhost:8000
# Configured: http://localhost:400 (check .env APP_URL)

# Watch and compile assets (development)
npm run dev

# Build assets for production
npm run build

# Build RTL CSS
npm run build-rtl
```

### Testing
```bash
# Run all tests
php artisan test
# or
./vendor/bin/phpunit

# Run specific test file
php artisan test --filter TestClassName
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Format specific files
./vendor/bin/pint path/to/file.php
```

### Database
```bash
# Run migrations
php artisan migrate

# Rollback last migration
php artisan migrate:rollback

# Fresh migration (drops all tables)
php artisan migrate:fresh

# Seed database
php artisan db:seed
```

### Cache Management
```bash
# Clear all caches
php artisan optimize:clear

# Clear specific caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## Architecture

### Core Domain Models

1. **MasterDebitur**: Main debtor/applicant entity containing personal information, employment details, and credit application data. Uses soft deletes. Relates to Simulation model.

2. **AnalisaKredit**: Credit analysis data including income calculations, SLIK checks, obligations, and disposable income. Relates to MasterDebitur and has many DetailAnalisaKredit records.

3. **Simulation**: Loan simulation calculations including interest rates, insurance, and payment schedules.

4. **AccountOfficer**: Account officers managing credit applications.

5. **NomorUrut**: Sequential document numbering system with format: `{number}/{code}/{roman_month}/{year}`.

### Controllers

Controllers follow standard CRUD patterns with additional export functionality:

- **MasterDebiturController**: Manages debtors with extensive export methods for various loan documents (analisa kredit, memo kredit, SPPK, STTU, perjanjian kredit variants, etc.)
- **AnalisaKreditController**: Handles credit analysis creation and export
- **SimulationController**: Manages loan simulations and retrieves insurance rates
- **AccountOfficerController**: Standard resource controller for account officers
- **UserController**: Manual routes for user management (not using resource routes)

### Helper Functions (app/Helper/GeneralFunction.php)

Key utility functions loaded globally:

- **getNomorUrut($idDebitur, $jenisDokumen)**: Retrieves document number for a debtor
- **generateNomorUrut($jenisDokumen, $kode)**: Generates new sequential document numbers
- **convertToRoman($num)**: Converts month numbers to Roman numerals
- **terbilang($nilai)**: Converts numbers to Indonesian words
- **formatRupiah($nilai)**: Formats numbers as Indonesian currency in words
- **convertCurrencyFormat($value)**: Converts formatted currency string to decimal
- **convertNumberFormat($value)**: Formats numbers with Indonesian formatting (. for thousands, , for decimals)
- **ubahFormatTanggal($tanggal)**: Formats dates in Indonesian locale

### Export System

The system uses Maatwebsite Excel for generating various credit-related documents. All exports are in `app/Exports/` and include:

- Credit analysis reports
- Legal analysis (analisa yuridis)
- Credit memos
- Various loan agreement types (pasangan, sendiri, reguler, non-MOU variants)
- SPPK (Surat Persetujuan Pemberian Kredit)
- STTU (Surat Tanda Terima Uang)
- Debtor data forms

Export routes follow pattern: `/debiturs/export-{document-type}/{id}`

### Routes Structure

Routes are defined in `routes/web.php`:

- Authentication routes via `Auth::routes()`
- Language switching: `/index/{locale}`
- User management: Manual routes (not resource)
- Account officers: Resource routes
- Debiturs: Resource routes + custom simulation and analisa_kredit routes
- Simulations: Resource routes + AJAX rate retrieval
- Analisa kredit: Custom routes (create requires debtor ID)
- Multiple export routes for different document types

### Views Organization

Blade templates in `resources/views/`:

- `layouts/`: Master layouts
- `components/`: Reusable components
- `auth/`: Authentication views
- `debiturs/`: Debtor management views
- `analisa_kredit/`: Credit analysis views
- `simulations/`: Simulation views
- `account_officers/`: Account officer views
- `users/`: User management views

### Asset Pipeline

Vite configuration (`vite.config.js`) handles:

- SCSS compilation from `resources/scss/` (bootstrap, icons, app, custom)
- Static asset copying (fonts, images, js, json, libs) from `resources/` to `public/build/`
- CSS minification with `.min.css` naming
- RTL CSS support via rtlcss

Assets are built to `public/build/` with organized structure:
- `css/` - Compiled stylesheets
- `js/` - JavaScript bundles
- `fonts/`, `images/`, `libs/` - Static assets

### Database Schema

Key tables (from migrations):

- `users`: System users
- `master_debiturs`: Debtor master data (soft deletes enabled)
- `simulations`: Loan simulations
- `analisa_kredit`: Credit analysis
- `detail_analisa_kredit`: Credit analysis details
- `account_officers`: Account officer data
- `insurance`: Insurance rates
- `setting_params`: System parameters
- `nomor_urut`: Document numbering sequences

## Important Notes

- The system uses Indonesian locale for date formatting and number-to-words conversion
- Document numbering follows Indonesian format with Roman numeral months
- Soft deletes are enabled on MasterDebitur model
- Currency formatting uses Indonesian convention (1.000.000,00)
- Export functionality is a core feature with multiple document types
- Database name: `db_kredit` (MySQL)

## Working with This Codebase

- Always use helper functions for number formatting, currency conversion, and date formatting to maintain consistency
- When creating new exports, follow existing patterns in `app/Exports/` and use Maatwebsite Excel
- New document types should register sequential numbering in NomorUrut table
- Export routes should follow the pattern `/debiturs/export-{type}/{id}`
- Use Laravel Pint for code formatting before committing
