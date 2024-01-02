// For Firebase JS SDK v7.20.0 and later, measurementId is optional

import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";

const firebaseConfig = {
  apiKey: "AIzaSyD_jni1wD5X76VKKQEmW3Z_E2am7_4kQf0",
  authDomain: "febriani-tokoonline.firebaseapp.com",
  databaseURL: "https://febriani-tokoonline-default-rtdb.firebaseio.com",
  projectId: "febriani-tokoonline",
  storageBucket: "febriani-tokoonline.appspot.com",
  messagingSenderId: "935116086644",
  appId: "1:935116086644:web:b6cb7db2564731629e2021",
  measurementId: "G-WCGR3DKS1E"
};

const app = initializeApp(firebaseConfig);

export { app }