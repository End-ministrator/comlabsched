from time import sleep
import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522
import requests

# Set to BCM
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

# Configure the serial port

reader = SimpleMFRC522()
tag_id = None

# Set the URL of the Laravel route
url = 'http://127.0.0.1:8000/start-rfid-scanning'
headers = {'Content-Type': 'application/json',}

while tag_id is None:
    tag_id = reader.read_id()
    data = {'tag_id': tag_id}
    response = requests.post(url, headers=headers, json=data)
    if response.status_code == 200:
        print('Request sent successfully!')
        data = "Granted"
    else:
        print('Request failed with status code:', response.status_code)
        data = "Denied"
    tag_id = None
