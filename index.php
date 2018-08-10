<html>

<head>
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="scripts/index.js"></script>
</head>

<body>
    <!-- Gey horizontal navigation bar -->
    <div class="navbar navbar-expand-md navbar-fixed-top bg-dark navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Infinity Project </a>
            <!-- Collapsibble Navbar Button -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation bar links -->
            <div class="collapse navbar-collapse " id="collapseibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Projects
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Week One </a>
                            <a class="dropdown-item" href="#">Week Two</a>
                            <a class="dropdown-item" href="#">Week Three</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account Settings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress" style="height: 0.6%">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
            aria-valuemax="100" style="width: 75%"></div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Week One</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Coins</a>
            </li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="alert alert-info alert-dismissable fade-show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Hey, </strong> Time remaining to complete this project
            <strong>
                <script> timer(); getCoins()</script> </strong>
        </div>
        <!-- <div> <script>timer()</script></div> -->
        <div class="container-fluid inner-container">

            <div class="modal fade" id="coinModal" tabindex="-1" role="dialog" aria-labelledby="#coinModalTitle" aria-hidden="True">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <h4 class="modal-title text-center" id=coinModalTitle> Add Your Awesome Coin! 😎 </h4>
                            <form class="coin-form pt-1">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="form-group col-md-10">
                                        <input type="text" id="coinName" class="form-control" placeholder="Coin Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="form-group col-md-10">
                                        <input type="text" id="coinValue" class="form-control" placeholder="Coin Value (USD)">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="form-group col-md-10">
                                        <textarea id="coinDescription" class="form-control" placeholder="Coin Description"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-success" onclick="submit()">Add Coin</button>
                            <button class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid card-wrapper">
            <div class="card-left-side">
                <span class=".sr-only"> &nbsp;</span>

                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#coinModal">Add Coin</button>

            </div>
            <div class="card-right-side">
                <span class=".sr-only"> &nbsp;</span>
            </div>
            <div class="cards-container">
                <div class="card border-info mt-3 mb-3 ml-2 d-inline-block" style="width: 20rem; max-width: 20rem;">
                        
                    <div class="card-body" id="card-body">
                        <img class="card-img-top " width="100%" src="http://www.coinmarketrankings.com/wp-content/uploads/2018/01/finance-3058329_1280-1600x832.jpg"
                            alt="card1 image">

                        <div class="card-text" id="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam,
                        </div>

                        <div class="circle m-2">
                            <a href="">
                                <i class="fab fa-readme" style="color: white; padding: 1.5px"></i>
                            </a>
                        </div>

                    </div>
                    <div class="card-footer bg-info">
                        <div class="text-center">
                            BitCoin : 10000 USD
                        </div>
                    </div>
                </div>

                <div class="card border-secondary mt-3 mb-3 ml-2 d-inline-block" style="width: 20rem; max-width: 20rem;">
                    <div class="card-body">
                        <img class="card-img-top " width="100%" src="http://www.coinmarketrankings.com/wp-content/uploads/2018/01/finance-3058329_1280-1600x832.jpg"
                            alt="card1 image">

                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam,
                        </div>

                        <div class="circle m-2">
                            <a href="">
                                <i class="fab fa-readme" style="color: white; padding: 1.5px"></i>
                            </a>
                        </div>

                    </div>
                    <div class="card-footer bg-secondary">
                        <div class="text-center">
                            BitCoin : 10000 USD
                        </div>
                    </div>
                </div>
                <div class="card border-info mt-3 mb-3 ml-2 d-inline-block" style="width: 20rem; max-width: 20rem;">
                    <div class="card-body">
                        <img class="card-img-top " width="100%" src="http://www.coinmarketrankings.com/wp-content/uploads/2018/01/finance-3058329_1280-1600x832.jpg"
                            alt="card1 image">

                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam,
                        </div>

                        <div class="circle m-2">
                            <a href="">
                                <i class="fab fa-readme" style="color: white; padding: 1.5px"></i>
                            </a>
                        </div>

                    </div>
                    <div class="card-footer bg-info">
                        <div class="text-center">
                            BitCoin : 10000 USD
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script type="text/javascript">

</script>

</html>