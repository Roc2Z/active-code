<?php
namespace Home\Model;
use Think\Model;
class CodeModel extends Model {
	public function selecttype($actype){
		$arr = $this->where('acuse=0 and actype='.$actype)->select();
		if($arr){
			$acid = $arr[0]['acid'];
			$data['acuse'] = '1';
			$this->where('acid='.$acid)->save($data);
			return $arr[0]['accode'];
		}else{
			return "序列号被抢光了，等下一批吧^_^";
		}
	}
}