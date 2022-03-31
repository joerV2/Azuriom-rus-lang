<?php

return [
    'title' => 'Установка',

    'welcome' => 'Azuriom - игровая CMS <strong>нового поколения</strong>, это <strong>бесплатн</strong> и <strong>с открытым исходным кодом</strong>, и представляет собой <strong>современную, надежную, быструю и безопасную</strong> альтернативу существующей CMS, чтобы вы могли получить <strong>наилучший возможный опыт работы в Интернете</strong>.',

    'back' => 'Назад',

    'requirements' => [
        'php' => 'PHP :version или выше',
        'writable' => 'Разрешение на чтение и запись',
        'rewrite' => 'Перезапись URL включена',
        'extension' => 'Расширение :extension',
        'function' => 'Функция :function включена',

        'refresh' => 'Обновить требования',
        'success' => 'Azuriom готов к настройке!',
        'missing' => 'На вашем сервере нет необходимых требований для установки Azuriom.',

        'help' => [
            'writable' => 'Вы можете попробовать эту команду, чтобы предоставить разрешение на запись: <code>:command</code>.',
            'rewrite' => 'Вы можете следовать инструкциям в <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">нашей документации</a> для включения перезаписи URL.',
            'htaccess' => 'Файл <code>.htaccess</code> или <code>public/.htaccess</code> отсутствует. Убедитесь, что вы включили скрытые файлы и что файл присутствует.',
            'extension' => 'Вы можете попробовать эту команду, чтобы установить недостающие расширения PHP.: <code>:command</code>.<br>После этого перезапустите Apache или Nginx.',
            'function' => 'Вам необходимо включить эту функцию в файле php.ini PHP, отредактировав значение<code>disable_functions</code>.',
        ],
    ],

    'database' => [
        'title' => 'База данных',

        'type' => 'Тип',
        'host' => 'Хост',
        'port' => 'Порт',
        'database' => 'База данных',
        'user' => 'Пользователь',
        'password' => 'Пароль',

        'warn' => 'Этот тип базы данных не рекомендуется и должен использоваться только тогда, когда невозможно сделать иначе..',
    ],

    'game' => [
        'title' => 'Игра',

        'locale' => 'Язык',

        'warn' => 'Будьте осторожны, после завершения установки изменить это без полной переустановки Azuriomа будет невозможно!',

        'install' => 'Установка',

        'user' => [
            'title' => 'Учетная запись администратора',

            'name' => 'Имя',
            'email' => 'E-Mail адресс',
            'password' => 'Пароль',
            'password_confirm' => 'Подтвердите пароль',
        ],

        'minecraft' => [
            'premium' => 'Включение проверки имени пользователя с Minecraft.net',
        ],

        'steam' => [
            'profile' => 'URL профиля Steam',
            'profile_info' => 'Этот пользователь Steam будет администратором сайта..',

            'key' => 'Ключ Steam API',
            'key_info' => 'Вы можете найти свой Steam API Key на <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a>.',
        ],
    ],

    'success' => [
        'thanks' => 'Спасибо, что выбрали Azuriom!',
        'success' => 'Ваш веб-сайт был успешно установлен, теперь вы можете его использовать и создавать что-то классное!',
        'go' => 'Начать',
        'support' => 'Если вы цените Azuriom и нашу работу, вы можете <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">поддержать нас</a>.',
    ],
];
