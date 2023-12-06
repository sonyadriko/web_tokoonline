import { auth } from './firebase-config.js';

const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = loginForm.email.value;
  const password = loginForm.password.value;

  // Sign in with email and password
  auth.signInWithEmailAndPassword(email, password)
    .then((userCredential) => {
      const user = userCredential.user;
      console.log('Login successful for user:', user.email);
      alert('Login successful!');
    })
    .catch((error) => {
      console.error('Login error:', error.message);
      alert('Login failed. ' + error.message);
    });
});
