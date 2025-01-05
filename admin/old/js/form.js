let writingArea = document.getElementById("text-input"),
    blogForm = document.getElementById('blogForm'),
    hiddenContent = document.getElementById('hiddenContent');


//Handle image upload

function formatDoc(cmd, value = null) {
    document.execCommand(cmd, false, value);
}


function uploadImage(input) {
    if (input.files && input.files[0]) {
        const formData = new FormData();
        formData.append('image', input.files[0]);

        fetch('../upload_image.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const img = document.createElement('img');
                    img.src = data.imageUrl;
                    img.style.maxWidth = '100%';
                    document.getElementById('text-input').appendChild(img);
                } else {
                    alert('Upload failed: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Upload failed');
            });
    }
}



// Prevent Enter key from submitting the form when focused on writingArea
document.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && !e.shiftKey && e.target === writingArea) {
        e.preventDefault();
    }
});

// Insert a new line in the writing area instead of submitting the form
writingArea.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        document.execCommand('insertLineBreak');
    }
});




// Prevent form submission on Enter press in any input field
blogForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Set the value of hiddenContent to the innerHTML of writingArea
        hiddenContent.value = writingArea.innerHTML;
        this.submit();
        this.reset();
        alert('Form submitted successfully!');
});

//Handle buttons default behavior
document.querySelectorAll('button').forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
    })
})