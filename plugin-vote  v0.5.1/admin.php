<?php

return [
    'nav' => [
        'title' => 'Vote',

        'settings' => 'Настройки',
        'sites' => 'Саты',
        'rewards' => 'Неграды',
        'votes' => 'Голосование',
    ],

    'permission' => 'Управление плагином голосования',

    'settings' => [
        'title' => 'Настройка страницы голосования',

        'count' => 'Количество лучших игроков на страницу',
        'display-rewards' => 'Показать награды на странице голосования',
        'ip-compatibility' => 'Включить совместимость IPv4/IPv6',
        'ip-compatibility-info' => 'Эта опция позволяет вам исправлять голоса, которые не подтверждаются на сайтах для голосования, которые не принимают IPv6, в то время как ваш сайт принимает, или наоборот.',
        'commands' => 'Глобальные команды',
    ],

    'sites' => [
        'title' => 'Сайты',
        'title-edit' => 'Редактировать сайт :site',
        'title-create' => 'Создать сайт',

        'enable' => 'Включить сайт',

        'delay' => 'Задержка между голосованием',
        'minutes' => 'минут',

        'no-verification' => 'Голоса на этом сайте не проверяются.',
        'auto-verification' => 'Голоса на этом сайте будут автоматически проверены.',
        'key-verification' => 'Голоса на этом веб-сайте будут проверены, когда будет заполнено поле ниже.',

        'verifications' => [
            'enable' => 'Включить проверку голосов',

            'pingback' => 'URL-адрес пингбэка: :url',
            'secret' => 'Секретный ключ',
            'server_id' => 'ID сервера',
            'token' => 'Токен',
            'api_key' => 'Ключ API',
        ],

        'status' => [
            'created' => 'Сайт голосования был добавлен.',
            'updated' => 'Сайт голосования был обновлён.',
            'deleted' => 'Сайт голосования был удалён.',
        ],
    ],

    'rewards' => [
        'title' => 'Награды',
        'title-edit' => 'Изменить награду :reward',
        'title-create' => 'Создать награду',

        'need-online' => 'Пользователь должен быть онлайн, чтобы получить вознаграждение (доступно только с AzLink)',
        'enable' => 'Включить награду',

        'commands-info' => 'Вы можете использовать <code>{player}</code>, чтобы использовать имя игрока, и <code>{reward}</code>, чтобы использовать имя награды. Команда не должна начинаться с <code>/</code>',

        'status' => [
            'created' => 'Награда была создана.',
            'updated' => 'Награда была обновлена.',
            'deleted' => 'Награда была удалена.',
        ],
    ],

    'votes' => [
        'title' => 'Голосование',

        'empty' => 'В этом месяце нет голосов.',

        'votes' => 'Подсчет голосов',

        'month' => 'Подсчет голосов за этот месяц',
        'week' => 'Подсчет голосов за эту неделю',
        'day' => 'Подсчет голосов за сегодня',
    ],

    'logs' => [
        'vote-sites' => [
            'created' => 'Создан сайт голосования #:id',
            'updated' => 'Обновлён сайт голосования #:id',
            'deleted' => 'Удалён сайт голосования #:id',
        ],

        'vote-rewards' => [
            'created' => 'Создана награда за голосование #:id',
            'updated' => 'Обновлена награда за голосование #:id',
            'deleted' => 'Уладена награда за голосование #:id',
        ],
    ],
];
