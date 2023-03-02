import requests
from bs4 import BeautifulSoup

# URL of the page to scrape
url = 'https://stackoverflow.com/questions/tagged/python'

# Send a GET request to the URL
response = requests.get(url)

# Parse the HTML content of the response using BeautifulSoup
soup = BeautifulSoup(response.content, 'html.parser')

# Find all the question links on the page
question_links = soup.find_all('a', class_='s-link' )

# Print the text of each question link
for link in question_links:
    print(link.text)
