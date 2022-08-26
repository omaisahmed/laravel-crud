<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMZ One Step Partners</title>
    <meta name='csrf-token' content="{{ csrf_token() }}"/>
    <meta name="description" content="AMZ One Step Partners">
    <meta name="keywords" content="">
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" href="https://www.amzonestep.com/site/images/amz-fav-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css?ver=5.9.1">--}}
    <link rel="stylesheet" href="{{asset('css/site.min.css')}}" onload="this.media='all'" media="all">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}" onload="this.media='all'" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        .navbar-expand-lg {
            justify-content: space-between !important;
        }
        .bg-dark {
            background-color: black !important;
        }
        .navbar-collapse {
            flex-grow: 0;
        }
        .nav-link{
            color: white !important;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }
        }
        .photography-banner-fine {
            width: 100%;
            height: auto;
            padding-top: 160px;
            padding-bottom: 60px;
            background-position: left center;
            top: 0;
            background-size: cover;
            background-color: #070d14;
            position: relative;
        }
        a {
            color: inherit !important;
        }
        section.photography-banner-fine .lead {
            font-size: 24px;
        }

        .photography-banner-fine .banner-text{
            font-size: 4vw;
        }


        .lead {
            font-size: 1.25rem;
            font-weight: 400;
        }
        @media only screen and (max-width: 600px){
            .photography-banner-fine .banner-text{
                font-size: 2rem;
            }
        }

        .post-categories li {
            margin-right: 25px;
        }
        .post-categories li a {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1;
            color: #9ca1b2;
            padding: 0.5rem 0;
            text-decoration: none;
        }

        a:hover {
            text-decoration-line: none;
        }

        .search-label {
            background: #fff;
            border: 1px solid rgba(80,88,118,.35);
            box-sizing: border-box;
            border-radius: 3px;
        }
        .position-relative {
            position: relative;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.475rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #19153e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #cbcdd6;
            -webkit-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: .875em;
            color: #ff6067;
        }
        .position-absolute {
            position: absolute!important;
        }
        .position-sticky {
            position: sticky!important;
        }
        .tab-content a {
            margin-bottom: 16px!important;
            display: block!important;
            line-height: 1!important;
            text-decoration: none;
            font-style: normal!important;
            font-weight: 500!important;
            font-size: 16px!important;
            color: #9ca1b2 !important;
        }
        .tab-content a:hover{
            color: #FD7E14 !important;
        }
        .search-icon{
            right: 0;
            top: 0;
            background-color: transparent !important;
        }
        .bold{
            font-weight: bold;
        }

        .pagination{
            height: 20px !important;
            justify-content: center;
        }
        .pagination li a{
            min-height: 0px !important;
        }
        .pagination li span{
            min-height: 0px !important;
        }
        a.page-link:hover {
            background-color: #FD7E14 !important;
        }

        .edit-icon{
            font-size: 24px;
            color: #FFC720;
        }
        .del-icon{
            font-size: 24px;
            color: #F5564A;
        }
        .logo-partners{
            width: 150px;
            height: 80px;
        }
        #example_filter{
            margin-top: 2em;
        }


        section.photography-banner-fine .lead {
            font-size: 24px;
        }
        .photography-banner-fine .banner-text{
            font-size: 3.5vw;
        }

        .full-trustpilot p{
            font-weight: 600;
        }
        .title-section {
            font-size: 3rem;
            font-weight: 800;
            font-family: inherit;
        }
        .btn-orange{
            border-radius: 55px 55px 55px 55px;
            background: #FD7E14 !important;
        }
        .lead {
            font-size: 1.25rem;
            font-weight: 400;
        }
        @media only screen and (max-width: 600px){
            .photography-banner-fine .banner-text{
                font-size: 2rem;
            }
        }

        .navbar .logo-image img {
            width: 170px;
        }

        table.dataTable thead th, table.dataTable thead td {
            padding: 10px 10px !important;
        }

    </style>

</head>

<body>

<!--Header-->
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-3" href="#">
            <img src="https://www.amzonestep.com/images/logo.png" class="logo" height="70px" />
        </a>
    </nav>
</header>
<!--Header-->


    <!-- banner -->
    <section class="photography-banner-fine">
        <div class=" text-left">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 px-5 my-auto text-center">
                        <h1 class="banner-text text-white">
                            <strong>AMZ One Step Partners</strong><br>
                        </h1>
                        <p class="lead text-white">Browse our list of trusted experts to be matched with the ideal agency for your business’s needs.</p>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- banner -->


    <section class="mt-5 mb-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <a href="{{route('site.partners_directory')}}" class="btn btn-orange mx-1 px-auto"><i class="fa fa-eye"></i> View Partners</a>
                    <a href="{{route('site.partners-dashboard-add')}}" class="btn btn-orange mx-1 px-auto"><i class="fa fa-plus"></i> Add Partner</a>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        @if(Session::has('partner_deleted'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{Session::get('partner_deleted')}}
                            </div>
                        @endif
                        @if(Session::has('partner_updated'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{Session::get('partner_updated')}}
                                </div>
                        @endif
                            @if(Session::has('partner_added'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{Session::get('partner_added')}}
                                </div>
                            @endif
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Partner Company Logo</th>
                            <th>Partner Company Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partners as $partner)
                        <tr>
                            <td class="text-center">{{$partner->id}}</td>
                            <td><img src="/partners-logo/{{ $partner->partner_company_logo }}" class="img-responsive logo-partners" width="100" height="100" /></td>
                            <td>{{ $partner->partner_company_name }}</td>
                            <td class="text-center">
                                <a href="/partner/edit/{{$partner->id}}" class="px-2 my-auto"><i class="fa fa-pencil edit-icon"></i></a>
                                <a href="/partner/delete/{{$partner->id}}" class="px-2 my-auto"><i class="fa fa-trash del-icon"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('#example').DataTable();
        });
    </script>


</body>
</html>


