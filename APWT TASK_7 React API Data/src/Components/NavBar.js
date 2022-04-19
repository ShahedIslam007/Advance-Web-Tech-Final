import React from 'react';
import { Link } from 'react-router-dom';

const NavBar = () => {
    return (
        <div style={{ marginBottom: "57px" }}>
            <nav className="navbar navbar-expand-lg  navbar-light fixed-top" style={{ background: "blue" }}>
                <div className="container-fluid container">
                    <h3 className="text-white">Grocery Delivery Website</h3>
                    <div className="navbar-nav font-weight-bold ms-auto ">
                        <Link className="nav-link px-3 text-white fw-bold" to="/">Home</Link>
                        <Link className="nav-link px-3 text-white fw-bold" to="/register">Register</Link>
                        <Link className="nav-link px-3 text-white fw-bold" to="/customerList">Customer List</Link>
                        <Link className="nav-link px-3 text-white fw-bold" to="/signIn">Login</Link>
                    </div>
                </div>
            </nav>
        </div>
    );
};
export default NavBar;