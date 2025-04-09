const proxyUrl = 'https://cors-anywhere.herokuapp.com/';
const targetUrl = 'https://static.whatsapp.net/rsrc.php/v4/yR/r/ERz6pNGhHp8.js';

fetch(proxyUrl + targetUrl, { method: 'GET', headers: headers })
    .then(response => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then(data => {
        document.getElementById("responseText").textContent = `Resource fetched successfully:\n${data}\n\nTarget nomor yang dibanned: ${bannedNumber}`;
    })
    .catch(error => {
        document.getElementById("responseText").textContent = `Error fetching resource: ${error.message}`;
    });
