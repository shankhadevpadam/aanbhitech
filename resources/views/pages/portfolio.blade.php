@extends('layouts.master')

@section('bodyClass', 'page-pro')

@section('title', 'Aanbhi | Portfolio')

@section('content')
	<main class="content-area">

        <section class="blockOuter">
            <div class="blockInner-lg">
                <div id="showcase" class="showcase page d-flex align-items-center">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-7">
                                <div class="block left">
                                    <h1>What we've done so far</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <div class="btn-more">
                                        <a href="#">Send us query<span class="lnr lnr-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="scrollSec">
                        <a href="#entry-main"><span></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="scrollTo" class="blockOuter">
            <div id="entry-main" class="blockInner portfolio">
                <div class="container">

                    <div class="entry-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                          </nav>
                    </div>
                    <div class="entry-content">
                        <div class="row content flip-left">
                            <div class="col-sm-7">
                                <div class="thumb">
                                    <img src="uploads/project-3.png" alt="Image" class="rounded">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="title">Aanbhi Tech</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                            Lorem Ipsum has been the industry's standard dummy text ever. 
                                        </p>
                                        <div class="technology">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-earth"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">aanbhitech.com</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-cog"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">Wordpress cms</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-laptop-phone"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">Responsive</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-rocket"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">SEO friendly</h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn-more nav-link" href="#">
                                            <span>Visit now</span>
                                            <svg width="20" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                <rect fill="none" stroke="#fff" stroke-width="7" x="26.2" y="8.2" width="66.4" height="66.4"/>
                                                <polyline fill="none" stroke="#fff" stroke-width="7" points="73.8,74.6 73.8,91.8 7.3,91.8 7.3,25.4 26.2,25.4 "/>
                                                <polyline fill="none" stroke="#fff" stroke-width="7" points="40.6,25.4 73.8,25.4 73.8,58.6 "/>
                                                <line fill="none" stroke="#fff" stroke-width="7" x1="40.6" y1="58.6" x2="73.8" y2="25.3"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row content flip-right">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="title">Aanbhi Tech</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                            Lorem Ipsum has been the industry's standard dummy text ever. 
                                        </p>
                                        <div class="technology">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-earth"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">aanbhitech.com</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-cog"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">Laravel cms</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-laptop-phone"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">Responsive</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-rocket"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">SEO friendly</h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn-more nav-link" href="#">
                                            <span>Visit now</span>
                                            <svg width="20" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                <rect fill="none" stroke="#fff" stroke-width="7" x="26.2" y="8.2" width="66.4" height="66.4"/>
                                                <polyline fill="none" stroke="#fff" stroke-width="7" points="73.8,74.6 73.8,91.8 7.3,91.8 7.3,25.4 26.2,25.4 "/>
                                                <polyline fill="none" stroke="#fff" stroke-width="7" points="40.6,25.4 73.8,25.4 73.8,58.6 "/>
                                                <line fill="none" stroke="#fff" stroke-width="7" x1="40.6" y1="58.6" x2="73.8" y2="25.3"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="thumb">
                                    <img src="uploads/project-1.png" alt="Image" class="rounded">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row content flip-left">
                            <div class="col-sm-8">
                                <div class="thumb">
                                    <img src="uploads/project-2.png" alt="Image" class="rounded">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="title">Aanbhi Tech</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                            Lorem Ipsum has been the industry's standard dummy text ever. 
                                        </p>
                                        <div class="technology">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-earth"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">aanbhitech.com</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-cog"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">Php custom cms</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-laptop-phone"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">Responsive</h4>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="lnr lnr-rocket"></i>
                                                    </div>
                                                    <h4 class="mb-0 ml-3">SEO friendly</h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn-more nav-link" href="#">
                                            <span>Visit now</span>
                                            <svg width="20" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                <rect fill="none" stroke="#fff" stroke-width="7" x="26.2" y="8.2" width="66.4" height="66.4"/>
                                                <polyline fill="none" stroke="#fff" stroke-width="7" points="73.8,74.6 73.8,91.8 7.3,91.8 7.3,25.4 26.2,25.4 "/>
                                                <polyline fill="none" stroke="#fff" stroke-width="7" points="40.6,25.4 73.8,25.4 73.8,58.6 "/>
                                                <line fill="none" stroke="#fff" stroke-width="7" x1="40.6" y1="58.6" x2="73.8" y2="25.3"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        

    </main>
@endsection