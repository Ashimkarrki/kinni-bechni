import React, { useState } from "react";
import { IoCloseOutline } from "react-icons/io5";
import { ImBooks } from "react-icons/im";
import { GiNotebook } from "react-icons/gi";
import { BsTools } from "react-icons/bs";
const PostProduct = ({ setIsmodalOpen }) => {
  const [category, setCategory] = useState("");
  return (
    <div className="postproduct__wrapper">
      <div className="postproduct">
        <div className="postproduct__headers">
          <h3>Post Product</h3>
          <IoCloseOutline
            className="postproduct__close"
            onClick={() => {
              setIsmodalOpen(false);
            }}
          />
        </div>
        <div className="postproduct__choose ">
          <button
            className="postproduct__choose__button"
            onClick={() => setCategory("books")}
          >
            <ImBooks className={"postproduct__choose__icons ${category===}"} />
            Books
          </button>

          <button
            className="postproduct__choose__button"
            onClick={() => setCategory("notes")}
          >
            <GiNotebook className="postproduct__choose__icons" />
            Notes
          </button>
          <button
            className="postproduct__choose__button"
            onClick={() => setCategory("equipments")}
          >
            <BsTools className="postproduct__choose__icons" />
            Equipments
          </button>
        </div>
        {/* <input type="text" placeholder="Post Name" /> */}
      </div>
      ;
    </div>
  );
};

export default PostProduct;
