<?php

return [
    // Заголовки страниц
    'NEWS_PAGE' => [
        'LIST' => 'News',
        'ADD' => 'Adding news',
        'VIEW' => 'News: :id',
        'EDIT' => 'Editing news: :id',
    ],

    // Форма News
    'NEWS_MODEL' => [
        'ID' => 'ID',
        'NAME' => 'Name',
        'DESCRIPTION' => 'Description',
        'STATUS' => 'Status',
        'DATE' => 'Date',
    ],

    // Константы статуса
    'NEWS_STATUS' => [
        'PUBLISHED' => 'Published',
        'HIDDEN' => 'Hidden',
    ],

    // Текст флэш сообщений Knowledge core
    'NEWS_MESSAGE' => [
        'CREATED' => 'Record № :id has been created successfully!',
        'CHANGED' => 'Record № :id successfully changed!',
        'DELETED' => 'Record № :id successfully deleted!',
    ],

    // Текст сообщений ошибок заполнения полей формы News
    'NEWS_ERROR_MESSAGE' => [
        'NAME' => 'The name field is required.',
        'DATE_REQUIRED' => 'The date field is required.',
        'DATE_DATE' => 'The date field must be a valid date.',
    ],
];

