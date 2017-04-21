<?php
class ReciveAddressAction extends Action {
	public function __construct() {
		parent::__construct();	//继承父类构造方法
		if(!isset($_SESSION['admins']['id'])) {
			$this->redirect('Login/loginPage');
		}
	}

	//收货地址列表页
	public function index() {
		$uid = $_SESSION['admins']['id'];
		
		$addressModel = M('address');
		$total = $addressModel->where('uid='.$uid)->count();

		$allAddress = $addressModel->field('id, reciver, area, address, phonenumber, isdefault')
								->where('uid=' . $uid)
								->limit(4)
								->select();
		foreach($allAddress as $key => $address) {
			$tmp = explode(',', $address['area']);
			$allAddress[$key]['area'] = implode('', $tmp);
		}

		//数据为空显示的
		$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

		$this->assign('empty', $empty);
		$data['count'] = $total;
		$data['allAddress'] = $allAddress;
		$this->assign('data', $data);
		$this->display();

	}

	//添加收货地址
	public function addAddress() {
		$uid = $_SESSION['admins']['id'];
		$post = $this->_post();
		$post = $post['data'];
		$data['uid'] = $uid;
		$data['reciver'] = $post['rec'];
		$data['area'] = $post['location_p'].' '.$post['location_c'].' '.$post['location_a'];
		$data['address'] = $post['adetial'];
		$data['phonenumber'] = $post['phone'];
		$data['isdefault'] = '1';

		$addressModel = M('address');

		$rules = array(
			array('reciver', 'require', '收件人不能为空', 1),		
			array('area', 'require', '地区不能为空', 1),		
			//array('city', 'require', '城市不能为空', 1),		
			//array('area', 'require', '地区不能为空', 1),		
			array('address', 'require', '详细地址不能为空', 1),		
			array('phonenumber', '/\d{11}/', '手机有误', 1),		
		);
		//检查是否已经有收货地址，如果没有就将这条设为默认地址
		$getAddresses = $addressModel->where('uid=' . $uid)->count();
		if(!$getAddresses) {
			$data['isdefault'] = '1';
		} else {
			$data['isdefault'] = '0';
		}

		$res = $addressModel->validate($rules)->create($data);
		if($res) {
			if($addAddress = $addressModel->add($data)) {
				$this->ajaxReturn(1);
			}
		} else {
			$this->ajaxReturn($addressModel->getError());
		}
	}

	//设置默认收货地址
	public function isDefault() {
		$addressId = $this->_post('data');
		$uid = $_SESSION['admins']['id'];
		$data['isdefault'] = '0';
		$default['isdefault'] = '1';
		$msg = '';

		$addressModel = M('address');	
		//查看是否已经有默认地址
		$getDefault = $addressModel->field('id')->where('uid=' .$uid. ' and isdefault="1"')->find();

		if($getDefault['id']) {	//如果原来有默认地址
			if($addressModel->where('id='.$getDefault['id'])->save($data)) {	//将原来的默认地址设为非默认地址
				if($addressModel->where('id='.$addressId)->save($default)) { //设置新的默认地址
					$msg = 1;
				} else {
					$msg = 0;
				}
			} else {
				$msg = 0;
			}
		} else {	//原来没有默认地址
			if($addressModel->where('id='.$addressId)->save($default)) {
				$msg = 1;
			} else {
				$msg = 0;
			}
		}

		$this->ajaxReturn($msg);
	}

	//修改收货地址
	public function updateAddress() {
		$addressId = $this->_post('addressid');
		$data['reciver'] = $this->_post('reciver');
		$data['area'] = trim($this->_post('location_p'). ' ' .$this->_post('location_c'). ' ' .$this->_post('location_a'));
		$data['address'] = $this->_post('address');
		$data['phonenumber'] = $this->_post('phonenumber');

		$rules = array(
			array('reciver', 'required', '收件人不能为空', 1),		
			array('area', 'required', '地区不能为空', 1),		
			//array('city', 'required', '城市不能为空', 1),		
			//array('area', 'required', '地区不能为空', 1),		
			array('address', 'required', '详细地址不能为空', 1),		
			array('phonenumber', '/\d{11}/', '手机不能为空', 1),		
		);

		$addressModel = M('address');
		$data = $addressModel->validate($rules)->create();
		if($addressModel->where('id='.$addressId)->save($data)) {
			$this->returnAjax($addressModel->getError());
		} 

	}

	//查询单条地址
	public function getAddress() {
		$addressId = $this->_get('addressid');

		$addressModel->M('address');

		if($address = $addressModel->where('id='.$addressId)->find()) {
			$this->assign('data', $address);
			$this->display();
		} else {
			$this->error('该地址不存在');
		}
	}

	//删除收货地址
	public function delAddress() {
		$addressId = $this->_get('addressid');

		if(!$addressId) {
			$this->error('该地址不存在');
			return false;
		}

		$addressModel = M('address');

		if($addressModel->where('id='.$addressId)->delete()) {
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}
