<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends MY_Model {
    public function __construct(){
        $table = 'tbl_booking';
        parent::__construct($table);
    }
}