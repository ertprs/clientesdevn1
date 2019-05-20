<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 */
class Youtube_Lib {

	private $pattern;

	public function __construct() {
      $this->pattern = "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/";
    }

	public function __call($function, $args)
    {
        $functionType = strtolower(substr($function, 0, 3));
        $propName = lcfirst(substr($function, 3));
        switch ($functionType) {
            case 'get':
                if (property_exists($this, $propName)) {
                    return $this->$propName;
                }
                break;
            case 'set':
                if (property_exists($this, $propName)) {
                    $this->$propName = $args[0];
                }
                break;
        }
    }

    public function getYTVideoID($url){
    	preg_match($this->pattern, $url, $id);
    	if(isset($id[1])) return $id[1];
        return FALSE;
    }

    public function getYTVideoLink($url){
        $videoID = $this->getYTVideoID($url);
        if($videoID === FALSE) return FALSE;
        parse_str(file_get_contents("http://youtube.com/get_video_info?video_id=".$videoID),$info);
        $streams = $info['url_encoded_fmt_stream_map'];
        $streams = explode(',',$streams);
        parse_str($streams[0],$data);
        if(isset($data['url'])) return $data['url'];
        return FALSE; 
    }
}
