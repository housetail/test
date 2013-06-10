<?php
class VipbookBuyer {
	public $buyer;
	public function __construct($uid) {
	}

	/**
 *	 * 设定来源渠道
 *		 * @param int $channel
 *			 * @author shuwei@staff.sina.com.cn
 *				 */
	public function setChannel($channel) {
	}
}

class VipbookSeller {
	public $seller;
	public function __construct($uid) {
	}
}

abstract class  VipbookProduct {
	abstract public function __construct($product);
	abstract public function hasBought($buyer);
	abstract public function buy($buyer);
	abstract public function getOrder($buyer);
}

class VipbookProductChapter extends VipbookProduct {
	public function __construct($product) {
	}

	public function hasBought($buyer) {
		var_dump($buyer);
	}

	public function buy($buyer) {
		var_dump($buyer);
	}

	public function getOrder($buyer) {
		var_dump($buyer);
	}
}

$buyer = new VipbookBuyer('1132455575');
$seller = new VipbookSeller('1132455575');
$product = new VipbookProductChapter(array('book_id' => 88935, 'chapter_id' => '201020'));
$product->buy($buyer);

