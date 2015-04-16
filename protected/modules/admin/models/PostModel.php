<?php

class PostModel {
	function getPostList() {
		return Yii::app()->db->createCommand()
		->select("id, title, content, update_time")
		->from("tbl_post")
		->queryAll();
	}
}