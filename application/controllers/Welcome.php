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


	// scan barocode
	public function scanBarcode()
	{
		$this->load->view('scan-barcode');
	}

	// search barcode
	public function searchBarcode()
	{
		$barcodeNo = $this->input->post('barcodeNo');

		// Filter by barcode number if it's provided
		if (!empty($barcodeNo)) {
			$this->db->where('barcodeNo', $barcodeNo);
		}

		$this->data['searchBarcode'] = $this->generic->GetData('ipr_product_detail');
		if($this->data['searchBarcode']){
			redirect(base_url('find-barcode/').$barcodeNo);
		}else{
			$this->session->set_flashdata('barcodeNotFound', 1);
			redirect(base_url('find-barcode'));
		}
	}
	public function searchBarcodeDetail(){
		$this->data['searchBarcode'] = $this->generic->GetData('ipr_product_detail',array('barcodeNo'=>$this->uri->segment(2)));
		$this->load->view('scan-barcode-detail',$this->data);
	}

	//sign up
	public function signup()
	{
		$this->load->view('signup');
	}

	public function signupData()
	{
		// Get form data
		$userName = $this->input->post('userName');
		$userEmail = $this->input->post('userEmail');
		$userPassword = $this->input->post('userPassword');
		// Check if the email already exists
		$this->db->where('user_email', $userEmail);
		$query = $this->db->get('wp_users');
		if ($query->num_rows() > 0) {
			// User already exists
			$this->session->set_flashdata('alreadyRegistered', 1);
			redirect(base_url('sign-up'));
		} else {
			// Hash the password (WordPress uses MD5 by default for backward compatibility)
			$hashedPassword = md5($userPassword);

			// Prepare user data for wp_users table
			$userData = array(
				'user_login' => $userName,
				'user_pass' => $hashedPassword,
				'user_nicename' => $userName,
				'user_email' => $userEmail,
				'user_registered' => date('Y-m-d H:i:s'),
				'display_name' => $userName,
				'user_status' => 0
			);
			$this->db->insert('wp_users', $userData);
			$userID = $this->db->insert_id();

			if ($userID) {
				// Assign the "customer" role in wp_usermeta table
				$userMetaData1 = array(
					'user_id' => $userID,
					'meta_key' => 'wp_capabilities',
					'meta_value' => 'a:1:{s:8:"customer";b:1;}'
				);

				$userMetaData2 = array(
					'user_id' => $userID,
					'meta_key' => 'wp_user_level',
					'meta_value' => '0'
				);

				// Insert meta data into wp_usermeta table
				$this->db->insert('wp_usermeta', $userMetaData1);
				$this->db->insert('wp_usermeta', $userMetaData2);

				$this->session->set_flashdata('Registered', 1);
				redirect(base_url());
			} else {
				$this->session->set_flashdata('Error', 1);
				redirect(base_url('sign-up'));
			}
		}
	}



	public function loginData()
	{
		$email = $this->input->post('userEmail');
		$pass = $this->input->post('userPassword');
		$this->load->helper('wp_password');

		$query = $this->generic->GetData('wp_users', array('user_email' => $email));

		if ($query) {
			// Load the PHPass library
			// 			require_once APPPATH . 'libraries/class-phpass.php';
			// 			$wp_hasher = new PasswordHash(8, true); // Match WordPress settings

			// Verify the password
			// 			if ($wp_hasher->CheckPassword($pass, $query[0]['user_pass'])) {
			if (verify_wp_password($pass, $query[0]['user_pass'])) {
				//set session
				$this->session->set_userdata('loginData', $query[0]);
				if ($query[0]['user_email'] == 'hello@instabarcode.com') {
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
				'order_ID' => str_replace(' ', '', $this->input->post('order_id')),
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

			// Load upload library only once
			$this->load->library('upload');

			foreach ($products as $index => $product) {

				$productDetail = array(
					'orderID' => $maxOrderID,
					'barcodeNo' => str_replace(' ', '', $product['barcodeNumber']),
					'brandName' => $product['brandName'],
					'productName' => $product['productName'],
					'sizeQty' => str_replace(' ', '', $product['sizeQuantity']),
					'color' => $product['color'],
					'price' => $product['price'],
					'currency' => $product['currency'],
				);

				// Handle file upload for this product
				if (isset($_FILES['products']['name'][$index]['productImage']) && !empty($_FILES['products']['name'][$index]['productImage'])) {
					// die('asa');
					$_FILES['single_product_image']['name'] = $_FILES['products']['name'][$index]['productImage'];
					$_FILES['single_product_image']['type'] = $_FILES['products']['type'][$index]['productImage'];
					$_FILES['single_product_image']['tmp_name'] = $_FILES['products']['tmp_name'][$index]['productImage'];
					$_FILES['single_product_image']['error'] = $_FILES['products']['error'][$index]['productImage'];
					$_FILES['single_product_image']['size'] = $_FILES['products']['size'][$index]['productImage'];

					$config['upload_path'] = './assets/productimages/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = 2048; // 2MB
					$config['encrypt_name'] = TRUE;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('single_product_image')) {
						$upload_data = $this->upload->data();
						$productDetail['image'] = $upload_data['file_name'];
					} else {
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('uploadError', $error);
						redirect(base_url('edit-product/' . $this->uri->segment(2)));
					}
				}

				// Save to databaseF
				$this->generic->InsertData('ipr_product_detail', $productDetail);
			}


			//success message
			$this->session->set_flashdata('iprAdded', 1);
			redirect(base_url('add-new-ipr'));
		} else {
			redirect(base_url());
		}
	}

	// edit ipr data request
	public function editIPR()
	{
		$this->data['editOrderDetail'] = $this->generic->GetData('ipr_order_detail', array('orderID' => $_GET['order_id']));
		$this->load->view('edit-ipr',$this->data);
	}
	// edit ipr data request
	public function editIPRProductDetail()
	{
		$this->data['editProductDetail'] = $this->generic->GetData('ipr_product_detail', array('productID' => $_GET['product_id']));
		$this->load->view('edit-ipr-product-detail', $this->data);
	}

	// update ipr data
	public function updateIPRData(){
		// Get form data from POST
    $order_id = $this->input->post('order_id');
    $data = array(
        'barcodeType' => $this->input->post('Barcode_Type'),
        'companyName' => $this->input->post('CompanyName'),
        'productCategory' => $this->input->post('Product_Cat'),
        'countryOrigin' => $this->input->post('Contry_Origen'),
        'gstNumber' => $this->input->post('GstNo'),
        'companyWebsite' => $this->input->post('Company_website'),
        'phoneNumber' => $this->input->post('CompanyPhone'),
        'productDescription' => $this->input->post('productDescription')
    );
    
    // Update the record in ipr_order_detail table
    $this->generic->Update('ipr_order_detail', array('orderID' => $order_id), $data);
	//success message
	$this->session->set_flashdata('iprEdited', 1);
    redirect(base_url('dashboard'));
	}


	public function updateIPRProductDetail(){
    // Get form data from POST
    $product_id = $this->input->post('productID');
    $data = array(
        'barcodeNo' => $this->input->post('barcodeNumber'),
        'brandName' => $this->input->post('brandName'),
        'productName' => $this->input->post('productName'),
        'sizeQty' => $this->input->post('sizeQuantity'),
        'color' => $this->input->post('color'),
        'price' => $this->input->post('price'),
        'currency' => $this->input->post('currency')
    );
    
    // Handle image upload
    if (isset($_FILES['productImage']) && !empty($_FILES['productImage']['name'])) {
		// die('asdasd');
        $config['upload_path'] = './assets/productimages/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048; // 2MB max
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('productImage')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('uploadError', $error);
            redirect(base_url('products-detail/' . $product_id));
        } else {
            $upload_data = $this->upload->data();
            $data['image'] = $upload_data['file_name'];
        }
    }
    
    // Update the correct table with proper WHERE clause
    $this->generic->Update('ipr_product_detail', array('productID' => $product_id), $data);
    $orderID=$this->generic->GetData('ipr_product_detail',array('productID'=>$product_id));
    $this->session->set_flashdata('iprEdited', 1);
    redirect(base_url('products-detail/?order_id='.$orderID[0]['orderID']));
}


	// order detail for all order list
	public function OrderDatail()
	{
		if ($this->session->userdata('loginData')) {
			if ($this->session->userdata['loginData']['user_email'] == 'hello@instabarcode.com') {
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
			$this->data['usersList'] = $this->generic->GetData('wp_users', array('user_email!=' => 'hello@instabarcode.com'));
			$this->load->view('adminDashboard', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function IprListData()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['userDetail'] = $this->generic->GetData('wp_users', array('ID' => $_GET['userID']));
			$this->data['orderList'] = $this->generic->GetData('ipr_order_detail', array('ID' => $_GET['userID']));
			$this->load->view('ipr-order-list', $this->data);
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