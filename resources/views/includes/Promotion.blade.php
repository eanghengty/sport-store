import promo1 from './../images/Banner/promo1.jpg'
import promo2 from './../images/Banner/promo2.jpg'
import './../styles/promotion.css'
const Promotion = () =>{
    return(
        <div class="promotion-div-1">
            <div class="promotion-div-2">
                <img src="{{asset('/images/Banner/promo1.jpg')}}" alt="promotion" />
            </div>
            <div class="promotion-div-3">
                <img src="{{asset('/images/Banner/promo2.jpg')}}" alt="promotion" />
            </div>
        </div>
    )
}
export default Promotion;