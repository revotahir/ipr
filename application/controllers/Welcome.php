<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->model('Generic_model', 'generic');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function loginData()
	{
		$email = $this->input->post('userEmail');
		$pass = $this->input->post('userPassword');
		// $pass = md5($pass);

		$query = $this->generic->GetData('wp_users', array('user_email' => $email));

		if ($query) {
			// Load the PHPass library
			require_once APPPATH . 'libraries/class-phpass.php';
			$wp_hasher = new PasswordHash(8, true); // Match WordPress settings

			// Verify the password
			if ($wp_hasher->CheckPassword($pass, $query[0]['user_pass'])) {
				//set session
				$this->session->set_userdata('loginData', $query[0]);
				if ($loginData[0]['user_email'] == 'admin@admin.com') {
					redirect(base_url('admin-dashboard'));
				} else {
					redirect(base_url('dashboard'));
				}
			} else {
				$this->session->set_flashdata('error_msg', 1);
			redirect(base_url());
			}
		} else {
			// User not found
			echo "User not found!";
		}





		// if ($loginData) {
		// 	//set session
		// 	$this->session->set_userdata('loginData', $loginData[0]);
		// 	if ($loginData[0]['user_email'] == 'admin@admin.com') {
		// 		redirect(base_url('admin-dashboard'));
		// 	} else {
		// 		redirect(base_url('dashboard'));
		// 	}
		// } else {
		// 	$this->session->set_flashdata('error_msg', 1);
		// 	redirect(base_url());
		// }
	}
	public function Dashboard()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['orderList'] = $this->generic->GetData('ipr_order_detail', array('ID' => $this->session->userdata['loginData']['ID']));
			$this->load->view('dashboard', $this->data);
		} else {
			redirect(base_url());
		}
	}

	//Add new IPR 
	public function addNewIPR()
	{
		if ($this->session->userdata('loginData')) {
			$this->load->view('add-new-ipr');
		} else {
			redirect(base_url());
		}
	}
	public function addNewIPRData()
	{
		if ($this->session->userdata('loginData')) {
			$orderDetail = array(
				'ID' => $this->session->userdata['loginData']['ID'],
				'order_ID' => $this->input->post('order_id'),
				'barcodeType' => $this->input->post('Barcode_Type'),
				'companyName' => $this->input->post('CompanyName'),
				'productCategory' => $this->input->post('Product_Cat'),
				'countryOrigin' => $this->input->post('Contry_Origen'),
				'gstNumber' => $this->input->post('GstNo'),
				'companyWebsite' => $this->input->post('Company_website'),
				'phoneNumber' => $this->input->post('CompanyPhone'),
				'productDescription' => $this->input->post('productDescription'),
			);
			$this->generic->InsertData('ipr_order_detail', $orderDetail);
			//get max order ID
			$maxOrderID = $this->generic->GetMaxID('ipr_order_detail', 'orderID');
			$maxOrderID = $maxOrderID[0]['result'];
			//crud for product detail
			// Retrieve product details
			$products = $this->input->post('products');

			// Process the data (e.g., save to database)
			foreach ($products as $product) {
				$productDetail = array(
					'orderID' => $maxOrderID,
					'barcodeNo' => $product['barcodeNumber'],
					'brandName' => $product['brandName'],
					'productName' => $product['productName'],
					'sizeQty' => $product['sizeQuantity'],
					'color' => $product['color'],
					'price' => $product['price']
				);
				$this->generic->InsertData('ipr_product_detail', $productDetail);
			}
			//success message
			$this->session->set_flashdata('iprAdded', 1);
			redirect(base_url('add-new-ipr'));
		} else {
			redirect(base_url());
		}
	}

	public function OrderDatail()
	{
		if ($this->session->userdata('loginData')) {
			if ($this->session->userdata['loginData']['user_email'] == 'admin@admin.com') {
				$this->data['ProductDetail'] = $this->generic->getPructsList();
			} else {
				$this->data['ProductDetail'] = $this->generic->getPructsList(array('od.ID' => $this->session->userdata['loginData']['ID']));
			}

			$this->load->view('all-order-detail', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function IprProductView()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['orderDetail'] = $this->generic->GetData('ipr_order_detail', array('orderID' => $_GET['order_id']));
			$this->data['ProductDetail'] = $this->generic->GetData('ipr_product_detail', array('orderID' => $_GET['order_id']));
			$this->data['userDetail'] = $this->generic->GetData('wp_users', array('ID' => $this->data['orderDetail'][0]['ID']));
			$this->load->view('productDetails', $this->data);
		} else {
			redirect(base_url());
		}
	}

	//admin side
	public function AdminDashboard()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['usersList'] = $this->generic->GetData('wp_users', array('user_email!=' => 'admin@admin.com'));
			$this->load->view('adminDashboard', $this->data);
		} else {
			redirect(base_url());
		}
	}



	public function LogOut()
	{
		$this->session->unset_userdata('loginData');
		redirect(base_url());
	}
}
