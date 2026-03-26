
## 📸 Gallery

Below are the visual highlights of the **Inbizsys Supplier Management System**.

### 1. Main Dashboard
Comprehensive overview of all registered suppliers with search and sorting capabilities.
![Dashboard Overview](public/images/Screenshot%20(1).png)

### 2. Search & Filtering
Real-time filtering logic allowing users to find suppliers by Name, Email, or Phone instantly.
![Search Functionality](public/images/Screenshot%20(2).png)

### 3. A4 Print Preview
Dedicated print-optimized view with structured layouts for industrial reporting.
![A4 Print Layout](public/images/Screenshot%20(3).png)

### 4. Supplier Registration
A clean, "Industrial Excellence" styled form for adding new supplier records with validation.
![Add Supplier Form](public/images/Screenshot%20(4).png)

### 5. Supplier Profile/Details
Detailed view of individual supplier information including business addresses.
![Supplier Details](public/images/Screenshot%20(5).png)

### 6. Data Sorting & Ordering
Advanced sorting options to organize data by newest records or alphabetical order.
![Sorting Options](public/images/Screenshot%20(6).png)

### 7. Actions & Management
Edit and Delete workflows with confirmation prompts to ensure data integrity.
![Action Menu](public/images/Screenshot%20(7).png)


🚀 Features

    Full CRUD Operations: Create, Read, Update, and Delete supplier records with ease.

    Data Validation: Implements strict validation rules for names, unique emails, and phone numbers.

    Professional UI: A clean, responsive dashboard built with Tailwind CSS following "Industrial Excellence" design principles.

    Search & Pagination: Optimized to handle supplier data efficiently with built-in search functionality.

    A4 Print View: A dedicated, structured print layout optimized for A4 paper.

        Dynamic Footer: Each printed page includes the page number (left) and the active logged-in user's name (right).

🛠️ Technical Stack

    Framework: Laravel (latest stable) 

    Database: MySQL 

    Styling: Tailwind CSS 

    Architecture: Controller/Blade pattern (No Livewire)

⚙️ Setup Instructions
1. Prerequisites

Ensure you have PHP, Composer, and MySQL (via phpMyAdmin) installed on your system.
2. Installation

Clone the repository and install the dependencies:
Bash

composer install
npm install && npm run build

3. Environment Configuration

    Create your .env file:
    Bash

    cp .env.example .env

    Set your database credentials in the .env file:
    Code snippet

    DB_DATABASE=inbizsys_test
    DB_USERNAME=root
    DB_PASSWORD=

    Generate the app key:
    Bash

    php artisan key:generate

4. Database Migration

Create a database named inbizsys_test in your MySQL server. Then, run the migration to create the suppliers table:
Bash

php artisan migrate

5. Launch

Start the development server:
Bash

php artisan serve

Access the application at http://127.0.0.1:8000.
📝 Usage Notes

    Validation: The system will prevent duplicate emails and ensure all fields are formatted correctly.

    Deletion: A confirmation alert will appear before any record is removed to ensure data integrity.

    Printing: Use the "Print" button on the dashboard to generate the A4-ready report with the required Inbizsys branding.

Company: Inbizsys - Empowering Industrial Excellence 

