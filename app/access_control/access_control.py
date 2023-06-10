import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

reader = SimpleMFRC522()
tag_id = None
while tag_id is None:
    tag_id = reader.read_id()
    print(tag_id)
