<?php 
class UserModel extends CI_Model {

// function __construct()
// {
//     parent :: __construct();
   
// }

public function getDataUser(){

    $result = $this->db->get('t_user')->result();
    return $result;
}

public function saveData($data){

    $result = $this->db->insert('t_user', $data);
    return $result;

}

public function delete($id) 
{
    $result = $this->db->delete('t_user', array('iduser' => $id)); 
    return $result;
}


}