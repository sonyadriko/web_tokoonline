
    <script type="module">


                
        import { app } from './firebase-config.js';
        import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
        // Firebase logout code
        const auth = getAuth(app);
        auth.signOut().then(() => {
            console.log('User signed out');
            window.location.href = '../index.php'; 
        }).catch((error) => {
            console.error('Logout error:', error.message);
            window.location.href = '../index.php';
        });
    </script>
