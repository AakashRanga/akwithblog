<?php include ('header.php'); ?>
<style>
    .notepad {
        font-family: Arial, sans-serif;
        margin: 20px;
        line-height: 2.3;
        margin-left: 20px;
    }
</style>

<?php
$code = <<<'CODE'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Code Display with Copy Button</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .code-container {
                background-color: #f4f4f4;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px;
                position: relative;
            }
            .copy-button {
                position: absolute;
                top: 10px;
                right: 10px;
                background-color: #007bff;
                color: white;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
                border-radius: 3px;
            }
            .copy-button:active {
                background-color: #0056b3;
            }   
        </style>
    </head>
    <body>
    <div class="code-container">
        <button class="copy-button" onclick="copyCode()">Copy</button>
        <pre id="code-block">
    def chatbot_response(request):
        email = request.session.get('email')
        user = users_details.objects.get(email=email)
        try:
            if request.method == 'POST':
                prompt = request.POST.get('prompt')
                model_engine = "gpt-3.5-turbo"
                completion = openai.Completion.create(
                    engine=model_engine,
                    prompt=prompt,
                    max_tokens=1024,
                    n=1,
                    stop=None,
                    temperature=0.5,
                )
                response = completion.choices[0].text
                return render(request, 'bot/chatbot_response.html', {'response': response})
        except:
            messages.success(request, 'Im Here to give you Useful Content')
        return render(request, 'bot/chatbot.html',{'user':user})
        </pre>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre code').forEach((block) => {
                hljs.highlightBlock(block);
            });
        });

        function copyCode() {
            const codeBlock = document.getElementById('code-block');
            const range = document.createRange();
            range.selectNode(codeBlock);
            window.getSelection().removeAllRanges(); // Clear any existing selections
            window.getSelection().addRange(range); // Select the code block
            document.execCommand('copy');
            window.getSelection().removeAllRanges(); // Deselect the code block
            alert('Code copied to clipboard!');
        }
    </script>

    </body>
    </html>
    CODE;
?>
<!-- Navbar -->


<p style="margin-top:100px;"></p>

<div class="container overflow-hidden">
    <div class="row gy-5">
        <div class="col-md-8 order-1 order-md-1 ">
            <div class="codecontent">
                <h1>Build A Google Gemini Chatbot with HTML CSS and JavaScript</h1>
                <div class="col-md-12">
                    <img src="images/access.jpg" class="img-fluid" alt="">
                </div>
                <p>Create a index.html and save this file, Goto to browser(Chrome, FireFox, Edge) and enter the path you
                    should proberly see Hello</p>
                <h2>Steps to Build Gemini Chatbot</h2>
                <p>To build an interactive and functional Gemini chatbot using HTML, CSS, and JavaScript, follow these
                    simple step-by-step instructions:</p>

                <ul class="notepad">
                    <li>Create a folder with any name you like, e.g., <strong>gemini-chatbot</strong>.</li>
                    <li>Inside it, create the necessary files: <strong>index.html</strong>, <strong>style.css</strong>,
                        and <strong>script.js</strong>.</li>
                    <li>Download the <strong>Images</strong> folder and put it in your project directory. This folder
                        contains logos you’ll need for this chatbot project.</li>
                    <li>In your <strong>index.html</strong> file, add the essential HTML markup to structure your Gemini
                        chat layout. It features a greetings header, suggestion list, chat section, and typing form, all
                        structured with semantic tags.</li>
                </ul>

                <div class="code-container">
                    <button class="copy-button" onclick="copyCode()">Copy</button>
                    <pre id="code-block"><code><?php echo htmlspecialchars($code); ?></code></pre>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4 order-2 order-md-2 card-view">
            <ul class="nav nav-tabs title-nav mb-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="background-color:black !important;"
                        href="#">Technology</a>
                </li>
            </ul>

            <div class="card mb-3 removecardborder" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body pb-zero">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs title-nav mb-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="background-color:black !important;"
                        href="#">Research</a>
                </li>
            </ul>

            <div class="card mb-3 removecardborder" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body pb-zero">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

<script>
    window.addEventListener('scroll', function () {
        let navbar = document.querySelector('.navbar');

        if (window.scrollY > 50) {
            navbar.classList.add('navbar-small');
            navbar.classList.remove('navbar-large');
        } else {
            navbar.classList.add('navbar-large');
            navbar.classList.remove('navbar-small');
        }
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((block) => {
            hljs.highlightBlock(block);
        });
    });

    function copyCode() {
        const codeBlock = document.getElementById('code-block');
        const range = document.createRange();
        range.selectNode(codeBlock);
        window.getSelection().removeAllRanges(); // Clear any existing selections
        window.getSelection().addRange(range); // Select the code block
        document.execCommand('copy');
        window.getSelection().removeAllRanges(); // Deselect the code block
        alert('Code copied to clipboard!');
    }
</script>

<!-- -->