import React, { useState } from "react";
import { faker } from "@faker-js/faker";
import { CiFilter } from "react-icons/ci";
const ProductPage = () => {
  var data = [];
  for (let i = 0; i < 10; i++) {
    data[i] = {
      name: faker.vehicle.vehicle(),
      price: faker.random.numeric(3),
      stock: faker.random.numeric(1),
      image: faker.image.cats(480, 720, true),
      description: faker.lorem.paragraph(),
    };
  }
  const [products] = useState(data);
  return (
    <div className="productPage">
      <div className="productPage--flex">
        <button className="productPage--flex__button">Popular</button>
        <button className="productPage--flex__button">Latest</button>
        <button className="productPage--flex--last productPage--flex__button">
          <CiFilter className="filter" />
          Filter
        </button>
      </div>
      <div className="productPage--grid">
        {products.map((s, index) => {
          return (
            <div className="productCard" key={index}>
              {/* <div className="productCard--padding"> */}
              <img className="productCard__image" src={s.image} alt="an pic" />
              <h5>{s.name}</h5>
              <h5>रु {s.price}</h5>
              <h5>{s.stock}(In Stock)</h5>
              <p className="productCard__description">{s.description}</p>
              {/* </div> */}
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default ProductPage;
