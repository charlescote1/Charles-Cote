
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charles Cote CS 1080 WWW Design</title>
    <meta name="author" content="Charles Cote">
    <meta name="description" content="A portfolio of my CS1080 work.">
    <style>
        
        /* basic CSS */
        body {
            margin: auto;
            padding: 3%;
            width: 90%;
            display: grid;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
        }

        figcaption {
            color: #839e99;
            font-style: italic;
            text-align: center;
        }

        img {
            border-radius: 3%;
            max-width: 100%
        }

        /* Setting up a grid layout for the sitemap page */
        body>h1 {
            grid-column: 1/2;
            grid-row: 1;

        }

        body>h2 {
            grid-column: 1/2;
            grid-row: 2;

        }

        body>p {
            grid-column: 1/2;
            grid-row: 3;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
            grid-column: 2 / 2;
            grid-row: 1 / span 3;
        }

        .header {
            grid-area: header;
            grid-column: 1 / 3;
            padding: .5%;
            margin: .5%;
        }

        .lab-layout {
            border-bottom: thin dashed navy;
            display: inline-grid;
            grid-template-columns: 25% 25% 50%;
            grid-template-areas: "header header header"
                "public-files supporting-files grader-notes";
            padding: .5%;
            margin: .5%;
            grid-column: 1 / span 2;
        }

        .public-files {
            grid-area: public-files;
            padding: .5%;
            margin: .5%;
        }

        .supporting-files {
            grid-area: supporting-files;
            padding: .5%;
            margin: .5%;
        }

        .grader-notes {
            grid-area: grader-notes;
            padding: .5%;
            margin: .5%;
        }
    
    </style>
</head>

<body>

    <figure>
        <img alt="Charles Cote" src="images/charles-cote.png">
        <figcaption>Charles in a suit.</figcaption>
    </figure>

    <h1>
        CS 1080-
        <em>(a)</em> 
        Spring 2024
    </h1>
    <h2>Charles Cote - Site map</h2>
    <p><a href="ADMIN/code-viewer.php">My Admin Folder</a></p>
    <p><a href="ADMIN/table-viewer.php?getDatabase=">Table Viewer</a></p>

    <!-- ###########################################  -->
    <section class="finalproject">
        <h2 class="header">Final Project</h2>
        <section class="public-files">
            <h3>Public Files</h3>
        </section>
    </section>


    <section class="lab-layout">
        <h2 class="header">Lab 8: Database to display data.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab8/css/custom.css">Custom CSS</a></p>
            <p><a href="lab8/css/layout-desktop.css">Layout Desktop CSS</a></p>
            <p><a href="lab8/about.php">About page</a></p>
            <p><a href="lab8/detail.php">Detail page</a></p>
            <p><a href="lab8/index.php">Home page</a></p>
            <p><a href="lab8/form.php">Form page</a></p>
            <p><a href="lab8/array.php">Array page</a></p>
            <p><a href="lab8/top.php">Top php</a></p>
            <p><a href="lab8/footer.php">Footer php</a></p>
            <p><a href="lab8/header.php">Header php</a></p>
            <p><a href="lab8/nav.php">Nav php</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
            <p><a href="lab8/sql.php">SQL php</a></p>
            <p><a href="lab8/database-connect.php">Database Connection</a></p>
            <p><a href="lab8/images/Records1.png">Record 1: Insert</a></p>
            <p><a href="lab8/images/Records2.png">Record 2: Table</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Hello</p>
        </section>
    </section>






    <section class="lab-layout">
        <h2 class="header">Lab 7: Arrays and Includes.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab7/css/custom.css">Custom CSS</a></p>
            <p><a href="lab7/css/layout-desktop.css">Layout Desktop CSS</a></p>
            <p><a href="lab7/about.php">About page</a></p>
            <p><a href="lab7/detail.php">Detail page</a></p>
            <p><a href="lab7/index.php">Home page</a></p>
            <p><a href="lab7/form.php">Form page</a></p>
            <p><a href="lab7/array.php">Array page</a></p>
            <p><a href="lab7/top.php">Top php</a></p>
            <p><a href="lab7/footer.php">Footer php</a></p>
            <p><a href="lab7/header.php">Header php</a></p>
            <p><a href="lab7/nav.php">Nav php</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>I'm not sure if you will be able to grade this as I havent done lab six.</p>
            <p>I am working on going back and fixing labs 4-6.</p> 
            <p>Sorry if this creates any inconveniences.</p>
        </section>
    </section>


    
    <section class="lab-layout">
        <h2 class="header">Lab 6: Responsive design.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab6/css/custom.css">Custom CSS</a></p>
            <p><a href="lab6/css/layout-desktop.css">Layout Desktop CSS</a></p>
            <p><a href="lab6/about.php">About page</a></p>
            <p><a href="lab6/detail.php">Detail page</a></p>
            <p><a href="lab6/index.php">Home page</a></p>
            <p><a href="lab6/form.php">Form page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Hello</p>
        </section>
    </section>
    
    
    
    <section class="lab-layout">
        <h2 class="header">Lab 5: Even more styling.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab5/css/custom.css">Custom CSS</a></p>
            <p><a href="lab5/css/layout-desktop.css">Layout Desktop CSS</a></p>
            <p><a href="lab5/about.php">About page</a></p>
            <p><a href="lab5/detail.php">Detail page</a></p>
            <p><a href="lab5/index.php">Home page</a></p>
            <p><a href="lab5/form.php">Form page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Hello</p>
        </section>
    </section>





    <section class="lab-layout">
        <h2 class="header">Lab 4: css.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab4/css/custom.css">Custom CSS</a></p>
            <p><a href="lab4/about.php">About page</a></p>
            <p><a href="lab4/detail.php">Detail page</a></p>
            <p><a href="lab4/index.php">Home page</a></p>
            <p><a href="lab4/form.php">Form page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
            <!-- <p><a href="lab3-B/images/wireframe.png">Wireframe</a></p> -->
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Hello</p>
        </section>
    </section>
    
    
    <section class="lab-layout">
        <h2 class="header">Lab Three B - Creating a form.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab3-B/about.php">About page</a></p>
            <p><a href="lab3-B/detail.php">Detail page</a></p>
            <p><a href="lab3-B/index.php">Home page</a></p>
            <p><a href="lab3-B/form.php">Form page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
            <p><a href="lab3-B/images/wireframe.png">Wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Hello</p>
        </section>
    </section>
    
    <section class="lab-layout">
        <h2 class="header">Lab Three - Creating a website.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab3/about.php">About page</a></p>
            <p><a href="lab3/detail.php">Detail page</a></p>
            <p><a href="lab3/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Public Files</h3>
            <p><a href="lab3/css/custom.css">css style sheet</a></p>
            <p><a href="lab3/wireframe.png">Wireframe</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Hello</p>
        </section>
    </section>

    <section class="lab-layout">
        <h2 class="header">Lab two - Choosing my topic.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab2/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Lab topic is about the effect that climate change has on the biodiversity in the Gulf of Mexico</p>
            <p>Final project is about </p>
        </section>
    </section>

        <h2 class="header">Lab one - Setting up your sitemap.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="sitemap.php">Site map</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->
</body>

</html>