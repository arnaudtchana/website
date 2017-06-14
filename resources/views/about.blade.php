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
        <div class="col-md-offset-1 col-md-5 text-left"><h5>Qui sommes nous ?</h5>
            <hr class="trait" style="margin-top:0px;margin-bottom: 0px">
        </div>

    </div>


    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left">
            <p>Composée uniquement de l'entrepreneur individuel, elle se distingue par l'absence de capital social, l'entreprise et l’entrepreneur ne constituant juridiquement qu'une seule personne. Précision importante : les biens fonciers bâtis ou non bâtis qui ne sont pas à un usage professionnel peuvent être protégés en établissant une déclaration d'insaisissabilité devant le notaire. Les bénéfices de l’entreprise constituent la rémunération de l’entrepreneur individuel. Sur le plan fiscal, celui-ci est imposé au titre de l'impôt sur le revenu (IR). Sur le plan social, il relève du régime des non-salariés</p>
        </div>
        <div class="col-md-5 text-left">
            <img style="width: 100%" src={{URL::asset("bootstra/img/about2.jpg")}}>
        </div>

    </div>

    <div class="row">
        <div class="col-md-offset-6 col-md-5 text-right"><h5>Nos valeurs</h5>
            <hr class="trait" style="margin-top:0px;margin-bottom: 0px">
        </div>

    </div>
    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5">
            <img style="width: 100%" src={{URL::asset("bootstra/img/nos_valeurs.jpg")}}>
        </div>
        <div class="col-md-5 text-left">
            <p>Composée uniquement de l'entrepreneur individuel, elle se distingue par l'absence de capital social, l'entreprise et l’entrepreneur ne constituant juridiquement qu'une seule personne. Précision importante : les biens fonciers bâtis ou non bâtis qui ne sont pas à un usage professionnel peuvent être protégés en établissant une déclaration d'insaisissabilité devant le notaire. Les bénéfices de l’entreprise constituent la rémunération de l’entrepreneur individuel. Sur le plan fiscal, celui-ci est imposé au titre de l'impôt sur le revenu (IR). Sur le plan social, il relève du régime des non-salariés</p>
        </div>


    </div>

    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left"><h5>Nos compétences</h5>
            <hr class="trait" style="margin-top:0px;margin-bottom: 0px">
        </div>

    </div>


    <div class="row" style="padding-left: 15px">
        <div class="col-md-offset-1 col-md-5 text-left">
            <p>Composée uniquement de l'entrepreneur individuel, elle se distingue par l'absence de capital social, l'entreprise et l’entrepreneur ne constituant juridiquement qu'une seule personne. Précision importante : les biens fonciers bâtis ou non bâtis qui ne sont pas à un usage professionnel peuvent être protégés en établissant une déclaration d'insaisissabilité devant le notaire. Les bénéfices de l’entreprise constituent la rémunération de l’entrepreneur individuel. Sur le plan fiscal, celui-ci est imposé au titre de l'impôt sur le revenu (IR). Sur le plan social, il relève du régime des non-salariés</p>
        </div>
        <div class="col-md-5 text-left">
            <img style="width: 100%" src={{URL::asset("bootstra/img/nos_competences.png")}}>
        </div>

    </div>

@endsection