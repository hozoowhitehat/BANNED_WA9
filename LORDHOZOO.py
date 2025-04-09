import requests

# Prompt the user to input a phone number
bannedNumber = input("Masukkan nomor (contoh: +62XXXXXXXXXX): ")

# URL to fetch the resource
url = "https://static.whatsapp.net/rsrc.php/v4/yR/r/ERz6pNGhHp8.js"

# Headers to pass with the request
headers = {
    "Accept": "*/*",
    "Accept-Encoding": "gzip, deflate, br, zstd",
    "Accept-Language": "en-US,en;q=0.9",
    "Origin": "https://faq.whatsapp.com",
    "Priority": "u=1",
    "Referer": "https://faq.whatsapp.com/",
    "Sec-Ch-Ua": '"Chromium";v="124", "Google Chrome";v="124", "Not-A.Brand";v="99"',
    "Sec-Ch-Ua-Mobile": "?0",
    "Sec-Ch-Ua-Platform": '"Windows"',
    "Sec-Fetch-Dest": "script",
    "Sec-Fetch-Mode": "cors",
    "Sec-Fetch-Site": "cross-site",
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36"
}

# Function to fetch the resource
def fetch_resource():
    try:
        response = requests.get(url, headers=headers)
        response.raise_for_status()  # Raise an HTTPError for bad responses (4xx or 5xx)
        print ("Resource fetched successfully:")
        print (response.text)
        # Add logic to process the fetched resource and ban the number here
        print (f"Target nomor yang dibanned: {bannedNumber}")
    except requests.exceptions.RequestException as e:
        print (f"Error fetching resource: {e}")

# Call the function
fetch_resource()
