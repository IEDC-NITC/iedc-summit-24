<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBWBkVsqUkl7csadhDbzjwb8l6PouT20cE",
    authDomain: "testfcm-49a77.firebaseapp.com",
    projectId: "testfcm-49a77",
    storageBucket: "testfcm-49a77.appspot.com",
    messagingSenderId: "700157523584",
    appId: "1:700157523584:web:f3e4ba1de60d26ee3bd865",
    measurementId: "G-6SV79TVP4Q"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);


 
 import { getMessaging, getToken } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-messaging-sw.js";

// Get registration token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
const messaging = getMessaging();
getToken(messaging, { vapidKey: 'BHIk242mxvdxtHJsgr28MDqOhCzBvUpsQ9Ai7FpPAvGfgmgzgfYn6M3a59UCXUn_ybwfqaIC1Rctt7MAKruifKw' }).then((currentToken) => {
  if (currentToken) {
    // Send the token to your server and update the UI if necessary
    // ...
  } else {
    // Show permission request UI
    console.log('No registration token available. Request permission to generate one.');
    // ...
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
  // ...
});



</script>


</body>
</html>