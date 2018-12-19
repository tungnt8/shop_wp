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
define('DB_NAME', 'shop');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'dqno*AFJf/PQmH;9M:`2I8NO$6fWNh/r/%|.I4$8v+bXSzX^.z!;P|Ji@Gv9[OkK');
define('SECURE_AUTH_KEY',  '{P)(lPr)f$W35(coB=<:R>OWV#X?c<V>OmEgd<O.NFbh%SS+/*uMkL>dqh!?Yn(a');
define('LOGGED_IN_KEY',    '9}6K#gDA4xW$^X{Uxb7DN]j*]WN0;xT+r#28W._*VFHg!mv%mUFODAX6k*G#)pv;');
define('NONCE_KEY',        '  zH]{9>xSQ)/.Y L>rT&7XGV2o>&Tq]f3A@QgFa/3L9DTx05u!:-/FBY&}a-1g5');
define('AUTH_SALT',        '!U?gUZM){#:Mvh}4s:{G%yT1q>8m,g]F3Jup_TG27%qA3o`c>S}UT#nOZBHy$H*5');
define('SECURE_AUTH_SALT', 'i*Cb+La# 1=n1mqFF9#E5cW.S;ts)xR!FR%T+Fu_Iv4b<$eJbG6Oo&0vaV~5R_[7');
define('LOGGED_IN_SALT',   'BWJ0^hoz l3c;EdiPG]X;Ts958rT~pk;+JoOpMN0%c?VDxvW9p8&R-5 $ Hy:G4N');
define('NONCE_SALT',       '&#9*?2>IF 0E .5((}vjI`/=N#k50Q&YE9YC(w$eEn68G)in8Ho&,usB!$6e<Sgq');

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
