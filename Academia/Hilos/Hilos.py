import threading
from datetime import datetime, date, time, timedelta
import calendar

class Ejercicio(threading.Thread):

    def __init__(self):
        super().__init__()
        self.milis = 0

    def milisegundos (self):
        mili = datetime.now()
        self.milis = mili.microsecond
        return self.milis

    def funcion(self):
        return format(threading.currentThread().getName())

hilos = []

for n in range(0,10):
    hilos.append(Ejercicio())

for hilo in hilos:
    hilo.start()

for n in range(0,10):
    hilos[n].join()

for hilo in hilos:
    print (Ejercicio.funcion(hilo), ': muestra :', Ejercicio.milisegundos(hilo))