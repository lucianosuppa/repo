import threading
import time

class semaforo(threading.Thread):
    def __init__(self,name):
        super().__init__()
        self.name = name

    def run(self):
        name = self.name
        print ('Esta el color ', name)
        time.sleep(1)


rojo = semaforo('rojo')
Amarillo = semaforo('Amarillo')
Verde = semaforo('Verde')
i=0
while (i<3):
    rojo.start()
    rojo.join()
    Amarillo.start()
    Amarillo.join()
    Verde.start()
    Verde.join()