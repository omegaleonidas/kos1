<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisUserModel extends MY_Model {
    public function __construct(){
        $table = 'tbl_jenis_user';
        parent::__construct($table);
    }
    public function getJenisUser(){
        return $this->geAll();
    }
}