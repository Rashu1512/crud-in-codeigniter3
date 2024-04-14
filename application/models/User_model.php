<?php
class User_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('data1', $formArray); // insert into users (name,email,created)values(?,?,?,);
    }

    public function all() {
        return $this->db->get('data1')->result_array();
    }

    public function getUser($userId) {
        $this->db->where('user_id', $userId);
        return $this->db->get('data1')->row_array();
    }

       public function updateUser($userId,$formArray) {
        echo "ok";
        $this->db->where('user_id',$userId);
        $this->db->update('data1',$formArray);
    }
  public function deleteUser($userId){
    $this->db->where('user_id',$userId);
    $this->db->delete('data1');
   }
}
?>
