import React, { useState } from "react";

const Category = () => {
  const [category] = useState([
    {
      name: "Workshop",
      total: 23,
    },
    {
      name: "Drawing",
      total: 90,
    },
    {
      name: "Books",
      total: 89,
    },
    {
      name: "Notes",
      total: 18,
    },
  ]);
  return (
    <div className="category">
      <h4 className="category__heading">Available Category</h4>
      <ul className="category__list">
        {category.map((s, index) => {
          return (
            <li className="category__item" key={index}>
              <a className="category__link" href="#">
                {s.name} ({s.total})
              </a>
            </li>
          );
        })}
      </ul>
    </div>
  );
};

export default Category;
