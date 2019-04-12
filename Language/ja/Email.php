<?php

/**
 * Email language strings.
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
   'mustBeArray'          => 'Eメールのバリデーションは、配列を渡す必要があります。',
   'invalidAddress'       => '無効なメールアドレス： {0}',
   'attachmentMissing'    => '添付ファイルが見つかりません： {0}',
   'attachmentUnreadable' => '添付ファイルを開くことができません： {0}',
   'noFrom'               => 'From ヘッダーなしでメールを送信することはできません。',
   'noRecipients'         => '受信者の To, あるいは CC, BCC を含める必要があります',
   'sendFailurePHPMail'   => 'PHP mail() 関数を使用してEメールを送信できません。あなたのサーバーは、このメソッドを使用してEメールを送信するように設定されない場合があります。',
   'sendFailureSendmail'  => 'PHP Sendmail を使用してEメールを送信することができません。あなたのサーバーは、このメソッドを使用してメールを送信するように設定されない場合があります。',
   'sendFailureSmtp'      => 'PHP SMTP を使ってEメールを送信することができません。あなたのサーバーは、このメソッドを使用してメールを送信するように設定されない場合があります。',
   'sent'                 => '正常に以下のプロトコルを使用して送信されました： {0, string}',
   'noSocket'             => 'Sendmail のソケットを開くことができません。設定を確認してください。',
   'noHostname'           => 'SMTP ホスト名を指定していませんでした。',
   'SMTPError'            => 'SMTP エラーが発生しました： {0}',
   'noSMTPAuth'           => 'エラー： SMTP のユーザー名とパスワードを割り当てる必要があります。',
   'failedSMTPLogin'      => 'AUTH LOGIN コマンドの送信に失敗しました。エラー： {0}',
   'SMTPAuthUsername'     => 'ユーザ名を認証に失敗しました。エラー： {0}',
   'SMTPAuthPassword'     => 'パスワードの認証に失敗しました。エラー： {0}',
   'SMTPDataFailure'      => 'データを送信できません： {0}',
   'exitStatus'           => '終了ステータスコード： {0}',
];
