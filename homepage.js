
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
