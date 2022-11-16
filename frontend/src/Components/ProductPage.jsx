import React, { useState } from "react";
import { CiFilter } from "react-icons/ci";
import ProductCard from "./ProductCard";
import { useQuery } from "@tanstack/react-query";
import axios from "axios";
const ProductPage = () => {
  const [group, setGroup] = useState("popular");
  const fetchHomeProducts = async () => {
    const data = await axios.get(
      "https://run.mocky.io/v3/b77b76c1-ace8-401d-90e5-91a791182e25"
    );
    return data.data;
  };
  const { isLoading, isError, data, error } = useQuery({
    queryKey: ["fetchHomeProducts"],
    queryFn: fetchHomeProducts,
    staleTime: 300000,
    cacheTime: 300000,
  });
  if (isLoading) return <h1>Loading</h1>;
  if (isError) return <h1>Error Occured : {error.message}</h1>;
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
        {data?.map((s) => {
          return (
            <ProductCard
              key={s.id}
              image={s.fileName1}
              name={s.name}
              price={s.price}
              stock={s.stock}
              description={s.description}
              category={s.category}
            />
          );
        })}
      </div>
    </div>
  );
};

export default ProductPage;
