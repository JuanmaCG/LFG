<?php

include "../php/CRUDUsuario.php";

$CRUD = new CRUDUsuario();

$usuario = $_GET['username'];

$datos = $CRUD->leerDatos($usuario);
$social = $CRUD->socialMedia($usuario);


?>

<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/perfil.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/perfil.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>

<body>

<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1><?echo$datos->name?></h1></div>
        <div class="col-sm-2"><a href="landing.php" class="pull-right header"><img title="profile image" class="img-circle img-responsive" src="../images/5.png"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <div class="">
                <img src="<? echo $datos->picture ?>" class="avatar img-circle img-thumbnail" alt="avatar"  style="width: 235px; height: 235px;">

            </div></hr><br>






            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <a href="<? echo 'https://es-es.facebook.com/'.$social->facebook; ?>" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
                    <a href="<? echo 'https://twitter.com/'.$social->twitter; ?>" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
                    <a href="<? echo 'https://www.twitch.tv/'.$social->twitch; ?>" target="_blank"><i class="fab fa-twitch fa-3x"></i></a>
                    <a href="<? echo 'https://steamcommunity.com/id/'.$social->steam; ?>" target="_blank"><i class="fab fa-steam fa-3x"></i></a>
                    <a href="<? echo 'https://euw.op.gg/summoner/userName='.$social->league; ?> " target="_blank"> <img src="../images/riot-logo.png" height="42" , width="42" style="margin-bottom: 25px;"></a>
                </div>
            </div>

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Datos</a></li>
                <li><a data-toggle="tab" href="#messages">Redes Sociales</a></li>

            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="../php/CRUD.php" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="nombre" id="first_name" value="<?echo$datos->name?>" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="apellidos" id="last_name" value="<? echo $datos->lastName?>" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" value="<? echo $datos->email?>" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="text" class="form-control" name="provincia" id="provincia" value="<? echo $datos->poblacion?>" title="enter a location">
                            </div>
                        </div>


                    </form>

                    <hr>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="messages">

                    <h2>REDES SOCIALES</h2>

                    <hr>
                    <form class="form" action="../php/CRUD.php" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Twitter</h4></label>
                                <input type="text" class="form-control" name="twitter"  placeholder="Twitter" value="<? echo $social->twitter ?>">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Facebook</h4></label>
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="<? echo $social->facebook ?>">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Steam</h4></label>
                                <input type="text" class="form-control" name="steam"  placeholder="Steam ID" value="<? echo $social->steam ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Blizzard</h4></label>
                                <input type="text" class="form-control" name="blizzard"  placeholder="Blizzard ID" value="<? echo $social->blizzard?>">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Twitch</h4></label>
                                <input type="text" class="form-control" name="twitch"  placeholder="Usuario Twitch" value="<? echo $social->twitch ?>">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label ><h4>League of Legends</h4></label>
                                <input type="text" class="form-control" name="lol"  placeholder="League of Legends" value="<? echo $social->league ?>">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label><h4>MMR</h4></label>
                                <input type="number" class="form-control" name="mmr"  placeholder="League of Legends MMR" value="<? echo $social->mmr ?>">
                            </div>
                        </div>


                    </form>



                    </form>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <a href="landing.php"> <button class="btn btn-lg btn-info" type="submit"></i> Inicio</button></a>

                    </div>
                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->





</body>
</html>
