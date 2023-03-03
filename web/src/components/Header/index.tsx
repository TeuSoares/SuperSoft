import { Link } from "react-router-dom";
import logo from "../../../public/logo-azul.svg";
import { Container, Items } from "./styles";

const Header = () => {
    return ( 
        <Container>
            <Items>
                <img src={logo} alt="SuperSoft " />
                <ul>
                    <li>
                        <Link to="/">Dashboard</Link>
                    </li>
                    <li>
                        <Link to="/register">Cadastro</Link>
                    </li>
                </ul>
            </Items>
        </Container>
    );
}
 
export default Header;