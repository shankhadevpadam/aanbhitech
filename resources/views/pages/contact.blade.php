@extends('layouts.master')

@section('bodyClass', 'page-default')

@section('title', 'Aanbhi | Contact')

@section('content')
	
	<main class="content-area">

        <section class="blockOuter">
            
            <div id="entry-main" class="blockInner">
                <div class="container">

                    <div class="entry-header">
                        <h1>Contact us</h1>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="entry-content">
                                <form>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Name*</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Email*</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" id="message" rows="3"></textarea>
                                      </div>
                                    <div class="form-group">
                                      <label for="inputAddress">Address*</label>
                                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                      </div>
                                      <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                          <option selected>Choose...</option>
                                          <option>...</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                          Check me out
                                        </label>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                  </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
            
@endsection