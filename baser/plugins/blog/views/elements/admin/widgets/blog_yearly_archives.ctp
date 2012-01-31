<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ブログ年別アーカイブ一覧ウィジェット設定
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2011, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.blog.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$title = '年別アーカイブ一覧';
$description = 'ブログの年別アーカイブー一覧を表示します。';
?>
<?php echo $formEx->label($key.'.count', '件数表示') ?>&nbsp;
<?php echo $formEx->radio($key.'.count', $textEx->booleanDoList(''), array('legend' => false, 'value' => false)) ?><br />
<?php echo $formEx->label($key.'.blog_content_id', 'ブログ') ?>&nbsp;
<?php echo $formEx->select($key.'.blog_content_id', $formEx->getControlSource('Blog.BlogContent.id'), null, null, false) ?><br />
<small>ブログページを表示している場合は、上記の設定に関係なく、対象ブログの年別アーカイブ一覧を表示します。</small>