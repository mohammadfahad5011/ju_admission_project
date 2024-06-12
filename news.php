<!DOCTYPE html>
<html>
<head>
<style>

  @font-face {
    font-family: "Shurjo";
    font-display: swap;
    font-style: normal;
    font-weight: 400;
    src: url("https://assets.prothomalo.com/prothomalo/assets/ShurjoWeb_400_v2-6a682f6f610beeda14f0.woff2")
      format("woff2");
  }

  @font-face {
    font-family: "Shurjo";
    font-display: swap;
    font-weight: 700;
    font-style: normal;
    src: url("https://assets.prothomalo.com/prothomalo/assets/ShurjoWeb_700_v2-ef9e058ccc3a98d85030.woff2")
      format("woff2");
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Shurjo", "Segoe UI", Tahoma, serif;
  }

    .details-data {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-column-gap: 24px;
      grid-row-gap: 24px;
      margin: 12px;
    }
    .card {
      background: #fff;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      border: 1px solid #f1f1f1;
      border-radius: 8px;
      -webkit-box-shadow: 0 0 10px 1px #a19ca166;
      -moz-box-shadow: 0 0 10px 1px #a19ca166;
      box-shadow: 0 0 10px 1px #a19ca166;
    }
    .card a {
      text-decoration: none;
      text-align: center;
    }

    .card a img {
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      height: 180px;
      width: auto;
    }

    .card a img:hover{
        transform: scale(1.1);
    }


    img {
      max-width: 100%;
      width: 100%;
    }
    .card a h2 {
      font-size: 1.2rem;
      line-height: 1.6rem;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      color: #223645;
      padding: 8px 16px 16px;
      text-align: left;
    }

    .card:hover a h2{
        color: #008b45;
    }

    .card a h6 {
      color: #7a8a9e;
      font-size: 14px;
      padding: 0 8px 0 16px;
      margin-bottom: 16px;
      position: relative;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      text-align: left;
    }
    .card:hover a h6{
        color: #008b45;
    }
    .card a h6::after {
      content: "";
      border-bottom: 1px solid #a3aebc;
      position: absolute;
      left: 16px;
      bottom: 0;
      width: 16%;
    }

    .card:hover a h6::after{
        border-bottom: 1px solid #008b45;
    }


    @media (max-width: 991.98px) {
      .details-data {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 767.98px) {
      .details-data {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 450px) {
      .details-data {
        grid-template-columns: repeat(1, 1fr);
      }
    }

  </style>
</head>
<body>

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
?>

<div class="container">
  <div class="details-data">
    <?php
    if(isset($text_news_data->items)) {
      foreach($text_news_data->items as $key => $news) {
        $news_img = '/images/Default-Image.png';
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
    ?>
        <div class="card">
          <a target="_blank" href="<?php echo $news->url; ?>">
            <img src="<?php echo $news_img; ?>" alt="Image" />
            <h2><?php echo $news->headline; ?></h2>
            <h6>আরও পড়ুন</h6>
          </a>
        </div>
    <?php
      }
    }
    ?>
  </div>
</div>

</body>
</html>