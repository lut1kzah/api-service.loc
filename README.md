## Создание пустого проекта
В папке будующего проекта команды:  
```shell
composer create-project laravel/laravel .
php artisan install:api
php artisan config:publish cors
php artisan storage:link
```
В корне проекта создать файл .htaccess
```php
RewriteEngine on
RewriteRule ^(.*)$ public/$1 [L]
```

## Установка проекта из репозитория Git
1. Склонировать реп
```shell
cd domains 
git clone https://github.com/lut1kzah/api-service.loc.git

```
2. Установка composer-зависимости
```shell
cd api-service.loc
composer install
```
3. Скопировать файл .env 
```shell
copy .env.example .env
```
4. Дописать ключ , если его нет
```shell
php artisan key:generate
```
5. Изменить файл конфигурации .env
```php
DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=api-service
 DB_USERNAME=root
 DB_PASSWORD=

SESSION_DRIVER=file
```
6. Создайте жесткую ссылку на хран файлов
```shell
php artisan storage:link
```
