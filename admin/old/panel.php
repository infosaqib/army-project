<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Editor</title>
       <!-- FontAwesome Icons -->
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="stylesheets/panel.css" />
</head>
<body>
    <form id="blogForm" method="POST" action="save_post.php" enctype="multipart/form-data">
        <div class="container">
            <input type="text" id="title" name="title" placeholder="Enter blog title">
            <div class="options">
                <!-- Text Format -->
                <button id="bold" class="option-button format" title="Bold">
                  <i class="fa-solid fa-bold"></i>
                </button>
                <button id="italic" class="option-button format" title="Italic">
                  <i class="fa-solid fa-italic"></i>
                </button>
                <button id="underline" class="option-button format" title="Underline">
                  <i class="fa-solid fa-underline"></i>
                </button>
                <button id="strikethrough" class="option-button format" title="Strike through">
                  <i class="fa-solid fa-strikethrough"></i>
                </button>
                <button id="superscript" class="option-button script" title="Superscript">
                  <i class="fa-solid fa-superscript"></i>
                </button>
                <button id="subscript" class="option-button script" title="Subscript">
                  <i class="fa-solid fa-subscript"></i>
                </button>
        
                <!-- List -->
                <button id="insertOrderedList" class="option-button" title="OrderedList">
                  <div class="fa-solid fa-list-ol"></div>
                </button>
                <button id="insertUnorderedList" class="option-button" title="UnorderedList">
                  <i class="fa-solid fa-list"></i>
                </button>
        
                <!-- Undo/Redo -->
                <button id="undo" class="option-button" title="Undo">
                  <i class="fa-solid fa-rotate-left"></i>
                </button>
                <button id="redo" class="option-button" title="Redo">
                  <i class="fa-solid fa-rotate-right"></i>
                </button>
        
                <!-- Link -->
                <button id="createLink" class="adv-option-button" title="Hyperlink">
                  <i class="fa fa-link"></i>
                </button>
                <button id="unlink" class="option-button" title="Unlink">
                  <i class="fa fa-unlink"></i>
                </button>
        
                <!-- Alignment -->
                <button id="justifyLeft" class="option-button align" title="Justify left">
                  <i class="fa-solid fa-align-left"></i>
                </button>
                <button id="justifyCenter" class="option-button align" title="Justify center">
                  <i class="fa-solid fa-align-center"></i>
                </button>
                <button id="justifyRight" class="option-button align" title="Justify right">
                  <i class="fa-solid fa-align-right"></i>
                </button>
                <button id="justifyFull" class="option-button align" title="Justify full">
                  <i class="fa-solid fa-align-justify"></i>
                </button>
                <button id="indent" class="option-button spacing" title="Indent">
                  <i class="fa-solid fa-indent"></i>
                </button>
                <button id="outdent" class="option-button spacing" title="Outdent">
                  <i class="fa-solid fa-outdent"></i>
                </button>
        
                <!-- Headings -->
                <select id="formatBlock" class="adv-option-button">
                  <option value="H1">H1</option>
                  <option value="H2">H2</option>
                  <option value="H3">H3</option>
                  <option selected value="H4">H4</option>
                  <option value="H5">H5</option>
                  <option value="H6">H6</option>
                </select>
        
                <!-- Font -->
                <select id="fontName" class="adv-option-button"></select>
                <select id="fontSize" class="adv-option-button"></select>
                <div class="input-wrapper">
                    <button style="height: 40px;width: 40px;"  title="Insert image" type="button" class="option-button" onclick="document.getElementById('imageUpload').click()">
                        <i class="fa-solid fa-image" style="font-size: 1.75rem;"></i>
                    </button>
                    <input  type="file" id="imageUpload" accept="image/*" style="display: none;" onChange="uploadImage(this)">
                </div>
                <!-- Color -->
                <div class="input-wrapper">
                  <input type="color" id="foreColor" class="adv-option-button" />
                  <label for="foreColor">Font Color</label>
                </div>
                <div class="input-wrapper">
                  <input type="color" id="backColor" class="adv-option-button" />
                  <label for="backColor">Highlight Color</label>
                </div>
               
              </div>
              <!-- Text Area -->
          
              <div id="text-input" contenteditable="true" spellcheck="true"></div>
            <input type="hidden" name="content" id="hiddenContent">
            <input type="submit" class="submit-btn" value="Publish Post">
        </div>
    </form>
    <!--Scripts-->
  <script src="js/form.js"></script>
  <script src="js/script.js"></script>
  </body>
</html>

