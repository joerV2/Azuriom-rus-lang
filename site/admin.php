<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the admin dashboard
    |
    */

    'nav' => [
        'dashboard' => 'Панель управления',
        'settings' => [
            'heading' => 'Настройки сайта',
            'settings' => [
                'settings' => 'Настройки',
                'global' => 'Основные',
                'security' => 'Защита',
                'performances' => 'Оптимизация',
                'seo' => 'SEO',
                'auth' => 'Аутентификация',
                'mail' => 'Почта',
                'maintenance' => 'Обслуживание',
            ],
            'navbar' => 'Навигационная панель',
            'servers' => 'Сервера',
        ],

        'users' => [
            'heading' => 'Настройка пользователей',
            'users' => 'Пользователи',
            'roles' => 'Роли',
            'bans' => 'Блокировки',
        ],

        'content' => [
            'heading' => 'Контент',
            'pages' => 'Страницы',
            'posts' => 'Посты',
            'images' => 'Изображения',
        ],

        'extensions' => [
            'heading' => 'Расширения',
            'plugins' => 'Плагины',
            'themes' => 'Темы',
        ],

        'other' => [
            'heading' => 'Прочее',
            'update' => 'Обновление',
            'logs' => 'Логи',
        ],

        'profile' => [
            'profile' => 'Профиль',
        ],

        'back-website' => 'Вернуться на сайт',

        'support' => 'Помощь',
        'documentation' => 'Документация',
    ],

    'confirm-delete' => [
        'title' => 'Удалить?',
        'description' => 'Вы уверены, что хотите удалить это? Это действие необратимо!',
    ],

    'footer' => 'Работает благодаря :azuriom &copy; :year. Дизайн панели от :startbootstrap.',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => 'Dashboard',

        'new-update' => 'Новая версия Azuriom доступна: :version',
        'https-warning' => 'Ваш веб-сайт не использует https, вы должны включить и принудительно использовать его для вашей безопасности и безопасности пользователей.',
        'proxy-warning' => 'Если вы используете Cloudflare, вам следует установить плагин Cloudflare Support.',
        'recent-users' => 'Недавние пользователи',
        'active-users' => 'Пользователи онлайн',
        'emails-disabled' => 'Электронная почта отключена. Если пользователь забудет свой пароль, он не сможет его сбросить. Вы можете включить электронную почту в <a href=":url">настройках почты</a>.',
        'users' => 'Пользователи',
        'posts' => 'Посты',
        'pages' => 'Страницы',
        'images' => 'Изображения',
    ],

    'settings' => [
        'index' => [
            'title' => 'Глобальные настройки',

            'site-name' => 'Имя сайта',
            'site-url' => 'URL сайта',
            'site-description' => 'Описание сайта',
            'meta' => 'Мета-ключевые слова',
            'meta-info' => 'Ключевые слова должны быть разделены запятой.',
            'favicon' => 'Favicon',
            'background' => 'Background',
            'logo' => 'Logo',
            'timezone' => 'Часовой пояс',
            'locale' => 'Язык',
            'money' => 'Игровая валюта',
            'copyright' => 'Авторские права',
            'user-money-transfer' => 'Разрешить перевод валюты между пользователями',
            'site-key' => 'Ключ сайта для azuriom.com',
            'site-key-label' => 'Ключ сайта azuriom.com необходим для установки расширений премиум-класса, приобретенных на рынке. You can obtain your site key in your <a href="https://azuriom.com/profile" target="_blank" rel="noopener norefferer">Azuriom profile</a>.',
        ],

        'security' => [
            'title' => 'Настройки безопасности',

            'captcha' => [
                'title' => 'Капча',
                'site-key' => 'Публичный ключ',
                'secret-key' => 'Секретный ключ',
                'recaptcha' => 'Вы можете получить reCaptcha ключи на <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer"> Google reCaptcha website</a>. Вам необходимо использовать <strong>reCaptcha v2</strong> ключи.',
                'hcaptcha' => 'Вы можете получить hCaptcha ключи на <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer"> hCaptcha website</a>.',
            ],

            'hash' => 'Алгоритм хеширования',
            'hash-info' => 'Argon2id - самый безопасный алгоритм, но для него требуется PHP 7.3 или выше. Если вы используете PHP 7.2, вам следует использовать Argon2i.',
            'hash-error' => 'Этот алгоритм хеширования не поддерживается вашей текущей версией PHP.',
        ],

        'performances' => [
            'title' => 'Настройки производительности',

            'cache' => [
                'title' => 'Очистить кэш',
                'description' => 'Очистите кеш веб-сайта.',

                'status' => [
                    'cleared' => 'Кеш успешно очищен.',
                    'clear-error' => 'Ошибка при очистке кеша.',
                ],

                'actions' => [
                    'clear' => 'Очистить кэш',
                ],
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost улучшает производительность вашего сайта, добавляя еще один эксклюзивный слой кеширования.',
                'info' => 'Если у вас возникли проблемы после включения расширения, вам следует перезагрузить кеш.',

                'current' => [
                    'status' => 'AzBoost в настоящее время :status.',
                    'enabled' => '<span class="text-success">активен</span>',
                    'disabled' => '<span class="text-danger">отключён</span>',
                ],

                'status' => [
                    'enabled' => 'AzBoost активен.',
                    'disabled' => 'AzBoost отключён.',
                    'reloaded' => 'AzBoost перезагружается.',

                    'enable-error' => 'Ошибка при активации AzBoost.',
                ],

                'actions' => [
                    'enable' => 'Аключить AzBoost',
                    'disable' => 'Отключить AzBoost',
                    'reload' => 'Перезагрузить AzBoost',
                ],
            ],
        ],

        'seo' => [
            'title' => 'SEO settings',

            'html-head-code' => 'HTML-код для включения в <head> всех страниц.',
            'html-body-code' => 'HTML-код для включения в <body> всех страниц.',

            'html-code-info' => 'Например: баннер cookie, Google Analytics и т.д.',

            'welcome-popup' => [
                'enable' => 'Включить приветственное всплывающее окно?',
                'message' => 'Приветственное всплывающее сообщение',
                'info' => 'Это всплывающее окно будет отображаться при первом посещении сайта пользователем.',
            ],
        ],

        'auth' => [
            'title' => 'Аутентификация',

            'conditions-url' => 'URL условий',
            'conditions-info' => 'Пользователи должны принять эти условия при регистрации.',
            'enable-user-registration' => 'Включить регистрацию пользователей',
            'enable-user-registration-label' => 'Возможность регистрации через плагин останется.',
            'auth-api' => 'Включить Auth API',
            'auth-api-label' => 'Этот API позволяет вам добавить пользовательскую аутентификацию на ваш игровой сервер. Для серверов Minecraft, использующих лаунчер, вы можете использовать <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a>  для простой и быстрой интеграции.',
            'minecraft-verification' => 'Включить проверку имени пользователя Minecraft с помощью minecraft.net',
        ],

        'mail' => [
            'title' => 'Настройки почты',
            'from-address' => 'Адрес электронной почты, используемый для отправки электронных писем. (email@gmail.com/mail.ru и т.д.',
            'driver' => 'Тип отправки электронной почты',
            'driver-info' => 'Azuriom поддерживает SMTP и Sendmail для отправки электронных писем. Вы можете найти более подробную информацию о настройке почты в нашей <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">документации</a>.',
            'disabled-warn' => 'Когда электронная почта отключена, пользователи не смогут сбросить свой пароль, если забудут его.',
            'sendmail-warn' => 'Использование Sendmail не рекомендуется, и вместо этого вы должны использовать SMTP-сервер, когда это возможно.',
            'smtp' => [
                'host' => 'Адрес хоста SMTP',
                'port' => 'Порт хоста SMTP',
                'encryption' => 'Протокол шифрования',
                'username' => 'Имя пользователя SMTP-сервера (чаще всего адрес электронной почты)',
                'password' => 'Пароль сервиса для SMTP-сервера',
            ],
            'enable-users-verification' => 'Включить проверку адреса электронной почты пользователя',
            'send' => 'Отправить тестовое письмо',
            'sent' => 'Тестовое письмо было успешно отправлено.',
        ],

        'maintenance' => [
            'title' => 'Настройки тех. обслуживания',

            'enable' => 'Включить режим тех. обслуживания',
            'message' => 'Сообщение о техническом обслуживании выводимое посетителям',
        ],

        'status' => [
            'updated' => 'Настройки обновлены.',
        ],
    ],

    'navbar-elements' => [
        'title' => 'Навигационная панель',
        'title-edit' => 'Изменить элемент навигационной панели :element',
        'title-create' => 'Создать элемент навигационной панели',

        'dropdown-info' => 'Вы можете добавлять элементы в это меню, после сохранения изменений.',

        'fields' => [
            'home' => 'Home',
            'link' => 'Внешняя ссылка',
            'page' => 'Страница',
            'post' => 'Пост',
            'posts' => 'Ссылка на пост',
            'plugin' => 'Плагин',
            'dropdown' => 'Категория',
            'new-tab' => 'Открыть в новой вкладке',
        ],

        'status' => [
            'nav-updated' => 'Навигационная панель обновлена.',

            'created' => 'Элемент навигационной панели был создан.',
            'updated' => 'Элемент навигационной панели был обновлён.',
            'deleted' => 'Элемент навигационной панели был прожарен испепелителем.',

            'not-empty' => 'Вы не можете удалить категорию, содержащую элементы.',
        ],
    ],

    'servers' => [
        'title' => 'Сервера',
        'title-edit' => 'Редактировать сервер :server',
        'title-create' => 'Добавить сервер',

        'default' => 'Основной сервер(показываемый на главной странице)',
        'default-info' => 'Количество игроков, подключенных к основному серверу, будет отображаться на сайте, если текущая тема его поддерживает.',

        'ping-no-commands' => 'Для метода ping не нужен плагин, но вы не можете выполнять с ним команды.',
        'query-no-commands' => 'С помощью query невозможно выполнять команды на сервере.',

        'query-port-info' => 'Может быть пустым, если совпадает с  основным игровым портом.',

        'fields' => [
            'address' => 'Адресс',
            'port' => 'Порт',

            'rcon-password' => 'Rcon пароль',
            'rcon-port' => 'Rcon порт',
            'query-port' => 'Исходный Query порт',

            'azlink-port' => 'AzLink порт',
        ],

        'actions' => [
            'verify-connection' => 'Проверить соединение',
        ],

        'azlink' => [
            'link' => 'Чтобы связать Minecraft со своим сайтом с помощью AzLink:',
            'link-1' => '<a href="https://azuriom.com/azlink">Скачать плагин AzLink</a> и установить на ваш сервер.',
            'link-2' => 'Перезапустить сервер.',
            'link-3' => 'Выполните эту команду на сервере: ',

            'link-info' => 'Вы можете связать свой сервер Minecraft со своим сайтом с помощью команды: ',
            'port-info' => 'Если вы используете порт AzLink, отличный от порта по умолчанию, вы должны настроить его с помощью команды: ',

            'enable-ping' => 'Включить мгновенные команды (требуется открытый порт на сервере)',
            'ping-info' => 'Когда мгновенные команды не включены, команды будут выполняться с задержкой от 30 секунд до 1 минуты.',
            'custom-port' => 'Использовать кастомный порт AzLink',
        ],

        'players' => ':count игрок|:count игроков',
        'offline' => 'Оффлайн',

        'status' => [
            'created' => 'Сервер был добавлен.',
            'updated' => 'Сервер был обновлён.',
            'deleted' => 'Сервер был удалён.',

            'connect-success' => 'Подключение к серверу выполнено успешно!',
            'connect-error' => 'Не удалось подключиться к серверу: :error',

            'not-azlink' => 'Этот сервер не подключен через AzLink.',
            'azlink-connect' => 'Соединение с сервером не удалось, адрес и/или порт неверны, или порт закрыт.',
            'azlink-badresponse' => 'Соединение с сервером не удалось (код :code), токен недействителен или сервер неправильно настроен. Вы можете повторить команду ссылки, чтобы исправить это.',
        ],

        'type' => [
            'mc-ping' => 'Minecraft Ping',
            'mc-rcon' => 'Minecraft RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => 'Source Query',
            'source-rcon' => 'Source RCON',
            'bedrock-ping' => 'Bedrock Ping',
            'bedrock-rcon' => 'Bedrock RCON',
            'fivem-status' => 'FiveM status',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff Server', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => 'Пользователи',
        'title-edit' => 'Редактировать пользователя :user',
        'title-create' => 'Добавить пользователя',

        'fields' => [
            'register-date' => 'Зарегистрирован',
            'last-login' => 'Последний вход',
            'email-verified' => 'Электронный адрес подтвержден',
            '2fa' => 'Использует 2fa',
            'ip' => 'IP адресс',
        ],

        'info' => [
            'admin' => 'Админ',
            'banned' => 'Забанен',
            'deleted' => 'Удалён',
        ],

        'actions' => [
            'ban' => 'Бан',
            'unban' => 'Разбан',
            'delete' => 'Удаление',
            'verify-email' => 'Подтвердить электронную почту',
            'disable-2fa' => 'Отключить 2fa',
        ],

        'alert-deleted' => 'Этот пользователь удален, его нельзя редактировать.',
        'alert-banned' => [
            'title' => 'Этот пользователь в настоящее время забанен:',
            'banned-by' => 'Забанен :author',
            'reason' => 'Причина: :reason',
            'date' => 'Дата: :date',
        ],

        'edit-profile' => 'Редактировать профиль',

        'user-info' => 'Информация о пользователе',

        'ban-title' => 'Забанить :user',
        'ban-description' => 'Вы уверены, что хотите забанить этого пользователя?',

        'status' => [
            'created' => 'Пользователь был создан.',
            'updated' => 'Пользователь был обновлён.',
            'deleted' => 'Пользователь был удалён.',

            'email-verified' => 'Электронный адрес подтвержден.',
            '2fa-disabled' => 'Двухфакторная аутентификация отключена.',

            'banned' => 'Теперь этот пользователь забанен.',
            'unbanned' => 'Теперь этот пользователь разбанен.',
        ],
    ],

    'roles' => [
        'title' => 'Роли',
        'title-edit' => 'Редактировать роль :role',
        'title-create' => 'Создать роль',

        'permissions' => 'Права',
        'perm-admin' => [
            'label' => 'Administrator',
            'info' => 'Administrator имеет все права',
        ],

        'info' => [
            'default' => 'По умолчанию',
            'admin' => 'Админ',
        ],

        'status' => [
            'power-updated' => 'Роли были обновлены.',
            'created' => 'Роль была создана.',
            'updated' => 'Роль была обновлена.',
            'deleted' => 'Роль была удалена.',

            'unauthorized' => 'Эта роль находится выше, чем ваша',
            'add-admin' => 'Вы не можете выдать админ права этой роли.',
            'remove-admin' => 'Вы не можете убрать админ права у своей роли.',
            'permanent-role' => 'Эта роль не может быль удалена.',
            'own-role' => 'Вы не можете удалить свою роль.',
        ],
    ],

    'permissions' => [
        'create-comments' => 'Коментировать посты',
        'delete-other-comments' => 'Удалить чужой комментарий к посту',
        'maintenance-access' => 'Доступ к сайту во время тех. обслуживания',
        'admin-access' => 'Доступ к ПУ',
        'admin-logs' => 'Просмотр логов сайта и управление ими',
        'admin-images' => 'Просмотр и управление изображениями',
        'admin-navbar' => 'Просмотр и управление панелью навигации',
        'admin-pages' => 'Просмотр и управление страницами',
        'admin-posts' => 'Просмотр и управление постами',
        'admin-settings' => 'Просмотр и управление настройками',
        'admin-users' => 'Просмотр и управление пользователями',
        'admin-themes' => 'Просмотр и управление темами',
        'admin-plugins' => 'Просмотр и управление плагинами',
    ],

    'bans' => [
        'title' => 'Баны',

        'fields' => [
            'banned-by' => 'Забанен',
            'reason' => 'Причина',
        ],

        'removed' => 'Удалить :date для :user',
    ],

    'posts' => [
        'title' => 'Посты',
        'title-edit' => 'Редактировать пост :post',
        'title-create' => 'Создать пост',

        'published-info' => 'Этот пост не будет доступен для всеобщего просмотра до этой даты.',

        'fields' => [
            'published-at' => 'Опубликовано',
        ],

        'pin' => 'Закрепить этот пост',

        'status' => [
            'created' => 'Пост был создан.',
            'updated' => 'Пост был изменён.',
            'deleted' => 'Пост был удалён.',
        ],

        'info' => [
            'pinned' => 'Закреплено',
        ],
    ],

    'pages' => [
        'title' => 'Страницы',
        'title-edit' => 'Редактировать страницу #:page',
        'title-create' => 'Создать страницу',

        'enable' => 'Включить страницу',

        'status' => [
            'created' => 'Страница была создана.',
            'updated' => 'Страница была обновлена.',
            'deleted' => 'Страница была удалена.',
        ],
    ],

    'images' => [
        'title' => 'Изображения',
        'title-edit' => 'Редактировать изображение :image',
        'title-create' => 'Загрузить изображение',

        'status' => [
            'created' => 'Изображение было создано.',
            'updated' => 'Изображение было обновлено.',
            'deleted' => 'Изображение было удалено.',
        ],
    ],

    'extensions' => [
        'buy' => 'Купить за :price',
    ],

    'plugins' => [
        'title' => 'Плагины',

        'installed' => 'Установленные плагины',
        'available' => 'Доступные плагины',

        'azuriom-requirement' => 'Этот плагин несовместим с вашей версией Azuriom.',
        'game-requirement' => 'Этот плагин несовместим с игрой :game.',
        'plugin-requirement' => 'Плагин ":plugin" отсутствует или его версия несовместима с этим плагином.',

        'status' => [
            'reloaded' => 'Плагины были перезагружены.',
            'enabled' => 'Плагин включен.',
            'disabled' => 'Плагин отключен.',
            'updated' => 'Плагин обновлен.',
            'installed' => 'Плагин установлен.',
            'deleted' => 'Плагин удален.',

            'error-delete' => 'Плагин необходимо отключить, прежде чем его можно будет удалить.',
        ],
    ],

    'themes' => [
        'title' => 'Темы',

        'current' => [
            'title' => 'Текущая тема',
            'author' => 'Автор: :author',
            'version' => 'Версия: :version',
        ],
        'installed' => 'Установленные темы',
        'available' => 'Доступные темы',
        'no-enabled' => 'У вас не включены какие-либо темы.',

        'actions' => [
            'edit-config' => 'Редактировать конфиг',
            'disable' => 'Отключить тему',
        ],

        'status' => [
            'reloaded' => 'Темы перезагружены.',
            'no-config' => 'У этой темы нет конфигурации.',
            'config-updated' => 'Конфигурация темы обновлена.',
            'invalid' => 'Эта тема недействительна (имя папки темы должно быть идентификатором темы).',
            'updated' => 'Тема обновлена.',
            'installed' => 'Тема установлена.',
            'deleted' => 'Тема удалена.',

            'error-delete' => 'Вы не можете удалить текущую тему.',
        ],
    ],

    'update' => [
        'title' => 'Обновление',

        'subtitle-update' => 'Обновление доступно',
        'subtitle-no-update' => 'Нет доступных обновлений',

        'update' => 'Версия <code>:last-version</code> Azuriom доступна, вы сипользуете версию <code>:version</code>.',
        'download' => 'Последняя версия Азуриом готова к загрузке.',
        'install' => 'Последняя версия Azuriom загружена и готова к установке.',

        'backup-info' => 'Before updating Azuriom, you should make a backup of your site!',

        'up-to-date' => 'Вы используете последнюю версию Azuriom: <code>:version</code>.',

        'status' => [
            'download-success' => 'Последняя версия скачана, теперь вы можете ее установить.',
            'install-success' => 'Обновление установлено успешно.',

            'up-to-date' => 'Вы используете последнюю версию Azuriom.',
            'error-fetch' => 'Произошла ошибка при получении обновлений: :error',
            'error-download' => 'Произошла ошибка при загрузке: :error',
            'error-install' => 'Произошла ошибка при установке: :error',
        ],

        'actions' => [
            'check' => 'Проверить обновления',
            'install' => 'Установить',
            'download' => 'Скачать',
        ],
    ],

    'logs' => [
        'title' => 'Логи',

        'actions' => [
            'clear' => 'Очистить старые логи (15+ Дней)',
        ],

        'status' => [
            'cleared' => 'Старые логи были удалены.',
        ],

        'pages' => [
            'created' => 'Создание страницы #:id',
            'updated' => 'Изменение страницы #:id',
            'deleted' => 'Удаление страницы #:id',
        ],

        'posts' => [
            'created' => 'Создание поста #:id',
            'updated' => 'Изменение поста #:id',
            'deleted' => 'Удаление поста #:id',
        ],

        'images' => [
            'created' => 'Создание изображения #:id',
            'updated' => 'Обновление изображения #:id',
            'deleted' => 'Удаление изображения #:id',
        ],

        'roles' => [
            'created' => 'Создана роль #:id',
            'updated' => 'Обновлена роль #:id',
            'deleted' => 'Удалена роль #:id',
        ],

        'servers' => [
            'created' => 'Добавлен сервер #:id',
            'updated' => 'Изменён сервер #:id',
            'deleted' => 'Удалён сервер #:id',
        ],

        'users' => [
            'updated' => 'Обновление пользователя #:id',
            'deleted' => 'Удаление пользователя #:id',
            'transfer' => 'Отправка валюты в колличестве :money пользователю #:id',
        ],

        'settings' => [
            'updated' => 'Изменение настроек',
        ],

        'updates' => [
            'installed' => 'Установка обновления Azuriom ',
        ],

        'plugins' => [
            'enabled' => 'Включение плагина',
            'disabled' => 'Отключение плагина',
        ],

        'themes' => [
            'changed' => 'Изменение темы',
        ],
    ],

    'errors' => [
        'back' => 'Вернуться в ПУ',
        '404' => 'Страница не найдена',
        'info' => 'Похоже, вы нашли глюк в матрице ...',
    ],
];
