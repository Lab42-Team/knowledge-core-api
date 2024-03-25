<?php

return [
    // Заголовки страниц
    'PROJECT_PAGE' => [
        'LIST' => 'Проекты',
        'ADD' => 'Добавление проекта',
        'VIEW' => 'Проект: :id',
        'EDIT' => 'Редактировать проект: :id',
    ],

    // Форма Project
    'PROJECT_MODEL' => [
        'ID' => 'ID',
        'NAME' => 'Название',
        'DESCRIPTION' => 'Описание',
        'TYPE' => 'Тип',
        'STATUS' => 'Статус',
    ],

    // Константы типов
    'PROJECT_TYPE' => [
        'PUBLIC_TYPE' => 'Открытый',
        'PRIVATE_TYPE' => 'Закрытый',
    ],

    // Константы статуса
    'PROJECT_STATUS' => [
        'UNDER_EDITING' => 'На редактировании',
        'READY_TO_USE' => 'Готов к использованию',
        'OUTDATED' => 'Устаревший',
    ],

    // Текст флэш сообщений Project
    'PROJECT_MESSAGE' => [
        'CREATED' => 'Запись № :id успешно создана!',
        'CHANGED' => 'Запись № :id успешно изменена!',
        'DELETED' => 'Запись № :id успешно удалена!',
    ],

    // Текст сообщений ошибок заполнения полей формы Project
    'PROJECT_ERROR_MESSAGE' => [
        'NAME_REQUIRED' => 'Поле названия обязательно для заполнения.',
    ],
];

