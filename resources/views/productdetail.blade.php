@extends('layouts.main')
@section('content')


    <div>
        
        <div class="titledetaildiv1">
            <div class="titledetaildiv2">
                <div class="titledetaildiv5">
                    <img src="{{asset('/images/'.$product->image)}}" alt="image" />
                </div>
                <div class="titledetaildiv4">
                    <div>
                        <img src="" alt="image" />
                    </div>
                    <div>
                        <img src="" alt="image" />
                    </div>
                    <div>
                        <img src="" alt="image" />
                    </div>
                    <div>
                        <img src="" alt="image" />
                    </div>
                </div>
            </div>
            <div class="titledetaildiv3">
                <div class="titledetaildiv6">
                    <a href="">ទំព័រដើម/សម្ភារ:ពេញនិយម</a>
                </div>
                <div class="titledetaildiv7">
                    <h2>{!!$product->product_name!!}</h2>
                </div>
                <div class='titledetaildiv10'>
                    <p>{!!$product->price!!}</p>
                </div>
                <div class="titledetaildiv8">
                   <p>{!!$product->color!!}</p>
                   <div class="titledetaildiv9">
                        <p class="white"></p>
                        <p class="black"></p>
                        <p class=""></p>
                        <p class=""></p>
                    </div>
                </div>
                <div class="titledetaildiv11">
                    <p>ទំហំ</p>
                    <div class='titledetaildiv12'>
                        <p>{!!$product->size!!}</p>
                    </div>
                </div>
                <div class="titledetaildiv13">
                    <p>ចំនួន</p>
                    <div class="titledetaildiv14">
                    <p>-</p>
                    <p class="amount">{!!$product->product_quantity!!}</p>
                    <p>+</p>
                    </div>
                </div>
                
                <div>
                   <h3>អំពីផលិតផល</h3>
                   <p>{!!$product->description!!}</p>
                </div>
                <div class="titledetaildiv15">
                        <a href="" class="red">បញ្ជាទិញ</a>
                        <a href="" class="blue">ដាក់ចូលកន្រ្តក</a>
                        
                    
                </div>
            </div>
            
        </div>
       
  
        
        
        <div class="relativeitem2">
            <h2>សម្ភារ:ស្រដៀង</h2>
           <div class="relativeitem1">
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
            
        

    </div>
   



@endsection