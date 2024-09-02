//VARIABLES
// main page
const mainPage = document.querySelector('.main_page');
const btnPatient = document.querySelector('.btn_patient');
const btnDoctor = document.querySelector('.btn_doctor');
const patientForm = document.querySelector('.patient_form');
const doctorForm = document.querySelector('.doctor_form');

// PATIENT FORM
// for id=proggress
const btnSpaces = document.querySelectorAll('.btn_space');
const btnPart = document.querySelectorAll('.btn_part');
const line = document.querySelectorAll('.line');
const btnsTitle = document.querySelectorAll('.btn_title');
const btnArrowNext = document.querySelector('.btn_arrow_next');
const btnArrowPrev = document.querySelector('.btn_arrow_prev');

// form
const partOfForm = document.querySelectorAll('.part_of_form');

// to validation
let btnsNext = document.querySelectorAll('.btn_next');
let btnSubmit = document.querySelector('.btn_submit');
let btnsPrev = document.querySelectorAll('.btn_prev');
let btnsCancel = document.querySelectorAll('.btn_cancel');

// to check
let btnCheck = document.querySelector('.btn_check');

// all input in form
let inputs = document.querySelectorAll('input');

// required input
let data = document.querySelectorAll(".data");

let activeIndex = 0;

// FUNCTION
// show part 2 and 3 in progrress - only for desktop
function hidePartsOnMobile () {
  if (window.outerWidth < 576) {
    btnSpaces[1].classList.remove('space_show');
    btnsTitle[1].classList.remove('title_show');
    btnSpaces[2].classList.remove('space_show');
    btnsTitle[2].classList.remove('title_show');
  }
}

hidePartsOnMobile();

// function to hide "previous active" part of form
function hideActivePart () {
  let activeButton = document.querySelector('.active_btn');
  activeButton.classList.remove('active_btn');
  let activeTitle = document.querySelector('.active_title');
  activeTitle.classList.remove('active_title');
}

//  function to show or hide parts of forms
 function activesParts () {
  // for desktop
  if (window.outerWidth > 576){
    if (activeIndex === 0){
      for (let i=0; i < btnSpaces.length; i++){
        if (i <= 2){
          btnSpaces[i].classList.add('space_show');
        } else {
          btnSpaces[i].classList.remove('space_show');
        }
      }
    } else if (activeIndex > 0 && activeIndex < btnSpaces.length-1){
      for (let i=0; i < btnSpaces.length; i++) {
        if (i === activeIndex-1 || i === activeIndex || i === activeIndex+1){
          btnSpaces[i].classList.add('space_show');
        } else {
          btnSpaces[i].classList.remove('space_show');
        }
    }
   } else {
      for (let i=0; i < btnSpaces.length; i++){
        if (i >= 3){
          btnSpaces[i].classList.add('space_show');
        } else {
          btnSpaces[i].classList.remove('space_show');
        }
    }}
    // for mobile
  } else {
    for (let i=0; i < btnSpaces.length; i++){
    if (i === activeIndex){
      btnSpaces[i].classList.add('space_show');
    } else {
      btnSpaces[i].classList.remove('space_show');
    }
  }}}

// show or hide title
function activesTitles () {
    btnsTitle[activeIndex].classList.add('active_title');
    // for desktop
    if (window.outerWidth > 576){
      if (activeIndex === 0){
        for (let i=0; i < btnsTitle.length; i++){
          if (i <= 2){
            btnsTitle[i].classList.add('title_show');
          } else {
            btnsTitle[i].classList.remove('title_show');
          }
        }
      } else if (activeIndex > 0 && activeIndex < btnsTitle.length-1){
        for (let i=0; i < btnsTitle.length; i++) {
          if (i === activeIndex-1 || i === activeIndex || i === activeIndex+1){
            btnsTitle[i].classList.add('title_show');
          } else {
            btnsTitle[i].classList.remove('title_show');
          }
      }
     } else {
        for (let i=0; i < btnsTitle.length; i++){
          if (i >= 3){
            btnsTitle[i].classList.add('title_show');
          } else {
            btnsTitle[i].classList.remove('title_show');
          }
      }}
      // for mobile
    } else {
      for (let i=0; i < btnsTitle.length; i++){
        if (i === activeIndex){
          btnsTitle[i].classList.add('title_show', 'active_title');
        } else {
          btnsTitle[i].classList.remove('title_show', 'active_title');
        }
      }}};
  

// // function to change colors background and line
function changeBackground () {
  for (let i=0; i < btnPart.length; i++){
    if (i < activeIndex){
      btnPart[i].classList.add('filled_part');
      line[i].classList.add('filled_line');
    } else if (i === activeIndex){    
      // partOfForm[i].classList.add('active_part');
      partOfForm[i].classList.remove('d-none');
      partOfForm[i].classList.add('d-flex');
      btnPart[i].classList.remove('filled_part');
      btnPart[i].classList.add('active_btn');
      line[i].classList.add('filled_line');
    } else {
      btnPart[i].classList.remove('filled_part');
      line[i].classList.remove('filled_line');
    }; 
    }}

