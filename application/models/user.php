<?php
class User extends CI_Model{
  static function all(){
    return $this->query->get('users');
  }
  static function find(var $id){
    return $this->query->where('users id = '.$id.'');
  }
}
?>
