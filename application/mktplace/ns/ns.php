<?php

class ns{
	
// 	function getStore() {
// 		require_once '../application/mktplace/ns/WS/store/store.php';
// 		return new store();
// 	}
	
	function getProduct() {
		require_once '../application/mktplace/ns/WS/product/products.php';
		return new products();
	}
	
	function getCategory() {
		require_once '../application/mktplace/ns/WS/category/category.php';
		return new category();
	}
}