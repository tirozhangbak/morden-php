<?php

class DatabaseConnection
{
  public static function get()
  {
    static $db = null;
    if ( $db == null )
      $db = new DatabaseConnection();
    return $db;
  }

  private $_handle = null;

  private function __construct()
  {
    $this->_handle =& mysql_connect('127.0.0.1','root','12345678');
  }
  
  public function handle()
  {
    return $this->_handle;
  }
}

// print( "Handle = ".DatabaseConnection::get()->handle()."\n" );
// print( "Handle = ".DatabaseConnection::get()->handle()."\n" );
// $db = new DatabaseConnection(); 


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
