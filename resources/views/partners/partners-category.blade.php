<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>AMZ One Step Partners</title>
	<meta name='description' content="AMZ One Step Partners">
	<meta name='keywords' content="">
	<link rel="canonical" href="https://www.amzonestep.com/partners">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<meta name='viewport' content="width=device-width, initial-scale=1">
	<meta name='csrf-token' content="j7BTwGjmRvFUUCeMnIKluZjoxqPDzsg06zAZIhAv">
	<link rel="shortcut icon" href="https://www.amzonestep.com/site/images/amz-fav-icon.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" type=text/css media="print" onload="this.media='all'">
	<link rel="stylesheet" href="{{asset('css/site.min.css')}}" onload="this.media='all'" media="all">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}" onload="this.media='all'" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
</head>

<body>

	<script>
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if(document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
			document.getElementById("header").style.backgroundColor = "black";
		} else {
			document.getElementById("header").style.backgroundColor = "transparent";
		}
	}
	</script>

<style>
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

    .card {
        border: none;
        box-shadow: 0 0 15px 1px #0000000f;
        border-radius: 20px;
    }


    .card-title {
        margin-bottom: 0.5rem;
    }
    .post-categories {
        list-style: none;
        margin: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: 0;
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


</style>

<!-- banner -->
<section class="photography-banner-fine">
    <div class="text-left">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-6 px-5 my-auto">
                    <h1 class="banner-text text-white">
                        <strong>AMZ One Step Partners</strong><br>
                    </h1>
                    <p class="lead text-white">Browse through our list of trusted experts and get an ideal match for your business needs.</p>

                </div>
                <div class="col-md-6 col-md-6 p-0">
                    <img src="https://www.amzonestep.com/new/img/partners-banner.webp" />

                </div>
            </div>
        </div>

    </div>
</section>



<section class="mt-5 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row justify-content-center pr-0 pl-0">
                   @foreach($partners as $partner)
                 <div class="col-sm-6 col-xl-3 px-lg-1 m-2">
                    <div class="card p-3">
                        <div class="card-body">
                            <a href="/partners/{{ $partner->partner_company_name }}">

                                <img src="/partners-logo/{{ $partner->partner_company_logo }}" class="img-responsive" width="150" height="150" />
                                <h4 class="card-title pt-2 fw-bold">{{ $partner->partner_company_name }}</h4>
                                <p class="card-text mt-0 mb-1-5">{{ Str::limit($partner->partner_company_description1,150, ' ...') }}</p>
                                <div class="main-category mt-3">
                                    <ul class="post-categories">
                                        <li>
                                            <a href="/partners/category/{{ $partner->partner_company_tag1 }}">{{ $partner->partner_company_tag1 }}</a>
                                        </li>
                                        <li>
                                            <a href="/partners/category/{{ $partner->partner_company_tag2 }}">{{ $partner->partner_company_tag2 }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>

                  @endforeach
                </div>
            </div>


    <div class="col-lg-3 mt-3 px-5 mb-3 order-first order-md-last">
        <div class="sidebar position-sticky mt-4">
            <h5 class="bold text-dark mb-2">Categories:</h5>
            <div class="tab-content mt-4">
                <div class="tab-pane active" id="categories">
                    @foreach($partner_tags->unique('partner_company_tag1') as $partner_tag)
                        <a href="/partners/category/{{ $partner_tag->partner_company_tag1 }}">{{ $partner_tag->partner_company_tag1 }}</a>
                    @endforeach

                    <a href="/partners/category/Amazon Course">Amazon Course</a>
                    <a href="/partners/category/Shipping Service">Shipping Service</a>
                    <a href="/partners/category/Translations Service">Translations Service</a>
                    <a href="/partners/category/PPC Software">PPC Software</a>
                    <a href="/partners/category/PPC Service">PPC Service</a>
                    <a href="/partners/category/Email Marketing">Email Marketing</a>
                    <a href="/partners/category/Legal Services">Legal Services</a>
                    <a href="/partners/category/Account suspensions Services">Account suspensions Services</a>
                    <a href="/partners/category/Reimbursement Software">Reimbursement Software</a>
                    <a href="/partners/category/Profit Calculator Software">Profit Calculator Software</a>
                    <a href="/partners/category/Financial Services">Financial Services</a>
                    <a href="/partners/category/Accounting Service">Accounting Service</a>
                    <a href="/partners/category/Miscellaneous Services">Miscellaneous Services</a>

                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</section>




</body>

</html>