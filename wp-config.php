<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
//define('DB_NAME', 'ufmabict');
define('DB_NAME', 'rafae657_bict');

/** Usuário do banco de dados MySQL */
//define('DB_USER', 'root');
define('DB_USER', 'rafae657_bict');

/** Senha do banco de dados MySQL */
//define('DB_PASSWORD', '');
define('DB_PASSWORD', 'ufmabict');

/** Nome do host do MySQL */
//define('DB_HOST', 'localhost');
define('DB_HOST', 'br728.hostgator.com.br');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RY-}<K`&+ta~s@gI*YJne M1G(5m>*;mnPA( OKjmCa&xsM%,{8mrXN3:U|kmxJa');
define('SECURE_AUTH_KEY',  '4H#iC;.Md-WNB3dSRFjerN!)?wVWPEcUl3!Oi^3|xaR#<v|Fx_C_0H&9sj1doE&}');
define('LOGGED_IN_KEY',    ' V6[n0=$}q<+}^mxjM/yLcI<2:kO0f9%67 u=XaZ -%U@=d1>C`j@E;.U_?2J-P_');
define('NONCE_KEY',        '8@eDcXS<_ k:hFWY2{.pLbGs ,Ybc8|2IPhFl:Zw!hk/m|J6#$UDHoVXHKlfKS-g');
define('AUTH_SALT',        'E@CMm9E]crO7gAX0!2?ZYAA>MEd93/j)N(DI1$10W-Z4u<CF eEiApi@Df@+A=mk');
define('SECURE_AUTH_SALT', 'b0AQW96M%Hybe[~eOq.$|k<2SMCO7u<npFQ~s@9?al)G|OA{rCs4O:U3cLn=~k!s');
define('LOGGED_IN_SALT',   'd9;BvgH_De$B7TsMJthKcP%!8T>JLv+zMi#UdK8m3T$Qk&G+p%RP?yhqr?;qUZ9&');
define('NONCE_SALT',       'OyCs}n-A%kQo4)U?xg%]ve0{rA{b}OccxyHFIHaGOgbSS0STlkF27rRVpT,VOseK');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
