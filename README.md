
# Blank Page

A Simple notepad web app.

## Prerequisites

Before you begin, ensure you have the following requirements installed on your local machine:

- PHP (>= 8.2)
- Composer (https://getcomposer.org/)
- MySQL or any other database of your choice

## Installation

1. **Clone the repository:**

   ```bash
   git clone git@github.com:abrarprogrammer/blank-page.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd blank-page
   ```

3. **Install PHP dependencies:**

   ```bash
   composer install
   ```

4. **Create a copy of the `.env` file:**

   ```bash
   cp .env.example .env
   ```

5. **Generate application key:**

   ```bash
   php artisan key:generate
   ```

6. **Configure the database:**

   Update the `.env` file with your database credentials.

7. **Run database migrations and seed:**

   ```bash
   php artisan migrate --seed
   ```

## Usage

To start the local development server, run the following command:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your web browser to access the application.

## License

This project is licensed under the MIT License and is the ownership of [Abrar Ahmed](https://github.com/abrarprogrammer)
