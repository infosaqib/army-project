let optionsButtons = document.querySelectorAll(".option-button"),
  advancedOptionButton = document.querySelectorAll(".adv-option-button"),
  fontName = document.getElementById("fontName"),
  fontSizeRef = document.getElementById("fontSize"),
  linkButton = document.getElementById("createLink"),
  alignButtons = document.querySelectorAll(".align"),
  spacingButtons = document.querySelectorAll(".spacing"),
  formatButtons = document.querySelectorAll(".format"),
  scriptButtons = document.querySelectorAll(".script");

//List of fontlist
let fontList = [
  "Arial",
  "Verdana",
  "Times New Roman",
  "Garamond",
  "Georgia",
  "Courier New",
  "cursive",
];

//Initial Settings
const initializer = () => {
  //function calls for highlighting buttons
  //No highlights for link, unlink,lists, undo,redo since they are one time operations
  highlighter(alignButtons, true);
  highlighter(spacingButtons, true);
  highlighter(formatButtons, false);
  highlighter(scriptButtons, true);

  //create options for font names
  fontList.map((value) => {
    let option = document.createElement("option");
    option.value = value;
    option.innerHTML = value;
    fontName.appendChild(option);
  });

  // Update font size options
  fontSizeRef.innerHTML = ''; // Clear existing options
  [0.7, 1, 1.5, 2, 2.5, 3].forEach(size => {
    let option = document.createElement("option");
    option.value = size;
    option.innerHTML = size + 'em';
    fontSizeRef.appendChild(option);
  });

  fontSizeRef.value = 1;
}
//main logic
const modifyText = (command, defaultUi, value) => {
  if (command === 'fontSize') {
    const selection = window.getSelection();
    if (selection.toString().length > 0) {
      const range = selection.getRangeAt(0);
      const span = document.createElement('span');
      span.style.fontSize = `${value}em`;
      range.surroundContents(span);
    }
  } else {
    document.execCommand(command, defaultUi, value);
  }
};

//For basic operations which don't need value parameter
optionsButtons.forEach((button) => {
  button.addEventListener("click", () => {
    modifyText(button.id, false, null);
  });
});

//options that require value parameter (e.g colors, fonts)
advancedOptionButton.forEach((button) => {
  button.addEventListener("change", () => {
    modifyText(button.id, false, button.value);
  });
});

//link
linkButton.addEventListener("click", () => {
  let userLink = prompt("Enter a URL");
  //if link has http then pass directly else add https
  if (/http/i.test(userLink)) {
    modifyText(linkButton.id, false, userLink);
  } else {
    userLink = "http://" + userLink;
    modifyText(linkButton.id, false, userLink);
  }
});

//Highlight clicked button
const highlighter = (className, needsRemoval) => {
  className.forEach((button) => {
    button.addEventListener("click", () => {
      //needsRemoval = true means only one button should be highlight and other would be normal
      if (needsRemoval) {
        let alreadyActive = false;

        //If currently clicked button is already active
        if (button.classList.contains("active")) {
          alreadyActive = true;
        }

        //Remove highlight from other buttons
        highlighterRemover(className);
        if (!alreadyActive) {
          //highlight clicked button
          button.classList.add("active");
        }
      } else {
        //if other buttons can be highlighted
        button.classList.toggle("active");
      }
    });
  });
};

const highlighterRemover = (className) => {
  className.forEach((button) => {
    button.classList.remove("active");
  });
};

window.onload = initializer();
