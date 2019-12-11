<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_Model extends MY_Model {
    public function __construct(){
        $table = 'tbl_fasilitas';
        parent::__construct($table);
    }
}

