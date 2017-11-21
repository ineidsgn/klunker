<?php


class browser {
	private $cookies=array();
	/**
	 * @param string $url
	 * @param bool|array $post
	 * @param bool $follow_location
	 * @return string
	 */
	public function navigate($url, $post=false, $follow_location=false){
		$curl_ch = curl_init();

		if (count($this->cookies)>0) {
			$headers=array();
			$temp=array();foreach ($this->cookies as $k => $v) $temp[]="$k=$v";
			$headers[]="Cookie: ".implode("; ", $temp);
			curl_setopt($curl_ch, CURLOPT_HTTPHEADER, $headers);
		}

		curl_setopt($curl_ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_ch, CURLOPT_VERBOSE, 0);
		curl_setopt($curl_ch, CURLOPT_FOLLOWLOCATION, ($follow_location===false) ? 0 : 1 );
		curl_setopt($curl_ch, CURLOPT_MAXREDIRS, 4);
		curl_setopt($curl_ch, CURLOPT_HEADER, 1);
		curl_setopt($curl_ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curl_ch, CURLOPT_URL, $url);
		if ($post!==false) {
			$temp=array();
			foreach ($post as $k => $v) {
				$temp[]=rawurlencode($k)."=".rawurlencode($v);
			}
			$post=implode("&", $temp);
			curl_setopt($curl_ch, CURLOPT_POST, 1);
			curl_setopt($curl_ch, CURLOPT_POSTFIELDS, $post);
		}
		$content = curl_exec($curl_ch);
		curl_close($curl_ch);

		// parse cookies
		preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $content, $matches);
		foreach ($matches[1] as $temp){
			$parts=explode("=", $temp);
			if (count($parts)==2) $this->cookies[$parts[0]]=$parts[1];
		}
		return $content;
	}

	/**
	 * @param string $name
	 * @return bool|string
	 */
	public function get_cookie($name){
		return (isset($this->cookies[$name]))?$this->cookies[$name]:false;
	}

}