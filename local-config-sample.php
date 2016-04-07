<?php
define( 'DB_NAME', 'database' );
define( 'DB_USER', 'user' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'localhost' );

ini_set( 'display_errors', E_ALL );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );

/* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} */
define('AUTH_KEY',         '6PT44{2RJv!m gn^)q8*Z_-ITBL*)pd+]1p_ChU#y4$HrsLOtr>Rl7B1}N:z*.S?');
define('SECURE_AUTH_KEY',  '[Tnr4--` &V50&~;oM/A.&axCUdX+dQuMeR+3Eu/G8 iE4hcgw)OH-_r|]gfudQ5');
define('LOGGED_IN_KEY',    '&`(/`aCZoUk:;HjxGJ*Uk~1e{A=?,_Cue9<GB^T#M]ftwF5E>$c9u9E|_nRYp/$U');
define('NONCE_KEY',        '{V_ b7r.FR<;-J(_?;0lm/NKwE?[b40.Yv:|(B^(I/y2&-j!h@>QTaSH*F{(t.a4');
define('AUTH_SALT',        '9wN; V6}Ml`$3|RBrZ&<D`{i#AC5wan +S-$;~9&g$pwP>_:=LdvTFU)GzSFPcc#');
define('SECURE_AUTH_SALT', '9d+F5-JSZu42%R&PJ>-wKQzdG[7yCiAwgek;o6>]y/#3riCGfT3@#g>-k^`~g[ &');
define('LOGGED_IN_SALT',   '2r0%>MNvkJf}M!|LYe^2Bb:6a+c>!q-~|MRSS=Nu,|.mF_u0]n~hJZr@2&?tv(rQ');
define('NONCE_SALT',       '=#btg<Z*I1K@]wQwot-%+fY8y+?o!^Wv>RS=HQ+K HWS:oHfEIp5Us[l$B&J{,>O');
