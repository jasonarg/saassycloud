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
                        <th scope="col" class="px-5">
                            <h5 class="productTitle text-dark mt-5"><strong class="font-weight-bold">SaaS</strong>sy</h5>
                            <h5 class="productTitle">$5</h5>
                            <p class="text-muted font-weight-normal">Per user, per month, billed annually.
                                <br>$7 billed monthly
                            </p>
                            <button class="btn btn-lg btn-info px-5">Start with SaaSsy</button>
                            <hr class="text-muted m-5">
                            <p class="text-muted font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat, soluta eius, harum.</p>
                            <a href="" class="text-info"><small><u>Learn more</u></small></a>
                        </th>
                        <th scope="col" class="px-5 bg-light">
                            <h5 class="productTitle text-dark"><strong>SaaS</strong>sier</h5>
                            <h5 class="productTitle">$9</h5>
                            <p class="text-muted font-weight-normal">Per user, per month, billed annually.
                                <br>$11 billed monthly
                            </p>
                            <button class="btn btn-lg btn-info px-5">Getting SaaSsier</button>
                            <hr class="text-muted m-5">
                            <p class="text-muted font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat, soluta eius, harum.</p>
                            <a href="" class="text-info"><small><u>Learn more</u></small></a>
                        </th>
                        <th scope="col" class="px-5">
                            <h5 class="productTitle text-dark"><strong>SaaS</strong>siest</h5>
                            <h5 class="productTitle">$35</h5>
                            <p class="text-muted font-weight-normal">Per user, per month, billed annually.
                                <br>$45 billed monthly
                            </p>
                            <button class="btn btn-lg btn-info px-5">Be the SaaSsiest</button>
                            <hr class="text-muted m-5">
                            <p class="text-muted font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat, soluta eius, harum.</p>
                            <a href="" class="text-info font-weight-normal"><small><u>Learn more</u></small></a>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="table-border">
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Mushrooms
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Super Mushroom
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Super Mushroom" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">1up Mushroom
                            <a tabindex="0" class="fa fa-question-circle text-info" title="1up Mushroom" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Mini Mushroom
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Big Mushroom
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Mega Mushroom
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>200 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Flowers
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Fire Flower
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Ice Flower
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Cloud Flower
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Stars
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Super Star
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Rainbow Star
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>300 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Mega Star
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>200 per month</td>
                        <td class="bg-light">Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Gear
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Mario Cap
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>50 per month</td>
                        <td class="bg-light">300 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Luigi Cap
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>50 per month</td>
                        <td class="bg-light">300 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Metal Cap
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td>50 per month</td>
                        <td class="bg-light">300 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Outfits
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Frog Suit
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light">50 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Penguin Suit
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light">50 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Raccoon Suit
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light">50 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Tanooki Suit
                            <a tabindex="0" class="fa fa-question-circle text-info" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light">50 Per Month</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Tools
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Hammer
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Super Pickaxe
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Spin Drill
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="font-weight-bold tableDivider">
                            Allies
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Yoshi
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Yellow Yoshi
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Red Yoshi
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Toad
                            <a tabindex="0" class="fa fa-question-circle text-info" title="Yoshi" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></a>
                        </th>
                        <td></td>
                        <td class="bg-light"></td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td class="py-5">
                            <a href="/signup/start" class="btn btn-lg btn-info px-5" role="button">Get SaaSsy</a>
                        </td>
                        <td class="bg-light py-5">
                            <a href="/signup/start" class="btn btn-lg btn-info px-5" role="button">Get SaaSsier</a>
                        </td>
                        <td class="py-5">
                            <a href="signup/start" class="btn btn-lg btn-info px-5" role="button">Be the SaaSsiest</a>
                        </td>
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