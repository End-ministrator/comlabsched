import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

reader = SimpleMFRC522()
while True:
    tag_id, _ = reader.read()
    print(tag_id)
<<<<<<< HEAD
finally:
    GPIO.cleanup()
=======
    GPIO.cleanup()
>>>>>>> 516b15ac5e8beba788150697da81424cc9c046ac
