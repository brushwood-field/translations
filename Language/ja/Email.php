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
   'mustBeArray'          => 'Eメールのバリデーションは、配列を渡す必要があります。', // 'The email validation method must be passed an array.',
   'invalidAddress'       => '無効なメールアドレス： {0}', // 'Invalid email address: {0}',
   'attachmentMissing'    => '添付ファイルが見つかりません： {0}', // 'Unable to locate the following email attachment: {0}',
   'attachmentUnreadable' => '添付ファイルを開くことができません： {0}', // 'Unable to open this attachment: {0}',
   'noFrom'               => 'From ヘッダーなしでメールを送信することはできません。', // 'Cannot send mail with no "From" header.',
   'noRecipients'         => '受信者の To, あるいは CC, BCC を含める必要があります', // 'You must include recipients: To, Cc, or Bcc',
   'sendFailurePHPMail'   => 'PHP mail() 関数を使用してEメールを送信できません。あなたのサーバーは、このメソッドを使用してEメールを送信するように設定されない場合があります。', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.',
   'sendFailureSendmail'  => 'PHP Sendmail を使用してEメールを送信することができません。あなたのサーバーは、このメソッドを使用してメールを送信するように設定されない場合があります。', // 'Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.',
   'sendFailureSmtp'      => 'PHP SMTP を使ってEメールを送信することができません。あなたのサーバーは、このメソッドを使用してメールを送信するように設定されない場合があります。', // 'Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.',
   'sent'                 => '正常に以下のプロトコルを使用して送信されました： {0, string}', // 'Your message has been successfully sent using the following protocol: {0, string}',
   'noSocket'             => 'Sendmail のソケットを開くことができません。設定を確認してください。', // 'Unable to open a socket to Sendmail. Please check settings.',
   'noHostname'           => 'SMTP ホスト名を指定していませんでした。', // 'You did not specify a SMTP hostname.',
   'SMTPError'            => 'SMTP エラーが発生しました： {0}', // 'The following SMTP error was encountered: {0}',
   'noSMTPAuth'           => 'エラー： SMTP のユーザー名とパスワードを割り当てる必要があります。', // 'Error: You must assign a SMTP username and password.',
   'failedSMTPLogin'      => 'AUTH LOGIN コマンドの送信に失敗しました。エラー： {0}', // 'Failed to send AUTH LOGIN command. Error: {0}',
   'SMTPAuthUsername'     => 'ユーザ名を認証に失敗しました。エラー： {0}', // 'Failed to authenticate username. Error: {0}',
   'SMTPAuthPassword'     => 'パスワードの認証に失敗しました。エラー： {0}', // 'Failed to authenticate password. Error: {0}',
   'SMTPDataFailure'      => 'データを送信できません： {0}', // 'Unable to send data: {0}',
   'exitStatus'           => '終了ステータスコード： {0}', // 'Exit status code: {0}',
];
