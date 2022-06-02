import './../styles/brand.css'
import fansport from './../images/Brands/fansport.png'
import FBT from './../images/Brands/FBT.png'
import Forward from './../images/Brands/Forward.png'
import NT from './../images/Brands/NT.png'
const Brand = () =>{
    return(
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
    )
}
export default Brand;