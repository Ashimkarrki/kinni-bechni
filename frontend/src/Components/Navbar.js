import React from "react";
import { Link } from "react-router-dom";
import { BiSearchAlt } from "react-icons/bi";
const Navbar = () => {
  return (
    <nav className="navbar">
      <h3 className="navbar__child">
        <Link className="link" to="/">
          Logo
        </Link>
      </h3>

      <div className="icon-wrapper   navbar__child--center">
        <BiSearchAlt className="register__icons" />
        <input
          className="search-bar "
          type="text"
          placeholder="Search Anything"
        />
      </div>
      <h3 className="navbar__child">
        <Link className="link" to="/login">
          Log In
        </Link>
      </h3>
    </nav>
  );
};

export default Navbar;
