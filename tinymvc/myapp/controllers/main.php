<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Main_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->view->display('index_view');
  }
}

?>
