import React, { useState } from "react";
import Tesseract from "tesseract.js";
import "./home.css";

const Home = () => {
  const [progressValue, setProgressValue] = useState(0);
  const [selectedFiles, setSelectedFiles] = useState(null);
  const [imageData, setImageData] = useState(null);

  const handleFiles = (files) => {
    setSelectedFiles(files);
  };

  const readImageData = () => {
    Tesseract.recognize(selectedFiles[0])
      .progress((p) => setProgressValue(p.progress))
      .then((result) => setImageData(result.text))
      .catch((err) => console.error(err));
  };

  return (
    <div className="homeContainer">
      <div className="leftContainer">
        <div id="drop-area">
          <p>
            Upload multiple files with the file dialog or by dragging and
            dropping images onto the dashed region
          </p>
          <input
            type="file"
            id="fileElem"
            multiple
            accept="image/*"
            onChange={(e) => handleFiles(e.target.files)}
          />
          <label className="button" htmlFor="fileElem">
            Select some files
          </label>
          <progress id="progress-bar" max={100} value={progressValue} />
        </div>
      </div>
      <div className="rightContainer">
        <button type="button" onClick={readImageData}>
          Click Me
        </button>
      </div>
    </div>
  );
};

export default Home;