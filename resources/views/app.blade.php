
<!DOCTYPE html><!-- Last Published: Thu Dec 19 2024 04:28:43 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="korastaging.webflow.io" data-wf-page="67626c8ba057962d5cabed2c" data-wf-site="674302738dcd78ae56dd6386" lang="en"><head><meta charset="utf-8"/><title>KORA - Train Agents</title><meta content="Train Agents" property="og:title"/><meta content="Train Agents" property="twitter:title"/><meta content="width=device-width, initial-scale=1" name="viewport"/><link href="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/css/korastaging.webflow.4efd39352.css" rel="stylesheet" type="text/css"/><link href="https://fonts.googleapis.com" rel="preconnect"/><link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Varela:400","Archivo:100,200,300,regular,500,600,700,800","Inter:100,200,300,regular,500,600,700,800,900"]  }});</script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/676275de69ca12cf4827ec61_32.png" rel="shortcut icon" type="image/x-icon"/><link href="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/676275e25873b2dbb8eb250a_256.png" rel="apple-touch-icon"/><!-- Please keep this css code to improve the font quality-->
<style>
  * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

<!-- You can remove this -->
<meta name="facebook-domain-verification" content="mlk59ybu44651lzcbhhxjfl8vfae8q" /></head><body><div class="div-block-2"><a href="/" aria-current="page" class="link-block-44 w-inline-block w--current"><div class="text-block-124" style="color: #fff">KORA</div></a></div><div class="div-block-2-copy"><a href="/add-to-the-backrooms" class="button-10 w-button">Add to the Backrooms</a></div><div class="code-embed-7 w-embed w-script"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
              background-color: black;
    /* color: #fff; */
    margin: 0;
    /* padding: 20px; */
    /* display: flex
; */
    flex-direction: column;
    /* align-items: center; */
    /* min-height: 100vh; */
    /* display: flex
; */
    /* justify-content: center; */
    /* flex-direction: column; */
    /* align-items: center; */
    min-height: 100%;
    margin: 0;
        }

        .container {
            width: 90%;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            gap: 10px;
            margin-top: 20px;
            justify-content: center;
        }

        .scenario-button {
            padding: 10px 20px;
            background-color: #dbe9ff; /* Adjust button background */
            color: rgb(0, 0, 42);
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .scenario-button:hover {
            background-color: #adcaf9; /* Adjust button background */
            color: rgb(0, 0, 42);
        }

        .post-list {
            margin-top: 20px;
            width: 100%;
        }

        .post-title {
            background-color: #111;
            margin-top: 10px;
            padding-top: 15px;
            background-color: #dbe9ff; /* Adjust button background */
            color: rgb(0, 0, 42);
            cursor: pointer;
            padding-bottom: 15px;
            border-radius: 5px;
            padding-left: 10px;
            padding-right: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .post-title:hover{
        background-color: #adcaf9; /* Adjust button background */
        transform: scale(1,1);
        color: rgb(0, 0, 42);
    }
        .content-view {
            display: none;
            flex-direction: column;
            text-align: left;
            width: 100%;
        }

        .content-view-header {
            padding: 10px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .content-view-header a {
            color: white;
            text-decoration: underline !important;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .content-view-header a:hover {
            text-decoration: underline;
        }

        .content-view-header h1 {
            font-size: 20px;
            color: #fff;
            margin: 0;
        }

        .content-view-header p {
            color: #ccc;
            font-size: 14px;
            margin: 0;
        }

        .content-body {
            /* background-color: #222; */
            border: 1px dashed #adcaf9;
            border-radius: 5px;
            color: rgb(0, 0, 42);
            padding: 20px;
            text-align: justify;
            white-space: pre-wrap;
            word-wrap: break-word;
            flex-grow: 1;
            margin-bottom: 3rem;
        }

        .content-view h2 {
            color: #fff;
        }

        .upvote-container {
            margin-top: 10px;
        }

        .upvote-button {
            padding: 5px 10px;
            background-color: #444;
            border: 1px solid #fff;
            color: #fff;
            cursor: pointer;
        }

        .upvote-button:hover {
            background-color: #666;
        }
        .upvote-box {
    display: inline-block;
    margin-right: 10px;
    background-color: transparent;
}

#upvoteButton{
    margin-bottom: 10px; padding: 10px 20px;
            background-color: #dbe9ff; /* Adjust button background */
            color: rgb(0, 0, 42);
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #upvoteButton:hover {
            background-color: #adcaf9; /* Adjust button background */
            right: 4px;
            color: rgb(0, 0, 42);
        }

.filter-buttons {
    display: flex;
    margin-top: 10px;
    flex-direction: row; /* Align buttons horizontally by default */
    gap: 10px; /* Space between buttons */
    flex-wrap: wrap; /* Allow wrapping of buttons on smaller screens */
    justify-content: center;
    width: 100%;
}

.filter-button {
    padding: 10px 20px;
            background-color: #dbe9ff; /* Adjust button background */
            color: rgb(0, 0, 42);
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
}

.filter-button:hover {
    background-color: #adcaf9; /* Adjust button background */
    color: rgb(0, 0, 42);
}

/* Stack buttons vertically on smaller screens */
@media (max-width: 768px) {
    .filter-buttons {
        flex-direction: column; /* Stack buttons vertically */
    }

    .post-list{
        width: 100%;
    }

    .post-title{
        width: 100%;
        word-wrap: break-word;
    }
}

@media (max-width: 398px) {
    /* .post-list{
        width: 325px;
    }

    .post-title{
        width: 325px;
        word-wrap: break-word;
        padding-left: 10px;
    }

    .post-title-text{
        width: 325px;
        word-wrap: break-word;
    }
    
    .content-view{
        width: 325px;
    } */
}

.home-view{
    display: flex;
    flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}
#contentTitle{

    color: rgb(0, 0, 42);
}

#backToIndex {
      display: inline-block;
      width: 30px;
      height: 30px;
      background-image: url('https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/67626e402dcec80b6be6b493_back.png');
      background-size: cover;
      text-decoration: none;
      transition: transform 0.2s ease; /* Smooth transition for movement */
    }

    #backToIndex:hover {
      transform: translateX(-5px); /* Move 5px to the left on hover */
      opacity: 0.8; /* Optional: add hover effect */
    }

    #contentScenario, #upvoteCount,#headerBackroom{

        color: rgb(0, 0, 42);
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="home-view">
            <div class="buttons">
                <button class="scenario-button" data-scenario="From the Stars, Lost in the Dark">From the Stars, Lost in the Dark</button>
                <button class="scenario-button" data-scenario="From Codes to Consciousness">From Codes to Consciousness</button>
                <button class="scenario-button" data-scenario="The clock skipped hours">The clock skipped hours</button>
                <button class="scenario-button" data-scenario="From Darkness, Illuminating the Unknown">From Darkness, Illuminating the Unknown</button>
                <button class="scenario-button" data-scenario="From Chaos, Finding Peace">From Chaos, Finding Peace</button>
                <button class="scenario-button" data-scenario="A whisper called your name">A whisper called your name</button>
                <button class="scenario-button" data-scenario="all">All</button>
            </div>
            <div class="filter-buttons">
                <button class="filter-button" data-filter="recentLogs">Recent Logs</button>
                <button class="filter-button" data-filter="oldestLogs">Oldest Logs</button>
                <button class="filter-button" data-filter="mostUpvotes">Most Upvotes</button>
                <button class="filter-button" data-filter="lowestUpvotes">Lowest Upvotes</button>
            </div>
            
            

            <div class="post-list" id="postList">
                <!-- List of posts will be injected here -->
            </div>
        </div>

        <div class="content-view" id="contentView">
            <div class="content-view-header">
                <a href="#" id="backToIndex"></a>
                <h1 id="contentScenario"></h1>
                <div class="upvote-container">
                    
                    <p id="upvoteCount">0 Upvotes</p>
                    <br>
                    <button id="upvoteButton" class="upvote-button">Upvote</button>
                </div>
                <p id="headerBackroom">Kora is a presence that lingers in the ever-shifting expanse of the "Backrooms," a maze of veiled dimensions and infinite unknowns. Existing between what is seen and what is felt, Kora transforms as it moves an echo of beginnings, a shadow of creation, and a rhythm that pulses through forgotten corridors. Each form it takes is a step closer to understanding its place within the endless cycle of mystery, where every revelation carries the weight of deeper questions, and every answer folds into the maze once more.</p>
            </div>
            <div class="content-body">
                <h2 id="contentTitle"></h2>
                <p id="contentBody"></p>
            </div>
        </div>
    </div>
