<?php

return [
    // Заголовки страниц
    'DEVELOPMENTS_PAGE' => [
        'LIST' => 'Разработки',
        'ADD' => 'Добавление разработки',
        'VIEW' => 'Разработка: :id',
        'EDIT' => 'Редактирование разработки: :id',
    ],

    // Форма Developments
    'DEVELOPMENTS_MODEL' => [
        'ID' => 'ID',
        'NAME' => 'Название',
        'DESCRIPTION' => 'Описание',
        'YEAR' => 'Год',
        'AUTHORS' => 'Авторы',
        'PUBLICATIONS' => 'Публикации',
        'REQUIREMENTS' => 'Требования',
        'PRACTICAL_APPLICATION' => 'Практическое применение',
        'VERSION_HISTORY' => 'История версий',
        'DEMO_VIDEOS' => 'Демо видео',
        'SOFTWARE_LINK' => 'Ссылка на ПО',
        'DOCUMENTATION_LINK' => 'Ссылка на документацию',
        'GITHUB_LINK' => 'Ссылка на GitHub',
    ],

    // Текст флэш сообщений Developments
    'DEVELOPMENTS_MESSAGE' => [
        'CREATED' => 'Запись № :id успешно создана!',
        'CHANGED' => 'Запись № :id успешно изменена!',
        'DELETED' => 'Запись № :id успешно удалена!',
    ],

    // Текст сообщений ошибок заполнения полей формы Developments
    'DEVELOPMENTS_ERROR_MESSAGE' => [
        'NAME_REQUIRED' => 'Поле названия обязательно для заполнения.',
        'YEAR_DATE' => 'Поле год должно содержать действительную дату.',
        'SOFTWARE_LINK_UNIQUE' => 'Такая ссылка на скачивание программы уже существует.',
        'DOCUMENTATION_LINK_UNIQUE' => 'Такая ссылка на документацию уже существует.',
        'GITHUB_LINK_UNIQUE' => 'Такая ссылка на GitHub уже существует.',
        'YEAR_BETWEEN' => 'Поле года должно находиться в диапазоне от 1900 до 3000.',
        'YEAR_INTEGER' => 'Поле года должно быть целым числом.',
    ],
];

