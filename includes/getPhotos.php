<?php
	   
	  function getDataFromFacebookApi($url, $parameters='')
	  {
	    $access_token="1344992118857439|tS3fdx04AEVoigWzbkipDN7ofhA";
	    $json_link = $url . "?access_token=" . $access_token . $parameters;
	    $json = file_get_contents($json_link);
	    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
	    return $obj;
	  }

	  $albumsArray = array();

	  $obj = getDataFromFacebookApi("https://graph.facebook.com/v2.5/338272302963701/albums/");

	  foreach ($obj as $albums) {
	    foreach ($albums as $album) {
	      if (isset($album['name']) && $album['name'] != "Mobile Uploads") {

          		$albumsArray[$album['id']] = array('name' => $album['name'], 'id' => $album['id']);
            

	          $photoObj = getDataFromFacebookApi("https://graph.facebook.com/v2.5/" . $album['id'] . "/photos/", "&fields=source,name,backdated_time&limit=100");
	          foreach ($photoObj as $photos) {
	            foreach ($photos as $photo) {
	              if (isset($photo["source"])) {
	                $albumsArray[$album['id']]["photos"][] = $photo["source"];
	              }             
	            }
	          }
	      }
	    }
	  }
	  foreach ($albumsArray as $album):
	    $first = true;
	      foreach ($album['photos'] as $photo):
	        if ($first):
	  ?>

		<article class="thumb">
			<a href=<?php echo '"' . $photo . '"'; ?> class="image"><img src=<?php echo '"' . $photo . '"'; ?> alt=<?php echo '"' . $album['name'] . '"'; ?> alt="" /></a>
			<h2><?php if (isset($photo['name'])) {
				echo $photo['name'];
			} ?><?php echo $album['name']; ?></h2>
			<p><?php echo $album['name']; ?></p>
		</article>

	  <?php 

	      endif;
	    endforeach;
	  endforeach;

	?>