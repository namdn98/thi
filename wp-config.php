<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'thi' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',V2)mLMxO$^o9+(>[$24uT|5!f*2#ae7]M>A@.1/E8{1XRcJQ}z~} .>wcTv ?`-' );
define( 'SECURE_AUTH_KEY',  '?{u-y`afW` l[h:<+q(3+^v/1{Msm#RhQXiH!F-,YkbOC:q^2C!x_/Zh~6|}}Gtv' );
define( 'LOGGED_IN_KEY',    'KK5,:EV g@rAOOTe9t)9*o(y Qz%S6xtv,..vafZ1|SOrvaMTt^_+Dcs(/!JGFVf' );
define( 'NONCE_KEY',        'Ope^PtM;:BRSOg.m[3 7|GQ$$4!|3w6uu#r!NnVx)?~3OeULYs4_?#;ghngCHm,-' );
define( 'AUTH_SALT',        '&khK~Fq/oU~iRk81f>C(D=#32{T$kD.;_e@!gz/Wi9OL_{@aEn</QvmCsV!%19)q' );
define( 'SECURE_AUTH_SALT', ';zP{d5U0_ndHy(cW{RJo 0[w`Gw8nrxyNpO}B2//ZTVu-T-I0~GA6vVo#eMjfJ}W' );
define( 'LOGGED_IN_SALT',   'b`EkeyDMXs^ephc%ku[D_;4Y(.gOh`,/.C.Ci*Zc20-<1.Y6+4[dENwK1Jf}#/Dl' );
define( 'NONCE_SALT',       '=_[sCefxN3Qi)!%kARWW0CA)|.Be*HA qWK6s7(7*;eb&VXJl[ZLOoGq]Ea)g_Qm' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
