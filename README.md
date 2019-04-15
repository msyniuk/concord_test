<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Concord Test App (Yii 2 Advanced)</h1>
    <br>
</p>

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

INSTALL APP
-------------------

1. Выполнить команду: **git clone https://github.com/msyniuk/concord_test.git %PROJECT%** 
%PROJECT% заменяем на concord_test_mikhail_syniuk
2. Перейти в папку: concord_test_mikhail_syniuk
3. Выполнить команду: **devbox up**
4. Выполнить команду: **devbox bash**
5. sudo -iu dev
6. cd /var/www/html
7. composer install
8. php init
9. php yii migrate
10. Прописать параметры доступа к БД
в файле concord_test_mikhail_syniuk/common/config/main.php

    _**'dsn' => 'mysql:host=concord-mysql;dbname=concord_test_mikhail_syniuk',
    'username' => 'concord',
    'password' => 'concord',**_
11. Проект будет доступен в браузере по адресу: **concord.test**
12. Данные пользователя: 
    Логин: admin
    Пароль: 222222


