<?php include("steamapi.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link rel = "stylesheet" type="text/css" href="DookiesCSS/overrideBootstrap.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>





	<title>Dookies XL</title>

  </head>
  
  <body>
    <div class = "fill">
      <!-- 1st row logo and Feed -->
      <div class = "row">
        <div class = "col-sm-6">
          <h1 class="display-1">Dookies</h1>
        </div>
        <div class = "col-sm-6">
            <blockquote class="blockquote text-right">
              <p class="mb-0">6:43PM 3/11/20 Wednesday</p>
            </blockquote>
        </div>
      </div>
      <!-- 2nd row message -->
      <div class ="row">
        <div class = "col-lg-12">
          
        </div>
      </div>
      <!-- 3rd row showcase and profile -->
      <div class ="row">
        <div class ="col-lg-12">
        <ul class="nav nav-pills" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Gamer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Developer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Whatever</a>
          </li>
        </ul>
        <div class="tab-content  mt-4" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Steam</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Instagram</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Youtube</a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Etc</a>
                </div>
              </div>
              <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <div class = "row">
                     <div class = "col-md-3">
                        <img src="<?=$jsummary["response"]["players"][0]["avatarfull"];?>">
                     </div>
                     <div class = "col-md-9">
                        <h1 class = "display-4">
                          <a href="<?=$jsummary["response"]["players"][0]["profileurl"];?>">
                            <?=$jsummary["response"]["players"][0]["personaname"];?>
                          </a>
                        </h1>
                        <h4>
                            <?=personaState($jsummary['response']['players'][0]['personastate'],$last_login_date,$jsummary["response"]["players"][0]["lastlogoff"]);?>
                        </h4>
                        <small class="text-muted">
                          Gaming since <?=$join_date;?>
                        </small>
                     </div>
                   </div>
                   <div class = "row">
                   <div class = "col-md-12">
                    <h5 class ="mt-1">
                    Recently Played
                   </h5>
                      <div class="card mb-4" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4 mt-4">
                           <img src="http://media.steampowered.com/steamcommunity/public/images/apps/<?=$jrecent["response"]["games"][0]["appid"];?>/<?=$jrecent["response"]["games"][0]["img_logo_url"];?>.jpg" class="card-img-top" alt="<?=$jrecent["response"]["games"][0]["name"];?>">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><?=$jrecent["response"]["games"][0]["name"];?></h5>
                               <p class="card-text">You have <b>wasted</b> <?=$jrecent["response"]["games"][0]["playtime_2weeks"];?> minutes this past few weeks. Now total of <?=$jrecent["response"]["games"][0]["playtime_forever"];?> minutes wasted time!!</p> 
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                 </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            Developer Showcase
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            Feed
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
