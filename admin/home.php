<?php
	require('connection.php');
  if($_COOKIE['logged_username'] != 'agriaward'){
        $redirect_url = $base_url.'admin';
        header('Location: '.$redirect_url);
    }

    /**********************************
   * START | query for download csv 
   **********************************/
  // $qry_csv = "SELECT reg_no, name_bn, name_en, mobile, email, class, institute, workshop ";
  // $qry_csv .= "FROM kia_carnival_2023 ";
  $qry_csv = "SELECT `name`, `phone`, `nominee_age`, `email`, `address`, `nominee_name`, `category`, `nominee_phone`, `nominee_email`, `age`, `nominee_address`, `achievement`, `lifetime_khamar`, `lifetime_abiskar`, `lifetime_protithan`, `best_utpadan`, `best_khamar`, `best_income`, `best_facts`, `timestamp` ";

  $qry_csv .= "FROM agri_award";


  $result = mysqli_query($conn, $qry_csv);
  $all_records = mysqli_fetch_all($result, MYSQLI_NUM);

  array_unshift($all_records, ['মনোনয়নদাতার নাম', 'মনোনয়নদাতার মুঠোফোন', 'মনোনয়নদাতার বয়স', 'মনোনয়নদাতার ই–মেইল','মনোনয়নদাতার পূর্ণাঙ্গ ঠিকানা', 'মনোনীত কৃষকের নাম', 'ক্যাটাগরি' , 'মুঠোফোন','ই–মেইল' ,'বয়স'  ,'পূর্ণাঙ্গ ঠিকানা' ,'গবেষকের অর্জন' ,'প্রযুক্তি' ,'আবিষ্কার/উদ্ভাবন/গবেষণা' ,'অর্থনীতিতে ভূমিকা ' ,'উৎপাদন' ,'কর্মী' ,'আয়' ,'কৃষিখেত/খামারে জৈব সার' ,'আবেদনের সময়']);
  $all_participants = json_encode($all_records);
  /**********************************
   * END | query for download csv 
   **********************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> কৃষি পুরস্কার</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />

	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>css/materialize.min.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>css/admin/style.css">
	<!--===============================================================================================-->
	<style>
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 12px;
        margin: 0 4px;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-decoration: none;
        color: #333;
    }

    .pagination a.active,
    .pagination a:hover {
        background-color: #333;
        color: #fff;
        border-color: #333;
    }

  </style>
</head>
<body>

<div class="container">

  <div class="row">
    <div class="col s12">
      <div class="header">
        <a href="<?php echo $base_url; ?>admin/logout.php" class="right logout">Logout</a>
      </div>
      <h4 class="center-align">
      কৃষি পুরস্কার
      </h4>

      <div class="row">


          <div class="col s12">

            <div class="" style="color: #673AB7;">
              <?php

                $total_query = "SELECT * FROM `agri_award` WHERE 1";
                // $query = "SELECT * FROM `agri_award` ORDER BY timestamp DESC";
                $total_result = mysqli_query($conn, $total_query);

                 // Pagination variables
                $records_per_page = 50;
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($page - 1) * $records_per_page;

                // Query to fetch limited records
                $query = "SELECT * FROM `agri_award` ORDER BY timestamp DESC LIMIT $offset, $records_per_page";
                $result = mysqli_query($conn, $query);

                // Total records
                $total_records_query = "SELECT COUNT(*) as total FROM `agri_award`";
                $total_records_result = mysqli_query($conn, $total_records_query);
                $total_records = mysqli_fetch_assoc($total_records_result)['total'];

                // Total pages
                $total_pages = ceil($total_records / $records_per_page);

                // Previous page
                $prev_page = ($page > 1) ? ($page - 1) : 1;

                // Next page
                $next_page = ($page < $total_pages) ? ($page + 1) : $total_pages;


              ?>
              <div style="display:flex;justify-content: space-between;">
              <button class="csv-download-btn btn">Download All</button>
                <h5>সর্বমোট মনোনয়ন ফরম জমা দিয়েছেন : <?php echo mysqli_num_rows($total_result); ?> জন</h5>
                
              </div>
            </div>
            <div class="table-show">
               <table class="striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>মনোনয়নদাতার তথ্য</th>
                        <th>মনোনীত কৃষক</th>
                        <th> </th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                      
                      if(mysqli_num_rows($result) > 0){
                        $count = 1;          
                        while ($row=mysqli_fetch_assoc($result)){
                    ?>

                          <tr>
                            <td><?php echo $count; ?></td>
                            <td>
                              নাম: <?php echo $row['name']; ?><br/>
                              মুঠোফোন: <?php echo $row['phone']; ?><br/>
                              ই-মেইল: <?php echo $row['email']; ?>
                            </td>
                            
                            <td>
                              নাম: <?php echo $row['nominee_name']; ?><br/>
                              ক্যাটাগরি: <?php echo $row['category']; ?><br/>
                              ফোন নম্বর: <?php echo $row['nominee_phone']; ?><br/>
                            </td>


                            <td>
                              <a href="<?=$base_url?>admin/download_form.php?data_id=<?php echo $row['id']; ?>">
                              বিস্তারিত
                              </a>
                            </td>

                          </tr>

                    <?php
                        $count++;
                        }
                      }  
                    ?>
                  </tbody>

                </table>
            </div>

            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $prev_page; ?>">Previous</a>
                <?php endif; ?>
                
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?page=<?php echo $i; ?>" <?php if ($i == $page) echo 'class="active"'; ?>><?php echo $i; ?></a>
                <?php endfor; ?>
                
                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?php echo $next_page; ?>">Next</a>
                <?php endif; ?>
            </div>


          </div>
      </div>

    </div>
  </div>

</div>

<!-- Success OR Error Modal Structure -->
<div id="modal" class="modal custom-modal">
  <div class="modal-content login-modal">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat right pr-0">
      <i class="material-icons right">clear</i>
    </a>
    <div class="d-font-20 modal-text message-show">
        
    </div>

    
  </div>
 
</div>

  <script src="../js/download-csv.js"></script>
  <?php
    $stmt = "document.querySelector('.csv-download-btn')";
    $stmt .= ".addEventListener('click', downloadFile.bind(null, $all_participants, 'agriaward-datas'));";

    echo "<script>$stmt</script>";
  ?>

	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/jquery.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/materialize.min.js"></script>

	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/jquery.matchHeight.js"></script>

	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/jquery.validate.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

        $('.login_form').validate({
            rules: {
                name:{
                  required:true
                },
                password: {
                  required:true,
                }
            },
            messages: {
                name: "আপনার নাম লিখুন",
                password: "আপনার পাসওয়ার্ড দিন",
            }
        });

        $('.tabs').tabs();

      });

  </script>

  <script type="text/javascript">
    
    $(document).delegate('.design-report','click',function () {
      
      var form = $(this);
      var url = $(this).attr('href');
      var data_id = $(this).attr('data_id');
  
      $.ajax({
          url: url,
          method: "POST",
          data: {data_id:data_id},
         
          beforeSend: function( xhr ) {
            $('.loader-display').show();
          }
      }).done(function( response ) {
        
        $('.loader-display').hide();
        $('.modal').modal();
        $('.modal').modal('open'); 

        var obj = jQuery.parseJSON(response);
        $('.message-show').html(obj.message);
         
      }).fail(function( jqXHR, textStatus ) {
        
      });
      
      return false;
    });

  </script>

  <style type="text/css">
    .header{
        margin-top: 10px;
    }
    .header a{
      color: #000;
      margin-left: 15px;
      font-size: 14px;
      font-family: arial;
      font-weight: bold;
    }
    .header a.active,
    .header a:hover{
        color: #673ab7;
    }
  </style>

</body>
</html>
