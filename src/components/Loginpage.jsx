import Authtitle from "../includes/Authtitle";
import Header from "../includes/Header";

const Loginpage = ()=>{
    return(
        
        <div>
            <Header></Header>
            <div>
                <Authtitle></Authtitle>
            </div>
            <div>
                <input type="text" placeholder="ឈ្មោះគណនី" />
            </div>
            <div>
                <input type="password" placeholder="លេខសម្ងាត់" />
            </div>
            <div>
                <button>ចូលគណនី</button>
            </div>
        </div>
        
        
    )
}
export default Loginpage;