import logostore from "../images/logostore-color.png";
const Header = () =>{
    return(
        <div>
            <div>
                <img src={logostore} alt="logo" />
            </div>
            <div>
                <input type="text" placeholder="ស្វែងរក..." />
                <div>
                <img src="" alt="search" />
                </div>
            </div>
            <div>
                <img src="" alt="icon" />
            </div>
            <div>
                <img src="" alt="icon" />
            </div>
        </div>
    )
}
export default Header;