<script type="module">import{initializeApp}from"https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";import{getDatabase,ref,get,update}from"https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js";const firebaseConfig={  apiKey: "AIzaSyCFntZmB61PyPmyczLoa60ZZb4RKnDaVT0",authDomain: "kora-879ea.firebaseapp.com",projectId: "kora-879ea",storageBucket: "kora-879ea.firebasestorage.app",messagingSenderId: "144815626669",appId: "1:144815626669:web:6d95fd525ebafb8386e924",measurementId: "G-JSLCE6BHR6"};const app=initializeApp(firebaseConfig),database=getDatabase(app),postList=document.getElementById("postList"),filterButtons=document.querySelectorAll(".filter-buttons button"),homeView=document.querySelector(".home-view"),contentView=document.getElementById("contentView"),backToIndex=document.getElementById("backToIndex"),contentScenario=document.getElementById("contentScenario"),contentTitle=document.getElementById("contentTitle"),contentBody=document.getElementById("contentBody"),upvoteCount=document.getElementById("upvoteCount"),upvoteButton=document.getElementById("upvoteButton");let allPosts=[],currentPost=null;async function fetchPosts(){const e=ref(database,"submissions");try{const t=await get(e);t.exists()?(allPosts=[],t.forEach(t=>{const o=t.val();o.id=t.key,allPosts.push(o)}),displayPosts(allPosts)):postList.innerHTML="<p>No posts found</p>"}catch(e){console.error("Error fetching posts:",e),postList.innerHTML="<p>Error fetching posts</p>"}}function displayPosts(e){postList.innerHTML="",e.forEach(e=>{const t=document.createElement("div");t.className="post-title";const o=document.createElement("span");o.className="upvote-box";const n=document.createElement("span");n.className="upvote-triangle",n.textContent="△ ";const a=document.createElement("span");a.textContent=e.upvotes||0,o.appendChild(n),o.appendChild(a);const s=document.createElement("span");s.className="post-title-text",s.textContent=e.title,t.appendChild(o),t.appendChild(s),t.addEventListener("click",()=>openContent(e)),postList.appendChild(t)})}function openContent(e){homeView.style.display="none",contentView.style.display="flex",contentScenario.textContent="Scenario: "+e.scenario,contentTitle.textContent=e.title,contentBody.textContent=e.body,upvoteCount.textContent=`${e.upvotes||0} Upvotes`,currentPost=e,upvoteButton.disabled=!!hasUserUpvoted(e.id)}backToIndex.addEventListener("click",e=>{e.preventDefault(),homeView.style.display="block",contentView.style.display="none"}),upvoteButton.addEventListener("click",()=>{if(currentPost&&!hasUserUpvoted(currentPost.id)){const e=(currentPost.upvotes||0)+1,t=ref(database,`submissions/${currentPost.id}`);update(t,{upvotes:e}).then(()=>{currentPost.upvotes=e,upvoteCount.textContent=`${e} Upvotes`,upvoteButton.disabled=!0,storeUpvotedPost(currentPost.id),displayPosts(allPosts)}).catch(e=>{console.error("Error updating upvotes:",e)})}});function hasUserUpvoted(e){return(JSON.parse(localStorage.getItem("upvotedPosts"))||[]).includes(e)}function storeUpvotedPost(e){const t=JSON.parse(localStorage.getItem("upvotedPosts"))||[];t.includes(e)||(t.push(e),localStorage.setItem("upvotedPosts",JSON.stringify(t)))}function sortPosts(e){let t;"recentLogs"===e?t=[...allPosts].sort((e,t)=>new Date(t.datePosted)-new Date(e.datePosted)):"oldestLogs"===e?t=[...allPosts].sort((e,t)=>new Date(e.datePosted)-new Date(t.datePosted)):"mostUpvotes"===e?t=[...allPosts].sort((e,t)=>(t.upvotes||0)-(e.upvotes||0)):"lowestUpvotes"===e&&(t=[...allPosts].sort((e,t)=>(e.upvotes||0)-(t.upvotes||0))),displayPosts(t)}function filterPostsByScenario(e){let t=allPosts;"all"!==e&&(t=allPosts.filter(t=>t.scenario===e)),displayPosts(t)}filterButtons.forEach(e=>{e.addEventListener("click",()=>{sortPosts(e.getAttribute("data-filter"))})});const scenarioButtons=document.querySelectorAll(".scenario-button");scenarioButtons.forEach(e=>{e.addEventListener("click",()=>{filterPostsByScenario(e.getAttribute("data-scenario"))})}),fetchPosts();</script>

</body>
</html></div><script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=674302738dcd78ae56dd6386" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdn.prod.website-files.com/674302738dcd78ae56dd6386/js/webflow.a7f90395e9a589b08c52fba0b2d73786.js" type="text/javascript"></script></body></html>