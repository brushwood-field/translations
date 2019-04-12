<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2018 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
    // Core Messages
   'noRuleSets'            => 'バリデーションのルールセットが設定されていません。', // 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} は有効なルールではありません。', // '{0} is not a valid rule.',
   'groupNotFound'         => '{0} はバリデーションのルールグループでがありません。', // '{0} is not a validation rules group.',
   'groupNotArray'         => '{0} ルールグループは配列の必要があります。', // '{0} rule group must be an array.',
   'invalidTemplate'       => '{0} は有効なバリデーションテンプレートではありません。', // '{0} is not a valid Validation template.',

    // Rule Messages
   'alpha'                 => '{field} はアルファベットのみ許可されます。', // 'The {field} field may only contain alphabetical characters.',
   'alpha_dash'            => '{field} はアルファベットとアンダースコア、ダッシュのみ許可されます', // 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.',
   'alpha_numeric'         => '{field} は英数字のみ許可されます。', // 'The {field} field may only contain alpha-numeric characters.',
   'alpha_numeric_space'   => '{field} は英数字とスペースのみ許可されます。', // 'The {field} field may only contain alpha-numeric characters and spaces.',
   'alpha_space'           => '{field} アルファベットとスペースのみ許可されます。', // 'The {field} field may only contain alphabetical characters and spaces.',
   'decimal'               => '{field} は数字のみ許可されます。', // 'The {field} field must contain a decimal number.',
   'differs'               => '{field} は {param} と異なっている必要があります。', // 'The {field} field must differ from the {param} field.',
   'exact_length'          => '{field} は正確に長さが {param} と同じである必要があります。', // 'The {field} field must be exactly {param} characters in length.',
   'greater_than'          => '{field} は {param} よりも大きい値である必要があります。', // 'The {field} field must contain a number greater than {param}.',
   'greater_than_equal_to' => '{field} は {param} 以上の値である必要があります。', // 'The {field} field must contain a number greater than or equal to {param}.',
   'in_list'               => '{field} は下記のいずれかである必要があります： {param}', // 'The {field} field must be one of: {param}.',
   'integer'               => '{field} は整数のみ許可されます。', // 'The {field} field must contain an integer.',
   'is_natural'            => '{field} は自然数のみ許可されます。', // 'The {field} field must only contain digits.',
   'is_natural_no_zero'    => '{field} はゼロより大きい自然数のみ許可されます。', // 'The {field} field must only contain digits and must be greater than zero.',
   'is_unique'             => '{field} はユニークな値のみ許可されます。', // 'The {field} field must contain a unique value.',
   'less_than'             => '{field} は {param} よりも小さい値である必要があります。', // 'The {field} field must contain a number less than {param}.',
   'less_than_equal_to'    => '{field} は {param} 以下の値である必要があります。', // 'The {field} field must contain a number less than or equal to {param}.',
   'matches'               => '{field} は {param} と一致する必要があります。', // 'The {field} field does not match the {param} field.',
   'max_length'            => '{field} の最大長は {param} です。', // 'The {field} field cannot exceed {param} characters in length.',
   'min_length'            => '{field} の最小長は {param} です。', // 'The {field} field must be at least {param} characters in length.',
   'numeric'               => '{field} は数値のみ許可されます。', // 'The {field} field must contain only numbers.',
   'regex_match'           => '{field} は正規表現と一致する必要があります。', // 'The {field} field is not in the correct format.',
   'required'              => '{field} は必須です。', // 'The {field} field is required.',
   'required_with'         => '{param} が存在する場合、 {field} は必須です。', // 'The {field} field is required when {param} is present.',
   'required_without'      => '{param} が存在しない場合、 {field} は必須です。', // 'The {field} field is required when {param} is not present.',
   'timezone'              => '{field} は有効なタイムゾーンである必要があります。', // 'The {field} field must be a valid timezone.',
   'valid_base64'          => '{field} は有効なBASE64文字列である必要があります。', // 'The {field} field must be a valid base64 string.',
   'valid_email'           => '{field} は有効なEメールアドレスである必要があります。', // 'The {field} field must contain a valid email address.',
   'valid_emails'          => '{field} はすべて有効なEメールアドレスである必要があります。', // 'The {field} field must contain all valid email addresses.',
   'valid_ip'              => '{field} は有効なIPアドレスである必要があります。', // 'The {field} field must contain a valid IP.',
   'valid_url'             => '{field} は有効なURLである必要があります。', // 'The {field} field must contain a valid URL.',
   'valid_date'            => '{field} は有効な日付書式である必要があります。', // 'The {field} field must contain a valid date.',

    // Credit Cards
   'valid_cc_num'          => '{field} は有効なカード番号ではありません。', // '{field} does not appear to be a valid credit card number.',

    // Files
   'uploaded'              => '{field} は有効なアップロードファイルではありません。', // '{field} is not a valid uploaded file.',
   'max_size'              => '{field} はファイルが大きすぎます', // '{field} is too large of a file.',
   'is_image'              => '{field} は有効なアップロード画像ではありません。', // '{field} is not a valid, uploaded image file.',
   'mime_in'               => '{field} は有効な MIME タイプではありません。', // '{field} does not have a valid mime type.',
   'ext_in'                => '{field} は有効なファイル拡張子ではありません。', // '{field} does not have a valid file extension.',
   'max_dims'              => '{field} は画像でないか、縦幅か横幅が大きすぎます。', // '{field} is either not an image, or it is too wide or tall.',
];
