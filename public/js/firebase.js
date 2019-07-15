// importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
// importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');


// Initialize Firebase
// TODO: Replace with your project's customized code snippet

const firebaseConfig = {
  apiKey: "AIzaSyA1OgaA-VxkEfymfLJZ0K0GOybmsTJBxqM",
  authDomain: "versatile-cove-125809.firebaseapp.com",
  databaseURL: "https://versatile-cove-125809.firebaseio.com",
  projectId: "versatile-cove-125809",
  storageBucket: "versatile-cove-125809.appspot.com",
  messagingSenderId: "1037278469737",
  appId: "1:1037278469737:web:d2ab50dddf1ba3db"
};
firebase.initializeApp(firebaseConfig);

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
// firebase.initializeApp({
//    'messagingSenderId': '1037278469737'
// });

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging
.requestPermission()
.then(function () {
  console.log("Notification permission granted.");
  return messaging.getToken();
})
.then(function (token) {
  console.log("Token:", token);
})
.catch(function (err) {
  console.log("Unable to get permission to notify.", err);
});

messaging.onMessage(function(payload) {
  console.log('Received background message ', payload.notification);
  alert('Notification:'+ payload.notification.title);
  // Customize notification here

  return self.registration.showNotification(payload.notification.title,
    payload.notification.body);
});