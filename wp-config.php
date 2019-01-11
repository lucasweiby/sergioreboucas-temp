<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sergioreboucas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?zQ~C]K=3v.ZSs}d2Ux6z/,5u/RXJt}bM!CbYr;,mV05jiPq<Z..i_q;5tZf)7{K');
define('SECURE_AUTH_KEY',  '2J*F^UN.4cAU81)D]m?9!/]gXGkb,`1I1V2Cf<LLlR}ngeo=IY%1?J>DTjWrj:+n');
define('LOGGED_IN_KEY',    'dY^hVtmw}u]`+k^ET/H_8.W&j02#0Csuy5Pd{X~yP!X*~cs8,jYM%Tk{Z( ],k2M');
define('NONCE_KEY',        ' pnnCdvL[C$3mPtQVyA%fo$B^`_)J<eWS]vWga!2H:|ei(Ry_ggpq3HW-2II3zKe');
define('AUTH_SALT',        '];%N]b/(~do|@wK7fySjg*4Kn6?@{8z1U87Om~U.`^isTT+yOl|NqjDZAUPkf/WP');
define('SECURE_AUTH_SALT', '9^]eA0oug,l_[uFITij>#x!ym_-x=MGZN=Lk,d dEOp*yGpF+J}-<)m$:9v@jdB#');
define('LOGGED_IN_SALT',   'Wk?w{as}w8d222:7*8~ZhxJKB6b%=Ur1bJ8;mnq&`vkMS?xpFRa}8y=OZefRa59O');
define('NONCE_SALT',       'KZWmfF*BVIuZu/f<DiWN.9W8VyN$t*RR6dGH3eNVKdj>pOf9l=VCUY7Irf/6|]Dh');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
