l
# Laravel 
# Filament admin panel
# vite

## Vorbereitung

falls port 80 belegt ist
```bash
sudo service apache2 status
```
oder
```bash
sudo service ngnix status
```
```bash
sudo service apache2 stop
```
oder
```bash
sudo service nginx stop
```
wenn mysql läuft
```bash
sudo service mysql stop
```

## Installation with docker

#### 1. Clone the project
```bash
git clone https://github.com/zerobitone/collectively.git
```


#### 2. Run `composer install`
Navigate into project folder using terminal and run

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

#### 3. Copy `.env.example` into `.env`

```bash
cp .env.example .env
```

#### 4. Start the project in detached mode

```bash
./vendor/bin/sail up -d
```

#### 5. Set encryption key

```bash
./vendor/bin/sail artisan key:generate --ansi
```

#### 6. Run migrations
```bash
./vendor/bin/sail artisan make:migration create_collectdb1_database
```
```bash
./vendor/bin/sail artisan migrate
```

#### 7. Add Filament Admin user

```bash
./vendor/bin/sail artisan make:filament-user
```
#### 8. Add Storage Link
```bash
./vendor/bin/sail artisan storage:link
```
#### 9. Make Model Category
```bash
./vendor/bin/sail artisan make:model Category -m
```
#### 10. Make Model Post
```bash
./vendor/bin/sail artisan make:model Post -m
```
#### 11. Make Model CategoryPost
```bash
./vendor/bin/sail artisan make:model CategoryPost -m
```
### Access to the docker container
```bash
./vendor/bin/sail bash
```
inside docker container run
```bash
npm install
```
and
```bash
npm run dev
```
to stop server
```bash
./vendor/bin/sail down -v
```
to start again
```bash
./vendor/bin/sail up -d
```



# Alt




Rename the .env.example file to .env, and fill it with your local info, then:

Install PHP and JavaScript dependencies:

    composer install
    npm install

Generate Laravel keys:

    php artisan key:generate
    
    
Run the Vite development server...

    php artisan serve
    npm run dev
 
Build and version the assets for production...

      npm run build

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
