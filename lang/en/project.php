<?php

return [
    // Заголовки страниц
    'PROJECT_PAGE' => [
        'LIST' => 'Projects',
        'ADD' => 'Adding project',
        'VIEW' => 'Project: :id',
        'EDIT' => 'Editing project: :id',
    ],

    // Форма Project
    'PROJECT_MODEL' => [
        'ID' => 'ID',
        'NAME' => 'Name',
        'DESCRIPTION' => 'Description',
        'TYPE' => 'Type',
        'STATUS' => 'Status',
        'USERS' => 'Users',
    ],

    //надпись в выборе select
    'PLACEHOLDER_USERS' => 'Choose users',

    // Константы типов
    'PROJECT_TYPE' => [
        'PUBLIC_TYPE' => 'Publiс',
        'PRIVATE_TYPE' => 'Private',
    ],

    // Константы статуса
    'PROJECT_STATUS' => [
        'UNDER_EDITING' => 'Under editing',
        'READY_TO_USE' => 'Ready to use',
        'OUTDATED' => 'Outdated',
    ],

    // Текст флэш сообщений Project
    'PROJECT_MESSAGE' => [
        'CREATED' => 'Record № :id has been created successfully!',
        'CHANGED' => 'Record № :id successfully changed!',
        'DELETED' => 'Record № :id successfully deleted!',
    ],

    // Текст сообщений ошибок заполнения полей формы Project
    'PROJECT_ERROR_MESSAGE' => [
        'NAME_REQUIRED' => 'The name field is required.',
    ],
];

