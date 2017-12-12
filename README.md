# Installation
Require this package with composer:
```sh
$ composer require tkaratug/yolcu
```

After updating composer, add the ServiceProvider to the providers array in ``config/app.php``
```php
Tkaratug\Yolcu\YolcuServiceProvider::class,
```

Run migrations and seeds with the commands below:
```sh
$ php artisan migrate
$ php artisan db:seed --class="Tkaratug/Yolcu/YolcuSeeder"
```

Go to ``http://localhost:8000/yolcu`` on the browser.
