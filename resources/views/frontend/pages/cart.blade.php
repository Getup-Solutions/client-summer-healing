@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Cart')
@section('meta_keyword', 'Cart')
@section('meta_description', 'Cart')
<!-- PAGE HEADING START -->
<section class="about-banner position-relative overflow-hidden">
    <div class="content d-flex align-items-center justify-content-center">
       <div class="container-fluid w-100">
          <div class="row">
             <div class="col-12 text-center mt-3 mt-sm-0">
                <h1 class="lg-heading font-weight-700 text-uppercase mt-5 mt-sm-0" data-sal="slide-up"
                   style="--sal-duration: 1s">
                   about
                </h1>
             </div>
          </div>
       </div>
    </div>

 </section>
<section class="spacing-150" id="cart_main_page">
    <div class="container">
        <h2>CART</h2>
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                {{-- @dd(session('cart')); --}}
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        {{-- @dd($details['price']); --}}
                        
                        
                        @php 
                        $userSubscription[0] = "";
                        if(auth()->check()) { $user = auth()->user()->id; 
                            $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                            if((int)$userSubscription[0] == $details['subscription']){
                                $total = 0;
                            }
                            else{
                                $total += (int)$details['price'] * $details['quantity'];
                            }
                        }
                        
                        @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs">
                                        <img src="{{ url("/backend/images/courses_images") }}/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/>
                                    </div>
                                    <div class="col-sm-9" style="align-self: center;">
                                        <h4 class="nomargin" style="margin-left:4px;">
                                            {{ $details['title'] }} 
                                            <span style="font-size:14px;">
                                            {{$details['coursetype'] == "ondemand" ? "(On Demand)" : "(Course)"}}
                                            </span>
                                            @if(auth()->check())
                                                @php
                                                    $user = auth()->user()->id;
                                                    $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                                    $userSubscription_name = App\Models\Adminsubscription::where('id', $userSubscription[0])->first();
                                                    //@dd($userSubscription_name->title)
                                                @endphp
                                                @if($details['subscription'] == $userSubscription[0])
                                                    <div class="cartsubscriptionshow">
                                                        {{$userSubscription_name->title}}
                                                    </div>
                                                @endif
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                            </td>
                            @php
                            $userSubscription[0] = "";
                            if(auth()->check()){
                                $user = auth()->user()->id;
                                $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                }
                            @endphp
                           

                            @if($userSubscription[0] == $details['subscription'])
                            <td data-th="Price">$0</td>
                            @else
                            <td data-th="Price">${{ $details['price'] }}</td>
                            @endif

                            <td data-th="Quantity">
                                <input type="number" min="1" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                            </td>
                            @if($userSubscription[0] == $details['subscription'])
                            <td data-th="Subtotal" class="text-center">$0</td>
                            @else
                            <td data-th="Subtotal" class="text-center">${{ (int)$details['price'] * $details['quantity'] }}</td>
                            @endif
                            <td class="actions" data-th="">
                                <button class="btn btn-sm remove-from-cart">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <div id="cart_action_btnz">
                            <a href="{{ url('/') }}" class="btn"><i class="fa fa-angle-left"></i>Continue with courses</a>
                            <a href="{{ route('page.checkout') }}" class="btn">Checkout<i class="fa fa-angle-right"></i></a>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
</div>
</section>

@endsection


@section('script')

<style>

.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}
.thumbnail img {
    width: 80%;
}
.thumbnail .caption{
    margin: 7px;
}
.main-section{
    background-color: #F8F8F8;
}
.dropdown{
    float:right;
    padding-right: 30px;
}
.btn{
    border:0px;
    margin:10px 0px;
    box-shadow:none !important;
}
.dropdown .dropdown-menu{
    padding:20px;
    top:30px !important;
    width:350px !important;
    left:-110px !important;
    box-shadow:0px 5px 30px black;
}
.total-header-section{
    border-bottom:1px solid #d2d2d2;
}
.total-section p{   
    margin-bottom:20px;
}
.cart-detail{
    padding:15px 0px;
}
.cart-detail-img img{
    width:100%;
    height:100%;
    padding-left:15px;
}
.cart-detail .price{
    font-size:12px;
    margin-right:10px;
    font-weight:500;
}
.cart-detail .count{
    color:#C2C2DC;
}
.checkout{
    border-top:1px solid #d2d2d2;
    padding-top: 15px;
}
.checkout .btn-primary{
    border-radius:50px;
    height:50px;
}
.dropdown-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:50px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}
.cartsubscriptionshow {
  font-size: 14px;
  background: indianred;
  text-align: center;
  position: absolute;
  padding: 2px 11px;
  margin-top: 2px;
  color: #fff;
}
</style>

<script type="text/javascript">

    $(".update-cart").change(function (e) {

        e.preventDefault();

  

        var ele = $(this);

  

        $.ajax({

            url: '{{ route('update.cart') }}',

            method: "patch",

            data: {

                _token: '{{ csrf_token() }}', 

                id: ele.parents("tr").attr("data-id"), 

                quantity: ele.parents("tr").find(".quantity").val()

            },

            success: function (response) {

               window.location.reload();

            }

        });

    });

  

    $(".remove-from-cart").click(function (e) {

        e.preventDefault();

  

        var ele = $(this);

  

        if(confirm("Are you sure want to remove?")) {

            $.ajax({

                url: '{{ route('remove.from.cart') }}',

                method: "DELETE",

                data: {

                    _token: '{{ csrf_token() }}', 

                    id: ele.parents("tr").attr("data-id")

                },

                success: function (response) {

                    window.location.reload();

                }

            });

        }

    });

  

</script>

@endsection