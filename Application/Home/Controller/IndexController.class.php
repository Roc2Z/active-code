<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
	public function vercode(){
		$type = $_GET['type'];
		$this->assign('type',$type);
		$this->display();
	}
	public function inspec(){
		$type = $_GET['type'];
		$code = $_POST['verify'];
		if($this->check_verify($code,$id = '')){
			$this->success("验证成功",U('Seq/seqlist'.$type.'?type='.$type),0);
		}else{
			$this->error("验证失败",'javascript:history.back(-1)',0);
		}	
	}
	public function add_verify(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$this->assign('name',$Verify);
		$Verify->entry();
	}
	function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	public function giftgot(){
	
		$this->display();
	}
	public function aboutus(){
	
		$this->display();
	}
}