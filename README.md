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

