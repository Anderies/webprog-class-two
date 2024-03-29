## Code Documentation of Web Programming Class by Anderies

### 1. Web Programming Course Outline:
1. [Session 01 - Install Laravel](https://laravel.com/docs/10.x)
2. [Session 02 - Route & View](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-02)
3. [Session 03 - Install Boostrap via Vite](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-03)
4. [Session 04 - Blade Template Boilerplate](https://github.com/Anderies/webprog-class-two/tree/master/boilerplate-session-04)
-  [Session 04 - Blade Template]
5. [Session 05 - Controller and View](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-05)
- [Session 05 - SOA FastAPI](https://github.com/Anderies/webprog-class-two/tree/master/supplement-session05-api)
- [Session 05 - SOA Laravel](https://github.com/Anderies/webprog-class-two/tree/master/supplement-session-05)
- [Session 05b - Controller and View](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-05b)
6. [Session 06 - Eloquent and Migration](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-06)
7. [Session 07 - Table Relationship and Seeder Factory](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-07)
- [Session 07 - Notion Tutorial](https://brash-sardine-1f6.notion.site/Session-07-Eloquent-Relationship-Seeder-Factory-b1515e7d63f7458f9d2d652c8e32cbd8)
- [Session 07b - Best UTS](https://github.com/Anderies/webprog-class-two/tree/master/best_uts)
8. [Session 08 - Form Validation, old Laravel Feature, Form CRUD](https://github.com/Anderies/webprog-class-two/tree/master/coba-session-08)
9. [Session 09 - Collection]
10. [Session 10 - Localization]
11. [Session 11 - Session & Middleware]
12. [Session 12 - Authentication]
13. [Session 13 - Project Presentation]
14. [Week 2 Kedaireka - Form CRUD + Guzzle](https://github.com/Anderies/webprog-class-two/tree/master/coba-week-02)

### 2. Requirements before Running Project
1. Make sure to copy env.example file by
```
test
Windows:
copy .env.example .env
Linux/Mac:
cp .env.example .env
```

2. Make sure to perform composer update and composer install
```
composer update 
composer install
```

### 2.1 Requirements before Running FastAPI x Laravel Project
#### 2.1.1 Install Python Package Manager
```
install pip or conda
```
#### 2.1.2 install fast-api & transformers
```
pip install fastapi
pip install transformers
```

### 4. COMMAND NEEDED TO RUN BEST_UTS
```
composer install
npm install
copy .env.example .env
php artisan migrate
php artisan db:seed
```

### 5. If ERROR occured during migration or serving what you can do
before doing command do this:
```
php artisan c:cache
```

error DB doesn't exit
```
copy exact database name from env then create exact db name in phpmyadmin DB 
```


