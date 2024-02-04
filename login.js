import { app } from './firebase-config.js';
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = loginForm.email.value;
  const password = loginForm.password.value;

  const auth = getAuth(app);

  signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      const user = userCredential.user;
      console.log('Login successful for user:', user.email);

      // Simpan informasi pengguna ke dalam Realtime Database
      const db = getDatabase(app);
      const userRef = ref(db, 'users/' + user.uid);
      set(userRef, {
        email: user.email,
        // Tambahkan data lain yang ingin disimpan, misalnya nama pengguna
      });

      alert('Login successful!');
      window.location.href = 'app/index.php';
    })
    .catch((error) => {
      console.error('Login error:', error.message);
      alert('Login failed. ' + error.message);
    });
});
