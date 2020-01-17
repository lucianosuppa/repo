import threading
import time

class Carrera(threading.Thread):
    def __init__(self,cantCaballos,metros):
        super().__init__()
        self.cantCaballos = cantCaballos
        self.metros = metros

    def run(self):
        while 

caballos = []
for n in range(0,self.cantCaballos):
    caballos.append(n)
    print (caballos[n])

play = Carrera(4,100)
play.start()
play.join()