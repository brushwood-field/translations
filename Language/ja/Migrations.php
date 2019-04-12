<?php

/**
 * Migration language strings.
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
    // Migration Runner
    'missingTable'      => 'マイグレーションのテーブルを設定する必要があります。',
    'invalidType'       => '無効なマイグレーション番号が指定されました： {0}',
    'disabled'          => 'マイグレーションがロードされているが、無効になっているか、設定が間違っています。',

    'notFound'          => 'マイグレーションファイルが見つかりませんでした。',
    'empty'             => 'マイグレーションファイルが見つかりませんでした。',
    'gap'               => 'マイグレーションシーケンスの近しいバージョンにギャップが含まれています',
    'classNotFound'     => 'マイグレーションクラス "%s" が見つかりません',
    'missingMethod'     => 'マイグレーションクラスのメソッド "%s" が見つかりません',

    // Migration Command
    'migHelpLatest'     => "\t\t利用可能な最新のマイグレーションにデータベースを移行します。",
    'migHelpCurrent'    => "\t\t`current` として設定されたバージョンにデータベースを移行します。",
    'migHelpVersion'    => "\t移行するデータベースのバージョン {V}",
    'migHelpRollback'   => "\tバージョン 0 にすべてのマイグレーションをダウンさせます。",
    'migHelpRefresh'    => "\t\tアンインストールと再実行を行い、すべてのマイグレーションをリフレッシュします。",
    'migHelpSeed'       => "\t[name] という名前のシーダを実行します。",
    'migCreate'         => "\t[name] という新しいマイグレーションを作成します。",
    'nameMigration'     => 'マイグレーションファイル名',
    'badCreateName'     => 'マイグレーションファイル名を指定してください。',
    'writeError'        => 'ファイル作成エラー',
    'migNumberError'    => 'マイグレーション番号は3桁の数字で、シーケンスにギャップを含んではいけません。',

    'toLatest'          => '最新バージョンに移行しています...',
    'migInvalidVersion' => '無効なバージョン番号です。',
    'toVersionPH'       => 'バージョン %s に移行しています...',
    'toVersion'         => '現在のバージョンに移行しています...',
    'rollingBack'       => 'すべての移行をロールバックしています...',
    'noneFound'         => 'マイグレーションが見つかりませんでした',
    'on'                => '移行されます： ',
    'migSeeder'         => 'シーダ名',
    'migMissingSeeder'  => 'シーダ名を指定する必要があります。',
    'removed'           => 'ロールバック： ',
    'added'             => '実行中： ',
    'version'           => 'バージョン',
    'filename'          => 'ファイル名',
];
