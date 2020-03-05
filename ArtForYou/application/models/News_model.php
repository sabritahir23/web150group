<?php
//application/models/News_model.php
class News_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    
    
    public function get_news($slug = FALSE)
    {
            if ($slug === FALSE)
            {
                    $query = $this->db->get('Art');
                    return $query->result_array();
            }

            $query = $this->db->get_where('Art', array('slug' => $slug));
            return $query->row_array();
    }  
    

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        //return $this->db->insert('news', $data);
        
        if($this->db->insert('Art', $data))
        {//return slug - send to view page
            return $slug;
        }else{//return false
            return false;
        }
    }
}