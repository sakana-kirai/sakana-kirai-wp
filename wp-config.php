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
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */


define('DB_NAME', 'heroku_8e94985ea778107');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bdcaf435d62cc3');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'ba9eeaef');

/** MySQL のホスト名 */
define('DB_HOST', 'uus-cdbr-iron-east-03.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F`pDrQ!*k%h3v~J[1:&Z.s.0+xu*:y60=g3TN+7,u_*yz{{eQDO8#JNG ]AWUDcY');
define('SECURE_AUTH_KEY',  '9|vIDlxC^g~{Kj-)>0@6F#6l`Lx6k-d,(YKe~.+%~1bzYy#};B$VI}lzYm3`1khC');
define('LOGGED_IN_KEY',    '97:*TIUt`=:}%U<&R>]9sAY:RS-W)}iT4g|bh!6Bh)}&$NM6DcvRC:+x0XWOGbI7');
define('NONCE_KEY',        'DW4._1SXn-PDTog<~1aQ4l`Ang5ZPm9uImW($Ts6V:05V(RnZGig]9;`3|ilV?aI');
define('AUTH_SALT',        'pP(Gy+VSkA-G-;FZ=&-o#%z+x4+!+Z`;_cUkY@a+2/Q-va_]PN>C~|.Vc?sr_vVh');
define('SECURE_AUTH_SALT', 'C@i59j3wP>!E,o-bKCK*5Fc/vHjT;^;`|z]Y_7Wh?9y=775HQwyOAW%jQ)AP2nPE');
define('LOGGED_IN_SALT',   '&M,G;f0-I)8Ly71)w^ji<.~R_st}ATs3:Fo7npO$&q?lR0JchG:sb#@<tg{,QLQa');
define('NONCE_SALT',       'hgq]3|#t-^vdX~u{Q62e@h@[iw;---$w$A]yTJ_!cPK|3P`lI,2hTPf-lbl=74%3');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
