<?php

namespace Gigi;
use \Metowolf\Meting;

class GigiRandom extends MusicProvider{
	public function getFirst($num){
		$data = json_decode($this->api->search($this->singerName),true);

		shuffle($data);
		return $this->processData(array_slice($data,0,$num));
	}
}
