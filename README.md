# OTK Group Assessment Task

This simple assessment task takes in user details, validates and then stores in a database.

## Usage

1. Clone this repository

```bash
git clone https://github.com/oxiginedev/otk-assessment.git
```

2. Change working directory

```bash
cd otk-assessment
```

3. Install composer and npm dependencies

```bash
composer install
yarn install
```

4. Create environment file

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Fill in database conection details
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=otk_assessment
DB_USERNAME=root
DB_PASSWORD=password
```

7. Run the application

```bash
php artisan serve --port=PORT
```

Application should now be accessible at http://localhost:{PORT}

## Tests

This functionality is properly tested for possible edge cases

```bash
php artisan test
```