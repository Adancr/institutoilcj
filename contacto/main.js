// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyCsN4b7MDy8-GsOeDNClj6nHypbBfWzJK8",
  authDomain: "ilcj-form.firebaseapp.com",
  databaseURL: "https://ilcj-form.firebaseio.com",
  projectId: "ilcj-form",
  storageBucket: "ilcj-form.appspot.com",
  messagingSenderId: "973510348394",
  appId: "1:973510348394:web:697e4f32466bdc0d"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);


 
// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form 
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var message = getInputVal('message');

  // Save message
  saveMessage(name, email, phone, message);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },4000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, email, phone, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    email:email,
    phone:phone,
    message:message
  });
}