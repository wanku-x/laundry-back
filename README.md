# ITC :: Стирка

## Деплой

Для деплоя необходимы установленные:

* `composer`
* `Apache 2.4`
* `MySQL`
* `PHP 7.2`
* `OpenSSL PHP Extension`
* `PDO PHP Extension`
* `Mbstring PHP Extension`
* `Tokenizer PHP Extension`
* `XML PHP Extension`
* `Ctype PHP Extension`
* `JSON PHP Extension`
* `BCMath PHP Extension`
* `phpMyAdmin 4.8.4`

### 0. Создать приложение VK

Аутентификация пользователя происходит через VK API. Поэтому для корректной работы сайта необходимо созданное приложение VK.

Перейдите по адресу <https://vk.com/apps?act=manage> и нажмите **"Создать приложение"**.

Введите любое название и в поле **"Платформа"** выберите **"Веб-сайт"**

Пропишите **"Адрес сайта"**. Если вы запускаете на локальном сервере, то `http://localhost:8000`. Если нет, то введите свой адрес сайта.

Пропишите **"Базовый домен"**. Если локальный сервер - `localhost`, если нет - свой домен.

Нажмите **"Подключить сайт"**. Перейдите в **"Настройки"** созданного вами приложения. Введите **"Доверенный redirect URI"** со значением `http://localhost:8000/api/v1/callback`. Если вы запускаете на выделенном сервере, то замените `localhost:8000` на свой домен.

### 1. Склонировать репозиторий

```bash
git clone https://github.com/wanku-x/laundry-back.git
```

### 2. Прописать настройки Laravel

Перейдите в дерикторию с вашим проектом:

```bash
cd ./laundry-back
```

Скопируйте пример настроек `.env.example` и сохраните его в корне каталога под названием `.env`:

```bash
cp .env.example .env
```

При необходимости, замените `localhost` на используемый вами домен (при деплое на выделенный сервер) в файле `.env`:

```
APP_URL=http://localhost
```

Заполните данные для подключения к БД в файле `.env`:

```
DB_HOST={host}
DB_PORT={port}
DB_DATABASE={db_name}
DB_USERNAME={db_user}
DB_PASSWORD={db_password}
```

Пропишите ID и секретный ключ созданного приложения ВК. При необходимоти, замените `localhost:8000` на используемый вами домен:

```
VKONTAKTE_KEY={vkID}
VKONTAKTE_SECRET={vkSECRET}
VKONTAKTE_REDIRECT_URI=http://localhost:8000/api/v1/callback
```

### 3. Установить зависимости Laravel

```bash
composer install
```

### 4. Сгенерировать секретный ключ

```bash
php artisan key:generate
```

### 5. Мигрировать базы данных

Откройте phpMyAdmin по ссылке <http://localhost/phpmyadmin/index.php>. Создайте базу данных.

Затем выполните миграцию:

```bash
php artisan migrate
```

При желании, вы можете после этого заполнить базу данных тестовыми значениями из файла `test.sql`.

### 6. Запустить локальный сервер

```bash
php artisan serve
```

Если необходимо запустить на выделенном сервере, то вам достаточно склонировать содержимое проекта в корневую папку вашего сайта.

## API

### Вход и регистрация

```
/api/v1/login
```

### Модель User

```
/api/v1/users
```
```
/api/v1/users/current
```
```
/api/v1/users/{id}
```
```
/api/v1/users/vk/{id}
```

### Модель Dorm

```
/api/v1/dorms/
```
```
/api/v1/dorms/{id}
```
```
/api/v1/dorms/{id}/floors
```
```
/api/v1/dorms/{id}/floors/{number}
```
```
/api/v1/dorms/{id}/floors/{number}/rooms
```

### Модель Floor

```
/api/v1/floors/
```
```
/api/v1/floors/{id}
```
```
/api/v1/floors/{id}/rooms
```

### Модель Room

```
/api/v1/rooms/
```
```
/api/v1/rooms/{id}
```

## Фронтэнд

Исходники фронтэнда лежат по адресу <https://github.com/dimaetu/laundry-front>