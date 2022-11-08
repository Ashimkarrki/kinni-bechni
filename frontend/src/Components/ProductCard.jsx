import React from "react";

const ProductCard = ({ image, name, price, stock, description, category }) => {
  return (
    <div className="productCard">
      <div className="ribbon-wrapper">
        <p className="ribbon">{category}</p>
      </div>
      <img className="productCard__image" src={image} alt="an pic" />
      <h5>{name}</h5>
      <h5>रु {price}</h5>
      <h5>{stock}(In Stock)</h5>
      <p className="productCard__description">{description}</p>
    </div>
  );
};

export default ProductCard;
