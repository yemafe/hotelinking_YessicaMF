
git clone https://github.com/yemafe/hotelinking_YessicaMF.git

cd hotelinking_YessicaMF

docker-compose up -d
docker-compose run --rm --no-deps app composer install
docker-compose run --rm --no-deps app php artisan storage:link
create .env File DB credentials

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel-blog
DB_USERNAME=root
DB_PASSWORD=secret

docker-compose run --rm --no-deps app php artisan migrate

docker-compose run --rm --no-deps app php artisan key:generate