//  function to hide and show buttons
 function showOrHideButtons () {
  if (activeIndex === 0) {
    btnArrowPrev.style.display="none";
    btnArrowNext.style.display="block";
  } else if (activeIndex === btnPart.length-1){
    btnArrowPrev.style.display="block";
    btnArrowNext.style.display="none"; 
  } 
  else {
    btnArrowPrev.style.display="block";
    btnArrowNext.style.display="block";
  }}

function switchToPart () {
      activesParts();
      activesTitles();
      changeBackground();
      showOrHideButtons();
    }

function toPrevStep () {
    // to hide active part of form
 partOfForm[activeIndex].classList.remove('d-flex');
 partOfForm[activeIndex].classList.add('d-none');

 // update active part of form - previous step
 activeIndex = activeIndex-1;

 // to show first part of form
 partOfForm[activeIndex].classList.add('d-flex');
 partOfForm[activeIndex].classList.remove('d-none');

 hideActivePart();
 switchToPart(); 
};

 // ADDEVENTLISTENER

// buttons for part of form
btnPart.forEach( (button, index) => {
  button.addEventListener('click', (event) => {
    if (partOfForm[index].classList.contains('was-validated')){
      partOfForm[activeIndex].classList.remove('d-flex');
      partOfForm[activeIndex].classList.add('d-none');
      activeIndex = index;
      hideActivePart();
      switchToPart();
     
    } else  {
      partOfForm[activeIndex].classList.add('was-validated');
        if (!partOfForm[activeIndex].checkValidity())
      {
          event.preventDefault();
          event.stopPropagation(); 
        }
        else 
        {
              partOfForm[activeIndex].classList.remove('d-flex');
              partOfForm[activeIndex].classList.add('d-none');
              event.preventDefault();
              event.stopPropagation();
              activeIndex = activeIndex+1;
              partOfForm[activeIndex].classList.remove('d-none');
              partOfForm[activeIndex].classList.add('d-flex');
              hideActivePart();
              switchToPart();
            }
        
    }
})
})

let enteredData = {};

btnsNext.forEach((button, i) => {
  button.addEventListener('click', (event) => {
    if (!partOfForm[activeIndex].checkValidity())
   {
      event.preventDefault();
      event.stopPropagation(); 
    }
    else 
    {
          partOfForm[activeIndex].classList.remove('d-flex');
          partOfForm[activeIndex].classList.add('d-none');
          event.preventDefault();
          event.stopPropagation();
          activeIndex = activeIndex+1;
          partOfForm[activeIndex].classList.remove('d-none');
          partOfForm[activeIndex].classList.add('d-flex');
          hideActivePart();
          switchToPart();
        }
      partOfForm[i].classList.add('was-validated');
        });
});

btnArrowNext.addEventListener('click', (event) => { 
  partOfForm[activeIndex].classList.add('was-validated');
    if (!partOfForm[activeIndex].checkValidity())
   {
      event.preventDefault();
      event.stopPropagation(); 
    }
    else 
    {
          partOfForm[activeIndex].classList.remove('d-flex');
          partOfForm[activeIndex].classList.add('d-none');
          event.preventDefault();
          event.stopPropagation();
          activeIndex = activeIndex+1;
          partOfForm[activeIndex].classList.remove('d-none');
          partOfForm[activeIndex].classList.add('d-flex');
          hideActivePart();
          switchToPart();
        }
        });

btnArrowPrev.addEventListener('click', () => {
  toPrevStep();
});

btnsPrev.forEach((button) => (
  button.addEventListener('click', () => {
  toPrevStep();
  })
));

btnsCancel.forEach((button) => 
{ button.addEventListener('click', () => {
  // to hide active part of form
  partOfForm[activeIndex].classList.remove('d-flex');
  partOfForm[activeIndex].classList.add('d-none');
  // update active part of form - first
  activeIndex = 0;
  // to show first part of form
  partOfForm[0].classList.add('d-flex');
  partOfForm[0].classList.remove('d-none');
  // to clear all inputs in form
  for(let l=0; l < partOfForm.length; l++){
    partOfForm[l].classList.remove('was-validated');
    partOfForm[l].reset();
  }
  hideActivePart();
  switchToPart ();
})
})

btnSubmit.addEventListener('click', (event) => {
    if (!partOfForm[activeIndex].checkValidity())
   {
      event.preventDefault();
      event.stopPropagation(); 
    }
    else 
    {
          partOfForm[activeIndex].classList.remove('d-flex');
          partOfForm[activeIndex].classList.add('d-none');
          event.preventDefault();
          event.stopPropagation();
          activeIndex = activeIndex+1;
          hideActivePart();
         
          window.location.href=("./index.php");
        }
      partOfForm[activeIndex].classList.add('was-validated');
        });
