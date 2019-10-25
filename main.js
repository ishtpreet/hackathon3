const countdown = document.querySelector('.countdown');
//Setting launch date.
const launchDate = new Date('Feb 22,2019 11:30:00').getTime();
//Update every second.
const intvl = setInterval(() => {
  //Get todays date and time in ms.
  const now = new Date().getTime();
  //Get Distance from now to launch date.
  const dist = launchDate - now;
  //Time calculations.
  const days = Math.floor(dist / (1000 * 60 * 60 * 24));
  const hours = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const mins = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
  const secs = Math.floor((dist % (1000 * 60)) / 1000);
  //Display result.
  countdown.innerHTML = `<div>${days}<span> Days</span></div>
  <div>${hours}<span> Hours</span></div>
  <div>${mins}<span> Minutes</span></div>
  <div>${secs}<span> Seconds</span></div>
  `;
  //If launchdate passed .
  if (dist < 0) {
    clearInterval(intvl);
    //Style and output text.
    window.location = "./afterthemesindex.html";
    countdown.style.color = '#17a2b8';
    countdown.innerHTML = 'Launched!';
  }
}, 1000);