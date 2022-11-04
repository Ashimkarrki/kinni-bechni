import React, { useState } from "react";
import { Link } from "react-router-dom";
import { BiSearchAlt } from "react-icons/bi";
import PostProduct from "./PostProduct";
const Navbar = () => {
  const [ismodalOpen, setIsmodalOpen] = useState(false);
  return (
    <div>
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
        <h3
          className="navbar__child post__product"
          onClick={() => {
            setIsmodalOpen(true);
          }}
        >
          Post Product
        </h3>
        <h3 className="navbar__child">
          <Link className="link" to="/login">
            Log In
          </Link>
        </h3>
      </nav>
      {ismodalOpen && <PostProduct setIsmodalOpen={setIsmodalOpen} />}
    </div>
  );
};

export default Navbar;
