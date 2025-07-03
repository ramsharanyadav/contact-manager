# contact-manager
contact import with xml file with CRUD

A Laravel-based web application for managing contact with Import Xml file with CRUD operation, Bootstrap styling. The application stores data in a Database and displays in a index page table with pagination.

---

## 🚀 Features

- Laravel 12 with Bootstrap 5
- XML file data import (name, phone)
- Single Contact save with name
- Data saved to MySql Database
- Table displays:
  - Sr No
  - Name
  - Phone
- Table auto-redirect after submit or update
- Editing contact entries
- Delete product only after user confirmation ✅
- Auto-refresh product table after actions
- Table Pagination per page 10 record
- Success/error notification with auto-hide after 2 seconds

---

## 🧱 Requirements

- PHP > 8.2
- Composer
- Laravel CLI
- MySql Database needed
---

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ramsharanyadav/contact-manager.git
   cd contact-manager

2. **Install PHP dependencies**
    ```bash
    composer install

3. **Create .env file, key generation and create Database configuration**

    ```bash
    cp .env.example .env

    php artisan key:generate

    Add Database configuration

    php artisan migrate

4. **Run the local development server**
    ```bash
    php artisan serve

5. **Now open your browser and go to:**
    ```
    http://127.0.0.1:8000/
