<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/06/2017
 * Time: 16:53
 */
?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href={{URL::asset("bootstra/js/custum_sroll/jquery.mCustomScrollbar.css")}} />

    <link rel="stylesheet" type="text/css" href={{URL::asset("bootstra/css/bootstrap.css")}} media="all"/>
    {{--<link rel="stylesheet" type="text/css" href={{URL::asset("custum_admin.css")}} media="all"/>--}}
    <link rel="stylesheet" type="text/css" href={{URL::asset("bootstra/siteweb.css")}} media="all"/>
    {{--<link rel="stylesheet" type="text/css" href={{URL::asset("bootstra/css/style.css")}} media="all"/>--}}
    <link href='https://fonts.googleapis.com/css?family=roboto' rel='stylesheet'type='text/css' />
    <link rel="shortcut icon" href="{{URL::asset('icon.ico') }}">
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    {{--<script src={{URL::asset("bootstra/js/jquery-2.2.1.min.js")}}></script>--}}
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src={{URL::asset("bootstra/js/bootstrap-hover-dropdown.min.js")}}></script>
    {{--<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src={{URL::asset("bootstra/js/js/highcharts.js")}}></script>--}}
    <link rel="stylesheet" type="text/css" href={{URL::asset("flag-icon-css/css/flag-icon.css")}} media="all"/>

    <script src={{URL::asset("bootstra/js/custum_sroll/jquery.mCustomScrollbar.concat.min.js")}}></script>


    <script src={{URL::asset("bootstra/js/bootstrap.min.js")}}></script>



    {{--{!!Html::style('bootstra/custum_admin.css')!!}--}}
    <title>Administrateur</title>
    <script>
        (function($){
            $(window).load(function(){
                $(".maladie,.ici").mCustomScrollbar({
                    axis:"y",
                    autoHideScrollbar: "true",
                    theme:"3d"
                });
            });
        })(jQuery);
    </script>
    <script>
        $(document).ready(function(){
            $("#ajout").click(function(){

                $("#menu_ajout").toggle(500);

            });
        });

        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });

    </script>

    <style>
        .btn:focus,.btn:active{
            outline: none;
        }
    </style>
</head>

<body>
<!--ici la partie menu de notre page-->

<!--commencons par notre header-->

<div>
    <!--ici la ligne contenant les differents contacts du site-->
    <div class="row">
        <div class="col-md-offset-1 col-md-2"><span class="glyphicon glyphicon-earphone"></span> (+237) 690 12 60 98</div>
        <div class="col-md-2"><span class="glyphicon glyphicon-envelope"></span> info@brigthcodegroup.com</div>
        <div class="col-md-offset-4 col-md-2 text-right">
            <a style="text-decoration: none;color:black" href="{{action('InternationalisationCtrl@change_langue_en')}}">{{trans('messages.anglais')}} {{--<span class="flag-icon flag-icon-gb flag-icon-squared"></span>--}}</a>
            |
            <a style="text-decoration: none;color:black" href="{{action('InternationalisationCtrl@change_langue_fr')}}">{{trans('messages.francais')}} {{--<span class="flag-icon flag-icon-fr flag-icon-squared"></span>--}}</a>
        </div>
    </div>
    <div class="row fixer">
        <div class="col-md-offset-1 col-md-3">
            <img style="height: 60px" src={{URL::asset("bootstra/img/logo_horizontal.png")}}>
        </div>
        <div class="col-md-offset-1 col-md-7" id="menu">
            <nav >
                <ul class="nav nav-pills">
                    <li style="margin-left: 5%;">
                        <a {{Request::is('accueil') ? 'class=active' : ''}}
                           href="{{action('HomeCtrl@accueil')}}">{{strtoupper(trans('messages.accueil'))}}</a>
                    </li>

                    <li>
                        <a {{Request::is('about') ? 'class=active' : ''}}
                           href="{{action('AboutCtrl@about')}}">{{strtoupper(trans('messages.a_propos'))}}</a>
                    </li>
                    <li>
                        <a  {{Request::is('services') ? 'class=active' : ''}}
                            href="{{action('ServicesCtrl@services')}}">{{strtoupper(trans('messages.nos_services'))}}</a>
                    </li>
                    <li>
                        <a  {{Request::is('contacts') ? 'class=active' : ''}}
                            href="{{action('ContactsCtrl@contacts')}}">{{strtoupper(trans('messages.contacts'))}}</a>
                    </li>


                <!--fin du menu deroulant-->

                </ul>
            </nav>
            {{--<div class="col-md-1"></div>--}}
        </div>

        <!--image dentete-->
        <div class="img col-md-12">
            <div class="col-md-offset-4 col-md-4 text-center">
                <h2 style="color:white">{{strtoupper(trans('messages.'.Session::get('lien')))}}</h2>

                <h5><span style="color:white">{{trans('messages.accueil')}} ></span> {{trans('messages.'.Session::get('lien'))}}</h5>
            </div>

        </div>


    </div>

    <!--fin du menu de la page-->


@yield('content')

<!--ici le pied de page-->

    <div class="col-md-12 text-center" id="pied">
        <p style="color:white;font-size: 8pt;padding-top: 30px">&copy;Juin 2017 tous droits réservés | BrigthCode- We design your digital life</p>

    </div>

    <!--ici le pied de page-->
</div>
</body>

</html>






