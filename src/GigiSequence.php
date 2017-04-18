<?php

namespace Gigi;

class GigiSequence extends MusicProvider{
	public function getFirst($num){
		$data = $this->api->search($this->singer);
		return array_slice($data,0,$num);
	}
}
