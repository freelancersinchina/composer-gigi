<?php

namespace Gigi;
use \Metowolf\Meting;

class GigiRandom extends MusicProvider{
	public function getFirst($num){
		$data = $this->api->search($this->singer);

		shuffle($data);
		return array_slice($data,0,$num);
	}
}
