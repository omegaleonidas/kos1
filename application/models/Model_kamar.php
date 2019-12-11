<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kamar extends MY_Model {
    public function __construct(){
        $table = 'tbl_jenis_kamar';
        parent::__construct($table);
    }
}

