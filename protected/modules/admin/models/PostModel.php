<?php

/**
 * id, title, content, type, tags, status, create_time, update_time, author_id
 */
class PostModel {
	/**
	 *
	 * @return Ambigous <multitype:, mixed>
	 */
	function getPostList() {
		$sql = "
				SELECT
					a.id,
					a.title,
					b. NAME AS type,
					a.author,
					a.create_time,
					a.update_time
				FROM
					tbl_post a
				LEFT JOIN tbl_type b ON a.type_id = b.id
				ORDER BY a.id DESC
				;";
		$connection = Yii::app ()->db;
		
		$command = $connection->createCommand ( $sql );
		
		$result = $command->queryAll ();
		return $result;
	}
	
	/**
	 *
	 * @param unknown $post        	
	 * @return number
	 */
	function insertPost($post) {
		return Yii::app ()->db->createCommand ()->insert ( 'tbl_post', $post );
	}
	
	/**
	 */
	function deletePost($id) {
		$conditions = 'id=:id';
		$params = array (
				':id' => $id 
		);
		return Yii::app ()->db->createCommand ()->delete ( 'tbl_post', $conditions, $params );
	}
	/**
	 * 
	 * @param unknown $id
	 */
	function getPost($id) {
		$conditions = 'id=:id';
		$params = array (
				':id' => $id
		);
		return Yii::app ()->db->createCommand ()->select ( 'id, title, content' )->from ( 'tbl_post' )->where ($conditions, $params)->queryAll();
	}
}