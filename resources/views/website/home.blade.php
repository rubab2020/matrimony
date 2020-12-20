@extends('layouts.web')

@section('content')
<style type="text/css">
/*body {
    background: lightgray;
}*/

/*.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}

.navbar-default .navbar-nav #user-profile {
    height: 50px;
    padding-top: 15px;
    padding-left: 58px;
}

.navbar-default .navbar-nav #user-profile img {
    height: 45px;
    width: 45px;
    position: absolute;
    top: 2px;
    left: 8px;
    padding: 1px;
}*/

#wrapper {
	margin-top: -20px;
    /*padding-top: 50px;*/
    padding-left: 0;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 225px;
    }
}

@media (min-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 225px;
    }
}

#sidebar-wrapper {
    border-right: 1px solid #e7e7e7;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 225px;
    width: 0;
    height: 100%;
    margin-left: -225px;
    overflow-y: auto;
    background: #f8f8f8;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

#sidebar-wrapper .sidebar-nav {
    position: absolute;
    top: 0;
    width: 225px;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}

#sidebar-wrapper .sidebar-nav li {
    text-indent: 0;
    line-height: 45px;
}

#sidebar-wrapper .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #428bca;
}

.sidebar-nav li:first-child a {
    background: #f4623a !important;
    color: #fff !important;
}

#sidebar-wrapper .sidebar-nav li a .sidebar-icon {
    width: 45px;
    height: 45px;
    font-size: 14px;
    padding: 15px 2px;
    display: inline-block;
    text-indent: 7px;
    margin-right: 10px;
    color: #fff;
    float: left;
}

#sidebar-wrapper .sidebar-nav li a .caret {
  position: absolute;
  right: 23px;
  top: auto;
  margin-top: 20px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse {
    list-style: none;
    -moz-padding-start: 0;
    -webkit-padding-start: 0;
    -khtml-padding-start: 0;
    -o-padding-start: 0;
    padding-start: 0;
    padding: 0;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
    margin-right: 10px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
    text-indent: 15px;
}

@media (max-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 45px;
    }
    #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
        position: fixed;
        left: 45px;
        margin-top: -45px;
        z-index: 1000;
        width: 200px;
        height: 0;
    }
}

.sidebar-nav li:first-child a {
    background: #f4623a !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(2) a {
    background: #ef8669 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(3) a {
    background: #f4623a !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(4) a {
    background: #ef8669 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(5) a {
    background: #f4623a !important;
    color: #fff !important;
}
</style>

<style type="text/css">
	.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>

<div class="page-content">
	<!-- <div class="container"> -->
		<!-- Welcome {{ Auth::user()->name }} -->
	<!-- </div> -->

	<div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-user-lock"></i></span>
                            <span class="sidebar-title">Unlocked Profiles</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Short List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-cogs"></i></span>
                            <span class="sidebar-title">Settings</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main" style="padding: 20px; height: 68vh">
        	<h3>Home</h3>
					<!-- breadcrumb  -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
							<li class="breadcrumb-item active" aria-current="page">Home</li>
						</ol>
					</nav>

					<div class="container">
				    <div class="row">
				    <div class="col-md-3">
				      <div class="card-counter primary">
				        <i class="fa fa-star"></i>
				        <span class="count-numbers">12</span>
				        <span class="count-name">Shortlisted Profiles</span>
				      </div>
				    </div>

				    <div class="col-md-3">
				      <div class="card-counter info">
				        <i class="fa fa-circle-notch"></i>
				        <span class="count-numbers">35</span>
				        <span class="count-name">Pending Profiles</span>
				      </div>
				    </div>

				    <div class="col-md-3">
				      <div class="card-counter success">
				        <i class="fa fa-check"></i>
				        <span class="count-numbers">6875</span>
				        <span class="count-name">Accepted Profiles</span>
				      </div>
				    </div>

				    <div class="col-md-3">
				      <div class="card-counter danger">
				        <i class="fa fa-times"></i>
				        <span class="count-numbers">599</span>
				        <span class="count-name">Rejected Profiles</span>
				      </div>
				    </div>
				  </div>
        </main>
    </div> 
</div>