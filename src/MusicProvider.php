<?php
namespace Gigi;
use \Metowolf\Meting;

abstract class MusicProvider{

	public $singerName = "梁咏琪";
	protected $api;
	public function __construct(){

		$this->api = (new Meting('netease'))->format(true);

	}

	abstract public function getFirst($num);
}
