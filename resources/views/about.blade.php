<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/06/2017
 * Time: 12:10
 * ici la page a propo
 */
?>
@extends('layouts.entete')

@section('content')
    {{--<div style="width: 50%;padding-left: 15px">
        <div style="width:140px; border-bottom: 3px solid #33CCFF;padding-left: 3px"><h5>Qui sommes nous ?</h5></div>
        <hr style="margin-top:0px;margin-bottom: 0px">
    </div>--}}
    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left"><h4>{{trans('messages.qui_sommes_nous_titre')}}</h4>
            <hr class="trait" style="margin-top:0px;margin-bottom: 0px">
        </div>

    </div>
<br>

    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.qui_sommes_nous_texte')}}</p>
        </div>
        <div class="col-md-5 text-left">
            <img style="width: 100%" src={{URL::asset("bootstra/img/qui_sommes_nous.jpg")}}>
        </div>

    </div>
<br>
    <div class="row">
        <div class="col-md-offset-6 col-md-5 text-right"><h4>{{trans('messages.nos_valeurs_titre')}}</h4>
            <hr class="trait" style="margin-top:0px;margin-bottom: 0px">
        </div>

    </div>
    <br>
    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5">
            <img style="width: 100%" src={{URL::asset("bootstra/img/nos_valeurs.jpg")}}>
        </div>
        <div class="col-md-5 text-left">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_valeurs_texte')}}</p>
        </div>


    </div>

    <br>

    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left"><h4>{{trans('messages.nos_competences_titre')}}</h4>
            <hr class="trait" style="margin-top:0px;margin-bottom: 0px">
        </div>

    </div>

<br>
    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left">
            <p style="font-size: 12pt;text-align: justify">{{trans('messages.nos_competences_texte')}}</p>
        </div>
        <div class="col-md-5 text-left">
            <img style="width: 100%" src={{URL::asset("bootstra/img/nos_competences.png")}}>
        </div>

    </div>

@endsection