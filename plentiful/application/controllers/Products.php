<?php 
class Products extends CI_Controller
{
	public function __contruct()
	{
		parent::__contruct();
	}
	public function category()
	{
		if($this->input->method()=='post')
		{
			$this->form_validation->set_rules('name','Division','required');
			if($this->form_validation->run()=='true')
			{
				$resp=$this->cm->insert_data('product_category',$_POST);
				if($resp)
					$arr=array('status'=>'true','message'=>'Division Successfully Inserted','reload'=>base_url().'products/category');
				else 
					$arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
				echo json_encode($arr);
			}
			else 
			{
				print_r(validation_errors());
			}
		}
		else 
		{
			$data['page_title']="Division";
			$data['all_category']=$this->cm->select_data('product_category','*');
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/category',$data);
			$this->load->view('admin/includes/footer');
		}
		
	}

	public function categorybybrand()
	{
		if($this->input->method()=='post')
		{
			$this->form_validation->set_rules('brand_name','Category','required');
			if($this->form_validation->run()=='true')
			{
				$resp=$this->cm->insert_data('product_brand',$_POST);
				if($resp)
					$arr=array('status'=>'true','message'=>'Category Successfully Inserted','reload'=>base_url().'products/categorybybrand');
				else 
					$arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
				echo json_encode($arr);
			}
			else 
			{
				print_r(validation_errors());
			}
		}
		else 
		{
			$data['page_title']="Category";
			$data['all_categorybybrand']=$this->cm->select_data('product_brand','*');
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/categorybybrand',$data);
			$this->load->view('admin/includes/footer');
		}
		
	}

	public function delete_product_categorybybrand($id)
	{
		$res=$this->cm->delete_data('product_brand',array('id'=>$id));
		if($res)
		{
			redirect(base_url().'products/categorybybrand');
		}
	}

	public function delete_product_category($id)
	{
		$res=$this->cm->delete_data('product_category',array('id'=>$id));
		if($res)
		{
			redirect(base_url().'products/category');
		}
	}

	public function edit_product_category($id)
	{
		if($this->input->method()=='post')
		{
			$res=$this->cm->update_data('product_category',$_POST,array('id'=>$id));
			if($res)
				$arr=array('status'=>'true','message'=>'Division Successfully Updated','reload'=>base_url().'products/category');
			else 
				$arr=array('status'=>'false','message'=>'Division Not Updated');
			echo json_encode($arr);
		}
		else 
		{
			$data['category_info']=$this->cm->select_data('product_category','name,id',array('id'=>$id));
			$data['page_title']="Edit Division";
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/edit_category',$data);
			$this->load->view('admin/includes/footer');
		}
	}
	public function subcategory()
	{
		if($this->input->method()=='post')
		{
				$resp=$this->cm->insert_data('product_sub_category',$_POST);
				if($resp)
					$arr=array('status'=>'true','message'=>'Area Successfully Inserted','reload'=>base_url().'products/subcategory/');
				else 
					$arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
				echo json_encode($arr);
		
		}
		else 
		{
			$data['page_title']="Area";
			$data['all_category']=$this->cm->select_data('product_category','*');
			$data['all_sub_category']=$this->cm->select_data('product_sub_category','*');
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/sub_category',$data);
			$this->load->view('admin/includes/footer');
		}
	}
	function delete_category($id)
	{
		$this->cm->delete_data('product_sub_category',array('id'=>$id));
		redirect(base_url().'Products/subcategory');
	}
	public function edit_category($id)
	{
		if($this->input->method()=='post')
		{
			$res=$this->cm->update_data('product_sub_category',$_POST,array('id'=>$id));
			if($res)
				$arr=array('status'=>'true','message'=>'Area Successfully Updated','reload'=>base_url().'products/subcategory');
			else 
				$arr=array('status'=>'false','message'=>'Area Not Updated');
			echo json_encode($arr);
		}
		else 
		{
			$data['page_title']="Edit Area";
			$data['all_category']=$this->cm->select_data('product_category','*');
			$data['all_sub_category']=$this->cm->select_data('product_sub_category','*',array('id'=>$id));
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/edit_sub_category',$data);
			$this->load->view('admin/includes/footer');
		}
	}
}
?>