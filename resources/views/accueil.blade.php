<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/06/2017
 * Time: 16:56
 */
?>
@extends('layouts.entete_accueil')

@section('content')
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src={{URL::asset("bootstra/img/slide/slide1.jpg")}}>
                </div>

                <div class="item">
                    <img src={{URL::asset("bootstra/img/slide/slide2.jpg")}}>
                </div>

                <div class="item">
                    <img src={{URL::asset("bootstra/img/slide/slide3.jpg")}}>
                </div>
                <div class="item">
                    <img src={{URL::asset("bootstra/img/slide/slide4.jpg")}}>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span style="color:#33CCFF" class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span style="color:#33CCFF" class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;padding-left: 4%;padding-right: 4%">
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon2.png")}}>
            <h4>{{trans('messages.application_web')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_3')}}</p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon3.png")}}>
            <h4>{{trans('messages.application_mobile')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_2')}}</p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon1.png")}}>
            <h4>{{trans('messages.creation_graphic')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_1')}}</p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon5.png")}}>
            <h4>{{trans('messages.digital_marketing')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_4')}}</p>
        </div>


    </div>

    <div class="row" style="background-color: #5e5e5e;height: auto;margin-top: 30px;padding-left: 4%;padding-right: 4%;padding-bottom: 14px">
        <div class="col-md-6">
            <h4 style="color: white">{{--<span style="color:white;font-size: 20px" class="glyphicon glyphicon-glass"></span>--}}{{trans('messages.nos_clients')}}</h4>
            <p>

            </p>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-1">{{--<h4><span style="color:white;font-size: 30px" class="glyphicon glyphicon-comment"></span></h4>--}}</div>
                <div class="col-md-11" style="color:white">
                    <h4>{{strtoupper(trans('messages.temoignages'))}}</h4><br>
                    <p>Pour cette semaine, il est prévu de finir avec les tâches Ios du projet africare (si le compte apple developper est bien disponible) ; il sera également question d’optimiser les codes</p>
                <br>
                    <div class="row" style="margin-left: 0px">
                    <div class="col-md-1" style="border-radius: 50%;background-color: white;border:solid 1px #33CCFF;height: 45px"></div>
                    <div class="col-md-6">Thierry Babang<br>
                        <h6 style="color:#33CCFF ">CEO & Co-Founder BrightCode</h6>
                    </div>

                </div>

                </div>
            </div>

        </div>
    </div>
@endsection
<script src={{URL::asset("bootstra/js/jquery-2.2.1.min.js")}}></script>

