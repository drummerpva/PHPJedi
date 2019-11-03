<?php
interface VideoServiceInterface{
    public function getEmbed(); 
}
class Youtube implements VideoServiceInterface{
    private $url;
    public function __construct($url){
        $this->url = $url;
    }
    public function getEmbed(){
        return "<iframe>.$this->url.</iframe>";
    }
    
}
class Vimeo implements VideoServiceInterface{
    private $url;
    public function __construct($url){
        $this->url = $url;
    }
    public function getEmbed(){
        return "<video>.$this->url.</video>";
    }
    
}
class Wistia implements VideoServiceInterface{
    private $url;
    public function __construct($url){
        $this->url = $url;
    }
    public function getEmbed(){
        return "<coisa>".$this->url."</coisa>";
    }
    
}


class Aula{
    private $video;
    
    public function __construct(VideoServiceInterface $video) {
        $this->video = $video;
    }
    public function getVideoHtml(){
        return $this->video->getEmbed();
    }
}

$aula = new Aula(new Wistia('123'));
echo "HTML: ".$aula->getVideoHtml();