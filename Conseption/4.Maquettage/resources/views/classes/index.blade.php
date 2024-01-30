@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1>Les Classes</h1>
            </div>
            <div class="col-sm-4">
                <div class="float-sm-right">
                    <a href="#Ajouter" type="button" class="btn btn-block btn-primary nav-item nav-link text-light"
                        data-toggle="tab">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="tab-content">
            <div class=" tab-pane" id="Ajouter">
                <div class="card-body">
                    <div class="form-group">
                        <label for="Numéro_de_classe">Numéro de classe</label>
                        <input type="text" class="form-control" id="Numéro_de_classe"
                            placeholder="Enter Numéro de classe">
                    </div>
                    <div class="form-group">
                        <label for="Nom_de_classe">Nom de classee</label>
                        <input type="text" class="form-control" id="Nom_de_classe" placeholder="Enter Nom de classee">
                    </div>
                    <div class="form-group">
                        <label for="Nom_du_formateur">Nom du formateur</label>
                        <input type="text" class="form-control" id="Nom_du_formateur"
                            placeholder="Enter Nom du formateur">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h3 class="text-black">Classes mobile :</h3>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('apprenants.index', ['class' => 'DMB-101']) }}" class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark ">DMB-101</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-primary p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <h3 class="text-black">Classes Web :</h3>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('apprenants.index', ['class' => 'DWB-101']) }}" class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-101</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-info p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('apprenants.index', ['class' => 'DWB-102']) }}" class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-102</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-success p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('apprenants.index', ['class' => 'DWB-103']) }}" class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-103</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-danger  p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('apprenants.index', ['class' => 'DWB-104']) }}" class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-104</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-warning p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
