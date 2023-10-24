document.getElementById('editButton').addEventListener('click', function() {
    document.getElementById('__dialogmain').style.display = 'block';
});

document.getElementById('editButton').addEventListener('click', function() {
    document.getElementById('overlay').style.display = 'block';
});

// document.getElementById('cancelButton').addEventListener('click', function() {
//     document.getElementById('__dialogmain').style.display = 'none';
// });

// document.getElementById('cancelButton').addEventListener('click', function() {
//     document.getElementById('overlay').style.display = 'none';
// });

const editButton = document.getElementById('editButton');
const popup = document.getElementById('__dialogmain');
const saveButton = document.getElementById('saveButton');
const cancelButton = document.getElementById('cancelButton');

const isPopupDisplayed = localStorage.getItem('popupDisplayed');

if (isPopupDisplayed) { 
    popup.classList.remove('hidden');
} else {
    popup.classList.add('hidden');
}
editButton.addEventListener('click', () => {
   
    popup.classList.remove('hidden');
    localStorage.setItem('popupDisplayed', 'true');
});

saveButton.addEventListener('click', () => {
    popup.classList.add('hidden');
    localStorage.removeItem('popupDisplayed');
});

cancelButton.addEventListener('click', () => {
    popup.classList.add('hidden');
    localStorage.removeItem('popupDisplayed');
});
// $(document).ready(function(){
//     $("#cancelButton").click(function(){
//         $("#overlay").fadeOut();
//     });
// });
// $(document).ready(function () {
//         $("#close-btn").click(function () {
//         $("#overlay").fadeOut();
//     });
// });



