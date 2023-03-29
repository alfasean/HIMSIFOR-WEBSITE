const toggleSwitch = document.querySelector('input[type="checkbox"]');

if(localStorage.getItem('darkModeEnabled')){
  document.body.className = 'dark';
  toggleSwitch.checked = true;
}

const body = document.querySelector('body');

toggleSwitch.addEventListener('click', function(e) {
  const {checked} = toggleSwitch;
  if (checked) {
    localStorage.setItem('darkModeEnabled', true);
  } else {
    localStorage.removeItem('darkModeEnabled');
  }
  document.body.className = checked ? 'dark' : '' 
})


function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}
