1. cp .env.example .env and change to your local settings
2. run dump.sql from root. It will create one more database, create table and fill the data
3. composer install
4. php artisan migrate --seed
5. php artisan serve
6. php artisan scheduled:renew-expiring-certificates
