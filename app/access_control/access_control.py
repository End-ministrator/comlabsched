import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

reader = SimpleMFRC522()

try:
    tag_id, _ = reader.read()
    print(tag_id)
finally:
    GPIO.cleanup()
