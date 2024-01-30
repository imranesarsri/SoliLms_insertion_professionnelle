@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1>Les Classes</h1>
            </div>
            <div class="col-sm-4">
                @if (Auth::user()->name === 'admin')
                    <div class="float-sm-right">
                        <a href="" type="button"
                            class="btn btn-block btn-primary nav-item nav-link text-light create_form_dropdown"
                            data-toggle="tab">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>




    <div class="card card-primary d-none" id="form_dropdown">
        <div class="card-header">
            <h3 class="card-title">Ajouter</h3>
        </div>
        <form>
            <div class="card-body row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="Numéro_de_classe">Numéro de classe</label>
                        <input type="text" class="form-control" id="Numéro_de_classe"
                            placeholder="Enter Numéro de classe">
                    </div>
                    <div class="form-group">
                        <label for="Nom_de_classe">Nom de classee</label>
                        <input type="text" class="form-control" id="Nom_de_classe" placeholder="Enter Nom de classee">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="Nom_du_formateur">Nom du formateur</label>
                        <input type="text" class="form-control" id="Nom_du_formateur"
                            placeholder="Enter Nom du formateur">
                    </div>
                    <div class="form-group">
                        <label for="Nom_du_formateur">Domaine</label>
                        <select class="form-control select2 select2-hidden-accessible">
                            <option>Development Web</option>
                            <option>Development mobile</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="" class="btn btn-default create_form_dropdown">Annuler</button>
            </div>
        </form>
    </div>


    <div class="container-fluid">
        <h3 class="text-black">Classes mobile :</h3>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card ">
                @if (Auth::user()->name === 'admin')
                    <div class="card-header d-flex justify-content-end" style="padding: 0rem;!important">
                        <div class="btn">
                            <button type="button" class="btn btn-sm " data-toggle="dropdown" data-offset="-52"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-trash-can text-danger p-2"></i>
                                    <span>Supprimer</span>
                                </a>
                                <a href="#" class="dropdown-item lock-next-card">
                                    <i class="fa-solid fa-pen text-primary p-2 "></i>
                                    <span>modify</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <a href="{{ route('apprenants.index', ['class' => 'DMB-101']) }}" class="card-body">
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
                </a>
            </div>
            <div class="card card-primary d-none" id="card-to-lock">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                    <div class="card-tools row">
                        <button type="button" class="btn btn-tool d-block col" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                        </button>
                        <a type="" class="lock-next-card col">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col">
                        <div class="form-group">
                            <label for="Numéro_de_classe">Numéro de classe</label>
                            <input type="text" value="DWB-101" class="form-control" id="Numéro_de_classe"
                                placeholder="Enter Numéro de classe">
                        </div>
                        <div class="form-group">
                            <label for="Nom_de_classe">Nom de classee</label>
                            <input type="text" value="Solicoders" class="form-control" id="Nom_de_classe"
                                placeholder="Enter Nom de classee">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Nom_du_formateur">Nom du formateur</label>
                            <input type="text" value="ESSARRAJ Fouad" class="form-control" id="Nom_du_formateur"
                                placeholder="Enter Nom du formateur">
                        </div>
                        <div class="form-group">
                            <label for="Nom_du_formateur">Domaine</label>
                            <select class="form-control select2 select2-hidden-accessible">
                                <option>Development mobile</option>
                                <option>Development Web</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Modify</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h3 class="text-black">Classes Web :</h3>
    </div>
    <div class="row">

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card ">
                @if (Auth::user()->name === 'admin')
                    <div class="card-header d-flex justify-content-end" style="padding: 0rem;!important">
                        <div class="btn">
                            <button type="button" class="btn btn-sm " data-toggle="dropdown" data-offset="-52"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-trash-can text-danger p-2"></i>
                                    <span>Supprimer</span>
                                </a>
                                <a href="#" class="dropdown-item lock-next-card">
                                    <i class="fa-solid fa-pen text-primary p-2 "></i>
                                    <span>modify</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <a href="{{ route('apprenants.index', ['class' => 'DMB-101']) }}" class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-101</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-success p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card ">
                @if (Auth::user()->name === 'admin')
                    <div class="card-header d-flex justify-content-end" style="padding: 0rem;!important">
                        <div class="btn">
                            <button type="button" class="btn btn-sm " data-toggle="dropdown" data-offset="-52"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-trash-can text-danger p-2"></i>
                                    <span>Supprimer</span>
                                </a>
                                <a href="#" class="dropdown-item lock-next-card">
                                    <i class="fa-solid fa-pen text-primary p-2 "></i>
                                    <span>modify</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <a href="{{ route('apprenants.index', ['class' => 'DMB-101']) }}" class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-102</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-danger p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card ">
                @if (Auth::user()->name === 'admin')
                    <div class="card-header d-flex justify-content-end" style="padding: 0rem;!important">
                        <div class="btn">
                            <button type="button" class="btn btn-sm " data-toggle="dropdown" data-offset="-52"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-trash-can text-danger p-2"></i>
                                    <span>Supprimer</span>
                                </a>
                                <a href="#" class="dropdown-item lock-next-card">
                                    <i class="fa-solid fa-pen text-primary p-2 "></i>
                                    <span>modify</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <a href="{{ route('apprenants.index', ['class' => 'DMB-101']) }}" class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25 text-dark">DWB-103</h6>
                            <h3 class="f-w-700 text-dark">Solicoders</h3>
                            <p class="m-b-0 text-dark">ESSARRAJ Fouad</p>
                        </div>
                        <div class="col-auto rounded-circle bg-info p-2">
                            <i class="fas fa-bullseye text-light"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card ">
                @if (Auth::user()->name === 'admin')
                    <div class="card-header d-flex justify-content-end" style="padding: 0rem;!important">
                        <div class="btn">
                            <button type="button" class="btn btn-sm " data-toggle="dropdown" data-offset="-52"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-trash-can text-danger p-2"></i>
                                    <span>Supprimer</span>
                                </a>
                                <a href="#" class="dropdown-item lock-next-card">
                                    <i class="fa-solid fa-pen text-primary p-2 "></i>
                                    <span>modify</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <a href="{{ route('apprenants.index', ['class' => 'DMB-101']) }}" class="card-body">
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
                </a>
            </div>
        </div>

    </div>
@endsection
