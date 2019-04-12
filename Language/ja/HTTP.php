<?php

/**
 * HTTP language strings.
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
    // CurlRequest
   'missingCurl'                => 'CURLRequest を使用するためには、CURLモジュールが必要です。',
   'invalidSSLKey'              => 'SSLキーを設定できません。 {0} は有効なファイルではありません。',
   'sslCertNotFound'            => 'SSL証明書がで見つかりません： {0}',
   'curlError'                  => '{0}：{1}',

    // IncomingRequest
   'invalidNegotiationType'     => '{0} は有効なネゴシエーションタイプではありません。 media, charset, encoding, language のいずれかでなければなりません。',

    // Message
   'invalidHTTPProtocol'        => '無効なHTTPプロトコルバージョン。 {0} のいずれかでなければなりません',

    // Negotiate
   'emptySupportedNegotiations' => 'すべてのネゴシエーションでサポートされる配列を提供しなければなりません。',

    // RedirectResponse
   'invalidRoute'               => '{0, string} リバースルーティングが見つかりません。',

    // DownloadResponse
   'cannotSetBinary'            => 'ファイルパスにバイナリを設定することはできません。',
   'cannotSetFilepath'          => 'ファイルパスにバイナリを設定することはできません： {0}',
   'notFoundDownloadSource'     => 'ダウンロードの body ソースが見つかりません。',
   'cannotSetCache'             => 'ダウンロード用のキャッシュはサポートされていません。',
   'cannotSetStatusCode'        => 'ダウンロード用のステータスコードの変更はサポートされていません。コード： {0} 理由： {1}',

    // Response
   'missingResponseStatus'      => 'HTTP の応答ステータスコードが含まれていません。',
   'invalidStatusCode'          => '{0, string} は有効な HTTP 応答ステータスコードではありません',
   'unknownStatusCode'          => '不明な HTTP ステータスコード： {0}',

    // URI
   'cannotParseURI'             => 'URI を解析できません： {0}',
   'segmentOutOfRange'          => 'リクエスト URI のセグメントは範囲外のものです： {0}',
   'invalidPort'                => 'ポートは、0〜65535 で与えられなければなりません： {0}',
   'malformedQueryString'       => 'クエリ文字列は、URI のフラグメントを含んでいなくても構いません。',

    // Page Not Found
   'pageNotFound'               => 'ページが見つかりません。',
   'emptyController'            => 'コントローラが指定されていません',
   'controllerNotFound'         => 'コントローラまたはそのメソッドが見つかりません： {0}::{1}',
   'methodNotFound'             => 'コントローラのメソッドが見つかりません： {0}',

    // CSRF
   'disallowedAction'           => 'リクエストされたアクションは許可されていません。',

    // Uploaded file moving
   'alreadyMoved'               => 'アップロードされたファイルは既に移動されました。',
   'invalidFile'                => 'オリジナルのファイルは有効なファイルではありません。',
   'moveFailed'                 => '{1}（{2}）にファイル {0} を移動できませんでした',
];
