<!DOCTYPE html>
<html lang="en">

    <!----------------------------------------------------------------------------------------------->

    <head>
        <title>Future Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="Project.css">
        <link rel="icon" href="../UAS/Logo/LOGO_FC_1-removebg-preview.png">
    </head>

    <!----------------------------------------------------------------------------------------------->

    <body>


        <!-- AWAL PEMBATAS NAVBAR -->
        
        
        <nav class="navbar navbar-expand-sm bg-light navbar-light" style="border-radius: 2px;" id="nvbar">
            <a class="navbar-brand nav-link btn text-white" href="Project.html">  
                <img src="Logo/LOGO_FC_1-removebg-preview.png" alt="" style="height: 100px; width: 175px;"><span class="sr-only">(current)</span>
            </a>

            <a class="nav-link btn" id="test" href="#wan"> <h6 class="btn" style="font-size: 20px;">Home</h6> </a>
            <a class="nav-link btn" id="test" href="#tu"> <h6 class="btn" style="font-size: 20px;">Movies</h6> </a>
            <a class="nav-link btn" id="test" href="#tri"> <h6 class="btn" style="font-size: 20px;">Upcoming</h6> </a>
            <a class="nav-link btn" id="test" href="#forrr"> <h6 class="btn" style="font-size: 20px;">About Us</h6> </a>

            <a class="nav-link btn" id="test2" href="login.php"> <h6 class="btn" style="font-size: 20px;">Log Out</h6> </a>
            
        </nav> 
        
        
        <!-- AKHIR PEMBATAS NAVBAR -->
        
        <!--navbardummy-->
        <nav class="navbar navbar-expand-sm bg-light navbar-light" style="border-radius: 2px;" id="wan">
          <a class="navbar-brand nav-link btn text-white" href="Project.html">  
              <img src="Logo/LOGO_FC_1-removebg-preview.png" alt="" style="height: 100px; width: 175px;"><span class="sr-only">(current)</span>
          </a>
        </nav> 


          <div class="jumbotron" id="ctn"></div>

          <div class="jumbotron" style="background-color: transparent;" id="tu"></div>
        <!-- AWAL PEMBATAS MOVIES -->


        <div class="container">
          <div class="row">
              <div class="col text-center">
                  <img src="Logo/Movies-removebg-preview.png" alt="" style="height: 70px; width: 200px;" ><span class="sr-only">(current)</span>
              </div>
          </div>
          <br><br>
          <div class="row">
              
              <div class="col-sm-2"> <!--Avenger Infinity War-->
                  <div class="card" style="width: 140px;">
                      <img class="card-img-top btn" src="../UAS/Movies/Avengers_Infinity_War.jpg" id="btn" data-toggle="modal" data-target="#AIW" alt="Card image cap" style="width: 140px; height: 175px;">
                      <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#AIW"> Avengers: Infinity War</h6>
                  </div>
                  <div class="modal" id="AIW">
                      <div class="modal-dialog">
                        <div class="modal-content" id="mdlg">
                          <div class="modal-body">
                            <iframe width="727" height="409" src="https://www.youtube.com/embed/6ZfuNTqbHE8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <a class="text-white text-justify" style="font-size: 12px;">
                              <p><b>Synopsis :</b></p>
                              <p>
                                  Iron Man, Thor, the Hulk and the rest of the Avengers unite to battle their most powerful enemy yet -- the evil Thanos. On a mission to collect all six Infinity Stones, Thanos plans to use the artifacts to inflict his twisted will on reality. The fate of the planet and existence itself has never been more uncertain as everything the Avengers have fought for has led up to this moment.
                              </p>
                              <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/n-kgzu21-ze-ekl">Watch Now</a>
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-sm-2"> <!--Avenger End Game-->
                <div class="card" style="width: 140px;">
                    <img class="card-img-top btn" src="../UAS/Movies/Avengers_End_Game.jpg" id="btn" data-toggle="modal" data-target="#EG" alt="Card image cap" style="width: 140px; height: 175px;">
                    <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#EG"> Avengers: Endgame</h6>
                </div>
                <div class="modal" id="EG">
                    <div class="modal-dialog">
                      <div class="modal-content" id="mdlg">
                        <div class="modal-body">
                          <iframe width="727" height="409" src="https://www.youtube.com/embed/7nN6KVAgwK4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <br>
                          <a class="text-white text-justify" style="font-size: 12px;">
                            <p><b>Synopsis :</b></p>
                            <p>
                              Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.
                            </p>
                            <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/yx8wpuepz50y1ln">Watch Now</a>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2"> <!--Justice League-->
              <div class="card" style="width: 140px;">
                <img class="card-img-top btn" src="../UAS/Movies/Justice_League.jpg" id="btn" data-toggle="modal" data-target="#JL" alt="Card image cap" style="width: 140px; height: 175px;">
                <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#JL"> Justice League</h6>
            </div>
            <div class="modal" id="JL">
                <div class="modal-dialog">
                  <div class="modal-content" id="mdlg">
                    <div class="modal-body">
                      <iframe width="727" height="409" src="https://www.youtube.com/embed/3cxixDgHUYw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <br>
                      <a class="text-white text-justify" style="font-size: 12px;">
                        <p><b>Synopsis :</b></p>
                        <p>
                          Fuelled by his restored faith in humanity, and inspired by Superman's selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat. Together, Batman and Wonder Woman work quickly to recruit a team to stand against this newly-awakened enemy. Despite the formation of an unprecedented league of heroes in Batman, Wonder Woman, Aquaman, Cyborg and the Flash, it may be too late to save the planet from an assault of catastrophic proportions.
                        </p>
                        <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/725dntgymr1k051">Watch Now</a>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            
            <div class="col-sm-2"> <!--On Your Wedding Day-->
              <div class="card" style="width: 140px;">
                <img class="card-img-top btn" src="../UAS/Movies/On_Your_Wedding_Day.jpg" id="btn" data-toggle="modal" data-target="#OYWD" alt="Card image cap" style="width: 140px; height: 175px;">
                <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#OYWD"> On Your Wedding Day</h6>
            </div>
            <div class="modal" id="OYWD">
                <div class="modal-dialog">
                  <div class="modal-content" id="mdlg">
                    <div class="modal-body">
                      <iframe width="727" height="409" src="https://www.youtube.com/embed/QJEe_JEhvw8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <br>
                      <a class="text-white text-justify" style="font-size: 12px;">
                        <p><b>Synopsis :</b></p>
                        <p>
                          A man receives a wedding invitation from his first love whom he met in high school. He reminisces all the trouble he went through to get together with her over the span of years beginning from youth, and how they had ups and downs in their life together. He finally goes to her wedding, and thanks her for being the shining star in his life and she thanks him for his support in need. He then walks away from her wedding function..
                        </p>
                        <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/xw-gmh55n38k7km">Watch Now</a>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            </div>
              
              <div class="col-sm-2"> <!--Greenland-->
                <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Movies/Greenland.jpg" id="btn" data-toggle="modal" data-target="#GL" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#GL"> Greenland</h6>
              </div>
              <div class="modal" id="GL">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/vz-gdEL_ae8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            John Garrity, his estranged wife and their young son embark on a perilous journey to find sanctuary as a planet-killing comet hurtles toward Earth. Amid terrifying accounts of cities getting levelled, the Garrity's experience the best and worst in humanity. As the countdown to the global apocalypse approaches zero, their incredible trek culminates in a desperate and last-minute flight to a possible safe haven.
                          </p>
                          <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/3zx3kfmg26n-n02">Watch Now</a>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              
              <div class="col-sm-2"> <!--Tenki No Ko-->
                <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Movies/Tenki_No_Ko.jpg" id="btn" data-toggle="modal" data-target="#TNK" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#TNK"> Tenki No Ko</h6>
              </div>
              <div class="modal" id="TNK">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/Q6iK6DjV_iE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            Tenki no ko is a movie starring Kotaro Daigo, Nana Mori, and Sei Hiraizumi. A high-school boy who has run away to Tokyo befriends a girl who appears to be able to manipulate the weather.
                          </p>
                          <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/4m54xszz7-4zj60">Watch Now</a>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              
              <div class="col-sm-2"> <!--Tenet-->
                <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Movies/Tenet.jpg" id="btn" data-toggle="modal" data-target="#T" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#T"> Tenet</h6>
              </div>
              <div class="modal" id="T">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/AZGcmvrTX9M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            Tenet will tell you about espionage to prevent World War III. The Tenet movie trailer features two spy agents, Protagonist (John David Washington) and Neil (Robert Pattinson) on a mission. They will try to stop World War III by reversing time (time inversion).
                          </p>
                          <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/g26y7t-z452x1rz">Watch Now</a>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              </div>

              <div class="col-sm-2"> <!--The Outpost-->
                <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Movies/The_Outpost.jpg" id="btn" data-toggle="modal" data-target="#TO" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#TO"> The Outpost</h6>
              </div>
              <div class="modal" id="TO">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/Kp9JghhGPao" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            A small unit of U.S. soldiers, alone at the remote Combat Outpost Keating, located deep in the valley of three mountains in Afghanistan, battles an overwhelming force of Taliban fighters in a coordinated attack. The Battle of Kamdesh became the bloodiest American engagement of the Afghanistan War in 2009, and Bravo Troop 3-61 CAV became one of the most decorated units of the 19-year conflict.
                          </p>
                          <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/725dntgn77kmzq6">Watch Now</a>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              </div>

              <div class="col-sm-2"> <!--One Day-->
                <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Movies/One_Day.jpg" id="btn" data-toggle="modal" data-target="#OD" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#OD"> One Day</h6>
              </div>
              <div class="modal" id="OD">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/ueBcBWrwR0o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            A woman suffers from a rare form of temporary amnesia, lasting for a day. Her shy colleague, who is secretly in love with her, tells her that they are a couple in order to experience being with her for just one day.
                          </p>
                          <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/w8-g0bn8xllndyw">Watch Now</a>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              </div>

              <div class="col-sm-2"> <!--Bloodshot-->
                <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Movies/Bloodshot.jpg" id="btn" data-toggle="modal" data-target="#BS" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#BS"> Bloodshot</h6>
              </div>
              <div class="modal" id="BS">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/vOUVVDWdXbo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            After he and his wife are murdered, marine Ray Garrison is resurrected by a team of scientists. Enhanced with nanotechnology, he becomes a superhuman, biotech killing machine - Bloodshot. As Ray first trains with fellow super-soldiers, he cannot recall anything from his former life. But when his memories flood back and he remembers the man that killed both him and his wife, he breaks out of the facility to get revenge, only to discover that there's more to the conspiracy than he thought.
                          </p>
                          <a type="button" class="btn btn-primary" id="btn" href="https://layarkacaxxi.icu/v/j80gzbddp8gqw4r">Watch Now</a>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
              </div>

          </div>
      </div> 

      <div class="jumbotron" style="background-color: transparent;"></div>
        
        <!-- AKHIR PEMBATAS MOVIES -->

        <div class="jumbotron" style="background-image: url(../UAS/Pembatastengah.png);"></div>

        <!-- AWAL PEMBATAS UPCOMING MOVIES -->
      
      <div class="jumbotron" style="background-color: transparent;" id="tri"></div>

      
        <div class="container">
          <div class="row">
              <div class="col text-center">
                  <img src="Logo/Upcoming-removebg-preview.png" alt="" style="height: 120px; width: 170px;"><span class="sr-only">(current)</span>
              </div>
          </div>
          <br> <br>
          <div class="row">
              
              <div class="col-sm-2"> <!--Kimetsu no Yaiba-->
                  <div class="card" style="width: 140px;">
                      <img class="card-img-top btn" src="../UAS/Upcoming/kimetsu_no_yaiba.jpg" id="btn" data-toggle="modal" data-target="#KNY" alt="Card image cap" style="width: 140px; height: 175px;">
                      <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#KNY">Kimetsu no Yaiba : Mugen Train</h6>
                  </div>
                  <div class="modal" id="KNY">
                      <div class="modal-dialog">
                        <div class="modal-content" id="mdlg">
                          <div class="modal-body">
                            <iframe width="727" height="409" src="https://www.youtube.com/embed/CkxjR2fq7LU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <a class="text-white text-justify" style="font-size: 12px;">
                              <p><b>Synopsis :</b></p>
                              <p>
                                A youth begins a quest to fight demons and save his sister after finding his family slaughtered and his sister turned into a demon.
                              </p>
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-sm-2"> <!--Black Widow-->
                  <div class="card" style="width: 140px;">
                      <img class="card-img-top btn" src="../UAS/Upcoming/black_widow.jpg" id="btn" data-toggle="modal" data-target="#BW" alt="Card image cap" style="width: 140px; height: 175px;">
                      <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#BW">Black Widow</h6>
                  </div>
                  <div class="modal" id="BW">
                      <div class="modal-dialog">
                        <div class="modal-content" id="mdlg">
                          <div class="modal-body">
                            <iframe width="727" height="409" src="https://www.youtube.com/embed/ybji16u608U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <a class="text-white text-justify" style="font-size: 12px;">
                              <p><b>Synopsis :</b></p>
                              <p>
                                At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day New York, where she is a freelance operative.
                              </p>
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-sm-2"> <!--Tom & Jerry-->
                <div class="card" style="width: 140px;">
                    <img class="card-img-top btn" src="../UAS/Upcoming/tom_and_jerry.jpg" id="btn" data-toggle="modal" data-target="#TAJ" alt="Card image cap" style="width: 140px; height: 175px;">
                    <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#TAJ">Tom and Jerry</h6>
                </div>
                <div class="modal" id="TAJ">
                    <div class="modal-dialog">
                      <div class="modal-content" id="mdlg">
                        <div class="modal-body">
                          <iframe width="727" height="409" src="https://www.youtube.com/embed/KW8fGRTFWKc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <br>
                          <a class="text-white text-justify" style="font-size: 12px;">
                            <p><b>Synopsis :</b></p>
                            <p>
                            A hotel employee hires Tom the cat to get rid of Jerry the mouse.
                            </p>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2"> <!--A Quiet Place 2-->
                <div class="card" style="width: 140px;">
                    <img class="card-img-top btn" src="../UAS/Upcoming/a_quiet_place_2.jpg" id="btn" data-toggle="modal" data-target="#AQP2" alt="Card image cap" style="width: 140px; height: 175px;">
                    <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#AQP2">A Quiet Place Part 2</h6>
                </div>
                <div class="modal" id="AQP2">
                    <div class="modal-dialog">
                      <div class="modal-content" id="mdlg">
                        <div class="modal-body">
                          <iframe width="727" height="409" src="https://www.youtube.com/embed/XEMwSdne6UE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <br>
                          <a class="text-white text-justify" style="font-size: 12px;">
                            <p><b>Synopsis :</b></p>
                            <p>
                            The Abbott family must now face the terrors of the outside world as they fight for survival in silence. Forced to venture into the unknown, they realize that the creatures that hunt by sound are not the only threats that lurk beyond the sand path.  
                            </p>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2"> <!--Wonder Woman 1984-->
              <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Upcoming/wonder_woman.jpg" id="btn" data-toggle="modal" data-target="#WW" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#WW">Wonder Woman 1984</h6>
              </div>
              <div class="modal" id="WW">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/XW2E2Fnh52w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                          Wonder Woman squares off against Maxwell Lord and the Cheetah, a villainess who possesses superhuman strength and agility.
                          </p>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          
          <div class="col-sm-2"> <!--Fast & Furious 9-->
              <div class="card" style="width: 140px;">
                  <img class="card-img-top btn" src="../UAS/Upcoming/fast_furious_9.jpg" id="btn" data-toggle="modal" data-target="#FF9" alt="Card image cap" style="width: 140px; height: 175px;">
                  <h6 class="btn" style="font-size: 12px;" id="btn" data-toggle="modal" data-target="#FF9">Fast and Furious 9</h6>
              </div>
              <div class="modal" id="FF9">
                  <div class="modal-dialog">
                    <div class="modal-content" id="mdlg">
                      <div class="modal-body">
                        <iframe width="727" height="409" src="https://www.youtube.com/embed/FUK2kdPsBws" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <a class="text-white text-justify" style="font-size: 12px;">
                          <p><b>Synopsis :</b></p>
                          <p>
                            Dominic Toretto and his crew join forces to battle the most skilled assassin and high-performance driver they've ever encountered -- his forsaken brother. 
                          </p>
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>

          </div>
          
      </div>
      
      <br><br><br><br><br><br>
      <!-- AKHIR PEMBATAS UPCOMING MOVIES -->


    </body>

    <!----------------------------------------------------------------------------------------------->
    
    <!-- AWAL PEMBATAS FOOTER -->

    <footer id="ft">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <br> <br> <br> <br> <br>
                <img src="Logo/LOGO_FC_1-removebg-preview.png" alt="" style="height: 100px; width: 175px;" id="forrr"><span class="sr-only">(current)</span>
              </div>
              <div class="container">
                  <h6 style="font-size: 20px;">
                    <br>
                    Watch movies online, take a look at the latest movie trailer at ease, quick & secure without any hassle.
                  </h6>
              </div>
          </div>
      </div>	
    </footer>

    <!-- AKHIR PEMBATAS FOOTER -->

    <!----------------------------------------------------------------------------------------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
</html>
