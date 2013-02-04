<?php
class Blog_Model extends CI_Model{
     
    /**
     * returns a list of articles
     * @return array 
     */
     
  public function __construct()
  {
        parent::__construct();
  }
  public  function get_articles_list()
  {
        $list = Array();
         
       @ $list[0]->title = "first blog title";
        $list[0]->author = "author 1";
                 
        @$list[1]->title = "second blog title";
        $list[1]->author = "author 2";
         
        return $list;
   }
}
?>
