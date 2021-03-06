<!-- // *
// * Copyright 2020 Modaka Technologies ( https://modakatech.com )
// *
// * you are not use this file except in compliance with the License.
// * This file is used only for testing and none else can use any part of this code without agreement from Modaka Technologies.  
// * Unless required by applicable law or agreed to in writing, software
// * See the License for the specific language governing permissions and
// * limitations under the License. -->
<!DOCTYPE html>
<html>
<head>
  <title>CamWeara - Eyewear Virtual Try On || Sunglasses & Spectacles Tryon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/tryon.css">
  <link rel="stylesheet" href="css/pentagon.css">
  <link rel="stylesheet" href="css/lazy.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" href="img/arrow/logo.png" type="image/x-icon">

  <script src="js/ext/jquery-3.3.0.min.js"></script>
  <script src="js/ext/bootstrap.min.js"></script>
</head>
<body oncontextmenu="return false;">
<!-- <script src="./js/ut_op.js"></script>
<script>
  console.log("opwnc");
let utils = new Utils('errorMessage');
utils.loadCV(() => {
  console.log("sgfqef");
  // is_opencvLoaded=true;
});
</script>
 -->
<div class="body" id="body">
  <div class="camera_div modal fade" id="camera_div" role="dialog">
    <div class="loadingAnim" id="loadingAnim">
    <div id="utm_newsletter_spinner123" class="spinner-main-wrap">
      <div class="text-primary" style="color: #fff">
            <span id="process_txt"></span>
      </div>
      <div class="spinner1">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
  </div>
  <!-- <div class="loader">Loading...</div> -->
    <div class="maincamera" id="maincamera">
      <video style="height: 100%; width: 100%; object-fit: cover; transform: rotateY(180deg);" id="inputVideo" autoplay="true" playsinline></video>
      <canvas id="overlayVideo"
              style="position: absolute; left: 0px; top: 0px; object-fit: cover; "></canvas>
      <canvas id="overlay"
              style="position: absolute; left: 0px; top: 0px; object-fit: cover; "></canvas>
      <canvas id="overlay2"
              style="position: absolute; left: 0px; top: 0px; object-fit: cover; "></canvas>
      <canvas id="overlay3" 
              style="position: absolute; left: 0px; top: 0px; object-fit: cover; "></canvas>

      <p id="nonecamera" class="hide" style="position: absolute; top: 45%; left: 27%; font-size: 25px; color:grey">
        Camera is blocked!
      </p>
      <div class="Wishlist" onclick="showfavorite()">
        <img class="favourite_heart" viewBox="0 0 32 29.6" src = "./img/arrow/Wishlist-Fill-red.svg">
      </div>
      <div class= "share_bttn_on"
             onclick="onShareClick()">
          <img style="width: 100%; height: 100%;" src="img/arrow/share_on.png">
      </div>
      <div id="logo" class="hide"
           style="width: 120px; height: 50px; position: absolute; right: 10px; top: 10px; cursor: pointer; z-index: 5;">
        <img crossOrigin="Anonymous" style="width: 100%; height: 100%;" id="logoimg" src="img/arrow/logo.png" alt="The Scream">
      </div>
      <div id="pentagon" class="hide">
        <div id= "download_bttn" 
             onclick="downSnapshot()">
          <img style="width: 100%; height: 100%;" src="img/arrow/download.png">
        </div>
        <!-- <div style="width: 40px; height: 40px; position: absolute; right: -20px; top: -89px; cursor: pointer;"
             onclick="window.open('https://www.facebook.com', '_blank')">
          <img style="width: 100%; height: 100%;" src="img/arrow/facebook.png">
        </div> -->
        <!-- <div style="width: 40px; height: 40px; position: absolute; right: 64px; top: -89px; cursor: pointer; z-index: 8;"
             onclick="window.open('https://www.twitter.com', '_blank')">
          <img style="width: 100%; height: 100%;" src="img/arrow/twitter.png">
        </div> -->
        <div id= "share_bttn"
             onclick="onShareClick()">
          <img style="width: 100%; height: 100%;" src="img/arrow/share.png">
        </div>
        <div id= "back"
             onclick="hidePentagon()">
          <img style="width: 100%; height: 100%;" src="img/arrow/back.png">
        </div>
      </div>
      <div id="menu" class="show"
           onclick="showPentagon()">
        <img style="width: 100%; height: 100%;" src="img/arrow/camera.png">
      </div>
       <div id="flipCamera" class="hide"  
           style="width: 80px; height: 80px; position: absolute; left: 22px; cursor: pointer; z-index: 5; bottom: 240px;" 
           onclick="flipCamera()">  
        <img style="width: 100%; height: 100%;" src="img/arrow/flipCamera.png"> 
      </div>
    </div>
    <div class="favourite hide" id="favorite">
      <div
          style="width: 100%; height: 40px; text-align: left; border: 1px solid rgba(0,0,0,0.1); background-color: rgb(242,242,242);">
        <h3 style="font-size: 20px; margin: 0px;" id="favlisttitle">Wishlist</h3>
        <div style="width: 25px; height: 25px; position: absolute; right: 5px; top: 6px; cursor: pointer;"
             onclick="hidefavorite()">
          <img style="width: 100%; height: 100%;" src="img/arrow/close2.png">
          <!-- <svg class="favourite_heart" viewBox="0 0 32 29.6">
            <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2
            c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/>
          </svg> -->
        </div>
      </div>
      <div class="favourities" id="favourities"></div>
    </div>
    <div class="category" id="category">
      <div class="tab" id="tab">
        <div style="width: fit-content; height: 59px; text-align: left; margin-top: -20px; cursor: pointer; display: flex;">
          <h3 id="category_title" onclick="SwipeToggle()"></h3>
          <div id="brandlogo" class="hide"
           style="display: block; width: 120px; height: 50px; position: absolute; right: 100px; top: 10px; cursor: pointer; z-index: 5;">
            <img crossOrigin="Anonymous" style="width: 100%; height: 100%;" id="logoimg" src="img/arrow/logo.png" alt="The Scream">
          </div>

        </div>
        <div class="tabbtn" id="tabbtn">
          <ul class="nav nav-tabs" style="display: flex;">
            <!-- <li class="active" id="btn1">
              <a href="#1" data-toggle="tab" id="tab1">Earring</a>
            </li>
            <li id="btn2">
              <a href="#2" data-toggle="tab" id="tab2">Necklaces</a>
            </li>
            <li id="btn3">
              <a href="#3" data-toggle="tab" id="tab3">Necklaceset</a>
            </li> -->
            <!-- <li id="btn4">
              <a href="#1" data-toggle="tab" id="tab4">Mangalsutras</a>
            </li> -->
            <!-- <li id="btn5">
              <a href="#2" data-toggle="tab" id="tab5">PendantSets</a>
            </li>
            <li id="btn6">
              <a href="#3" data-toggle="tab" id="tab6">NecklaceSets</a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="categories gallery" id="categories"></div>
    </div>
    <div class="Close" onclick = "onBackClick()">
      <img style="width: 100%; height: 100%;" src="img/arrow/close.png">
    </div>
    <div class="needhelp" id = "needhelp">
      <!-- <span style="font-size: 12px; color: #fff">Need Help? Call us @ +91 9481110869</span> -->

      <img src="./img/arrow/camwera.png" style="width: 50%; height: 50%">
    </div>

  </div><!-- 
  <button id="clickme" style="height: 60px; font-size: 30px; box-shadow: 0px 0px 30px grey; margin-top: 30%;" data-toggle="modal"
          data-target="#camera_div" class="btn btn-primary" onclick="startProcessing()">Click me 
  </button> -->
  <div id="viewdetail_modal" class="customizedModal">
    <div class="customizedModal-content">
        <span class="customClose" onclick="CloseCustomModal()">&times;</span>
        <h4 id="viewdetailtitle_modal"></h4>
        <div id="viewdetailbody_modal">
            <p id="viewdetailtext_modal" class="hide_qr"></p>
            <img src="" style='height: 150px;' id="viewdetailimage_modal">
        </div>
    </div>
  </div>
