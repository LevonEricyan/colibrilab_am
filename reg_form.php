<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> ColibriLab</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="assets_new/img/logo.png">
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets_new/css/form_style.css">
</head>

<body>
<?php
include('register_lang.php');

$course_type=$_GET['course']??false;
  
  if($course_type=='full')
       $course_type='Full Stack Web Development';
  elseif($course_type=='front')
       $course_type='Front-End React Web Development';
  elseif($course_type=='back')
       $course_type='Back-End Php Development';
  else
       $course_type=$course;




// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);



?>
<div class="size">
  <div class="row  m-0 p-0">

    <div class=" col-lg-6 col-xl-5 p-0 colLeft padd">
      <div class="main "> 
   <div class="container1">
      <div class="appointment-form" id="appointment-form">
        <h2><?=$registerhere?></h2>
        <div class="form-group-1">
         <input type="text" name="name" id="name" placeholder="<?=$fullname?>"  />
       <span class="text-danger gg"></span> 
          <input type="text" name="age" id="age" placeholder="<?=$age?>"  />
          <input type="text" name="email" id="email" placeholder="<?=$email?>"  />
          <input type="text" name="phone" id="phone" placeholder="<?=$phone?>"  />
          <div class="select-list">
            <select name="course_type" id="course_type">
              <option value=""><?=$course_type?></option>
              <option value="full" >Full Stack Web Development</option>
              <option value="front">Front-End React Web Development</option>
              <option value="back">Back-End Php Development</option>
            </select>
          </div>
        </div>
        <div class="form-group-2">
          <h3><?=$comewithfriend?></h3>
          <div class="select-list">
            <select name="confirm_type" id="confirm_type">
              <option value="" seleected><?=$numberofstudents?></option>
              <option value="one"><?=$onestudent?></option>
              <option value="two"><?=$twostudents?></option>
              <option value="three"><?=$threestudents?></option>
              <option value="four"><?=$fourstudents?></option>
            </select>
          </div>
    <!--       //////////////////////// -->
          <div class="form-check">
            <div>
              <input type="checkbox" name="morningtime" id="morningtime" class="morningtime" checked/>
              <label for="morningtime" class="label-agree-term ml-0"><span><span></span></span><?=$morningtimes?></label>
            </div>
            <div>
              <input type="checkbox" name="daytime" id="daytime" class="daytime " checked/>
              <label for="daytime" class="label-agree-term ml-4"><span><span></span></span><?=$daytimes?></label>
            </div>
            <div>
              <input type="checkbox" name="eveningtime" id="eveningtime" class="eveningtime" checked/>
              <label for="eveningtime" class="label-agree-term ml-4"><span><span></span></span><?=$eveningtimes?></label>
            </div>

          </div>
<!-- ///////////////////////////////// -->
<!-- *********************************
  <div class="form-check">
                  <div>
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" checked />
                    <label for="agree-term" class="label-agree-term ml-0"><span><span></span></span>Առավոտյան
                      ժամեր
                    </label>
                  </div>
                  <div>
                    <input type="checkbox" name="agree-term1" id="agree-term1" class="agree-term1 " checked />
                    <label for="agree-term1" class="label-agree-term ml-4"><span><span></span></span>Ցերեկային
                      ժամեր</label>
                  </div>
                  <div>
                    <input type="checkbox" name="agree-term2" id="agree-term2" class="agree-term2 " checked />
                    <label for="agree-term2" class="label-agree-term ml-4"><span><span></span></span>Երեկոյան
                      ժամեր</label>
                  </div>

                </div>
