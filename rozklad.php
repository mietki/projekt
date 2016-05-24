<?php
  require_once('config.php');
  require_once('core.php');
  require_once('core_smarty.php');
  
  $smarty->display('templates/'.$template_name.'/index.tpl');
?>