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
            <div style="width:140px; border-bottom: 3px solid #33CCFF;padding-left: 3px"><h4>Contacts</h4></div>
            <hr style="margin-top:0px;margin-bottom: 0px">

            <p style="text-align: center">
                <img style="width: 60%;height: 60%;" src={{URL::asset("bootstra/img/logo.jpg")}}><br>
            </p>
            <div class="row">
                <div class="col-md-offset-2 col-md-1"><span style="color:#33CCFF;font-size: 20px" class="glyphicon glyphicon-earphone"></span> </div>
                <div class="col-md-7">(+237) 690 12 60 98 </div>
            </div><br>

            <div class="row">
                <div class="col-md-offset-2 col-md-1"><span style="color:#33CCFF;font-size: 20px" class="glyphicon glyphicon-envelope"></span></div>
                <div class="col-md-7"><strong>info@brigthcodegroup.com</strong></div>
            </div><br>

            <div class="row">
                <div class="col-md-offset-2 col-md-1"><span style="color:#33CCFF;font-size: 20px" class="glyphicon glyphicon-globe"></span></div>
                <div class="col-md-7">www.brigthcodegroup.com</div>
            </div><br>

            <div class="row">
                <div class="col-md-offset-2 col-md-1"><span style="color:#33CCFF;font-size: 20px" class="glyphicon glyphicon-map-marker"></span></div>
                <div class="col-md-7">Yaoundé, CAMEROUN</div>
            </div><br>


        </div>

        <div class="col-md-offset-1 col-md-4">
            <div style="width:140px; border-bottom: 3px solid #33CCFF;padding-left: 3px"><h4>Ecrivez-nous!</h4></div>
            <hr style="margin-top:0px;margin-bottom: 0px">


            {!! Form::open(array('action' => 'HomeCtrl@accueil'),array('class' => 'form-inline','role' => 'form')) !!}
            {!! Form::token() !!}
            {{--<div class="form-group">

                {!! Form::label('nom', trans('messages.nom'), array('class' => 'control-label')) !!}
                {!!  Form::text('nom', null, array('class' => 'form-control','placeholder'=>trans('messages.nom'),'required')) !!}
            </div>--}}

            <div class="form-group">

                {!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
                {!!  Form::text('email', null, array('class' => 'form-control','placeholder'=>'Email','required')) !!}
            </div>
            <div class="form-group">

                {!! Form::label('sujet', trans('messages.sujet'), array('class' => 'control-label')) !!}
                {!!  Form::text('sujet', null, array('class' => 'form-control','placeholder'=>trans('messages.sujet'),'required')) !!}
            </div>

            <div class="form-group">

                {!! Form::label('Message', 'Message', array('class' => 'control-label')) !!}
                {!!  Form::textarea('message', null, array('class' => 'form-control','placeholder'=>'Message...','required')) !!}
            </div>


            <div class="row" style="margin-right: 0px">
                <div class="text-right">
                    {!! Form::submit(trans('messages.envoyer'), array('class' => 'btn')) !!}
                </div>
            </div>



            {!! Form::close() !!}
        </div>

    </div>
@endsection