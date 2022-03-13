
@extends('layouts.user')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Keep in touch with us</h6>
            <h2>Feel free to send us a message about your needs</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content" style="padding: 40px 0px;">
            <div class="row">
              <div class="col-lg-12 align-self-center">
                <form id="contact" method="POST" action="{{ route('home.bkashstore') }}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                        <input type="" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label>name</label>
                            <input  type="name" class="form-control" name="name" id="name"  value="{{ Auth::user()->name }}" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Enter email">
                        </div> 
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="number" name="contact_no" id="contact_no" placeholder="Contact Number" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="transaction_id" id="address"  placeholder="Transaction Id" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i> Hire</button>
                      </fieldset>
                    </div>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection