<?php
  include_once "./postWork/getPosts.php";
  echo "<div class='postList'>";
  foreach($posts as $post){
    echo "
    <div class='postItem' id=".$post['POST_ID'].">
      <div class='writer'>".$post['WRITER']."</div>
      <div class='content'>".$post['CONTENT']."</div>
      <div class='time'>".$post['TIME']."</div>
    </div>
    ";
  }
  echo "</div>";
?>