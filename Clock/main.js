const hour = document.querySelector('.hour');
const minute = document.querySelector('.minute');
const second = document.querySelector('.second');

function time(){
    const date = new Date();
    const sec = date.getSeconds();
    const secDegree = ((sec/60) * 360) + 90;
    second.style.transform = `rotate(${secDegree}deg)`;

    const min = date.getMinutes();
    const minDegree = ((min/60) * 360) + 90;
    minute.style.transform = `rotate(${minDegree}deg)`;

    const hours = date.getHours();
    const hourDegree = ((hours/12) * 360) + 90;
    hour.style.transform = `rotate(${hourDegree}deg)`;
    console.log(sec);

    if(sec === 0) {
        second.style.transitionDuration = '0s';
        minute.style.transitionDuration = '0s';
        hour.style.transitionDuration = '0s';
    }
    else {
        second.style.transitionDuration = '0.05s';
        minute.style.transitionDuration = '0.05s';
        hour.style.transitionDuration = '0.05s';
    }
}

setInterval(time, 1000);