@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="text-black">Table des apprenants classe {{ $id }}</h1>
            </div>
            <div class="col-sm-4">
                <div class="float-sm-right ">
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
                        <label for="Nom_complet">Nom complet</label>
                        <input type="text" class="form-control" id="Nom_complet" placeholder="Enter Nom complet">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">

            <div class="row d-flex justify-content-between">
                <div class="col-4">
                    <div class="input-group">
                        <label class="input-group-text bg-default" for="filterSelectProjrctValue"><i
                                class="fas fa-filter "></i></label>
                        <select class="form-select form-control" id="filterSelectProjrctValue" aria-label="Filter Select">
                            <option value="Tous les apprenants">Tous les apprenants</option>
                            <option value="Étudiant">Étudiant</option>
                            <option value="Stagiaire">Stagiaire</option>
                            <option value="Employé">Employé</option>
                            <option value="Chômeuse">Chômeuse</option>

                        </select>
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <input type="text" class="form-control" placeholder="Recherche" aria-label="Recherche"
                        aria-describedby="basic-addon1" id="search-input">
                    <span class="input-group-text bg-default " id="basic-addon1"><i class="fas fa-search "></i></span>
                </div>

            </div>

        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Numéro de téléphone</th>
                        <th>Email</th>
                        <th>Statut d'Activité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Imrane sarsri</td>
                        <td>0626121314</td>
                        <td>imrane.sarsri.solicoders@gmail.com</td>
                        <td class="">
                            <div class="badge bg-success p-2">
                                <span class="text-light">Étudiant</span>
                            </div>
                        </td>
                        <td class="d-flex justify-content-center ">
                            <i class="fa-solid fa-trash-can btn-danger p-2 "></i>
                            <a href="{{ route('apprenants.show', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-eye btn-default p-2 "></i>
                            </a>
                            <a href="{{ route('apprenants.edit', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-pen btn-default p-2 "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Hamid lmjdob</td>
                        <td>0734928171</td>
                        <td>Hamid.lmjdob.solicoders@gmail.com</td>
                        <td>
                            <span class="badge bg-danger p-2">Chômeuse</span>
                        </td>
                        <td class="d-flex justify-content-center ">
                            <i class="fa-solid fa-trash-can btn-danger p-2 "></i>
                            <a href="{{ route('apprenants.show', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-eye btn-default p-2 "></i>
                            </a>
                            <a href="{{ route('apprenants.edit', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-pen btn-default p-2 "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>amine lrzal</td>
                        <td>0788330111</td>
                        <td>amine.amine.solicoders@gmail.com</td>
                        <td>
                            <div class="badge bg-warning p-2">
                                <span class="text-light">Stagiaire</span>
                            </div>
                        </td>
                        <td class="d-flex justify-content-center ">
                            <i class="fa-solid fa-trash-can btn-danger p-2 "></i>
                            <a href="{{ route('apprenants.show', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-eye btn-default p-2 "></i>
                            </a>
                            <a href="{{ route('apprenants.edit', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-pen btn-default p-2 "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>reda agrain</td>
                        <td>0618171615</td>
                        <td>reda.agrain.solicoders@gmail.com</td>
                        <td>
                            <span class="badge bg-primary p-2">Employé</span>
                        </td>
                        <td class="d-flex justify-content-center ">
                            <i class="fa-solid fa-trash-can btn-danger p-2 "></i>
                            <a href="{{ route('apprenants.show', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-eye btn-default p-2 "></i>
                            </a>
                            <a href="{{ route('apprenants.edit', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-pen btn-default p-2 "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>adnan adnan</td>
                        <td>0611223344</td>
                        <td>adnan.2.solicoders@gmail.com</td>
                        <td><span class="badge bg-primary p-2">Employé</span></td>
                        <td class="d-flex justify-content-center ">
                            <i class="fa-solid fa-trash-can btn-danger p-2 "></i>
                            <a href="{{ route('apprenants.show', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-eye btn-default p-2 "></i>
                            </a>
                            <a href="{{ route('apprenants.edit', ['apprenant' => '1']) }}">
                                <i class="fa-solid fa-pen btn-default p-2 "></i>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item "><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection
