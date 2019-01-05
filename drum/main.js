function playDrum(e){
    const audio = document.querySelector(`audio[data-key = "${e.keyCode}"]`); //showing the audio file
    const key = document.querySelector(`.key[data-key = "${e.keyCode}"]`) //showing the div
    if(!audio) return;
    audio.play();
    audio.currentTime = 0;
    key.classList.add('play');
    /*
    setTimeout(() => {
         key.classList.remove('play');
     }, 100);
    */
}
    
function removeTransition(e) {
    if(e.propertyName !== 'transform') return;
    this.classList.remove('play');
}

const keys = document.querySelectorAll('.key');
keys.forEach(key => key.addEventListener('transitionend', removeTransition));
window.addEventListener('keydown', playDrum);