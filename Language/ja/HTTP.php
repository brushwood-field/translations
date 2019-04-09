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
   'missingCurl'                => 'CURLRequest を使用するためには、CURLモジュールが必要です。', // CURL must be enabled to use the CURLRequest class.
   'invalidSSLKey'              => 'SSLキーを設定できません。 {0} は有効なファイルではありません。', // 'Cannot set SSL Key. {0} is not a valid file.',
   'sslCertNotFound'            => 'SSL証明書がで見つかりません： {0}', // 'SSL certificate not found at: {0}',
   'curlError'                  => '{0}：{1}', // '{0} : {1}',

    // IncomingRequest
   'invalidNegotiationType'     => '{0} は有効なネゴシエーションタイプではありません。 media, charset, encoding, language のいずれかでなければなりません。', // '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',

    // Message
   'invalidHTTPProtocol'        => '無効なHTTPプロトコルバージョン。 {0} のいずれかでなければなりません', // 'Invalid HTTP Protocol Version. Must be one of: {0}',

    // Negotiate
   'emptySupportedNegotiations' => 'すべてのネゴシエーションでサポートされる配列を提供しなければなりません。', // 'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
   'invalidRoute'               => '{0, string} リバースルーティングが見つかりません。', // '{0, string} route cannot be found while reverse-routing.',

    // DownloadResponse
   'cannotSetBinary'            => 'ファイルパスにバイナリを設定することはできません。', // 'When setting filepath can not set binary.',
   'cannotSetFilepath'          => 'ファイルパスにバイナリを設定することはできません： {0}', // 'When setting binary can not set filepath: {0}',
   'notFoundDownloadSource'     => 'ダウンロードの body ソースが見つかりません。', // 'Not found download body source.',
   'cannotSetCache'             => 'ダウンロード用のキャッシュはサポートされていません。', // 'It does not supported caching for downloading.',
   'cannotSetStatusCode'        => 'ダウンロード用のステータスコードの変更はサポートされていません。コード： {0} 理由： {1}', // 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

    // Response
   'missingResponseStatus'      => 'HTTP の応答ステータスコードが含まれていません。', // 'HTTP Response is missing a status code',
   'invalidStatusCode'          => '{0, string} は有効な HTTP 応答ステータスコードではありません', // '{0, string} is not a valid HTTP return status code',
   'unknownStatusCode'          => '不明な HTTP ステータスコード： {0}', // 'Unknown HTTP status code provided with no message: {0}',

    // URI
   'cannotParseURI'             => 'URI を解析できません： {0}', // 'Unable to parse URI: {0}',
   'segmentOutOfRange'          => 'リクエスト URI のセグメントは範囲外のものです： {0}', // 'Request URI segment is our of range: {0}',
   'invalidPort'                => 'ポートは、0〜65535 で与えられなければなりません： {0}', // 'Ports must be between 0 and 65535. Given: {0}',
   'malformedQueryString'       => 'クエリ文字列は、URI のフラグメントを含んでいなくても構いません。', // 'Query strings may not include URI fragments.',

    // Page Not Found
   'pageNotFound'               => 'ページが見つかりません。', // 'Page Not Found',
   'emptyController'            => 'コントローラが指定されていません', // 'No Controller specified.',
   'controllerNotFound'         => 'コントローラまたはそのメソッドが見つかりません： {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
   'methodNotFound'             => 'コントローラのメソッドが見つかりません： {0}', // 'Controller method is not found: {0}',

    // CSRF
   'disallowedAction'           => 'リクエストされたアクションは許可されていません。', // 'The action you requested is not allowed.',

    // Uploaded file moving
   'alreadyMoved'               => 'アップロードされたファイルは既に移動されました。', // 'The uploaded file has already been moved.',
   'invalidFile'                => 'オリジナルのファイルは有効なファイルではありません。', // 'The original file is not a valid file.',
   'moveFailed'                 => '{1}（{2}）にファイル {0} を移動できませんでした', // 'Could not move file {0} to {1} ({2})',
];
