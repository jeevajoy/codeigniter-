<?php
  foreach($articles as $article){
    //echo  $article->title;."". echo  $article->author;."<br>".;
     echo $article->title."". $article->author."<br />";
  }
?>
<?php echo anchor('logmein', 'Login');?>