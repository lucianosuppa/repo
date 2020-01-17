import threading
import random
import time

class Carrera(threading.Thread):
    def __init__(self,caminoRecorrido):
        super().__init__()
        self.caminoRecorrido = caminoRecorrido

    def run(self):
        while self.caminoRecorrido < 100:
            time.sleep(3.0/100.0)
            self.caminoRecorrido += random.randint(1,15)
        print ('gano el caballo',threading.current_thread().getName())

for numero in range(4):
    Caballo = Carrera(0)
    Caballo.start()