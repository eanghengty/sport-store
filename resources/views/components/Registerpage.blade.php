import Authtitle from '../includes/Authtitle';
import Header from '../includes/Header'
const Registerpage = ()=>{
    return(
        <div>
            <Header></Header>
            <div>
                <div>
                    <img src="" alt="img" />
                </div>
                <div>
                    <Authtitle></Authtitle>
                    <div>
                        <input type="text" placeholder='ឈ្មោះគណនី' />
                    </div>
                    <div>
                        <input type="text" placeholder='លេខទូរស័ព្ទ'/>
                    </div>
                    <div>
                        <input type="text" placeholder='លេខសម្ងាត់'/>
                    </div>
                    <div>
                        <button>បង្កើតគណនី</button>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Registerpage;