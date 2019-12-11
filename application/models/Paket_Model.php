<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_Model extends MY_Model {
    public function __construct(){
        $table = 'tbl_paket';
        parent::__construct($table);
    }
  

}

