@extends('frontend.templates.default')
@section('title','Contact Us')
@section('main-container')
<div class="">
        
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
              <h2 class="display-5 fw-bold mb-5">Drop us a line or give us a call.</h2>
              <h4 class="fw-bold">Address</h4>
              <p class="text-muted mb-5">P.O. Box # Tarpon Springs, FL 34689</p>
              <h4 class="fw-bold">Contact Us</h4>
              <p class="text-muted mb-1">hello@warrantycompany.review</p>
              <p class="text-muted mb-0">+1-234-567-8901</p>
            </div>
            <div class="col-12 col-lg-6">
              <form action="#">
                <input class="form-control mb-3" type="text" placeholder="Name">
                <input class="form-control mb-3" type="email" placeholder="E-mail">
                <textarea class="form-control mb-3" name="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
                <button class="btn btn-primary w-100">Contact Us</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    @endsection