<?php

namespace Gigi;
use \Metowolf\Meting;

class GigiRandom extends MusicProvider{
	public function getFirst($num){
		$data = json_decode($this->api->search($this->singerName));

		shuffle($data);
		return array_slice($data,0,$num);
	}
}
