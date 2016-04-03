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
define('DB_HOST', 'us-cdbr-east-03.cleardb.com');

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
define('AUTH_KEY',         'UVU_q11#qK>5=D/62%|.tgPEM`]8(=-+;o)H5yLvbl+LigK1e,JSu>{TigoLtrBt');
define('SECURE_AUTH_KEY',  's~Vl?l|R{jJSu0k9|cW_&Z.E==[dx}j1+lqOPb+CK5Oyu&nH>bdH5s|~.d(dc.jN');
define('LOGGED_IN_KEY',    'b_N=@3<$vtA):}lN,+):TEh+cF.,3^H9$~D_YxWYDi7RJ,ztIqfJ^9+^3_%fIBhg');
define('NONCE_KEY',        'OLC;IZXH/|wF>pOq[:<$^+/iq<,^VrW^H5gXe#cy+#WCa/:[VU38)zb_JX+p<s$-');
define('AUTH_SALT',        'Y-+:D8on7DItpI=P1s- ^KsOJ5%tR95(TSIEbqY5ZY-j-+Xs/Lq[6^f6>+wVh[@g');
define('SECURE_AUTH_SALT', ',[aPJzX|$fnb!V^t~5gN>IvO54r6vpdTq+M@`@HI4#lh0%a@|gy%ugdqs++Y-(#4');
define('LOGGED_IN_SALT',   'r0tqRgHm.+jNp Rid6Cy4f7kLgE->Q=Tylcu~raYA7MQ=?PrXLe+bjv]%+9A;PK0');
define('NONCE_SALT',       'Om{uakfoSd,(*F9xqaGvLwur<]/sFFh,&9e+j=[r ;(4Zq!{UjJ~m&Ro35Vk1!TW');
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
