import { app } from './firebase-config.js';
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

const loginForm = document.getElementById('loginForm');


loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = loginForm.email.value;
  const password = loginForm.password.value;

  const auth = getAuth(app);

  // Sign in with email and password
  signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      const user = userCredential.user;
      console.log('Login successful for user:', user.email);
      alert('Login successful!');
      window.location.href = 'app/index.php';  
    })
    .catch((error) => {
      console.error('Login error:', error.message);
      alert('Login failed. ' + error.message);
    });
});
