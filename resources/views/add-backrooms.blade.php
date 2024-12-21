
<!DOCTYPE html><!-- Last Published: Thu Dec 19 2024 04:28:43 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="korastaging.webflow.io" data-wf-page="67639d541630f412606fa08a" data-wf-site="674302738dcd78ae56dd6386" lang="en"><head><meta charset="utf-8"/><title>KORA | add to the backrooms</title><meta content="add to the backrooms" property="og:title"/><meta content="add to the backrooms" property="twitter:title"/><meta content="width=device-width, initial-scale=1" name="viewport"/><link href="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/css/korastaging.webflow.4efd39352.css" rel="stylesheet" type="text/css"/><link href="https://fonts.googleapis.com" rel="preconnect"/><link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Varela:400","Archivo:100,200,300,regular,500,600,700,800","Inter:100,200,300,regular,500,600,700,800,900"]  }});</script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/676275de69ca12cf4827ec61_32.png" rel="shortcut icon" type="image/x-icon"/><link href="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/676275e25873b2dbb8eb250a_256.png" rel="apple-touch-icon"/><!-- Please keep this css code to improve the font quality-->
<style>
  * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

<!-- You can remove this -->
<meta name="facebook-domain-verification" content="mlk59ybu44651lzcbhhxjfl8vfae8q" /></head><body class="body-6"><div class="div-block-2"><a href="/" class="link-block-44 w-inline-block"><div class="text-block-124" style="color: #fff">K O R A</div></a></div><div class="code-embed-9 w-embed w-script"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: scroll;
            background-color: #000;
            font-family: "Lexend", sans-serif;
        }

        .container {
            width: 80%;
            max-width: 800px;
            background-color: #1c1c1c; /* Darker background for the form area */
            padding: 20px;
            height: auto;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.2); /* White glow */
            color: #fff
        }

        h2 {
            text-align: center;
            color: #fff; /* White text */
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #fff;
        }

        /* Common class for all inputs */
        .form-input {
            width: 100%; /* Ensures all fields take full width of their container */
            padding: 10px;
            margin-bottom: 15px;
            background-color: #505050;
            color: #ffffff; /* White text */
            border: 1px solid #ffffff; /* White border */
            border-radius: 5px;
            font-size: 16px;
            font-family: 'Courier New', Courier, monospace;
            box-sizing: border-box; /* Ensures padding and border are included in width */
        }

        /* Ensuring the text area is consistent */
        textarea.form-input {
            resize: none; /* Prevent resizing */
        }

        .form-input:focus {
            outline: none;
            border-color: #ffffff; /* White border on focus */
            box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5); /* White glow on focus */
        }

        button {
            padding: 10px 20px;
            background: #590f87;
            background: -o-linear-gradient(45deg, #590f87 0%, #ff0076 50%, #590f87 100%);
            background: linear-gradient(45deg, #590f87 0%, #ff0076 50%, #590f87 100%);
            color: #fff;
            text-transform: uppercase;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            cursor: pointer;
            width: 100%; /* Button takes the same width as inputs */
        }

        button:hover {
            background-color: #f0f0f0; /* Light gray on hover */
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #ffffff; /* White text */
            font-size: 14px;
        }
        
        .footer a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Submit your content</h2>

        <!-- Simple Form -->
        <form id="contentForm">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-input" required><br><br>

            <label for="scenario">Scenario:</label>
            <select id="scenario" name="scenario" class="form-input">
                <option value="From the Stars, Lost in the Dark">From the Stars, Lost in the Dark</option>
                <option value="From Codes to Consciousness">From Codes to Consciousness</option>
                <option value="The clock skipped hours">The clock skipped hours</option>
                <option value="From Darkness, Illuminating the Unknown">From Darkness, Illuminating the Unknown</option>
                <option value="From Chaos, Finding Peace">From Chaos, Finding Peace</option>
                <option value="A whisper called your name">A whisper called your name</option>

            </select><br><br>

            <label for="body">Body:</label>
            <textarea id="body" name="body" class="form-input" rows="4" required></textarea><br><br>

            <label for="datePosted">Date Posted:</label>
            <input type="date" id="datePosted" name="datePosted" class="form-input" style="color:#fff"><br><br>

            <button type="submit">Submit</button>
        </form>

    </div>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
        import { getDatabase, ref, push, set } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js";
    
        // Firebase Configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCFntZmB61PyPmyczLoa60ZZb4RKnDaVT0",
            authDomain: "kora-879ea.firebaseapp.com",
            projectId: "kora-879ea",
            storageBucket: "kora-879ea.firebasestorage.app",
            messagingSenderId: "144815626669",
            appId: "1:144815626669:web:6d95fd525ebafb8386e924",
            measurementId: "G-JSLCE6BHR6"
        };
    
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);
    
        // Get the form and input fields
        const form = document.getElementById("contentForm");
        const titleInput = document.getElementById("title");
        const scenarioSelect = document.getElementById("scenario");
        const bodyInput = document.getElementById("body");
        const datePostedInput = document.getElementById("datePosted");
    
        // Handle form submission
        form.addEventListener("submit", function(event) {
            event.preventDefault();  // Prevent form from submitting the default way
    
            // Generate unique filename based on input
            const randomID = Math.random().toString(36).substring(2, 12);  // Generate 10 random digits
            const fileName = `conversation-log_${randomID}_${titleInput.value}.txt`; // Concatenate random ID and title with .txt
    
            // Collect the data from the form
            const data = {
                title: titleInput.value,
                scenario: scenarioSelect.value,
                body: bodyInput.value,
                fileName: fileName,
                datePosted: datePostedInput.value || "",  // Optional date field
                upvoteScore: 0 // Initial upvote score set to 0
            };
    
            // Save the data to Firebase Realtime Database
            const newRef = push(ref(database, 'submissions'));  // Create a new reference in 'submissions' node
            set(newRef, data)
                .then(() => {
                    // Automatically redirect instead of showing an alert
                    window.location.href = '/app'; // Replace with your desired URL
                    form.reset();  // Reset form fields after successful submission
                })
                .catch((error) => {
                    alert("Error: " + error.message);
                });
        });
    </script>
    
</body>
</html></div><div class="div-block-3"></div><script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=674302738dcd78ae56dd6386" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/js/webflow.a7f90395e9a589b08c52fba0b2d73786.js" type="text/javascript"></script></body></html>