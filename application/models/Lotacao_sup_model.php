<?php
class Lotacao_sup_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_lotacoes() {
      return $this->db->count_all('lotacoes_superiores');
    }

    public function fetch_lotacoes($limit, $offset) {
      $this->db->limit($limit, $offset);
      $query = $this->db->get('lotacoes_superiores');
      if($query->num_rows() > 0) {
        return $query->result();
      } else {
        return $query->result();
      }
    }

    function get_lotacoes()
    {
        $query = $this->db->get('lotacoes_superiores');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>
