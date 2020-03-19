# Blade Creator (Blade template without Laravel)
**v.0.1903.20**

Инструмент для создания html-шаблонов с использованием Laravel Blade шаблонизатора.

Интегрированный Docker.

Поддержка маршрутизации.

## Инструкция

Клонируйте данный репозиторий.

**Переименуйте каталог в имя каталога вашего проекта:**

```bash
mv Orey-Blade-Creator-Blade-template-without-Laravel- YOUR_PROJECT_NAME
```

3. Откройте файл настройки `.env` в корне проекта и укажите следующие параметры:

* `PROJECT_NAME` - если хотите, что бы доккер обрабатывал вами именнованный проект (это не связано с именем корневой диретории), укажите здесь это имя. Учтите, что имя должно совпадать с именем каталога в директории `/www/`. По умолчанию указано `blade.template`.

** Запустить сборку проекта и стартануть его (в каталоге доккер-проекта):**

```bash
docker-compose up --build
```

На данный момент можно запустить проект по адресу:

```bash
http://localhost:8080/
```

## Доступы к терминалам

Доступ к bash-терминалу сервера (в каталоге доккер-проекта):

```bash
docker-compose exec server bash
```

## Использование

Рабочие файлы расположены в директории **www/blade.template/resources**.

Представления вида: **www/blade.template/resources/views**.

Маршруты: **www/blade.template/routes**.

### Создание маршрута

Маршруты указываются в файле **www/blade.template/routes/web.php**.

```php
$router->get('/', function() use ($blade){
    return $blade->render('home');
});
```

Первый параметр - uri, во втором в функцию передается имя файла вида без разширения **.blade.php**.

[Документация по использованию Blade](https://laravel.com/docs/7.x/blade)