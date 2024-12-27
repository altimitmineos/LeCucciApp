const carousel = document.querySelector('.carousel');

let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;
let currentIndex = 0;

const touchStart = (index) => (event) => {
  isDragging = true;
  startPos = getPositionX(event);
  currentIndex = index;
  animationID = requestAnimationFrame(animation);
  carousel.style.cursor = 'grabbing';
};

const touchMove = (event) => {
  if (!isDragging) return;
  const currentPosition = getPositionX(event);
  currentTranslate = prevTranslate + currentPosition - startPos;
};

const touchEnd = () => {
  isDragging = false;
  cancelAnimationFrame(animationID);

  const movedBy = currentTranslate - prevTranslate;

  if (movedBy < -100 && currentIndex < carousel.children.length - 1) currentIndex += 1;
  if (movedBy > 100 && currentIndex > 0) currentIndex -= 1;

  setPositionByIndex();
  carousel.style.cursor = 'grab';
};

const getPositionX = (event) =>
  event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;

const animation = () => {
  setSliderPosition();
  if (isDragging) requestAnimationFrame(animation);
};

const setSliderPosition = () => {
  carousel.style.transform = `translateX(${currentTranslate}px)`;
};

const setPositionByIndex = () => {
  currentTranslate = currentIndex * -carousel.offsetWidth;
  prevTranslate = currentTranslate;
  setSliderPosition();
};

carousel.addEventListener('mousedown', touchStart(0));
carousel.addEventListener('mousemove', touchMove);
carousel.addEventListener('mouseup', touchEnd);
carousel.addEventListener('mouseleave', touchEnd);

carousel.addEventListener('touchstart', touchStart(0));
carousel.addEventListener('touchmove', touchMove);
carousel.addEventListener('touchend', touchEnd);
