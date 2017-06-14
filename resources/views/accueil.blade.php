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
            <h6>APPLICATIONS WEB</h6>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 14pt;text-align: justify">Pour cette semaine, il est prévu de finir avec les tâches Ios du projet africare (si le compte apple developper est bien disponible) ; il sera également question d’optimiser les codes </p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon3.png")}}>
            <h6>APPLICATIONS MOBILE</h6>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 14pt;text-align: justify">Pour cette semaine, il est prévu de finir avec les tâches Ios du projet africare (si le compte apple developper est bien disponible) ; il sera également question d’optimiser les codes </p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon1.png")}}>
            <h6>CREATION GRAPHIQUE</h6>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 14pt;text-align: justify">Pour cette semaine, il est prévu de finir avec les tâches Ios du projet africare (si le compte apple developper est bien disponible) ; il sera également question d’optimiser les codes </p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon5.png")}}>
            <h6>MARKETING DIGITAL</h6>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 14pt;text-align: justify">Pour cette semaine, il est prévu de finir avec les tâches Ios du projet africare (si le compte apple developper est bien disponible) ; il sera également question d’optimiser les codes </p>
        </div>


    </div>
@endsection
<script src={{URL::asset("bootstra/js/jquery-2.2.1.min.js")}}></script>

