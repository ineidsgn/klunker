<?php

class fetcher_exist extends fetcher {

	public function fetch(){
		$this->fetched=true;
		$content=$this->navigate("https://www.exist.ru/price.aspx?pcode=".rawurlencode($this->part), false, true);

		$content=str_replace(array("\t", "\n", "\r"), "", $content);

		if (strpos($content, "Запрошенный артикул")===false) {
			$this->error=-1;
		}

		if ($this->is_ok()) {
			
			if (strpos($content, "Предложения по заменителям")===false) {
				// we have no replacements
				$test=$this->parse_luchshaya_tsena($content);
				if ($test===false) {
					$this->error=-2;
				} else {
					$this->original=$test;
				}
			} else {
				// with replacements
				$this->has_replacement=true;
				$parts=explode("class='data-row header'>Предложения по заменителям", $content);
				if (count($parts)!==2) {
					$this->error=-3;
				} else {
					
					$test=$this->parse_luchshaya_tsena($parts[0]);
					if ($test===false) {
						$this->error=-4;
					} else {
						$this->original=$test;
					}

					$test=$this->parse_luchshaya_tsena($parts[1]);
					if ($test===false) {
						$this->error=-5;
					} else {
						$this->replacement=$test;
					}
					
				}
			}
		}
	}

	private function parse_luchshaya_tsena($source){
		preg_match_all("/\<span title\=\"Лучшая цена\" class=\"price\"\>(.*) ₽\<\/span\>/U", $source, $matches);
		if (!isset($matches[1][0])) return false;
		$lt=str_replace(" ", "", $matches[1][0]); // the space is not general space, I've copied and pasted it to get workin
		if ((string)((int)$lt*1)!==$lt) return false;
		return $lt;
	}
	
}
