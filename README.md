# Blade Creator
v.0.1903.20

Инструмент для создания фронта с использованием Laravel Blade шаблонизатора.

Поддержка роутов.

## Инструкция

Клонируйте данный репозиторий.


**Переименуйте каталог в имя каталога вашего проекта:**

```bash
mv Laravel-Docker-LAMP-version YOUR_PROJECT_NAME
```

3. Откройте файл настройки `.env` в корне проекта и укажите следующие параметры:

* `PROJECT_NAME` - если хотите, что бы доккер обрабатывал вами именнованный проект (это не связано с именем корневой диретории), укажите здесь это имя. Учтите, что имя должно совпадать с именем каталога в директории `/www/`. По умолчанию указано `laravel.dev`.

* `ROOT_PASSWORD` - пароль root-доступа к базе данных в доккере.

* `DATABASE` - задаст имя базы данных для работы с ней Laravel-проекта.

* `USER` - задаст пользователя с доступом у базе данных.

* `PASSWORD` - задаст пароль доступа пользователя.

**Дать права на каталоги `storage` и `bootstrap/cache` в каталоге Laravel-проекта:**

```bash
cd YOUR_PROJECT_NAME/www/laravel.dev
sudo chmod 777 -R storage && sudo chmod 777 -R bootstrap/cache
```
** Запустить сборку проекта и стартануть его:**

```bash
cd ../..
docker-compose up --build
```

**Дождитесь окончания инициализации Composer:**

```bash
composer_1 ...
```

Переименуйте файл `.env.example` в `.env`:

```bash
cd www/laravel.dev
mv .env.example .env
```

Сгенерируйте новые ключи:
```bash
php artisan key:generate
```

На данный момент можно запустить проект по адресу:

```bash
http://localhost:8080/
```

Так же можно открыть PHPMyAdminer:

```bash
http://localhost:6080/
```

По умолчанию, рабочая база данных - `laravel`, логин и пароль - `root`.


## Доступы к терминалам

Доступ к bash-терминалу сервера (в каталоге доккер-проекта):

```bash
docker-compose exec server bash
```

Доступ к bash-терминалу MySQL-сервера (в каталоге доккер-проекта):

```bash
docker-compose exec db bash
mysql -u root -p
```

## ТЕСТ

Перейдите в каталог с Laravel-проектом (по умолчанию `/www/laravel.dev`) и выполните команду:

```bash
php artisan make:auth
```

Внесите настройки доступа к базе данных в файле `.env` в каталоге Laravel-проекта.

Обратите внимание, что ip сервера отличается от ip-адреса MySQL сервера. В настройка `DB_HOST` не стоит указывать `localhost` или `127.0.0.1`. Вам необходимо указать ip-адрес MySQL-сервера, который можно узнать командой:

````bash
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' container_name_or_id
````

Запустите миграции:

```bash
php artisan migrate
```