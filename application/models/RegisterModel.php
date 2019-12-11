<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends MY_Model {
    public function __construct(){
        $table = 'tbl_member';
        parent::__construct($table);
    }
}