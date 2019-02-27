<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<aside id="sidebar">
  <?php echo bytravel_add_sidebar_img();?>
  <div id="fb-container">
  	<div class="fb-page" data-href="<?php echo bytravel_get_fb_link()?>" data-tabs="timeline" data-		small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-					facepile="true"><blockquote cite="<?php echo bytravel_get_fb_link()?>" class="fb-xfbml-parse-ignore"><a href="<?php echo bytravel_get_fb_link()?>"><?php echo bytravel_get_fb_title();?></a></					blockquote>
   	</div>
  </div>
</aside>
