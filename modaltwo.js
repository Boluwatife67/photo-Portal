const modall = document.querySelector(".modal2");
const overlayy = document.querySelector(".overlayy");
const openModalBtnn = document.getElementById("btn-openn");
const closeModalBtnn = document.querySelector(".btn-closee");

let myForm = document.getElementById("realForm");
let submitButton = document.getElementById("sendData");

let isValid;

openModalBtnn.addEventListener("click", function (ee) {
  ee.preventDefault();
  isValid = true;

  if(isValid){
    modall.classList.remove("hidden");
  overlayy.classList.remove("hidden");
  document.getElementById('realsub').addEventListener("click", function(){
    myForm.submit();
  })
  }
  
});


const closeModall = function () {
  modall.classList.add("hidden");
  overlayy.classList.add("hidden");
};
closeModalBtnn.addEventListener("click", closeModall);
overlayy.addEventListener("click", closeModall);

document.addEventListener("keydown");

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    modalClose();
  }
});
