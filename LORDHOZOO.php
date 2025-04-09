<?php

// Prompt the user to input a phone number
echo "Masukkan nomor (contoh: +62XXXXXXXXXX): ";
$bannedNumber = trim(fgets(STDIN));

// URL to fetch the resource
$url = "https://static.whatsapp.net/rsrc.php/v4/yR/r/ERz6pNGhHp8.js";

// Headers to pass with the request
$headers = [
    "Accept: */*",
    "Accept-Encoding: gzip, deflate, br, zstd",
    "Accept-Language: en-US,en;q=0.9",
    "Origin: https://faq.whatsapp.com",
    "Priority: u=1",
    "Referer: https://faq.whatsapp.com/",
    "Sec-Ch-Ua: \"Chromium\";v=\"124\", \"Google Chrome\";v=\"124\", \"Not-A.Brand\";v=\"99\"",
    "Sec-Ch-Ua-Mobile: ?0",
    "Sec-Ch-Ua-Platform: \"Windows\"",
    "Sec-Fetch-Dest: script",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Site: cross-site",
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36"
];

// Function to fetch the resource
function fetch_resource($url, $headers) {
    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL session and store the result
    $response = curl_exec($ch);

    // Check if cURL executed successfully
    if (curl_errno($ch)) {
        echo "Error fetching resource: " . curl_error($ch) . "\n";
    } else {
        echo "Resource fetched successfully:\n";
        echo $response . "\n";
        // Add logic to process the fetched resource and ban the number here
        echo "Target nomor yang dibanned: $bannedNumber\n";
    }

    // Close cURL session
    curl_close($ch);
}

// Call the function
fetch_resource($url, $headers);

?>
