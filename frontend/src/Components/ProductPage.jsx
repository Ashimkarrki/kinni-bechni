import React, { useState } from "react";
import { faker } from "@faker-js/faker";
import { CiFilter } from "react-icons/ci";
import { v4 as uuidv4 } from "uuid";
import ProductCard from "./ProductCard";
import { useQuery } from "@tanstack/react-query";
import axios from "axios";
const ProductPage = () => {
  const [group, setGroup] = useState("popular");
  // const query=useQuery()
  var data = [];
  for (let i = 0; i < 10; i++) {
    data[i] = {
      name: faker.vehicle.vehicle(),
      price: faker.random.numeric(3),
      stock: faker.random.numeric(1),
      image: faker.image.cats(480, 720, true),
      description: faker.lorem.paragraph(),
      id: uuidv4(),
    };
  }
  const [products] = useState(data);
  return (
    <div className="productPage">
      <div className="productPage--flex">
        <button
          className="productPage--flex__button"
          onClick={() => {
            setGroup("popular");
          }}
        >
          Popular
        </button>
        <button
          className="productPage--flex__button"
          onClick={() => {
            setGroup("latest");
          }}
        >
          Latest
        </button>
        <button className="productPage--flex--last productPage--flex__button">
          <CiFilter className="filter" />
          Filter
        </button>
      </div>
      <div className="productPage--grid">
        {products.map((s) => {
          return (
            <ProductCard
              key={s.id}
              image={s.image}
              name={s.name}
              price={s.price}
              stock={s.stock}
              description={s.description}
              category={"Books"}
            />
          );
        })}
      </div>
    </div>
  );
};

export default ProductPage;
