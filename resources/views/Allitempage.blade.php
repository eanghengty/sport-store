@extends('layouts.main')
@section('content')
<div>
  
    <div class="allitempage2">
        <div class="allitempage3">
        <div class="allitempage4">
        <div class="allitempagelist"></div>
            <div class="allitempagelist list1">
               <div class="allitemicon2"><i class="fa fa-circle allitempageicon" aria-hidden="true"></i></div> 
               <div class="allitemicon3"><p>សម្ភារ:ទាំងអស់</p></div>
            </div>
            <div class="allitempagelist list2">
            <div class="allitemicon2"><i class="fa fa-circle allitempageicon" aria-hidden="true"></i></div>  
               <div class="allitemicon3"><p>បុរស</p></div>
            </div>
            <div class="allitempagelist list3"> 
            <div class="allitemicon2"><i class="fa fa-circle allitempageicon" aria-hidden="true"></i></div> 
               <div class="allitemicon3"><p>នារី</p></div>
            </div>
            <div class="allitempagelist list4">
            <div class="allitemicon2"><i class="fa fa-circle allitempageicon" aria-hidden="true"></i></div> 
               ,<div class="allitemicon3"><p>កុមារ</p></div>
            </div>
            <div class="allitempagelist list5">
            <div class="allitemicon2"><i class="fa fa-circle allitempageicon" aria-hidden="true"></i></div> 
               <div class="allitemicon3"><p>សម្ភារ:ផ្សេងៗ</p></div>
            </div>
            <div class="allitempagelist list6">
            <div class="allitemicon2"><i class="fa fa-circle allitempageicon" aria-hidden="true"></i></div>  
               <div class="allitemicon3"><p>លេងឃ្លាំង</p></div>
            </div>
        </div>
        <div class="allitempage5">
            <div class="allitempage6">
                <p>ក្លឹប​ ណាហ្គាវើល</p>
                <div class="allitempagelogo"><img src="{{asset('/images/Clubs/NAGA.png')}}" alt="logo" /></div>
                <p>NAGAWORLD FC</p>
            </div>
            <div class="allitempage7">
                <img src="{{asset('/images/Banner/nagacover.jpg')}}" alt="banner2" />
            </div>
            <div class="allitempage8">
                <div>
                    <p class="allitempage8p">សម្ភារ:ទាំងអស់</p>
                </div>
                <div class="allitempage9">
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
        </div>
        <div class="allitempage1">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
        </div>
    </div>
    
</div>
@endsection