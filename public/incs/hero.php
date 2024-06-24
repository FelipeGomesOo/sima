<?php 
    $main_endpoint = $env['API']; 
    $hero_post_endpoint = $main_endpoint . "posts?per_page=1&status=publish&_fields=date,id,title,featured_media,excerpt,author,link";  
    $hero_post = getPost($hero_post_endpoint); 
?>
<style>
    .home-page header {background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo $hero_post['image']; ?>) no-repeat center;}
</style>
<h4 class="branco">NOVO ARTIGO:</h4>
<h1><?php echo $hero_post['title']; ?></h1> 
<h4><?php echo $hero_post['date'] . ' por ' . $hero_post['author']; ?></h4> 
<a href="<?php echo $hero_post['link']; ?>" class="button ligado">Acesse este conteúdo</a>
      