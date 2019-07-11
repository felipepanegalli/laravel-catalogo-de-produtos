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

    'accepted' => 'O campo de :attribute deve ser aceito.',
    'active_url' => 'O campo de :attribute não é uma URL válida.',
    'after' => 'O campo de :attribute deve ser uma data depois de :date.',
    'after_or_equal' => 'O campo de :attribute deve ser uma data após ou igual a :date.',
    'alpha' => 'O campo de :attribute deve conter somente letras.',
    'alpha_dash' => 'O campo de :attribute deve conter letras, números e traços.',
    'alpha_num' => 'O campo de :attribute deve conter somente letras e números.',
    'array' => 'O campo de :attribute deve ser um array.',
    'before' => 'O campo de :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'O campo de :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo de :attribute deve estar entre :min e :max.',
        'file' => 'O campo de :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O campo de :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O campo de :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo de :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute não confere.',
    'date' => 'O campo de :attribute não é uma data válida.',
    'date_equals' => 'O campo de :attribute deve ser uma data igual a :date.',
    'date_format' => 'O campo de :attribute não confere com o formato :format.',
    'different' => 'O campo de :attribute e :other devem ser diferentes.',
    'digits' => 'O campo de :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo de :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo de :attribute não tem dimensões válidas.',
    'distinct' => 'O campo de :attribute campo contém um valor duplicado.',
    'email' => 'O campo de :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O campo de :attribute deve terminar com um dos seguinte(s): :values',
    'exists' => 'O campo de :attribute selecionado é inválido.',
    'file' => 'O campo de :attribute precisa ser um arquivo.',
    'filled' => 'O campo de :attribute é um campo obrigatório.',
    'gt' => [
        'numeric' => 'O campo de :attribute deve ser maior que :value.',
        'file' => 'O campo de :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo de :attribute deve ser maior que :value caracteres.',
        'array' => 'O campo de :attribute deve ser maior que :value items.',
    ],
    'gte' => [
        'numeric' => 'O campo de :attribute deve ser maior ou igual a :value.',
        'file' => 'O campo de :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O campo de :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O campo de :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O campo de :attribute deve ser uma imagem.',
    'in' => 'O campo de :attribute é inválido.',
    'in_array' => 'O campo de :attribute campo não existe em :other.',
    'integer' => 'O campo de :attribute deve ser um inteiro.',
    'ip' => 'O campo de :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O campo de :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O campo de :attribute deve ser um endereço IPv6 válido',
    'json' => 'O campo de :attribute deve ser um JSON válido.',
    'lt' => [
        'numeric' => 'O campo de :attribute deve ser menor que :value.',
        'file' => 'O campo de :attribute deve ser menor que :value kilobytes.',
        'string' => 'O campo de :attribute deve ser menor que :value caracteres.',
        'array' => 'O campo de :attribute deve haver ao menos :value items.',
    ],
    'lte' => [
        'numeric' => 'O campo de :attribute deve ser menor que or equal :value.',
        'file' => 'O campo de :attribute deve ser menor que or equal :value kilobytes.',
        'string' => 'O campo de :attribute deve ser menor que or equal :value characters.',
        'array' => 'O campo de :attribute não deve ter mais do que :value items.',
    ],
    'max' => [
        'numeric' => 'O campo de :attribute não deve ser maior que :max.',
        'file' => 'O campo de :attribute não deve ter mais que :max kilobytes.',
        'string' => 'O campo de :attribute não deve ter mais que :max caracteres.',
        'array' => 'O campo de :attribute não pode ter mais que :max itens.',
    ],
    'mimes' => 'O campo de :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo de :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo de :attribute deve ser no mínimo :min.',
        'file' => 'O campo de :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O campo de :attribute deve ter no mínimo :min caracteres.',
        'array' => 'O campo de :attribute deve ter no mínimo :min itens.',
    ],
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'not_regex' => 'O formato do :attribute é inválido.',
    'numeric' => 'O campo de :attribute deve ser um número.',
    'present' => 'O :attribute deve estar presente.',
    'regex' => 'O formato de :attribute é inválido.',
    'required' => 'O campo de :attribute é obrigatório.',
    'required_if' => 'O campo de :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo de :attribute é necessário a menos que :other esteja em :values.',
    'required_with' => 'O campo de :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo de :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo de :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo de :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'same' => 'O campo de :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O campo de :attribute deve ser :size.',
        'file' => 'O campo de :attribute deve ter :size kilobytes.',
        'string' => 'O campo de :attribute deve ter :size caracteres.',
        'array' => 'O campo de :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O campo de :attribute deve iniciar com um do(s) seguinte(s) valores: :values',
    'string' => 'O campo de :attribute deve ser uma string',
    'timezone' => 'O campo de :attribute deve ser uma timezone válida.',
    'unique' => 'O campo de :attribute já está em uso.',
    'uploaded' => 'O campo de :attribute falhou no upload.',
    'url' => 'O formato de :attribute é inválido.',
    'uuid' => 'O campo de :attribute deve ser um UUID válido.',

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

    'attributes' => [
        'referencia' => 'Referência',
        'titulo' => 'Título',
        'descricao' => 'Descrição',
        'preco' => 'Preço',
        'created_at' => 'criado em',
        'updated_at' => 'modificado em',
        'fotoproduto' => 'Foto do Produto',
    ],

];
