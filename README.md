# contact-manager
contact import with xml file with CRUD

A Laravel-based web application for managing contact with Import Xml file with CRUD operation, Bootstrap styling. The application stores data in a Database and displays in a index page table with pagination.

---

## 🚀 Features

- Laravel 12 with Bootstrap 5
- Bulk import contacts using XML
- Single Contact save using form
- Editing contact entries
- Delete contact only after user confirmation ✅
- Data saved to MySql Database
- Table displays:
  - Sr No
  - Name
  - Phone
- Table auto-redirect after any action
- Table pagination per page 10 record

- success/error notification with auto-hide after 2 seconds

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
