<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kontak extends MY_Model {
    public function __construct(){
        $table = 'kontak';
        parent::__construct($table);
    }
}