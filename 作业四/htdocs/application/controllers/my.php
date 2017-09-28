<?php
	 class my extends CI_Controller
	 {
	 	public function __construct()
  		{
   		parent::__construct();
    	$this->load->model('users');
  		}
	 	public function test()
	 	{
	 		echo 'my first test';
	 		$bm['hello']='努力';
	 		$bm['let']='幸运';
	 		$this->load->view('another',$bm);//加载view
		 	//load加载
      		//加载数据库的方法、
      		// $first=$this->文件名数据库名->函数方法;
      		// $result=$first->result();
      		//$bm['username']=$result[0]->user;
     		// $this->load->view('another', $bm);
	 	} 
	 }

  ?>