<?php
class Attributes_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
  
     function get_attributes_values($attribute_id = ''){
         if($attribute_id){
            $this->db->select('ary_attribute_value.*,ary_attribute.en_attribute_name');
            $this->db->join('ary_attribute', 'ary_attribute.attribute_id = ary_attribute_value.attribute_id');
            $this->db->where('attribute_value_id', $attribute_id);
            $res = $this->db->get('ary_attribute_value')->row_array();

            return $res;
         }

        $this->db->select('ary_attribute_value.*,ary_attribute.en_attribute_name');

        $this->db->join('ary_attribute', 'ary_attribute.attribute_id = ary_attribute_value.attribute_id');
        $res = $this->db->get('ary_attribute_value')->result_array();        
        return $res;
}  
function get_attribute(){
        $res = $this->db->get('ary_attribute')->result_array();        
        return $res;
}  

 function save_attributes($data){       
       
                $this->db->insert('ary_attribute_value', $data);

                return $this->db->insert_id();
       
    }
function update_attribute($data){
 

                $this->db->where('attribute_value_id', $data['attribute_value_id']);
                $this->db->update('ary_attribute_value', $data);

                return $data['attribute_value_id'];
        
}
function save_attribute_type($data){
        
                $this->db->insert('ary_attribute', $data);	
echo $this->db->last_query(); exit;
                return $this->db->insert_id();

       
    }
 function fetchcategory($parent = 0, $spacing = '', $user_tree_array = '') {

        if (!is_array($user_tree_array))
            $user_tree_array = array();

        $sql = "SELECT * FROM `ary_category` WHERE 1 AND `parent_id` ='$parent' ORDER BY category_id ASC";  // query
        $query = $this->db->query($sql);
        $val = $query->result_array();

        foreach ($val as $cat_sub) {
            $user_tree_array[] = array("category_id" => $cat_sub['category_id'], "en_cat" => $spacing . $cat_sub['en_cat']);
            $user_tree_array = $this->fetchcategory($cat_sub['category_id'], $spacing . '&nbsp;&nbsp;', $user_tree_array);
        }
        return $user_tree_array;
    }
 function delete_row($attribute_value_id) {

        $this->db->where('attribute_value_id', $attribute_value_id);
        $this->db->delete('ary_attribute_value');
    }
   
}
?>