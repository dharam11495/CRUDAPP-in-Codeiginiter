<?php
  
   class Admin extends MY_controller
   {
     

     



   	public function welcome()
   	{
        
   		$this->load->model('loginmodel','ar');
      $this->load->library('pagination');
      $config=[
        'base_url' => base_url('admin/welcome'),
        'per_page' =>4,
        'total_rows' => $this->ar->num_rows(),
        
         'full_tag_open'=>"<ul class='pagination'>",
        'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li class='page-item'>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li class='page-item'>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li class='page-item'>",
        'num_tag_close' =>"</li>",
        'cur_tag_open' =>"<li class='active'><a style='background-color: #483D8B; color:white'>",
        'cur_tag_close' =>"</a></li>"
        // 'anchor_class'  =>"page-link"   34
      ];
      // $config['anchor_class'] = 'class="page-link"';
      $this->pagination->initialize($config);
   		$articles=$this->ar->articleList($config['per_page'],$this->uri->segment(3));
   		$this->load->view('admin/dashboard',['articles'=>$articles]);


   	}

      public function addarticles()
      {
         $this->load->view('admin/add_articles');
      }

      public function edituser($id)
      { 
        $this->load->model('loginmodel');
        $article=$this->loginmodel->find_article($id);
        $this->load->view('admin/edit_article',['article'=>$article]);
      }

      public function delarticles()
      {
        $id=$this->input->post('id');
        $this->load->model('loginmodel','delarticle');
           if($this->delarticle->del($id))
           {
            $this->session->set_flashdata('msg','Delete Article Successfully');
            $this->session->set_flashdata('msg_class','alert alert-success');
           }
           else
           {
            
            $this->session->set_flashdata('msg','Article Not Delete!');
            $this->session->set_flashdata('msg_class','alert alert-danger');
           }

           return redirect('admin/welcome');

      }

      public function userValidation()
      {
        if ($this->form_validation->run('add_article_rules')) {
           $post=$this->input->post();
           $this->load->model('loginmodel','add_article_insert');
           if($this->add_article_insert->add_articles($post))
           {
            $this->session->set_flashdata('msg','Article Added Successfully');
            $this->session->set_flashdata('msg_class','alert alert-success');
           }
           else
           {
            
            $this->session->set_flashdata('msg','Article Not Added!');
            $this->session->set_flashdata('msg_class','alert alert-danger');
           }

           return redirect('admin/welcome');
        }
        else
        {
          $this->load->view('admin/add_articles');
        }
      }

 public function updatearticle($article_id)
 {
if($this->form_validation->run('add_article_rules'))
  {
      $post=$this->input->post(); 
      //$articleid=$post['article_id'];
      //unset($articleid);
      $this->load->model('loginmodel','editupdate');
      if($this->editupdate->update_article($article_id,$post))
      {
         $this->session->set_flashdata('msg','Article Update successfully');
          $this->session->set_flashdata('msg_class','alert alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Articles not update Please try again!!');
         $this->session->set_flashdata('msg_class','alert alert-danger');
      }
      return redirect('admin/welcome');
     }
  else
  {
    $this->edituser($article_id);
    
  }

 }

      

 public function __construct()
  {
    parent::__construct();
    if( ! $this->session->userdata('id') )
    return redirect('Login');
    
  }
  public function logout()
  {
    $this->session->unset_userdata('id');
    return redirect('Login');
  }


  
   	
   }

?>