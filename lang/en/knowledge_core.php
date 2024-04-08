<?php

return [
    // Заголовки страниц
    'KNOWLEDGE_CORE_PAGE' => [
        'LIST' => 'General information',
        'ADD' => 'Adding general information',
        'VIEW' => 'General information: :id',
        'EDIT' => 'Editing general information: :id',
    ],

    //надписи на форме
    'KNOWLEDGE_CORE_TEXT' => 'General information is missing, please fill it out',

    // Форма Knowledge core
    'KNOWLEDGE_CORE_MODEL' => [
        'ID' => 'ID',
        'DESCRIPTION' => 'Description',
        'PHONE' => 'Phone',
        'EMAIL' => 'Email',
        'ADDRESS' => 'Address',
        'REFERENCES' => 'References',
        'LAB_LINK' => 'Link to the laboratory website',
        'LAB_LINK_SHORT' => 'Link',
        'GITHUB_LINK' => 'GitHub group link',
        'GITHUB_LINK_SHORT' => 'Link to GitHub',
    ],

    // Текст флэш сообщений Knowledge core
    'KNOWLEDGE_CORE_MESSAGE' => [
        'CREATED' => 'General information has been created successfully!',
        'CHANGED' => 'General information successfully changed!',
        'DELETED' => 'General information successfully deleted!',
    ],

    // Текст сообщений ошибок заполнения полей формы Knowledge core
    'KNOWLEDGE_CORE_ERROR_MESSAGE' => [
        'EMAIL' => 'The email field must be a valid email address.',
        'EMAIL_UNIQUE' => 'The email has already been taken.',
        'REFERENCES_UNIQUE' => 'The references has already been taken.',
        'LAB_LINK_UNIQUE' => 'The link to the laboratory website has already been taken.',
        'GITHUB_LINK_UNIQUE' => 'The GitHub group link has already been taken.',
    ],
];

