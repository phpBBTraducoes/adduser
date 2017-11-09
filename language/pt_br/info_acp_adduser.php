<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese translation by henrique.seven2011 update by eunaumtenhoid (c) 2017 [ver 1.0.4] (https://github.com/phpBBTraducoes)
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_ADD_USER'				=> 'Adicionar usuário',
	'DIR_NOT_EXIST'				=> 'O idioma que você escolheu %s s não tem os arquivos necessários para a extensão. Por favor, traduzi-los e enviar para o diretório %s da extensão antes de usar-la.',
	'ACP_ACCOUNT_ADDED'			=> 'A conta do usuário foi criada. O usuário pode fazer login com o nome de usuário e senha enviada para o endereço de e-mail que você forneceu.',
	'ACP_ACCOUNT_INACTIVE'		=> 'A conta do usuário foi criada. No entanto, as definições fórum exige que o usuário ative sua conta.<br />Uma chave de ativação foi enviado para o endereço de email fornecido para o usuário.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'A conta foi criada. No entanto, as definições fórum requer ativação da conta por um administrador.<br />Um e-mail foi enviado para os administradores e o usuário será informado quando a sua conta for ativada.',
	'ACP_ADMIN_ACTIVATE'		=> 'Um e-mail será enviado para um administrador para a ativação da conta, alternativamente, você pode marcar a caixa abaixo para ativar a conta instantaneamente, uma vez criado. O usuário receberá um e-mail contendo os detalhes da conta de login.',
	'ACP_EMAIL_ACTIVATE'		=> 'Uma vez que a conta foi criada, o usuário receberá um e-mail contendo um link de ativação para ativar a conta.',
	'ACP_INSTANT_ACTIVATE'		=> 'A conta será ativada imediatamente. O usuário receberá um e-mail com detalhes de login da conta.',

	'ADD_USER'					=> 'Adicionar usuário',
	'ADD_USER_EXPLAIN'			=> 'Cria uma nova conta de usuário. Se as configurações de ativação são para ativação pelo administrador, você terá a opção de ativar o usuário instantaneamente.',
	'MOD_VERSION'				=> 'Versão %s',
	'ADMIN_ACTIVATE'			=> 'Ativar conta de usuário',
	'CONFIRM_PASSWORD'			=> 'Confirmar senha',
	'EDIT_USER_GROUPS'			=> '%sClique aqui para editar os grupos de usuários para esse usuário%s',
	'GROUP_ADD'					=> 'Fazer uma seleção aqui irá adicionar o usuário ao grupo selecionado, bem como para o grupo de usuários registrados.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Se assinalar esta opção irá definir o grupo selecionado acima para ser o padrão usuários.',
	'CONTINUE_EDIT_USER'		=> '%1$sClique aqui para administrar o perfil de %2$s %3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Se deixar em branco a senha será gerada automaticamente.',
	'ENABLE_NEWUSER'			=> 'Ativar novo usuário',
	'ENABLE_NEWUSER_EXPLAIN'	=> 'Se definido como sim, o usuário será adicionado ao grupo de usuários recém-registrados',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Novo usuário criado</strong><br />» %s',
));
