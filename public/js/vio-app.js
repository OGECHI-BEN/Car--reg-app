//This function makes the hidden feature of vehicle inspection visible when we click 0n the Inspection button...

const inspection = document.getElementById('inspect');
const inspection_list = document.getElementById('detailed_inspection');

inspection.addEventListener('click',function (event){
    //when you click on the button it would change from hidden to block
    event.preventDefault();
    if(inspection_list.style.display ==='none'){
        inspection_list.style.display ='block';
        console.log('website is now visible');
    }
    else{
        inspection_list.style.display ='none';
        console.log('website is now hidden')
     }
});
// document.getElementById('home-background').style.backgroundImage = "url('public/img/inspector.jpg')";