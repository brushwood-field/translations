<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => 'データベースセッションハンドラを動作させるためには、 `sessionSavePath` にテーブル名を指定する必要があります。', // '`sessionSavePath` must have the table name for the Database Session Handler to work.',
   'invalidSavePath'        => 'セッション：設定された保存先 `{0}` はディレクトリででないか、存在しないか、作成することができません。', // "Session: Configured save path '{0}' is not a directory, doesn't exist or cannot be created.",
   'writeProtectedSavePath' => 'セッション：設定された保存先 `{0}` は PHP プロセスによって書き込み可能ではありません。', // "Session: Configured save path '{0}' is not writable by the PHP process.",
   'emptySavePath'          => 'セッション：保存先が設定されていません。', // 'Session: No save path configured.',
   'invalidSavePathFormat'  => 'セッション：Redis の保存先が無効です。{0}', // 'Session: Invalid Redis save path format: {0}',
];
