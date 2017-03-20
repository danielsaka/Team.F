<?php
/**
 * This is a ancestor of all php pages
 * @author Timur Misharin
 * @version 0.1
*/
class Page{
    private $head;//a head of html page
    private $body;//a body of html page
    public function __construct($head,$body){
        $this->head=$head;
        $this->body=$body;
        //TODO: constuctor method
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
    public function get_head(){return $this->head;}
    public function get_body(){return $this->body;}
    public function set_head($head){$this->head=$head;}
    public function set_body($body){$this->body=$body;}

}