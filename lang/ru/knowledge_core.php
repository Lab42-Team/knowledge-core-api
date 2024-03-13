<?php

return [
    // Заголовки страниц
    'KNOWLEDGE_CORE_PAGE' => [
        'LIST' => 'Основная информация',
        'ADD' => 'Добавление основной информации',
        'VIEW' => 'Основная информация: :id',
        'EDIT' => 'Редактирование основной информации: :id',
    ],

    // Форма Knowledge core
    'KNOWLEDGE_CORE_MODEL' => [
        'ID' => 'ID',
        'DESCRIPTION' => 'Описание',
        'PHONE' => 'Телефон',
        'EMAIL' => 'Электронная почта',
        'ADDRESS' => 'Адрес',
        'REFERENCES' => 'Публикации',
        'LAB_LINK' => 'Ссылка на сайт лаборатории',
        'LAB_LINK_SHORT' => 'Ссылка на сайт',
        'GITHUB_LINK' => 'Ссылка на группу GitHub',
        'GITHUB_LINK_SHORT' => 'Ссылка на GitHub',
    ],

    // Текст флэш сообщений Knowledge core
    'KNOWLEDGE_CORE_MESSAGE' => [
        'CREATED' => 'Запись № :id успешно создана!',
        'CHANGED' => 'Запись № :id успешно изменена!',
        'DELETED' => 'Запись № :id успешно удалена!',
    ],

    // Текст сообщений ошибок заполнения полей формы Knowledge core
    'KNOWLEDGE_CORE_ERROR_MESSAGE' => [
        'EMAIL' => 'Поле электронной почты должно быть действительным адресом электронной почты.',
        'DESCRIPTION' => 'Такое описание уже существует.',
    ],
];

