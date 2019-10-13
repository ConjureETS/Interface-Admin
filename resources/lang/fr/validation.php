<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute n\'est pas un lien valide.',
    'after' => ':attribute doit être une date après :date.',
    'after_or_equal' => ':attribute doit être une date après ou égale à :date.',
    'alpha' => ':attribute peut contenir que des lettres.',
    'alpha_dash' => ':attribute peut contenir que des lettres, des nombres, des tirets et des tirets bas.',
    'alpha_num' => ':attribute peut contenir que des lettres et des nombres.',
    'array' => ':attribute doit être une liste (array).',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date avant ou égales à :date.',
    'between' => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file' => ':attribute doit être entre :min et :max kilo-octets.',
        'string' => ':attribute doit être entre :min et :max caractères.',
        'array' => ':attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation ne correspond pas à :attribute.',
    'date' => ':attribute n\'est pas une date valide.',
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => 'Le format de :attribute ne correspond pas à :format.',
    'different' => ':attribute et :other doit être différent.',
    'digits' => ':attribute doit être de :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Les dimensions de l\'image :attribute est invalide.',
    'distinct' => 'Le champ :attribute a une valeur dupliquée.',
    'email' => ':attribute doit être une adresse courriel valide.',
    'ends_with' => ':attribute doit finir avec une des valeurs suivantes: :values',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => ':attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être plus grand que :value.',
        'file' => ':attribute doit être plus grand que :value kilo-octets.',
        'string' => ':attribute doit être plus grand que :value caractères.',
        'array' => ':attribute doit avoir plus que :value éléments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être plus grand ou égale à :value.',
        'file' => ':attribute doit être plurs grand ou égale à :value kilo-octets.',
        'string' => ':attribute doit être plus grand ou égale à :value caractères.',
        'array' => ':attribute doit avoir :value éléments ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => 'Le champ :attribute sélectionné est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans la liste :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => ':attribute doit être une chaîne de caractère JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être plus petit que :value.',
        'file' => ':attribute doit être plus petit que :value kilo-octets.',
        'string' => ':attribute doit être plus petit que :value caractères.',
        'array' => ':attribute doit avoir moins que :value éléments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être plus petit ou égale à :value.',
        'file' => ':attribute doit être plus petit ou égale à :value kilo-octets.',
        'string' => ':attribute doit être plus petit ou égale à :value caractères.',
        'array' => ':attribute ne doit pas avoir plus que :value éléments.',
    ],
    'max' => [
        'numeric' => ':attribute ne peut pas être plus grand que :max.',
        'file' => ':attribute ne peut pas être plus grand que :max kilo-octets.',
        'string' => ':attribute ne peut pas être plus grand que :max caractères.',
        'array' => ':attribute ne peut pas avoir plus que :max éléments.',
    ],
    'mimes' => ':attribute doit être une fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins :min kilo-octets.',
        'string' => ':attribute doit être au moins :min caractères.',
        'array' => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in' => 'Le champ :attribute sélectionné est invalide.',
    'not_regex' => 'Le format de :attribute est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => ':attribute est nécessaire.',
    'required_if' => ':attribute est nécessaire quand :other est :value.',
    'required_unless' => ':attribute est nécessaire seulement si :other n\'est pas dans :values.',
    'required_with' => ':attribute est nécessaire quand :values sont présentes.',
    'required_with_all' => ':attribute est nécessaire quand :values sont présentes.',
    'required_without' => ':attribute est nécessaire quand :values ne sont pas présentes.',
    'required_without_all' => ':attribute est nécessaire quand aucune :values sont présentes.',
    'same' => ':attribute et :oCer doit correspondre.',
    'size' => [
        'numeric' => 'attribute doit être :size.',
        'file' => ':attribute doit être :size kilo-octets.',
        'string' => ':attribute doite être :size caractères.',
        'array' => ':attribute coit contenir :size éléments.',
    ],
    'starts_with' => ':attribute doit commencé avec une des valeurs suivantes: :values',
    'string' => ':attribute doit être une chaîne de caractère.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute a déjà été pris.',
    'uploaded' => ':attribute a échoué à téléverser.',
    'url' => 'Le format de :attribute est invalide.',
    'uuid' => ':attribute doit être un UUID valide.',
    'phone' => 'Le format du numéro de téléphone est invalide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
