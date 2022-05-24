import Item from "./partial/Item";
import './../styles/relativeitem.scss'
const Relativeitem = ()=>{
    return(
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
    )
}
export default Relativeitem;