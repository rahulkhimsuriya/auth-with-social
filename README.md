# Laravel: Auth with Social

This is simple project login with sicial sites.

## Installation

### Prerequisites

* To run this project, you must have PHP 7.4 installed.
* You should setup a host on your web server for your local domain. For this you could also configure Laravel Homestead or Valet.

### Step 1

Begin by cloning this repository to your machine, and installing all Composer & NPM dependencies.

```bash
git clone https://github.com/rahulkhimsuriya/auth-with-social.git
cd auth-with-social 
composer install 
npm install && npm run dev
```

### Step 2
Copy .env.example to .env
Setup Database. <a href="https://laravel.com/docs/7.x/database">Read more</a>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE='auth-with-social'
DB_USERNAME=root
DB_PASSWORD=
```

### Step 3
Open .env file and provide values.

```
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
GITHUB_REDIRECT_URL='http://127.0.0.1:8000/auth/github/callback'

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URL='http://127.0.0.1:8000/auth/google/callback'

FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
FACEBOOK_REDIRECT_URL='http://127.0.0.1:8000/auth/facebook/callback'
```

### Step 4

Run Database Migration
```
php artisan migrate
```

### Step 5

Next, boot up a server and visit your site. 
```
php artisan serve
```

If using a tool like Laravel Valet, of course the URL will default to `http://auth-with-social.test`.