***************************** -->
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="<?=$message?>"></textarea>
        </div>

        <div class="form-submit">
          <input type="button" name="submit" id="button" class="submit  " value="<?=$confirm?>" />

        </div>
      </div>
    </div>
      </div> 
    </div>

    <div class=" col-lg-6 col-xl-5 p-0  colLeft ">
      <div class="contact  w-100 mb-5">
        <h3>ColibriLab <?=$trainingcenter?></h3>
        <p><span><?=$phone?></span> <a href="callto:#">+374 91 23-43-67 </a> <a href="callto:#">+374 77 51-46-31</a></p>
        <p><span><?=$email?></span> <a href="mailto:#">colibrilabcenter@gmail.com</a></p>
        <p><span><?=$addr?></span> <a href="https://goo.gl/maps/p1XuY33NcREqXVPP6"><?=$address?></a></p>
        <div class="list ">
            <p>
              <a
                href="https://www.facebook.com/%D4%BF%D5%B8%D5%AC%D5%AB%D5%A2%D6%80%D5%AB%D4%BC%D5%A1%D5%A2-%D5%B8%D6%82%D5%BD%D5%B8%D6%82%D5%B4%D5%B6%D5%A1%D5%AF%D5%A1%D5%B6-%D5%AF%D5%A5%D5%B6%D5%BF%D6%80%D5%B8%D5%B6-1495050270734324" target="_blank"><i
                  class="fa fa-facebook-f"> </i></a>
            </p>
            <p>
              <a href="https://twitter.com/colibri_lab?s=09" target="_blank"> <i class="fa fa-twitter"></i> </a>
            </p>
            <p>
              <a href="https://www.linkedin.com/in/colibri-lab-8154b6202" target="_blank"> <i class="fa fa-linkedin"></i></a>
            </p>
            <p>
              <a href="https://www.youtube.com/channel/UC89YSNPPcST0LyjRg83FP6Q" target="_blank"> <i class="fa fa-youtube-play"></i>
              </a>
            </p>
            <p>
              <a href="index.php"><i class="fa fa-home"></i></a>
            </p>

          </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1812.9674129850403!2d44.51244422674161!3d40.163761143817005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc67bba0d8a1%3A0x6ba5de0299af1d0d!2zNDkgVGlncmFuIE1ldHMgQXZlLCBZZXJldmFuLCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2s!4v1608040566176!5m2!1sru!2s" width="100%" height="530" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>
<div id='kkkk'></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="scripts/jquery.min.js"></script> -->
  <script src="assets_new/js/main_form.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
 $(document).ready(function(){



    $('#button').click(function(){
 


     let name=$('#name').val();
       if(!name){
          alert("<?=$namerequired?>");
          return;
       }

     let age=$('#age').val();
       if(!age){
          alert("<?=$agerequired?>");
          return;
       }
    let email=$('#email').val();
       if(!email){
          alert("<?=$emailrequired?>");
          return;
       }
    let phone=$('#phone').val();
       if(!phone){
          alert("<?=$phonerequired?>");
          return;
       }
    let course_type=$('#course_type li.init').text()
 
     if(course_type=="<?=$course?>"){
      alert("<?=$coursenotselected?>");
           return;
     }
    let confirm_type=$('#confirm_type li.init').text()
     if(confirm_type=="<?=$numberofstudents?>"){
       alert("<?=$studnumbernotselected?>");
           return;
     }

  let morningtime=$('#morningtime').prop('checked');
  let daytime=$('#daytime').prop('checked');
  let eveningtime=$('#eveningtime').prop('checked');
     if(!morningtime&&!daytime&&!eveningtime){
        alert("<?=$prefhours?>");
          return;
     }
   let comment="";
    comment=$('#comment').val();
    $.ajax({
          url:'register.php',
          type:'post',
          dataType:'json',
          data:{
               name:name,
               age:age,
               email:email,
              phone:phone,
              course_type:course_type,
              confirm_type:confirm_type,
               morningtime:morningtime,
               daytime:daytime,
               eveningtime:eveningtime,
              comment:comment
         },
          success:function(d){
           alert(d.message)
           window.location.href = "http://colibrilab.am";
         }

      })
    })

})
</script>



  <script>
    window.dataLayer = window.dataLayer || [];

     function gtag() {
       dataLayer.push(arguments);
    }
    gtag('js', new Date());

     gtag('config', 'UA-23581568-13');
  </script>
</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-12/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2020 07:22:15 GMT -->

</html>