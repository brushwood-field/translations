<?php

/**
 * Image language strings.
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
   'sourceImageRequired'    => 'ソースイメージを指定する必要があります。',
   'gdRequired'             => 'この機能を使用するには、GDイメージライブラリが必要です',
   'gdRequiredForProps'     => '画像のプロパティを決定するために、サーバーがGDイメージライブラリをサポートしている必要があります。',
   'gifNotSupported'        => 'GIF画像は多くの場合ライセンスの制限によりサポートされていません。代わりにJPGまたはPNG画像を使用する必要があります。',
   'jpgNotSupported'        => 'JPG画像はサポートされていません。',
   'pngNotSupported'        => 'PNG画像はサポートされていません。',
   'unsupportedImagecreate' => 'サーバーがこのタイプのイメージを処理するために必要なGDの機能をサポートしていません。',
   'jpgOrPngRequired'       => '指定された画像リサイズプロトコルはJPEGまたはPNG画像で動作します。',
   'rotateUnsupported'      => '画像の回転は、サーバーによってサポートされていません。',
   'libPathInvalid'         => '画像ライブラリへのパスが正しくありません。正しいパスを設定してください。 {0, string）',
   'imageProcessFailed'     => '画像処理に失敗しました。サーバが選択したプロトコルをサポートしていることを確認し、画像ライブラリへのパスが正しいこと確認してください。',
   'rotationAngleRequired'  => '回転の角度は、画像を回転させるために必要です。',
   'invalidPath'            => '画像へのパスが正しくありません。',
   'copyFailed'             => '画像のコピールーチンが失敗しました',
   'missingFont'            => '使用するフォントが見つかりませんでした。',
   'saveFailed'             => '画像を保存することができません。画像やファイルディレクトリが書き込み可能であることを確認してください。',
   'invalidDirection'       => 'フリップ方向にのみ `vertical` または `horizo​​ntal` を指定することができます。値： {0}',
   'exifNotSupported'       => 'EXIF データの読み込みに、インストールされた PHP でサポートされていません。',
];
