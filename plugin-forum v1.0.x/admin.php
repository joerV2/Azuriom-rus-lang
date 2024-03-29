<?php

return [

    'nav' => [
        'settings' => 'Настройки',
        'forums' => 'Форумы',
        'tags' => 'Теги',
    ],

    'settings' => [
        'title' => 'Настройки форума',
    ],

    'categories' => [
        'title' => 'Категории',
        'edit' => 'Редактировать категорию :category',
        'create' => 'Создать категорию',

        'delete_error' => 'Эта категория содержит Форумы и не может быть удалена',
    ],

    'forums' => [
        'title' => 'Форумы',
        'create' => 'Cоздать форум',
        'edit' => 'Редактировать форум :forum',

        'create_category' => 'Создать категорию',
        'create_forum' => 'Создать форум',
		
		'icons' => 'Вы можете найти список доступных значков на <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener noreferrer">FontAwesome</a>.',

        'parent' => 'Родительский форум',
        'restricted' => 'Ограничить доступ к этому форуму только для определенных ролей',
        'default_tags' => 'Теги по умолчанию',
        'lock' => 'Заблокировать этот форум',
        'lock_info' => 'Пользователи, не являющиеся администраторами, не смогут создавать обсуждения',
        'private' => 'Приватный форум',
        'private_info' => 'Пользователи могут видеть только свои обсуждения',

        'updated' => 'Порядок форумов обновлен',
        'delete_error' => 'Форум с обсуждениями или подфорумами не может быть удален',
    ],

    'discussions' => [
        'card' => 'Обсуждения на форуме',
    ],

    'posts' => [
        'card' => 'Сообщения на форуме',

        'delay' => 'Задержка между сообщениями',
        'seconds' => 'секунд/а/ы',
    ],

    'tags' => [
        'title' => 'Теги',
        'create' => 'Создать тег',
    ],

    'logs' => [
        'forum-discussions' => [
            'deleted' => 'Удалено обсуждение #:id',
            'pinned' => 'Закреплено обсуждение #:id',
            'unpinned' => 'Откреплено обсуждение #:id',
            'locked' => 'Закрыто обсуждение #:id',
            'unlocked' => 'Открыто обсуждение #:id',
        ],

        'forum-posts' => [
            'deleted' => 'Удалён пост #:id',
        ],

        'forum-categories' => [
            'created' => 'Создана категория форума #:id',
            'updated' => 'Обновлена категория форума #:id',
            'deleted' => 'Удалена категория форума #:id',
        ],

        'forum-forums' => [
            'created' => 'Создан ворум #:id',
            'updated' => 'Обновлён форум #:id',
            'deleted' => 'Удалён форум #:id',
        ],
    ],

    'permissions' => [
        'forums' => 'Управление форумами и категориями',
        'discussions' => 'Управление обсуждениями на форуме (перемещение, редактирование, удаление, закрепление, блокировка)',
        'private' => 'Просмотр обсуждений других пользователей на частных форумах',
        'delete_own_posts' => 'Удалять собственные сообщения на форуме',
    ],
];
