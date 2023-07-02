import sys
import os
import subprocess
from time import sleep
import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522
import requests
import serial

# Set to BCM
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

# Configure the serial port
ser = serial.Serial('/dev/ttyUSB0', 9600)  # Update the port name if necessary

reader = SimpleMFRC522()
tag_id = None

def restart():
    python = sys.executable
    os.execl(python, python, * sys.argv)

# def changeport():
#     ser = serial.Serial('/dev/ttyUSB1', 9600)  # Update the port name if necessary

def runTest():
    subprocess.run(["python", "test.py"])

# Set the URL of the Laravel route
url = 'labsched.local/start-rfid-scanning'
headers = {'Content-Type': 'application/json',}

try:
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
        ser.write(data.encode())
        sleep(10)
        tag_id = None

except:
    try:
        runTest()
    except:
        restart()
