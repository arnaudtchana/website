<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/06/2017
 * Time: 12:11
 */
?>
@extends('layouts.entete')

@section('content')
    <div class="row" style="padding-left: 10px">
        <div class="col-md-offset-1 col-md-4">
            <div style="width:140px; border-bottom: 3px solid #33CCFF;padding-left: 3px"><h5>Contacts</h5></div>
            <hr style="margin-top:0px;margin-bottom: 0px">



            <p style="text-align: center">
                <img style="width: 30%;height: 30%;" src={{URL::asset("bootstra/img/logo.jpg")}}><br>
                <span style="color:#33CCFF" class="glyphicon glyphicon-earphone"></span> (+237) 690 12 60 98 <br><br>
                <span style="color:#33CCFF" class="glyphicon glyphicon-envelope"></span> info@brigthcode.com<br><br>
                <span style="color:#33CCFF" class="glyphicon glyphicon-globe"></span> www.brigthcode.com<br><br>
                <span style="color:#33CCFF" class="glyphicon glyphicon-map-marker"></span> Yaoundé, CAMEROUN<br><br>
            </p>


        </div>

        <div class="col-md-offset-1 col-md-4">
            <div style="width:140px; border-bottom: 3px solid #33CCFF;padding-left: 3px"><h5>Ecrivez-nous!</h5></div>
            <hr style="margin-top:0px;margin-bottom: 0px">


            {!! Form::open(array('action' => 'HomeCtrl@accueil'),array('class' => 'form-inline','role' => 'form')) !!}
            {!! Form::token() !!}
            <div class="form-group">

                {!! Form::label('nom', 'Nom', array('class' => 'control-label')) !!}
                {!!  Form::text('nom', null, array('class' => 'form-control','placeholder'=>'Nom','required')) !!}
            </div>

            <div class="form-group">

                {!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
                {!!  Form::text('email', null, array('class' => 'form-control','placeholder'=>'Email','required')) !!}
            </div>
            <div class="form-group">

                {!! Form::label('sujet', 'Sujet', array('class' => 'control-label')) !!}
                {!!  Form::text('sujet', null, array('class' => 'form-control','placeholder'=>'Sujet','required')) !!}
            </div>

            <div class="form-group">

                {!! Form::label('Message', 'Message', array('class' => 'control-label')) !!}
                {!!  Form::textarea('message', null, array('class' => 'form-control','placeholder'=>'Message...','required')) !!}
            </div>



            {!! Form::submit(trans('messages.envoyer'), array('class' => 'btn','style' => 'margin-left: 80%')) !!}

            {!! Form::close() !!}
        </div>

    </div>
@endsection