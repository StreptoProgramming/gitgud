// Get modal element
//var moodal = document.getElementById('simpleModal');
// Get open modal button
//var moodalBtn = document.getElementById('modalBtn');
// Get close button
//var closeBtn = document.getElementsByClassName('closeBtn')[0];

// Listen for open click
//modalBtn.addEventListener('click', openModal);
// Listen for close click
//closeBtn.addEventListener('click', closeModal);
// Listen for outside click
window.addEventListener('click', outsideClick);
var modal;

document.getElementById('TmbhDataZ').onclick = function() {
	var modal = document.getElementById('ModalTmbhDataZ');
	var closeBtn = document.getElementsByClassName('close1')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('LihatDataZ').onclick = function() {
	var modal = document.getElementById('ModalLihatDataZ');
	var closeBtn = document.getElementsByClassName('close2')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('TmbhDataS').onclick = function() {
	var modal = document.getElementById('ModalTmbhDataS');
	var closeBtn = document.getElementsByClassName('close3')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('LihatDataS').onclick = function() {
	var modal = document.getElementById('ModalLihatDataS');
	var closeBtn = document.getElementsByClassName('close4')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('TmbhDataA').onclick = function() {
	var modal = document.getElementById('ModalTmbhDataA');
	var closeBtn = document.getElementsByClassName('close5')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('LihatDataA').onclick = function() {
	var modal = document.getElementById('ModalLihatDataA');
	var closeBtn = document.getElementsByClassName('close6')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('TmbhDataD').onclick = function() {
	var modal = document.getElementById('ModalTmbhDataD');
	var closeBtn = document.getElementsByClassName('close7')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('LihatDataD').onclick = function() {
	var modal = document.getElementById('ModalLihatDataD');
	var closeBtn = document.getElementsByClassName('close8')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}
document.getElementById('TmbhDataU').onclick = function() {
	var modal = document.getElementById('ModalTmbhDataU');
	var closeBtn = document.getElementsByClassName('close9')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('LihatDataU').onclick = function() {
	var modal = document.getElementById('ModalLihatDataU');
	var closeBtn = document.getElementsByClassName('close10')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('TmbhDataT').onclick = function() {
	var modal = document.getElementById('ModalTmbhDataT');
	var closeBtn = document.getElementsByClassName('close11')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}

document.getElementById('LihatDataT').onclick = function() {
	var modal = document.getElementById('ModalLihatDataT');
	var closeBtn = document.getElementsByClassName('close12')[0];
	closeBtn.addEventListener('click', closeModal);
	window.modal=modal;
	window.addEventListener('click', outsideClick);
	modal.style.display = 'block';
}



// Function to open modal
/*function openModal(){
  modal.style.display = 'block';
}*/

// Function to close modal
function closeModal(){
  modal.style.display = 'none';
}

// Function to close modal if outside click
function outsideClick(e){
  if(e.target == modal){
    modal.style.display = 'none';
  }
}
