<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blank Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Custom CSS-->
        <link href="css/custom.css" rel="stylesheet" />
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        <!-- Editor CSS-->
        <!-- <link href="css/editor.css" rel="stylesheet" /> -->
    </head>
    <body class="bg-dark">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="bg-secondary" id="sidebar-wrapper">
                <div class="sidebar-heading">Blank Page</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3 bg-secondary text-white" href="#!">Chat 1</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3 bg-secondary text-white" href="#!">Chat 2</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">

                <div class="h-100">
                    <!-- Top navigation-->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">

                            <button id="bold" class="editor-icons option-button format">
                                <i class="fa-solid fa-bold"></i>
                            </button>
                            <button id="superscript" class="editor-icons option-button script">
                                <i class="fa-solid fa-superscript"></i>
                            </button>
                            <button id="subscript" class="editor-icons option-button script">
                                <i class="fa-solid fa-subscript"></i>
                            </button>
                
                            <button id="insertOrderedList" class="editor-icons option-button">
                                <div class="fa-solid fa-list-ol"></div>
                            </button>

                            <button id="insertUnorderedList" class="editor-icons option-button">
                                <i class="fa-solid fa-list"></i>
                            </button>
                
                            <button id="undo" class="editor-icons option-button">
                                <i class="fa-solid fa-rotate-left"></i>
                            </button>
                            <button id="redo" class="editor-icons option-button">
                                <i class="fa-solid fa-rotate-right"></i>
                            </button>
                
                            <button id="createLink" class="editor-icons adv-option-button">
                                <i class="fa fa-link"></i>
                            </button>
                            <button id="unlink" class="editor-icons option-button">
                                <i class="fa fa-unlink"></i>
                            </button>

                            <button id="justifyLeft" class="editor-icons option-button align">
                                <i class="fa-solid fa-align-left"></i>
                            </button>
                            <button id="justifyCenter" class="editor-icons option-button align">
                                <i class="fa-solid fa-align-center"></i>
                            </button>
                            <button id="justifyRight" class="editor-icons option-button align">
                                <i class="fa-solid fa-align-right"></i>
                            </button>
                            <button id="justifyFull" class="editor-icons option-button align">
                                <i class="fa-solid fa-align-justify"></i>
                            </button>
                            <button id="indent" class="editor-icons option-button spacing">
                                <i class="fa-solid fa-indent"></i>
                            </button>
                            <button id="outdent" class="editor-icons option-button spacing">
                                <i class="fa-solid fa-outdent"></i>
                            </button>

                            <select id="formatBlock" class="adv-option-button">
                                <option value="H1">H1</option>
                                <option value="H2">H2</option>
                                <option value="H3">H3</option>
                                <option value="H4">H4</option>
                                <option value="H5">H5</option>
                                <option value="H6">H6</option>
                            </select>
                            <select id="fontName" class="adv-option-button"></select>
                            <select id="fontSize" class="adv-option-button"></select>
                
                            <div class="input-wrapper">
                                <input type="color" id="foreColor" class="adv-option-button">
                                <label for="foreColor">Font Color</label>
                            </div>
                            <div class="input-wrapper">
                                <input type="color" id="backColor" class="adv-option-button">
                                <label for="backColor">Highlight Color</label>
                            </div>

                            <button id="" class="editor-icons option-button spacing" onclick="toggleFullscreen()">
                                <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                            </button>

                        </div>
                    </nav>
        
                    <div class="h-70 p-5" id="text-input" contenteditable="true" spellcheck="true"></div>

                    <div class="bg-demo text-dark p-3 m-3">
                        <div class="" style="height: 80px;">
                            GOOGLE ADS SPACE
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/editor.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
