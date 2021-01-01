import React,{Component} from "react";
import Link from "react-router-dom/modules/Link";

class Navbar extends Component{

    render() {
        return(
            <nav className="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div className="container">
                    <Link className="navbar-brand" to="/" style=" font-size: 1.5em">Dhukuti</Link>
                    <button className="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}">
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav mr-auto">
                        </ul>

                        <ul className="navbar-nav ml-auto">
                            <li className="nav-item">
                                <Link className="nav-link" to="/login" style=" font-size: 1.2em">Login</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/register"
                                   style=" font-size: 1.2em">Register</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        );
    }
}

export default Navbar;
