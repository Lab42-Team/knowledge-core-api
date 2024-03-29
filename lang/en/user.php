<?php

return [
    // Заголовки страниц
    'USER_PAGE' => [
        'LIST' => 'Users',
        'ADD' => 'Adding user',
        'VIEW' => 'User: :id',
        'EDIT' => 'Editing user: :id',
    ],

    // Форма User
    'USER_MODEL' => [
        'ID' => 'ID',
        'NAME' => 'Name',
        'PASSWORD' => 'Password',
        'EMAIL' => 'Email',
        'ROLE' => 'Role',
        'STATUS' => 'Status',
        'FULL_NAME' => 'Full name',
        'LAST_LOGIN_DATE' => 'Last login date',
        'LOGIN_IP' => 'Login ip',
    ],

    // Константы ролей
    'USER_ROLE' => [
        'ADMIN' => 'Admin',
        'USER' => 'User',
        'GUEST' => 'Guest',
    ],

    // Константы статуса
    'USER_STATUS' => [
        'ACTIVE' => 'Active',
        'INACTIVE' => 'Inactive',
        'NOT_VERIFIED' => 'Not verified',
    ],

    // Текст флэш сообщений User
    'USER_MESSAGE' => [
        'CREATED' => 'Record № :id has been created successfully!',
        'CHANGED' => 'Record № :id successfully changed!',
        'DELETED' => 'Record № :id successfully deleted!',
    ],

    // Текст сообщений ошибок заполнения полей формы User
    'USER_ERROR_MESSAGE' => [
        'NAME_REQUIRED' => 'The name field is required.',
        'NAME_UNIQUE' => 'The name has already been taken.',
        'EMAIL_REQUIRED' => 'The email field is required.',
        'EMAIL_EMAIL' => 'The email field must be a valid email address.',
        'EMAIL_UNIQUE' => 'The email has already been taken.',
    ],
];

