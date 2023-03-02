const background = document.getElementById("background");

const getRandomNumber = (limit) => {
  return Math.floor(Math.random() * limit);
};
const getRandomColor = () => {
  const h = getRandomNumber(139);
  return `hsl(${h}deg, 42%, 50%)`;
};

const setBackgroundColor = () => {
  const randomColor = getRandomColor();
  background.style.backgroundColor = randomColor;
  background.style.color = randomColor;
};

setBackgroundColor();

setInterval(() => {
  setBackgroundColor();
}, 500);
