<?php
class TypeModel {
	
	
	public function getAllType() {
		$conditions = '1=1';
		return Yii::app()->db->createCommand()
		->from("tbl_type")
		->where($conditions)
		->queryAll();
	}
}