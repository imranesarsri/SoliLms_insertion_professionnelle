@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="https://lh3.googleusercontent.com/a/ACg8ocIaSVBszK3h447xfGqNg8DLcRN3iuKx8V0F-hKID5iNGQ=s360-c-no"
                                        alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">Imrane sarsri</h3>
                                <p class="text-muted text-center">Mobile developer</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <span class="d-blocke pe-2 ps-2"><i class="fa-solid fa-phone pe-2"></i></span>
                                        0626156115
                                    </li>
                                    <li class="list-group-item">
                                        <span class="d-blocke "><i class="fa-solid fa-envelope"></i></span>
                                        sarsri.imrane.solicoders@gmail.com
                                    </li>
                                    <li class="list-group-item">
                                        <span class="d-blocke "><i class="fa-brands fa-linkedin"></i></span>
                                        <a href="https://www.linkedin.com/in/imrane-sarsri-92a116299/"
                                            class="text-dark">sarsri imrane</a>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="d-blocke "><i class="fa-brands fa-github"></i></span>
                                        <a href="https://github.com/imranesarsri" class="text-dark">
                                            sarsri imrane
                                        </a>
                                    </li>
                                    <button type="submit" class="btn btn-primary col start">
                                        <i class="fas fa-upload"></i>
                                        <span>Export CV</span>
                                    </button>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Projets</h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="Projets">

                                        <div class="post">
                                            <div class="">

                                                <h5 class="">
                                                    <a href="#">cnmh</a>
                                                </h5>
                                            </div>

                                            <p>
                                                Né d’une Volonté Royale, le Centre National Mohammed VI des Handicapés (CNMH
                                                Tanger) a été voulu comme un outil de changement d’échelle dans l’action
                                                menée par la Fondation en faveur du handicap. Il apporte une réponse
                                                concrète aux questions de prises en charge du public handicapé et aux
                                                attentes en matière d’accompagnement des familles et intervenants du
                                                secteur.
                                            </p>
                                        </div>


                                        <div class="post">
                                            <div class="">
                                                <h5 class="">
                                                    <a href="#">Solilms</a>
                                                </h5>
                                            </div>

                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ratione
                                                libero. Unde adipisci sit voluptatibus tempora, architecto voluptatum, odio
                                                assumenda nulla blanditiis laudantium recusandae reprehenderit officia
                                                voluptates facere, et consequatur.
                                            </p>
                                        </div>
                                        <div class="post">
                                            <div class="">
                                                <h5 class="">
                                                    <a href="#">Gestion des stocks</a>
                                                </h5>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ratione
                                                libero. Unde adipisci sit voluptatibus tempora, architecto voluptatum, odio
                                                assumenda nulla blanditiis laudantium recusandae reprehenderit officia
                                                voluptates facere, et consequatur.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
