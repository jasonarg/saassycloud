@extends('layouts.frame')

@section('content')
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row bg-white" style="">
                <div class="col text-center">
                    <h2 class="fluidSectionHeader text-dark my-5">Try our products for free</h2>
                    <h4 class="fluidSectionSubHeader text-secondary mb-5">Have a <img id="oneUp" src="/i/1up.png"> on us!</h4>
                    <h6 class="text-secondary">Choose from our most popular packages below or <a href="" class="text-info">create your own!</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col p-5">
                    <table class="table text-dark productTable border mb-5">
                        <thead>
                        <tr class="text-center">
                            <th scope="col" style="width: 20%;">
                                <div class="relAnchor">
                                    <img src="/i/bowser.png" id="bowser" alt=""></div>
                            </th>
                            @foreach ($packages as $package)
                                <th scope="col" class="px-5">
                                    <h5 class="productTitle text-dark mt-5"> {!! str_replace("SaaS", "<strong>SaaS</strong>", $package["packageName"]) !!} </h5>
                                    <h5 class="productTitle">${{ number_format($package["annualPrice"], 0) }}</h5>
                                    <p class="text-muted font-weight-normal">Per user, per month, billed annually.
                                        <br>${{ number_format($package["monthlyPrice"], 0) }} billed monthly
                                    </p>
                                    <a href="/signup/start/{{ $package["packageName"] }}" class="btn btn-lg btn-info px-5">
                                        @if ($package["packageName"] == "SaaSsy")
                                            Start with
                                        @elseif ($package["packageName"] == "SaaSsier")
                                            Get
                                        @elseif ($package["packageName"] == "SaaSsiest")
                                            Be the
                                        @endif
                                        {{ $package["packageName"] }}</a>
                                    <hr class="text-muted m-5">
                                    <p class="text-muted font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat, soluta eius, harum.</p>
                                    <a href="" class="text-info"><small><u>Learn more</u></small></a>
                                </th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody class="table-border">
                        @foreach($combinedFeatureGroups as $combinedFeatureGroupName => $features)

                            <tr class="table-secondary">
                                <th class="font-weight-bold tableDivider">
                                    {{ $combinedFeatureGroupName }}
                                </th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($features as $featureName => $featureVal)

                                <tr>
                                    <th scope="row"> {{ $featureName }}
                                        <a tabindex="0" class="fa fa-question-circle text-info" title="{{ $featureName }}" data-toggle="popover"
                                           data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                                    </th>
                                    @foreach($packages as $package)
                                        @if(isset($package["featureGroups"][$combinedFeatureGroupName][$featureName]))
                                            <td>
                                                @if($package["featureGroups"][$combinedFeatureGroupName][$featureName]["limitQuantity"] === null)
                                                    Unlimited
                                                @else
                                                    {{ number_format($package["featureGroups"][$combinedFeatureGroupName][$featureName]["limitQuantity"], 0) }} per
                                                    {{ $package["featureGroups"][$combinedFeatureGroupName][$featureName]["limitDimensionValue"] }}
                                                @endif
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach

                        @endforeach
                        <tr>
                            <th></th>

                            @foreach ($packages as $package)
                                <td class="py-5">
                                    <a href="/signup/start/{{ $package["packageName"] }}" class="btn btn-lg btn-info px-5">
                                        @if ($package["packageName"] == "SaaSsy")
                                            Start with
                                        @elseif ($package["packageName"] == "SaaSsier")
                                            Get
                                        @elseif ($package["packageName"] == "SaaSsiest")
                                            Be the
                                        @endif
                                        {{ $package["packageName"] }}</a>
                                </td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-light">
            <div class="row justify-content-center py-5">
                <div class="col-md-4">
                    <h2 class="text-dark text-center font-weight-bold">
                        No credit card needed to start
                    </h2>
                    <p class="text-dark text-center">
                        SaaSsy Cloud is not a platform.  It helps you beat platforms. Once you feel the power of unlimited power ups
                        you'll never want to find yourself down a pipe on your own again.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid bg-white">
            <div class="row" style="min-height: 600px;">
                <div class="col-md-5 p-5 m-5 text-center">
                    <h1 class="blockFont text-info font-weight-bold pb-0 mb-0">
                        <span class="fsize1">P</span><span class="fsize2">O</span><span class="fsize3">W</span><span class="fsize4">E</span><span class="fsize5">R</span>
                        <span class="fsize6">U</span><span class="fsize7">P</span><span class="fsize8">!</span>
                    </h1>
                    <h2 class="text-dark pt-0 negativeTopMargin" style="font-size: 3rem;"><small class="text-muted">with</small> <strong class="font-weight-bold">SaaS</strong>sy Cloud</a></h2>
                </div>
                <div class="col-md-7">

                </div>
            </div>
        </div>
    </section>
@endsection