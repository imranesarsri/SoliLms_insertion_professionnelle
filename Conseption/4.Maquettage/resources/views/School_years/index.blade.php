@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1>Années scolaires</h1>
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
                        <label for="date_de_début">date de début</label>
                        <input type="date" class="form-control" id="date_de_début" placeholder="Enter date de début">
                    </div>
                    <div class="form-group">
                        <label for="date_de_fin">date de fin</label>
                        <input type="date" class="form-control" id="date_de_fin" placeholder="Enter date de fin">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('classes.index') }}" class="info-box bg-gradient">
                <div class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2020/10/19</h6>
                            <h6 class="m-b-0 text-dark">2021/06/23</h6>
                        </div>
                    </div>

                </div>
            </a>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('classes.index', '2') }}" class="info-box bg-gradient">
                <div class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2021/10/19</h6>
                            <h6 class="m-b-0 text-dark">2022/06/23</h6>
                        </div>
                    </div>

                </div>
            </a>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('classes.index', '3') }}" class="info-box bg-gradient">
                <div class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2022/10/19</h6>
                            <h6 class="m-b-0 text-dark">2023/06/23</h6>
                        </div>
                    </div>

                </div>
            </a>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <a href="{{ route('classes.index', '4') }}" class="info-box bg-gradient">
                <div class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-primary">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2023/10/19</h6>
                            <h6 class="m-b-0 text-dark">2024/06/23</h6>
                        </div>
                    </div>

                </div>
            </a>
        </div>
    </div>
@endsection
