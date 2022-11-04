import { Routes, Route, useLocation } from "react-router-dom";
import "./Style/main.scss";
import Signup from "./Pages/Signup";
import Category from "./Components/Category";
import Login from "./Pages/Login";
import Navbar from "./Components/Navbar";
import Home from "./Pages/Home";
function App() {
  let location = useLocation();
  console.log(location.pathname);
  return (
    <div className="App">
      {location.pathname === "/signup" || location.pathname === "/login" ? (
        ""
      ) : (
        <Navbar />
      )}
      <Category />

      <Routes>
        <Route path="/" element={<Home />}></Route>
        <Route path="/signup" element={<Signup />}></Route>
        <Route path="/login" element={<Login />}></Route>
      </Routes>
    </div>
  );
}

export default App;
