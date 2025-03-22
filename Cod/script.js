document.getElementById('postForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let name = document.getElementById('title').value;
        let email = document.getElementById('email').value;

        // Use Fetch API to send data to insert.php
        fetch('insert.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            // Format the data as a URL-encoded string
            body: 'title=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email)
        })
        .then(response => response.text())
        .then(data => {
            // Display the response from the server
            console.log(data);
            document.getElementById('message').textContent = 'پۆستەکەت بەسەرکەوتووی نێردرا!';
            alert(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
