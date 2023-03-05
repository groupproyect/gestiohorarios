
 const cambio_color = document.querySelectorAll(".background");

  cambio_color.forEach(background => {
    
    const getRandomNumber = (limit) => {
      return Math.floor(Math.random() * limit);
    };

    const getRandomColor = () => {
      const h = getRandomNumber(231);
      return `hsl(${h}deg, 47%, 50%)`;
    };

    const setBackgroundColor = () => {
      const randomColor = getRandomColor();
      background.style.backgroundColor = randomColor;

    };

    setBackgroundColor();

    setInterval(() => {
      setBackgroundColor();
    }, 800);

  });

