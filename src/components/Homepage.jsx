import Brand from "../includes/Brand";
import Footer from "../includes/Footer";
import Header from "../includes/Header";
import League from "../includes/League";
import Newitem from "../includes/Newitem";
import Paymentservice from "../includes/Paymentservice";
import Popularitem from "../includes/Popularitem";
import Promotion from "../includes/Promotion";
import Service from "../includes/Service";

const Homepage = ()=>{
    return(
        <div>
            <Header></Header>
            <div>
                <div>
                    <p>បុរស</p>
                </div>
                <div>
                    <p>នារី</p>
                </div>
                <div>
                    <p>ក្មេង</p>
                </div>
                <div>
                    <p>សម្ភារ:</p>
                </div>
                <div>
                    <p>លាងឃ្លាំង</p>
                </div>
            </div>
            <div>
                <img src="" alt="image" />
            </div>
            <div>
                <h2>ក្លឹបបាល់ទាត់លីគកំពូល</h2>
            </div>
            <League></League>
            <div>
                <h2>សម្ភារ:ពេញនិយម</h2>
            </div>
            <Popularitem></Popularitem>
            <div>
                <h2>សម្ភារ:ថ្មីៗ</h2>
            </div>
            <Newitem></Newitem>
            <div>
                <img src="" alt="banner" />
            </div>
            <Promotion></Promotion>
            <div>
                <h2>ប្រ៊េន</h2>
            </div>
            <Brand></Brand>
            <div>
                <div>
                    <div>
                        <h2>សេវាកម្មដឹកជញ្ជូន</h2>
                    </div>
                    <Service></Service>
                </div>
                <div>
                    <div>
                        <h2>សេវាកម្មបង់ប្រាក់</h2>
                    </div>
                    <Paymentservice></Paymentservice>
                </div>
            </div>
            <Footer></Footer>
            
        </div>
    )
}
export default Homepage;