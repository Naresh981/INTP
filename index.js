

var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4000);







const navSlide = () => {
    const burger = document.querySelector('.burgers');
    const nav = document.querySelector('.nav-links');
    const navLink= document.querySelectorAll('.nav-links li')

    burger.addEventListener('click',()=>{
        //toggle bar
        nav.classList.toggle('nav-active')
         //animate links
        navLink.forEach((link,index)=>{
            if(link.style.animation){
                link.style.animation = '';
            // link.style.animation = `navLinkFade 0.1s ease backwards ${index / 7  + 2}s`;
            }else{
                link.style.animation = `navLinkFade 0.1s ease forwards ${index / 7  + 0.35}s`;
                
            }
        });
        //toggle
        burger.classList.toggle('toggle');
    });   

}
// navSlide();
document.querySelector('.burgers').addEventListener('click', navSlide());




document.getElementById('login-button').addEventListener('click',function(){
    document.querySelector('.bg-modal-login').style.display='flex'
    document.body.style.position = 'fixed';
    
});
document.getElementById('close-login-btn').addEventListener('click',function(){
    document.querySelector('.bg-modal-login').style.display='none'
    document.body.style.position = 'relative';
});








document.getElementById('signup-from-login').addEventListener('click',function(){
    document.querySelector('.bg-modal-signin').style.display='flex'
    document.querySelector('.bg-modal-login').style.display='none'
});
document.getElementById('close-sign-btn').addEventListener('click',function(){
    document.querySelector('.bg-modal-login').style.display='none'
    document.querySelector('.bg-modal-signin').style.display='none'
});

document.getElementById('go-back-to-login').addEventListener('click',function(){
    document.querySelector('.bg-modal-login').style.display='flex'
    document.querySelector('.bg-modal-signin').style.display='none'
});




function myFunction(x) {
    if(document.querySelector('.main-header').style.backgroundColor = ""){        
        document.querySelector('.main-header').style.backgroundColor = "rgb(12,12,12);";
        console.log('working')
    }
       
}
  
var x = window.matchMedia("(max-width: 1140px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) 


