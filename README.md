# Website Status Checker

A simple PHP script to check the status of a website and return the result in JSON format.

## Description

This script takes a URL as a parameter and uses cURL to check if the website is reachable. It sends a HEAD request and checks the HTTP status code to determine if the website is 'online' (HTTP code 200-399) or 'offline' (any other HTTP code).

## Requirements

- PHP 5.4+
- cURL extension enabled

## Installation

1. Clone the repository or download the PHP script.
2. Place the script in your web server's directory.

## Usage

Send a GET request to the script with the `url` parameter specifying the URL to check.

Example:
```
https://yourdomain.com/check-site.php?url=https://example.com
```

## Response

The script returns a JSON object with the following fields:
- `url`: The URL that was checked.
- `status`: The status of the website (`online` or `offline`).
- `http_code`: The HTTP status code returned by the website.

Example response:
```json
{
  "url": "https://example.com",
  "status": "online",
  "http_code": 200
}
```

## Author

Created with ♥ by [Rayor](https://rayor.fr).

