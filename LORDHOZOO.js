const axios = require('axios');

const bannedNumber = '+62XXXXXXXXXX'; // Replace with the target number

const headers = {
    'Accept': '*/*',
    'Accept-Encoding': 'gzip, deflate, br, zstd',
    'Accept-Language': 'en-US,en;q=0.9',
    'Origin': 'https://faq.whatsapp.com',
    'Priority': 'u=1',
    'Referer': 'https://faq.whatsapp.com/',
    'Sec-Ch-Ua': '"Chromium";v="124", "Google Chrome";v="124", "Not-A.Brand";v="99"',
    'Sec-Ch-Ua-Mobile': '?0',
    'Sec-Ch-Ua-Platform': '"Windows"',
    'Sec-Fetch-Dest': 'script',
    'Sec-Fetch-Mode': 'cors',
    'Sec-Fetch-Site': 'cross-site',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36'
};

const url = 'https://static.whatsapp.net/rsrc.php/v4/yR/r/ERz6pNGhHp8.js';

async function fetchResource() {
    try {
        const response = await axios.get(url, { headers });
        console.log('Resource fetched successfully:', response.data);
        // Add logic to process the fetched resource and ban the number
    } catch (error) {
        console.error('Error fetching resource:', error);
    }
}

fetchResource();
