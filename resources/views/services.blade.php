<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/06/2017
 * Time: 12:10
 */
?>
@extends('layouts.entete')

@section('content')
    <div class="row" style="margin-top: 30px;padding-left: 4%;padding-right: 4%">
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon2.png")}}>
            <h4>{{trans('messages.application_web')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_3')}}
            <a href="#" style="text-decoration: none">lire...</a>
            </p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon3.png")}}>
            <h4>{{trans('messages.application_mobile')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_2')}}
                <a href="#" style="text-decoration: none">lire...</a>
            </p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon1.png")}}>
            <h4>{{trans('messages.creation_graphic')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_1')}}
                <a href="#" style="text-decoration: none">lire...</a>
            </p>
        </div>
        <div class="col-md-3 text-center">
            <img src={{URL::asset("bootstra/img/icon5.png")}}>
            <h4>{{trans('messages.digital_marketing')}}</h4>
            <hr style="border-top: 2px solid #33CCFF;">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_services_texte_4')}}
                <a href="#" style="text-decoration: none">lire...</a>
            </p>
        </div>


    </div>
@endsection