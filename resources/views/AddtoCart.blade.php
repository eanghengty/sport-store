
@extends('layouts.main')
@section('content')
        <div>
            <Header></Header>
            <div class="addtocart1">
            <div class="addtocart2">
                <p>សម្ភារ:</p>
                <p>ចំនួន</p>
                <p>សរុប</p>
            </div>
            <div class="addtocart10">
                <div class="cartitem1">
                    <div class="cartitem2">
                    <div class="cartitem3">
                        <img src="{{asset('images/Products/visakhafc.jpg')}}" alt="img" />
                    </div>
                    <div class="cartitem4">
                        <p>អាវក្នុងក្លឹបគីរីវង្សសែនជ័យ</p>
                        <p class="price">តម្លៃ ៦០,០០០រៀល</p>
                        <a href="">លុបចោល</a>
                    </div>
                    </div>
                    
                    <div class="cartitem5">
                        <p>-</p>
                        <p class="num">1</p>
                        <p>+</p>
                    </div>
        
                    <div class="cartitem6">
                        <p>៦០,០០០រៀល</p> 
        
                    </div>
                </div>
            </div>
            <div class="addtocart3">

                <div class="addtocart5"></div>
                <div class="addtocart4">
                <div class="addtocart6">
                <div class="addtocart7">
                    <p>សរុបរង</p>
                    <p>ទីតាំងដឹកជញ្ជូន</p>
                    <p>សេវាដឹកជញ្ជូន</p>
                    <p>តម្លៃសរុប</p>
                </div>
                <div class="addtocart8">
                    <p>សរុបរង</p>
                    <p><input type="text" placeholder="កំណត់ទីតាំង"></input></p>
                    <p>សេវាដឹកជញ្ជូន</p>
                    <p>តម្លៃសរុប</p>
                </div>
                </div>
                <div class="addtocart9">
                    <form>
                        <button type="submit">បញ្ជាទិញ</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <Footer></Footer>
        </div>
@endsection
