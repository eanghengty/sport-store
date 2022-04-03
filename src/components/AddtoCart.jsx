import Footer from "../includes/Footer";
import Header from "../includes/Header";


const AddtoCart = () =>{
    return (
        <div>
            <Header></Header>

            {/* <-- Body-- */}
            
        <div>
             {/* Body Header */}
            <div>
                <div>
                    <h2>សម្ភារៈ</h2>
                </div>
                <div>
                    <h2>ចំនួន</h2>
                </div>
                <div>
                    <h2>សរុប</h2>
                </div>
            </div>

            {/* Body Quatity  */}
            <div>
                {/* Product list 1*/}
                <div>

                    <div>
                        <div>
                            <img src="" alt="" />
                        </div>

                        <div>
                            <h3>
                                អាវក្នុងដីក្លឹបគិរីវង់សុខសែនជ័យ
                            </h3>
                        
                            <h4>
                                តម្លៃ ៦០០០០រៀល
                            </h4>

                            <h5>
                                លុបចោល
                            </h5>
                        </div>
                    </div>

                    <div>
                        <h3>

                        </h3>
                    </div>

                    <div>
                        <h3>៦០០០០រៀល </h3>
                    </div>
                </div>

                {/* Product list 2*/}
                <div>

                    <div>
                        <div>
                            <img src="" alt="" />
                        </div>

                        <div>
                            <h3>
                                អាវស្ត្រីក្លឹបបឹងកេត
                            </h3>
                        
                            <h4>
                                តម្លៃ ១០០០០០រៀល
                            </h4>

                            <h5>
                                លុបចោល
                            </h5>
                        </div>
                    </div>

                    <div>
                        <h3>

                        </h3>
                    </div>

                    <div>
                        <h3>១០០០០០រៀល </h3>
                    </div>
                </div>

            </div>

        </div>
            <Footer></Footer>
        </div>
    )
}
export default AddtoCart;