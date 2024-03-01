document.addEventListener('DOMContentLoaded', function(){
    const signForm = document.querySelector('section');
    signForm.style.opacity = 0;

    setTimeout(() => {
        signForm.style.transition = 'opacity 1s ease-in-out';
        signForm.style.opacity = 1;
    },500);
});