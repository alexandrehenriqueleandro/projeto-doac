<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get usuario by email_usuario
     */
    function get_usuario($email_usuario)
    {
        return $this->db->get_where('usuario',array('email_usuario'=>$email_usuario))->row_array();
    }
    
    function enter($email_usuario, $cpf_usuario) {
        return $this->db->query("SELECT * FROM usuario WHERE email_usuario = '".$email_usuario."' AND cpf_usuario = '".$cpf_usuario."';")->row_array();
    }
        
    /*
     * Get all usuario
     */
    function get_all_usuario()
    {
        $this->db->order_by('email_usuario', 'desc');
        return $this->db->get('usuario')->result_array();
    }
        
    /*
     * function to add new usuario
     */
    function add_usuario($params)
    {
        $this->db->insert('usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update usuario
     */
    function update_usuario($email_usuario,$params)
    {
        $this->db->where('email_usuario',$email_usuario);
        return $this->db->update('usuario',$params);
    }
    
    /*
     * function to delete usuario
     */
    function delete_usuario($email_usuario)
    {
        return $this->db->delete('usuario',array('email_usuario'=>$email_usuario));
    }
}