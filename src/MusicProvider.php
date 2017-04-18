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
	
	protected function processData($data){

		$self = $this;
		return array_map(function($item) use ($self){

			$item['pic_url'] = json_decode($self->api->pic($item['pic_id']),true)['url'];
			$item['url'] = json_decode($self->api->url($item['url_id']),true)['url'];

			return $item;
		},$data);


	}
}
