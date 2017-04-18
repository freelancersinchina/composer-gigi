<?php

namespace Gigi;

class GigiSequence extends MusicProvider{
	public function getFirst($num){
		$data = json_decode($this->api->search($this->singerName));
		return array_slice($data,0,$num);
	}
}
