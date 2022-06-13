

@extends('layouts.main')
@section('content')
        <div>
        
            <div class="customer-category__div-1">
                <div class="customer-category__div-2 customer-category-1-p">
                    <a href="#">
                    <p>បុរស</p>
                    </a>
                </div>
                <div class="customer-category__div-3 customer-category-1-p">
                    <a href="#">
                    <p>នារី</p>
                    </a>
                </div>
                <div class="customer-category__div-4 customer-category-1-p">
                    <a href="#">
                    <p>ក្មេង</p>
                    
                    </a>
                </div>
                <div class="customer-category__div-5 customer-category-1-p">
                    <a href="#">
                    <p>សម្ភារ:</p>
                    </a>
                </div>
                <div class="customer-category__div-6 customer-category-1-p">
                    <a href="#">
                    <p>លាងឃ្លាំង</p>
                    </a>
                </div>
            </div>
          
            <div class="customer-category__div-7">
            <div class="customer-category__div-8">
                <img src="{{asset('/images/Banner/bkcover.jpg')}}" alt="image" />
            </div>
            <div class="share-item__div-1">
                <div class="share-item__div-2">
                    <h2>ក្លឹបបាល់ទាត់លីគកំពូល</h2>
                </div>
            </div>


            <div class='league-div-1'>
                <div class='league-div-2'>
                    <a href="#" class='league-div-2'>
                    <div class='league-div-3'>
                        <img src="{{asset('/images/Clubs/AEU.png')}}" alt="league"></img>
                    </div>
                    </a>
                    <a href="#" class='league-div-2'>
                    <div class='league-div-3'>
                       <img src="{{asset('/images/Clubs/Army.png')}}" alt="league"></img>
                    </div>
                    </a>
                    <a href="#" class='league-div-2'>
                    <div class='league-div-3'>
                        <img src="{{asset('/images/Clubs/ATG.png')}}" alt="league"></img>
                    </div>
                    </a>
                    <a href="#" class='league-div-2'>
                    <div class='league-div-3'>
                        <img src="{{asset('/images/Clubs/BK.png')}}" alt="league"></img>
                    </div>
                    </a>
                </div>
                <div class='league-div-4'>
                    <a href="#" class='league-div-4'>
                    <div class='league-div-5'>
                        <img src="{{asset('/images/Clubs/EDC.png')}}" alt="league"></img>
                    </div>
                    </a>
                    <a href="#" class='league-div-4'>
                    <div class='league-div-5'>
                        <img src="{{asset('/images/Clubs/KSSC.png')}}" alt="league"></img>
                    </div>
                    </a>
                    <a href="#" class='league-div-4'>
                    <div class='league-div-5'>
                        <img src="{{asset('/images/Clubs/NAGA.png')}}" alt="league"></img>
                    </div>
                    </a>
                    <a href="#" class='league-div-4'>
                    <div class='league-div-5'>
                        <img src="{{asset('/images/Clubs/POLICE.png')}}" alt="league"></img>
                    </div>
                </a>
                </div>
                </div>




           
            <div class="share-item__div-1">
                <div class="share-item__div-2">
                <h2 >សម្ភារ:ពេញនិយម</h2>
                </div>
                
            </div>
            

            
        <div class="popular-item__div-3">
            @for($i=0 ; $i<8 ;$i++)
            <div class='item-div-1'>
                <a href="#">
                <div class='item-div-2'>
                    <img src="{{asset('/images/Products/bkwomen.jpg')}}" alt="item1" />
                </div>
                <div class='item-div-3'>
                    <p>អាវក្រៅ ក្លឹបភ្នំពេញក្រោន ២០២១</p>
                </div>
                <div class='item-div-4'>
                    <p>៨០,០០០រៀល</p>
                </div>
                <div class='item-div-5'>
                    <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                    <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                    <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                    <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                    <i class="fa fa-star" aria-hidden="true" class='item-star item-star-highlighted' ></i>
                </div>
                </a>
            </div>

            @endfor
        </div>




            <div class="share-item__div-1">
                <div class="share-item__div-2">
                <h2>សម្ភារ:ថ្មីៗ</h2>
                </div>
                
            </div>
            

            <div class="newitem__div-1">
                @for($i=0;$i<4;$i++)
                <div class='item-div-1'>
                  <a href="#">
                  <div class='item-div-2'>
                      <img src="{{asset('/images/Products/bkwomen.jpg')}}" alt="item1" />
                  </div>
                  <div class='item-div-3'>
                      <p>អាវក្រៅ ក្លឹបភ្នំពេញក្រោន ២០២១</p>
                  </div>
                  <div class='item-div-4'>
                      <p>៨០,០០០រៀល</p>
                  </div>
                  <div class='item-div-5'>
                      <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                      <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                      <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                      <i class="fa fa-star" aria-hidden="true" class='item-star'></i>
                      <i class="fa fa-star" aria-hidden="true" class='item-star item-star-highlighted' ></i>
                  </div>
                  </a>
              </div>
                @endfor
              </div>



            </div>
            <div class="body-section__div-1">
                <img src="{{asset('/images/Banner/Banner.png')}}" alt="banner" />
            </div>
            <div class="customer-category__div-7">
                <div class="promotion-div-1">
                    <div class="promotion-div-2">
                        <img src="{{asset('/images/Banner/promo1.jpg')}}" alt="promotion" />
                    </div>
                    <div class="promotion-div-3">
                        <img src="{{asset('/images/Banner/promo2.jpg')}}" alt="promotion" />
                    </div>
                </div>
            <div class="share-item__div-1">
                <div class="share-item__div-2 share-item__div-2-small">
                <h2>ប្រ៊េន</h2>
                </div>
            </div>
            <div class="brand-div-1">
                <div class="brand-div-2">
                    <img src="{{asset('/images/Brands/fansport.png')}}" alt="brand" />
                </div>
                <div class="brand-div-3">
                    <img src="{{asset('/images/Brands/FBT.png')}}" alt="brand" />
                </div>
                <div class="brand-div-4">
                    <img src="{{asset('/images/Brands/Forward.png')}}" alt="brand" />
                </div>
                <div class="brand-div-5">
                    <img src="{{asset('/images/Brands/NT.png')}}" alt="brand" />
                </div>
            </div>
            
            <div class = "homepage-div-1">
                <div class="homepage-div-2">
                <div class="share-item__div-1">
                    <div class="share-item__div-2 share-item__div-2-small">
                        <h2>សេវាកម្មដឹកជញ្ជូន</h2>
                    </div>
                </div>
                <div class="service-div-1">
                    <div class="service-div-2">
                        <img src="{{asset('/images/Delivery/Capitol.png')}}" alt="service" />
                    </div>
                    <div class="service-div-3">
                        <img src="{{asset('/images/Delivery/jandt.png')}}" alt="service" />
                    </div>
                    <div class="service-div-4">
                        <img src="{{asset('/images/Delivery/keryexpress.png')}}" alt="service" />
                    </div>
                    <div class="service-div-5">
                        <img src="{{asset('/images/Delivery/VET.png')}}" alt="service" />
                    </div>
                </div>
                </div>
                <div class="homepage-div-3">
                <div class="share-item__div-1">
                    <div class="share-item__div-2 share-item__div-2-small">
                        <h2>សេវាកម្មបង់ប្រាក់</h2>
                    </div>
                    
                </div>
                <div class="payment-div-1">
                    <div class="payment-div">
                        <img src="{{asset('/images/Payment/alipay.png')}}" alt="paymentservice" />
                    </div>
                    <div class="payment-div">
                        <img src="{{asset('/images/Payment/jbclogo.png')}}" alt="paymentservice" />
                    </div>
                    <div class="payment-div">
                        <img src="{{asset('/images/Payment/mastercard.png')}}" alt="paymentservice" />
                    </div>
                    <div class="payment-div">
                        <img src="{{asset('/images/Payment/visa.png')}}" alt="paymentservice" />
                    </div>
                    <div class="payment-div">
                        <img src="{{asset('/images/Payment/wing.png')}}" alt="paymentservice" />
                    </div>
                </div>
                </div>
                </div>
            </div>
           
            
        </div>

        @endsection