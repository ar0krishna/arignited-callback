<?php 
	/**
 * CodeIgniter Igniter Datatable Callback
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Arun Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/array_helper.html
 */

if ( ! function_exists('element'))
{
	/**
	 * Igniter Datatable Callback
	 *
	 * Its a better Igniter Datatable Callback.
	 * function needs to be on the same controller that called this helper
	 *
	 * @param	function
	 * @param	mixed
	 * @return	mixed	depends on what the function returns
	 */
	function ignited_callback($x ,$a) {
		$ci =& get_instance();
		$x= $ci->$x($a);
		return $x;
	}
}
/**
 * Example controller
 * 
 *     function get_stores() {
 *
 *        $this->load->library('datatables');
 *        $this->load->helper('ignited');
 *        $this->datatables
 *        ->select("id, name, code, phone, email, address1, city")
 *        ->from("stores")
 *        ->add_column("Actions", "<div class='text-center'><a href='" . site_url('settings/edit_store/$1') . "' class='tip' title='".$this->lang->line("edit_store")."'><i class='fa fa-edit'></i></a></div>", "id")
 *				->unset_column('id')
 *				->edit_column('name','$1','ignited_callback(decrypt,name)')
 *				->edit_column('code','$1','ignited_callback(decrypt,code)')
 *				->edit_column('phone','$1','ignited_callback(decrypt,phone)')
 *				->edit_column('email','$1','ignited_callback(decrypt,email)')
 *				->edit_column('address1','$1','ignited_callback(decrypt,address1)')
 *				->edit_column('city','$1','ignited_callback(decrypt,city)');
 *				// ->edit_column('name','$1','ignited_callback(array($this , "testx"), name)');
 *				
 *        // <a href='" . site_url('settings/delete_store/$1') . "' onClick=\"return confirm('". $this->lang->line('alert_x_store') ."')\" class='tip btn btn-danger btn-xs' title='".$this->lang->line("delete_store")."'><i class='fa fa-trash-o'></i></a>
 *        echo $this->datatables->generate();
 *
 *		}
 *		function decrypt($var)
 *		{
 *			return cryptography($var);
 *		}
 * 
 * 
 * 
 * 
 */

?>