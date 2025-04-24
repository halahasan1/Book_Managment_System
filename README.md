#  Book Managment System

A simple Laravel application to manage books, authors, and categories. Users can create, view, update, and delete records, and upload book covers.

---

##  Features

- CRUD for Books, Authors, and Categories
- File upload for book covers
- Pagination and relationships (Books belong to Authors & Categories)
- Validations using Form Requests
- Seeding sample data

---

##  Requirements

- PHP 8.x
- Composer
- Laravel 10.x
- MySQL
- Node.js & npm (for frontend assets)

---

##  Installation

```bash
# 1. Clone the repository
git clone https://github.com/your-username/book-library.git

# 2. Navigate into the project
cd book-library

# 3. Install PHP dependencies
composer install

# 4. Install frontend dependencies 
npm install && npm run dev

# 5. Copy the example environment file
cp .env.example .env

# 6. Generate application key
php artisan key:generate

# 7. Run migrations and seeders
php artisan migrate --seed

# 8. Serve the app
php artisan serve
