<?php

return [
    // Заголовки страниц
    'DEVELOPMENTS_PAGE' => [
        'LIST' => 'Developments',
        'ADD' => 'Adding development',
        'VIEW' => 'Development: :id',
        'EDIT' => 'Editing development: :id',
    ],

    // Форма Developments
    'DEVELOPMENTS_MODEL' => [
        'ID' => 'ID',
        'NAME' => 'Name',
        'DESCRIPTION' => 'Description',
        'YEAR' => 'Year',
        'AUTHORS' => 'Authors',
        'PUBLICATIONS' => 'Publications',
        'REQUIREMENTS' => 'Requirements',
        'PRACTICAL_APPLICATION' => 'Practical application',
        'VERSION_HISTORY' => 'Version history',
        'DEMO_VIDEOS' => 'Demo videos',
        'SOFTWARE_LINK' => 'Software link',
        'DOCUMENTATION_LINK' => 'Documentation link',
        'GITHUB_LINK' => 'Link to GitHub',
    ],

    // Текст флэш сообщений Developments
    'DEVELOPMENTS_MESSAGE' => [
        'CREATED' => 'Record № :id has been created successfully!',
        'CHANGED' => 'Record № :id successfully changed!',
        'DELETED' => 'Record № :id successfully deleted!',
    ],

    // Текст сообщений ошибок заполнения полей формы Developments
    'DEVELOPMENTS_ERROR_MESSAGE' => [
        'NAME_REQUIRED' => 'The name field is required.',
        'YEAR_DATE' => 'The year field must be a valid date.',
        'SOFTWARE_LINK_UNIQUE' => 'The software link has already been taken.',
        'DOCUMENTATION_LINK_UNIQUE' => 'The documentation link has already been taken.',
        'GITHUB_LINK_UNIQUE' => 'The GitHub link has already been taken.',
    ],
];

