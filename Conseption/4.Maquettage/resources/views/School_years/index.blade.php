@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1>Années scolaires</h1>
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
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="" class="btn btn-default create_form_dropdown">Annuler</button>
            </div>
        </form>
    </div>
    <div class="row">

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card info-box bg-gradient">
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
                <a href="{{ route('classes.index') }}" class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2020/10/19</h6>
                            <h6 class="m-b-0 text-dark">2021/06/23</h6>
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
                    <div class="form-group">
                        <label for="date_de_début">date de début</label>
                        <input type="text" value="2020/10/19" class="form-control" id="date_de_début"
                            placeholder="Enter date de début">
                    </div>
                    <div class="form-group">
                        <label for="date_de_fin">date de fin</label>
                        <input type="text" value="2021/06/23" class="form-control" id="date_de_fin"
                            placeholder="Enter date de fin">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Modify</button>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 ">

            <div class="card info-box bg-gradient">
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
                <a href="{{ route('classes.index') }}" class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2021/10/19</h6>
                            <h6 class="m-b-0 text-dark">2022/06/23</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 ">

            <div class="card info-box bg-gradient">
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
                <a href="{{ route('classes.index') }}" class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2022/10/19</h6>
                            <h6 class="m-b-0 text-dark">2023/06/23</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12 ">
            <div class="card info-box bg-gradient">
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
                <a href="{{ route('classes.index') }}" class="card-body" style="padding: 0.25rem;!important">
                    <div class="row align-items-center m-b-30">
                        <div class="info-box-icon p-4 text-dark">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5 text-dark">2023/10/19</h6>
                            <h6 class="m-b-0 text-dark">2024/06/23</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
