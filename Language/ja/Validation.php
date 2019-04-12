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
   'noRuleSets'            => 'バリデーションのルールセットが設定されていません。',
   'ruleNotFound'          => '{0} は有効なルールではありません。',
   'groupNotFound'         => '{0} はバリデーションのルールグループでがありません。',
   'groupNotArray'         => '{0} ルールグループは配列の必要があります。',
   'invalidTemplate'       => '{0} は有効なバリデーションテンプレートではありません。',

    // Rule Messages
   'alpha'                 => '{field} はアルファベットのみ許可されます。',
   'alpha_dash'            => '{field} はアルファベットとアンダースコア、ダッシュのみ許可されます',
   'alpha_numeric'         => '{field} は英数字のみ許可されます。',
   'alpha_numeric_space'   => '{field} は英数字とスペースのみ許可されます。',
   'alpha_space'           => '{field} アルファベットとスペースのみ許可されます。',
   'decimal'               => '{field} は数字のみ許可されます。',
   'differs'               => '{field} は {param} と異なっている必要があります。',
   'exact_length'          => '{field} は正確に長さが {param} と同じである必要があります。',
   'greater_than'          => '{field} は {param} よりも大きい値である必要があります。',
   'greater_than_equal_to' => '{field} は {param} 以上の値である必要があります。',
   'in_list'               => '{field} は下記のいずれかである必要があります： {param}',
   'integer'               => '{field} は整数のみ許可されます。',
   'is_natural'            => '{field} は自然数のみ許可されます。',
   'is_natural_no_zero'    => '{field} はゼロより大きい自然数のみ許可されます。',
   'is_unique'             => '{field} はユニークな値のみ許可されます。',
   'less_than'             => '{field} は {param} よりも小さい値である必要があります。',
   'less_than_equal_to'    => '{field} は {param} 以下の値である必要があります。',
   'matches'               => '{field} は {param} と一致する必要があります。',
   'max_length'            => '{field} の最大長は {param} です。',
   'min_length'            => '{field} の最小長は {param} です。',
   'numeric'               => '{field} は数値のみ許可されます。',
   'regex_match'           => '{field} は正規表現と一致する必要があります。',
   'required'              => '{field} は必須です。',
   'required_with'         => '{param} が存在する場合、 {field} は必須です。',
   'required_without'      => '{param} が存在しない場合、 {field} は必須です。',
   'timezone'              => '{field} は有効なタイムゾーンである必要があります。',
   'valid_base64'          => '{field} は有効なBASE64文字列である必要があります。',
   'valid_email'           => '{field} は有効なEメールアドレスである必要があります。',
   'valid_emails'          => '{field} はすべて有効なEメールアドレスである必要があります。',
   'valid_ip'              => '{field} は有効なIPアドレスである必要があります。',
   'valid_url'             => '{field} は有効なURLである必要があります。',
   'valid_date'            => '{field} は有効な日付書式である必要があります。',

    // Credit Cards
   'valid_cc_num'          => '{field} は有効なカード番号ではありません。',

    // Files
   'uploaded'              => '{field} は有効なアップロードファイルではありません。',
   'max_size'              => '{field} はファイルが大きすぎます',
   'is_image'              => '{field} は有効なアップロード画像ではありません。',
   'mime_in'               => '{field} は有効な MIME タイプではありません。',
   'ext_in'                => '{field} は有効なファイル拡張子ではありません。',
   'max_dims'              => '{field} は画像でないか、縦幅か横幅が大きすぎます。',
];
