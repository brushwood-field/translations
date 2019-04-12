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
    'missingTable'      => 'マイグレーションのテーブルを設定する必要があります。', // 'Migrations table must be set.',
    'invalidType'       => '無効なマイグレーション番号が指定されました： {0}', // 'An invalid migration numbering type was specified: {0}',
    'disabled'          => 'マイグレーションがロードされているが、無効になっているか、設定が間違っています。', // 'Migrations have been loaded but are disabled or setup incorrectly.',

    'notFound'          => 'マイグレーションファイルが見つかりませんでした。', // 'Migration file not found: ',
    'empty'             => 'マイグレーションファイルが見つかりませんでした。', // 'No Migration files found',
    'gap'               => 'マイグレーションシーケンスの近しいバージョンにギャップが含まれています', // 'There is a gap in the migration sequence near version number: ',
    'classNotFound'     => 'マイグレーションクラス "%s" が見つかりません', // 'The migration class "%s" could not be found.',
    'missingMethod'     => 'マイグレーションクラスのメソッド "%s" が見つかりません', // 'The migration class is missing an "%s" method.',

    // Migration Command
    'migHelpLatest'     => "\t\t利用可能な最新のマイグレーションにデータベースを移行します。", // "\t\tMigrates database to latest available migration.",
    'migHelpCurrent'    => "\t\t`current` として設定されたバージョンにデータベースを移行します。", // "\t\tMigrates database to version set as 'current' in configuration.",
    'migHelpVersion'    => "\t移行するデータベースのバージョン {V}", // "\tMigrates database to version {v}.",
    'migHelpRollback'   => "\tバージョン 0 にすべてのマイグレーションをダウンさせます。", // "\tRuns all migrations 'down' to version 0.",
    'migHelpRefresh'    => "\t\tアンインストールと再実行を行い、すべてのマイグレーションをリフレッシュします。", // "\t\tUninstalls and re-runs all migrations to freshen database.",
    'migHelpSeed'       => "\t[name] という名前のシーダを実行します。", // "\tRuns the seeder named [name].",
    'migCreate'         => "\t[name] という新しいマイグレーションを作成します。", // "\tCreates a new migration named [name]",
    'nameMigration'     => 'マイグレーションファイル名', // 'Name the migration file',
    'badCreateName'     => 'マイグレーションファイル名を指定してください。', // 'You must provide a migration file name.',
    'writeError'        => 'ファイル作成エラー', // 'Error trying to create file.',
    'migNumberError'    => 'マイグレーション番号は3桁の数字で、シーケンスにギャップを含んではいけません。', // 'Migration number must be three digits, and there must not be any gaps in the sequence.',

    'toLatest'          => '最新バージョンに移行しています...', // 'Migrating to latest version...',
    'migInvalidVersion' => '無効なバージョン番号です。', // 'Invalid version number provided.',
    'toVersionPH'       => 'バージョン %s に移行しています...', // 'Migrating to version %s...',
    'toVersion'         => '現在のバージョンに移行しています...', // 'Migrating to current version...',
    'rollingBack'       => 'すべての移行をロールバックしています...', // 'Rolling back all migrations...',
    'noneFound'         => 'マイグレーションが見つかりませんでした', // 'No migrations were found.',
    'on'                => '移行されます： ', // 'Migrated On: ',
    'migSeeder'         => 'シーダ名', // 'Seeder name',
    'migMissingSeeder'  => 'シーダ名を指定する必要があります。', // 'You must provide a seeder name.',
    'removed'           => 'ロールバック： ', // 'Rolling back: ',
    'added'             => '実行中： ', // 'Running: ',
    'version'           => 'バージョン', // 'Version',
    'filename'          => 'ファイル名', // 'Filename',
];
