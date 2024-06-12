<?php
// Include database connection
require_once('connection.php');

// Check if id is provided
if(isset($_GET['data_id'])) {
    $data_id = $_GET['data_id'];

    // Fetch data from the database based on id
    // $query = "SELECT * FROM `agri_award` WHERE `id` = $data_id";
    // $result = mysqli_query($conn, $query);

    $query = "SELECT `id`, `name`, `phone`, `nominee_age`, `email`, `address`, `nominee_name`, `category`, `nominee_phone`, `nominee_email`, `age`, `nominee_address`, `achievement`, `lifetime_khamar`, `lifetime_abiskar`, `lifetime_protithan`, `best_utpadan`, `best_khamar`, `best_income`, `best_facts`, `timestamp` FROM `agri_award` WHERE `id` = $data_id";
    $result = mysqli_query($conn, $query);

    // Check if data exists
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Extract data for pre-filling the form
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address'];
        $nominee_name = $row['nominee_name'];
        $category = $row['category'];
        $nominee_phone = $row['nominee_phone'];
        $nominee_email = $row['nominee_email'];
        $nominee_age = $row['nominee_age'];
        $nominee_address = $row['nominee_address'];
        $achievement = $row['achievement'];
        $lifetime_khamar = $row['lifetime_khamar'];
        $lifetime_abiskar = $row['lifetime_abiskar'];
        $lifetime_protithan = $row['lifetime_protithan'];
        $best_utpadan = $row['best_utpadan'];
        $best_khamar = $row['best_khamar'];
        $best_income = $row['best_income'];
        $best_facts = $row['best_facts'];
    } else {
        echo "No data found";
        exit; // Stop execution if no data found
    }
} else {
    echo "ID not provided";
    exit; // Stop execution if id is not provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo isset($data_id) ? $data_id : ''; ?> . <?php echo isset($name) ? $name : ''; ?></title>
    <!-- Include necessary CSS and JavaScript files here -->

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

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;

        }

        .container{
            max-width:1140px;
            width:100%;
            margin:0 auto;
        }

        body{
            font-family:"Shurjo";
        }

        .mt-30{
            margin-top: 30px !important;
        }

        .leading-1{
            line-height:1.5;
        }

        .text-bold{
            font-weight:600;
        }

        .text-normal{
            font-weight:400;
        }
        
        /* Hide the print button when printing */
        @media print {
            button {
                display: none !important;
            }
        }

        

        .header-top {
            display: flex;
            justify-content: space-between;
            margin-top:10px;
        }

        .header-top h4{
            font-size:1.9rem;
            line-height: 1.3;
            font-weight: 700;
            color:#0e8c45;
        }

        .header-top p{
            font-size:1.6rem;
            line-height: 1.3;
            font-weight: 700;
            color:#ef1928;
        }

        .title{
            text-align:center;
            margin:20px 0 ;
            font-size:22px;
        }

        .text-box{
            display: flex;
            font-size:18px;
            margin-bottom:10px;
        }

        .flex-col{
            flex-direction: column;
            row-gap: 10px;
        }

        .text{
            border-bottom: 1px dotted #000;
            flex:1;
            padding-left:10px;
        }

        .print-btn{
            padding: 20px 55px;
            color: #fff;
            background: black;
            border: none;
            font-size: 1rem;
            border-radius: 30px;
            margin: 30px auto;
            display: inherit;
            font-weight: bold;
            cursor: pointer;
        }

        @media print {
            a[href]:after {
                content: none !important;
            }
        }

        @media print {
            @page {
                    margin-top: 0;
                    margin-bottom: 0;
            }
            body {
                padding-top: 0px;
                padding-bottom: 0px ;
            }
        } 

 

        

    </style>


</head>
<body>

