import React from "react";
import Category from "../Components/Category";
import ProductPage from "../Components/ProductPage";

const Home = () => {
  return (
    <div className="home">
      <Category />
      <ProductPage />
    </div>
  );
};

export default Home;
