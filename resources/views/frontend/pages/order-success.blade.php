@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Order was successful')

  <!-- PAYMENT SUCCESS START -->
  <section class="set-top-spacing payment-success spacing-100" id="success_order" data-sal="slide-up" style="--sal-duration: 1s">
    <div class="container-fluid text-center text-xl-start">
        <div class="row">
            <div class="col-12 text-center">
                <div class="rounded-icon mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path fill="#FDC442"
                            d="M6.174 12.626 2.032 8.484a1.189 1.189 0 0 0-1.683 0 1.189 1.189 0 0 0 0 1.683l4.99 4.99a1.189 1.189 0 0 0 1.683 0L19.65 2.526a1.189 1.189 0 0 0 0-1.683 1.189 1.189 0 0 0-1.683 0L6.174 12.626Z" />
                    </svg>
                </div>
                <h1 class="display-3 text-white text-center text-uppercase font-weight-700">Your order has been placed successfully!</h1>
                <a href="{{ route('user.myaccount') }}" class="btn btn-primary d-inline-flex mx-auto mt-4">My account</a>
            </div>
        </div>
    </div>
</section>
<!-- PAYMENT SUCCESS END -->


@endsection


@section('script')

@endsection


@section('style')

@endsection