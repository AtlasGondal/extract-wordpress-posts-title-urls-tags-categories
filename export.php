<?php

    //includes wordpress headers
    require_once('wp-blog-header.php');
    
    //query with paremeters
    query_posts('&showposts=-1&order=ASC');
?>

    <table>
    
    <tr>
        
        <th>URLs</th>
        <th>Titles</th>
        <th>Tags</th>
        <th>Categories</th>
        
    </tr>
<?php
      
    while (have_posts()) : the_post(); 

?>

    <tr>
    
        <td><?php the_permalink( ); ?></td>
        <td><?php the_title( ); ?></td>
        <td><?php the_tags( ); ?></td>
        <td><?php the_category( ', ' ); ?></td>
    
    </tr>
<?php 
    
    endwhile;

 ?>
 
  </table>
