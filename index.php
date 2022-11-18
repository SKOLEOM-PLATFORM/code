<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.6/plyr.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        .item:hover {
    transform: scale(1.1);
}
    </style>
</head>

<body>




    <div class="header">
        <div class='mobile_header'>
            <img src="./assets/logo.png" alt="" style="height: 120px; width:120px;">

            <div class="header_side_icon header_side_icon_flex" style='display:none;'>


                <div>
                    <div class="sidebutton" style='display:none;'>
                        <span class="fas fa-bars"></span>
                    </div>
                    <nav class="sidebar">

                        <div class="prime_div" style="width: 70%!important; height: 100%;">

                            <ul>
                                <li>Home</li>
                                <li>Subscription</li>
                                <li>Skoleom Profile</li>
                                <li style="display: flex;  align-items: center; justify-content: center;">

                                    <p class="para"><img src="./assets/navigation.png" alt=""
                                            style="width:20px; height: 20px; margin-right: 4px;"> Transfer this <br>
                                        Skoleom Page</p>
                                </li>
                                <li style="display:flex; justify-content:center; align-items:center; padding: 0;">
                                    <img src="./assets/facebook-app-symbol.png" alt="">
                                    <img src="./assets/twitter.png" alt="">
                                    <i class="fa fa-instagram"
                                        style="font-size:15px; padding: 5px ; background-color: #e598d8; border-radius: 50%;"></i>

                                    <img src="./assets/tiktok-removebg-preview.png"
                                        style="padding: 5px ; background-color: #e598d8; border-radius: 50%; width: 10%; height: 10%;"
                                        alt="">
                                </li>
                            </ul>
                            <div
                                style="color: #fff;  line-height: 20px; opacity: 0.7; margin-top: 90%!important; width: 80%; ">
                                <p style="font-size: 0.8rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Nulla nihil,
                                    accusantium similique dolor
                                    eveniet ducimus adipisci quos numquam vitae </p>
                            </div>
                        </div>
                    </nav>
                </div>

                <div style='display: flex; align-items: center; width: 100%; justify-content: space-evenly'>

                    <i class="fa fa-video-camera side_icon" style="font-size: 19px; position: relative;">
                        <!-- <div > -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.0 -0.0 246.4 246.4"
                            zoomAndPan="magnify"
                            style="position: absolute; top:0; left: 0%; transform: translate(40%,50%); z-index: 2; width: 40%; fill: rgb(0, 0, 0);"
                            role="img" aria-label="Plus icon">
                            <g>
                                <g id="__id34_sjqpglxras">
                                    <path
                                        d="M 246.441406 123.21875 C 246.441406 191.273438 191.273438 246.441406 123.222656 246.441406 C 55.167969 246.441406 0 191.273438 0 123.21875 C 0 55.164062 55.167969 -0.00390625 123.222656 -0.00390625 C 191.273438 -0.00390625 246.441406 55.164062 246.441406 123.21875"
                                        style="fill: rgb(229, 152, 216);"></path>
                                </g>
                                <g id="__id35_sjqpglxras">
                                    <path
                                        d="M 130.324219 130.324219 L 130.324219 176.535156 L 116.117188 176.535156 L 116.117188 130.324219 L 69.902344 130.324219 L 69.902344 116.113281 L 116.117188 116.113281 L 116.117188 69.902344 L 130.324219 69.902344 L 130.324219 116.113281 L 176.539062 116.113281 L 176.539062 130.324219 L 130.324219 130.324219"
                                        style="fill: rgb(1, 1, 1);"></path>
                                </g>
                            </g>
                        </svg>
                        <!-- </div> -->
                    </i>
                    <i class="fa fa-bell side_icon" style="font-size: 19px; position: relative;">
                        <div
                            style="position: absolute; top: -7%; right: -4%; z-index: 2; display: flex; align-items: center; padding: 2px; justify-content: center; width: 40%; height: 40%; color: rgb(229,152,216); border-radius:50%; font-size: 0.65rem; font-weight: 600; background-color: #2C346B;">
                            8</div>
                    </i>
                    <div style="text-align:center;">
                        <img src="./assets/profile.jpg" style=" width: 30px; height: 30px; border-radius: 50%;"
                            alt="profile">
                        <p style="font-weight: 700; margin-left:-1px; font-size: 7px;">Hi, Sam</p>
                    </div>
                </div>
            </div>
        </div>




        <div style="position: relative; margin-top: 16px;">
            <input type="text" placeholder="Search for your brand" class="search">
            <i class="fa fa-search" style="position: absolute;
            top: 19%;
            left: 3%;
            font-size: 20px;"></i>
            <i class="fa fa-close" style="font-size:100%; position: absolute;
            top: 27%;
            right: 3%;"></i>
        </div>






        <div class="header_side_icon">
            <i class="fa fa-video-camera side_icon" style="font-size:24px; position: relative;">
                <!-- <div > -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.0 -0.0 246.4 246.4"
                    zoomAndPan="magnify"
                    style="position: absolute; top:0; left: 0%; transform: translate(40%,50%); z-index: 2; width: 40%; fill: rgb(0, 0, 0);"
                    role="img" aria-label="Plus icon">
                    <g>
                        <g id="__id34_sjqpglxras">
                            <path
                                d="M 246.441406 123.21875 C 246.441406 191.273438 191.273438 246.441406 123.222656 246.441406 C 55.167969 246.441406 0 191.273438 0 123.21875 C 0 55.164062 55.167969 -0.00390625 123.222656 -0.00390625 C 191.273438 -0.00390625 246.441406 55.164062 246.441406 123.21875"
                                style="fill: rgb(229, 152, 216);"></path>
                        </g>
                        <g id="__id35_sjqpglxras">
                            <path
                                d="M 130.324219 130.324219 L 130.324219 176.535156 L 116.117188 176.535156 L 116.117188 130.324219 L 69.902344 130.324219 L 69.902344 116.113281 L 116.117188 116.113281 L 116.117188 69.902344 L 130.324219 69.902344 L 130.324219 116.113281 L 176.539062 116.113281 L 176.539062 130.324219 L 130.324219 130.324219"
                                style="fill: rgb(1, 1, 1);"></path>
                        </g>
                    </g>
                </svg>
                <!-- </div> -->
            </i>
            <i class="fa fa-bell side_icon" style="font-size:26px; position: relative;">
                <div
                    style="position: absolute; top: -7%; right: -4%; z-index: 2; display: flex; align-items: center; padding: 2px; justify-content: center; width: 40%; height: 40%; color: rgb(229,152,216); border-radius:50%; font-size: 0.65rem; font-weight: 600; background-color: #2C346B;">
                    8</div>
            </i>
            <div>
                <img src="./assets/profile.jpg" width="40" height="40" style="border-radius: 50%;" alt="profile">
                <p style="font-weight: 700; margin-left:-1px;">Hi, Sam</p>
            </div>
        </div>

    </div>

    <div class="container_content">
        <div class="prime_div prime_div_display_none" style="width: 10%!important; height: 100%;">

            <ul>
                <li>Home</li>
                <li>Subscription</li>
                <li>Skoleom Profile</li>
                <li style="display: flex;  align-items: center; justify-content: center;">

                    <p class="para"><img src="./assets/navigation.png" alt=""
                            style="width:20px; height: 20px; margin-right: 4px;"> Transfer this <br>
                        Skoleom Page</p>
                </li>
                <li style="display:flex; justify-content:center; align-items:center; padding: 0;">
                    <img src="./assets/facebook-app-symbol.png" alt="">
                    <img src="./assets/twitter.png" alt="">
                    <i class="fa fa-instagram"
                        style="font-size:15px; padding: 5px ; background-color: #e598d8; border-radius: 50%;"></i>
                    <!-- <i class="fa fa-youtube-play"
                        style="font-size:15px; padding: 5px ;  background-color: #e598d8; border-radius: 50%;"></i> -->
                    <img src="./assets/tiktok-removebg-preview.png"
                        style="padding: 5px ; background-color: #e598d8; border-radius: 50%; width: 10%; height: 10%;"
                        alt="">
                </li>
            </ul>
            <div style="color: #fff;  line-height: 20px; opacity: 0.7; margin-top: 90%!important; width: 80%; ">
                <p style="font-size: 0.8rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla nihil,
                    accusantium similique dolor
                    eveniet ducimus adipisci quos numquam vitae </p>
            </div>
        </div>

        <!-- second column -->
        <div class="single_pic">
            <img src="./assets/singleimg.jfif" alt="" class='initial_class' id='single_pic_1'
                style="width: 100%; height: 753px!important;">
            <img src="./assets/index2/watch.webp" class='change_class' alt="" id='single_pic_2'
                style="display:none; width: 100%; height: 753px!important;">
        </div>

        <div class="bg_vid_main_div" style="width: 53%; position: relative!important;">
            <div class="bg_vid_sub_div" style="position: relative!important;">

                <!-- First iframe 'youtube video' -->

                <div id="video" style="position: absolute; top: 0; left: 0; display: none; width: 100%; height: 100%; 
                z-index: 20;">

                    <iframe width="100%" height="100%" name="youtubeVideo" src="" title="YouTube video player"
                        frameborder="0" allowfullscreen autoplay;
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                    </iframe>
                    <i class="fa fa-close" style="font-size:24px; color: #2C346B; position: absolute;
                    top: 0;
                    right: 1%; z-index: 22;" onclick="iframePopUp()"></i>
                </div>

                <!-- First iframe 'youtube video' end -->


                <!-- Second iframe 'SignIn page'  -->
                
                
                <!--Onclick iframe form is in dashboard signIn.php-->
                
                <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM assetsthree";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   $icon_image =  $row["icon_image"];
   $imge =  $row["image"];
   $text =  $row["text"];
   $link =  $row["link"];
   $admin_id =  $row["admin_id"];
  }
} 
                                ?>
                <div id="htmlpage"
                    style="display: none; border: 20px solid #C66800; position: absolute; top: 0; left: 0; width: 100%; height: 100%;  z-index: 20;">
                    <iframe style="border: none;" name="pagehtml" src="<?php   echo $link  ?>" height="100%"
                        width="100%" title=""></iframe>
                    <i class="fa fa-close" style="font-size:32px; color: #2C346B; position: absolute;
                        top: -5%;
                        right: -2%; z-index: 22;" onclick="htmlPagePreview()"></i>
                </div>


                <!-- Second iframe "SignIn page" end -->


                <!-- Third iframe 'Website Link'  -->


                <div id="page"
                    style="display: none; border: 20px solid #C66800; position: absolute; top: 0; left: 0; width: 100%; height: 100%;  z-index: 20;">
                    <iframe style="border: none;" name="Webpage" src="<?php   echo $link  ?>" height="100%" width="100%"
                        title="W3Schools Free Online Web Tutorials"></iframe>
                    <i class="fa fa-close" style="font-size:32px; color: #2C346B; position: absolute;
                    top: -5%; right: -2%; z-index: 22;" onclick="webPagePreview()"></i>
                </div>

                <!-- Third ifram 'Website Link' end -->


                <div class="elementor-video" onclick="closeAll()">
                    <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM asesstone";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

 
   $videofile =  $row["videofile"];


  }
} 
                                
                                ?>

                    <video controls crossorigin playsinline id="player">
                        <!-- Video files -->
                        <source
                            src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $videofile ?>"
                            type="video/mp4" size="576">

                        <!-- Caption files -->
                        <track kind="captions" label="English" srclang="en"
                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
                        <track kind="captions" label="Français" srclang="fr"
                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

                        <!-- Fallback for browsers that don't support the <video> element -->
                        <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                            download>Download</a>
                    </video>



                </div>
                <div class="capsules" id="capsule" onclick="capsuleClick()">Capsules <span>></span></div>
                <!-- <video class="elementor-video" onclick="closeAll()" src="./assets/Fiber-fever-teaser.mp4"
                controlslist="nodownload" controls></video> -->




                <div id="loading_div" style="display: none;">

                    <div class="load" id="firstpopup">

                        <div class="thumbnail">

                            <!--<div class="prfile_props profile1" id="profilePly"></div>-->
                            <!--<img class='prfile_props' src="./assets/s.jpg" id="profilePly" alt=""> -->
                            <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM asesstone";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

  $id =  $row["id"];
  $admin_id =  $row["admin_id"];
  $author =  $row["author"];
  $file =  $row["file"];
  $song_name =  $row["song_name"];
   $feat =  $row["feat"];
   $videofile =  $row["videofile"];


  }
} 
                                
                                ?>
                            <img class='prfile_props'
                                src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $file ?>"
                                id="profilePly" alt="">

                            <!--<img class='prfile_props changed_pic' src='./assets/index2/index2s.webp' style='display:none;' id="profilePly" alt=""> -->

                            <!--<div class="prfile_props changed_pic" style='display:none;' id="profilePly"></div>-->

                            <h2>
                                <?php echo $author; ?>
                            </h2>
                            <p>
                                <?php echo $song_name; ?>
                            </p>
                            <p>
                                <?php echo $feat; ?>
                            </p>
                        </div>




                        <!--<svg xmlns="http://www.w3.org/2000/svg" class="tv"-->
                        <!--    xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet"-->
                        <!--    version="1.0" viewBox="343.8 249.9 1940.0 1616.4" zoomAndPan="magnify"-->
                        <!--    style="fill: rgb(0, 0, 0);" role="img" aria-label="Vector Image">-->
                        <!--    <g id="__id28_sjy6r3arrl">-->
                        <!--        <path-->
                        <!--            d="m1632.8-1197.6c-11.941-0.065-25.942 6.069-37.406 17.533l-385.63 385.63-252.68-252.68c-12.506-12.506-32.642-12.506-45.148 0s-12.506 32.642 0 45.148l237.05 237.05h-670.15c-74.828 0-135.07 60.242-135.07 135.07v913.55c0 74.828 60.242 135.07 135.07 135.07h1669.9c74.828 0 135.07-60.242 135.07-135.07v-913.55c0-74.828-60.242-135.07-135.07-135.07h-878.23l370-370c18.343-18.343 23.042-43.179 10.535-55.686-4.6899-4.6899-11.113-6.9593-18.277-6.998zm-1002.9 567.05h1053.5c85.05 0 153.52 68.468 153.52 153.52v607.91c0 85.05-68.47 153.52-153.52 153.52h-1053.5c-85.05 0-153.52-68.468-153.52-153.52v-607.91c0-85.05 68.47-153.52 153.52-153.52zm1413.3 259.07a88.409 88.409 0 0 1 88.408 88.408 88.409 88.409 0 0 1 -88.408 88.408 88.409 88.409 0 0 1 -88.41 -88.408 88.409 88.409 0 0 1 88.41 -88.408zm0 220a88.409 88.409 0 0 1 88.408 88.408 88.409 88.409 0 0 1 -88.408 88.408 88.409 88.409 0 0 1 -88.41 -88.408 88.409 88.409 0 0 1 88.41 -88.408z"-->
                        <!--            transform="translate(0 1447.6)" style="fill: rgb(255, 245, 89);"></path>-->
                        <!--    </g>-->
                        <!--</svg>-->

                        <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM assets";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

 
   $icon_image =  $row["icon_image"];
   $imge =  $row["image"];
   $text =  $row["text"];
   $link =  $row["link"];
   $admin_id =  $row["admin_id"];


  }
} 
                                
                                ?>
                        <div class="section" id="option1">

                            <a style="cursor: pointer; height:100%; text-align: center;" href="<?php  echo $link;   ?>"
                                target="youtubeVideo">

                                <img style="width: 40px;height: 30px;padding: 10px;"
                                    src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $icon_image ?>"
                                    alt="" class="hamilton">

                                <img src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $imge ?>"
                                    alt="" class="hamilton initial_class">
                                <img src="./assets/index2/index2a.webp" alt="" class="hamilton change_class"
                                    style='display:none;'>
                                <p>
                                    <?php  echo $text;   ?>
                                </p>
                            </a>

                        </div>
                         <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM assetsthree";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   $icon_image =  $row["icon_image"];
   $imge =  $row["image"];
   $text =  $row["text"];
   $link =  $row["link"];
   $admin_id =  $row["admin_id"];
  }
} 
                                ?>
                        
                        
                        
                        <div class="section" id="option2" style="margin-bottom: 3px;">
                         
                            <a style="cursor: pointer; text-align: center; height: 100%; " href="<?php  echo $link  ?>"
                                target="pagehtml">
                                <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM assetsthree";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

 
   
   $icon_image =  $row["icon_image"];
   $imge =  $row["image"];
   $text =  $row["text"];
   $link =  $row["link"];
   $admin_id =  $row["admin_id"];



  }
} 
                                
                                ?>


                                <img style="width: 40px;height: 30px;padding: 10px;"
                                    src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $icon_image ?>"
                                    alt="" class="hamilton">

                                <!--<svg xmlns="http://www.w3.org/2000/svg" class="tv"-->
                                <!--    xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet"-->
                                <!--    version="1.0" viewBox="645.2 654.9 1163.7 1139.7" zoomAndPan="magnify"-->
                                <!--    style="fill: rgb(0, 0, 0);" role="img" aria-label="Basket Website Icon Composition">-->
                                <!--    <g id="__id30_swquhc03zl" style="fill: rgb(255, 245, 89);">-->
                                <!--        <path-->
                                <!--            d="M 1236.671875 1394.683594 L 1253.285156 1184.578125 L 1440.730469 1184.578125 L 1389.351562 1394.683594 Z M 784.164062 1184.578125 L 971.714844 1184.578125 L 988.332031 1394.683594 L 835.570312 1394.683594 Z M 951.601562 930.324219 L 968.222656 1140.433594 L 773.359375 1140.433594 L 721.953125 930.324219 Z M 1208.996094 1184.578125 L 1192.382812 1394.683594 L 1032.628906 1394.683594 L 1016.007812 1184.578125 Z M 1012.519531 1140.433594 L 995.875 930.324219 L 1229.105469 930.324219 L 1212.492188 1140.433594 Z M 1451.5625 1140.433594 L 1256.78125 1140.433594 L 1273.382812 930.324219 L 1502.953125 930.324219 Z M 1805.125 684.195312 C 1801.386719 666.285156 1783.675781 654.910156 1765.941406 658.582031 L 1579.25 697.667969 C 1566.765625 700.296875 1556.921875 709.832031 1553.878906 722.214844 L 1519.144531 864.105469 L 679.769531 864.105469 C 669.59375 864.105469 660.003906 868.777344 653.730469 876.769531 C 647.457031 884.769531 645.195312 895.214844 647.609375 905.089844 L 777.4375 1435.652344 C 781.058594 1450.472656 794.335938 1460.890625 809.597656 1460.890625 L 1373.136719 1460.890625 L 1359.019531 1518.589844 L 825.828125 1518.589844 C 807.546875 1518.589844 792.71875 1533.414062 792.71875 1551.703125 C 792.71875 1569.980469 807.546875 1584.800781 825.828125 1584.800781 L 1384.988281 1584.800781 C 1400.246094 1584.800781 1413.53125 1574.382812 1417.148438 1559.5625 L 1447.367188 1436.042969 C 1447.410156 1435.902344 1447.5 1435.800781 1447.535156 1435.652344 L 1577.363281 905.089844 C 1577.417969 904.878906 1577.382812 904.679688 1577.460938 904.46875 L 1613.238281 758.203125 L 1779.511719 723.402344 C 1797.402344 719.652344 1808.875 702.105469 1805.125 684.195312"-->
                                <!--            style="fill: inherit;"></path>-->
                                <!--        <path-->
                                <!--            d="M 912.65625 1620.910156 C 864.714844 1620.910156 825.828125 1659.789062 825.828125 1707.769531 C 825.828125 1755.730469 864.714844 1794.609375 912.65625 1794.609375 C 960.636719 1794.609375 999.519531 1755.730469 999.519531 1707.769531 C 999.519531 1659.789062 960.636719 1620.910156 912.65625 1620.910156"-->
                                <!--            style="fill: inherit;"></path>-->
                                <!--        <path-->
                                <!--            d="M 1299.25 1620.910156 C 1251.308594 1620.910156 1212.421875 1659.789062 1212.421875 1707.769531 C 1212.421875 1755.730469 1251.308594 1794.609375 1299.25 1794.609375 C 1347.230469 1794.609375 1386.109375 1755.730469 1386.109375 1707.769531 C 1386.109375 1659.789062 1347.230469 1620.910156 1299.25 1620.910156"-->
                                <!--            style="fill: inherit;"></path>-->
                                <!--    </g>-->
                                <!--</svg>-->
                                <img src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $imge  ?>"
                                    alt="" style="margin-top: -3px;" class="hamilton initial_class">
                                <img src="./assets/index2/index2q.html" alt="" style="display:none; margin-top: -3px;"
                                    class="hamilton change_class">
                                <p>
                                    <?php echo $text ?>
                                </p>
                            </a>
                        </div>
                        <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM asesstfour";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

 
   
   $icon_image =  $row["icon_image"];
   $imge =  $row["image"];
   $text =  $row["text"];
   $link =  $row["link"];
   $admin_id =  $row["admin_id"];



  }
} 
                                
                                ?>

                        <div class="section" style="position: relative;" id="option3">
                            <a style="cursor: pointer; text-align: center; height: 100%;"
                                href="https://snews.network/dj-khaled-starts-a-new-business-prams-and-car-seats/"
                                target="Webpage">
                                <img src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php  echo $icon_image ?>"
                                    alt="" class="tv">
                                <img src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php  echo $imge ?>"
                                    alt="" class="hamilton initial_class">

                                <img src="./assets/index2/index2r.html" alt="" class="hamilton change_class"
                                    style='display:none;'>

                                <p>
                                    <?php echo $text ?>
                                </p>
                            </a>
                        </div>
                        <i class="fa fa-close closing" onclick="sliderToggle()"
                            style="position: absolute; top: 3%; right: 3%; z-index: 23; font-size:100%; color:#FEF555;"></i>
                    </div>

                    <div class="sliding" id="sliderID">
                        <div>
                            <img src="./assets/arrow-left-sign-to-navigate.png" alt=""
                                style="  position: absolute; top: 50%; right: -1%; transform: translate(100%, -50%); width: 23.5%;">

                            <img src="./assets/arrow-right-sign-to-navigate.png" alt=""
                                style=" position: absolute; top: 50%; left: -1%; transform: translate(-100%, -50%); width: 23.5%;">

                            <img src="./assets/arrow-down-sign-to-navigate.png" alt=""
                                style="width: 23.5%; cursor:pointer;" onclick="sliderToggle()">
                            <div
                                style="display: block; margin: auto; width:70%; border: 2px solid #3a4c48; border-radius: 50%;">
                                <img src="./assets/airbnb.png" alt=""
                                    style="display: block; margin: auto; width: 100%;">
                            </div>

                            <p class="slider_text">Always feel <br>
                                at home <br>
                            </p>

                            <h3>
                                1 night <br>
                                $199.99
                            </h3>
                            <p class="slider_text" style="margin-bottom: 0!important; margin-top:5px;">Options <br>
                                ALL</p>
                            <div class='buy'>BUY</div>
                        </div>
                    </div>

                    <div class="profiles" id="profile_overflow">

                       <!-- <div style="position: relative;"> -->
                        <!-- </div> -->
                        <i class="fa fa-close closing" onclick="sliderToggle()"
                            style="position: absolute; top: 4%!important; right: 9%; font-size:100%; color: #FEF555; "></i>
                            
                                     <?php
                                
                 include 'config.php';               
 $sql = "SELECT * FROM images";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

 
   
   $first_image =  $row["first_image"];
   $first_link =  $row["first_link"];
   $second_image =  $row["second_image"];
   $second_image_link =  $row["second_image_link"];
   $third_image =  $row["third_image"];
   $third_image_link =  $row["third_image_link"];
   $fourth_image =  $row["fourth_image"];
   $forth_image_link=  $row["forth_image_link"];
   $five_image=  $row["five_image"];
   $fith_image_link =  $row["fith_image_link"];
   $six_image =  $row["six_image"];
   $six_image_link =  $row["six_image_link"];






  }
} 
                                
                                ?>
                          
                          <style>
                              
                              li.inner-image-ul-link {
    margin: auto !important;
    background-color: #fff55900 !important;
    color: rgb(220 169 152 / 0%) !important;
}
                          </style>
                            
                            
                            
                            
                            <ul style="margin-top: 10%;" class="image-ul-link">
                                
                                <li class="inner-image-ul-link"><a href="<?php echo $first_link  ?>" target="_blank"><img style=" width: 30px;border-radius: 50%;height: 30px;margin: auto;object-fit: cover;" src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $first_image ?>"></a></li>
                                <li class="inner-image-ul-link"><a href="<?php echo $second_image_link  ?>" target="_blank"><img style=" width: 30px;border-radius: 50%;height: 30px;margin: auto;object-fit: cover;" src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $second_image ?>"></a></li>
                                <li class="inner-image-ul-link"><a href="<?php echo $third_image_link  ?>" target="_blank"><img style=" width: 30px;border-radius: 50%;height: 30px;margin: auto;object-fit: cover;" src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $third_image ?>"></a></li>
                                <li class="inner-image-ul-link"><a href="<?php echo $forth_image_link  ?>" target="_blank"><img style=" width: 30px;border-radius: 50%;height: 30px;margin: auto;object-fit: cover;" src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $third_image ?>"></a></li>
                                <li class="inner-image-ul-link"><a href="<?php echo $fith_image_link  ?>" target="_blank"><img style=" width: 30px;border-radius: 50%;height: 30px;margin: auto;object-fit: cover;" src="https://dropboxdigital.com/wp/skoleom2/dashboard/assets-added/uploads/<?php echo $third_image ?>"></a></li>
     
                               
                            </ul>
                            
                     
                    </div>


                </div>
            </div>


            <div class="lower_section" style='margin-top: 15px; margin-bottom: 15px;'>
                <button> <i class='fas fa-thumbs-up up'></i><span class='notforme'>I LOVE IT</span> </button>

                <button style=""> <i class='fas fa-thumbs-down' style='font-size:20px!important;'></i> <span
                        class='notforme'>NOT FOR
                        ME</span></button>

                <p> Do you like it ? Help us to show you more adadpted content !</p>
            </div>

            <div class="details">

                <div style="width:60%; display: flex; align-items: flex-start; justify-content: space-between;">
                    <div style="width: 22%; font-weight: 600; font-size: small; text-align: center; ">
                        <img class='owner_img initial_class' src="./assets/Untitled-1-01/Untitled-1-01.png" alt=""
                            style=" width: 60%;   object-fit:cover; border-radius: 50%; margin-bottom: 10px; margin:auto;">

                        <img class='owner_img change_class' src="./assets/index2/index2s.webp" alt=""
                            style="display:none; width: 60%;   object-fit:cover; border-radius: 50%; margin: auto;">

                        <div class='missy'>Missy Elliot</div>
                    </div>

                    <div style="width: 74%;">
                        <p class="video_details"> Lizzo -
                            Tempo (feat. Missy
                            Elliot) [Official
                            Video] <br>
                            Released Jul 26, 2019
                        </p>
                        <div style="display: flex; align-items:center;">
                            <img src="./assets/love.png" alt="" width="7%" height="4%"><span class="st5k">+625K</span>

                            <svg style="width:8%" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet"
                                version="1.0" viewBox="0.9 7.0 34.1 22.0" zoomAndPan="magnify"
                                style="fill: rgb(0, 0, 0);" role="img" aria-label="eye">
                                <g id="__id41_skladuj87">
                                    <path
                                        d="M35.059 18c0 3.304-7.642 11-17.067 11C8.566 29 .925 22.249.925 18c0-3.313 7.642-11 17.067-11s17.067 7.686 17.067 11z"
                                        style="fill: rgb(160, 248, 238);"></path>
                                </g>
                                <g id="__id42_skladuj87">
                                    <path
                                        d="M33.817 18c0 2.904-7.087 9.667-15.826 9.667-8.74 0-15.825-5.935-15.825-9.667 0-2.912 7.085-9.666 15.825-9.666C26.73 8.333 33.817 15.088 33.817 18z"
                                        style="fill: rgb(225, 241, 107);"></path>
                                </g>
                                <g id="__id43_skladuj87">
                                    <circle cx="18" cy="18" r="8.458" style="fill: rgb(229, 152, 216);"></circle>
                                </g>
                                <g id="__id44_skladuj87">
                                    <circle cx="18" cy="18" r="4.708" style="fill: rgb(255, 245, 89);"></circle>
                                </g>
                                <g id="__id45_skladuj87">
                                    <circle cx="21" cy="15" r="2" style="fill: rgb(225, 241, 107);"></circle>
                                </g>
                            </svg>
                            <span class="st5k">+36 M</span>
                            <img src="./assets/navigation.png" alt="" style="width: 8%; height: 9%; margin-right: 4px;">
                        </div>
                    </div>
                </div>

                <div class='video-section_flex'
                    style="width: 40%; display:flex; align-items: center; justify-content: space-evenly;">

                    <div style="position: relative; width: 20%;">
                        <img src="./assets/s.jpg" alt="" style="width: 160%; " />

                        <div class='videos_collection'
                            style="position: absolute; top:0; left: 80%; width: 84%; height: 100%;  background-color: rgba(18, 18, 18, 0.39) ;">
                            <div class='total_videos'
                                style="display: flex; flex-direction:column; height: 80%; justify-content: end; align-items: center;">

                                <h3 style="margin: 0;">+29</h3>
                                <p class='skoleom_videos' style="margin: 0; font-size: 0.4rem;">Skoleom Video</p>
                            </div>
                        </div>
                    </div>
                    <div style="width: 20%;">
                        <button class='subscribe_button'
                            style="background-color: #2C346B; padding: 8px 18px; color:#FFFBBA; font-size: smaller; border:none;">SUBSCRIBE</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="suggestions" style="width: 15%; margin-top: 40px;  text-align: center;">
            <div style="margin-top: 0;">
                <p>Best Seller</p>
                <img src="./assets/s.png" alt="">
            </div>

            <div>
                <p>Suggested for you</p>
                <img src="./assets/t.png" alt="">
            </div>

            <div>

                <img src="./assets/03.png" alt="">
            </div>
            <!--<a href='./index2.php'>-->
            <div onclick='imgchange()'>

                <img src="./assets/last.webp" alt="" class='initial_class' style="height: 300px; object-fit:cover;">
                <img src="./assets/index2/Skoleom_Page.png" class='change_class' alt=""
                    style="display:none; height: 300px; object-fit:cover;">
            </div>
            <!--</a>-->
        </div>
    </div>


    <div class="products">
        <h1 style="color: #FFF559;">
            Product in the video</h1>
        <div style="display:none; position:relative!important;  margin-top: 16px; width: 34%;">
            <input class="search" type="text" placeholder="Search for your brand">

            <i class="fa fa-search" style="position: absolute;
            top: 20%;
            left: 2%;
            font-size: 20px;"></i>

            <i class="fa fa-close" style="font-size:20px;"></i>

        </div>
    </div>

    <div class="wrapper">
        <button class="previous" type="button" onclick="prevSlide(this)"><span><img
                    src="./assets/index2/right-icons8.png" alt="" style="width: 20px;"></span></button>
        <div class="card_slider">
            <div class="item">
                <img src="./assets/3.png" alt="">
                <h3>Nike</h3>
                <button>BUY</button>
            </div>

            <div class="item">
                <img src="./assets/04.webp" alt="">
                <h3>addidas</h3>
                <button>BUY</button>
            </div>

            <div class="item">
                <img src="./assets/index2/index2a.webp" alt="">
                <h3>puma</h3>
                <button>BUY</button>
            </div>

            <div class="item">
                <img src="./assets/02.png" alt="">
                <h3>outfitters</h3>
                <button>BUY</button>
            </div>

            <div class="item">
                <img src="./assets/t.jpg" alt="">
                <h3>zara</h3>
                <button>BUY</button>
            </div>

            <div class="item">
                <img src="./assets/t.jpg" alt="">
                <h3>zara</h3>
                <button>BUY</button>
            </div>

            <div class="item">
                <img src="./assets/t.jpg" alt="">
                <h3>zara</h3>
                <button>BUY</button>
            </div>
        </div>
        <button class="nextslide" type="button" onclick="nextSlide(this)"><span><img
                    src="./assets/index2/right-icons8.png" style="width: 20px;" alt=""></span></button>
    </div>

    <div style="display: block; margin:auto; width: 90%; margin-top: 30px;">

        <div class='third_section'>
            <div class='first_div_third_section'>
                <img src="https://image.over-blog.com/qGKcayljcf3yHEDCQ4u27s3mEVM=/filters:no_upscale()/image%2F1199205%2F20220811%2Fob_f009f2_3514892-jpg-r-1920-1080-f-jpg-q-x-xxyx.jpg"
                    alt="" style="width: 100%; height:100%;">
            </div>

            <div class='second_div_third_section'>
                <div class="comment">
                    <div class="first_message">
                        <img src="./assets/Afif-Bahnasi.png" alt=""
                            style="width: 10%; margin-right: 10px; height:11%; border-radius: 50%; border: 6px solid #eab1df;">

                        <div class="comment_text">
                            <h3>Luc Williams - 5 months ago</h3>
                            <p>2022? Who still here 2 year after</p>
                        </div>
                    </div>
                    <div class="reply">
                        <img src="./assets/love.png" alt="" style="width: 7%; height: 1%; margin-right: 5px;">
                        <div>
                            <h3>Reply</h3>
                            <!-- <div style="display: flex; align-items:flex-end;"> -->

                            <img src="./assets/icons8-sort-down-48.png" alt="" style="width: 10%;  margin-left: 8px;">
                            <span style="font-size:xx-small; margin: 0; margin-left: -6px; "> Show all comments</span>
                            <span class="ofs">157</span>
                            <span class="fa fa-heart"></span>
                            <span class="fas fa-thumbs-up comment_like"></span>
                            <span class="fas fa-grin-squint"></span>
                        </div>
                    </div>
                </div>


                <div class="reply_comment">
                    <div class="first_message" style="">
                        <img src="./assets/Afif-Bahnasi.png" alt=""
                            style="width: 10%; height:11%; border-radius: 50%; border: 4px solid #C87DBC;">

                        <div class="comment_text">
                            <h3>Luc Williams - 5 months ago</h3>
                            <p>2022? Who still here 2 year after</p>
                        </div>
                    </div>
                    <div class="reply reply_of_comment">
                        <img src="./assets/love.png" alt="" style="width: 7%; height: 1%; margin-right: 5px;">
                        <div>
                            <h3>Reply</h3>
                            <!-- <div style="display: flex; align-items:flex-end;"> -->

                            <img src="./assets/icons8-sort-down-48.png" alt="" style="width: 10%; margin-left: 8px;">
                            <span style="font-size:xx-small; margin: 0; margin-left: -6px; "> Show all comments</span>
                            <span class="ofs">157</span>
                            <span class="fa fa-heart"></span>
                            <span class="fas fa-thumbs-up comment_like"></span>
                            <span class="fas fa-grin-squint"></span>
                        </div>
                    </div>
                </div>
                <div class="Answer">
                    <input type="text" placeholder="Answer...">
                </div>

                <div class="comment" style="margin-top: 10px;">
                    <div class="first_message" style="align-items: flex-start;">
                        <img src="./assets/Afif-Bahnasi.png" alt=""
                            style="width: 14%; margin-right: 10px; height:11%; border-radius: 50%; border: 6px solid #eab1df;">

                        <div class="comment_text" style="position: relative; width: 40%; border-radius: 8px;">
                            <h3>Bryan Smith - Now</h3>
                            <p>Check it out. This is Adele's new sound guys</p>
                            <img src="./assets/3.png" alt="" style=" margin-top: 9px; width: 100%; height: 70%;"><span
                                class="play"><i class="fa fa-play"></i></span></img>
                            <div class="reply" style="margin-top: 20px; width: 100%;">
                                <div style='width: 40%'>

                                    <img src="./assets/love.png" alt="" class='save_share'>

                                    <img src="./assets/navigation.png" alt="" class='save_share'
                                        style="margin-right: 4px;">
                                </div>

                                <div style="display: flex; align-items: flex-end; justify-content: end; width:60%">

                                    <div style='width:20%; text-align:center;'>
                                        <div class="ofs" style="">4K</div>
                                    </div>

                                    <div style='width:20%; text-align:center;'>

                                        <div style="" class="fa fa-heart"></div>

                                    </div>

                                    <div style='width:20%; text-align:center;'>

                                        <div class="fas fa-thumbs-up comment_like"></div>
                                    </div>

                                    <div style='width:20%; text-align:center;'>
                                        <div style=" color:#c6bb00;  font-weight:100;"
                                            class="fas fa-grin-squint squint"></div>
                                    </div>


                                    <!--<span class="ofs" style="padding:8px; font-size: medium;">4K</span>-->
                                    <!--<span style="font-size:initial!important; padding: 10px;"-->
                                    <!--    class="fa fa-heart"></span>-->
                                    <!--<span style="font-size:initial!important; padding: 10px;"-->
                                    <!--    class="fas fa-thumbs-up"></span>-->
                                    <!--<span style="color:#c6bb00; font-size: 31px!important;"-->
                                    <!--    class="fas fa-grin-squint"></span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="input">
                    <img src="./assets/icons8-camera-96.png" alt="" style="width: 10%; height:10%;">
                    <input type="text" placeholder="Your comment...">
                </div>
            </div>

            <div class='third_div_third_section'>

                <img src="./assets/s.png" alt="" style="margin-bottom: 20px;">
                <img src="./assets/t.png" alt="" style="margin-bottom: 20px;">
                <img src="./assets/03.png" alt="" style="margin-top: 20px;">

            </div>
        </div>

    </div>

    <div class="slideshow-container">

        <div class="mySlides ">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="./assets/croped.jfif" style="width:100%; height:100%; object-fit:cover;">
            <div class="text">Watch on Skoleom</div>
        </div>

        <div class="mySlides ">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="./assets/croped.jfif" style="width:100%; height:100%; object-fit:cover;">
            <div class="text">Watch on Skoleom..</div>
        </div>

        <div class="mySlides ">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img src="./assets/croped.jfif" style="width:100%; height:100%; object-fit:cover;">
            <div class="text">Watch on Skoleom...</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>



    <br>
    <br>
    <br>





    <script src="https://cdn.plyr.io/3.4.6/plyr.js"></script>
    <script src="https://kit.fontawesome.com/09b798f21c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>