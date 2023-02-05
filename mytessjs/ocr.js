define(['tesseract.js'], function(Tesseract) {
    function readImageData() {
      console.log("Hello World");
  
      // Load the image
      const image = new Image();
      image.src = '../assets/test.png';
  
      image.onload = () => {
        // Recognize the text
        Tesseract.recognize(image)
        .then(result => {
          console.log(result.text);
        })
        .catch(err => {
          console.error(err);
        });
      };
    }
  });