<?php
 class loginmodel extends CI_Model
 {

 public function isvalidate($username,$password)

   {
   	$q=$this->db->where(['username'=>$username,'password'=>$password]);
   	$q=$this->db->get('users');

   	   // echo "<pre>";
   	   // print_r($q->row()->id);
   	   // exit;
   				if ($q->num_rows()) 
   				{
   					return $q->row()->id;
   				}
   				else
   				{
   					return false;
   				}
   }


   public function articleList($limit,$offset)
   {
   	
   $id=$this->session->userdata('id');
   $q=$this->db->select()
   	         ->from('article')
   	         ->where(['user_id'=>$id])
               ->limit($limit,$offset)
   	         ->get();
   	         
   	       return $q->result();
   	         // exit;
   }

   public function find_article($articleid)
   {
     $q=$this->db->select(['article_tittle','article_body','id'])
            ->where('id',$articleid)
            ->get('article');
            return $q->row();
   }

   public function num_rows()
   {
      $id=$this->session->userdata('id');
   $q=$this->db->select()
               ->from('article')
               ->where(['user_id'=>$id])
               ->get();
               
             return $q->num_rows();
               // exit;

   }

   public function add_user($array)
   {
      return $this->db->insert('users',$array);
   }

   public function add_articles($array)
   {
     return $this->db->insert('article',$array);
   }

   public function del($id)
   {
      return $this->db->delete('article',['id'=>$id]);
   }

   public function update_article($articleid,Array $article)
   {
     return $this->db->where('id',$articleid)
                     ->update('article',$article);
   }

   

 }



?>