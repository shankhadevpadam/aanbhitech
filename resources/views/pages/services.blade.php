@extends('layouts.master')

@section('title', 'Aanbhi | Services')

@section('bodyClass', 'page-pro');

@section('content')
	<main class="content-area">

        <section class="blockOuter">
            <div class="blockInner-lg">
                <div id="showcase" class="showcase page d-flex align-items-center">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-7">
                                <div class="block left">
                                    <h1>Web development</h1>
                                    <p>Your Partner for Software Innovation</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="scrollSec">
                        <a href="#scrollTo"><span></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="scrollTo" class="blockOuter">
            
            <div id="entry-main" class="blockInner service">
                <div class="container">

                    <div class="entry-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                          </nav>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="entry-content">
                                <article>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                                        of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
                                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </article>
                            </div>
                            <div class="new-tab">
                                <a class="btn btn-default btn-lg" href="{{ url('portfolio') }}" role="button">View our works</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="entry-footer">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <i class="lnr lnr-cog"></i>
                                </div>
                                <h3>Web Design & UX</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s</p>
                                <span class="count">01</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <i class="lnr lnr-cloud"></i>
                                </div>
                                <h3>Web Design & UX</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s</p>
                                <span class="count">02</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <i class="lnr lnr-diamond"></i>
                                </div>
                                <h3>Web Design & UX</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s</p>
                                <span class="count">03</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <i class="lnr lnr-rocket"></i>
                                </div>
                                <h3>Web Design & UX</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s</p>
                                <span class="count">04</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <i class="lnr lnr-laptop"></i>
                                </div>
                                <h3>Web Design & UX</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s</p>
                                <span class="count">05</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <i class="lnr lnr-cog"></i>
                                </div>
                                <h3>Web Design & UX</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s</p>
                                <span class="count">06</span>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

    </main>
@endsection