</div>
<script src="./js/ut_op.js"></script>
<script>
  let utils = new Utils('errorMessage');
  var set_int;
  var value_b = false

  function isbrowsercheck(){
          // IsPoseBrowser = true ;
    value_b = true;
    const EU_URL = 'js/eu1.js';
    let script_EU = document.createElement('script');
    script_EU.setAttribute('async', '');
    script_EU.setAttribute('type', 'text/javascript');
    script_EU.src = EU_URL;
    let node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(script_EU, node);
    set_int =  setInterval(function () {
      try{
        loadbrowser(value_b,set_int);
      }
      catch(error){
        setTimeout(function () {
          isbrowsercheck();
        }, 0);
      }
    }, 1000);
  }

  utils.loadCV(isbrowsercheck);

</script>
<script type="text/javascript">
  var isAIModelLoaded = false;
  var IMG_URL = './models/';
  var prodImagePaths = ["giz1.png","giz3.png", "bonton1.png", "bonton2.png", "kos1.png", "lm6.png", "kos3.png","lm5.png", "h1639.png", "lm4.png"];

  var necklaceImagePaths = [];
  var necklaceSetImagePaths = [];
  const speedArray = [0, 0, 0, 0, 0, 0, 4, 4];

  var product_arr = {
    "Glasses": prodImagePaths,
    "Necklace": necklaceImagePaths,
    "NecklaceSet": necklaceSetImagePaths,
  }

</script>
<!-- <script async src="./js/poc.js"  type="text/javascript"></script> -->
<script src="./js/ext/tf_cr.js"></script>
<script src="./js/ext/tf_conv.js"></script>
<script src="./js/ext/tf_bck.js"></script>
<script src="./js/fld.js"></script>
<script src="./js/3d/three.js"></script>
<script src="./js/3d/OBJLoader.js"></script>
<script src="./js/3d/inflate.min.js"></script>
<script src="./js/3d/draw3d_sep_sticks.js"></script>
<script src="./js/eu_th.js"></script>
<script src="./js/util.js"></script>
<script src="js/cmr.js"></script>
<script src="js/lz.js"></script>
<script src="js/tryon.js"></script>
<script src="js/swiper.js"></script>
</body>
</html>
