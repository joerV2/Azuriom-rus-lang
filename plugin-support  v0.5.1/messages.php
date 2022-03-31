<?php

return [
    'title' => 'Support',

    'fields' => [
        'subject' => 'Проблема',
        'category' => 'Категория',
        'ticket' => 'Запрос',
    ],

    'actions' => [
        'open-new' => 'Создать запрос в тех. поддержку',
        'reopen' => 'Открыть заново',
        'close' => 'Закрыть',
    ],

    'state' => [
        'open' => 'Открыт',
        'closed' => 'Закрыт',
    ],

    'tickets' => [
        'closed' => 'Данный запрос закрыт.',

        'title-open' => 'Создание запроса в тех. поддержку',

        'notification' => 'Новый ответ на ваш запрос в службу поддержки.',

        'status-info' => '<strong>:author</strong> создал этот запрос в категории <strong>:category</strong>. Дата: :date.',
    ],

    'webhook' => [
        'ticket' => 'Новый запрос в тех. поддержку',
        'comment' => 'Новый комментарий к запросу',
        'closed' => 'Запрос закрыт',
    ],
];
