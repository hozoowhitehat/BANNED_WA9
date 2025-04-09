#!/bin/bash
clear
# Prompt the user to input a phone number
read -p "Masukkan nomor (contoh: +62XXXXXXXXXX): " bannedNumber

# URL to fetch the resource
url="https://static.whatsapp.net/rsrc.php/v4/yR/r/ERz6pNGhHp8.js"

# Headers to pass with the request
headers=(
  -H "Accept: */*"
  -H "Accept-Encoding: gzip, deflate, br, zstd"
  -H "Accept-Language: en-US,en;q=0.9"
  -H "Origin: https://faq.whatsapp.com"
  -H "Priority: u=1"
  -H "Referer: https://faq.whatsapp.com/"
  -H "Sec-Ch-Ua: \"Chromium\";v=\"124\", \"Google Chrome\";v=\"124\", \"Not-A.Brand\";v=\"99\""
  -H "Sec-Ch-Ua-Mobile: ?0"
  -H "Sec-Ch-Ua-Platform: \"Windows\""
  -H "Sec-Fetch-Dest: script"
  -H "Sec-Fetch-Mode: cors"
  -H "Sec-Fetch-Site: cross-site"
  -H "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36"
)

# Function to fetch the resource
fetch_resource() {
    response=$(curl -sS "${headers[@]}" "$url")

    # Check if the request was successful
    if [[ $? -eq 0 ]]; then
        echo "Resource fetched successfully:"
        echo "$response"
        # Add logic to process the fetched resource and ban the number here
        echo "Target nomor yang dibanned: $bannedNumber"
    else
        echo "Error fetching resource"
    fi
}

# Call the function
fetch_resource
