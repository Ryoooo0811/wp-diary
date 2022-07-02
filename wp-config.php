<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //

/* dotenvの環境変数呼び出し */
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'uyq0p84g130itv70' );
 
/** データベースのユーザー名 */
define( 'DB_USER', 'ma42vr43w0plwnay' );
 
/** データベースのパスワード */
define( 'DB_PASSWORD', 'ju2iq2a46kjr5typ' );
 
/** データベースのホスト名 */
define( 'DB_HOST', 'cxmgkzhk95kfgbq4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|RZTU}|P_Xc<|Sd$Li|8Hn]fF ]tg/6*/naIo:*N> lZ`A~_@c} /&y`qb`1|_;}');
define('SECURE_AUTH_KEY',  '@1zm`R^:YFyjb3U~%W.xVzW;&p-zszm(*8x5R9*>bl!xELwT{#wnF-x-hl.R]xhP');
define('LOGGED_IN_KEY',    'XO3an5_9%I)&6!YdAibLSm}{vM>n_$8[r48einaCKy#{+%#$;jZc&{6)iW;f8`14');
define('NONCE_KEY',        'O^5UhQbMS~BnExY(--S (4Sx~eU/Wl%B(|0(,Tu6!J{#qMd_^uPBrK++EqYN=jWl');
define('AUTH_SALT',        '-d^jg$F@-W_r?kjQSNlrW-rGK5iL%}5|%`,bDcL<:f(Ie*EOG,CXU/I-|UUSt~3a');
define('SECURE_AUTH_SALT', 'nrNRB=6.`;@v^i-+sk5)wgLBvJ1n/X#Sdz(XM<j|LEO3d}$/ogUSSm8Or3js0;%|');
define('LOGGED_IN_SALT',   '-ijc ~|,yWz-z.DCD@kgzdK5zEsx432sH|Ey7rnZ|10+X5+tJ^ZR45~kES@yPaHO');
define('NONCE_SALT',       '(g^`y#P`j4-:*THuSRC@B4Y,Sa*~y f~(6TT,f!ow>hBoh%n?8,!S+hI]<j>i!fx');


/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

