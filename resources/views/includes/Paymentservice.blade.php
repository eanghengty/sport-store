import '../styles/payment.css'
import alipay from './../images/Payment/alipay.png'
import jbclogo from './../images/Payment/jbclogo.png'
import mastercard from './../images/Payment/mastercard.png'
import visa from './../images/Payment/visa.png'
import wing from './../images/Payment/wing.png'
const Paymentservice = () =>{
    return(
        <div className="payment-div-1">
            <div className="payment-div">
                <img src="{{asset('/images/Payment/alipay.png')}}" alt="paymentservice" />
            </div>
            <div className="payment-div">
                <img src="{{asset('/images/Payment/jbclogo.png')}}" alt="paymentservice" />
            </div>
            <div className="payment-div">
                <img src="{{asset('/images/Payment/mastercard.png')}}" alt="paymentservice" />
            </div>
            <div className="payment-div">
                <img src="{{asset('/images/Payment/visa.png')}}" alt="paymentservice" />
            </div>
            <div className="payment-div">
                <img src="{{asset('/images/Payment/wing.png')}}" alt="paymentservice" />
            </div>
        </div>
    )
}
export default Paymentservice;