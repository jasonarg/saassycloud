@extends('layouts.headlessFrame')

@section('content')
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row bg-white" style="min-height: 700px;">
                <div class="col-md-5 bg-white py-3">
                    <a class="navbar-brand  text-dark p-3" href="/"><strong class="font-weight-bold">SaaS</strong>sy Cloud</a>
                    <h2 class="text-dark roboFont font-weight-bold text-center px-5 pt-5">World 1-2</h2>
                    <form action="/signup/warp" method="get" id="contactInfo" class="text-dark p-5 m-5" novalidate>
                        <fieldset class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="mario@example.com">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                This will be your login to your SaaSsy Cloud instance
                            </small>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="worldName">Password</label>
                            <input type="password" class="form-control" id="worldName" placeholder="worldname">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Your password must be at least 12 characters long.
                            </small>
                        </fieldset>
                        <button class="btn btn-success" role="submit">World 1-3 <i class="fa fa-right-arrow"></i></button>
                    </form>
                </div>
                <div class="col-md-7 bg-white world-billboard" id="world-1-2-billboard">
                    <div class="img d-block"></div>
                </div>
            </div>
        </div>
    </section>
@endsection