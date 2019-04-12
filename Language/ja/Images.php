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
   'sourceImageRequired'    => 'ソースイメージを指定する必要があります。', // 'You must specify a source image in your preferences.',
   'gdRequired'             => 'この機能を使用するには、GDイメージライブラリが必要です', // 'The GD image library is required to use this feature.',
   'gdRequiredForProps'     => '画像のプロパティを決定するために、サーバーがGDイメージライブラリをサポートしている必要があります。', // 'Your server must support the GD image library in order to determine the image properties.',
   'gifNotSupported'        => 'GIF画像は多くの場合ライセンスの制限によりサポートされていません。代わりにJPGまたはPNG画像を使用する必要があります。', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.',
   'jpgNotSupported'        => 'JPG画像はサポートされていません。', // 'JPG images are not supported.',
   'pngNotSupported'        => 'PNG画像はサポートされていません。', // 'PNG images are not supported.',
   'unsupportedImagecreate' => 'サーバーがこのタイプのイメージを処理するために必要なGDの機能をサポートしていません。', // 'Your server does not support the GD function required to process this type of image.',
   'jpgOrPngRequired'       => '指定された画像リサイズプロトコルはJPEGまたはPNG画像で動作します。', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.',
   'rotateUnsupported'      => '画像の回転は、サーバーによってサポートされていません。', // 'Image rotation does not appear to be supported by your server.',
   'libPathInvalid'         => '画像ライブラリへのパスが正しくありません。正しいパスを設定してください。 {0, string）', // 'The path to your image library is not correct. Please set the correct path in your image preferences. {0, string)',
   'imageProcessFailed'     => '画像処理に失敗しました。サーバが選択したプロトコルをサポートしていることを確認し、画像ライブラリへのパスが正しいこと確認してください。', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.',
   'rotationAngleRequired'  => '回転の角度は、画像を回転させるために必要です。', // 'An angle of rotation is required to rotate the image.',
   'invalidPath'            => '画像へのパスが正しくありません。', // 'The path to the image is not correct.',
   'copyFailed'             => '画像のコピールーチンが失敗しました', // 'The image copy routine failed.',
   'missingFont'            => '使用するフォントが見つかりませんでした。', // 'Unable to find a font to use.',
   'saveFailed'             => '画像を保存することができません。画像やファイルディレクトリが書き込み可能であることを確認してください。', // 'Unable to save the image. Please make sure the image and file directory are writable.',
   'invalidDirection'       => 'フリップ方向にのみ `vertical` または `horizo​​ntal` を指定することができます。値： {0}', // 'Flip direction can be only `vertical` or `horizontal`. Given: {0}',
   'exifNotSupported'       => 'EXIF データの読み込みに、インストールされた PHP でサポートされていません。', // 'Reading EXIF data is not supported by this PHP installation.',
];
