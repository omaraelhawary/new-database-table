<?php 

class getPets {
    public function __construct() {
        global $wpdb;
        $tablename = $wpdb->prefix . 'pets';
        $ourQuery = $wpdb->prepare("SELECT * from $tablename LIMIT 100");
        $this -> pets = $wpdb->get_results($ourQuery);
    }
}