@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit profile</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="Nom_complet">Nom complet</label>
                    <input type="text" class="form-control" id="Nom_complet" placeholder="Enter Nom complet">
                </div>
                <div class="form-group">
                    <label for="Numéro_de_téléphone">Numéro de téléphone</label>
                    <input type="text" class="form-control" id="Numéro_de_téléphone"
                        placeholder="Enter Numéro de téléphone">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="Statut_d'Activité">Statut d'Activité</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1"
                        tabindex="-1" aria-hidden="true">
                        <option data-select2-id="34">Étudiant</option>
                        <option data-select2-id="35">Stagiaire</option>
                        <option data-select2-id="36">Employé</option>
                        <option data-select2-id="36">Chômeuse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Linkden">Linkden</label>
                    <input type="text" class="form-control" id="Linkden"
                        placeholder="Entrez le lien de votre compte sur linkden">
                </div>
                <div class="form-group">
                    <label for="Github">Github</label>
                    <input type="text" class="form-control" id="Github"
                        placeholder="Entrez le lien de votre compte sur github">
                </div>

                <hr>
                <h5>Projets :</h5>
                <div class="form-group">
                    <label for="Projet_1">Projet 1</label>
                    <input type="text" class="form-control mb-2" id="Projet_1" placeholder="Entrez le lien de projet 1">
                    <textarea class="form-control" rows="3" placeholder="Entrez une description liée à ce projet"></textarea>
                </div>
                <div class="form-group">
                    <label for="Projet_2">Projet 2</label>
                    <input type="text" class="form-control mb-2" id="Projet_2" placeholder="Entrez le lien de projet 2">
                    <textarea class="form-control" rows="3" placeholder="Entrez une description liée à ce projet"></textarea>
                </div>
                <div class="form-group">
                    <label for="Projet_3">Projet 3</label>
                    <input type="text" class="form-control mb-2" id="Projet_3" placeholder="Entrez le lien de projet 2">
                    <textarea class="form-control" rows="3" placeholder="Entrez une description liée à ce projet"></textarea>
                </div>
                <hr>
                <div class="form-group">
                    <label for="Github">CV</label>
                    <span class="btn btn-info col fileinput-button dz-clickable">
                        <i class="fa-solid fa-download"></i> <span>emport cv</span>
                    </span>
                    {{-- <input type="file" class="btn btn-info col fileinput-button dz-clickable" name=""
                        id=""> --}}
                </div>
            </div>


            <div class="card-footer">
                <button type="submit">Submit</button>
            </div>
        </form>

    </div>
@endsection
