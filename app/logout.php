<?php
// session_start();
// session_destroy();
// header('Location: ../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include any necessary head elements here -->
    <script type="module" src="../firebase-config.js"></script> 
</head>
<body>
    <script>
                
        import { app } from './firebase-config.js';
        import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
        // Firebase logout code
        const auth = getAuth(app);
        auth.signOut().then(() => {
            // Sign-out successful.
            console.log('User signed out');
            window.location.href = 'login.php'; // Redirect to the login page
        }).catch((error) => {
            // An error happened.
            console.error('Logout error:', error.message);
            // Handle the error or redirect to the login page
            window.location.href = 'login.php';
        });
    </script>
</body>
</html>
