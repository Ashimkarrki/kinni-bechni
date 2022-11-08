import React from "react";
import ProductCard from "../ProductCard";
import axios from "axios";

const PostProductFinal = ({
  productDetail,
  setStep,
  url,
  category,
  imageUrl,
}) => {
  return (
    <div className="step-final">
      <p className="step-final__caption">Your product will look like this :</p>

      <div className="demo-wrapper">
        <ProductCard
          image={url}
          name={productDetail.name}
          stock={productDetail.stock}
          price={productDetail.price}
          description={productDetail.description}
          category={category}
        />
      </div>
      <button
        type="submit"
        className="step-navigation"
        onClick={() => {
          axios.post("link hala", {
            category,
            pics: [...imageUrl.filter((item) => item.url).map((s) => s.file)],
            ...productDetail,
          });
        }}
      >
        Post Product
      </button>
      <button
        className="step-navigation step-navigation--back"
        onClick={() => setStep("three")}
      >
        Back
      </button>
    </div>
  );
};

export default PostProductFinal;
