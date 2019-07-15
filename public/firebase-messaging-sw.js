importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
// firebase.initializeApp({
//    'messagingSenderId': '1037278469737'
// });

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.

const firebaseConfig = {
  apiKey: "AIzaSyDeY55MJA-GFHx2hJoWqg7xBNtx-9o0ztw",
  authDomain: "versatile-cove-125809.firebaseapp.com",
  databaseURL: "https://versatile-cove-125809.firebaseio.com",
  projectId: "versatile-cove-125809",
  storageBucket: "versatile-cove-125809.appspot.com",
  messagingSenderId: "1037278469737",
  appId: "1:1037278469737:web:d2ab50dddf1ba3db"
};
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.'
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});