<div class="container">

    <div class="header-top">
        <div class="">
            <h4>সিটি গ্রুপ–প্রথম আলো কৃষি পুরস্কার ২০২৪</h4>
            <p>মনোনয়ন ফরম</p>
        </div>

        <div class="logo">
        <img
          src="https://images.prothomalo.com/prothomalo-bangla/2024-01/5d3dde81-46fe-4702-9a4f-8a8383545425/krishi_puroshkar_logo.png"
          alt="Logo"
      />
        </div>
    </div>

    <div class="">
        <h2 class="title">মনোনয়নদাতার তথ্য</h2>

        <div class="text-box"> ১.নাম: <p class="text"><?php echo isset($name) ? $name : ''; ?></p></div>
        <div class="text-box"> ২.মুঠোফোন: <p class="text"><?php echo isset($phone) ? $phone : ''; ?></p></div>
        <div class="text-box"> ৩.বয়স: <p class="text"><?php echo isset($nominee_age) ? $nominee_age : ''; ?></p></div>

        <div class="text-box"> ৪.পূর্ণাঙ্গ ঠিকানা: <p class="text"><?php echo isset($address) ? $address : ''; ?></p></div>
        <div class="text-box"> ৫.ই–মেইল (যদি থাকে): <p class="text"><?php echo isset($email) ? $email : ''; ?></p></div>

        

    </div>

    <div class="mt-30">
        <h2 class="title"> মনোনীত কৃষক/খামারি/গবেষকের তথ্য</h2>

        <div class="text-box"> ১.নাম: <p class="text"><?php echo isset($nominee_name) ? $nominee_name : ''; ?></p></div>
        <div class="text-box"> ২.ক্যাটাগরি: <p class="text"><?php echo isset($category) ? $category : ''; ?></p></div>
        <div class="text-box"> ৩.মুঠোফোন: <p class="text"><?php echo isset($nominee_phone) ? $nominee_phone : ''; ?></p></div>

        <div class="text-box"> ৪.বয়স: <p class="text"><?php echo isset($nominee_age) ? $nominee_age : ''; ?></p></div>
        <div class="text-box"> ৫.ই–মেইল (যদি থাকে): <p class="text"><?php echo isset($nominee_email) ? $nominee_email : ''; ?></p></div>
        <div class="text-box"> ৬.পূর্ণাঙ্গ ঠিকানা: <p class="text"><?php echo isset($nominee_address) ? $nominee_address : ''; ?></p></div>
        <div class="text-box"> <p class="text-bold">৭.কৃষক/খামারি/গবেষকের অর্জন এবং আপনার মনোনয়নের কারণ (সর্বোচ্চ ৬০০ শব্দ): <span class="leading-1 text-normal" style="border-bottom: 1px dotted #000;"><?php echo isset($achievement) ? $achievement : ''; ?></span></p></div>

    </div>


    <div class="mt-30">
        <h2 class="title leading-1" style="text-align:left;">৮. আজীবন কৃষি সম্মাননা (ব্যক্তি/সংগঠন/প্রতিষ্ঠান), সেরা কৃষি উদ্ভাবন (গবেষণা ও চাষপদ্ধতি), কৃষিতে সেরা নারী, সেরা কৃষি উদ্যোক্তা (ফলমূল বাগান/পোলট্রি/মৎস্য/গবাদিপশু) ক্যাটাগরির জন্য নিচের প্রযোজ্য প্রশ্নের উত্তর দিতে হবে—</h2>
        <div class="text-box" style="margin-top:15px;"> <p class="text-bold">৮.১ খামারে/খেতে কোনো প্রযুক্তি ব্যবহার করে থাকলে তার বিবরণ: <span class="text-normal leading-1" style="border-bottom: 1px dotted #000;"><?php echo isset($lifetime_khamar) ? $lifetime_khamar : ''; ?></span></p></div>
        <div class="text-box"> <p class="text-bold">৮.২ কোনো আবিষ্কার/উদ্ভাবন/গবেষণা থাকলে তার বিবরণ: <span class="text-normal leading-1" style="border-bottom: 1px dotted #000;"><?php echo isset($lifetime_abiskar) ? $lifetime_abiskar : ''; ?></span></p></div>
        <div class="text-box"> <p class="text-bold">৮.৩ প্রতিষ্ঠান/উদ্যোগ দেশের কৃষি/অর্থনীতিতে কতটা ভূমিকা রাখছে: <span class="text-normal leading-1" style="border-bottom: 1px dotted #000;"><?php echo isset($lifetime_protithan) ? $lifetime_protithan : ''; ?></span></p></div>
           
    </div>

    <div class="mt-30">
        <h2 class="title leading-1" style="text-align:left;">৯. সেরা কৃষি উদ্যোক্তা (ফলমূল বাগান/পোলট্রি/মৎস্য/গবাদিপশু), সেরা কৃষি ব্র্যান্ড ও সেরা নগরকৃষি (বাসা/ছাদ) ক্যাটাগরির জন্য নিচের প্রযোজ্য প্রশ্নের উত্তর দিতে হবে— </h2>
        <div class="text-box flex-col" style="margin-top:15px;"> <p class="text-bold">৯.১ গত তিন বছরে কী পরিমাণ ফসল/সবজি/ফল/পোলট্রি/মৎস্য/গবাদিপশু উৎপাদন করেছেন? </p><span><span class="text-normal" style="border-bottom: 1px dotted #000;"><?php echo isset($best_utpadan) ? $best_utpadan : ''; ?></span></span></div>
        <div class="text-box flex-col"> <p class="text-bold">৯.২ খামারে/খেতে গত তিন বছরে কতজন কর্মী কাজ করেছেন?</p><span><span class="text-normal" style="border-bottom: 1px dotted #000;"><?php echo isset($best_khamar) ? $best_khamar : ''; ?></span></span></div>
        <div class="text-box flex-col"> <p class="text-bold">৯.৩ গত তিন বছরে কত টাকা আয় করেছেন?</p><span><span class="text-normal" style="border-bottom: 1px dotted #000;"><?php echo isset($best_income) ? $best_income : ''; ?></span></span></div>
        <div class="text-box flex-col"> <p class="text-bold">৯.৪ কৃষিখেত/খামারে জৈব সার, খাবার ও পরিবেশ সংরক্ষণকে কীভাবে গুরুত্ব দেওয়া হয়? </p ><span ><span class="leading-1 text-normal" style="border-bottom: 1px dotted #000;"><?php echo isset($best_facts) ? $best_facts : ''; ?></span></span></div>
           
    </div>

   

    <button class="print-btn" type="button" onclick="printPage()" >Print</button>

</div>

<!-- Include necessary JavaScript here -->
<script>
    function printPage() {
        window.print();
    }
</script>

</body>
</html>
