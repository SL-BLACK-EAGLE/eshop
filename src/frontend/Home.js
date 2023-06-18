import React, { useState, useEffect } from "react";

const Home = () => {
  const [message, setMessage] = useState("");

  useEffect(() => {
    // Get the message from PHP
    fetch("src/backend/connection.php")
      .then((response) => response.text())
      .then((text) => setMessage(text));
  }, []);

  return (
    <div>
      <h1>Home</h1>
      <select className="form-select">
          <option></option>
      </select>
      <p>{message}</p>
    </div> 
  );
};

export default Home;
