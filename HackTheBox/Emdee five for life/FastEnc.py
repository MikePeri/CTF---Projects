#! /usr/bin/env python3.8
import requests
import hashlib
import html2text
import time
from bs4 import BeautifulSoup
start =time.time()
url = "http://134.209.29.219:30896/"
session = requests.session()
r = session.get(url)
print(time.time()-start)
#print(r.text)
soup = BeautifulSoup(r.text, 'lxml')

heading = soup.find('h3')
heading_data = heading.text
value = heading_data.encode()
encrypt = hashlib.md5(value).hexdigest()
p = session.post(url,data={"hash" : str(encrypt)})
print(time.time()-start)
print(p.text)

