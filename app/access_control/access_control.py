from time import sleep
import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522
import requests
# from gpiozero import Buzzer

# def buzz():
#     buzzer.on()
#     sleep(1)
#     buzzer.off()

# def redlight():
#     GPIO.output(red, GPIO.HIGH)
#     sleep(1)
#     red.off()

# Set the URL of the Laravel route
url = 'http://127.0.0.1:8000/start-rfid-scanning'
headers = {
    'Content-Type': 'application/json',
}
# red = GPIO(20)
# green = GPIO(16)
# buzzer = Buzzer(17)
reader = SimpleMFRC522()
tag_id = None
while tag_id is None:
    tag_id = reader.read_id()
    print(tag_id)
    data = {
        'tag_id': tag_id
    }
    response = requests.post(url, headers=headers, json=data)
    if response.status_code == 200:
        print('Request sent successfully!')
        # GPIO.output(16, GPIO.HIGH)
        # buzz()
    else:
        print('Request failed with status code:', response.status_code)
        # GPIO.output(20, GPIO.HIGH)
        # buzz()
    # sleep(1)
    # GPIO.output(16, GPIO.LOW)
    # GPIO.output(20, GPIO.LOW)
    sleep(5)
    tag_id = None


