def masLarga (l1 ,l2):
    if len(l1) > len(l2):
        return l1
    else:
        return l2

nombre1 = "Pepepepepe"
nombre2 = "Chirizo"
res = masLarga (nombre1 ,nombre2)
print(res)

def cantE(e):
    i=0
    count=0
    while i<len(e):
        if e[i]=='e':
            count = count + 1
        i=i+1
    return count
        
lista1 = list("pepe")
e = cantE(lista1)
print (e)

def cambiarVocales(palabra):
    i=0
    for x in palabra:
        if x == "a":
            print ("_")
        elif x == "e":
            print ("_")
        elif x == "i":
            print ("_")
        elif x == "o":
            print ("_")
        elif x == "u":
            print ("_")
        else:
            print (x)
    return palabra
    
palabra = list("abecedario")
result = cambiarVocales(palabra)

def mezclar(nombre1,nombre2,a):
    i=0
    for x in nombre1:
        a[i] = x
        i=i+2
        end=""
    i=1
    for x in nombre2:
        a[i] = x
        i=i+2
        end=""
nombre1 = list("pepe")
nombre2 = list("jose")
a = list(list(nombre1 + nombre2))
resultado = mezclar(nombre1,nombre2,a)
print (resultado)