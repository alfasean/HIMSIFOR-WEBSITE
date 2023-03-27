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