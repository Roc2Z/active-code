<?php
namespace Home\Controller;
use Think\Controller;
class SeqController extends Controller {
    public function seqlist1(){
		$this->getdata();
		$this->display();
	}
	public function seqlist2(){
		$this->getdata();
		$this->display();
	}
	public function seqlist3(){
		$this->getdata();
		$this->display();
	}
	public function seqlist4(){
		$this->getdata();
		$this->display();
	}
	public function seqlist5(){
		$this->getdata();
		$this->display();
	}
	public function seqlist6(){
		$this->getdata();
		$this->display();
	}
	public function seqlist7(){
		$this->getdata();
		$this->display();
	}
	public function seqlist8(){
		$this->getdata();
		$this->display();
	}
	public function seqlist9(){
		$this->getdata();
		$this->display();
	}
	public function seqlist10(){
		$this->getdata();
		$this->display();
	}
	public function seqlist11(){
		$this->getdata();
		$this->display();
	}
	public function seqlist12(){
		$this->getdata();
		$this->display();
	}
	public function seqlist13(){
		$this->getdata();
		$this->display();
	}
	public function seqlist14(){
		$this->getdata();
		$this->display();
	}
	public function seqlist15(){
		$this->getdata();
		$this->display();
	}
	public function seqlist16(){
		$this->getdata();
		$this->display();
	}
	public function seqlist17(){
		$this->getdata();
		$this->display();
	}
	public function seqlist18(){
		$this->getdata();
		$this->display();
	}
	public function seqlist19(){
		$this->getdata();
		$this->display();
	}
	public function seqlist20(){
		$this->getdata();
		$this->display();
	}
	public function seqlist21(){
		$this->getdata();
		$this->display();
	}
	public function seqlist22(){
		$this->getdata();
		$this->display();
	}
	public function seqlist23(){
		$this->getdata();
		$this->display();
	}
	public function seqlist24(){
		$this->getdata();
		$this->display();
	}
	public function seqlist25(){
		$this->getdata();
		$this->display();
	}
	public function seqlist26(){
		$this->getdata();
		$this->display();
	}
	public function getdata(){
		$actype = $_GET['type'];
		$CODE = D('code');	
		$accode = $CODE->selecttype($actype);
		$count = $CODE->countnum($actype);
		$this->assign('accode',$accode);
		$this->assign('account',$count);
	}
	
}