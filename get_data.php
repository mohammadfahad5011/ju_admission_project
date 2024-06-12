<?php
	// For Text Type Story
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://www.prothomalo.com/api/v1/advanced-search?tag-name=%E0%A6%A4%E0%A7%80%E0%A6%B0-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A5%E0%A6%AE%20%E0%A6%86%E0%A6%B2%E0%A7%8B%20%E0%A6%95%E0%A7%83%E0%A6%B7%E0%A6%BF%20%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A6%B8%E0%A7%8D%E0%A6%95%E0%A6%BE%E0%A6%B0&limit=12&sort=latest-published&type=text,photo");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    

    $result = curl_exec($curl);
    $err = curl_error($curl);

    $text_news_data = json_decode($result);

    curl_close($curl);

    if(isset($text_news_data->items)) {
    	foreach($text_news_data->items as $key => $news) {

    	    $news_img = 'img/newsdefault.png';
           	if(!empty($news->alternative)){
            	if(!empty($news->alternative->home)){
                	if(!empty($news->alternative->home->default)){
                    	if(!empty($news->alternative->home->default->{"hero-image"})) {
                        	$news_img = 'https://images.prothomalo.com/'.$news->alternative->home->default->{"hero-image"}->{"hero-image-s3-key"};
                       	}                    
                	}                                                    
            	} else if($news->{"hero-image-s3-key"}) {
	            	$news_img = 'https://images.prothomalo.com/'.$news->{"hero-image-s3-key"};
	         	}
           	}	


           	echo $news->headline . '<br/>';
           	echo $news_img. '<br/>';
           	echo $news->url . '<br/><br/>';

    	}
    }
?>

<?php
	// For Video Type Story
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://www.prothomalo.com/api/v1/advanced-search?tag-name=%E0%A6%A4%E0%A7%80%E0%A6%B0-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A5%E0%A6%AE%20%E0%A6%86%E0%A6%B2%E0%A7%8B%20%E0%A6%95%E0%A7%83%E0%A6%B7%E0%A6%BF%20%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A6%B8%E0%A7%8D%E0%A6%95%E0%A6%BE%E0%A6%B0&limit=12&sort=latest-published&type=video");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    

    $result = curl_exec($curl);
    $err = curl_error($curl);

    $video_news_data = json_decode($result);

    curl_close($curl);

    if(isset($video_news_data->items)) {
    	foreach($video_news_data->items as $key => $news) {

    	    $news_img = 'img/newsdefault.png';
           	if(!empty($news->alternative)){
            	if(!empty($news->alternative->home)){
                	if(!empty($news->alternative->home->default)){
                    	if(!empty($news->alternative->home->default->{"hero-image"})) {
                        	$news_img = 'https://images.prothomalo.com/'.$news->alternative->home->default->{"hero-image"}->{"hero-image-s3-key"};
                       	}                    
                	}                                                    
            	} else if($news->{"hero-image-s3-key"}) {
	            	$news_img = 'https://images.prothomalo.com/'.$news->{"hero-image-s3-key"};
	         	}
           	}	


           	echo $news->headline . '<br/>';
           	echo $news_img. '<br/>';
           	echo $news->url . '<br/><br/>';

    	}
    }
?>