<?php  defined('SYSPATH') OR die('No direct script access.'); ?>
<div id="l_link"><?php  if(!empty($link->value)){echo 'http://bref/request?ref='.$link->value;}?></div>
<input type="button" id="link_create" value="<?=__('Generation  link')?>">

</div>