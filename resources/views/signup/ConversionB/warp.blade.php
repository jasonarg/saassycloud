@extends('layouts.headlessFrame')

@section('content')
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row bg-white" style="min-height: 700px;">
                <div class="col-md-5 bg-white py-3">
                    <a class="navbar-brand  text-dark p-3" href="/"><strong class="font-weight-bold">SaaS</strong>sy Cloud</a>
                    <h2 class="text-dark roboFont font-weight-bold text-center px-5 pt-5">World 1-3</h2>
                    <form action="/signup/create" method="post" id="contactInfo" class="text-dark px-5 m-5" novalidate>
                        {{  csrf_field ()}}

                        <fieldset class="form-group">
                            <label for="organizationName">Organization Name</label>
                            <input type="text" class="form-control{{ $errors->has('organizationName') ? ' is-invalid' : '' }}" id="organizationName" name="organizationName" placeholder="National Plumbers Union" required>
                            @if ($errors->has('organizationName'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('organizationName') }}</strong>
                                </div>
                            @endif
                        </fieldset>
                        <div class="form-row p-0 m-0">
                            <fieldset class="form-group col-md-6 pl-0">
                                <label for="firstName">First Name</label>
                                @if ($errors->has('firstName'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </div>
                                @endif
                            </fieldset>
                            <fieldset class="form-group col-md-6 pr-0">
                                <label for="firstName">Last Name</label>
                                <input type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" id="lastName" name="lastName" placeholder="Bros." required>
                                @if ($errors->has('lastName'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </div>
                                @endif
                            </fieldset>
                        </div>
                        <fieldset class="form-group">
                            <label for="address1">Street Address</label>
                            <input type="text" class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" id="address1" name="address1" placeholder="938 Cloud Kingdom Drive" required>
                            @if ($errors->has('address1'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('zip') }}</strong>
                                </div>
                            @endif
                        </fieldset>
                        <div class="form-row p-0 m-0">
                            <fieldset class="form-group col-md-4">
                                <label for="zip">Zip Code</label>
                                <input type="text" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" id="zip" name="zip" required>
                                @if ($errors->has('zip'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </div>
                                @endif
                            </fieldset>
                        </div>
                        <button class="btn btn-success" role="submit">Warp <i class="fa fa-right-arrow"></i></button>
                    </form>
                </div>
                <div class="col-md-7 bg-white world-billboard" id="world-1-3-billboard">
                    <div class="img d-block"></div>
                </div>
            </div>
        </div>
    </section>
@endsection